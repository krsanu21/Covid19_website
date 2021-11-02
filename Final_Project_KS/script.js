document.getElementById("buttonsan").addEventListener("mouseover", mouseover1);
document.getElementById("buttonmask").addEventListener("mouseover", mouseover2);

function mouseover1(){
	document.getElementById("buttonsan").style.padding = "10px 20px";
}

function mouseover2(){
	document.getElementById("buttonmask").style.padding = "10px 20px";
}

document.getElementById("buttonsan").addEventListener("mouseout", mouseout3);
document.getElementById("buttonmask").addEventListener("mouseout", mouseout4);

function mouseout3(){
	document.getElementById("buttonsan").style.padding = "5px 10px";
}

function mouseout4(){
	document.getElementById("buttonmask").style.padding = "5px 10px";
}

//NAVBAR

function myFunction(){
           var x = document.getElementById("nav-links"); 
            
            if(x.style.display == "block")
            {
                x.style.display = "none";
            }
            else{
                x.style.display = "block";
            }
}




