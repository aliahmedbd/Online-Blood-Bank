
function validation(){
  if(uname()){
    if(uemail()){
      return true;
    }
  }
  return false;
}
function uname(){
  var uname=document.getElementById("name").value;
  if(uname.length < 1){
    document.getElementById("mname").style.color="red";
    document.getElementById("mname").innerHTML="Can Not Be empty";
    return false;
  }
  else{
    document.getElementById("mname").innerHTML="";
    return true;
  }
}
function uemail(){
  var uemail=document.getElementById("email").value;
  if(uemail.length < 1){
    document.getElementById("memail").style.color="red";
    document.getElementById("memail").innerHTML="Can Not Be Empty";
    return false;
  }
  else{
    document.getElementById("memail").innerHTML="";
    return true;
  }
}

function uphone(){
  var uphone=document.getElementById("phone").value;
  if(uphone.length < 1){
    document.getElementById("mphone").style.color="red";
    document.getElementById("mphone").innerHTML="Can Not Be Empty";
    return false;
  }
  else{
    document.getElementById("mphone").innerHTML="";
    return true;
  }
}

function umessage(){
  var umessage=document.getElementById("message").value;
  if(umessage.length < 1){
    document.getElementById("mmessage").style.color="red";
    document.getElementById("mmessage").innerHTML="Can Not Be Empty";
    return false;
  }
  else{
    document.getElementById("mmessage").innerHTML="";
    return true;
  }
}
 function myfunction(){
        alert("Successfully Done.");
}