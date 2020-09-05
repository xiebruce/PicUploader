var defaultSaveTips = '可按“ctrl+s(Win)”或“cmd+s(Mac)”保存';

function showSaveTips (msg, expire){
	//显示保存成功提示
	$('.show-save-tip .show-save-tip-text').html(msg);
	$('.show-save-tip').slideDown(function (){
		var $this = $(this);
		setTimeout(function (){
			$this.slideUp();
		}, expire);
	});
}

//保存设置
function saveSettings(method){
	$.ajax({
		type: 'post',
		url: './settings/dispatch.php?func='+method,
		data: $('.cloud-setting').serialize(),
		dataType: 'json',
		success: function (response){
			if(response.code==0){
				showSaveTips(response.msg, 1500);
			}
		}
	});
}

//ajax上传图片递归上传多张图片
function uploadFiles(files){
	if(files.length==0){
		return false;
	}
	let file = files.shift();
	let isImg = file.type.substr(0, 5) == 'image' ? true : false;
	
	var firstUnuploaded = $('.drop-area .uploaded-image-container .un-uploaded:first');
	//状态由“未上传”改为“上传中...”
	firstUnuploaded.find('.image-mask').html('上传中...');
	
	var formData = new FormData();
	formData.append('web', file);
	
	$.ajax({
		type: 'post',
		url: './index.php',
		data: formData,
		contentType: false,
		processData: false,
		dataType: 'json',
		xhr: function(){
			let xhr = new XMLHttpRequest();
			//监听上传进度事件
			xhr.upload.addEventListener('progress', function (e){
				if (e.lengthComputable) {
					let progress = e.loaded / e.total;
					progress = Math.round(progress * 10000) / 100 + '%';
					console.log(progress);
					$('.upload-progress').html(progress);
				}
			},false);
			return xhr;
		},
		success: function (response){
			var data = response.data;
			if(response.code=='success'){
				//移除未上传类名及遮罩
				firstUnuploaded.removeClass('un-uploaded').find('.image-mask').remove();
				//在上传图片那一行显示返回的markdown链接
				$('.click-upload-image-parent .show-returned-url').append(data.url + '\n');
				let copyBtn =
					`<div class="copy-image-url" data-clipboard-text='${data.url}' alt="Copy to clipboard" title="Copy to clipboard">
					<img width="16" src="/static/images/clippy.svg">
					<div class="copied">Copied!</div>
				</div>`;

				//上传成功后，即添加复制url按钮
				firstUnuploaded.append(copyBtn);
				// 用js点击复制图片按钮，把图片链接复制到剪贴板
				// 这一句只有在mac的google浏览器能起作用，因为基于安全原因，
				// 很多浏览器不允许用js去click这个按钮来把内容复制到剪贴板，
				// 必须用真正的鼠标来点击才能复制，所以这句在大多数浏览器下其实并不管用
				firstUnuploaded.find('.copy-image-url').click();
				if(isImg){
					//真正的图片要等加载之后，再替换过去(因为这个图片是有水印的，而一开始显示的是直接从真正的源文件里读取的base64，并没有水印)
					var imgObj = new Image();
					imgObj.src = data.notFormatUrl;
					imgObj.onload = function (e){
						//图片加载完成后，替换原先显示的图
						firstUnuploaded.find('.drop-area-image').attr({
							"src": data.notFormatUrl,
							"alt": data.filename,
							"title": data.filename,
						});
					}
				}
				
				//继续上传第二张
				uploadFiles(files);
			}
		},
		error: function (error){
			console.log(error.responseText);
		}
	});
}


let fileList = new Array();
//显示多张本地图片，显示完后调用uploadFiles上传图片
function showLocalImages(files){
	//第一次传进来的files是对象而不是数组，所以要把它转成数组
	if(!(files instanceof Array)){
		var fileArr = new Array();
		//对象转数组
		for(let i in files){
			if(!isNaN(parseInt(i))){
				fileArr.push(files[i]);
			}
		}
		files = fileArr;
	}else{
		//files数组为空(即全部用shift()取出来了)时，表示全部图片显示完成，开始上传
		if(files.length==0){
			//ajax上传图片
			uploadFiles(fileList);
			return false;
		}
	}
	
	//取出一个文件
	let file = files.shift();
	//每取出一张，就放到fileList数组里，然后显示这张图片，当全部取完，就表示全部显示完了，就可以开始上传了
	fileList.push(file);
	
	let reader = new FileReader();  //读取文件
	//定义onload事件，但必须要readAsDataURL之后onload事件才会触发
	reader.onload = function(){
		//上传之前先显示本地图片
		let img = '<img class="drop-area-image" src="' + reader.result + '">';
		//如果不是图片文件而是其它文件(如：text/zip等等)
		if(reader.result.substr(0, 10) !== 'data:image'){
			img = '<div class="drop-area-div">' + file.name + '</div>';
		}
		
		let imgBox =
			`<div class="uploaded-image-box un-uploaded">
				${img}
				<div class="image-mask">未开始</div>
			</div>`;
		
		if($('.drop-area .uploaded-image-container .uploaded-image-box').length){
			$('.drop-area .uploaded-image-container').append(imgBox);
		}else{
			$('.drop-area .uploaded-image-container').html(imgBox);
		}
		//显示一张之后，再次显示
		showLocalImages(files);
	}
	reader.readAsDataURL(file);
}

/**
 * 获取当前tab值(如果没有自动添加)
 * @param param
 * @param defaultValue
 * @returns {number|string}
 */
function getParam(param, defaultValue){
	let queryStr = window.location.search.toString();
	let reg = new RegExp('.*'+param+'=([^&\n?]*)&*.*', 'gi');
	let ret = reg.exec(queryStr);
	let value = defaultValue;
	if(ret!=null && ret[1]!=undefined){
		value = ret[1];
	}else{
		setParam(param, defaultValue);
	}
	return value;
}

/**
 * 设置当前tab值
 * @param param
 * @param value
 */
function setParam(param, value){
	if(typeof(value)=='string'){
		value = value.trim();
		value = encodeURIComponent(value);
	}
	//window.location.href可以获取到整个完整的url(包括"#"号锚点)
	let curUrl = window.location.href.toString();
	//window.location.search用于获取url中的"?a=1&b=2&b=3……",但不包括#号及其后面的, substr(1)是去掉"?"号
	let queryStr = window.location.search.toString();
	
	//为了后面统一组装字符串
	let arr = [curUrl,''];
	//这样做是为了处理带#号的锚点
	let queryStrEmpty = true;
	if(queryStr!==''){
		queryStrEmpty = false;
		arr = curUrl.split(queryStr);
	}else if(curUrl.indexOf('#') > -1){
		arr = curUrl.split('#');
	}
	let reg = new RegExp('(.*)('+param+'=)([^&\n?]*)(&*)(.*)', 'gi');
	let ret = reg.exec(queryStr);
	//如果没有匹配到就添加该参数
	if(ret==null){
		let separater = '?';
		//如果第一个字符是"?"号，则把分隔符换成"&"
		if(queryStr.indexOf('?')===0){
			separater = '&';
		}
		queryStr = queryStr + separater + param + '=' + value;
	}else{
		//如果匹配到了就替换该参数的值
		queryStr = queryStr.replace(reg, '$1' + '$2' +value + '$4' + '$5' );
	}
	if(queryStrEmpty && curUrl.indexOf('#') > -1){
		//url中有#号(#号后面的肯定是锚点名，所以#号肯定在最后，把queryStr插入到#号之前，再把之前根据#号分割成的数组连起来)
		curUrl = arr.join(queryStr+'#');
	}else{
		curUrl = arr.join(queryStr);
	}
	window.history.replaceState('', '', curUrl);
}

//jQuery入口函数
$(document).ready(function (){
	// ============================ 显示对应tab start ============================
	let tabName = 'tab';
	let tabName2 = 'tab2';
	let curTab = 0;
	let curTab2 = 0;
	setTimeout(function (){
		curTab = getParam(tabName, 0);
		curTab2 = getParam(tabName2, 0);
		//2就是第三个，因为第一个是0，而第三个是选存储云
		if(curTab == 2){
			$('.sub-left-bar .list .cloud').eq(curTab2).click();
		}else{
			$('.left-bar .icons').eq(curTab).click();
		}
	}, 100);
	// ============================ 显示对应tab end ============================
	
	$(document).on('scroll', function (e){
		$('.container .body .left-bar').height($('.form-area').outerHeight());
	});
	
	//显示隐藏云服务器菜单
	$('.cloud-storage').on({
		'mouseenter': function (){
			$('.sub-left-bar').show();
		},
		'mouseleave': function (){
			$('.sub-left-bar').hide();
		}
	});
	
	//显示隐藏云服务器菜单
	$('.cloud-setting').on({
		'mouseenter': function (){
			$(this).find('.copy-image-url').fadeIn();
		},
		'mouseleave': function (){
			$(this).find('.copy-image-url').fadeOut();
		}
	}, '.uploaded-image-box');
	
	//点击某个云
	$('.sub-left-bar .list .cloud').on('click', function (e){
		//防止冒泡(否则会跟父级的操作死循环)
		e.stopPropagation();
		
		showSaveTips(defaultSaveTips, 2000);
		
		//设置tab值(用于设置云图标处于选中状态)
		setParam(tabName, 2);
		//设置tab2值(用于设置是哪个云)
		setParam(tabName2, $(this).index());
		
		var $this = $(this);
		var key = $(this).data('key');
		var cloudName = $(this).html();
		$.ajax({
			type: 'get',
			url: './settings/dispatch.php?func=getStorageParams',
			data: {
				key: key,
			},
			dataType: 'json',
			success:function (response){
				if(response.code==0 || response.code==1){
					var html = '';
					var data = response.data;
					var value = '';
					for(var key2 in data){
						value = response.code==0 ? data[key2] : data[key2]
						html +=	`<div class="form-group">
										<label>${key2}</label>
										<input class="text" type="text" name="${key2}" placeholder="请输入${key2}" value="${value}"><span></span>
									</div>`;
						value = '';
					}
					var authentication = '';
					let oauthServers = ['onedrive', 'googledrive', 'dropbox', 'imgur', 'azure', 'flickr', ];
					if(oauthServers.findIndex((element)=>(element==key)) > -1){
						let oauth = response.oauth;
						if(oauth!=undefined){
							if(oauth.authorized === false){
								authentication = '<input id="authorize" class="authorize" type="button" value="点击获取'+key+'授权">';
							}else{
								authentication = '<input class="authorize authorized" type="button" value="已获取'+key+'授权"><input id="authorize" class="authorize" type="button" value="重新获取'+key+'授权"><br>(注意:在已获取授权的情况下，点击"重新获取授权"，除了GoogleDrive会重新显示同意页面，其它的，你的感觉就是刷新了一下，但其实已经重新获取了，重新获取的原因：当上传一直失败时，可以尝试重新获取一下授权，另外如果你更换了账号，也需要重新获取！)';
							}
						}
					}
					html = `<div class="area">
								<div class="form-group2-area">${cloudName}</div>
								${html}
							</div>
							<div class="area">
								<div class="form-group">
									<input class="save-button" type="button" value="保存">
									${authentication}
									<input type="hidden" name="key" value="${key}">
									<input type="hidden" name="name" value="${cloudName}">
								</div>
							</div>`;
					$('.cloud-setting').html(html);
					$('.cloud-setting .save-button').data('key', key);
					
					//高亮点击的项
					$this.addClass('active').siblings().removeClass('active');
					$('.left-bar .icons').removeClass('active');
					$this.parents('.cloud-storage').addClass('active');
				}
			},
			error: function (error){
				console.log(error);
			}
		});
	});
	
	//点击保存云存储参数
	$('.cloud-setting').on('click', '.save-button', function (){
		saveSettings('set-storage-params');
	});
	
	//点击获取onedrive/googledrive/dropgox/imgur等授权
	$('.cloud-setting').on('click', '#authorize', function (){
		let key = $(this).parent().find('input[name="key"]').val();
		$.ajax({
			type: 'post',
			url: './settings/dispatch.php?func=getAuthUrl',
			data: {
				key: key,
				uri: window.location.href,
			},
			dataType: 'json',
			success: function (response){
				if(response.code == 0){
					// console.log(response.authUrl);
					window.location.href = response.authUrl;
				}
			}
		});
		return false;
	});
	
	//选择自定义返回链接时，显示自定义链接输入框，否则隐藏
	$('.cloud-setting').on('change', 'select[name="linkType"]', function (){
		if($(this).val()=='custom') {
			$('.custom-link-type').show();
		}else{
			$('.custom-link-type').hide();
		}
	});
	
	//点击选择图片水印和文字水印
	$('.cloud-setting').on('change', '.watermark-type-label', function (){
		var watermarkType = $(this).find('input').val();
		if(watermarkType == 'text'){
			$('.text-watermark').show();
			$('.text-watermark .font-file-name').show();
			$('.image-watermark').hide();
			$(this).find('input').attr('checked', 'checked');
			$(this).next().find('input').removeAttr('checked');
		}
		if(watermarkType == 'image'){
			$('.image-watermark').show();
			$('.text-watermark').hide();
			$(this).find('input').attr('checked', 'checked');
			$(this).prev().find('input').removeAttr('checked');
		}
	});
	
	//点击添加水印图片
	$('.cloud-setting').on('click', '.upload-watermark', function (){
		$('.watermark-image-file').click();
	});
	
	//图片水印onchange
	$('.cloud-setting').on('change', '.watermark-image-file', function (){
		let file = $(this).get(0).files[0];
		let matchArr = file.type.match(/image\/(jpeg|png)/);
		if(!matchArr){
			alert("只允许上传jpg或png格式图片");
			return false;
		}
		let reader = new FileReader();  //本地预览
		//定义onload事件，但必须要readAsDataURL之后onload事件才会触发
		reader.onload = function(){
			$('.watermark-image').attr('src', reader.result).show();
		}
		reader.readAsDataURL(file);
		
		var formData = new FormData();
		formData.append('watermark', file);
		$.ajax({
			type: 'post',
			url: './settings/dispatch.php?func=uploadWatermarkImage',
			data: formData,
			contentType: false,
			processData: false,
			dataType: 'json',
			xhr: function(){
				let xhr = new XMLHttpRequest();
				//监听上传进度事件
				xhr.upload.addEventListener('progress', function (e){
					if (e.lengthComputable) {
						let progress = e.loaded / e.total;
						progress = Math.round(progress * 10000) / 100 + '%';
						console.log(progress);
						// $('.upload-progress').html(progress);
					}
				},false);
				return xhr;
			},
			success: function (response){
				if(response.code==0){
					$('input[name="watermark[image][watermark]"]').val(response.path);
				}
			}
		})
	});
	
	//文字水印字体文件onchange
	$('.cloud-setting').on('change', '.text-watermark-font', function (){
		let file = $(this).get(0).files[0];
		if(!/.*\.ttf/.test(file.name)){
			alert("只能上传\".ttf\"字体文件");
			return false;
		}
		
		var formData = new FormData();
		formData.append('font-file', file);
		$.ajax({
			type: 'post',
			url: './settings/dispatch.php?func=uploadFontFile',
			data: formData,
			contentType: false,
			processData: false,
			dataType: 'json',
			xhr: function(){
				let xhr = new XMLHttpRequest();
				//监听上传进度事件
				xhr.upload.addEventListener('progress', function (e){
					if (e.lengthComputable) {
						let progress = e.loaded / e.total;
						progress = Math.round(progress * 10000) / 100 + '%';
						console.log(progress);
						// $('.upload-progress').html(progress);
					}
				},false);
				return xhr;
			},
			success: function (response){
				if(response.code==0){
					$('input[name="watermark[text][fontFile]"]').val(response.path);
					$('input[name="watermark[text][fontFileName]"]').val(response.name);
					$('.text-watermark .font-file-name').html(response.name).show();
				}
			}
		})
	});
	
	//点击启用水印
	$('.cloud-setting').on('change', 'input[name="watermark[useWatermark]"]', function (){
		if($(this).prop('checked')){
			$('.watermark-type').show();
			var watermarkTypeObj = $('input[name="watermark[type]"]:checked');
			if(watermarkTypeObj.length){
				var watermarkType = watermarkTypeObj.val();
				if(watermarkType=='text'){
					$('.text-watermark').show();
					$('.text-watermark .font-file-name').show();
				}
				if(watermarkType=='image'){
					$('.image-watermark').show();
				}
			}else{
				$('input[name="watermark-type"]').eq(0).prop('checked', true);
				$('.text-watermark').show();
				$('.text-watermark .font-file-name').show();
			}
		}else{
			$('.watermark-type, .text-watermark, .image-watermark').hide();
		}
	});
	
	//处理ctrl+s / cmd+s 保存
	var ctrlPressed = false;
	var cmdPressed = false;
	$(document).on('keydown', function (e){
		if(e.keyCode==17){
			ctrlPressed = true;
		}
		if(e.keyCode==91){
			cmdPressed = true;
		}
		if((ctrlPressed || cmdPressed) && e.keyCode==83){
			console.log('按了ctrl+s或cmd+s保存');
			var method = '';
			if($('.save-button:visible').length){
				method = 'set-storage-params';
			}
			if($('.save-button2:visible').length){
				method = 'set-general-settings';
			}
			saveSettings(method);
			return false;
		}
	});
	$(document).on('keyup', function (e){
		if(e.keyCode==17){
			ctrlPressed = false;
		}
		if(e.keyCode==91){
			cmdPressed = false;
		}
	});
	
	//点击左侧栏的上传图片选项
	$('.left-bar .upload-image').on('click', function (){
		//设置tab值
		setParam(tabName, 0);
		$('.left-bar .icons').removeClass('active');
		$('.sub-left-bar .list li').removeClass('active');
		$(this).addClass('active');
		
		//获取当前的目录
		let directoryStr = '';
		$.ajax({
			type: 'get',
			url: './settings/dispatch.php?func=get-common-used-dir',
			data: {
			
			},
			async: false,
			dataType: 'json',
			success: function (response){
				if(response.code == 0){
					let data = response.data;
					let selected = '';
					if(data.commonUsedDirs!=null && data.commonUsedDirs!=undefined){
						for (let i = 0; i<data.commonUsedDirs.length; i++){
							selected = data.curVal == data.commonUsedDirs[i] ? ' selected' : '';
							directoryStr += '<option value="'+data.commonUsedDirs[i]+'"'+selected+'>'+data.commonUsedDirs[i]+'</option>';
						}
					}
					directoryStr = '<option value="/">-- 根目录 --</option>' + directoryStr;
				}
			},
			error: function (error){
				console.log(error);
			}
		});
		
		var dropAreaHtml = `
				<div class="upload-to-folder">
					<label>上传到</label>
					<select name="upload-dest-dir">
						${directoryStr}
					</select>
					<i class="fa fa-question-circle-o question"></i>
				</div>
				<div class="drop-area">
					<div class="uploaded-image-container">
						<div class="drop-area-tips">
							“拖动图片到这里”以上传<br>
							“截图后在这里粘贴”以上传<br>
							“复制图片后在这里粘贴”以上传<br>
						</div>
					</div>
				</div>
				<div class="click-upload-image-parent">
					<input type="file" class="click-upload-image" multiple="multiple" >
					<div class="show-returned-url"></div>
					<div class="click-upload-image-btn" alt="选择文件" title="选择文件">选择文件</div>
				</div>`;
		$('.cloud-setting').html(dropAreaHtml);
		
		//拖放/粘贴图片以上传
		$('.drop-area').on({
			'dragenter': function(e){
				e.stopPropagation();
				e.preventDefault();
			},
			'dragover': function(e){
				e.stopPropagation();
				e.preventDefault();
			},
			'drop': function (e){
				e.stopPropagation();
				e.preventDefault();
				var dataTransfer = e.originalEvent.dataTransfer;
				if(dataTransfer.files.length > 0){
					showLocalImages(dataTransfer.files);
				}
				return false;
			},
			'paste': function (e){
				e.stopPropagation();
				e.preventDefault();
				
				let file = null;
				let items = event.clipboardData && event.clipboardData.items;
				//不管粘贴几张图片，只会有一个text/plain和一个image/png对象，不管是什么格式图片都会被转成png格式。
				for (let i in items) {
					if (items[i]!=undefined && items[i].type!=undefined && items[i].type.indexOf('image') !== -1) {
						file = items[i].getAsFile();
					}
				}
				//调用上传图片方法
				if(file){
					showLocalImages([file]);
				}
			},
		});
	});
	
	//提示修改上传目录
	$('.cloud-setting').on('click', '.upload-to-folder .question', function (){
		alert('该设置会修改所有可配置上传目录的云服务器配置中的上传目录为所选目录！注意根目录默认不会生效，需要先切换到其他的再切换到根目录才会生效！');
	});
	
	//上传界面设置上传目录(该设置将会设置所有storageType的directory为选中的值)
	$('.cloud-setting').on('change', '.upload-to-folder select[name="upload-dest-dir"]', function (){
		let directory = $(this).val();
		$.ajax({
			type: 'post',
			url: './settings/dispatch.php?func=set-allstorage-type-directory',
			data: {
				directory: directory,
			},
			dataType: 'json',
			success: function (response){
				// console.log(response);
				if(response.code == '0'){
					showSaveTips('目录切换成功', 1500);
				}
			},
			error: function (error){
				console.log(error);
			}
		});
	});
	
	//上传图片按钮→选择图片上传
	$('.cloud-setting').on('change' , '.click-upload-image', function (e){
		let files = $(this).get(0).files;
		if (files.length) {
			showLocalImages(files);
		}
	})
	
	//点击复制图片url
	var clipboard = new ClipboardJS('.copy-image-url');
	clipboard.on('success', function(e) {
		$(e.trigger).find('.copied').fadeIn();
		setTimeout(function (){
			$(e.trigger).find('.copied').fadeOut(800);
		}, 1000);
		// console.info('Action:', e.action);
		// console.info('Text:', e.text);
		// console.info('Trigger:', e.trigger);
		e.clearSelection();
	});
	
	clipboard.on('error', function(e) {
		console.error('Action:', e.action);
		console.error('Trigger:', e.trigger);
	});
	
	//点击上传字体文件
	$('.cloud-setting').on('click', '.click-upload-image-btn', function (){
		$('.click-upload-image').click();
	});
	
	//点击上传字体文件
	$('.cloud-setting').on('click', '.upload-font-file', function (){
		$('.text-watermark-font').click();
	});
	
	//通用设置
	$('.general-setting').on('click', function (){
		//设置tab值为1
		showSaveTips(defaultSaveTips, 2000);
		setParam(tabName, 1);
		var $this = $(this);
		$.ajax({
			type: 'get',
			url: './settings/dispatch.php?func=get-general-settings',
			data: {
				//由于是获取之前保存的配置，所以没有参数需要传
			},
			dataType: 'json',
			success: function (response){
				$('.left-bar .icons').removeClass('active');
				$('.sub-left-bar .list li').removeClass('active');
				$this.addClass('active');
				
				var data = response.data;
				var storageType = data.storageType;
				var storageTypeHtml = '';
				var checked = '';
				for(var i in storageType){
					checked = (storageType[i].isActive != undefined && storageType[i].isActive==1) ? ' checked' : '';
					storageTypeHtml +=
						`<label><input type="checkbox" name="storageType[${i}][isActive]" value="1"${checked}>${storageType[i].name}</label>
						<input type="hidden" name="storageType[${i}][name]" value="${storageType[i].name}">`;
				}
				let commonUsedDirStr = '';
				if(data.commonUsedDirs!=null && data.commonUsedDirs!=undefined){
					commonUsedDirStr = data.commonUsedDirs.join('\n')
				}
				let reverseProxyDomain = '';
				if(data.reverseProxyDomain!=undefined && data.reverseProxyDomain!=null){
					reverseProxyDomain = data.reverseProxyDomain;
				}
				let useReverseProxyDomain = '';
				if(data.useReverseProxyDomain!=undefined && data.useReverseProxyDomain!=null){
					useReverseProxyDomain = data.useReverseProxyDomain;
				}
				
				var generalSettingsForm =
					`<div class="area">
						<div class="form-group2-area">存储引擎</div>
						<div class="form-group2 storage-types">
							${storageTypeHtml}
						</div>
					</div>
					<div class="area">
						<div class="form-group2-area">图片压缩</div>
						<div class="form-group2">
							<label>压缩到原图的</label>
							<input class="percentage" type="number" name="resizeOptions[percentage]" placeholder="0-100" value="${data.resizeOptions.percentage}"><span>% (100%表示不压缩)</span>
						</div>
						<div class="form-group2">
							<label>宽度超过该值时压缩</label>
							<input class="widthGreaterThan" type="number" name="resizeOptions[widthGreaterThan]" placeholder="" value="${data.resizeOptions.widthGreaterThan}"><span>px</span>
						</div>
						<div class="form-group2">
							<label>高度超过该值时压缩</label>
							<input class="heightGreaterThan" type="number" name="resizeOptions[heightGreaterThan]" placeholder="" value="${data.resizeOptions.heightGreaterThan}"><span>px</span>
						</div>
						<div class="form-group2">
							<label>文件大小超过该值时压缩</label>
							<input class="sizeBiggerThan" type="number" name="resizeOptions[sizeBiggerThan]" placeholder="" value="${data.resizeOptions.sizeBiggerThan}"><span>kb</span>
						</div>
						<div class="form-group2 quality">
							<label>JPEG图片压缩质量</label>
							<input class="text" type="number" name="quality" placeholder="0-100" value="${data.quality}"><span>%</span>
						</div>
						<div class="form-group2 compreLevel">
							<label>PNG图片压缩等级</label>
							<input class="text" type="number" name="compreLevel" placeholder="0-9" value="${data.compreLevel}"><span>0-9，非百分比(0不压缩)</span>
						</div>
					</div>
					<div class="area">
						<div class="form-group2-area">文件名配置</div>
						<div class="form-group2">
							<label class="filename-format">文件名格式</label>
							<input class="filename-format-value" type="text" placeholder="{Y}-{m}-{d}-{H}-{i}-{s}-{random:16}" name="fileNameFormat" value="${data.fileNameFormat==undefined ? '' : data.fileNameFormat}">
							<div>替换变量：{origin}原始文件名, {Y}当前年, {m}当前月, {d}当前日, {H}当前小时, {i}当前分, {s}当前秒, {timestamp}当前时间戳, {random:8}随机字符串(8为长度，为避免文件覆盖，至少8位，设置8以下的数值会自动使用8位，最多100位)，留空或未使用任何替换变量则默认使用32位md5加密文件名，注意该设置只对能自定义文件名的存储引擎起效果，并且这里最好不要使用“/”作为分隔符，因为对象存储会把“/”分隔的文件名当成目录。<br>例：{Y}-{m}-{d}-{H}-{i}-{s}-{random:16}，产生的文件名格式为：2019-07-26-15-16-55-mQVAiII4Ff8PNXfb.png</div>
						</div>
					</div>
					<div class="area">
						<div class="form-group2">
							<label>返回链接类型</label>
							<select name="linkType">
								<option value="normal"${data.linkType=='normal'?' selected':''}>普通链接</option>
								<option value="markdown"${data.linkType=='markdown'?' selected':''}>Markdown格式</option>
								<option value="markdownWithLink"${data.linkType=='markdownWithLink'?' selected':''}>带链接的Markdown格式</option>
								<option value="custom"${data.linkType=='custom'?' selected':''}>custom</option>
							</select>
						</div>
						<div class="form-group2 custom-link-type">
							<label>自定义返回链接格式</label>
							<textarea name="customFormat" rows="5" cols="30" placeholder="<p align=&quot;center&quot;><img src=&quot;{{url}}&quot; title=&quot;{{name}}&quot; alt=&quot;{{name}}&quot;></p>">${data.customFormat!=undefined?data.customFormat:''}</textarea>
						</div>
						<div class="form-group2 video-link-type">
							<label>视频返回链接格式</label>
							<textarea name="videoFormat" rows="5" cols="30" placeholder="<video controls name=&quot;media&quot; title=&quot;{{name}}&quot; width=&quot;935&quot;>><source src=&quot;{{url}}&quot; type=&quot;video/mp4&quot;></video>&quot;">${data.videoFormat}</textarea>
						</div>
						<div class="form-group2 audio-link-type">
							<label>音频返回链接格式</label>
							<textarea name="audioFormat" rows="5" cols="30" placeholder="<audio controls name=&quot;media&quot; title=&quot;{{name}}&quot; width=&quot;400&quot; src=&quot;{{url}}&quot; title=&quot;{{name}}&quot;>">${data.audioFormat}</textarea>
						</div>
						<div class="form-group2 log-path">
							<label>存储日志路径</label>
							<input class="text" type="text" name="logPath" placeholder="存储日志路径" value="${data.logPath}"><span></span>
						</div>
						<div class="form-group2">
							<label>允许同时上传文件数</label>
							<input class="text" type="number" name="maxNum" placeholder="允许同时上传文件数" value="${data.maxNum}"><span></span>
						</div>
						<div class="form-group2">
							<label>常用目录(每行一个)</label>
							<textarea name="commonUsedDir" cols="30" rows="5">${commonUsedDirStr}</textarea>
						</div>
						<div class="form-group reverse-proxy-domain">
							<label>反向代理域名</label>
							<input class="text" type="text" name="reverseProxyDomain" placeholder="请填写你的统一反向代理域名" value="${reverseProxyDomain}">
							<label class="useReverseProxyDomain">
							启用<input type="checkbox" name="useReverseProxyDomain" value="1"${useReverseProxyDomain=='1'?' checked':''}>
							</label>
							<span></span>
						</div>
					</div>
					<div class="area">
						<div class="form-group2-area">数据库配置</div>
						<div class="form-group2 database">
							<label class="database-dsn-label">DSN</label>
							<input class="database-dsn" type="text" name="database[dsn]" placeholder="mysql:host=127.0.0.1:3306;dbname=PicUploader" value="${data.database.dsn}"><br>
							<span>留空自动使用sqlite，如使用mysql/MariaDB，则dbname指定的是数据库名(该库必须在mysql中已存在)，表会自动创建！</span>
						</div>
						<div class="form-group2 database">
							<label class="database-dsn-label">Username</label>
							<input class="database-username" type="text" name="database[username]" placeholder="mysql:host=127.0.0.1:3306;dbname=PicUploader" value="${data.database.username}"><span>默认使用sqlite不用填</span>
						</div>
						<div class="form-group2 database">
							<label class="database-dsn-label">Password</label>
							<input class="database-password" type="text" name="database[password]" placeholder="mysql:host=127.0.0.1:3306;dbname=PicUploader" value="${data.database.password}"><span>默认使用sqlite不用填</span>
						</div>
					</div>
					<div class="area">
						<div class="form-group2-area">水印</div>
						<div class="form-group2">
							<label>启用水印</label>
							<input class="text" type="checkbox" name="watermark[useWatermark]" value="1"${data.watermark.useWatermark==1?' checked':''}>
						</div>
						<div class="form-group2 watermark-type">
							<label>水印类型</label>
							<label class="watermark-type-label"><input class="text" type="radio" name="watermark[type]" value="text"${data.watermark.type=='text'?' checked':''}>文字水印</label>
							<label class="watermark-type-label"><input class="text" type="radio" name="watermark[type]" value="image"${data.watermark.type=='image'?' checked':''}>图片水印</label>
						</div>
						<div class="text-watermark">
							<div class="form-group2-area">文字水印设置</div>
							<div class="form-group2 text-watermark-words">
								<label>水印文字</label>
								<input class="text" type="text" name="watermark[text][words]" placeholder="水印文字" value="${data.watermark.text.words}"><span></span>
							</div>
							<div class="form-group2">
								<label>水印字体</label>
								<span class="font-file-name">${data.watermark.text.fontFileName}</span>
								<input class="upload-font-file" type="button" value="上传">
								<input class="text-watermark-font" type="file" placeholder="水印字体">
								<input name="watermark[text][fontFile]" type="hidden" value="${data.watermark.text.fontFile}">
								<input name="watermark[text][fontFileName]" type="hidden" value="${data.watermark.text.fontFileName}">
							</div>
							<div class="form-group2 text-watermark-fontSize">
								<label>水印文字大小</label>
								<input class="text" type="number" name="watermark[text][fontSize]" placeholder="" value="${data.watermark.text.fontSize}"><span>px</span>
							</div>
							<div class="form-group2 text-watermark-color">
								<label>水印文字颜色</label>
								<input class="text" type="text" name="watermark[text][color]" value="${data.watermark.text.color}"><span></span>
							</div>
							<div class="form-group2 text-watermark-angle">
								<label>水印旋转角度</label>
								<input class="text" type="number" name="watermark[text][angle]" placeholder="" value="${data.watermark.text.angle}"><span>°</span>
							</div>
							<div class="form-group2 text-watermark-offset">
								<label>水印偏移</label>
								<input class="text" type="text" name="watermark[text][offset][x]" placeholder="横向" value="${data.watermark.text.offset.x}"><span>px</span>
								<input class="text" type="text" name="watermark[text][offset][y]" placeholder="纵向" value="${data.watermark.text.offset.y}"><span>px</span>
							</div>
							<div class="form-group2">
								<label>水印位置</label>
								<select name="watermark[text][position]">
								<option value="top-left"${data.watermark.text.position=='top-left'?' selected':''}>左上</option>
								<option value="top-right"${data.watermark.text.position=='top-right'?' selected':''}>右上</option>
								<option value="bottom-left"${data.watermark.text.position=='bottom-left'?' selected':''}>左下</option>
								<option value="bottom-right"${data.watermark.text.position=='bottom-right'?' selected':''}>右下</option>
								<option value="center-left"${data.watermark.text.position=='center-left'?' selected':''}>左中</option>
								<option value="center-right"${data.watermark.text.position=='center-right'?' selected':''}>左中</option>
								<option value="center-top"${data.watermark.text.position=='center-top'?' selected':''}>上中</option>
								<option value="center-bottom"${data.watermark.text.position=='center-bottom'?' selected':''}>下中</option>
								<option value="center"${data.watermark.text.position=='center'?' selected':''}>居中</option>
								</select>
							</div>
						</div>

						<div class="image-watermark">
							<div class="form-group2-area">图片水印设置</div>
							<div class="form-group2">
								<label>水印图片</label>
								<img class="watermark-image" src="${data.watermark.image.watermark}" alt="水印图片" title="水印图片">
								<input class="upload-watermark" type="button" value="上传">
								<input class="watermark-image-file" type="file" placeholder="水印图片">
								<input name="watermark[image][watermark]" type="hidden" value="${data.watermark.image.watermark}">
							</div>
							<div class="form-group2 image-watermark-alpha">
								<label>水印透明度</label>
								<input class="text" type="number" name="watermark[image][alpha]" placeholder="0-100" value="${data.watermark.image.alpha}"><span></span>
							</div>
							<div class="form-group2">
								<label>水印偏移</label>
								<input class="image-watermark-offset" type="number" name="watermark[image][offset][x]" placeholder="横向" value="${data.watermark.image.offset.x}"><span>px</span>
								<input class="image-watermark-offset" type="number" name="watermark[image][offset][y]" placeholder="纵向" value="${data.watermark.image.offset.y}"><span>px</span>
							</div>
							<div class="form-group2">
								<label>水印位置</label>
								<select name="watermark[image][position]">
								<option value="top-left"${data.watermark.image.position=='top-left'?' selected':''}>左上</option>
								<option value="top-right"${data.watermark.image.position=='top-right'?' selected':''}>右上</option>
								<option value="bottom-left"${data.watermark.image.position=='bottom-left'?' selected':''}>左下</option>
								<option value="bottom-right"${data.watermark.image.position=='bottom-right'?' selected':''}>右下</option>
								<option value="center-left"${data.watermark.image.position=='center-left'?' selected':''}>左中</option>
								<option value="center-right"${data.watermark.image.position=='center-right'?' selected':''}>左中</option>
								<option value="center-top"${data.watermark.image.position=='center-top'?' selected':''}>上中</option>
								<option value="center-bottom"${data.watermark.image.position=='center-bottom'?' selected':''}>下中</option>
								<option value="center"${data.watermark.image.position=='center'?' selected':''}>居中</option>
								</select>
							</div>
						</div>
					</div>
					<div class="area">
						<div class="form-group2">
							<input class="save-button2" type="button" value="保存">
						</div>
					</div>`;
				
				//把设置相关的form表单写入到dom中
				$('.cloud-setting').html(generalSettingsForm);
				
				if(data.watermark.useWatermark == "1"){
					$('.watermark-type').show();
					if(data.watermark.type=='image'){
						$('.image-watermark').show();
						$('input[name="watermark[type]"]').eq(1).prop('checked', true);
					}else{
						$('.text-watermark').show();
						$('.text-watermark .font-file-name').show();
						$('input[name="watermark[type]"]').eq(0).prop('checked', true);
					}
				}
				
				//初始化spectrum拾色器
				$('.text-watermark-color input[name="watermark[text][color]"]').spectrum({
					showAlpha: true,
					/*
					show: function(tinycolor) {
						console.log('show color: '+ tinycolor);
					},
					beforeShow: function(tinycolor) {
						console.log('before showing color picker: ' + tinycolor);
					},*/
					move: function(tinycolor) {
						$('.text-watermark-color input[name="watermark[text][color]"]').val(tinycolor.toRgbString())
					},
					hide: function(tinycolor) {
						$('.text-watermark-color input[name="watermark[text][color]"]').val(tinycolor.toRgbString());
					},
				});
				//放弃这个ColorPicker插件，改用spectrum
				// rgbaColorPicker.init()
			}
		});
	});
	
	//保存通用设置
	$('.cloud-setting').on('click', '.save-button2', function (){
		saveSettings('set-general-settings');
	});
	
	//通用设置
	$('.cloud-storage').on('click', function (){
		setParam(tabName, 1);
		$(this).find('.sub-left-bar .list .cloud').eq(0).click();
	});
	
	//点击查看历史
	$('.left-bar .upload-history').on('click', function (){
		setParam('history', 1);
		window.location.reload();
	});
	
	//================== 图片放大 开始 ======================
	//初始化图片放大插件
	var viewer = ImageViewer({
		zoomValue:100,
		maxZoom:500,
		snapView:true,
		refreshOnResize:true,
		zoomOnMouseWheel:true,
	});
	
	//点击放大图片
	$('.cloud-setting').on('click','.watermark-image, .drop-area-image', function (e){
		e.stopPropagation();
		var src = $(this).attr('src');
		viewer.show(src, src);
	});
	
	//================== 图片放大 结束 ======================
});