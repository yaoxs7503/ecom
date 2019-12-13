// xmlHTTP=new XMLHttpRequest();
function $_XMLHttpRequest(){
  if(window.ActiveXObject){
    xmlHTTP=new ActiveXObject("Microsoft.XMLHTTP");
  }
  else if(window.XMLHttpRequest)
  {
    xmlHTTP=new XMLHttpRequest();
  }
} 

function check(){
  let select_op=document.getElementById("select_op").value;
  console.log(select_op);
  xmlHTTP=new XMLHttpRequest();
  xmlHTTP.open("POST","jqajax_check.php?select_op="+select_op,true);
  xmlHTTP.onreadystatechange=function check_user(){
    if(xmlHTTP.readyState==4){
        const str=xmlHTTP.responseText;
        document.getElementById("message").innerHTML=str;
    }
  }
  xmlHTTP.send(null);
}
  
  
