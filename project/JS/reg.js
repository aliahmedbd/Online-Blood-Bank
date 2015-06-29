function userfirst(){
	var first=document.getElementById("fname").value;
	if(first.length==0){
		document.getElementById("mfname").style.color=red;
		document.getElementById("mfname").innerHTML="Inavalid!!!";
	}
		
	

}