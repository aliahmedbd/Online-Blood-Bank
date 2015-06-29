function validation(){
	if(patientname()){
		if(patientage()){
			if(hospitalname()){
				if(address()){
					if(userPhone()){
						if(useremail()){
							if(userlocation()){
								return true;

							}

						}

					}

				}
			}

		}
		
	}
	return false;
}

function patientname(){
	var temp = document.getElementById("pname").value;
	if(temp.length < 1 ){
		document.getElementById("mpname").style.color="red";
		document.getElementById("mpname").innerHTML="Can't be empty!!";
		return false;
	}
	else{
		document.getElementById("mpname").style.color="green";
		document.getElementById("mpname").innerHTML="ok";
		return true;

	}

}
function patientage(){
	var age = document.getElementById("page").value;
	if(age.length < 1 ){
		document.getElementById("mpage").style.color="red";
		document.getElementById("mpage").innerHTML="Can't be empty!!";
		return false;
	}
	else{
		document.getElementById("mpage").style.color="green";
		document.getElementById("mpage").innerHTML="ok";
		return true;

	}

}
function hospitalname(){
	var hos = document.getElementById("hname").value;
	if(hos.length < 1 ){
		document.getElementById("mhname").style.color="red";
		document.getElementById("mhname").innerHTML="Can't be empty!!";
		return false;
	}
	else{
		document.getElementById("mhname").style.color="green";
		document.getElementById("mhname").innerHTML="ok";
		return true;

	}

}
function address(){
	var add = document.getElementById("addr").value;
	if(add.length < 1 ){
		document.getElementById("maddr").style.color="red";
		document.getElementById("maddr").innerHTML="Can't be empty!!";
		return false;
	}
	else{
		document.getElementById("maddr").style.color="green";
		document.getElementById("maddr").innerHTML="ok";
		return true;

	}

}
function userPhone(){
	var ph=document.getElementById("phone").value;
	if(ph.length < 11){
		document.getElementById("mphone").style.color="red";
		document.getElementById("mphone").innerHTML="Invalid";
		return false;
	}
	else if(ph.length > 0){
		
		var tmp1,tmp2,tmp3,tmp4;
		tmp1=ph.charAt(0);
		tmp2=ph.charAt(1);
		tmp3=ph.charAt(2);
		tmp4=ph.charAt(3);

		if(tmp1 == '+'){
			if(tmp2 == '8' && tmp3 == '8' && tmp4 == '0'){
				var i=4;
				var count=0;
				while(i<ph.length){
					count=count+1;
					i++;
				}
				if(count == 10){
					document.getElementById("mphone").style.color="green";
					document.getElementById("mphone").innerHTML="correct";
					return true;
				}
				else{
					document.getElementById("mphone").style.color="red";
					document.getElementById("mphone").innerHTML="invalid";
					return false;
				}
			}
		}
		if(tmp1 == '0'){
			var j=0;
			var cnt=0;
			while(j<ph.length){
				cnt=cnt+1;
				j++
			}
			if(cnt == 11){
					document.getElementById("mphone").style.color="green";
					document.getElementById("mphone").innerHTML="correct";
					return true;
				}
				else{
					document.getElementById("mphone").style.color="red";
					document.getElementById("mphone").innerHTML="invalid";
					return false;
				}

		}

	}
}

function useremail(){
    var email = document.getElementById("email").value;
	
	
    var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
     if(email.length==0)
	{
		document.getElementById("memail").style.color="red";
		document.getElementById("memail").innerHTML ="Can Not Be Empty";
		return false;
	}
	 else if (reg.test(email)){
        document.getElementById("memail").style.color="green";
		document.getElementById("memail").innerHTML ="Valid email";
		return true;
    }
    else{
       document.getElementById("memail").style.color="RED";
	   document.getElementById("memail").innerHTML ="Invalid Email";
	   return false;
    }
 }

 function userlocation(){
	var loc = document.getElementById("location").value;
	if(loc.length < 1 ){
		document.getElementById("mlocation").style.color="red";
		document.getElementById("mlocation").innerHTML="Can't be empty!!";
		return false;
	}
	else{
		document.getElementById("mlocation").style.color="green";
		document.getElementById("mlocation").innerHTML="ok";
		return true;

	}

}
