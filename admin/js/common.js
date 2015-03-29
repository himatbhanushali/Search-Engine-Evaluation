function show(showLayerID)
{
	if(gbi(showLayerID).style.display=='none')
	{gbi(showLayerID).style.display='block';}
	else
	{gbi(showLayerID).style.display='none';}
}
function chgContent(content1, content2, layerid)
{
	if(gbi(layerid).innerHTML==content1)
	{gbi(layerid).innerHTML=content2;}
	else
	{gbi(layerid).innerHTML=content1;}
}

<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->

// tooltip 
var myWin='';
var content=0;
var idfield=0;
var iframeH=10;


function tooltip(content, idObj, leftStart, showForOther) {
  try{
    if (typeof showForOther == 'undefined' )
      showForOther = false;
    var showTooltip = true;
    if(typeof(idObj)!='object');
    idObj=gbi(idObj);

    var objType = idObj.type.toLowerCase();
    switch(objType)
    {
      case 'text':
      case 'password':
      case 'textarea':
        if ( idObj.value.trim().length > 0 )
          showTooltip = false;
        break;
      case 'select-one': if((idObj.value != -1 || idObj.selectedIndex > 0) && !showForOther)
                           showTooltip = false;
                         break;
    }/**/
    if ( !showTooltip)
      return;
    if(document.getElementById('hintbox'))
    {}
    else
    {
      var div1=document.createElement('div');
      div1.id='hintbox';
      div1.setAttribute('visibility', 'hidden');
      var div2=document.createElement('div');
      div2.id='new_';
      div1.appendChild(div2);
      var div3=document.createElement('div');
      div3.id='toolFrame';
      div3.setAttribute('visibility', 'hidden');
      var iframe1=document.createElement('iframe');
      iframe1.id='iframeTool';
      iframe1.className='framecss';
      div3.appendChild(iframe1);

      var bodyOBJ=document.getElementsByTagName('body');
      bodyOBJ[0].appendChild(div1);
      bodyOBJ[0].appendChild(div3);
    }

    var curleft = 0, curtop = 0;
    obj=idObj;
    if (obj.offsetParent) {
      curleft = obj.offsetLeft
        curtop = obj.offsetTop
        while (obj = obj.offsetParent) {
          curleft += obj.offsetLeft
            curtop += obj.offsetTop
        }
    }
    var obj2=document.getElementById('hintbox');
    var objFrame=document.getElementById('toolFrame');
    obj2.style.top=objFrame.style.top=curtop-4+"px";

    var leftStart1=0;
    if(leftStart)
      leftStart1=leftStart;
    else
      leftStart1=idObj.offsetWidth;

    //  alert(leftStart1);
    obj2.style.left=objFrame.style.left=parseInt(leftStart1)+curleft+"px";
    obj1=document.getElementById('new_');
    obj1.innerHTML="<div id='forarrow'><img src='"+Images_Path+"/spacer.gif' alt=''></div>"+content;
    obj2.style.visibility=objFrame.style.visibility='visible';
    content=content;
    obj=idObj
      document.getElementById('iframeTool').height=obj2.offsetHeight+"px";
  } catch(e) { alert("idObj : " + idObj +"\nError : " + e + "\nDescription : " + e.description); }
}
function hidetip(){
if(document.getElementById("hintbox"))
{
    dropmenuobj=document.getElementById("hintbox")
    dropmenuFrame=document.getElementById("toolFrame")
    dropmenuobj.style.visibility=dropmenuFrame.style.visibility="hidden"
    dropmenuobj.style.left=dropmenuFrame.style.left="-500px"
}
}

