function toogle(){
 	var params=toogle.arguments;
 	for(var i=1;i<params.length;i++){ 	  
 	   document.getElementById(params[i]).style.display=params[0];
 	} 
	 
	if (params[0]=='block'){
	 	document.getElementsByTagName("html")[0].style.overflow = "hidden";
	}else{
		 document.getElementsByTagName("html")[0].style.overflow = "visible";
	}
	 
 }
 