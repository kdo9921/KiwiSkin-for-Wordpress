function isIE() {
    var agent = navigator.userAgent.toLowerCase();
    if ((navigator.appName == 'Netscape' && agent.indexOf('trident') != -1) || (agent.indexOf("msie") != -1)) {
        console.log("IE")
        noIE();
    }
}

window.onload = function () {
    isIE();
}

function noIE() {
    var body = document.getElementsByTagName('body')[0];
    body.innerHTML = '<div style="width:100%;height:100%;position:fixed;left:0;top:0;background: #ffffff">' +
        '<div style="width:768px;margin:auto;margin-top: 180px;text-align:center">' +
        '<h1>브라우저 지원안함</h1><p><?php bloginfo(' + "'name'" + '); ?>현재 사용하시는 브라우저를 지원하지 않습니다.<br>웹 표준을 준수하는 최신 브라우저를 이용해보세요.</p>' +
        '<ul style="display: inline-block;list-style: none;padding: 0;">' +
        '<li style="box-shadow: 0 0 6px rgba(0,0,0,0.2);display: inline-block;width: 140px; height: 160px;background: #f3f3f3;margin: 16px;border-radius: 4px;">' +
        '<a href="https://www.google.com/intl/ko/chrome/"><h3 style="margin: 0">&nbsp;</h3>' +
        '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Google_Chrome_icon_%28September_2014%29.svg/200px-Google_Chrome_icon_%28September_2014%29.svg.png" alt="" width="72px" height="72px">' +
        '<h3 style="font-size: 14px;font-weight:500">Google Chrome<br>&nbsp;</h3></a></li>' +
        '<li style="box-shadow: 0 0 6px rgba(0,0,0,0.2);display: inline-block;width: 140px; height: 160px;background: #f3f3f3;margin:16px;border-radius: 4px;">' +
        '<a href="https://www.mozilla.org/firefox/new/?utm_source=youtube.com&amp;utm_medium=referral&amp;utm_campaign=supported-browser">' +
        '<h3 style="margin: 0">&nbsp;</h3 >' +
        '<img src="https://www.mozilla.org/media/protocol/img/logos/firefox/browser/logo-lg-high-res.fbc7ffbb50fd.png" alt=""width="72px" height="72px" >' +
        '<h3 style="font-size: 14px;font-weight: 500">Mozilla Firefox<br>&nbsp;</h3 ></a ></li >' +
        '<li style="box-shadow: 0 0 6px rgba(0,0,0,0.2);display: inline-block;width:140px; height: 160px;background: #f3f3f3;margin: 16px;border-radius: 4px;" >' +
        '<a href="https://www.microsoft.com/edge"><h3 style="margin: 0">&nbsp;</h3>' +
        '<img src="https://upload.wikimedia.org/wikipedia/ko/thumb/9/98/Microsoft_Edge_logo_%282019%29.svg/256px-Microsoft_Edge_logo_%282019%29.svg.png" alt="" width="72px" height="72px">' +
        '<h3 style="font-size: 14px;font-weight: 500">Microsoft Edge<br>(Windows 10 전용)</h3></a></li>' +
        '<li style="box-shadow: 0 0 6px rgba(0,0,0,0.2);display: inline-block;width: 140px; height: 160px;background: #f3f3f3;margin: 16px;border-radius: 4px;" ><a href="https://www.apple.com/kr/safari/">' +
        '<h3 style="margin: 0">&nbsp;</h3 ><img src="https://km.support.apple.com/kb/image.jsp?productid=PL165&size=240x240" alt="" width="72px" height="72px">' +
        '<h3 style="font-size: 14px;font-weight: 500">Apple Safari<br>(macOS 전용)</h3></a></li></ul></div></div>';
}