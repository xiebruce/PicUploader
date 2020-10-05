let lastQueryStr = window.location.search.toString();

/**
 * 获取当前tab值(如果没有自动添加)
 * @param param
 * @param defaultValue
 * @returns {number|string}
 */
function getParam(param, defaultValue, queryStr){
    if(queryStr == undefined){
        queryStr = window.location.search.toString();
    }
    // let reg = new RegExp('(.*)('+param+'=)([^&\n?]*)(&*)(.*)', 'gi');
    let reg = new RegExp('.*'+param+'=([^&\n?]*)&*.*', 'gi');
    let ret = reg.exec(queryStr);
    let value = defaultValue;
    if(ret!=null && ret[1]!=undefined){
        value = ret[1];
        value = decodeURIComponent(value);
    }else{
        //如果没有初始值，则给url设置一个初始值
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
    }
    value = encodeURIComponent(value);
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
    // 保存当前queryStr到lastQueryStr变量中，点浏览器返回键时有用，比如从page=7点下一页page变成8，
    // 那么这里lastQueryStr保存的就是page=8的那个queryStr，而点浏览器返回按钮时，当前queryStr就变成
    // 了page=7的那个queryStr，而lastQueryStr此时还是page=8的那个queryStr，以此来对比返回前和返回后哪些参数发生了变化
    lastQueryStr = queryStr;
    
    //url中有#号(#号后面的肯定是锚点名，所以#号肯定在最后，把queryStr插入到#号之前，再把之前根据#号分割成的数组连起来)
    if(queryStrEmpty && curUrl.indexOf('#') > -1){
        curUrl = arr.join(queryStr+'#');
    }else{
        curUrl = arr.join(queryStr);
    }
    //pushState表示把当前url push到浏览器的历史记录数组中(入栈)，并且把
    // 当前url替换成这个新入栈的url，pop(出栈)时，最后进去的是最先出来的。
    console.log('lastQueryStr: ' + lastQueryStr);
    window.history.pushState('', '', curUrl);
}