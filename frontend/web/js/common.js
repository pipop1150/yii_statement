var req;

function initRequest(url)
{
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        req = new XMLHttpRequest();
    } else if (window.ActiveXObject){
        // code for IE6, IE5
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }
    req.open("GET", url, true);
}

function getContext(){
    var varContext = document.getElementById("context").value;
    if(varContext.indexOf(";") >=0){
        context = varContext.substring(0, varContext.indexOf(";"));
    }else{
        context = varContext;
    }
    return "http://"+context;
}