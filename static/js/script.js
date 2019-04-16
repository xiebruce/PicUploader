//保存设置
function saveSettings(method){
	$.ajax({
		type: 'post',
		url: './settings/dispatch.php?func='+method,
		data: $('.cloud-setting').serialize(),
		dataType: 'json',
		success: function (response){
			if(response.code==0){
				//显示保存成功提示
				$('.show-save-tip .show-save-tip-text').html(response.msg);
				$('.show-save-tip').slideDown(function (){
					var $this = $(this);
					setTimeout(function (){
						$this.slideUp(800);
					}, 1500);
				});
			}
		}
	});
}

//上传图片
function uploadImage(file){
	let matchArr = file.type.match(/image\/(jpeg|png|gif)/);
	if(!matchArr){
		alert("只允许上传jpg/png/gif格式图片");
		return false;
	}
	let reader = new FileReader();  //本地预览
	//定义onload事件，但必须要readAsDataURL之后onload事件才会触发
	reader.onload = function(){
		// $('.watermark-image').attr('src', reader.result).show();
	}
	reader.readAsDataURL(file);
	
	var formData = new FormData();
	formData.append('mweb', file);
	
	//上传之前先显示图片框，里面显示上传进度
	var imgBox = `<div class="uploaded-image-box"><div class="upload-progress"></div><span>`;
	if($('.drop-area .uploaded-image-container .uploaded-image-box').length){
		$('.drop-area .uploaded-image-container').append(imgBox);
	}else{
		$('.drop-area .uploaded-image-container').html(imgBox);
	}
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
				//隐藏“拖动图片到这里以上传”文字
				var img = `<img class="drop-area-image" src="${data.url}" alt="${data.filename}" title="${data.filename}">
					<div class="copy-image-url" data-clipboard-text='![${data.filename}](${data.url})' alt="Copy to clipboard" title="Copy to clipboard">
						<img width="16" src="/static/images/clippy.svg">
						<div class="copied">Copied!</div>
					</div>`;
				var lastImage = $('.drop-area .uploaded-image-container .uploaded-image-box').last();
				$('.click-upload-image-parent .show-returned-url').html('!['+data.filename+']('+data.url+')');
				lastImage.html(img);
				lastImage.find('.copy-image-url').click();
			}
		}
	});
}

//jQuery入口函数
$(document).ready(function (){
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
	
	//设置云服务器参数
	$('.sub-left-bar .list .cloud').on('click', function (){
		$('.show-save-tip').slideDown();
		setTimeout(function (){
			$('.show-save-tip').slideUp(1000);
		}, 2000);
		
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
						value = response.code==0 ? data[key2] : ''
						html +=	`<div class="form-group">
										<label>${key2}</label>
										<input class="text" type="text" name="${key2}" placeholder="请输入${key2}" value="${value}"><span></span>
									</div>`;
						value = '';
					}
					html = `<div class="area">
								<div class="form-group2-area">${cloudName}</div>
								${html}
							</div>
							<div class="area">
								<div class="form-group">
									<input class="save-button" type="button" value="保存">
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
		console.log(watermarkType);
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
		console.log($(this).find('input'));
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
				console.log(response);
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
				console.log(response);
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
			console.log(watermarkTypeObj);
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
		$('.left-bar .icons').removeClass('active');
		$('.sub-left-bar .list li').removeClass('active');
		$(this).addClass('active');
		
		var dropAreaHtml = `
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
					<input type="file" class="click-upload-image">
					<div class="show-returned-url"></div>
					<div class="click-upload-image-btn" alt="点击上传文件" title="点击上传文件">点击上传文件</div>
				<div>`;
		$('.cloud-setting').html(dropAreaHtml);
	});
	
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
	
	//拖放/粘贴图片以上传
	$('.cloud-setting').on({
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
				var file = dataTransfer.files[0];
				//调用上传图片方法
				uploadImage(file);
			}
			return false;
		},
		'paste': function (e){
			e.stopPropagation();
			e.preventDefault();
			var items = event.clipboardData && event.clipboardData.items;
			var file = null;
			for (var i = 0; i < items.length; i++) {
				if (items[i]!=undefined && items[i].type!=undefined && items[i].type.indexOf('image') !== -1) {
					file = items[i].getAsFile();
					break;
				}
			}
			//调用上传图片方法
			if(file){
				uploadImage(file);
			}
			console.log(file);
		},
	}, '.drop-area');
	
	//点击上传字体文件
	$('.cloud-setting').on('click', '.click-upload-image-btn', function (){
		$('.click-upload-image').click();
	});
	//点击图片拖放区域选择文件上传
	$('.cloud-setting').on('change' , '.click-upload-image', function (e){
		let file = $(this).get(0).files[0];
		uploadImage(file);
	})
	
	//点击上传字体文件
	$('.cloud-setting').on('click', '.upload-font-file', function (){
		$('.text-watermark-font').click();
	});
	
	//通用设置
	$('.general-setting').on('click', function (){
		$('.show-save-tip').slideDown();
		setTimeout(function (){
			$('.show-save-tip').slideUp(1000);
		}, 2000);
		
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
				
				var allowMimeTypesHtml = '';
				var allowMimeTypes = data.allowMimeTypes;
				for(var i in allowMimeTypes){
					checked = (allowMimeTypes[i].isActive != undefined && allowMimeTypes[i].isActive==1) ? ' checked' : '';
					allowMimeTypesHtml += `<label>
<input type="checkbox" name="allowMimeTypes[${i}][isActive]" value="1"${checked}>${i}
<input type="hidden" name="allowMimeTypes[${i}][value]" value="${allowMimeTypes[i].value}"></label>`;
				}
				
				var generalSettingsForm = `
							<div class="area">
								<div class="form-group2-area">存储引擎</div>
								<div class="form-group2 storage-types">
									${storageTypeHtml}
								</div>
							</div>
							<div class="area">
								<div class="form-group2-area">图片压缩</div>
								<div class="form-group2">
									<label>压缩百分比</label>
									<input class="percentage" type="number" name="resizeOptions[percentage]" placeholder="0-100" value="${data.resizeOptions.percentage}"><span>%</span>
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
							</div>
							<div class="area">
								<div class="form-group2 quality">
									<label>JPEG图片压缩质量</label>
									<input class="text" type="number" name="quality" placeholder="0-100" value="${data.quality}"><span>%</span>
								</div>
								<div class="form-group2 compreLevel">
									<label>PNG图片压缩等级</label>
									<input class="text" type="number" name="compreLevel" placeholder="0-9" value="${data.compreLevel}"><span>数字0-9，非百分比</span>
								</div>
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
									<textarea name="customFormat" rows="5" cols="30" placeholder="<p align=&quot;center&quot;><img src=&quot;{{url}}&quot; title=&quot;{{name}}&quot; alt=&quot;{{name}}&quot;></p>">${data.customFormat}</textarea>
								</div>
								<div class="form-group2 log-path">
									<label>存储日志路径</label>
									<input class="text" type="text" name="logPath" placeholder="存储日志路径" value="${data.logPath}"><span></span>
								</div>
								<div class="form-group2 allowMimeTypes">
									<label class="allowMimeTypes-label-text">允许的图片MIME</label>
									${allowMimeTypesHtml}
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
										<input class="text color" type="text" name="watermark[text][color]" value="${data.watermark.text.color}"><span></span>
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
				
				//初始化拾色器
				rgbaColorPicker.init()
			}
		});
	});
	
	//保存通用设置
	$('.cloud-setting').on('click', '.save-button2', function (){
		saveSettings('set-general-settings');
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
	
	$('.left-bar .upload-image').click();
	
});