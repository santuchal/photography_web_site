<?php
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from goesse.com/html/serendipity/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2015 07:23:21 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Ravi Shanker Tulsan">
<meta name="author" content="Ravi Shanker Tulsan">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Ravi Shanker Tulsan</title>

<link rel="shortcut icon" href="img/sms-4.ico" />


<link rel="stylesheet" href="js/s/jquery.mCustomScrollbar.css">

<!-- STYLES -->
<link rel="stylesheet" type="text/css" href="css/fancybox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/ayumi/stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/ui.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/1280.css" />
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css1/lightbox.css" />
<link rel="stylesheet" type="text/css" href="css1/screen.css" />


<link rel="stylesheet" type="text/css" href="css/supersized.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/supersized.shutter.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/devices/959.css" media="only screen and (min-width: 768px) and (max-width: 959px)" />
<link rel="stylesheet" type="text/css" href="css/devices/767.css" media="only screen and (min-width: 480px) and (max-width: 767px)" />
<link rel="stylesheet" type="text/css" href="css/devices/479.css" media="only screen and (min-width: 200px) and (max-width: 479px)" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="slider_f/css/component.css" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/cat_menu/bs_leftnavi.css">
<script src="js/cat_menu/bs_leftnavi.js"></script>
<script src="js1/lightbox.js"></script>



<script src="js/menu_call.js" type="text/javascript"></script>

<script src="js/gallery.js" type="text/javascript"></script>
<!--<script src="js/dont_copy_mydocument.js" type="text/javascript"></script>-->

<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.97074.js"></script> <![endif]-->
<script type="text/javascript">
   $(document).ready(function() {
    var showChar = 100;
    var ellipsestext = "...";
    var moretext = "Read More";
    var lesstext = "Hide";
    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink aa">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</script>
<style>
.aa {
    color: #0254EB
}
.aa:visited {
    color: #0254EB
}
.aa,.morelink {
    text-decoration:none;
    outline: none;
}
.morecontent span {
    display: none;
	text-align:justify;
}
.comment {
    width: 400px auto !important;
    background-color: none;
    margin: 10px;
}
</style>
<script>
function autoRefresh()
{
	window.location.reload();
}
//setInterval('autoRefresh()',50000);
</script>

<script language="javascript">
	$(document).ready(function(e) {
		aud_play_pause1();
		//autoRefresh();
		
		document.getElementById('index').style.display="none";
	document.getElementById('about_us').style.display="none";
	document.getElementById('service').style.display="none";
	document.getElementById('gallery').style.display="none";
	document.getElementById('portfolio').style.display="none";
	document.getElementById('blog').style.display="none";
	document.getElementById('contact_us').style.display="none";
	<?php
	
	if(isset($_SESSION['page'])){
		echo "document.getElementById('".$_SESSION['page']."').style.display='block';";
		//echo "document.getElementById('".$_SESSION['lbl']."').style.color='#e4593a';";
		
	}
	?>

   
	$(".gw-submenu").on('click','li',function(e){
    //e.preventDefault();
    var id = $(this).attr('id');
    //alert(id);
	
	$.post("ajax_image1.php",{id:id},function (fff){
		 // alert('Vendor Created Successfully');
	
	

	//$.ajax({
//		   type:"POST",
//		   //url:"ajax_image.php",
//		   url:"ajax_image1.php",
//		  // dataType:"json",
//		   dataType:"html",
//		   data:{id:id},	
//		   success:function(res)
//		   {
			   /*
			   //alert(res);
			   var a=res[0];
			   var f=a*3;
			   for(i=1;i<=f;i++)
			   {
				   alert(res[i]);
				   alert(res[i+1]);
				   alert(res[i+2]);
				   
				  // create_div.after().html('<td style="width:65%;text-align:left;"><button style="border:none;background-color:transparent;margin-left:20px;font-size:inherit;box-shadow:none;cursor:default;font-weight: bold;" type="button" id="j'+count+'" onclick="trail_balance_second_src('+e+','+count+')">'+response[i]+'</button></td><td style="width:18.4%;" id="a'+count+'">'+response[i+2]+'</td><td id="b'+count+'">'+response[i+1]+'</td>');
				var s='/';   
				//$('.gallery-list').html(res)
			$('.gallery-list').append('<li class="ipl6 isotope-item" style="position: absolute; left: 0px; top: 180px;"><a href="javascript:void(0);" rel="bookmark" class="fancybox" onclick=""><img style="width:162px; height:162px;" src="Admin/images/category/'+res[i]+''+s+''+res[i+1]+''+s+''+res[i+2]+'" /><div style="display: block; left: 0px; top: 100%; transition: all 300ms ease 0s;"><span>cdxcxcf</span></div></a></li>');
			
			
			/*var contentString1 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">'+n+'</h1>'+
      '<div id="bodyContent">'+
	  '<img id="image" />'+
      '<p><b>'+ph+'</b></p>'+
	   '<p><b>'+mail+'</b></p>'+
	  '<p><b><img src="registration/'+photo+'" style="float:left; height:66px;" alt="Basuki It Solutions" title="Basuki It Solutions"/></b></p>'+
      '</div>'+
      '</div>';
				  
				   i=i+2;
			   }
			   */
			  
			 $('#first').hide();
			 $('#first22').show();
			  $('#first22').html(fff);
			  
			   
		//	 
//		   }
			});
//			 
	
}); 

$("#all_cat").click(function(){
	
	$('#first').show();
	 $('#first22').hide();
	
})
	});
	</script>



<!--Portfolio Appear Strat-->
<script language="javascript">
	$(document).ready(function(e) {
   
	$(".gw-nav-list").on('click','li',function(e){
    //e.preventDefault();
    var id1 = $(this).attr('id');
   // alert(id1);
	

	$.ajax({
		   type:"POST",
		   //url:"ajax_image.php",
		   url:"ajax_portfolio.php",
		   //dataType:"json",
		    dataType:"html",
		   data:{id1:id1},	
		   success:function(res)
		   {
			   
			  // alert(res);
			  /* var a=res[0];
			   var f=a*3;
			   for(i=1;i<=f;i++)
			   {
				   alert(res[i]);
				   alert(res[i+1]);
				   alert(res[i+2]);
				   
				  // create_div.after().html('<td style="width:65%;text-align:left;"><button style="border:none;background-color:transparent;margin-left:20px;font-size:inherit;box-shadow:none;cursor:default;font-weight: bold;" type="button" id="j'+count+'" onclick="trail_balance_second_src('+e+','+count+')">'+response[i]+'</button></td><td style="width:18.4%;" id="a'+count+'">'+response[i+2]+'</td><td id="b'+count+'">'+response[i+1]+'</td>');
				var s='/';   
				//$('.gallery-list').html(res)
			$('.gallery-list').append('<li class="ipl6 isotope-item" style="position: absolute; left: 0px; top: 180px;"><a href="javascript:void(0);" rel="bookmark" class="fancybox" onclick=""><img style="width:162px; height:162px;" src="Admin/images/category/'+res[i]+''+s+''+res[i+1]+''+s+''+res[i+2]+'" /><div style="display: block; left: 0px; top: 100%; transition: all 300ms ease 0s;"><span>cdxcxcf</span></div></a></li>');
			
			
			/*var contentString1 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">'+n+'</h1>'+
      '<div id="bodyContent">'+
	  '<img id="image" />'+
      '<p><b>'+ph+'</b></p>'+
	   '<p><b>'+mail+'</b></p>'+
	  '<p><b><img src="registration/'+photo+'" style="float:left; height:66px;" alt="Basuki It Solutions" title="Basuki It Solutions"/></b></p>'+
      '</div>'+
      '</div>';
				  
				   i=i+2;
			   }
			   */
			  
			   
			   
			 $('#project-list').hide();
			 $('#project-list1').show();
			  $('#project-list1').html(res);
			  
			   
			 
		   }
			});
			 
	
}); 

$("#all_cat1").click(function(){
	
	
	 $('#project-list1').hide();
	 $('#project-list').show();
	return false;
})
	});
	</script>


<!--Portfolio Appear End-->

<style>
		#element_to_pop_up { 
    background-color:#fff;
    border-radius:15px;
    color:#000;
    display:none; 
    padding:20px;
    min-width:400px;
    min-height: 180px;
}
.b-close{
    cursor:pointer;
    position:absolute;
    right:10px;
    top:5px;
}

	</style>


</head>

<body onload="">

 <?php 
					 include('config.php');
					 $sql2=mysql_query("select music_name from music where id='1'");
					 while($row2=mysql_fetch_array($sql2))
{
$music=$row2['music_name'];

}
					 
					 ?>
            <audio id="myAudio" src="audio/<?php echo $music;?>"  autoplay loop>
  Your browser does not support the <code>audio</code> element.
</audio>

    

<!-- Body Wrapper -->
<div class="body-wrapper mCustomScrollbar">

<ul id="cbp-bislideshow" class="cbp-bislideshow">

 <?php 
					 include('config.php');
					 $img1=mysql_query("select *  from background_image ");
					 while($img2=mysql_fetch_array($img1))
{
$image_name=$img2['image_name'];
 //$logo1=$row1['image'];
 echo '<li><img src="admin/shutterstock/'.$image_name.'" /></li>';
}
					 
			?>


					
				</ul>

    <div class="mask"></div>
    <!-- Header -->
    <header id="header">
        <div class="container">
        	<div class="logo">
             <?php 
					 include('config.php');
					 $sql1=mysql_query("select *  from logo where id='1'");
					 while($row1=mysql_fetch_assoc($sql1))
{
$logo=$row1['image_name'];
 //$logo1=$row1['image'];
 echo '<a href="index.php"><img src="img/'.$logo.'"  width="148" height="55" /></a>';
}
					 
			?>
 
  
					
            	
            </div>
            
            <!-- Nav -->
            <nav id="nav">
                <ul class="sf-menu movement">
                    <li>
                        <a id="index_menu" onClick="home_menu();"  href="javascript:void(0);" >Home</a>
                    </li>
                    <li>
                    	<a id="about_menu" onClick="about_us_menu();" href="javascript:void(0);">About Us</a>
                    </li>
                    <li>
                    	<a id="service_menu" onClick="service_menu();"  href="javascript:void(0);">Services</a>
                    </li>
                    <li>
                        <a id="gallery_menu" onClick="gallery_menu();" href="javascript:void(0);">Gallery</a>
                    </li>
                    <li>
                        <a id="port_menu" onClick="portfolio_menu();" href="javascript:void(0);">Portfolio</a>
                    </li>
                    <li>
                    	<a id="blog_menu" onClick="blog_menu();" href="javascript:void(0);">Events</a>
                    </li>
                    <li>
                    	<a id="contact_menu" onClick="contact_us_menu();" href="javascript:void(0);">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <!-- /Nav -->
            
            <!-- Mobile Nav -->
            <div class="menu-toggle">
                <a href="#"></a>
            </div>
            <div class="menu-device">
                <ul>   
                    <li>
                        <a onClick="home_menu();"  href="javascript:void(0);">Home</a>
                    </li>
                    <li>
                    	<a onClick="about_us_menu();" href="javascript:void(0);">About Us</a>
                    </li>
                    <li>
                    	<a onClick="service_menu();"  href="javascript:void(0);">Services</a>
                    </li>
                    <li>
                        <a onClick="gallery_menu();" href="javascript:void(0);">Gallery</a>
                    </li>
                    <li>
                        <a onClick="portfolio_menu();" href="javascript:void(0);">Portfolio</a>
                    </li>
                    <li>
                    	<a onClick="blog_menu();" href="javascript:void(0);">Blog</a>
                    </li>
                    <li>
                    <a onClick="contact_us_menu();" href="javascript:void(0);">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /Mobile Nav -->
           
        </div>
    </header>
    <!-- /Header -->
    
    <!-- About -->
    <section id="content" >
    
    <!--index page section-->
    
        <div class="container" id="index" style="display:block;">
        
        	<div class="contactcircle" >
            	<p class="man">
                 <?php 
					 include('config.php');
					 $sql=mysql_query("select * from address");
					 while($row=mysql_fetch_array($sql))
{
$add=$row['address'];
$phone=$row['phone'];
$email=$row['email'];
echo $add;
}
					 
					 ?>
                 </p>
                <p class="phone">
                	Phone:  <?php echo $phone;?>
                </p>
                <p class="envelop">
                	Email: <a href="#"><?php echo $email;?></a>
                </p>
            </div>
            <!-- Slider Controller -->
            <div id="controls-wrapper" class="load-item" >
              <!--  <div id="controls">
                    <a id="prevslide" class="load-item"></a>
                    <a id="nextslide" class="load-item"></a>
                </div>-->
            </div>
            
            <!--index page section-->
            
           
            
        </div>  
        
        <!--index page section-->
        
         <!--about us page section-->
            
            <div class="wrapper" id="about_us" style="display:none;">
        	
            <!-- Main -->
            <div class="main mCustomScrollbar">
            
                <div class="column">
                	<h4 class="title">ABOUT US <span>//</span> COME TO US, AND LET'S GET IT DONE!</h4>
                    
		<?php include('config.php');
$query500="select * from aboutus ";
$fetch500=mysql_query($query500);

while ($rows500=mysql_fetch_array($fetch500)) {
	$file500=$rows500['file'];
	//echo $file500;
}
?>
                	<p><?php echo $file500; ?></p>
                    <div class="separator"></div>
                </div>

                <div class="column">
                    <!--<div class="member">
                    
                    	<div class="member-img-wrapper">
                        	<img src="img/trash/member1.png" alt="ThemeMarket" />
                        </div>
                        <h5><a href="#">Ravi Shanker Tulsan</a></h5>
                        <span>Photographer, CEO</span>
                        <ul>
                        	<li>
                            <a target="_blank" href="https://www.facebook.com/ravi.tulsan?fref=ts"><img src="img/socials/facebook.png" alt="Ravi Shanker Tulsan" /></a>
                            </li>
                            <li>
                            <a target="_blank" href="https://twitter.com/photoravi1"><img src="img/socials/twitter.png" alt="Ravi Shanker Tulsan" /></a>
                            </li>
                            <li>
                            <a href="#"><img src="img/socials/linkedin.png" alt="ThemeMarket" /></a>
                            </li>
                        </ul>
                    </div>-->
                    <?php 
				
				$value4000=mysql_query("select * from member_info");
				while($row4000=mysql_fetch_array($value4000))
				{
					$member_name=$row4000['mem_name'];
					$member_post=$row4000['mem_post'];
					$member_image=$row4000['mem_pic'];
					$m_id=$row4000['id'];
					
					//$sss=$row['url_1'];
//					$sss1=$row['url_2'];
//					$sss3=$row['social_image_1'];
//					$sss4=$row['social_image_2'];
					if (file_exists('admin/images/team/'.$member_image.'')) {
					echo ' <div class="member">
                    	<div class="member-img-wrapper">
                        	<img src="admin/images/team/'.$member_image.'"/>
                        </div>
                        <h5><a href="#">'.$member_name.'</a></h5>
                        <span>'.$member_post.'</span>
                        <ul style="text-align:center;">';
					}
					else{
						echo ' <div class="member">
                    	<div class="member-img-wrapper">
                        	
                        </div>
                        <h5><a href="#">'.$member_name.'</a></h5>
                        <span>'.$member_post.'</span>
                        <ul style="text-align:center;">';
					}
						$value4001=mysql_query("select * from member_social where member_id='$m_id'");
				while($row4001=mysql_fetch_array($value4001))
				{
					$member_S_image=$row4001['s_image'];
					$member_S_url=$row4001['s_url'];
					if($member_S_image=="" && $member_S_url=="")
					{
					}
					else
					{
						if (file_exists('admin/images/team/'.$member_S_image.'')) {
                        	echo '<li>
                            <a style="height:29px !important;" target="_blank" href="'.$member_S_url.'"><img style="width:29px; height:29px; border-radius:50%;" src="admin/images/team/'.$member_S_image.'"/></a>
                            </li>
						';
						}
						else{
							
						}
					}
				}
                      echo'  </ul>
                    </div>';
				}
				
				
				?>
                    
                </div>
            
            </div>
            <!-- /Main -->
            
            <!-- Sidebar -->
            <div class="sidebar">
            	
                <!--  Search -->
            	<div class="column-sidebar m-bottom-25 my_search">
                	<div class="search">
                    	<form action="#" method="post">
                            <input type="text" value="Search something" onblur="if(this.value=='') this.value='Search something';" onfocus="if(this.value=='Search something') this.value='';" />
                        </form>
                    </div>
                </div>
                <!--  /Search -->
                
                <!--  Category -->
                <div class="column-sidebar m-bottom-25 my_cat mCustomScrollbar" style="max-height:235px !important;">
                	<div class="category">
                    	 <!--<h6><span class="line">Category </span></h6>
                       <ul>
                        	<li><a href="#">Wedding</a></li>
                            <li><a href="#">Advertisements</a></li>
                            <li><a href="#">Birthday Celebration</a></li>
                            <li><a href="#">Nature</a></li>
                            <li><a href="#">Opening Ceremony</a></li>
                            <li><a href="#">News</a></li>
                        </ul>-->
                    </div>
                </div>
                <!--  /Category -->
                
                <!--  Featured Video -->
                <div class="column-sidebar m-bottom-25 my_video">
                    <div class="featuredvideo">
                        <h6><span class="line">Featured Video </span></h6>
                        <div class="videoblock">
                            <a href="img/15.jpg" ><img src="img/14.jpg" style="background-repeat:no-repeat;"></a>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /Sidebar -->
        </div>
            
         <!--about us page section-->
          
          
          <!--services page section-->
          
          <div id="service" class="wrapper" style="display:none;">
        	
            <!-- Main -->
            <div class="main mCustomScrollbar">
            
               <div class="column">
               
        <h4 class="title">Our Services <span>//</span> </h4>
              
              
              <!--SERVICE AREA-->
              
              
               
               <?php 
			   
			     
				
	$value8000=mysql_query("select distinct serv_title from service");
	while($row8000=mysql_fetch_array($value8000))
	{
		$serv_title=$row8000['serv_title'];
	
		
            echo     '<div class="column">
                <h5>'.$serv_title.'</h5>
                
                <div class="column">';
				
				
				 
			 $value8001=mysql_query("select serv_img from service where serv_title='$serv_title'");
				while($row8001=mysql_fetch_array($value8001))
				{
					$serv_img=$row8001['serv_img'];
				
                if (file_exists('admin/service/'.$serv_title.'/'.$serv_img.'')) {
 
                  echo  '<div class="member">
                    	<div class="member-img-wrapper">
                        	<img src="admin/service/'.$serv_title.'/'.$serv_img.'" alt="ThemeMarket" />
                        </div>
                    </div>';
				}
				}
                $value8002=mysql_query("select distinct serv_details from service where serv_title='$serv_title'");
				while($row8002=mysql_fetch_array($value8002))
				{     
				$serv_details=$row8002['serv_details'];
                    
              echo  '</div>
                
                 <div class="comment more">'.$serv_details.'</div>
                
                </div>
                <div class="separator"></div>';
				}
	}
	?>
                
                
                <!--Service Area End-->
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
			
				
               </div> 
               
                
            </div>
            <!-- /Main -->
            
            <!-- Sidebar -->
            <div class="sidebar">
            	
                <!--  Search -->
            	<div class="column-sidebar m-bottom-25 my_search">
                	<div class="search">
                    	<form action="#" method="post">
                            <input type="text" value="Search something" onblur="if(this.value=='') this.value='Search something';" onfocus="if(this.value=='Search something') this.value='';" />
                        </form>
                    </div>
                </div>
                <!--  /Search -->
                
                <!--  Category -->
                <div class="column-sidebar m-bottom-25 my_cat mCustomScrollbar" style="max-height:235px !important;">
                	 <!--<div class="category">
                   	<h6><span class="line">Category </span></h6>
                        <ul>
                        	<li><a href="#">Wedding</a></li>
                            <li><a href="#">Advertisements</a></li>
                            <li><a href="#">Birthday Celebration</a></li>
                            <li><a href="#">Nature</a></li>
                            <li><a href="#">Opening Ceremony</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        
                    </div>-->
                </div>
                <!--  /Category -->
                
                <!--  Featured Video -->
                <div class="column-sidebar m-bottom-25 my_video">
                    <div class="featuredvideo">
                        <h6><span class="line">Featured Video </span></h6>
                        <div class="videoblock">
                            <a href="img/15.jpg" ><img src="img/14.jpg" style="background-repeat:no-repeat;"></a>
                        </div>
                    </div>
                </div>
                <!-- /Featured Video -->
                
                <!--  Archives -->
                
                <!--  /Archives -->
                
                <!--  Testimonials -->
				
                <!-- /Testimonials -->
                
            </div>
            <!-- /Sidebar -->
        </div>
          
          <!--services page section-->
          
          <!--gallery page section-->
          
          <div id="gallery" class="wrapper" style="display:none;">
        	
            <!-- Main -->
            <div class="main mCustomScrollbar">
            
            	<div class="column"><h4 class="title">THE GALLERY <span>//</span> SHOWCASE OF OUR GALLERY.</h4></div>
                <div class="column">
                
                    <ul id="sports_sub_menu" class="gallery-filter" style="display:none;"></ul>
              	</div>
                
                <div class="column">
                
                	<ul class="gallery-list" id="first" style="display:block;">
                    
                   
                      <?php 
				
				$value600002=mysql_query("select * from galery_category");
				while($row600002=mysql_fetch_array($value600002))
				{
					$cat_name2=$row600002['name'];
					$c_id2=$row600002['c_id'];
					$c_image2=$row600002['c_image'];
					//$sss=$row['url_1'];
//					$sss1=$row['url_2'];
//					$sss3=$row['social_image_1'];
//					$sss4=$row['social_image_2'];
					
           echo ' 
		   <li class="candid_1"><a href="javascript:void(0);" rel="bookmark" class="example-image-link"><img style="width:162px; height:162px;" src="admin/images/category/'.$c_image2.'"  /><div><span>'.$cat_name2.'</span></div></a></li>';
                    
				}?>
                     
                      
                    </ul>
                    <ul class="gallery-list" id="first22">
                    
                    
                    
                    </ul>
                    
                        
                        
                        
                        
                
                </div>
            
            </div>
            <!-- /Main -->
            
            <!-- Sidebar -->
            <div class="sidebar">
            	
                <!--  Search -->
            	<div class="column-sidebar m-bottom-25 my_search">
                	<div class="search">
                    	<form action="#" method="post">
                            <input type="text" value="Search something" onblur="if(this.value=='') this.value='Search something';" onfocus="if(this.value=='Search something') this.value='';" />
                        </form>
                    </div>
                </div>
                <!--  /Search -->
                
                <!--  Category -->
                <h6 style="margin-left:10px; width:300px;"><span class="line" >Category </span></h6>

<div class="column-sidebar m-bottom-25 my_cat mCustomScrollbar" style="max-height:400px !important;">
                	<div class="category">
                    	
                        
 <!------------------------------------------------------------------------------------------------------------------->                       
                        <div class="gw-sidebar">
  <div id="gw-sidebar" class="gw-sidebar">
    <div class="nano-content">
      <ul class="gw-nav gw-nav-list">
        <li class="init-un-active" id="all_cat"> <a href="javascript:void(0)"> <span class="gw-menu-text">All Category</span> </a> </li>
        
         <?php 
				
				$value600001=mysql_query("select * from galery_category");
				while($row600001=mysql_fetch_array($value600001))
				{
					$cat_name=$row600001['name'];
					$c_id=$row600001['c_id'];
					//$sss=$row['url_1'];
//					$sss1=$row['url_2'];
//					$sss3=$row['social_image_1'];
//					$sss4=$row['social_image_2'];
					
           echo '  <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">'.$cat_name.'</span> <b class="gw-arrow"></b> </a>
          <ul class="gw-submenu">
           ';
		   
		 
		   
          
				
				$value600000=mysql_query("select * from galery_sub_category where c_id='$c_id'");
				while($row600000=mysql_fetch_array($value600000))
				{
					$cat_name1=$row600000['s_name'];
					$sub_id=$row600000['s_id'];
					//$member_post=$row600000['mem_post'];
					//$member_image=$row600000['mem_pic'];
					//$sss=$row['url_1'];
//					$sss1=$row['url_2'];
//					$sss3=$row['social_image_1'];
//					$sss4=$row['social_image_2'];
					
           echo '<li id='.$sub_id.'> <a href="javascript:void(0)">'.$cat_name1.'</a> </li>
           ';
				}
				echo '</ul>';
				}
				?>
				
        
      
          
          
          </ul>
        </li>
      
      </ul>
    </div>
    
  </div>
</div>
                        
           <!------------------------------------------------------------------------------------------------------------------->                 
                        
                    </div>
                </div>
                <!--  /Category -->
                
                <!--  Featured Video -->
                
               
                
            </div>
            <!-- /Sidebar -->
        </div>
        
        <!--gallery page section-->
        
        <!--portfolio page section-->
        
        <div id="portfolio" class="wrapper" style="display:none;">
        	
            <!-- Main -->
            <div class="main mCustomScrollbar">
            
            	<div class="column"><h4 class="title">THE PROJECTS <span>//</span> SHOWCASE OF OUR PROJECTS.</h4></div>
                <div class="column">
                    <ul id="project-filter" class="project-filter">
                       <!-- <li><a href="#" class="current" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".ipl6">IPL 6</a></li>
                        <li><a href="#" data-filter=".sahid_mira">Shahid Mira Reception</a></li>
                        <li><a href="#" data-filter=".Bahubali_Light_Box">Bahubali Box Office</a></li>
                        <li><a href="#" data-filter=".cricket_league">Cricket League Punjab Party</a></li>-->
                    </ul>
                </div>
                <div class="project-wrap">
                    <ul class="project-list" id="project-list">
                        <?php 
                        $project=mysql_query("select * from portfolio");
				while($row=mysql_fetch_array($project))
				{
					$p_img=$row['portfolio_img'];
					$p_name=$row['portfolio_name'];
					$p_category=$row['portfolio_category'];
						
						if (file_exists('admin/img/gallery/portfolio/'.$p_img.'')) {	
                        echo '<li class="example-image-link">
                            <a href="admin/img/gallery/portfolio/'.$p_img.'" rel="bookmark" class="example-image-link" data-lightbox="example-1"><img src="admin/img/gallery/portfolio/'.$p_img.'"  draggable="false" /><div><span></span></div></a>
                            <p><a onClick="" href="javascript:void(0;)">'.$p_name.'</a><span>'.$p_category.'</span></p>                     
                        </li>';
						}
						else{
							echo '<li class="modern fashion">
                            <a href="" rel="bookmark" class="fancybox"><img src="" alt="" draggable="false" /><div><span></span></div></a>
                            <p><a onClick="" href="javascript:void(0;)">'.$p_name.'</a><span>'.$p_category.'</span></p>                     
                        </li>';
						}
				}
						?>
                    </ul>
                    
                    <ul class="project-list" id="project-list1">
                    </ul>
                    
            	</div>

            </div>
            <!-- /Main -->
            
            <!-- Sidebar -->
            <div class="sidebar">
            	
                <!--  Search -->
            	<div class="column-sidebar m-bottom-25 my_search">
                	<div class="search">
                    	<form action="#" method="post">
                            <input type="text" value="Search something" onblur="if(this.value=='') this.value='Search something';" onfocus="if(this.value=='Search something') this.value='';" />
                        </form>
                    </div>
                </div>
                <!--  /Search -->
                
                <!--  Category -->
                <div class="column-sidebar m-bottom-25 my_cat mCustomScrollbar" style="max-height:235px !important;">
                	<div class="category">
                    	<h6><span class="line">Category </span></h6>
                       <!------------------------------------------------------------------------------------------------------------------->                       
                        <div class="gw-sidebar">
  <div id="gw-sidebar" class="gw-sidebar">
    <div class="nano-content">
      <ul class="gw-nav gw-nav-list">
        <li class="init-un-active" id="all_cat1"> <a href="javascript:void(0)"> <span class="gw-menu-text">All Category</span> </a> </li>
        
         <?php 
				
				$value6001=mysql_query("select * from portfolio");
				while($row6001=mysql_fetch_array($value6001))
				{
					$cat_name1=$row6001['portfolio_category'];
					$c_id1=$row6001['id'];	
					$c_name1=$row6001['portfolio_name'];				
//					$sss1=$row['url_2'];
//					$sss3=$row['social_image_1'];
//					$sss4=$row['social_image_2'];
					
           echo '  <li class="init-arrow-down" id="'.$c_id1.'"> <a href="javascript:void(0)"> <span class="gw-menu-text">'.$c_name1.'</span> <b class="gw-arrow"></b> </a>
         <!-- <ul class="gw-submenu">-->
           ';
		   
		 
		   
         
				}
				?>
				
        
      
          
          
          </ul>
        </li>
      
      </ul>
    </div>
    
  </div>
</div>
                        
           <!------------------------------------------------------------------------------------------------------------------->                 

                    </div>
                </div>
                <!--  /Category -->
                
                <!--  Featured Video -->
                <div class="column-sidebar m-bottom-25 my_video">
                    <div class="featuredvideo">
                        <h6><span class="line">Featured Video </span></h6>
                        <div class="videoblock">
                          <a href="img/12.jpg" ><img src="img/2.png" style="background-repeat:no-repeat;"></a>
                        </div>
                    </div>
                </div>
                <!-- /Featured Video -->
                
                <!--  Archives -->
                
                <!--  /Archives -->
                
                <!--  Twitter -->
                
                <!--  /Twitter -->
                
                <!--  Flickr -->
                
                <!--  /Flickr -->
                
                <!--  Testimonials -->
				
                <!-- /Testimonials -->
                
            </div>
            <!-- /Sidebar -->
        </div>
        
        <!--portfolio page section-->
        
        
        <!--single project page section-->
        
        
        
        <!--single project page section-->
        
        <!--blog page section-->
        
        <div id="blog" class="wrapper" style="display:none;">
        	
            <!-- Main -->
            <div class="main mCustomScrollbar">
            	<div class="column"><h4 class="title">THE EVENTS <span>//</span> WHAT’S NEW IN OUR COMPANY.</h4></div>
                
                
                	<?php 
						
							
				$value600005=mysql_query("select * from blog");
				while($row600005=mysql_fetch_array($value600005))
				{
					$blog_title=$row600005['blog_title'];
					$blog_date=$row600005['blog_date'];
					$blog_user=$row600005['blog_user'];
					$blog_text=$row600005['blog_text'];
					$blog_pic=$row600005['blog_pic'];
					
					if (file_exists('admin/blog/'.$blog_pic.'')) {	
                
               echo' <div class="column m-top-25">
                	<div class="image-wrapper">
                    	<img src="admin/blog/'.$blog_pic.'" style="width:162px; height:162px;"  />
                    </div>
                    <div class="post-wrapper">
                    	<h5><a href="#">'.$blog_title.'</a></h5>
                        <div class="details">
                        	<div>On: '.$blog_date.'  &nbsp; | &nbsp;   By: <a href="#">'.$blog_user.'</a>  &nbsp;  |  &nbsp;  <br/>  </div>
                        </div>
                         <div class="comment more">'.$blog_text.'</div>
                    </div>
                </div>
               ';
					}
					else{
						echo' <div class="column m-top-25">
                	<div class="image-wrapper">
                    	
                    </div>
                    <div class="post-wrapper">
                    	<h5><a href="#">'.$blog_title.'</a></h5>
                        <div class="details">
                        	<div>On: '.$blog_date.'  &nbsp; | &nbsp;   By: <a href="#">'.$blog_user.'</a>  &nbsp;  |  &nbsp; <br/>  </div>
                        </div>
                        <div class="comment more">'.$blog_text.'</div>
                    </div>
                </div>
               ';
						
					}
				}
				?>
               
            
                
            </div>
            <!-- /Main -->
            
            <!-- Sidebar -->
            <div class="sidebar">
            	
                <!--  Search -->
            	<div class="column-sidebar m-bottom-25 my_search">
                	<div class="search">
                    	<form action="#" method="post">
                            <input type="text" value="Search something" onblur="if(this.value=='') this.value='Search something';" onfocus="if(this.value=='Search something') this.value='';" />
                        </form>
                    </div>
                </div>
                <!--  /Search -->
                
                <!--  Category -->
               <!-- <h6 style="margin-left:10px; width:300px;"><span class="line" >User Blog </span></h6>-->
                
                <div class="column-sidebar m-bottom-25 my_cat mCustomScrollbar" style="max-height:300px !important; height:300px;">
                	<div class="category">

<!--<div id="blog_section" class="contact-form" style="margin:0 !important; padding:0 !important; border-top:none; display:blog;">
                        <form action="" method="post" id="blog_form" name="blog_form">
                        	
                            <div class="form">
                                <label>Full Name*</label>
                                <div class="input">
                                    <span style="margin-left: 45px;color: red;display:none;" class="name">Please input Title</span>
                                    <input type="text" class="name"  name="full_name" id="full_name" style="width:263px;"/>
                                </div>
                            </div>
                            
                            <div class="form">
                                <label>Email*</label>
                                <div class="input">
                                    <span style="margin-left: 45px;color: red;display:none;" class="name">Please input Title</span>
                                    <input type="text" class="name"  name="email" id="email" style="width:263px;"/>
                                </div>
                            </div>
                        
                            <div class="form">
                                <label>Blog Title*</label>
                                <div class="input">
                                    <span style="margin-left: 45px;color: red;display:none;" class="name">Please input Title</span>
                                    <input type="text" class="name"  name="yourname" id="yourname" style="width:263px;"/>
                                </div>
                            </div>
                            <div class="form">
                                <label>Blog Picture*</label>
                                <div class="input">
                                    <span style="margin-left: 45px;color: red;display:none;" class="email">Please upload file</span>
                                    <input type="file" class="name"  name="" id="" style="width:263px;"/>
                                </div>
                            </div>
                            
                            <div class="form">
                                <label>Blog Details*</label>
                                <span style="margin-left: 45px;color:red;display:none;" class="email">Please upload details</span>
                                <textarea name="message" rows="10" cols="20" style="width:263px; height:93px;"></textarea>
                            </div>
                            <div class="form2">
                                <!--<input type="submit" class="send-message" value="Send Message" />
                                <a href="javascript:submitForm();" class="send">Submit Blog</a>
                            </div>
                            
                        </form>
                        
                        <div class="alertMessage"></div>
                    </div>-->
	
	</div>
            </div>
                
                <!--  /Category -->
              
            </div>
            <!-- /Sidebar -->
        </div>
        
        <!--blog page section-->
        
        <!--contact us page section-->
        <!---->
        <script>
		/*
function initia(l,t){
	var myLatlng = new google.maps.LatLng(l,t);
  var mapOptions = {zoom: 8,center: myLatlng};
var pinColor = "00FF00";
    var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
  marker = new google.maps.Marker({
      	position: new google.maps.LatLng(l,t),
      	map: map,
		icon: pinImage,
      	title: 'me'
  		});
		map.setCenter(marker.getPosition());
		//path.push(new google.maps.LatLng(l,t));
	}
function init() {
initia(23.1800,88.5800);
}

google.maps.event.addDomListener(window, 'load', init);*/
</script>


        <div id="contact_us" class="wrapper" style="display:none;">
        
        	<!-- Main -->
            <div class="main mCustomScrollbar">
                <div class="column">
                	
                   
 <div class="map" >
                    <a target="_blank" href="https://www.google.com/maps/place/Axis+Bank+ATM/@22.5841553,88.3605313,19.75z/data=!4m2!3m1!1s0x0000000000000000:0x0d5d8427304dc1a0"><img src="http://maps.googleapis.com/maps/api/staticmap?center=Jorasanko,+INDIA&zoom=13&scale=false&size=600x300&maptype=roadmap&format=png&visual_refresh=true" alt="Google Map of Albany, NY"></a>
                    </div>
                    
                    <div class="contact-info" >
                    	<h5>Get in touch with us</h5>
                        <p class="man">
                           <?php 
					

echo $add;

					 
					 ?>
                        </p>
                        <p class="phone">
                            Phone:  <?php echo $phone;?>  <?php ?> <br />
                            		
                        </p>
                        <p class="envelop">
                            Email: <a href="#"><?php echo $email;?>  <?php ?></a><br />
                            	   
                        </p>
                    </div>
                    <div class="contact-form">
                        <form action="" method="post" id="contactForm" name="contactForm">
                            <div class="form">
                                <label>Name*</label>
                                <div class="input">
                                    <span class="name"></span>
                                    <input type="text" class="name"  name="your_name" id="yourname" />
                                </div>
                            </div>
                            <div class="form">
                                <label>Email*</label>
                                <div class="input">
                                    <span class="email"></span>
                                    <input type="text" class="name"  name="your_email" id="email" />
                                </div>
                            </div>
                            <div class="form">
                                <label>Subject*</label>
                                <div class="input">
                                    <span class="website"></span>
                                    <input type="text" class="name" name="your_subject" id="tele"/>
                                </div>
                            </div>
                            <div class="form">
                                <label>Message*</label>
                                <textarea name="your_message" rows="10" cols="20"></textarea>
                            </div>
                            <div class="form2">
                                <input type="submit" class="send-message" name="send_msg" value="Send Message" />
                                <!--<a href="javascript:submitForm();" class="send">Send Message</a>-->
                            </div>
                            
                        </form>
                        
                        <div class="alertMessage"></div>
                    </div>


                    
                </div>
                
                
                
            </div>
            <!-- /Main -->
            
            <!-- Sidebar -->
            <div class="sidebar">
            	
                <!--  Search -->
            	<div class="column-sidebar m-bottom-25 my_search">
                	<div class="search">
                    	<form action="#" method="post">
                            <input type="text" value="Search something" onblur="if(this.value=='') this.value='Search something';" onfocus="if(this.value=='Search something') this.value='';" />
                        </form>
                    </div>
                </div>
                <!--  /Search -->
                
                <!--  Category -->
                <div class="column-sidebar m-bottom-25 my_cat mCustomScrollbar" style="max-height:235px !important;">
                <!--	<div class="category">
                    	<h6><span class="line">Category </span></h6>
                        <ul>
                        	<li><a href="#">Wedding</a></li>
                            <li><a href="#">Advertisements</a></li>
                            <li><a href="#">Birthday Celebration</a></li>
                            <li><a href="#">Nature</a></li>
                            <li><a href="#">Opening Ceremony</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>-->
                </div>
                <!--  /Category -->
                
                <!--  Featured Video -->
                <div class="column-sidebar m-bottom-25 my_video">
                    <div class="featuredvideo">
                        <h6><span class="line">Featured Video </span></h6>
                        <div class="videoblock">
                            <a href="img/15.jpg" ><img src="img/14.jpg" style="background-repeat:no-repeat;"></a>
                        </div>
                    </div>
                </div>
                <!-- /Featured Video -->
                
                <!--  Archives -->
                
                <!--  /Archives -->
                
                <!--  Twitter -->
                
                <!--  /Twitter -->
                
                <!--  Flickr -->
                
                <!--  /Flickr -->
                
                <!--  Testimonials -->
				
                <!-- /Testimonials -->
                
            </div>
            <!-- /Sidebar -->
        </div>
        
        <!--contact us page section-->
          
    </section>
    
   
    
    <!-- / About -->
    
    
    <!-- Footer -->
    <footer id="footer">
    
     
    
    
		<div class="container">
			<p class="copyright">Copyright 2015. Designed by <a href="http://www.basukiitsolutions.com/">BITS</a>. All rights reserved. Powered by <a href="http://www.basukiitsolutions.com/">BITS</a></p>
            <ul class="social">
            	<li><span>Follow us on:</span></li>
                  <?php 
					 include('config.php');
					 $sql3=mysql_query("select * from social");
					 while($row3=mysql_fetch_array($sql3))
{
$name=$row3['name'];	
$link=$row3['link'];
$image=$row3['image'];
//echo $sn;
echo '  <li class="facebook"><a href="'.$link.'" TARGET = "_blank"><img src="img/socials/'.$image.'" style="width:14px; height:14px;"/></a></li>';
}
					 
					 ?>
               
               
               
             
            </ul>
            
        </div>
        <div style="float:right">
        
        
        
                <button style="background:url(audio/play.gif) no-repeat; height:30px;" id="b_music" type="button" onclick="aud_play_pause();"></button>
            </div>
    </footer>
    <!-- / Footer -->
    
</div>
<!-- / Body Wrapper -->



<!-- SCRIPTS -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>



<script src="slider_f/js/jquery.imagesloaded.min.js"></script>
		<script src="slider_f/js/cbpBGSlideshow.min.js"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>
		<script src="slider_f/js/demoad.js"></script>
 

<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript" src="plugin/jquery.form.js"></script>
<!--<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="js/supersized.shutter.min.js"></script>
-->
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/tweetable.js"></script>
<script type="text/javascript" src="js/timeago.js"></script>
<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="js/cycle.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/viewport.js"></script>
<script type="text/javascript" src="js/jwplayer.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script> <![endif]-->
<script src='js/pop_up.js' type='text/javascript'></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/thememarket.js"></script>
<script>
function aud_play_pause() {
  var myAudio = document.getElementById("myAudio");
  if (myAudio.paused) {
    myAudio.play();
	document.getElementById('b_music').style.backgroundImage = "url('audio/play.gif')";
  } else {
    myAudio.pause();
	document.getElementById('b_music').style.backgroundImage = "url('audio/pause.png')";
  }
}
</script>

<script>
function aud_play_pause1() {

    myAudio.play();
	document.getElementById('b_music').style.backgroundImage = "url('audio/play.gif')";
 
}
</script>




	<script>window.jQuery || document.write('<script src="js/s/jquery-1.11.0.min.js"><\/script>')</script>
	
	<!-- custom scrollbar plugin -->
	<script src="js/s/jquery.mCustomScrollbar.concat.min.js"></script>
	
	
<!-------------------------------------------------------------------------------------------------------------->	
  
 <script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

<!-- Mirrored from goesse.com/html/serendipity/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2015 07:23:21 GMT -->
</html>
<?php
	if(isset($_POST["send_msg"]))
	{
		$name=$_POST['your_name'];
		$email=$_POST['your_email'];
		$subject=$_POST['your_subject'];
		$msg=$_POST['your_message'];
		
		
	
/////////////////////////////

$message="Info";
$subject = $_POST['your_subject'];
$to=$email;

$body = "\nName : ".$name."\n\n<br><br>";
$body .="\nEmail : ".$email."\n\n<br><br>";
$body .="\nSubject : ".$subject."\n\n<br><br>";
$body .="\nMassege : ".$msg."\n\n<br><br>";


//echo $body;
    if($message==""||$subject==""||$to=="")
    {
        echo '<font style="font-family:Verdana, Arial; font-size:11px; color:#F3363F; font-weight:bold">Please fill all fields</font>';
    }
    else
    {
		//Database Insert\\
		
		//$sql="insert into contact_us(name,email,subject,massege) values('$name','$email','$subject','$msg')";
		//echo $sql;
		//$r=mysql_query($sql) or die("error");
		
		//header("location:http://www.bestcssbuttongenerator.com");
		//echo $rs? "<center>You will be redirected to Career Page automatically after 10 seconds...":"<center>Not Done, Try Again...";
		
		//Mail Start\\
		
		//$fp = fopen($upload_temp, "rb");
//		$file = fread($fp, $upload_size);
//	 
//		$file = chunk_split(base64_encode($file));
//		$num = md5(time());
 
        //Normal headers
 
       $headers   = "From: $name<$email>\r\n";
       $headers  .= "MIME-Version: 1.0\r\n";
       $headers  .= "Content-Type: multipart/mixed; ";
       //$headers  .= "boundary=".$num."\r\n";
       //$headers  .= "--$num\r\n";
 
        // This two steps to help avoid spam
 
       @$headers .= "Message-ID: <".gettimeofday()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
       $headers .= "X-Mailer: PHP v".phpversion()."\r\n";
 
        // With message
 
       $headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
       $headers .= "Content-Transfer-Encoding: 8bit\r\n";
	   
       $headers .= "".$message."\n";
	   $headers .= $body."\n";
      // $headers .= "--".$num."\n";
	   
        // Attachment headers
 
      // $headers  .= "Content-Type:".$upload_type." ";
//       $headers  .= "name=\"".$upload_name."\"r\n";
//       $headers  .= "Content-Transfer-Encoding: base64\r\n";
//       $headers  .= "Content-Disposition: attachment; ";
//       $headers  .= "filename=\"".$upload_name."\"\r\n\n";
//       $headers  .= "".$file."\r\n";
//       $headers  .= "--".$num."--";
	
	 
    // SEND MAIL
      if( @mail($to, $subject, $message, $headers))
	  {
		  // fclose($fp);
		   //header ("location:google.com");
	  }
        
		
	//echo '<font style="font-family:Verdana, Arial; font-size:11px; color:#fff; font-weight:bold">Attachment has been sent Successfully.<br /></font>';
 	//echo $body;
	
}
ob_end_flush();	
}
?>