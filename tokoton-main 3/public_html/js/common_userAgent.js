function switcherGenerate(){var t=document.createElement("div");t.id="switcher",t.innerHTML='<p><a href="http://'+location.host+"/sp/\" onclick=\"return switch_view('not_visit', 'http://"+location.host+'/sp/\');"><img src="http://'+location.host+'/images/common/switcher-outer.jpg" width="100%" alt="スマートフォン用サイトはこちらからご覧いただけます" /></a></p>',document.getElementById("switcherOuter").appendChild(t)}function switch_view(t,e){return cookie("sp",t,{expires:0,path:"/"}),location.href=e,!1}cookie=function(t,e,o){if("undefined"==typeof e){var i=null;if(document.cookie&&""!=document.cookie)for(var n=document.cookie.split(";"),r=0;r<n.length;r++){var a=(n[r]||"").replace(/^\s+|\s+$/g,"");if(a.substring(0,t.length+1)==t+"="){i=decodeURIComponent(a.substring(t.length+1));break}}return i}o=o||{},null===e&&(e="",o.expires=-1);var c="";if(o.expires&&("number"==typeof o.expires||o.expires.toUTCString)){var s;"number"==typeof o.expires?(s=new Date,s.setTime(s.getTime()+24*o.expires*60*60*1e3)):s=o.expires,c="; expires="+s.toUTCString()}var p=o.path?"; path="+o.path:"",h=o.domain?"; domain="+o.domain:"",u=o.secure?"; secure":"";document.cookie=[t,"=",encodeURIComponent(e),c,p,h,u].join("")};var ua=navigator.userAgent,url=document.URL,protocol=location.protocol,domain=document.domain;ua.match("Android")&&ua.match("Mobile")||ua.match("iPhone")||ua.match("iPod")||ua.match("IEMobile")||ua.match("Symbian")?(url=="http://"+location.host+"/sp/"&&cookie("sp","visit",{expires:0,path:"/"}),!cookie("sp")&&"visit"!=cookie("sp")||"not_visit"==cookie("sp")||document.referrer!="http://"+location.host+"/sp/"?url=="http://"+location.host+"/"&&switch_view("visit","http://"+location.host+"/sp/"):window.addEventListener&&window.addEventListener("load",switcherGenerate,!1)):url=="http://"+location.host+"/sp/"&&(location.href="http://"+location.host+"/");