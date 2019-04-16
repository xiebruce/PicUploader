(function($,exports){
  $.fn.extend({
    pasteImage: function(callback){
      var util = {
        /*
        *  @function:
        *    从指定类继承，并且带简单数据构造器
        *  @params:
        *    parent 0个构造参数的父类，默认Object
        *  @return:
        *    子类，可以访问父类的prototype属性
        */
        extend: function(parent){
          /*
          *  @example:
          *    if the param construct={name: "nadel"};
          *    then the function construct will like:
          *    function(name){
          *      this.name = name;
          *    }
          */
          parent = parent || Object;
          var fn = function(construct){
            var attribute = "";
            for(attribute in construct){
              if(Object.prototype.hasOwnProperty.call(construct, attribute)){
                this[attribute] = construct[attribute];
              }
            }
          };
          fn.prototype = new parent();
          strategys.push(fn);
          
          return fn;
        },
        /*
        *  @function:
        *    遍历数组中的object，根据正则匹配指定属性
        *  @params:
        *    array object数组
        *    property object属性
        *    regex object属性值正则表达式
        *  @return:
        *    匹配到的object数组
        */
        getProperty: function(array, property, regex){
          var result = [],
              i = 0;
          for(i = 0; i<array.length; i++){
            if(regex.test(array[i][property])){
              result.push(array[i]);
            }
          }
          return result;
        },
        /*
        *  @function:
        *    将image document对象转换为DataUrl
        *  @params:
        *    element: image document对象，可以用document.getElementById获取
        *    type: 生成的图片类型，例如：image/png，默认为image/png
        *  @return:
        *    DataUrl
        */
        imageToDataUrl: function(element, type){
          type = type || "image/png";
          try{
            //利用canvas获取图片的DataUrl，但受跨域限制
            var canvas = document.createElement('canvas'),
                ctx = canvas.getContext('2d'),
                result = "";
            canvas.width = element.width;
            canvas.height = element.height;
            ctx.drawImage(element, 0, 0);
            result = canvas.toDataURL(type);
            if(result === "data:,"){
              result = "";
            }
            
            return result;
          }catch(e){
            //目标服务器不允许跨域访问资源
            return "";
          }
        },
        /*
        *  @functions:
        *    将一个类数组中的数据push到真正的数组中
        *  @params:
        *    array 数组
        *    arrayLike 类数组
        */
        arrayLikePush: function(array, arrayLike){
          var i = 0;
          for(i = 0;i<arrayLike.length;i++){
            array.push(arrayLike[i]);
          }
        }
      },
      strategys = [],
      strategy = {},
      i = 0;
      
      //算法类(接口)
      var Strategy = function(){};
      Strategy.prototype.exec = function(){
        //意在必须重写
        throw new Error("The method 'chrome' must be override!");
      };
      Strategy.prototype.isSuport = function(){
        throw new Error("The method 'chrome' must be override!");
      };
      
      //谷歌浏览器算法
      var Chrome = util.extend(Strategy);
      Chrome.prototype.exec = function(){
        var that = this;
        that.$element.on("paste",function(event){
          var items = (event.clipboardData || event.originalEvent.clipboardData).items,
              //取出html对象
              htmlBlobs = util.getProperty(items, "type", /^text\/html$/im),
              imgElements = [],
              loadedCount = 0,
              htmlImages = [],
              htmlResults = [],
              reader = {},
              parseFinish = function(){
                var $html = {},
                    $imageLoadDiv = {};
                
                if(htmlResults.length === htmlBlobs.length){
                  //解析html中的图片
                  for(k = 0;k<htmlResults.length;k++){
                    $html = htmlResults[k].replace(/\n|\r|\n\r/g, "");
                    $html = $html.replace("<html><body>", "<div>");
                    $html = $html.replace("</body></html>", "</div>");
                    $html = $($html);
                    util.arrayLikePush(imgElements, $html.find("img"));
                  }
                  //图片预加载
                  $("body").append(imageLoadDiv);
                  $imageLoadDiv = $("#paste_image_load");
                  for(k = 0; k<imgElements.length; k++){
                    imgElements[k].onload = imgOnload;
                    $imageLoadDiv.append(imgElements[k]);
                  }
                }
              },
              loadFinish = function(){
                var dataurl = "",
                    k = 0;
                if(imgElements.length === loadedCount){
                  //尝试将图像dom转换成dataurl，如果失败，返回img src
                  for(k = 0;k<imgElements.length;k++){
                    dataurl = "";
                    dataurl = util.imageToDataUrl(imgElements[k]);
                    if(dataurl){
                      htmlImages.push(dataurl);
                    }else{
                      htmlImages.push(imgElements[k].getAttribute("src"));
                    }
                  }
                  
                  $("#paste_image_load").remove();
                  
                  //返回结果
                  that.callback(htmlImages);
                }
              },
              imgOnload = function(){
                loadedCount = loadedCount+1;
                loadFinish();
              },
              imageLoadDiv = "<div id='paste_image_load' style='height: 0;width: 0;display: none;'></div>",
              i = 0;
          
          //提取html对象中的图片
          for(i = 0;i<htmlBlobs.length;i++){
            htmlBlobs[i].getAsString(function(html){
              htmlResults.push(html);
              parseFinish();
            });
          }
        });
      };
      Chrome.prototype.isSuport = function(){
        return window.navigator.userAgent.toLowerCase().indexOf("chrome")>-1;
      };
      
      //火狐浏览器和IE11浏览器算法
      var FirefoxAndIE11 = util.extend(Strategy);
      FirefoxAndIE11.prototype.exec = function(){
        var that = this,
            clipboardDiv = "<div id='paste_content_catch' contentEditable='true' style='position: fixed;left: -9999px;top: -9999px; opacity: 0;'></div>",
            $clipboardDiv = {},
            i = 0;
        
        //初始化clipboard catch
        $("body").append(clipboardDiv);
        $clipboardDiv = $("#paste_content_catch");
        //监听ctrl+v事件
        that.$element.on("keydown",function(event){
          if(event.ctrlKey == 1 && event.keyCode == 86){
            $clipboardDiv.html("");
            $clipboardDiv.focus();
            //模拟多线程
            setTimeout(function(){
              var id = "paste_image_load_" + new Date().getTime(),
                  imageLoadDiv = "<div id='"+id+"' style='height: 0;width: 0;display: none;'></div>",
                  $imageLoadDiv = {},
                  imageElements = [],
                  images = [],
                  loadedCount = 0;
              
              //获取剪切板中的img元素
              imageElements = $clipboardDiv.find("img");
              //图片预加载
              $("body").append(imageLoadDiv);
              $imageLoadDiv = $("#"+id);
              for(i = 0;i<imageElements.length;i++){
                imageElements[i].onload = function(){
                  var dataurl = "",
                      k = 0;
                  
                  loadedCount = loadedCount+1;
                  if(imageElements.length === loadedCount){
                    //尝试将图像dom转换成dataurl，如果失败，返回img src
                    for(k = 0;k<imageElements.length;k++){
                      dataurl = "";
                      dataurl = util.imageToDataUrl(imageElements[k]);
                      if(dataurl){
                        images.push(dataurl);
                      }else{
                        images.push(imageElements[k].getAttribute("src"));
                      }
                    }
                    
                    $imageLoadDiv.remove();
                    
                    //返回结果
                    that.callback(images);
                  }
                };
                $imageLoadDiv.append(imageElements[i]);
              }
              imageElements = $imageLoadDiv.find("img");
              $clipboardDiv.html("");
              that.$element.focus();
            },0);
          }
        });
      };
      FirefoxAndIE11.prototype.isSuport = function(){
        var result = false;
        
        try{
          result = window.navigator.userAgent.toLowerCase().indexOf("firefox")>-1 || 
                   (Object.hasOwnProperty.call(window, "ActiveXObject") && !window.ActiveXObject);
        }catch(e){}
        
        return result;
      };
      
      //选择策略
      for(i = 0;i<strategys.length;i++){
        strategy = new strategys[i]({
          $element: $(this),
          callback: callback
        });
        
        if(strategy.isSuport()){
          strategy.exec();
          break;
        }
      }
    }
  });
})(jQuery,this);