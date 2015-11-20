// JavaScript Document
function home_menu(){
	
	document.getElementById('index').style.display="block";
	document.getElementById('about_us').style.display="none";
	document.getElementById('service').style.display="none";
	document.getElementById('gallery').style.display="none";
	document.getElementById('portfolio').style.display="none";
	document.getElementById('blog').style.display="none";
	document.getElementById('contact_us').style.display="none";
	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","show_hide.php?page=index&lbl=index_menu",true);
	xmlhttp.send();
	<!--document.getElementById('index_menu').style.color="#E4593A;";-->
	
}

function about_us_menu(){
	
	document.getElementById('index').style.display="none";
	document.getElementById('about_us').style.display="block";
	document.getElementById('service').style.display="none";
	document.getElementById('gallery').style.display="none";
	document.getElementById('portfolio').style.display="none";
	document.getElementById('blog').style.display="none";
	document.getElementById('contact_us').style.display="none";
	
	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","show_hide.php?page=about_us&lbl=about_menu",true);
	xmlhttp.send();
		
    
	
}
function service_menu(){
	
	
	document.getElementById('index').style.display="none";
	document.getElementById('about_us').style.display="none";
	document.getElementById('service').style.display="block";
	document.getElementById('gallery').style.display="none";
	document.getElementById('portfolio').style.display="none";
	document.getElementById('blog').style.display="none";
	document.getElementById('contact_us').style.display="none";
	
	<!--document.getElementById('service_menu').style.color="#E4593A;";-->
	document.getElementById('index_menu').style.color="";
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","show_hide.php?page=service&lbl=service_menu",true);
	xmlhttp.send();
}

function gallery_menu(){
	
	
	document.getElementById('index').style.display="none";
	document.getElementById('about_us').style.display="none";
	document.getElementById('service').style.display="none";
	document.getElementById('gallery').style.display="block";
	document.getElementById('portfolio').style.display="none";
	document.getElementById('blog').style.display="none";
	document.getElementById('contact_us').style.display="none";
	
	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","show_hide.php?page=gallery&lbl=gallery_menu",true);
	xmlhttp.send();
}

function portfolio_menu(){
	
	
	document.getElementById('index').style.display="none";
	document.getElementById('about_us').style.display="none";
	document.getElementById('service').style.display="none";
	document.getElementById('gallery').style.display="none";
	document.getElementById('portfolio').style.display="block";
	document.getElementById('blog').style.display="none";
	document.getElementById('contact_us').style.display="none";
	
	<!--document.getElementById('port_menu').style.color="#E4593A;";-->
	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","show_hide.php?page=portfolio&lbl=port_menu",true);
	xmlhttp.send();
}

//function single_portfolio_menu(){
//	
//	
//	document.getElementById('index').style.display="none";
//	document.getElementById('about_us').style.display="none";
//	document.getElementById('service').style.display="none";
//	document.getElementById('gallery').style.display="none";
//	document.getElementById('portfolio').style.display="none";
//	document.getElementById('blog').style.display="none";
//	document.getElementById('contact_us').style.display="none";
//	
//	<!--document.getElementById('port_menu').style.color="#E4593A;";-->
//	xmlhttp=new XMLHttpRequest();
//	xmlhttp.open("GET","show_hide.php?page=portfolio&lbl=port_menu",true);
//	xmlhttp.send();
//	
//}


function blog_menu(){
	
	
	document.getElementById('index').style.display="none";
	document.getElementById('about_us').style.display="none";
	document.getElementById('service').style.display="none";
	document.getElementById('gallery').style.display="none";
	document.getElementById('portfolio').style.display="none";
	document.getElementById('blog').style.display="block";
	document.getElementById('contact_us').style.display="none";
	
	<!--document.getElementById('blog_menu').style.color="#E4593A;";-->
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","show_hide.php?page=blog&lbl=blog_menu",true);
	xmlhttp.send();
	
}

function contact_us_menu(){
	
	
	document.getElementById('index').style.display="none";
	document.getElementById('about_us').style.display="none";
	document.getElementById('service').style.display="none";
	document.getElementById('gallery').style.display="none";
	document.getElementById('portfolio').style.display="none";
	document.getElementById('blog').style.display="none";
	document.getElementById('contact_us').style.display="block";
	
	<!--document.getElementById('contact_menu').style.color="#E4593A;";-->
	xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","show_hide.php?page=contact_us&lbl=contact_menu",true);
	xmlhttp.send();
	
}
