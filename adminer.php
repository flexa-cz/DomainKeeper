<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.3
*/error_reporting(6135);$Tb=(!ereg('^(unsafe_raw)?$',ini_get("filter.default")));if($Tb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$yf=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($yf){$$X=$yf;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){var selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
function trCheck(el){var tr=el.parentNode.parentNode;tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}
function tableCheck(){var tables=document.getElementsByTagName('table');for(var i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var trs=tables[i].getElementsByTagName('tr');for(var j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}
function formUncheck(id){var el=document.getElementById(id);el.checked=false;trCheck(el);}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var click=true;var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^table$/i.test(el.tagName)){return;}
if(/^(a|input|textarea)$/i.test(el.tagName)){click=false;}
el=el.parentNode;}
el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}
trCheck(el);}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function bodyKeydown(event,button){var target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}
return false;}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(xmlhttp){if(xmlhttp.status){var data=eval('('+xmlhttp.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
var originalFavicon;function replaceFavicon(href){var favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}
var ajaxState=0;function ajaxSend(url,data,popState,noscroll){if(!history.pushState){return false;}
var currentState=++ajaxState;onblur=function(){if(!originalFavicon){originalFavicon=(document.getElementById('favicon')||{}).href;}
replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.3');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.3" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};if(originalFavicon){replaceFavicon(originalFavicon);}
if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll&&!/&order/.test(url)){scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if((ajaxState||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),false,noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),'',false,noscroll);}
function selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}
var original=td.innerHTML;var input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}
if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var pos=event.rangeOffset;var value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false||event.defaultPrevented){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
var jushRoot=location.protocol + '//www.adminer.org/static/';function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}
if(jushRoot){var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank" rel="noreferrer"';jush.urls.sql_sqlset=jush.urls.sql[0]=jush.urls.sqlset[0]=jush.urls.sqlstatus[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';var pgsql='http://www.postgresql.org/docs/'+version+'/static/';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0]=pgsql+'$key';jush.urls.pgsqlset[0]=pgsql+'runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('code',0);}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
function loginDriver(driver){var trs=driver.parentNode.parentNode.parentNode.rows;for(var i=1;i<trs.length;i++){trs[i].className=(/sqlite/.test(driver.value)?'hidden':'');}}
function textareaKeydown(target,event){if(!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(event.keyCode==9){if(target.setSelectionRange){var start=target.selectionStart;var scrolled=target.scrollTop;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);target.scrollTop=scrolled;return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.keyCode==27){var els=target.form.elements;for(var i=1;i<els.length;i++){if(els[i-1]==target){els[i].focus();break;}}
return false;}}
return true;}
var added='.',rowCount;function delimiterEqual(val,a,b){return(val==a+'_'+b||val==a+b||val==a+b.charAt(0).toUpperCase()+b.substr(1));}
function idfEscape(s){return s.replace(/`/,'``');}
function editingNameChange(field){var name=field.name.substr(0,field.name.length-7);var type=formField(field.form,name+'[type]');var opts=type.options;var candidate;var val=field.value;for(var i=opts.length;i--;){var match=/(.+)`(.+)/.exec(opts[i].value);if(!match){if(candidate&&i==opts.length-2&&val==opts[candidate].value.replace(/.+`/,'')&&name=='fields[1]'){return;}
break;}
var table=match[1];var column=match[2];var tables=[table,table.replace(/s$/,''),table.replace(/es$/,'')];for(var j=0;j<tables.length;j++){table=tables[j];if(val==column||val==table||delimiterEqual(val,table,column)||delimiterEqual(val,column,table)){if(candidate){return;}
candidate=i;break;}}}
if(candidate){type.selectedIndex=candidate;type.onchange();}}
function editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return false;}
var match=/(\d+)(\.\d+)?/.exec(button.name);var x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var row=button.parentNode.parentNode;var row2=row.cloneNode(true);var tags=row.getElementsByTagName('select');var tags2=row2.getElementsByTagName('select');for(var i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}
tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var input=tags2[0];for(var i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}
tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}
if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}
tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}
added+='0';rowCount++;return true;}
function editingRemoveRow(button){var field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);button.parentNode.parentNode.style.display='none';return true;}
var lastType='';function editingTypeChange(type){var name=type.name.substr(0,type.name.length-6);var text=selectValue(type);for(var i=0;i<type.form.elements.length;i++){var el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}
if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}
if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}
if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}
if(el.name==name+'[on_delete]'){el.className=(/`/.test(text)?'':'hidden');}}}
function editingLengthFocus(field){var td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var edit=document.getElementById('enum-edit');var val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}
function editingLengthBlur(edit){var field=edit.parentNode.firstChild;var val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}
function columnShow(checked,column){var trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}
function partitionByChange(el){var partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}
function partitionNameChange(el){var row=el.parentNode.parentNode.cloneNode(true);row.firstChild.firstChild.value='';el.parentNode.parentNode.parentNode.appendChild(row);el.onchange=function(){};}
function foreignAddRow(field){field.onchange=function(){};var row=field.parentNode.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}
field.parentNode.parentNode.parentNode.appendChild(row);}
function indexesAddRow(field){field.onchange=function(){};var parent=field.parentNode.parentNode;var row=parent.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');for(var i=0;i<inputs.length;i++){inputs[i].name=inputs[i].name.replace(/indexes\[\d+/,'$&1');inputs[i].value='';}
parent.parentNode.appendChild(row);}
function indexesChangeColumn(field,prefix){var columns=field.parentNode.parentNode.getElementsByTagName('select');var names=[];for(var i=0;i<columns.length;i++){var value=selectValue(columns[i]);if(value){names.push(value);}}
field.form[field.name.replace(/\].*/,'][name]')].value=prefix+names.join('_');}
function indexesAddColumn(field,prefix){field.onchange=function(){indexesChangeColumn(field,prefix);};var select=field.form[field.name.replace(/\].*/,'][type]')];if(!select.selectedIndex){select.selectedIndex=3;select.onchange();}
var column=field.parentNode.cloneNode(true);select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange();}
var that,x,y,em,tablePos;function schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function schemaMousemove(ev){if(that!==undefined){ev=ev||event;var left=(ev.clientX-x)/em;var top=(ev.clientY-y)/em;var divs=that.getElementsByTagName('div');var lineSet={};for(var i=0;i<divs.length;i++){if(divs[i].className=='references'){var div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var left1=-1;var isTop=true;var id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}
if(!lineSet[id]){var line=document.getElementById(divs[i].id.replace(/^....(.+)-\d+$/,'refl$1'));var shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/em+'em';}
if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/em+'em';}
lineSet[id]=true;}}}
that.style.left=left+'em';that.style.top=top+'em';}}
function schemaMouseup(ev,db){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/em,(ev.clientX-x)/em];that=undefined;var s='';for(var key in tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/10000+'x'+Math.round(tablePos[key][1]*10000)/10000;}
s=encodeURIComponent(s.substr(1));var link=document.getElementById('schema-link');link.href=link.href.replace(/[^=]+$/,'')+s;cookie('adminer_schema-'+db+'='+s,30);}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$e;return$e;}function
adminer(){global$b;return$b;}function
idf_unescape($mc){$Bc=substr($mc,-1);return
str_replace($Bc.$Bc,$Bc,substr($mc,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($Zd,$Tb=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($Zd)){foreach($X
as$yc=>$W){unset($Zd[$x][$yc]);if(is_array($W)){$Zd[$x][stripslashes($yc)]=$W;$Zd[]=&$Zd[$x][stripslashes($yc)];}else{$Zd[$x][stripslashes($yc)]=($Tb?$W:stripslashes($W));}}}}}function
bracket_escape($mc,$wa=false){static$lf=array(':'=>':1',']'=>':2','['=>':3');return
strtr($mc,($wa?array_flip($lf):$lf));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$Fa,$_c="",$pd="",$xc=false){static$s=0;$s++;$I="<input type='checkbox' name='$C' value='".h($Y)."'".($Fa?" checked":"").($pd?' onclick="'.h($pd).'"':'').($xc?" class='jsonly'":"")." id='checkbox-$s'>";return($_c!=""?"<label for='checkbox-$s'>$I".h($_c)."</label>":$I);}function
optionlist($sd,$xe=null,$Cf=false){$I="";foreach($sd
as$yc=>$W){$td=array($yc=>$W);if(is_array($W)){$I.='<optgroup label="'.h($yc).'">';$td=$W;}foreach($td
as$x=>$X){$I.='<option'.($Cf||is_string($x)?' value="'.h($x).'"':'').(($Cf||is_string($x)?(string)$x:$X)===$xe?' selected':'').'>'.h($X);}if(is_array($W)){$I.='</optgroup>';}}return$I;}function
html_select($C,$sd,$Y="",$od=true){if($od){return"<select name='".h($C)."'".(is_string($od)?' onchange="'.h($od).'"':"").">".optionlist($sd,$Y)."</select>";}$I="";foreach($sd
as$x=>$X){$I.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";}return$I;}function
confirm($Wa="",$Ie=false){return" onclick=\"".($Ie?"eventStop(event); ":"")."return confirm('".'Opravdu?'.($Wa?" (' + $Wa + ')":"")."');\"";}function
print_fieldset($s,$Gc,$Hf=false,$pd=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($pd)."return !toggle('fieldset-$s');\">$Gc</a></legend><div id='fieldset-$s'".($Hf?"":" class='hidden'").">\n";}function
bold($Aa){return($Aa?" class='active'":"");}function
odd($I=' class="odd"'){static$r=0;if(!$I){$r=-1;}return($r++%
2?$I:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($x,$X=null){static$Ub=true;if($Ub){echo"{";}if($x!=""){echo($Ub?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\").'": '.(isset($X)?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$Ub=false;}else{echo"\n}\n";$Ub=true;}}function
ini_bool($qc){$X=ini_get($qc);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$I;if(!isset($I)){$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$I;}function
q($P){global$e;return$e->quote($P);}function
get_vals($G,$Ma=0){global$e;$I=array();$H=$e->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[]=$J[$Ma];}}return$I;}function
get_key_vals($G,$f=null){global$e;if(!is_object($f)){$f=$e;}$I=array();$H=$f->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[$J[0]]=$J[1];}}return$I;}function
get_rows($G,$f=null,$i="<p class='error'>"){global$e;if(!is_object($f)){$f=$e;}$I=array();$H=$f->query($G);if(is_object($H)){while($J=$H->fetch_assoc()){$I[]=$J;}}elseif(!$H&&$e->error&&$i&&defined("PAGE_HEADER")){echo$i.error()."\n";}return$I;}function
unique_array($J,$u){foreach($u
as$t){if(ereg("PRIMARY|UNIQUE",$t["type"])){$I=array();foreach($t["columns"]as$x){if(!isset($J[$x])){continue
2;}$I[$x]=$J[$x];}return$I;}}$I=array();foreach($J
as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x)){$I[$x]=$X;}}return$I;}function
where($Z){global$w;$I=array();foreach((array)$Z["where"]as$x=>$X){$I[]=idf_escape(bracket_escape($x,1)).(ereg('\\.',$X)||$w=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".exact_value($X));}foreach((array)$Z["null"]as$x){$I[]=idf_escape($x)." IS NULL";}return
implode(" AND ",$I);}function
where_check($X){parse_str($X,$Ea);remove_slashes(array(&$Ea));return
where($Ea);}function
where_link($r,$Ma,$Y,$qd="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($Ma)."&where%5B$r%5D%5Bop%5D=".urlencode((isset($Y)?$qd:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($Y);}function
cookie($C,$Y){global$ba;$Ed=array($C,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Ed[]=true;}return
call_user_func_array('setcookie',$Ed);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($nb,$N,$V){global$ob;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ob))."|username|".session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($nb!="server"||$N!=""?urlencode($nb)."=".urlencode($N)."&":"")."username=".urlencode($V).($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($_,$Tc=null){if(isset($Tc)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($_)?$_:$_SERVER["REQUEST_URI"]))][]=$Tc;}if(isset($_)){if($_==""){$_=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $_");exit;}}function
query_redirect($G,$_,$Tc,$ee=true,$Jb=true,$Pb=false){global$e,$i,$b;if($Jb){$Pb=!$e->query($G);}$Ee="";if($G){$Ee=$b->messageQuery("$G;");}if($Pb){$i=error().$Ee;return
false;}if($ee){redirect($_,$Tc.$Ee);}return
true;}function
queries($G=null){global$e;static$ce=array();if(!isset($G)){return
implode(";\n",$ce);}$ce[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G);return$e->query($G);}function
apply_queries($G,$We,$Fb='table'){foreach($We
as$R){if(!queries("$G ".$Fb($R))){return
false;}}return
true;}function
queries_redirect($_,$Tc,$ee){return
query_redirect(queries(),$_,$Tc,$ee,false,!$ee);}function
remove_from_uri($Dd=""){return
substr(preg_replace("~(?<=[?&])($Dd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$bb){return" ".($D==$bb?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($x,$gb=false){$Rb=$_FILES[$x];if(!$Rb||$Rb["error"]){return$Rb["error"];}$I=file_get_contents($gb&&ereg('\\.gz$',$Rb["name"])?"compress.zlib://$Rb[tmp_name]":($gb&&ereg('\\.bz2$',$Rb["name"])?"compress.bzip2://$Rb[tmp_name]":$Rb["tmp_name"]));if($gb){$Fe=substr($I,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Fe,$ke)){$I=iconv("utf-16","utf-8",$I);}elseif($Fe=="\xEF\xBB\xBF"){$I=substr($I,3);}}return$I;}function
upload_error($i){$Rc=($i==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($i?'Nepodařilo se nahrát soubor.'.($Rc?" ".sprintf('Maximální povolená velikost souboru je %sB.',$Rc):""):'Soubor neexistuje.');}function
repeat_pattern($E,$Hc){return
str_repeat("$E{0,65535}",$Hc/65535)."$E{0,".($Hc
%
65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$Hc=80,$Me=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$Hc).")($)?)u",$P,$A)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Hc).")($)?)",$P,$A);}return
h($A[1]).$Me.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Zd,$nc=array()){while(list($x,$X)=each($Zd)){if(is_array($X)){foreach($X
as$yc=>$W){$Zd[$x."[$yc]"]=$W;}}elseif(!in_array($x,$nc)){echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($R){global$b;$I=array();foreach($b->foreignKeys($R)as$l){foreach($l["source"]as$X){$I[$X][]=$l;}}return$I;}function
enum_input($U,$ta,$j,$Y,$zb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$j["length"],$Mc);$I=(isset($zb)?"<label><input type='$U'$ta value='$zb'".((is_array($Y)?in_array($zb,$Y):$Y===0)?" checked":"")."><i>".'prázdné'."</i></label>":"");foreach($Mc[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?$Y==$r+1:(is_array($Y)?in_array($r+1,$Y):$Y===$X));$I.=" <label><input type='$U'$ta value='".($r+1)."'".($Fa?' checked':'').'>'.h($b->editVal($X,$j)).'</label>';}return$I;}function
input($j,$Y,$n){global$tf,$b,$w;$C=h(bracket_escape($j["field"]));echo"<td class='function'>";$me=($w=="mssql"&&$j["auto_increment"]);if($me&&!$_POST["save"]){$n=null;}$o=(isset($_GET["select"])||$me?array("orig"=>'původní'):array())+$b->editFunctions($j);$ta=" name='fields[$C]'";if($j["type"]=="enum"){echo
nbsp($o[""])."<td>".$b->editInput($_GET["edit"],$j,$ta,$Y);}else{$Ub=0;foreach($o
as$x=>$X){if($x===""||!$X){break;}$Ub++;}$od=($Ub?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($j["field"])))."]']; if ($Ub > f.selectedIndex) f.selectedIndex = $Ub;\"":"");$ta.=$od;echo(count($o)>1?html_select("function[$C]",$o,!isset($n)||in_array($n,$o)||isset($o[$n])?$n:"","functionChange(this);"):nbsp(reset($o))).'<td>';$sc=$b->editInput($_GET["edit"],$j,$ta,$Y);if($sc!=""){echo$sc;}elseif($j["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$j["length"],$Mc);foreach($Mc[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?($Y>>$r)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$r]' value='".(1<<$r)."'".($Fa?' checked':'')."$od>".h($b->editVal($X,$j)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$j["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$C'$od>";}elseif(ereg('text|lob',$j["type"])){echo"<textarea ".($w!="sqlite"||ereg("\n",$Y)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ta>".h($Y).'</textarea>';}else{$Sc=(!ereg('int',$j["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$j["length"],$A)?((ereg("binary",$j["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$j["unsigned"]?1:0)):($tf[$j["type"]]?$tf[$j["type"]]+($j["unsigned"]?0:1):0));echo"<input value='".h($Y)."'".($Sc?" maxlength='$Sc'":"").(ereg('char|binary',$j["type"])&&$Sc>20?" size='40'":"")."$ta>";}}}function
process_input($j){global$b;$mc=bracket_escape($j["field"]);$n=$_POST["function"][$mc];$Y=$_POST["fields"][$mc];if($j["type"]=="enum"){if($Y==-1){return
false;}if($Y==""){return"NULL";}return+$Y;}if($j["auto_increment"]&&$Y==""){return
null;}if($n=="orig"){return($j["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($j["field"]):false);}if($n=="NULL"){return"NULL";}if($j["type"]=="set"){return
array_sum((array)$Y);}if(ereg('blob|bytea|raw|file',$j["type"])&&ini_bool("file_uploads")){$Rb=get_file("fields-$mc");if(!is_string($Rb)){return
false;}return
q($Rb);}return$b->processInput($j,$Y,$n);}function
search_tables(){global$b,$e;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Yb=false;foreach(table_status()as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$H=$e->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if($H->fetch_row()){if(!$Yb){echo"<ul>\n";$Yb=true;}echo"<li><a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n";}}}echo($Yb?"</ul>":"<p class='message'>".'Žádné tabulky.')."\n";}function
dump_headers($lc,$ad=false){global$b;$I=$b->dumpHeaders($lc,$ad);$Bd=$_POST["output"];if($Bd!="text"){header("Content-Disposition: attachment; filename=".friendly_url($lc!=""?$lc:(SERVER!=""?SERVER:"localhost")).".$I".($Bd!="file"&&!ereg('[^0-9a-z]',$Bd)?".$Bd":""));}session_write_close();return$I;}function
dump_csv($J){foreach($J
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X===""){$J[$x]='"'.str_replace('"','""',$X).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($n,$Ma){return($n?($n=="unixepoch"?"DATETIME($Ma, '$n')":($n=="count distinct"?"COUNT(DISTINCT ":strtoupper("$n("))."$Ma)"):$Ma);}function
password_file(){$kb=ini_get("upload_tmp_dir");if(!$kb){if(function_exists('sys_get_temp_dir')){$kb=sys_get_temp_dir();}else{$Sb=@tempnam("","");if(!$Sb){return
false;}$kb=dirname($Sb);unlink($Sb);}}$Sb="$kb/adminer.key";$I=@file_get_contents($Sb);if($I){return$I;}$ac=@fopen($Sb,"w");if($ac){$I=md5(uniqid(mt_rand(),true));fwrite($ac,$I);fclose($ac);}return$I;}function
is_mail($wb){$sa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$mb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$E="$sa+(\\.$sa+)*@($mb?\\.)+$mb";return
preg_match("(^$E(,\\s*$E)*\$)i",$wb);}function
is_url($P){$mb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($mb?\\.)+$mb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$A)?strtolower($A[1]):"");}global$b,$e,$ob,$ub,$Cb,$i,$o,$fc,$ba,$rc,$w,$ca,$Ac,$nd,$Ke,$T,$nf,$tf,$_f,$ga;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Ed=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Ed[]=true;}call_user_func_array('session_set_cookie_params',$Ed);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Tb);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'cs';}function
lang($mf,$gd){$Od=($gd==1?0:($gd&&$gd<5?1:2));return
sprintf($mf[$Od],$gd);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($rb,$V,$Ld,$Ib='auth_error'){set_exception_handler($Ib);parent::__construct($rb,$V,$Ld);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$uf=false){$H=parent::query($G);if(!$H){$Db=$this->errorInfo();$this->error=$Db[2];return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($G,$j=0){$H=$this->query($G);if(!$H){return
false;}$J=$H->fetch();return$J[$j];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",$J->flags)?63:0);return$J;}}}$ob=array();$ob=array("server"=>"MySQL")+$ob;if(!defined("DRIVER")){$Rd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$Ld){mysqli_report(MYSQLI_REPORT_OFF);list($jc,$Nd)=explode(":",$N,2);$I=@$this->real_connect(($N!=""?$jc:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$Ld!=""?$Ld:ini_get("mysqli.default_pw")),null,(is_numeric($Nd)?$Nd:ini_get("mysqli.default_port")),(!is_numeric($Nd)?$Nd:null));if($I){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$I;}function
result($G,$j=0){$H=$this->query($G);if(!$H){return
false;}$J=$H->fetch_array();return$J[$j];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($N,$V,$Ld){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$Ld"!=""?$Ld:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($eb){return
mysql_select_db($eb,$this->_link);}function
query($G,$uf=false){$H=@($uf?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));if(!$H){$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$j=0){$H=$this->query($G);if(!$H||!$H->num_rows){return
false;}return
mysql_result($H->_result,0,$j);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$Ld){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$Ld);$this->query("SET NAMES utf8");return
true;}function
select_db($eb){return$this->query("USE ".idf_escape($eb));}function
query($G,$uf=false){$this->setAttribute(1000,!$uf);return
parent::query($G,$uf);}}}function
idf_escape($mc){return"`".str_replace("`","``",$mc)."`";}function
table($mc){return
idf_escape($mc);}function
connect(){global$b;$e=new
Min_DB;$ab=$b->credentials();if($e->connect($ab[0],$ab[1],$ab[2])){$e->query("SET sql_quote_show_create = 1");return$e;}$I=$e->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($L=iconv("windows-1250","utf-8",$I))>strlen($I)){$I=$L;}return$I;}function
get_databases($Vb=true){global$e;$I=&get_session("dbs");if(!isset($I)){if($Vb){restart_session();ob_flush();flush();}$I=get_vals($e->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$I;}function
limit($G,$Z,$y,$id=0,$ze=" "){return" $G$Z".(isset($y)?$ze."LIMIT $y".($id?" OFFSET $id":""):"");}function
limit1($G,$Z){return
limit($G,$Z,1);}function
db_collation($h,$c){global$e;$I=null;$Xa=$e->result("SHOW CREATE DATABASE ".idf_escape($h),1);if(preg_match('~ COLLATE ([^ ]+)~',$Xa,$A)){$I=$A[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Xa,$A)){$I=$c[$A[1]][-1];}return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"])){$I[]=$J["Engine"];}}return$I;}function
logged_user(){global$e;return$e->result("SELECT USER()");}function
tables_list(){global$e;return
get_key_vals("SHOW".($e->server_info>=5?" FULL":"")." TABLES");}function
count_tables($g){$I=array();foreach($g
as$h){$I[$h]=count(get_vals("SHOW TABLES IN ".idf_escape($h)));}return$I;}function
table_status($C=""){$I=array();foreach(get_rows("SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_")):""))as$J){if($J["Engine"]=="InnoDB"){$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);}if(!isset($J["Rows"])){$J["Comment"]="";}if($C!=""){return$J;}$I[$J["Name"]]=$J;}return$I;}function
is_view($S){return!isset($S["Rows"]);}function
fk_support($S){return
eregi("InnoDB|IBMDB2I",$S["Engine"]);}function
fields($R){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$A);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($J["Default"]!=""||ereg("char",$A[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$A)?$A[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($R,$f=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$f)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];}return$I;}function
foreign_keys($R){global$e,$nd;static$E='`(?:[^`]|``)+`';$I=array();$Ya=$e->result("SHOW CREATE TABLE ".table($R),1);if($Ya){preg_match_all("~CONSTRAINT ($E) FOREIGN KEY \\(((?:$E,? ?)+)\\) REFERENCES ($E)(?:\\.($E))? \\(((?:$E,? ?)+)\\)(?: ON DELETE ($nd))?(?: ON UPDATE ($nd))?~",$Ya,$Mc,PREG_SET_ORDER);foreach($Mc
as$A){preg_match_all("~$E~",$A[2],$Ce);preg_match_all("~$E~",$A[5],$Ze);$I[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Ce[0]),"target"=>array_map('idf_unescape',$Ze[0]),"on_delete"=>$A[6],"on_update"=>$A[7],);}}return$I;}function
view($C){global$e;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$e->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"]){$I[$J["Charset"]][-1]=$J["Collation"];}else{$I[$J["Charset"]][]=$J["Collation"];}}ksort($I);foreach($I
as$x=>$X){asort($I[$x]);}return$I;}function
information_schema($h){global$e;return($e->server_info>=5&&$h=="information_schema");}function
error(){global$e;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$e->error));}function
exact_value($X){return
q($X)." COLLATE utf8_bin";}function
create_database($h,$Ka){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($h).($Ka?" COLLATE ".q($Ka):""));}function
drop_databases($g){set_session("dbs",null);return
apply_queries("DROP DATABASE",$g,'idf_escape');}function
rename_database($C,$Ka){if(create_database($C,$Ka)){$le=array();foreach(tables_list()as$R=>$U){$le[]=table($R)." TO ".idf_escape($C).".".table($R);}if(!$le||queries("RENAME TABLE ".implode(", ",$le))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$va=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$va="";break;}if($t["type"]=="PRIMARY"){$va=" UNIQUE";}}}return" AUTO_INCREMENT$va";}function
alter_table($R,$C,$k,$Wb,$Pa,$Ab,$Ka,$ua,$Id){$ra=array();foreach($k
as$j){$ra[]=($j[1]?($R!=""?($j[0]!=""?"CHANGE ".idf_escape($j[0]):"ADD"):" ")." ".implode($j[1]).($R!=""?" $j[2]":""):"DROP ".idf_escape($j[0]));}$ra=array_merge($ra,$Wb);$Ge="COMMENT=".q($Pa).($Ab?" ENGINE=".q($Ab):"").($Ka?" COLLATE ".q($Ka):"").($ua!=""?" AUTO_INCREMENT=$ua":"").$Id;if($R==""){return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$ra)."\n) $Ge");}if($R!=$C){$ra[]="RENAME TO ".table($C);}$ra[]=$Ge;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$ra));}function
alter_indexes($R,$ra){foreach($ra
as$x=>$X){$ra[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);}return
queries("ALTER TABLE ".table($R).implode(",",$ra));}function
truncate_tables($We){return
apply_queries("TRUNCATE TABLE",$We);}function
drop_views($Gf){return
queries("DROP VIEW ".implode(", ",array_map('table',$Gf)));}function
drop_tables($We){return
queries("DROP TABLE ".implode(", ",array_map('table',$We)));}function
move_tables($We,$Gf,$Ze){$le=array();foreach(array_merge($We,$Gf)as$R){$le[]=table($R)." TO ".idf_escape($Ze).".".table($R);}return
queries("RENAME TABLE ".implode(", ",$le));}function
copy_tables($We,$Gf,$Ze){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($We
as$R){$C=($Ze==DB?table("copy_$R"):idf_escape($Ze).".".table($R));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R))){return
false;}}foreach($Gf
as$R){$C=($Ze==DB?table("copy_$R"):idf_escape($Ze).".".table($R));$Ff=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Ff[select]")){return
false;}}return
true;}function
trigger($C){if($C==""){return
array();}$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($K);}function
triggers($R){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")))as$J){$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$e,$Cb,$rc,$tf;$pa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$sf="((".implode("|",array_merge(array_keys($tf),$pa)).")(?:\\s*\\(((?:[^'\")]*|$Cb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$E="\\s*(".($U=="FUNCTION"?"":$rc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$sf";$Xa=$e->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$E\\s*,?)*)\\)".($U=="FUNCTION"?"\\s*RETURNS\\s+$sf":"")."\\s*(.*)~is",$Xa,$A);$k=array();preg_match_all("~$E\\s*,?~is",$A[1],$Mc,PREG_SET_ORDER);foreach($Mc
as$Dd){$C=str_replace("``","`",$Dd[2]).$Dd[3];$k[]=array("field"=>$C,"type"=>strtolower($Dd[5]),"length"=>preg_replace_callback("~$Cb~s",'normalize_enum',$Dd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Dd[8] $Dd[7]"))),"full_type"=>$Dd[4],"inout"=>strtoupper($Dd[1]),"collation"=>strtolower($Dd[9]),);}if($U!="FUNCTION"){return
array("fields"=>$k,"definition"=>$A[11]);}return
array("fields"=>$k,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($R,$O){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
insert_update($R,$O,$Ud){foreach($O
as$x=>$X){$O[$x]="$x = $X";}$Af=implode(", ",$O);return
queries("INSERT INTO ".table($R)." SET $Af ON DUPLICATE KEY UPDATE $Af");}function
last_id(){global$e;return$e->result("SELECT LAST_INSERT_ID()");}function
explain($e,$G){return$e->query("EXPLAIN $G");}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ve){return
true;}function
create_sql($R,$ua){global$e;$I=$e->result("SHOW CREATE TABLE ".table($R),1);if(!$ua){$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);}return$I;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($eb){return"USE ".idf_escape($eb);}function
trigger_sql($R,$Q){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")),null,"-- ")as$J){$I.="\n".($Q=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";}return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Qb){global$e;return!ereg("scheme|sequence|type".($e->server_info<5.1?"|event|partitioning".($e->server_info<5?"|view|routine|trigger":""):""),$Qb);}$w="sql";$tf=array();$Ke=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Řetězce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binární'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),)as$x=>$X){$tf+=$X;$Ke[$x]=array_keys($X);}$_f=array("unsigned","zerofill","unsigned zerofill");$rd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$o=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$fc=array("avg","count","count distinct","group_concat","max","min","sum");$ub=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ga="3.3.3";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$ob;echo'<table cellspacing="0">
<tr><th>Systém<td>',html_select("driver",$ob,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="server" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>Uživatel<td><input id="username" name="username" value="',h($_GET["username"]);?>">
<tr><th>Heslo<td><input type="password" name="password">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['driver'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Přihlásit se'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Trvalé přihlášení')."\n";}function
login($Kc,$Ld){return
true;}function
tableName($Re){return
h($Re["Name"]);}function
fieldName($j,$ud=0){return'<span title="'.h($j["full_type"]).'">'.h($j["field"]).'</span>';}function
selectLinks($Re,$O=""){echo'<p class="tabs">';$Jc=array("select"=>'Vypsat data',"table"=>'Zobrazit strukturu');if(is_view($Re)){$Jc["view"]='Pozměnit pohled';}else{$Jc["create"]='Pozměnit tabulku';}if(isset($O)){$Jc["edit"]='Nová položka';}foreach($Jc
as$x=>$X){echo" <a href='".h(ME)."$x=".urlencode($Re["Name"]).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";}echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Qe){return
array();}function
backwardKeysPrint($xa,$J){}function
selectQuery($G){global$w;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Poslední stránka'."'>&gt;&gt;</a> <code class='jush-$w'>".h(str_replace("\n"," ",$G))."</code> <a href='".h(ME)."sql=".urlencode($G)."'>".'Upravit'."</a></p>\n";}function
rowDescription($R){return"";}function
rowDescriptions($K,$Xb){return$K;}function
selectVal($X,$z,$j){$I=($X!="<i>NULL</i>"&&ereg("char|binary",$j["type"])&&!ereg("var",$j["type"])?"<code>$X</code>":$X);if(ereg('blob|bytea|raw|file',$j["type"])&&!is_utf8($X)){$I=lang(array('%d bajt','%d bajty','%d bajtů'),strlen(html_entity_decode($X,ENT_QUOTES)));}return($z?"<a href='$z'>$I</a>":$I);}function
editVal($X,$j){return(ereg("binary",$j["type"])?reset(unpack("H*",$X)):$X);}function
selectColumnsPrint($M,$d){global$o,$fc;print_fieldset("select",'Vypsat',$M);$r=0;$cc=array('Funkce'=>$o,'Agregace'=>$fc);foreach($M
as$x=>$X){$X=$_GET["columns"][$x];echo"<div>".html_select("columns[$r][fun]",array(-1=>"")+$cc,$X["fun"]),"(<select name='columns[$r][col]'><option>".optionlist($d,$X["col"],true)."</select>)</div>\n";$r++;}echo"<div>".html_select("columns[$r][fun]",array(-1=>"")+$cc,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$r][col]' onchange='selectAddRow(this);'><option>".optionlist($d,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($Z,$d,$u){print_fieldset("search",'Vyhledat',$Z);foreach($u
as$r=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input name='fulltext[$r]' value='".h($_GET["fulltext"][$r])."'>",checkbox("boolean[$r]",1,isset($_GET["boolean"][$r]),"BOOL"),"<br>\n";}}$r=0;foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){echo"<div><select name='where[$r][col]'><option value=''>(".'kdekoliv'.")".optionlist($d,$X["col"],true)."</select>",html_select("where[$r][op]",$this->operators,$X["op"]),"<input name='where[$r][val]' value='".h($X["val"])."'></div>\n";$r++;}}echo"<div><select name='where[$r][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoliv'.")".optionlist($d,null,true)."</select>",html_select("where[$r][op]",$this->operators,"="),"<input name='where[$r][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ud,$d,$u){print_fieldset("sort",'Seřadit',$ud);$r=0;foreach((array)$_GET["order"]as$x=>$X){if(isset($d[$X])){echo"<div><select name='order[$r]'><option>".optionlist($d,$X,true)."</select>",checkbox("desc[$r]",1,isset($_GET["desc"][$x]),'sestupně')."</div>\n";$r++;}}echo"<div><select name='order[$r]' onchange='selectAddRow(this);'><option>".optionlist($d,null,true)."</select>","<label><input type='checkbox' name='desc[$r]' value='1'>".'sestupně'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($y)."'>","</div></fieldset>\n";}function
selectLengthPrint($cf){if(isset($cf)){echo"<fieldset><legend>".'Délka textů'."</legend><div>",'<input name="text_length" size="3" value="'.h($cf).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($xb,$d){}function
selectColumnsProcess($d,$u){global$o,$fc;$M=array();$q=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||(isset($d[$X["col"]])&&(!$X["fun"]||in_array($X["fun"],$o)||in_array($X["fun"],$fc)))){$M[$x]=apply_sql_function($X["fun"],(isset($d[$X["col"]])?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$fc)){$q[]=$M[$x];}}}return
array($M,$q);}function
selectSearchProcess($k,$u){global$w;$I=array();foreach($u
as$r=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$r]!=""){$I[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$r]).(isset($_GET["boolean"][$r])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$Sa=" $X[op]";if(ereg('IN$',$X["op"])){$oc=process_length($X["val"]);$Sa.=" (".($oc!=""?$oc:"NULL").")";}elseif(!$X["op"]){$Sa.=$X["val"];}elseif($X["op"]=="LIKE %%"){$Sa=" LIKE ".$this->processInput($k[$X["col"]],"%$X[val]%");}elseif(!ereg('NULL$',$X["op"])){$Sa.=" ".$this->processInput($k[$X["col"]],$X["val"]);}if($X["col"]!=""){$I[]=idf_escape($X["col"]).$Sa;}else{$La=array();foreach($k
as$C=>$j){if(is_numeric($X["val"])||!ereg('int|float|double|decimal',$j["type"])){$C=idf_escape($C);$La[]=($w=="sql"&&ereg('char|text|enum|set',$j["type"])&&!ereg('^utf8',$j["collation"])?"CONVERT($C USING utf8)":$C);}}$I[]=($La?"(".implode("$Sa OR ",$La)."$Sa)":"0");}}}return$I;}function
selectOrderProcess($k,$u){$I=array();foreach((array)$_GET["order"]as$x=>$X){if(isset($k[$X])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)){$I[]=(isset($k[$X])?idf_escape($X):$X).(isset($_GET["desc"][$x])?" DESC":"");}}return$I;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Xb){return
false;}function
messageQuery($G){global$w;static$Wa=0;restart_session();$s="sql-".($Wa++);$hc=&get_session("queries");if(strlen($G)>1e6){$G=ereg_replace('[\x80-\xFF]+$','',substr($G,0,1e6))."\n...";}$hc[$_GET["db"]][]=$G;return" <a href='#$s' onclick=\"return !toggle('$s');\">".'SQL příkaz'."</a><div id='$s' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($G,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($hc[$_GET["db"]])-1)).'">'.'Upravit'.'</a></div>';}function
editFunctions($j){global$ub;$I=($j["null"]?"NULL/":"");foreach($ub
as$x=>$o){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($o
as$E=>$X){if(!$E||ereg($E,$j["type"])){$I.="/$X";}}if($x&&!ereg('set|blob|bytea|raw|file',$j["type"])){$I.="/=";}}}return
explode("/",$I);}function
editInput($R,$j,$ta,$Y){if($j["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$ta value='-1' checked><i>".'původní'."</i></label> ":"").($j["null"]?"<label><input type='radio'$ta value=''".(isset($Y)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$ta,$j,$Y,0);}return"";}function
processInput($j,$Y,$n=""){if($n=="="){return$Y;}$C=$j["field"];$I=($j["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$Y)?$Y:q($Y));if(ereg('^(now|getdate|uuid)$',$n)){$I="$n()";}elseif(ereg('^current_(date|timestamp)$',$n)){$I=$n;}elseif(ereg('^([+-]|\\|\\|)$',$n)){$I=idf_escape($C)." $n $I";}elseif(ereg('^[+-] interval$',$n)){$I=idf_escape($C)." $n ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$I);}elseif(ereg('^(addtime|subtime|concat)$',$n)){$I="$n(".idf_escape($C).", $I)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$n)){$I="$n($I)";}if(ereg("binary",$j["type"])){$I="unhex($I)";}return$I;}function
dumpOutput(){$I=array('text'=>'otevřít','file'=>'uložit');if(function_exists('gzencode')){$I['gz']='gzip';}if(function_exists('bzcompress')){$I['bz2']='bzip2';}return$I;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($R,$Q,$wc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Q){dump_csv(array_keys(fields($R)));}}elseif($Q){$Xa=create_sql($R,$_POST["auto_increment"]);if($Xa){if($Q=="DROP+CREATE"){echo"DROP ".($wc?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";}if($wc){$Xa=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$Xa);}echo($Q!="CREATE+ALTER"?$Xa:($wc?substr_replace($Xa," OR REPLACE",6,0):substr_replace($Xa," IF NOT EXISTS",12,0))).";\n\n";}if($Q=="CREATE+ALTER"&&!$wc){$G="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($R)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$k=array();$oa="";foreach(get_rows($G)as$J){$hb=$J["COLUMN_DEFAULT"];$J["default"]=(isset($hb)?q($hb):"NULL");$J["after"]=q($oa);$J["alter"]=escape_string(idf_escape($J["COLUMN_NAME"])." $J[COLUMN_TYPE]".($J["COLLATION_NAME"]?" COLLATE $J[COLLATION_NAME]":"").(isset($hb)?" DEFAULT ".($hb=="CURRENT_TIMESTAMP"?$hb:$J["default"]):"").($J["IS_NULLABLE"]=="YES"?"":" NOT NULL").($J["EXTRA"]?" $J[EXTRA]":"").($J["COLUMN_COMMENT"]?" COMMENT ".q($J["COLUMN_COMMENT"]):"").($oa?" AFTER ".idf_escape($oa):" FIRST"));echo", ADD $J[alter]";$k[]=$J;$oa=$J["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $G;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($k
as$J){echo"
				WHEN ".q($J["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $J[alter]', IF(
						_column_default <=> $J[default] AND _is_nullable = '$J[IS_NULLABLE]' AND _collation_name <=> ".(isset($J["COLLATION_NAME"])?"'$J[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($J["COLUMN_TYPE"])." AND _extra = '$J[EXTRA]' AND _column_comment = ".q($J["COLUMN_COMMENT"])." AND after = $J[after]
					, '', ', MODIFY $J[alter]'));";}echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($R)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($R,$Q,$G){global$e,$w;$Oc=($w=="sqlite"?0:1048576);if($Q){if($_POST["format"]=="sql"&&$Q=="TRUNCATE+INSERT"){echo
truncate_sql($R).";\n";}if($_POST["format"]=="sql"){$k=fields($R);}$H=$e->query($G,1);if($H){$tc="";$Ca="";while($J=$H->fetch_assoc()){if($_POST["format"]!="sql"){if($Q=="table"){dump_csv(array_keys($J));$Q="INSERT";}dump_csv($J);}else{if(!$tc){$tc="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',array_keys($J))).") VALUES";}foreach($J
as$x=>$X){$J[$x]=(isset($X)?(ereg('int|float|double|decimal',$k[$x]["type"])?$X:q($X)):"NULL");}$L=implode(",\t",$J);if($Q=="INSERT+UPDATE"){$O=array();foreach($J
as$x=>$X){$O[]=idf_escape($x)." = $X";}echo"$tc ($L) ON DUPLICATE KEY UPDATE ".implode(", ",$O).";\n";}else{$L=($Oc?"\n":" ")."($L)";if(!$Ca){$Ca=$tc.$L;}elseif(strlen($Ca)+4+strlen($L)<$Oc){$Ca.=",$L";}else{echo"$Ca;\n";$Ca=$tc.$L;}}}}if($_POST["format"]=="sql"&&$Q!="INSERT+UPDATE"&&$Ca){$Ca.=";\n";echo$Ca;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$e->error)."\n";}}}function
dumpHeaders($lc,$ad=false){$Bd=$_POST["output"];$Nb=($_POST["format"]=="sql"?"sql":($ad?"tar":"csv"));header("Content-Type: ".($Bd=="bz2"?"application/x-bzip":($Bd=="gz"?"application/x-gzip":($Nb=="tar"?"application/x-tar":($Nb=="sql"||$Bd!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Bd=="bz2"){ob_start('bzcompress',1e6);}if($Bd=="gz"){ob_start('gzencode',1e6);}return$Nb;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Pozměnit databázi'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Pozměnit schéma':'Vytvořit schéma')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Schéma databáze'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Oprávnění'."</a>\n":"");return
true;}function
navigation($Zc){global$ga,$e,$T,$w,$ob;echo'<h1>
',$this->name(),' <span class="version">',$ga,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ga,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Zc=="auth"){$Ub=true;foreach((array)$_SESSION["pwds"]as$nb=>$Ae){foreach($Ae
as$N=>$Df){foreach($Df
as$V=>$Ld){if(isset($Ld)){if($Ub){echo"<p onclick='eventStop(event);'>\n";$Ub=false;}echo"<a href='".h(auth_url($nb,$N,$V))."'>($ob[$nb]) ".h($V.($N!=""?"@$N":""))."</a><br>\n";}}}}}else{$g=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Zc){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL příkaz'."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}}echo'<input type="submit" name="logout" value="Odhlásit" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($g?html_select("db",array(""=>"(".'databáze'.")")+$g,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Vybrat"',($g?" class='hidden'":""),' onclick="eventStop(event);">
';if($Zc!="db"&&DB!=""&&$e->select_db(DB)){if($_GET["ns"]!==""&&!$Zc){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Vytvořit novou tabulku'."</a>\n";$We=tables_list();if(!$We){echo"<p class='message'>".'Žádné tabulky.'."\n";}else{$this->tablesPrint($We);$Jc=array();foreach($We
as$R=>$U){$Jc[]=preg_quote($R,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $w: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$Jc).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X){echo"jushLinks.$X = jushLinks.$w;\n";}echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($We){echo"<p id='tables'>\n";foreach($We
as$R=>$U){echo'<a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R).">".'vypsat'."</a> ",'<a href="'.h(ME).'table='.urlencode($R).'"'.bold($_GET["table"]==$R)." title='".'Zobrazit strukturu'."'>".$this->tableName(array("Name"=>$R))."</a><br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($b->operators)){$b->operators=$rd;}function
page_header($ff,$i="",$Ba=array(),$gf=""){global$ca,$b,$e,$ob;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$hf=$ff.($gf!=""?": ".h($gf):"");$if=strip_tags($hf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($if));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="cs" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$if,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.3",'">
<script type="text/javascript">
var areYouSure = \'Znovu odeslat POST data?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.3",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.3",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($e)?substr($e->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($Ba)){$z=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$ob[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Ba===false){echo"$N\n";}else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ba))){echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Ba)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Ba
as$x=>$X){$jb=(is_array($X)?$X[1]:$X);if($jb!=""){echo'<a href="'.h(ME."$x=").urlencode(is_array($X)?$X[0]:$X).'">'.h($jb).'</a> &raquo; ';}}}echo"$ff\n";}}echo"<span id='loader'></span>\n","<h2>$hf</h2>\n";restart_session();$Bf=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Xc=$_SESSION["messages"][$Bf];if($Xc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Xc)."</div>\n";unset($_SESSION["messages"][$Bf]);}$g=&get_session("dbs");if(DB!=""&&$g&&!in_array(DB,$g,true)){$g=null;}if($i){echo"<div class='error'>$i</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Zc=""){global$b;if(!is_ajax()){echo'</div>

<div id="menu">
';$b->navigation($Zc);echo'</div>
';}}function
int32($B){while($B>=2147483648){$B-=4294967296;}while($B<=-2147483649){$B+=4294967296;}return(int)$B;}function
long2str($W,$If){$L='';foreach($W
as$X){$L.=pack('V',$X);}if($If){return
substr($L,0,end($W));}return$L;}function
str2long($L,$If){$W=array_values(unpack('V*',str_pad($L,4*ceil(strlen($L)/4),"\0")));if($If){$W[]=strlen($L);}return$W;}function
xxtea_mx($Mf,$Lf,$Oe,$yc){return
int32((($Mf>>5&0x7FFFFFF)^$Lf<<2)+(($Lf>>3&0x1FFFFFFF)^$Mf<<4))^int32(($Oe^$Lf)+($yc^$Mf));}function
encrypt_string($Je,$x){if($Je==""){return"";}$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Je,true);$B=count($W)-1;$Mf=$W[$B];$Lf=$W[0];$F=floor(6+52/($B+1));$Oe=0;while($F-->0){$Oe=int32($Oe+0x9E3779B9);$tb=$Oe>>2&3;for($Cd=0;$Cd<$B;$Cd++){$Lf=$W[$Cd+1];$bd=xxtea_mx($Mf,$Lf,$Oe,$x[$Cd&3^$tb]);$Mf=int32($W[$Cd]+$bd);$W[$Cd]=$Mf;}$Lf=$W[0];$bd=xxtea_mx($Mf,$Lf,$Oe,$x[$Cd&3^$tb]);$Mf=int32($W[$B]+$bd);$W[$B]=$Mf;}return
long2str($W,false);}function
decrypt_string($Je,$x){if($Je==""){return"";}$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Je,false);$B=count($W)-1;$Mf=$W[$B];$Lf=$W[0];$F=floor(6+52/($B+1));$Oe=int32($F*0x9E3779B9);while($Oe){$tb=$Oe>>2&3;for($Cd=$B;$Cd>0;$Cd--){$Mf=$W[$Cd-1];$bd=xxtea_mx($Mf,$Lf,$Oe,$x[$Cd&3^$tb]);$Lf=int32($W[$Cd]-$bd);$W[$Cd]=$Lf;}$Mf=$W[$B];$bd=xxtea_mx($Mf,$Lf,$Oe,$x[$Cd&3^$tb]);$Lf=int32($W[0]-$bd);$W[0]=$Lf;$Oe=int32($Oe-0x9E3779B9);}return
long2str($W,true);}$e='';$T=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Md=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$Md[$x]=$X;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$x=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Wd=$b->permanentLogin();$Md[$x]="$x:".base64_encode($Wd?encrypt_string($_POST["password"],$Wd):"");cookie("adminer_permanent",implode(" ",$Md));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($T&&$_POST["token"]!=$T){page_header('Odhlásit','Neplatný token CSRF. Odešlete formulář znovu.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$x){set_session($x,null);}$x=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Md[$x]){unset($Md[$x]);cookie("adminer_permanent",implode(" ",$Md));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlášení proběhlo v pořádku.');}}elseif($Md&&!$_SESSION["pwds"]){session_regenerate_id();$Wd=$b->permanentLogin();foreach($Md
as$x=>$X){list(,$Ha)=explode(":",$X);list($nb,$N,$V)=array_map('base64_decode',explode("-",$x));$_SESSION["pwds"][$nb][$N][$V]=decrypt_string(base64_decode($Ha),$Wd);}}function
auth_error($Hb=null){global$e,$b,$T;$Be=session_name();$i="";if(!$_COOKIE[$Be]&&$_GET[$Be]&&ini_bool("session.use_only_cookies")){$i='Session proměnné musí být povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$Be]||$_GET[$Be])&&!$T){$i='Session vypršela, přihlašte se prosím znovu.';}else{$Ld=&get_session("pwds");if(isset($Ld)){$i=h($Hb?$Hb->getMessage():(is_string($e)?$e:'Neplatné přihlašovací údaje.'));$Ld=null;}}}page_header('Přihlásit se',$i,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Žádná extenze',sprintf('Není dostupná žádná z podporovaných PHP extenzí (%s).',implode(", ",$Rd)),false);page_footer("auth");exit;}$e=connect();}if(is_string($e)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$T=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$T;}$i=($_POST?($_POST["token"]==$T?"":'Neplatný token CSRF. Odešlete formulář znovu.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','"post_max_size"')));function
connect_error(){global$e,$T,$i,$ob;$g=array();if(DB!=""){page_header('Databáze'.": ".h(DB),'Nesprávná databáze.',true);}else{if($_POST["db"]&&!$i){queries_redirect(substr(ME,0,-1),'Databáze byly odstraněny.',drop_databases($_POST["db"]));}page_header('Vybrat databázi',$i,false);echo"<p><a href='".h(ME)."database='>".'Vytvořit novou databázi'."</a>\n";foreach(array('privileges'=>'Oprávnění','processlist'=>'Seznam procesů','variables'=>'Proměnné','status'=>'Stav',)as$x=>$X){if(support($x)){echo"<a href='".h(ME)."$x='>$X</a>\n";}}echo"<p>".sprintf('Verze %s: %s přes PHP extenzi %s',$ob[DRIVER],"<b>$e->server_info</b>","<b>$e->extension</b>")."\n","<p>".sprintf('Přihlášen jako: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$g=get_databases();if($g){$we=support("scheme");$c=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".'Databáze'."<td>".'Porovnávání'."<td>".'Tabulky'."</thead>\n";foreach($g
as$h){$pe=h(ME)."db=".urlencode($h);echo"<tr".odd()."><td>".checkbox("db[]",$h,in_array($h,(array)$_POST["db"])),"<th><a href='$pe'>".h($h)."</a>","<td><a href='$pe".($we?"&amp;ns=":"")."&amp;database=' title='".'Pozměnit databázi'."'>".nbsp(db_collation($h,$c))."</a>","<td align='right'><a href='$pe&amp;schema=' id='tables-".h($h)."' title='".'Schéma databáze'."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".'Odstranit'."'".confirm("formChecked(this, /db/)",1).">\n";echo"<input type='hidden' name='token' value='$T'>\n","<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".'Obnovit'."</a>\n","</form>\n";}}page_footer("db");if($g){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$e->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}function
select($H,$f=null,$kc=""){$Jc=array();$u=array();$d=array();$_a=array();$tf=array();odd('');for($r=0;$J=$H->fetch_row();$r++){if(!$r){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($v=0;$v<count($J);$v++){$j=$H->fetch_field();$C=$j->name;$wd=$j->orgtable;$vd=$j->orgname;if($kc){$Jc[$v]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));}elseif($wd!=""){if(!isset($u[$wd])){$u[$wd]=array();foreach(indexes($wd,$f)as$t){if($t["type"]=="PRIMARY"){$u[$wd]=array_flip($t["columns"]);break;}}$d[$wd]=$u[$wd];}if(isset($d[$wd][$vd])){unset($d[$wd][$vd]);$u[$wd][$vd]=$v;$Jc[$v]=$wd;}}if($j->charsetnr==63){$_a[$v]=true;}$tf[$v]=$j->type;$C=h($C);echo"<th".($wd!=""||$j->name!=$vd?" title='".h(($wd!=""?"$wd.":"").$vd)."'":"").">".($kc?"<a href='$kc".strtolower($C)."' target='_blank' rel='noreferrer'>$C</a>":$C);}echo"</thead>\n";}echo"<tr".odd().">";foreach($J
as$x=>$X){if(!isset($X)){$X="<i>NULL</i>";}elseif($_a[$x]&&!is_utf8($X)){$X="<i>".lang(array('%d bajt','%d bajty','%d bajtů'),strlen($X))."</i>";}elseif(!strlen($X)){$X="&nbsp;";}else{$X=h($X);if($tf[$x]==254){$X="<code>$X</code>";}}if(isset($Jc[$x])&&!$d[$Jc[$x]]){if($kc){$z=$Jc[$x].urlencode($J[array_search("table=",$Jc)]);}else{$z="edit=".urlencode($Jc[$x]);foreach($u[$Jc[$x]]as$Ia=>$v){$z.="&where".urlencode("[".bracket_escape($Ia)."]")."=".urlencode($J[$v]);}}$X="<a href='".h(ME.$z)."'>$X</a>";}echo"<td>$X";}}echo($r?"</table>":"<p class='message'>".'Žádné řádky.')."\n";}function
referencable_primary($ye){$I=array();foreach(table_status()as$Se=>$R){if($Se!=$ye&&fk_support($R)){foreach(fields($Se)as$j){if($j["primary"]){if($I[$Se]){unset($I[$Se]);break;}$I[$Se]=$j;}}}}return$I;}function
textarea($C,$Y,$K=10,$La=80){echo"<textarea name='$C' rows='$K' cols='$La' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($Y)){foreach($Y
as$X){echo
h($X)."\n\n\n";}}else{echo
h($Y);}echo"</textarea>";}function
format_time($Fe,$_b){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$_b))-array_sum(explode(" ",$Fe)))).")</span>";}function
edit_type($x,$j,$c,$m=array()){global$Ke,$tf,$_f,$nd;echo'<td><select name="',$x,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$j["type"]||isset($tf[$j["type"]])?array():array($j["type"]))+$Ke+($m?array('Cizí klíče'=>$m):array()),$j["type"]),'</select>
<td><input name="',$x,'[length]" value="',h($j["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$x"."[collation]'".(ereg('(char|text|enum|set)$',$j["type"])?"":" class='hidden'").'><option value="">('.'porovnávání'.')'.optionlist($c,$j["collation"]).'</select>',($_f?"<select name='$x"."[unsigned]'".(!$j["type"]||ereg('(int|float|double|decimal)$',$j["type"])?"":" class='hidden'").'><option>'.optionlist($_f,$j["unsigned"]).'</select>':''),($m?"<select name='$x"."[on_delete]'".(ereg("`",$j["type"])?"":" class='hidden'")."><option value=''>(".'Při smazání'.")".optionlist(explode("|",$nd),$j["on_delete"])."</select> ":" ");}function
process_length($Hc){global$Cb;return(preg_match("~^\\s*(?:$Cb)(?:\\s*,\\s*(?:$Cb))*\\s*\$~",$Hc)&&preg_match_all("~$Cb~",$Hc,$Mc)?implode(",",$Mc[0]):preg_replace('~[^0-9,+-]~','',$Hc));}function
process_type($j,$Ja="COLLATE"){global$_f;return" $j[type]".($j["length"]!=""?"(".process_length($j["length"]).")":"").(ereg('int|float|double|decimal',$j["type"])&&in_array($j["unsigned"],$_f)?" $j[unsigned]":"").(ereg('char|text|enum|set',$j["type"])&&$j["collation"]?" $Ja ".q($j["collation"]):"");}function
process_field($j,$rf){return
array(idf_escape($j["field"]),process_type($rf),($j["null"]?" NULL":" NOT NULL"),(isset($j["default"])?" DEFAULT ".(($j["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$j["default"]))||($j["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$j["default"]))?$j["default"]:q($j["default"])):""),($j["on_update"]?" ON UPDATE $j[on_update]":""),(support("comment")&&$j["comment"]!=""?" COMMENT ".q($j["comment"]):""),($j["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(ereg("$x|$X",$U)){return" class='$x'";}}}function
edit_fields($k,$c,$U="TABLE",$qa=0,$m=array(),$Qa=false){global$rc;echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?'Název sloupce':'Název parametru'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Délka
<td>Volby
';if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>Výchozí hodnoty
',(support("comment")?"<td".($Qa?"":" class='hidden'").">".'Komentář':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($k))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.3' alt='+' title='".'Přidat další'."'>",'<script type="text/javascript">row_count = ',count($k),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($k
as$r=>$j){$r++;$xd=$j[($_POST?"orig":"field")];$lb=(isset($_POST["add"][$r-1])||(isset($j["field"])&&!$_POST["drop_col"][$r]))&&(support("drop_col")||$xd=="");echo'<tr',($lb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$r][inout]",explode("|",$rc),$j["inout"]):""),'<th>';if($lb){echo'<input name="fields[',$r,'][field]" value="',h($j["field"]),'" onchange="',($j["field"]!=""||count($k)>1?"":"editingAddRow(this, $qa); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$r,'][orig]" value="',h($xd),'">
';edit_type("fields[$r]",$j,$c,$m);if($U=="TABLE"){echo'<td>',checkbox("fields[$r][null]",1,$j["null"]),'<td><input type="radio" name="auto_increment_col" value="',$r,'"';if($j["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$r][has_default]",1,$j["has_default"]),'<input name="fields[',$r,'][default]" value="',h($j["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Qa?"":" class='hidden'")."><input name='fields[$r][comment]' value='".h($j["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.3' alt='+' title='".'Přidat další'."' onclick='return !editingAddRow(this, $qa, 1);'>&nbsp;"."<input type='image' name='up[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.3.3' alt='^' title='".'Přesunout nahoru'."'>&nbsp;"."<input type='image' name='down[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.3.3' alt='v' title='".'Přesunout dolů'."'>&nbsp;":""),($xd==""||support("drop_col")?"<input type='image' name='drop_col[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.3' alt='x' title='".'Odebrat'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$k){ksort($k);$id=0;if($_POST["up"]){$Bc=0;foreach($k
as$x=>$j){if(key($_POST["up"])==$x){unset($k[$x]);array_splice($k,$Bc,0,array($j));break;}if(isset($j["field"])){$Bc=$id;}$id++;}}if($_POST["down"]){$Yb=false;foreach($k
as$x=>$j){if(isset($j["field"])&&$Yb){unset($k[key($_POST["down"])]);array_splice($k,$id,0,array($Yb));break;}if(key($_POST["down"])==$x){$Yb=$j;}$id++;}}$k=array_values($k);if($_POST["add"]){array_splice($k,key($_POST["add"]),0,array(array()));}}function
normalize_enum($A){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($A[0][0].$A[0][0],$A[0][0],substr($A[0],1,-1))),'\\'))."'";}function
grant($p,$Yd,$d,$md){if(!$Yd){return
true;}if($Yd==array("ALL PRIVILEGES","GRANT OPTION")){return($p=="GRANT"?queries("$p ALL PRIVILEGES$md WITH GRANT OPTION"):queries("$p ALL PRIVILEGES$md")&&queries("$p GRANT OPTION$md"));}return
queries("$p ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$d, ",$Yd).$d).$md);}function
drop_create($pb,$Xa,$_,$Wc,$Uc,$Vc,$C){if($_POST["drop"]){return
query_redirect($pb,$_,$Wc,true,!$_POST["dropped"]);}$qb=$C!=""&&($_POST["dropped"]||queries($pb));$Za=queries($Xa);if(!queries_redirect($_,($C!=""?$Uc:$Vc),$Za)&&$qb){redirect(null,$Wc);}return$qb;}function
tar_file($Sb,$Ta){$I=pack("a100a8a8a8a12a12",$Sb,644,0,0,decoct(strlen($Ta)),decoct(time()));$Ga=8*32;for($r=0;$r<strlen($I);$r++){$Ga+=ord($I{$r});}$I.=sprintf("%06o",$Ga)."\0 ";return$I.str_repeat("\0",512-strlen($I)).$Ta.str_repeat("\0",511-(strlen($Ta)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$nd="RESTRICT|CASCADE|SET NULL|NO ACTION";$Cb="'(?:''|[^'\\\\]|\\\\.)*+'";$rc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$a=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$e->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$k=fields($a);if(!$k){$i=error();}$S=($k?table_status($a):array());page_header(($k&&is_view($S)?'Pohled':'Tabulka').": ".h($a),$i);$b->selectLinks($S);$Pa=$S["Comment"];if($Pa!=""){echo"<p>".'Komentář'.": ".h($Pa)."\n";}if($k){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Sloupec'."<td>".'Typ'.(support("comment")?"<td>".'Komentář':"")."</thead>\n";foreach($k
as$j){echo"<tr".odd()."><th>".h($j["field"]),"<td title='".h($j["collation"])."'>".h($j["full_type"]).($j["null"]?" <i>NULL</i>":"").($j["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($j["default"])?" [<b>".h($j["default"])."</b>]":""),(support("comment")?"<td>".nbsp($j["comment"]):""),"\n";}echo"</table>\n";if(!is_view($S)){echo"<h3>".'Indexy'."</h3>\n";$u=indexes($a);if($u){echo"<table cellspacing='0'>\n";foreach($u
as$C=>$t){ksort($t["columns"]);$Vd=array();foreach($t["columns"]as$x=>$X){$Vd[]="<i>".h($X)."</i>".($t["lengths"][$x]?"(".$t["lengths"][$x].")":"");}echo"<tr title='".h($C)."'><th>$t[type]<td>".implode(", ",$Vd)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Pozměnit indexy'."</a>\n";if(fk_support($S)){echo"<h3>".'Cizí klíče'."</h3>\n";$m=foreign_keys($a);if($m){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Zdroj'."<td>".'Cíl'."<td>".'Při smazání'."<td>".'Při změně'.($w!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($m
as$C=>$l){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$l["source"]))."</i>","<td><a href='".h($l["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($l["db"]),ME):($l["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($l["ns"]),ME):ME))."table=".urlencode($l["table"])."'>".($l["db"]!=""?"<b>".h($l["db"])."</b>.":"").($l["ns"]!=""?"<b>".h($l["ns"])."</b>.":"").h($l["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$l["target"]))."</i>)","<td>".nbsp($l["on_delete"])."\n","<td>".nbsp($l["on_update"])."\n";if($w!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.'Změnit'.'</a>';}}echo"</table>\n";}if($w!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Přidat cizí klíč'."</a>\n";}}if(support("trigger")){echo"<h3>".'Triggery'."</h3>\n";$qf=triggers($a);if($qf){echo"<table cellspacing='0'>\n";foreach($qf
as$x=>$X){echo"<tr valign='top'><td>$X[0]<td>$X[1]<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".'Změnit'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Přidat trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Schéma databáze',"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$Te=array();$Ue=array();$C="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$C-".DB]?"$C-".DB:$C)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$Mc,PREG_SET_ORDER);foreach($Mc
as$r=>$A){$Te[$A[1]]=array($A[2],$A[3]);$Ue[]="\n\t'".js_escape($A[1])."': [ $A[2], $A[3] ]";}$jf=0;$za=-1;$ve=array();$ie=array();$Fc=array();foreach(table_status()as$S){if(!isset($S["Engine"])){continue;}$Od=0;$ve[$S["Name"]]["fields"]=array();foreach(fields($S["Name"])as$C=>$j){$Od+=1.25;$j["pos"]=$Od;$ve[$S["Name"]]["fields"][$C]=$j;}$ve[$S["Name"]]["pos"]=($Te[$S["Name"]]?$Te[$S["Name"]]:array($jf,0));foreach($b->foreignKeys($S["Name"])as$X){if(!$X["db"]){$Dc=$za;if($Te[$S["Name"]][1]||$Te[$X["table"]][1]){$Dc=min(floatval($Te[$S["Name"]][1]),floatval($Te[$X["table"]][1]))-1;}else{$za-=.1;}while($Fc[(string)$Dc]){$Dc-=.0001;}$ve[$S["Name"]]["references"][$X["table"]][(string)$Dc]=array($X["source"],$X["target"]);$ie[$X["table"]][$S["Name"]][(string)$Dc]=$X["target"];$Fc[(string)$Dc]=true;}}$jf=max($jf,$ve[$S["Name"]]["pos"][0]+2.5+$Od);}echo'<div id="schema" style="height: ',$jf,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$Ue)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$jf,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($ve
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a><br>\n";foreach($R["fields"]as$j){$X='<span'.type_class($j["type"]).' title="'.h($j["full_type"].($j["null"]?" NULL":'')).'">'.h($j["field"]).'</span>';echo($j["primary"]?"<i>$X</i>":$X)."<br>\n";}foreach((array)$R["references"]as$af=>$je){foreach($je
as$Dc=>$fe){$Ec=$Dc-$Te[$C][1];$r=0;foreach($fe[0]as$Ce){echo"<div class='references' title='".h($af)."' id='refs$Dc-".($r++)."' style='left: $Ec"."em; top: ".$R["fields"][$Ce]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Ec)."em;'></div></div>\n";}}}foreach((array)$ie[$C]as$af=>$je){foreach($je
as$Dc=>$d){$Ec=$Dc-$Te[$C][1];$r=0;foreach($d
as$Ze){echo"<div class='references' title='".h($af)."' id='refd$Dc-".($r++)."' style='left: $Ec"."em; top: ".$R["fields"][$Ze]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.3.3'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Ec)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($ve
as$C=>$R){foreach((array)$R["references"]as$af=>$je){foreach($je
as$Dc=>$fe){$Yc=$jf;$Qc=-10;foreach($fe[0]as$x=>$Ce){$Pd=$R["pos"][0]+$R["fields"][$Ce]["pos"];$Qd=$ve[$af]["pos"][0]+$ve[$af]["fields"][$fe[1][$x]]["pos"];$Yc=min($Yc,$Pd,$Qd);$Qc=max($Qc,$Pd,$Qd);}echo"<div class='references' id='refl$Dc' style='left: $Dc"."em; top: $Yc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Qc-$Yc)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Trvalý odkaz</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST){$Va="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x){$Va.="&$x=".urlencode($_POST[$x]);}cookie("adminer_export",substr($Va,1));$Nb=dump_headers(($a!=""?$a:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$vc=($_POST["format"]=="sql");if($vc){echo"-- Adminer $ga ".$ob[DRIVER]." dump

".($w!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($e->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$Q=$_POST["db_style"];$g=array(DB);if(DB==""){$g=$_POST["databases"];if(is_string($g)){$g=explode("\n",rtrim(str_replace("\r","",$g),"\n"));}}foreach((array)$g
as$h){if($e->select_db($h)){if($vc&&ereg('CREATE',$Q)&&($Xa=$e->result("SHOW CREATE DATABASE ".idf_escape($h),1))){if($Q=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($h).";\n";}echo($Q=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$Xa):$Xa).";\n";}if($vc){if($Q){echo
use_sql($h).";\n\n";}if(in_array("CREATE+ALTER",array($Q,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$Ad="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$qe){foreach(get_rows("SHOW $qe STATUS WHERE Db = ".q($h),null,"-- ")as$J){$Ad.=($Q!='DROP+CREATE'?"DROP $qe IF EXISTS ".idf_escape($J["Name"]).";;\n":"").$e->result("SHOW CREATE $qe ".idf_escape($J["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$J){$Ad.=($Q!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($J["Name"]).";;\n":"").$e->result("SHOW CREATE EVENT ".idf_escape($J["Name"]),3).";;\n\n";}}if($Ad){echo"DELIMITER ;;\n\n$Ad"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$Gf=array();foreach(table_status()as$S){$R=(DB==""||in_array($S["Name"],(array)$_POST["tables"]));$cb=(DB==""||in_array($S["Name"],(array)$_POST["data"]));if($R||$cb){if(!is_view($S)){if($Nb=="tar"){ob_start();}$b->dumpTable($S["Name"],($R?$_POST["table_style"]:""));if($cb){$b->dumpData($S["Name"],$_POST["data_style"],"SELECT * FROM ".table($S["Name"]));}if($vc&&$_POST["triggers"]&&$R&&($qf=trigger_sql($S["Name"],$_POST["table_style"]))){echo"\nDELIMITER ;;\n$qf\nDELIMITER ;\n";}if($Nb=="tar"){echo
tar_file((DB!=""?"":"$h/")."$S[Name].csv",ob_get_clean());}elseif($vc){echo"\n";}}elseif($vc){$Gf[]=$S["Name"];}}}foreach($Gf
as$Ff){$b->dumpTable($Ff,$_POST["table_style"],true);}if($Nb=="tar"){echo
pack("x512");}}if($Q=="CREATE+ALTER"&&$vc){$G="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $G;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($G)as$J){$Pa=q($J["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["TABLE_COMMENT"]):$J["TABLE_COMMENT"]);echo"
				WHEN ".q($J["TABLE_NAME"])." THEN
					".(isset($J["ENGINE"])?"IF _engine != '$J[ENGINE]' OR _table_collation != '$J[TABLE_COLLATION]' OR _table_comment != $Pa THEN
						ALTER TABLE ".idf_escape($J["TABLE_NAME"])." ENGINE=$J[ENGINE] COLLATE=$J[TABLE_COLLATION] COMMENT=$Pa;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($Q,$_POST["table_style"]))&&$vc){echo"SELECT @adminer_alter;\n";}}}if($vc){echo"-- ".$e->result("SELECT NOW()")."\n";}exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$fb=array('','USE','DROP+CREATE','CREATE');$Ve=array('','DROP+CREATE','CREATE');$db=array('','TRUNCATE+INSERT','INSERT');if($w=="sql"){$fb[]='CREATE+ALTER';$Ve[]='CREATE+ALTER';$db[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$J);if(!$J){$J=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($J["events"])){$J["routines"]=$J["events"]=($_GET["dump"]=="");$J["triggers"]=$J["table_style"];}echo"<tr><th>".'Výstup'."<td>".html_select("output",$b->dumpOutput(),$J["output"],0)."\n";echo"<tr><th>".'Formát'."<td>".html_select("format",$b->dumpFormat(),$J["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".'Databáze'."<td>".html_select('db_style',$fb,$J["db_style"]).(support("routine")?checkbox("routines",1,$J["routines"],'Procedury a funkce'):"").(support("event")?checkbox("events",1,$J["events"],'Události'):"")),"<tr><th>".'Tabulky'."<td>".html_select('table_style',$Ve,$J["table_style"]).checkbox("auto_increment",1,$J["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$J["triggers"],'Triggery'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$db,$J["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$Td=array();if(DB!=""){$Fa=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Fa onclick='formCheck(this, /^tables\\[/);'>".'Tabulky'."</label>","<th style='text-align: right;'><label>".'Data'."<input type='checkbox' id='check-data'$Fa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Gf="";foreach(table_status()as$S){$C=$S["Name"];$Sd=ereg_replace("_.*","",$C);$Fa=($a==""||$a==(substr($a,-1)=="%"?"$Sd%":$C));$Vd="<tr><td>".checkbox("tables[]",$C,$Fa,$C,"formUncheck('check-tables');");if(is_view($S)){$Gf.="$Vd\n";}else{echo"$Vd<td align='right'><label>".($S["Engine"]=="InnoDB"&&$S["Rows"]?"~ ":"").$S["Rows"].checkbox("data[]",$C,$Fa,"","formUncheck('check-data');")."</label>\n";}$Td[$Sd]++;}echo$Gf;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Databáze'."</label></thead>\n";$g=get_databases();if($g){foreach($g
as$h){if(!information_schema($h)){$Sd=ereg_replace("_.*","",$h);echo"<tr><td>".checkbox("databases[]",$h,$a==""||$a=="$Sd%",$h,"formUncheck('check-databases');")."</label>\n";$Td[$Sd]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$Ub=true;foreach($Td
as$x=>$X){if($x!=""&&$X>1){echo($Ub?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$Ub=false;}}}elseif(isset($_GET["privileges"])){page_header('Oprávnění');$H=$e->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$p=$H;if(!$H){$H=$e->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($p?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Uživatel'."<th>".'Server'."<th>&nbsp;</thead>\n";while($J=$H->fetch_assoc()){echo'<tr'.odd().'><td>'.h($J["User"])."<td>".h($J["Host"]).'<td><a href="'.h(ME.'user='.urlencode($J["User"]).'&host='.urlencode($J["Host"])).'">'.'Upravit'."</a>\n";}if(!$p||DB!=""){echo"<tr".odd()."><td><input name='user'><td><input name='host' value='localhost'><td><input type='submit' value='".'Upravit'."'>\n";}echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.'Vytvořit uživatele'."</a>";}elseif(isset($_GET["sql"])){if(!$i&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$ic=&get_session("queries");$hc=&$ic[DB];if(!$i&&$_POST["clear"]){$hc=array();redirect(remove_from_uri("history"));}page_header('SQL příkaz',$i);if(!$i&&$_POST){$ac=false;$G=$_POST["query"];if($_POST["webfile"]){$ac=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$G=($ac?fread($ac,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$G=get_file("sql_file",true);}if(is_string($G)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",max(ini_get("memory_limit"),2*strlen($G)+memory_get_usage()+8e6));}if($G!=""&&strlen($G)<1e6){$F=$G.(ereg(';$',$G)?"":";");if(!$hc||end($hc)!=$F){$hc[]=$F;}}$De="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$ib=";";$id=0;$zb=true;$f=connect();if(is_object($f)&&DB!=""){$f->select_db(DB);}$Oa=0;$Eb=array();$Fd='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$kf=microtime();parse_str($_COOKIE["adminer_export"],$ka);$sb=$b->dumpFormat();unset($sb["sql"]);while($G!=""){if(!$id&&preg_match("~^$De*DELIMITER\\s+(.+)~i",$G,$A)){$ib=$A[1];$G=substr($G,strlen($A[0]));}else{preg_match('('.preg_quote($ib)."|$Fd)",$G,$A,PREG_OFFSET_CAPTURE,$id);$Yb=$A[0][0];if(!$Yb&&$ac&&!feof($ac)){$G.=fread($ac,1e5);}else{$id=$A[0][1]+strlen($Yb);if(!$Yb&&rtrim($G)==""){break;}if($Yb&&$Yb!=$ib){while(preg_match('('.($Yb=='/*'?'\\*/':($Yb=='['?']':(ereg('^-- |^#',$Yb)?"\n":preg_quote($Yb)."|\\\\."))).'|$)s',$G,$A,PREG_OFFSET_CAPTURE,$id)){$L=$A[0][0];$id=$A[0][1]+strlen($L);if(!$L&&$ac&&!feof($ac)){$id-=strlen($Yb);$G.=fread($ac,1e5);}elseif($L[0]!="\\"){break;}}}else{$zb=false;$F=substr($G,0,$A[0][1]);$Oa++;$Vd="<pre id='sql-$Oa'><code class='jush-$w'>".shorten_utf8(trim($F),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Vd;ob_flush();flush();}$Fe=microtime();if($e->multi_query($F)&&is_object($f)&&preg_match("~^$De*USE\\b~isU",$F)){$f->query($F);}do{$H=$e->store_result();$_b=microtime();$df=format_time($Fe,$_b).(strlen($F)<1000?" <a href='".h(ME)."sql=".urlencode(trim($F))."'>".'Upravit'."</a>":"");if($e->error){echo($_POST["only_errors"]?$Vd:""),"<p class='error'>".'Chyba v dotazu'.": ".error()."\n";$Eb[]=" <a href='#sql-$Oa'>$Oa</a>";if($_POST["error_stops"]){break
2;}}elseif(is_object($H)){select($H,$f);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($H->num_rows?lang(array('%d řádek','%d řádky','%d řádků'),$H->num_rows):"").$df;$s="export-$Oa";$Mb=", <a href='#$s' onclick=\"return !toggle('$s');\">".'Export'."</a><span id='$s' class='hidden'>: ".html_select("output",$b->dumpOutput(),$ka["output"])." ".html_select("format",$sb,$ka["format"])."<input type='hidden' name='query' value='".h($F)."'>"." <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'><input type='hidden' name='token' value='$T'></span>\n";if($f&&preg_match("~^($De|\\()*SELECT\\b~isU",$F)&&($Lb=explain($f,$F))){$s="explain-$Oa";echo", <a href='#$s' onclick=\"return !toggle('$s');\">EXPLAIN</a>$Mb","<div id='$s' class='hidden'>\n";select($Lb,$f,($w=="sql"?"http://dev.mysql.com/doc/refman/".substr($e->server_info,0,3)."/en/explain-output.html#explain_":""));echo"</div>\n";}else{echo$Mb;}echo"</form>\n";}}else{if(preg_match("~^$De*(CREATE|DROP|ALTER)$De+(DATABASE|SCHEMA)\\b~isU",$F)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($e->info)."'>".lang(array('Příkaz proběhl v pořádku, byl změněn %d záznam.','Příkaz proběhl v pořádku, byly změněny %d záznamy.','Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),$e->affected_rows)."$df\n";}}$Fe=$_b;}while($e->next_result());$G=substr($G,$id);$id=0;}}}}if($zb){echo"<p class='message'>".'Žádné příkazy k vykonání.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d příkaz proběhl v pořádku.','%d příkazy proběhly v pořádku.','%d příkazů proběhlo v pořádku.'),$Oa-count($Eb)).format_time($kf,microtime())."\n";}elseif($Eb&&$Oa>1){echo"<p class='error'>".'Chyba v dotazu'.": ".implode("",$Eb)."\n";}}else{echo"<p class='error'>".upload_error($G)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$F=$_GET["sql"];if($_POST){$F=$_POST["query"];}elseif($_GET["history"]=="all"){$F=$hc;}elseif($_GET["history"]!=""){$F=$hc[$_GET["history"]];}textarea("query",$F,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Nahrání souboru'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'Nahrávání souborů není povoleno.'),'<p>
<input type="submit" value="Provést" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$T,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Zastavit při chybě')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Zobrazit pouze chyby')."\n";print_fieldset("webfile",'Ze serveru',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$Ra=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$x=>$X){if(extension_loaded($X)){$Ra[]=".$x";}}echo
sprintf('Soubor %s na webovém serveru',"<code>adminer.sql".($Ra?"[".implode("|",$Ra)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Spustit soubor'.'">',"</div></fieldset>\n";if($hc){print_fieldset("history",'Historie',$_GET["history"]!="");foreach($hc
as$x=>$X){echo'<a href="'.h(ME."sql=&history=$x").'">'.'Upravit'."</a> <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$X)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Vyčistit'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Upravit vše'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Af=(isset($_GET["select"])?$_POST["edit"]:$Z);$k=fields($a);foreach($k
as$C=>$j){if(!isset($j["privileges"][$Af?"update":"insert"])||$b->fieldName($j)==""){unset($k[$C]);}}if($_POST&&!$i&&!isset($_GET["select"])){$_=$_POST["referer"];if($_POST["insert"]){$_=($Af?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$_)){$_=ME."select=".urlencode($a);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $Z"),$_,'Položka byla smazána.');}else{$O=array();foreach($k
as$C=>$j){$X=process_input($j);if($X!==false&&$X!==null){$O[idf_escape($C)]=($Af?"\n".idf_escape($C)." = $X":$X);}}if($Af){if(!$O){redirect($_);}query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$O),"\nWHERE $Z"),$_,'Položka byla aktualizována.');}else{$H=insert_into($a,$O);$Cc=($H?last_id():0);queries_redirect($_,sprintf('Položka%s byla vložena.',($Cc?" $Cc":"")),$H);}}}$Se=$b->tableName(table_status($a));page_header(($Af?'Upravit':'Vložit'),$i,array("select"=>array($a,$Se)),$Se);$J=null;if($_POST["save"]){$J=(array)$_POST["fields"];}elseif($Z){$M=array();foreach($k
as$C=>$j){if(isset($j["privileges"]["select"])){$M[]=($_POST["clone"]&&$j["auto_increment"]?"'' AS ":(ereg("enum|set",$j["type"])?"1*".idf_escape($C)." AS ":"")).idf_escape($C);}}$J=array();if($M){$K=get_rows("SELECT".limit(implode(", ",$M)." FROM ".table($a)," WHERE $Z",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false){echo"<p class='error'>".'Žádné řádky.'."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($k){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($k
as$C=>$j){echo"<tr><th>".$b->fieldName($j);$hb=$_GET["set"][bracket_escape($C)];$Y=(isset($J)?($J[$C]!=""&&ereg("enum|set",$j["type"])?(is_array($J[$C])?array_sum($J[$C]):+$J[$C]):$J[$C]):(!$Af&&$j["auto_increment"]?"":(isset($_GET["select"])?false:(isset($hb)?$hb:$j["default"]))));if(!$_POST["save"]&&is_string($Y)){$Y=$b->editVal($Y,$j);}$n=($_POST["save"]?(string)$_POST["function"][$C]:($Af&&$j["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:(isset($Y)?'':'NULL'))));if($j["type"]=="timestamp"&&$Y=="CURRENT_TIMESTAMP"){$Y="";$n="now";}input($j,$Y,$n);echo"\n";}echo"</table>\n";}echo'<p>
';if($k){echo"<input type='submit' value='".'Uložit'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Af?'Uložit a pokračovat v editaci':'Uložit a vložit další')."' title='Ctrl+Shift+Enter'>\n";}}echo($Af?"<input type='submit' name='delete' value='".'Smazat'."' onclick=\"return confirm('".'Opravdu?'."');\">\n":($_POST||!$k?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$Gd=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$he=referencable_primary($a);$m=array();foreach($he
as$Se=>$j){$m[str_replace("`","``",$Se)."`".str_replace("`","``",$j["field"])]=$Se;}$zd=array();$_d=array();if($a!=""){$zd=fields($a);$_d=table_status($a);}if($_POST&&!$_POST["fields"]){$_POST["fields"]=array();}if($_POST&&!$i&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($a),substr(ME,0,-1),'Tabulka byla odstraněna.');}else{$k=array();$Wb=array();ksort($_POST["fields"]);$yd=reset($zd);$oa="FIRST";foreach($_POST["fields"]as$x=>$j){$l=$m[$j["type"]];$rf=(isset($l)?$he[$l]:$j);if($j["field"]!=""){if(!$j["has_default"]){$j["default"]=null;}$hb=eregi_replace(" *on update CURRENT_TIMESTAMP","",$j["default"]);if($hb!=$j["default"]){$j["on_update"]="CURRENT_TIMESTAMP";$j["default"]=$hb;}if($x==$_POST["auto_increment_col"]){$j["auto_increment"]=true;}$ae=process_field($j,$rf);if($ae!=process_field($yd,$yd)){$k[]=array($j["orig"],$ae,$oa);}if(isset($l)){$Wb[idf_escape($j["field"])]=($a!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($j["field"]).") REFERENCES ".table($m[$j["type"]])." (".idf_escape($rf["field"]).")".(ereg("^($nd)\$",$j["on_delete"])?" ON DELETE $j[on_delete]":"");}$oa="AFTER ".idf_escape($j["field"]);}elseif($j["orig"]!=""){$k[]=array($j["orig"]);}if($j["orig"]!=""){$yd=next($zd);}}$Id="";if(in_array($_POST["partition_by"],$Gd)){$Jd=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$x=>$X){$Y=$_POST["partition_values"][$x];$Jd[]="\nPARTITION ".idf_escape($X)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Id.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($Jd?" (".implode(",",$Jd)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($a!=""&&support("partitioning")){$Id.="\nREMOVE PARTITIONING";}$Tc='Tabulka byla změněna.';if($a==""){cookie("adminer_engine",$_POST["Engine"]);$Tc='Tabulka byla vytvořena.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$Tc,alter_table($a,$_POST["name"],$k,$Wb,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$_d["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$_d["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$Id));}}page_header(($a!=""?'Pozměnit tabulku':'Vytvořit tabulku'),$i,array("table"=>$a),$a);$J=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($tf["int"])?"int":(isset($tf["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$J=$_POST;if($J["auto_increment_col"]){$J["fields"][$J["auto_increment_col"]]["auto_increment"]=true;}process_fields($J["fields"]);}elseif($a!=""){$J=$_d;$J["name"]=$a;$J["fields"]=array();if(!$_GET["auto_increment"]){$J["Auto_increment"]="";}foreach($zd
as$j){$j["has_default"]=isset($j["default"]);if($j["on_update"]){$j["default"].=" ON UPDATE $j[on_update]";}$J["fields"][]=$j;}if(support("partitioning")){$bc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$H=$e->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $bc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($J["partition_by"],$J["partitions"],$J["partition"])=$H->fetch_row();$J["partition_names"]=array();$J["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $bc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$te){$J["partition_names"][]=$te["PARTITION_NAME"];$J["partition_values"][]=$te["PARTITION_DESCRIPTION"];}$J["partition_names"][]="";}}$c=collations();$Ne=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($Ne&&count($J["fields"])>$Ne){echo"<p class='error'>".h(sprintf('Byl překročen maximální povolený počet polí. Zvyšte prosím %s a %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$Bb=engines();foreach($Bb
as$Ab){if(!strcasecmp($Ab,$J["Engine"])){$J["Engine"]=$Ab;break;}}echo'
<form action="" method="post" id="form">
<p>
Název tabulky: <input name="name" maxlength="64" value="',h($J["name"]),'">
';if($a==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($Bb?html_select("Engine",array(""=>"(".'úložiště'.")")+$Bb,$J["Engine"]):""),' ',($c&&!ereg("sqlite|mssql",$w)?html_select("Collation",array(""=>"(".'porovnávání'.")")+$c,$J["Collation"]):""),' <input type="submit" value="Uložit">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Qa=($_POST?$_POST["comments"]:$J["Comment"]!="");if(!$_POST&&!$Qa){foreach($J["fields"]as$j){if($j["comment"]!=""){$Qa=true;break;}}}edit_fields($J["fields"],$c,"TABLE",$Ne,$m,$Qa);echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($J["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">Výchozí hodnoty</label>
',(support("comment")?checkbox("comments",1,$Qa,'Komentář',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($J["Comment"]).'" maxlength="60"'.($Qa?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Uložit">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
';if(support("partitioning")){$Hd=ereg('RANGE|LIST',$J["partition_by"]);print_fieldset("partition",'Rozdělit podle',$J["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Gd,$J["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($J["partition"]),'">)
Oddíly: <input name="partitions" size="2" value="',h($J["partitions"]),'"',($Hd||!$J["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($Hd?"":" class='hidden'"),'>
<thead><tr><th>Název oddílu<th>Hodnoty</thead>
';foreach($J["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($J["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($J["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$pc=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a);if(eregi("MyISAM|M?aria",$S["Engine"])){$pc[]="FULLTEXT";}$u=indexes($a);if($w=="sqlite"){unset($pc[0]);unset($u[""]);}if($_POST&&!$i&&!$_POST["add"]){$ra=array();foreach($_POST["indexes"]as$t){$C=$t["name"];if(in_array($t["type"],$pc)){$d=array();$Ic=array();$O=array();ksort($t["columns"]);foreach($t["columns"]as$x=>$Ma){if($Ma!=""){$Hc=$t["lengths"][$x];$O[]=idf_escape($Ma).($Hc?"(".(+$Hc).")":"");$d[]=$Ma;$Ic[]=($Hc?$Hc:null);}}if($d){$Kb=$u[$C];if($Kb){ksort($Kb["columns"]);ksort($Kb["lengths"]);if($t["type"]==$Kb["type"]&&array_values($Kb["columns"])===$d&&(!$Kb["lengths"]||array_values($Kb["lengths"])===$Ic)){unset($u[$C]);continue;}}$ra[]=array($t["type"],$C,"(".implode(", ",$O).")");}}}foreach($u
as$C=>$Kb){$ra[]=array($Kb["type"],$C,"DROP");}if(!$ra){redirect(ME."table=".urlencode($a));}queries_redirect(ME."table=".urlencode($a),'Indexy byly změněny.',alter_indexes($a,$ra));}page_header('Indexy',$i,array("table"=>$a),$a);$k=array_keys(fields($a));$J=array("indexes"=>$u);if($_POST){$J=$_POST;if($_POST["add"]){foreach($J["indexes"]as$x=>$t){if($t["columns"][count($t["columns"])]!=""){$J["indexes"][$x]["columns"][]="";}}$t=end($J["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen')||array_filter($t["lengths"],'strlen')){$J["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($J["indexes"]as$x=>$t){$J["indexes"][$x]["name"]=$x;$J["indexes"][$x]["columns"][]="";}$J["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Typ indexu<th>Sloupec (délka)<th>Název</thead>
';$v=1;foreach($J["indexes"]as$t){echo"<tr><td>".html_select("indexes[$v][type]",array(-1=>"")+$pc,$t["type"],($v==count($J["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($t["columns"]);$r=1;foreach($t["columns"]as$x=>$Ma){echo"<span>".html_select("indexes[$v][columns][$r]",array(-1=>"")+$k,$Ma,($r==count($t["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($w=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$v][lengths][$r]' size='2' value='".h($t["lengths"][$x])."'> </span>";$r++;}echo"<td><input name='indexes[$v][name]' value='".h($t["name"])."'>\n";$v++;}echo'</table>
<p>
<input type="submit" value="Uložit">
<noscript><p><input type="submit" name="add" value="Přidat další"></noscript>
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$i&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Databáze byla odstraněna.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Databáze byla přejmenována.',rename_database($_POST["name"],$_POST["collation"]));}else{$g=explode("\n",str_replace("\r","",$_POST["name"]));$Le=true;$Bc="";foreach($g
as$h){if(count($g)==1||$h!=""){if(!create_database($h,$_POST["collation"])){$Le=false;}$Bc=$h;}}queries_redirect(ME."db=".urlencode($Bc),'Databáze byla vytvořena.',$Le);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Databáze byla změněna.');}}page_header(DB!=""?'Pozměnit databázi':'Vytvořit databázi',$i,array(),DB);$c=collations();$C=DB;$Ja=null;if($_POST){$C=$_POST["name"];$Ja=$_POST["collation"];}elseif(DB!=""){$Ja=db_collation(DB,$c);}elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$p){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$p,$A)&&$A[1]){$C=stripcslashes(idf_unescape("`$A[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input id="name" name="name" value="'.h($C).'" maxlength="64">')."\n".($c?html_select("collation",array(""=>"(".'porovnávání'.")")+$c,$Ja):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Uložit">
<?php
if(DB!=""){echo"<input type='submit' name='drop' value='".'Odstranit'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.3' alt='+' title='".'Přidat další'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Zavolat'.": ".h($da),$i);$qe=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$oc=array();$Ad=array();foreach($qe["fields"]as$r=>$j){if(substr($j["inout"],-3)=="OUT"){$Ad[$r]="@".idf_escape($j["field"])." AS ".idf_escape($j["field"]);}if(!$j["inout"]||substr($j["inout"],0,2)=="IN"){$oc[]=$r;}}if(!$i&&$_POST){$Da=array();foreach($qe["fields"]as$x=>$j){if(in_array($x,$oc)){$X=process_input($j);if($X===false){$X="''";}if(isset($Ad[$x])){$e->query("SET @".idf_escape($j["field"])." = $X");}}$Da[]=(isset($Ad[$x])?"@".idf_escape($j["field"]):$X);}$G=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Da).")";echo"<p><code class='jush-$w'>".h($G)."</code> <a href='".h(ME)."sql=".urlencode($G)."'>".'Upravit'."</a>\n";if(!$e->multi_query($G)){echo"<p class='error'>".error()."\n";}else{$f=connect();if(is_object($f)){$f->select_db(DB);}do{$H=$e->store_result();if(is_object($H)){select($H,$f);}else{echo"<p class='message'>".lang(array('Procedura byla zavolána, byl změněn %d záznam.','Procedura byla zavolána, byly změněny %d záznamy.','Procedura byla zavolána, bylo změněno %d záznamů.'),$e->affected_rows)."\n";}}while($e->next_result());if($Ad){select($e->query("SELECT ".implode(", ",$Ad)));}}}echo'
<form action="" method="post">
';if($oc){echo"<table cellspacing='0'>\n";foreach($oc
as$x){$j=$qe["fields"][$x];$C=$j["field"];echo"<tr><th>".$b->fieldName($j);$Y=$_POST["fields"][$C];if($Y!=""){if($j["type"]=="enum"){$Y=+$Y;}if($j["type"]=="set"){$Y=array_sum($Y);}}input($j,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Zavolat">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];if($_POST&&!$i&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($a)."\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($a),'Cizí klíč byl odstraněn.');}else{$Ce=array_filter($_POST["source"],'strlen');ksort($Ce);$Ze=array();foreach($Ce
as$x=>$X){$Ze[$x]=$_POST["target"][$x];}query_redirect("ALTER TABLE ".table($a).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Ce)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$Ze)).")".(ereg("^($nd)\$",$_POST["on_delete"])?" ON DELETE $_POST[on_delete]":"").(ereg("^($nd)\$",$_POST["on_update"])?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($a),($_GET["name"]!=""?'Cizí klíč byl změněn.':'Cizí klíč byl vytvořen.'));$i='Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.'."<br>$i";}}page_header('Cizí klíč',$i,array("table"=>$a),$a);$J=array("table"=>$a,"source"=>array(""));if($_POST){$J=$_POST;ksort($J["source"]);if($_POST["add"]){$J["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$J["target"]=array();}}elseif($_GET["name"]!=""){$m=foreign_keys($a);$J=$m[$_GET["name"]];$J["source"][]="";}$Ce=array_keys(fields($a));$Ze=($a===$J["table"]?$Ce:array_keys(fields($J["table"])));$ge=array();foreach(table_status()as$C=>$S){if(fk_support($S)){$ge[]=$C;}}echo'
<form action="" method="post">
<p>
';if($J["db"]==""&&$J["ns"]==""){echo'Cílová tabulka:
',html_select("table",$ge,$J["table"],"this.form['change-js'].value = '1'; if (!ajaxForm(this.form)) this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Změnit"></noscript>
<table cellspacing="0">
<thead><tr><th>Zdroj<th>Cíl</thead>
';$v=0;foreach($J["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$Ce,$X,($v==count($J["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$Ze,$J["target"][$x]);$v++;}echo'</table>
<p>
Při smazání: ',html_select("on_delete",array(-1=>"")+explode("|",$nd),$J["on_delete"]),' Při změně: ',html_select("on_update",array(-1=>"")+explode("|",$nd),$J["on_update"]),'<p>
<input type="submit" value="Uložit">
<noscript><p><input type="submit" name="add" value="Přidat sloupec"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$qb=false;if($_POST&&!$i){$qb=drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'Pohled byl odstraněn.','Pohled byl změněn.','Pohled byl vytvořen.',$a);}page_header(($a!=""?'Pozměnit pohled':'Vytvořit pohled'),$i,array("table"=>$a),$a);$J=$_POST;if(!$J&&$a!=""){$J=view($a);$J["name"]=$a;}echo'
<form action="" method="post">
<p>Název: <input name="name" value="',h($J["name"]),'" maxlength="64">
<p>';textarea("select",$J["select"]);echo'<p>
';if($qb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložit">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$uc=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$He=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$i){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Událost byla odstraněna.');}elseif(in_array($_POST["INTERVAL_FIELD"],$uc)&&isset($He[$_POST["STATUS"]])){$ue="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Událost byla změněna.':'Událost byla vytvořena.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$ue.($aa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$ue)."\n".$He[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Pozměnit událost'.": ".h($aa):'Vytvořit událost'),$i);$J=$_POST;if(!$J&&$aa!=""){$K=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$J=reset($K);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Název<td><input name="EVENT_NAME" value="',h($J["EVENT_NAME"]),'" maxlength="64">
<tr><th>Začátek<td><input name="STARTS" value="',h("$J[EXECUTE_AT]$J[STARTS]"),'">
<tr><th>Konec<td><input name="ENDS" value="',h($J["ENDS"]),'">
<tr><th>Každých<td><input name="INTERVAL_VALUE" value="',h($J["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$uc,$J["INTERVAL_FIELD"]),'<tr><th>Stav<td>',html_select("STATUS",$He,$J["STATUS"]),'<tr><th>Komentář<td><input name="EVENT_COMMENT" value="',h($J["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$J["ON_COMPLETION"]=="PRESERVE",'Po dokončení zachovat'),'</table>
<p>';textarea("EVENT_DEFINITION",$J["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Uložit">
';if($aa!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$qe=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$re=routine_languages();$qb=false;if($_POST&&!$i&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$O=array();$k=(array)$_POST["fields"];ksort($k);foreach($k
as$j){if($j["field"]!=""){$O[]=(ereg("^($rc)\$",$j["inout"])?"$j[inout] ":"").idf_escape($j["field"]).process_type($j,"CHARACTER SET");}}$qb=drop_create("DROP $qe ".idf_escape($da),"CREATE $qe ".idf_escape($_POST["name"])." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$re)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Procedura byla odstraněna.','Procedura byla změněna.','Procedura byla vytvořena.',$da);}page_header(($da!=""?(isset($_GET["function"])?'Změnit funkci':'Změnit proceduru').": ".h($da):(isset($_GET["function"])?'Vytvořit funkci':'Vytvořit proceduru')),$i);$c=get_vals("SHOW CHARACTER SET");sort($c);$J=array("fields"=>array());if($_POST){$J=$_POST;$J["fields"]=(array)$J["fields"];process_fields($J["fields"]);}elseif($da!=""){$J=routine($da,$qe);$J["name"]=$da;}echo'
<form action="" method="post" id="form">
<p>Název: <input name="name" value="',h($J["name"]),'" maxlength="64">
',($re?'Jazyk'.": ".html_select("language",$re,$J["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($J["fields"],$c,$qe);if(isset($_GET["function"])){echo"<tr><td>".'Návratový typ';edit_type("returns",$J["returns"],$c);}echo'</table>
<p>';textarea("definition",$J["definition"]);echo'<p>
<input type="submit" value="Uložit">
';if($da!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}if($qb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$pf=trigger_options();$of=array("INSERT","UPDATE","DELETE");$qb=false;if($_POST&&!$i&&in_array($_POST["Timing"],$pf["Timing"])&&in_array($_POST["Event"],$of)&&in_array($_POST["Type"],$pf["Type"])){$ef=" $_POST[Timing] $_POST[Event]";$md=" ON ".table($a);$qb=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($w=="pgsql"?$md:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($w=="mssql"?$md.$ef:$ef.$md).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($a),'Trigger byl odstraněn.','Trigger byl změněn.','Trigger byl vytvořen.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Změnit trigger'.": ".h($_GET["name"]):'Vytvořit trigger'),$i,array("table"=>$a));$J=$_POST;if(!$J){$J=trigger($_GET["name"])+array("Trigger"=>$a."_bi");}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Čas<td>',html_select("Timing",$pf["Timing"],$J["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Událost<td>',html_select("Event",$of,$J["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$pf["Type"],$J["Type"]),'</table>
<p>Název: <input name="Trigger" value="',h($J["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$J["Statement"]);echo'<p>
<input type="submit" value="Uložit">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}if($qb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$fa=$_GET["user"];$Yd=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$J){foreach(explode(",",($J["Privilege"]=="Grant option"?"":$J["Context"]))as$Ua){$Yd[$Ua][$J["Privilege"]]=$J["Comment"];}}$Yd["Server Admin"]+=$Yd["File access on server"];$Yd["Databases"]["Create routine"]=$Yd["Procedures"]["Create routine"];unset($Yd["Procedures"]["Create routine"]);$Yd["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X){$Yd["Columns"][$X]=$Yd["Tables"][$X];}unset($Yd["Server Admin"]["Usage"]);foreach($Yd["Tables"]as$x=>$X){unset($Yd["Databases"][$x]);}$dd=array();if($_POST){foreach($_POST["objects"]as$x=>$X){$dd[$X]=(array)$dd[$X]+(array)$_POST["grants"][$x];}}$dc=array();$kd="";if(isset($_GET["host"])&&($H=$e->query("SHOW GRANTS FOR ".q($fa)."@".q($_GET["host"])))){while($J=$H->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$J[0],$A)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$A[1],$Mc,PREG_SET_ORDER)){foreach($Mc
as$X){if($X[1]!="USAGE"){$dc["$A[2]$X[2]"][$X[1]]=true;}if(ereg(' WITH GRANT OPTION',$J[0])){$dc["$A[2]$X[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$J[0],$A)){$kd=$A[1];}}}if($_POST&&!$i){$ld=(isset($_GET["host"])?q($fa)."@".q($_GET["host"]):"''");$ed=q($_POST["user"])."@".q($_POST["host"]);$Kd=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $ld",ME."privileges=",'Uživatel byl odstraněn.');}else{$Za=false;if($ld!=$ed){$Za=queries(($e->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $ed IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $Kd");$i=!$Za;}elseif($_POST["pass"]!=$kd||!$_POST["hashed"]){queries("SET PASSWORD FOR $ed = ".($_POST["hashed"]?$Kd:"PASSWORD($Kd)"));}if(!$i){$ne=array();foreach($dd
as$hd=>$p){if(isset($_GET["grant"])){$p=array_filter($p);}$p=array_keys($p);if(isset($_GET["grant"])){$ne=array_diff(array_keys(array_filter($dd[$hd],'strlen')),$p);}elseif($ld==$ed){$jd=array_keys((array)$dc[$hd]);$ne=array_diff($jd,$p);$p=array_diff($p,$jd);unset($dc[$hd]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$hd,$A)&&(!grant("REVOKE",$ne,$A[2]," ON $A[1] FROM $ed")||!grant("GRANT",$p,$A[2]," ON $A[1] TO $ed"))){$i=true;break;}}}if(!$i&&isset($_GET["host"])){if($ld!=$ed){queries("DROP USER $ld");}elseif(!isset($_GET["grant"])){foreach($dc
as$hd=>$ne){if(preg_match('~^(.+)(\\(.*\\))?$~U',$hd,$A)){grant("REVOKE",array_keys($ne),$A[2]," ON $A[1] FROM $ed");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Uživatel byl změněn.':'Uživatel byl vytvořen.'),!$i);if($Za){$e->query("DROP USER $ed");}}}page_header((isset($_GET["host"])?'Uživatel'.": ".h("$fa@$_GET[host]"):'Vytvořit uživatele'),$i,array("privileges"=>array('','Oprávnění')));if($_POST){$J=$_POST;$dc=$dd;}else{$J=$_GET+array("host"=>$e->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$J["pass"]=$kd;if($kd!=""){$J["hashed"]=true;}$dc[DB!=""&&!isset($_GET["host"])?idf_escape(addcslashes(DB,"%_")).".*":""]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($J["host"]),'">
<tr><th>Uživatel<td><input name="user" maxlength="16" value="',h($J["user"]),'">
<tr><th>Heslo<td><input id="pass" name="pass" value="',h($J["pass"]),'">
';if(!$J["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$J["hashed"],'Zahašované',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($e->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Oprávnění'."</a>";$r=0;foreach($dc
as$hd=>$p){echo'<th>'.($hd!="*.*"?"<input name='objects[$r]' value='".h($hd)."' size='10'>":"<input type='hidden' name='objects[$r]' value='*.*' size='10'>*.*");$r++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Databáze',"Tables"=>'Tabulka',"Columns"=>'Sloupec',"Procedures"=>'Procedura',)as$Ua=>$jb){foreach((array)$Yd[$Ua]as$Xd=>$Pa){echo"<tr".odd()."><td".($jb?">$jb<td":" colspan='2'").' lang="en" title="'.h($Pa).'">'.h($Xd);$r=0;foreach($dc
as$hd=>$p){$C="'grants[$r][".h(strtoupper($Xd))."]'";$Y=$p[strtoupper($Xd)];if($Ua=="Server Admin"&&$hd!=(isset($dc["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".'Povolit'."<option value='0'".($Y=="0"?" selected":"").">".'Zakázat'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Xd=="All privileges"?" id='grants-$r-all'":($Xd=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$r-all');\"")).">";}$r++;}}}echo"</table>\n",'<p>
<input type="submit" value="Uložit">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$i){$zc=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".(+$X))){$zc++;}}queries_redirect(ME."processlist=",lang(array('Byl ukončen %d proces.','Byly ukončeny %d procesy.','Bylo ukončeno %d procesů.'),$zc),$zc||!$_POST["kill"]);}page_header('Seznam procesů',$i);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap checkable">
';$r=-1;foreach(process_list()as$r=>$J){if(!$r){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"")."<th>".implode("<th>",array_keys($J))."</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$J["Id"],0):"");foreach($J
as$x=>$X){echo"<td>".(($w=="sql"?$x=="Info"&&$X!="":$x=="current_query"&&$X!="<IDLE>")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($J["db"]!=""?"db=".urlencode($J["db"])."&":"")."sql=".urlencode($X)).'">'.'Upravit'.'</a>':nbsp($X));}echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($r+1)."/".sprintf('%d celkem',$e->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Ukončit'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status($a);$u=indexes($a);$k=fields($a);$m=column_foreign_keys($a);if($S["Oid"]=="t"){$u[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$la);$oe=array();$d=array();$cf=null;foreach($k
as$x=>$j){$C=$b->fieldName($j);if(isset($j["privileges"]["select"])&&$C!=""){$d[$x]=html_entity_decode(strip_tags($C));if(ereg('text|lob',$j["type"])){$cf=$b->selectLengthProcess();}}$oe+=$j["privileges"];}list($M,$q)=$b->selectColumnsProcess($d,$u);$Z=$b->selectSearchProcess($k,$u);$ud=$b->selectOrderProcess($k,$u);$y=$b->selectLimitProcess();$bc=($M?implode(", ",$M):($S["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($a);$ec=($q&&count($q)<count($M)?"\nGROUP BY ".implode(", ",$q):"").($ud?"\nORDER BY ".implode(", ",$ud):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$xf=>$J){echo$e->result("SELECT".limit(idf_escape(key($J))." FROM ".table($a)," WHERE ".where_check($xf).($Z?" AND ".implode(" AND ",$Z):"").($ud?" ORDER BY ".implode(", ",$ud):""),1));}exit;}if($_POST&&!$i){$Kf="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Ud=$zf=null;foreach($u
as$t){if($t["type"]=="PRIMARY"){$Ud=array_flip($t["columns"]);$zf=($M?$Ud:array());break;}}foreach((array)$zf
as$x=>$X){if(in_array(idf_escape($x),$M)){unset($zf[$x]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$zf===array()){$Jf=$Z;if(is_array($_POST["check"])){$Jf[]="($Kf)";}$G="SELECT $bc".($Jf?"\nWHERE ".implode(" AND ",$Jf):"").$ec;}else{$vf=array();foreach($_POST["check"]as$X){$vf[]="(SELECT".limit($bc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X).$ec,1).")";}$G=implode(" UNION ALL ",$vf);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($Z,$m)){if($_POST["save"]||$_POST["delete"]){$H=true;$ma=0;$G=table($a);$O=array();if(!$_POST["delete"]){foreach($d
as$C=>$X){$X=process_input($k[$C]);if($X!==null){if($_POST["clone"]){$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}elseif($X!==false){$O[]=idf_escape($C)." = $X";}}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a):" SET\n".implode(",\n",$O));}if($_POST["delete"]||$O){$Na="UPDATE";if($_POST["delete"]){$Na="DELETE";$G="FROM $G";}if($_POST["clone"]){$Na="INSERT";$G="INTO $G";}if($_POST["all"]||($zf===array()&&$_POST["check"])||count($q)<count($M)){$H=queries($Na." $G".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $Kf"));$ma=$e->affected_rows;}else{foreach((array)$_POST["check"]as$X){$H=queries($Na.limit1($G,"\nWHERE ".where_check($X)));if(!$H){break;}$ma+=$e->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$ma),$H);}elseif(!$_POST["import"]){if(!$_POST["val"]){$i='Dvojklikněte na políčko, které chcete změnit.';}else{$H=true;$ma=0;foreach($_POST["val"]as$xf=>$J){$O=array();foreach($J
as$x=>$X){$x=bracket_escape($x,1);$O[]=idf_escape($x)." = ".(ereg('char|text',$k[$x]["type"])||$X!=""?$b->processInput($k[$x],$X):"NULL");}$G=table($a)." SET ".implode(", ",$O);$Jf=" WHERE ".where_check($xf).($Z?" AND ".implode(" AND ",$Z):"");$H=queries("UPDATE".(count($q)<count($M)?" $G$Jf":limit1($G,$Jf)));if(!$H){break;}$ma+=$e->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$ma),$H);}}elseif(is_string($Rb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($la["output"])."&format=".urlencode($_POST["separator"]));$H=true;$La=array_keys($k);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Rb,$Mc);$ma=count($Mc[0]);begin();$ze=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Mc[0]as$x=>$X){preg_match_all("~((\"[^\"]*\")+|[^$ze]*)$ze~",$X.$ze,$Nc);if(!$x&&!array_diff($Nc[1],$La)){$La=$Nc[1];$ma--;}else{$O=array();foreach($Nc[1]as$r=>$Ia){$O[idf_escape($La[$r])]=($Ia==""&&$k[$La[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ia))));}$H=insert_update($a,$O,$Ud);if(!$H){break;}}}if($H){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),$ma),$H);queries("ROLLBACK");}else{$i=upload_error($Rb);}}}$Se=$b->tableName($S);page_header('Vypsat'.": $Se",$i);session_write_close();$O=null;if(isset($oe["insert"])){$O="";foreach((array)$_GET["where"]as$X){if(count($m[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"])))){$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}}$b->selectLinks($S,$O);if(!$d){echo"<p class='error'>".'Nepodařilo se vypsat tabulku'.($k?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$d);$b->selectSearchPrint($Z,$d,$u);$b->selectOrderPrint($ud,$d,$u);$b->selectLimitPrint($y);$b->selectLengthPrint($cf);$b->selectActionPrint();echo"</form>\n";$D=$_GET["page"];if($D=="last"){$Zb=$e->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));$D=floor(max(0,$Zb-1)/$y);}$G="SELECT".limit((+$y&&$q&&count($q)<count($M)&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").$bc,($Z?"\nWHERE ".implode(" AND ",$Z):"").$ec,($y!=""?+$y:null),($D?$y*$D:0),"\n");echo$b->selectQuery($G);$H=$e->query($G);if(!$H){echo"<p class='error'>".error()."\n";}else{if($w=="mssql"){$H->seek($y*$D);}$yb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($D&&$w=="oracle"){unset($J["RNUM"]);}$K[]=$J;}if($_GET["page"]!="last"){$Zb=(+$y&&$q&&count($q)<count($M)?($w=="sql"?$e->result(" SELECT FOUND_ROWS()"):$e->result("SELECT COUNT(*) FROM ($G) x")):count($K));}if(!$K){echo"<p class='message'>".'Žádné řádky.'."\n";}else{$ya=$b->backwardKeys($a,$Se);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$q&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upravit'."</a>");$cd=array();$o=array();reset($M);$de=1;foreach($K[0]as$x=>$X){if($S["Oid"]!="t"||$x!="oid"){$X=$_GET["columns"][key($M)];$j=$k[$M?($X?$X["col"]:current($M)):$x];$C=($j?$b->fieldName($j,$de):"*");if($C!=""){$de++;$cd[$x]=$C;$Ma=idf_escape($x);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x).($ud[0]==$Ma||$ud[0]==$x||(!$ud&&count($q)<count($M)&&$q[0]==$Ma)?'&desc%5B0%5D=1':'')).'">'.(!$M||$X?apply_sql_function($X["fun"],$C):h(current($M)))."</a>";}$o[$x]=$X["fun"];next($M);}}$Ic=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$x=>$X){$Ic[$x]=max($Ic[$x],min(40,strlen(utf8_decode($X))));}}}echo($ya?"<th>".'Vztahy':"")."</thead>\n";foreach($b->rowDescriptions($K,$m)as$B=>$J){$wf=unique_array($K[$B],$u);$xf="";foreach($wf
as$x=>$X){$xf.="&".(isset($X)?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$q&&$M?"":"<td>".checkbox("check[]",substr($xf,1),in_array(substr($xf,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($q)<count($M)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$xf)."'>".'upravit'."</a>"));foreach($J
as$x=>$X){if(isset($cd[$x])){$j=$k[$x];if($X!=""&&(!isset($yb[$x])||$yb[$x]!="")){$yb[$x]=(is_mail($X)?$cd[$x]:"");}$z="";$X=$b->editVal($X,$j);if(!isset($X)){$X="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$j["type"])&&$X!=""){$z=h(ME.'download='.urlencode($a).'&field='.urlencode($x).$xf);}if($X===""){$X="&nbsp;";}elseif($cf!=""&&ereg('text|blob',$j["type"])&&is_utf8($X)){$X=shorten_utf8($X,max(0,+$cf));}else{$X=h($X);}if(!$z){foreach((array)$m[$x]as$l){if(count($m[$x])==1||end($l["source"])==$x){$z="";foreach($l["source"]as$r=>$Ce){$z.=where_link($r,$l["target"][$r],$K[$B][$Ce]);}$z=h(($l["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($l["db"]),ME):ME).'select='.urlencode($l["table"]).$z);if(count($l["source"])==1){break;}}}}if($x=="COUNT(*)"){$z=h(ME."select=".urlencode($a));$r=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$wf)){$z.=h(where_link($r++,$W["col"],$W["val"],$W["op"]));}}foreach($wf
as$yc=>$W){$z.=h(where_link($r++,$yc,$W));}}}if(!$z){if(is_mail($X)){$z="mailto:$X";}if($be=is_url($J[$x])){$z=($be=="http"&&$ba?$J[$x]:"$be://www.adminer.org/redirect/?url=".urlencode($J[$x]));}}$s=h("val[$xf][".bracket_escape($x)."]");$Y=$_POST["val"][$xf][bracket_escape($x)];$gc=h(isset($Y)?$Y:$J[$x]);$Lc=strpos($X,"<i>...</i>");$vb=is_utf8($X)&&$K[$B][$x]==$J[$x]&&!$o[$x];$bf=ereg('text|lob',$j["type"]);echo(($_GET["modify"]&&$vb)||isset($Y)?"<td>".($bf?"<textarea name='$s' cols='30' rows='".(substr_count($J[$x],"\n")+1)."'>$gc</textarea>":"<input name='$s' value='$gc' size='$Ic[$x]'>"):"<td id='$s' ondblclick=\"".($vb?"selectDblClick(this, event".($Lc?", 2":($bf?", 1":"")).")":"alert('".h('Ke změně této hodnoty použijte odkaz upravit.')."')").";\">".$b->selectVal($X,$z,$j));}}if($ya){echo"<td>";}$b->backwardKeysPrint($ya,$K[$B]);echo"</tr>\n";}echo"</table>\n",(!$q&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($K||$D){$Gb=true;if($_GET["page"]!="last"&&+$y&&count($q)>=count($M)&&($Zb>=$y||$D)){$Zb=found_rows($S,$Z);if($Zb<max(1e4,2*($D+1)*$y)){ob_flush();flush();$Zb=$e->result("SELECT COUNT(*) FROM ".table($a).($Z?" WHERE ".implode(" AND ",$Z):""));}else{$Gb=false;}}echo"<p class='pages'>";if(+$y&&$Zb>$y){$Pc=floor(($Zb-1)/$y);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Stránka'."', '".($D+1)."'), event); return false;\">".'Stránka'."</a>:",pagination(0,$D).($D>5?" ...":"");for($r=max(1,$D-4);$r<min($Pc,$D+5);$r++){echo
pagination($r,$D);}echo($D+5<$Pc?" ...":"").($Gb?pagination($Pc,$D):' <a href="'.h(remove_from_uri()."&page=last").'">'.'poslední'."</a>");}echo" (".($Gb?"":"~ ").lang(array('%d řádek','%d řádky','%d řádků'),$Zb).") ".checkbox("all",1,0,'celý výsledek')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Upravit</legend><div>
<input type="submit" value="Uložit"',($_GET["modify"]?'':' title="'.'Dvojklikněte na políčko, které chcete změnit.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat" onclick="return confirm('Opravdu? (' + (this.form['all'].checked ? <?php echo$Zb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$Bd=$b->dumpOutput();echo($Bd?html_select("output",$Bd,$la["output"])." ":""),html_select("format",$b->dumpFormat(),$la["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($b->selectImportPrint()){print_fieldset("import",'Import',!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$la["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($yb,'strlen'),$d);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Ge=isset($_GET["status"]);page_header($Ge?'Stav':'Proměnné');$Ef=($Ge?show_status():show_variables());if(!$Ef){echo"<p class='message'>".'Žádné řádky.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($Ef
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($Ge?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Pe=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$S){$s=js_escape($S["Name"]);json_row("Comment-$s",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$x){json_row("$x-$s",nbsp($S[$x]));}foreach($Pe+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($S[$x]!=""){$X=number_format($S[$x],0,'.',' ');json_row("$x-$s",($x=="Rows"&&$S["Engine"]=="InnoDB"&&$X?"~ $X":$X));if(isset($Pe[$x])){$Pe[$x]+=($S["Engine"]!="InnoDB"||$x!="Data_free"?$S[$x]:0);}}elseif(array_key_exists($x,$S)){json_row("$x-$s");}}}}foreach($Pe
as$x=>$X){json_row("sum-$x",number_format($X,0,'.',' '));}json_row("");}else{foreach(count_tables(get_databases())as$h=>$X){json_row("tables-".js_escape($h),$X);}json_row("");}exit;}else{$Ye=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Ye&&!$i&&!$_POST["search"]){$H=true;$Tc="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$H=truncate_tables($_POST["tables"]);}$Tc='Tabulky byly vyprázdněny.';}elseif($_POST["move"]){$H=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Tc='Tabulky byly přesunuty.';}elseif($_POST["copy"]){$H=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Tc='Tabulky byly zkopírovány.';}elseif($_POST["drop"]){if($_POST["views"]){$H=drop_views($_POST["views"]);}if($H&&$_POST["tables"]){$H=drop_tables($_POST["tables"]);}$Tc='Tabulky byly odstraněny.';}elseif($_POST["tables"]&&($H=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($J=$H->fetch_assoc()){$Tc.="<b>".h($J["Table"])."</b>: ".h($J["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$Tc,$H);}page_header(($_GET["ns"]==""?'Databáze'.": ".h(DB):'Schéma'.": ".h($_GET["ns"])),$i,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tabulky a pohledy'."</h3>\n";$Xe=tables_list();if(!$Xe){echo"<p class='message'>".'Žádné tabulky.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Vyhledat data v tabulkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Vyhledat'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Tabulka','<td>'.'Úložiště','<td>'.'Porovnávání','<td>'.'Velikost dat','<td>'.'Velikost indexů','<td>'.'Volné místo','<td>'.'Auto Increment','<td>'.'Řádků',(support("comment")?'<td>'.'Komentář':''),"</thead>\n";foreach($Xe
as$C=>$U){$Ff=(isset($U)&&!eregi("table",$U));echo'<tr'.odd().'><td>'.checkbox(($Ff?"views[]":"tables[]"),$C,in_array($C,$Ye,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($C).'" title="'.'Zobrazit strukturu'.'">'.h($C).'</a>';if($Ff){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.'Pozměnit pohled'.'">'.'Pohled'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.'Vypsat data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Pozměnit tabulku'),"Index_length"=>array("indexes",'Pozměnit indexy'),"Data_free"=>array("edit",'Nová položka'),"Auto_increment"=>array("auto_increment=1&create",'Pozměnit tabulku'),"Rows"=>array("select",'Vypsat data'),)as$x=>$z){echo($z?"<td align='right'><a href='".h(ME."$z[0]=").urlencode($C)."' id='$x-".h($C)."' title='$z[1]'>?</a>":"<td id='$x-".h($C)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d celkem',count($Xe)),"<td>".nbsp($w=="sql"?$e->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x){echo"<td align='right' id='sum-$x'>&nbsp;";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".($w=="sql"?"<input type='submit' value='".'Analyzovat'."'> <input type='submit' name='optimize' value='".'Optimalizovat'."'> <input type='submit' name='check' value='".'Zkontrolovat'."'> <input type='submit' name='repair' value='".'Opravit'."'> ":"")."<input type='submit' name='truncate' value='".'Vyprázdnit'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Odstranit'."'".confirm("formChecked(this, /tables|views/)",1).">\n";$g=(support("scheme")?schemas():get_databases());if(count($g)!=1&&$w!="sqlite"){$h=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Přesunout do jiné databáze'.": ",($g?html_select("target",$g,$h):'<input name="target" value="'.h($h).'">')," <input type='submit' name='move' value='".'Přesunout'."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".'Zkopírovat'."' onclick='eventStop(event);'>":""),"\n";}echo"<input type='hidden' name='token' value='$T'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Vytvořit tabulku'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Vytvořit pohled'."</a>\n";}if(support("routine")){echo"<h3>".'Procedury a funkce'."</h3>\n";$se=routines();if($se){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Název'.'<td>'.'Typ'.'<td>'.'Návratový typ'."<td>&nbsp;</thead>\n";odd('');foreach($se
as$J){echo'<tr'.odd().'>','<th><a href="'.h(ME).($J["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($J["ROUTINE_NAME"]).'">'.h($J["ROUTINE_NAME"]).'</a>','<td>'.h($J["ROUTINE_TYPE"]),'<td>'.h($J["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($J["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($J["ROUTINE_NAME"]).'">'.'Změnit'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Vytvořit proceduru'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Vytvořit funkci'."</a>\n";}if(support("event")){echo"<h3>".'Události'."</h3>\n";$K=get_rows("SHOW EVENTS");if($K){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Název'."<td>".'Plán'."<td>".'Začátek'."<td>".'Konec'."</thead>\n";foreach($K
as$J){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($J["Name"]).'">'.h($J["Name"])."</a>","<td>".($J["Execute at"]?'V daný čas'."<td>".$J["Execute at"]:'Každých'." ".$J["Interval value"]." ".$J["Interval field"]."<td>$J[Starts]"),"<td>$J[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Vytvořit událost'."</a>\n";}if($Xe){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();