setTimeout("timedCount()",1000)

function timedCount()
{ 
var xmlhttp;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	  
	  var c=document.getElementById("myCanvas");
	  var cxt=c.getContext("2d");

	  cxt.moveTo(10,10);
	  cxt.lineTo(parseInt(xmlhttp.responseText),50);
	  cxt.lineTo(10,50);
	  cxt.stroke();
	 
    }
  }
xmlhttp.open("GET","?s=Forward/forward/url/q/q=205",true);
xmlhttp.send();
}



function clear_getCoordinates(e)
{
x=e.clientX;
y=e.clientY;
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
ctx.strokeStyle="#000000"
cxt.moveTo(0,0);
cxt.lineTo(1024,0);
cxt.lineTo(1024,768);
cxt.lineTo(0,768);
cxt.lineTo(0,0);
cxt.fillRect();
setTimeout("draw_getCoordinates()",1000)
}

function draw_getCoordinates()
{
x=e.clientX;
y=e.clientY;
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
ctx.strokeStyle="#000000"
cxt.moveTo(0,0);
cxt.lineTo(1024,0);
cxt.lineTo(1024,768);
cxt.lineTo(0,768);
cxt.lineTo(0,0);
cxt.fillRect();
cxt.moveTo(x,0);
cxt.lineTo(x,768);
cxt.stroke();
}