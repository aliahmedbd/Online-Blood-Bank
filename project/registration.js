function validation(){
	if(userfirst()){
		if(lastcheck()){
			if(usercheck()){
				if(userpass()){
					if(rPassword()){
						if(userPhone()){
							if(useremail()){
								if(useraddress()){
									if(userlocation()){
										return true;
									}
								}
							}
						}

					}

				}

			}
		}
		
	}
	return false;
}
function userfirst(){
	var fname=document.getElementById("fname").value;
	if(fname.length < 2){
		document.getElementById("mfname").style.color="red";
		document.getElementById("mfname").innerHTML="First Name should be minimum 2characters";
		return false;
	}
	else{
		document.getElementById("mfname").style.color="green";
		document.getElementById("mfname").innerHTML="Ok";
		return true;
	}
		
	

}
function lastcheck(){
	var lname=document.getElementById("lname").value;
	if(lname.length < 2){
		document.getElementById("mlname").style.color="red";
		document.getElementById("mlname").innerHTML="Last Name should be minimum 2characters";
		return false;
	}
	else{
		document.getElementById("mlname").style.color="green";
		document.getElementById("mlname").innerHTML="Ok";
		return true;
	}
		
	

}
function usercheck(){
	var uname=document.getElementById("uname").value;
	if(uname.length < 4){
		document.getElementById("muname").style.color="red";
		document.getElementById("muname").innerHTML="User should be minimum 2characters";
		return false;
	}
	else{
		document.getElementById("muname").style.color="pink";
		document.getElementById("muname").innerHTML="It will be Ok after availability check";
		return true;
	}
		
	

}

function userpass()
{
	var pass = document.getElementById("pass").value;


	if(pass.length>=0 && pass.length<=5)
	{
		document.getElementById("mpass").style.color="red";
		document.getElementById("mpass").innerHTML ="Invalid!!!";
		return false;
	}
	else if(pass.length>=6 && pass.length<=10)
	{
		//document.getElementById("mpass").innerHTML ="Weak";
		var i=0;
		var count1=0;
		var count2=0;
		var temp;
		while(i<=pass.length){
			temp=pass.charAt(i);
			if(temp==temp.toUpperCase()){
				count1 =count1+1;
			}
			if(temp==temp.toLowerCase()){
				count2=count2+1;
			}
			i++;

		}
		if(count1>1 ){
			if(count2>1){
			document.getElementById("mpass").style.color="yellow";
		    document.getElementById("mpass").innerHTML ="Medium";
		    return true;
		}

		}
		else{
			document.getElementById("mpass").style.color="red";
			document.getElementById("mpass").innerHTML ="Weak";
			return false;
		}
		


		//document.getElementById("mfname").style.color="yellow";
		//document.getElementById("mpass").innerHTML ="<img src=yellow.jpg/>";
	}

	else if(pass.length>10)
	{
		
		var i=0;
		var count1=0;
		var count2=0;
		var temp;
		while(i<=pass.length){
			temp=pass.charAt(i);
			if(temp==temp.toUpperCase()){
				count1 =count1+1;
			}
			if(temp==temp.toLowerCase()){
				count2=count2+1;
			}
			i++;

		}
		if(count1>1 ){
			if(count2>1){
			document.getElementById("mpass").style.color="green";
		    document.getElementById("mpass").innerHTML ="Strong";
		    return true;
		}

		}
		else{
			document.getElementById("mpass").style.color="yellow";
		    document.getElementById("mpass").innerHTML ="Medium";
		    return true;
		}
	}
}
function rPassword(){
	var pass = document.getElementById("pass").value;
	var pass1=document.getElementById("rpass").value;
	if(pass == pass1 && pass1.length !=0){
		document.getElementById("mRpass").style.color="green";
		document.getElementById("mRpass").innerHTML ="Password Matched.";
		return true;

		

	}
	else{

		document.getElementById("mRpass").style.color="red";
		document.getElementById("mRpass").innerHTML ="Password missmatched.";
		return false;
		
		
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


function useraddress(){
	var add=document.getElementById("address").value;
	if(add.length < 2){
		document.getElementById("maddress").style.color="red";
		document.getElementById("maddress").innerHTML="Address should be minimum 2characters";
		return false;
	}
	else{
		document.getElementById("maddress").style.color="green";
		document.getElementById("maddress").innerHTML="Ok";
		return true;
	}
		
	

}

function userlocation(){
	var loc=document.getElementById("location").value;
	if(loc.length < 2){
		document.getElementById("mlocation").style.color="red";
		document.getElementById("mlocation").innerHTML="Location should be minimum 2characters";
		return false;
	}
	else{
		document.getElementById("mlocation").style.color="green";
		document.getElementById("mlocation").innerHTML="Ok";
		return true;
	}
		
	

}









