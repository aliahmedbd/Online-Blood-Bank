function validation(){
	if(username()){
		if(userpass()){
			return true;
		}
	}
	return false;
}
function username(){
	var name=document.getElementById("name").value;
	if(name.length < 1){
		document.getElementById("mname").style.color="red";
		document.getElementById("mname").innerHTML="Can't be empty";
		return false;
	}
	else{
		document.getElementById("mname").innerHTML="";
		return true;
	}
}
function userpass(){
	var pass=document.getElementById("pass").value;
	if(pass.length < 1){
		document.getElementById("mpass").style.color="red";
		document.getElementById("mpass").innerHTML="Password Can't be empty";
		return false;
	}
	else{
		document.getElementById("mpass").innerHTML="";
		return true;
	}
}