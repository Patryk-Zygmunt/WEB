window.onload = function(e) {

if(!showCookie("ciastko")==""){
zmienStyl(showCookie("ciastko"));
alert(">"+showCookie("ciastko")+"<");
}
	listStyles(); 

}



function listStyles() {
	 

	var lista="<ol>";
	for (var i = 0; (styl = document.getElementsByTagName("link")[i]); i++) { 
			title=styl.getAttribute("title");
			lista= lista+"<a href=\"#\" onclick=\"zmienStyl(\'" + title + "\')\">Styl :  " + title + "</a><br/>"; 
		
		
	}
	lista=lista+"</ol>";
	document.getElementById("tytul").innerHTML = lista;

}

function zmienStyl(name) {
	var styl;
	setCookie("ciastko",name,20)
	for (var i = 0; (styl = document.getElementsByTagName("link")[i]); i++) { 
	
			if (styl.getAttribute("title") == name) {styl.disabled = false;} 
			else{
				styl.disabled = true;
			}
		
	}
	}
	function showCookie(name) {
    if (document.cookie!="") {
        var cookies=document.cookie.split("; ");  
        for (var i=0; i<cookies.length; i++) { 
            var cookieName=cookies[i].split("=")[0]; 
            var cookieVal=cookies[i].split("=")[1];
            if (cookieName===name) {
                return (cookieVal) ;
        }
    }
}
	
	
function setCookie(name, val, days) {
    if (days) {
        var data = new Date();
        data.setTime(data.getTime() + (days * 24*60*60*1000));
        var expires = "; expires="+data.toGMTString();
    } else {
        var expires = "";
    }
    document.cookie = name + "=" + val + expires + "; path=/";
}