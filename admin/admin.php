<?php
//session_start();

@session_start();
if(!isset($_SESSION['uid'])){
header("location:index.php");
}
else{
if(isset($_POST['log'])){
	session_unset();
	session_destroy();
header("location:index.php");
}


@include("config.php");
@include("soc_link.php");
@include("add_address.php");

@include("bannerupload.php");
@include("add_blog.php");
@include("add_portfolio.php");
@include("delete_member.php");
@include("service.php");
@include("serv_delete.php");
@include("change_music.php");
@include("change_aboutus.php");
@include("member_update_2.php");
@include("add_banner.php");
@include("delete_banner.php");
}

?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css" type="text/css">
   <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
   <script src="js/jquery-1.11.2.js"></script>
   <script src="js/script.js" type="text/javascript"></script>
   <script src="js/menu_call.js" type="text/javascript"></script>
   <script src="nicEdit-latest.js" type="text/javascript"></script>
   <script src="../js/image_restriction.js" type="text/javascript"></script>
   <script>
   //file insert for update or delete member 
   var file_up;
   
		
		function update_for_name(e)
{
	//alert('edrerf');
	var file = document.getElementById('hhhhdddd'+e).files[0];
	//alert($('#hhhhdddd'+e).target.files.length);
	//alert(file);
	//alert('dfdfd');
	var yy=$('#hhd'+e).val();//id
	var yy1=$('#hhdd'+e).val();//name
	var yy2=$('#hhhddd'+e).val();//url
	//alert(yy);
	var fd1=new FormData();
	 fd1.append('propic',file);
	 fd1.append('name_id',yy);
	fd1.append('name_name',yy1);
	fd1.append('name_url',yy2);
	$.ajax({
							   type:"POST",
							   url:"member_update_part_5.php?files",
							   processData: false,
							   contentType: false,
							   data:fd1,
							   //dataType:"html",
							   success:function(res){
								   if(res.length==1 || res.length>1)
								   {
									   alert("Update Succesfull");
								   }
								   
								   
							   }
							
						});
	
	
}
		
	
	
   
   </script>
   

   <script>
   /*
    $(function() {
		
		 $('#soc_name11111').focusout(function() {
			 var c= $('#soc_name').val();
			 
			 //alert(c);
			 $.ajax({
		url:"soc.php",
		dataType:"html",
		type:'POST',
		data:{id:c},
		success: function(res){
			//alert(res);
			if(res==1){
				alert('Social link already exist');
				$('#soc_name').val('');
			}
			else{
			}
			
		}
	});
			 
		 })
		
	})
	*/
   
   </script>
   
   
    <script type="text/javascript">
$(document).ready(function()
{
$(".form-combo10").change(function()
{
var id=$(this).val();
//alert(id);
//var dataString = 'id='+ id;

$.ajax
({
type: "GET",
url: "member_update.php",
data: {name:id},
cache: false,
dataType:"json",
success: function(html)
{
//	alert(html);
$("#mem_name1").val(html[0]);
$("#mem_post1").val(html[1]);
$("#hidden_name").val(html[2]);

//  for social information fetch data
d_1_fun();


}
});



});
});
</script>


          <!--Update Fetch Member part-1-->
          
          
          
 <script language="javascript">
 
 
function d_1_fun()
{
	
	
		var id=$(".form-combo10").val();
 //    alert(id);

	
	
	$.ajax({
		type: "GET",
		url:"member_update_part_3.php",
		data: {name:id},
		dataType:"html",
		success: function(res){
	//		alert(res);
		$('table#update_td tbody#sss').html(res);
	}
		});
	
		
}
function delete_for_name(e)
{
	
	var yy=$('#hhd'+e).val();
//	alert(yy);
	$.ajax({
		url:"member_update_part_4.php",
		dataType:"html",
		type:'POST',
		data:{name:yy},
		success: function(res){
			
			
			alert("Delete Successfully");
			
		}
	});
	
}
/*function update_for_name(e)
{
	
	var yy=$('#hhd'+e).val();//id
	var yy1=$('#hhdd'+e).val();//name
	var yy2=$('#hhhddd'+e).val();//url
//	alert(yy);
	$.ajax({
		url:"member_update_part_5.php",
		dataType:"html",
		type:'POST',
		data:{name_id:yy,name_name:yy1,name_url:yy2},
		success: function(res){
	//		alert(res);
			
		}
	});
	
}
function update_for_name(e)
{
	
	var yy=$('#hhd'+e).val();//id
	var yy1=$('#hhdd'+e).val();//name
	var yy2=$('#hhhddd'+e).val();//url
//	alert(yy);
	$.ajax({
		url:"member_update_part_5.php",
		dataType:"html",
		type:'POST',
		data:{name_id:yy,name_name:yy1,name_url:yy2},
		success: function(res){
	//		alert(res);
			
		}
	});

}
*/
</script>
   
   <script type="text/javascript">
$(document).ready(function()
{
$(".form-combo1").change(function()
{
var id=$(this).val();

//alert(id);
//var dataString = 'id='+ id;

$.ajax
({
type: "GET",
url: "find_soc_name.php",
data: {name:id},
cache: false,
success: function(html)
{
	//alert(html);
	
$("#link").val(html);

}
});




$.ajax
({
type: "GET",
url: "find_soc_name1.php",
data: {name1:id},
cache: false,
success: function(html)
{
	//alert(html);
	if(html==1){
		//alert('ff');
		$("#soc_name").val('');
		 $('#sub').show();
		 $('#soc_name').attr('readonly', false);
	}
	else{
	//$('#sub').attr('', true);
	   $('#sub').hide();
	$('#soc_name').attr('readonly', true);
$("#soc_name").val(html);
	}
//$('#soc_name').attr('readonly', true);
}
});

});

});
</script>
   <script>
   $(function() {
	   var file_up,file_up1;
	   $('#c_name').focusout(function() {
		   var c= $('#c_name').val();

		    $.ajax({
		   type:"POST",
		   url:"ajax_focus.php",
		   data:{c:c},	
		   success:function(res)
		   {
			   if(res==1)
			   {
				 $('#c_name').val('');  
				 
				 alert('Category Name Already Exists!');
				 
			   }
			   
			 
		   }
			});
	   })
	    $('#b2').focusout(function() {
			
			 var c1= $('#b2').val();
			 //alert(c1);
			 $.ajax({
		   type:"POST",
		   url:"ajax_sub_focus.php",
		   data:{c1:c1},	
		   success:function(res)
		   {
			   //alert(res);
			   if(res==1)
			   {
				 $('#b2').val('');  
				 
				 alert('Sub Category Name Already Exists!');
			   }
			   
			 
		   }
			});
			 
			
		})
	   $('#propic').on('change', function (event){
					 file_up = event.target.files;
					 //alert(file_up);
				});
	    $('#add_category1').click(function() {
			 //alert('arup das')
	           var c_name=document.getElementById('c_name').value;
			   var photo= $('#propic').val();
			   if(c_name.length==0)
			   {
				   alert( "Please type the Category Name!");
			   }
			   else if(!photo) { // returns true if the string is not empty
        alert( "Please Select the Image!");
    } 
	          else{
				  document.getElementById('add_category').style.display="none"; 
	             document.getElementById('gallery1').style.display="block";
			  var fd=new FormData();
			  var fbool=0;
			  $(file_up).each(function(key, value){
				  //alert('kk')
					fd.append('propic', value);
					fbool=1;
					return;
				});
				//alert(c_name);
			  fd.append('c_name', c_name);
			  $.ajax({
							   type:"POST",
							   url:"ajax_category.php?files",
							   processData: false,
							   contentType: false,
							   data:fd,
							   dataType:"json",
							   success:function(res){
								  // alert(res);
								 // alert(res[0]+res[1]);
								  var textb=document.getElementById("c_name");
						          var combo=document.getElementById("all_category");
						          var option=document.createElement("option");
						          var className = document.getElementById("all_category").value;
						          var x=combo.length;
						          option.text=res[0];
						          option.value=res[1];
								  try{
							if(textb.value===""){
					                   // alert("write the valid group name");
					                   
					                 //document.getElementById("txtcombo").focus();
					                }
					                else{
							combo.add(option,null);
							  document.getElementById("all_category").selectedIndex=x;
							         }
								  }
								  
								  catch(error){
							           combo.add(option);
							        }
							textb.value="";
							$('#propic').val('');
							   }
						});
			  }
		})
		
		$('#b3').click(function() {
			 
	  var all_category= $("#all_category").val();
	   var sub_category= $("#b2").val();
	   //alert(all_category);
	   //alert(sub_category);
	   if(all_category=='Select Category')
	   {
		   alert( "Please Select the Category Name!");
	   }
	   else if(sub_category.length==0){
		    alert( "Please type the Sub Category Name!");
	   }
	   else{
		    document.getElementById('b1').style.display="none"; 
	 document.getElementById('b2').style.display="none"; 
	 document.getElementById('b3').style.display="none";
	 
	 document.getElementById('a1').style.display="block"; 
	 document.getElementById('a2').style.display="block"; 
	 document.getElementById('a3').style.display="block";
	               $.ajax({
		   type:"POST",
		   url:"ajax_sub_category.php",
		   dataType:"json",
		   data:{all_category:all_category,sub_category:sub_category},	
		   success:function(res)
		   {
			   //alert(res)
			   
			   document.getElementById('gallery_img').style.display="block";	 
		 document.getElementById('gallery_add').style.display="block";	
		  document.getElementById('l22').style.display="block";	
			   var textb=document.getElementById("b2");
						          var combo=document.getElementById("a2");
						          var option=document.createElement("option");
						          var className = document.getElementById("a2").value;
						          var x=combo.length;
						          option.text=res[0];
						          option.value=res[1];
								  try{
							if(textb.value===""){
					                   // alert("write the valid group name");
					                   
					                 //document.getElementById("txtcombo").focus();
					                }
					                else{
							combo.add(option,null);
							  document.getElementById("a2").selectedIndex=x;
							  
							         }
								  }
								  
								  catch(error){
							           combo.add(option);
							        }
							textb.value="";
							
							   
		   }
			});
	   }
		})
		
		$('#all_category').change(function() {
			var w1=$("#all_category").val();
			$.ajax({
		   type:"POST",
		   url:"ajax_change.php",
		   data:{ss1:w1},	
		   success:function(res)
		   {
                        
			   $('#a2').html(res);
		   }
   });
   
		})
		$('#find_sub').change(function() {
			var w1=$("#find_sub").val();
			$.ajax({
		   type:"POST",
		   url:"ajax_change.php",
		   data:{ss1:w1},	
		   success:function(res)
		   {
                        
			   $('#find_sub_cat').html(res);
		   }
   });
   
		})
		$('#gallery_img').on('change', function (event){
					 file_up1 = event.target.files;
				});
		$('#gallery_add').click(function() {
			var category=$("#all_category").val();
			var s_category=$("#a2").val();
			var image1=$("#gallery_img").val();
			//alert(category);
			//alert(s_category);
			if(category=='Select Category'){
				 alert( "Please Select the Category Name!");
			}
			else if(s_category=='Select Sub Category'){
				 alert( "Please Select the Sub-Category Name!");
			}
			else if(!image1){
				 alert( "Please Select the Image!");
			}
			else{
			var fd1=new FormData();
			  var fbool=0;
			  $(file_up1).each(function(key, value){
					fd1.append('gallery_img', value);
					fbool=1;
					return;
				});
				fd1.append('category',category);
				fd1.append('s_category',s_category);
				//alert(category);
			//alert(s_category);
				$.ajax({
							   type:"POST",
							   url:"ajax_gallery.php?files",
							   processData: false,
							   contentType: false,
							   data:fd1,
							   //dataType:"html",
							   success:function(res){
								   $("#gallery_img").val('');
								   alert('Photo Added Successfully!')
								   
							   }
							
						});
			}
		})
		
   })
   </script>
   <title>Admin Panel</title>
</head>
<body style="background:url(images/seamless_paper_texture.png);">

<div style="width:100%;">

<div class="headerr">
	<p class="head_p">Welcome To Your Admin Panel</p>
</div>

<div id='cssmenu' style="float:left;">
<ul>
   
   <li class='has-sub'><a href='javascript:void(0);'><span>Home</span></a>
      <ul>
      	<li ><a onClick="header_1();" href='javascript:void(0);'><span>Logo</span></a></li>
   
   		<li ><a onClick="footer_1();" href='javascript:void(0);'><span>Social Link</span></a></li>
         <li><a onClick="add();" href='javascript:void(0);'><span>Address</span></a></li>
         <li><a onClick="back_img();" href='javascript:void(0);'><span>Background Image</span></a></li>
         <li><a onClick="music();" href='javascript:void(0);'><span>Background Music</span></a></li>

      </ul>
   </li>
   	<li class='has-sub'><a href='javascript:void(0);'><span>About Us</span></a>
      <ul>
         <li><a onClick="about_us_details();" href='javascript:void(0);'><span>About Us Title & Details</span></a></li>
         <li><a onClick="add_team();" href='javascript:void(0);'><span>Add Team Member</span></a></li>
         <li class='last'><a onClick="update_member();" href='javascript:void(0);'><span>Update & Delete Member Information</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Service </span></a>
      <ul>
         <li><a onClick="service_add();" href='javascript:void(0);'><span>Add Services</span></a></li>
         <li><a onClick="service_delete();" href='javascript:void(0);'><span>Delete Service</span></a></li>

      </ul>
   </li>
   <li class='has-sub'><a href='javascript:void(0);'><span>Gallery</span></a>
      <ul>
         <li><a onClick="add_gallery1();" href='javascript:void(0);'><span>Add Gallery</span></a></li>
           <li><a onClick="delete_gallery();" href='javascript:void(0);'><span>Delete Gallery</span></a></li>
         <!--<li class='last'><a href='javascript:void(0);'><span>Contact</span></a></li>-->
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Portfolio</span></a>
      <ul>
         <li><a onClick="port_add();" href='javascript:void(0);'><span>Add Portfolio</span></a></li>
         <li><a onClick="port_delete();" href='javascript:void(0);'><span>Delete Portfolio</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='javascript:void(0);'><span>Event</span></a>
      <ul>
         <li><a onClick="blog();" href='javascript:void(0);'><span>Add Event</span></a></li>
         <li><a onClick="delete_blog();" href='javascript:void(0);'><span>Delete Event</span></a></li>
      </ul>
   </li>
   
   <li class='has-sub'><a href='javascript:void(0);'><span style="background:none !important;"><form method="post"><input type="submit" name="log" value="Logout" style="background:url(images/power-01-128.png) no-repeat; border:none; width:116px; height:35px; color:#FFF; cursor:pointer;"></form></span></a>
      
   </li>
</ul>
</div>

<div style="float:left; width:77%; height:750px; background:url(images/halftone.png); margin-left:15px; border:2px solid #898897; border-radius:4px;">
	
    <!--Logo section-->
    
<div id="head" style="width:95%; height:auto; display:none;margin-left: 30px;margin-top: 20px;">
    	<form action="" method="post"  enctype="multipart/form-data">
    	<table border="2">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:25px;">Your Logo</p></th>
        <tr style="text-align:center;">
        
        
        
        <?php 
					 include('config.php');
					 $sql1=mysql_query("select *  from logo where id='1'");
					 while($row1=mysql_fetch_assoc($sql1))
{
	$logo_id=$row1['id'];
$logo=$row1['image_name'];
// $logo1=$row1['image'];
 echo '<td colspan="2"><img src="../img/'.$logo.'" style="width:148px; height:60px; border:5px solid #999; margin-bottom:10px;"/> <input type="hidden" value="'.$logo_id.'" name="id"></td>';
}
					 
					 ?>
        
        </tr>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Change Logo <font color="#FF0033"><b>*</b></font> :</label></td>
        <td><input type="file" name="logo" style="height: 32px;" id="logo_pic"/></td>
        </tr>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Logo Title : </label></td>
        <td><input type="text" name="logo_title" style="width: 250px;height: 32px;"/></td>
        </tr>
        <tr>
        <td colspan="2" style="text-align:center;"><input type="submit" name="save_logo" value="Submit" style="width: 150px;height: 35px;"/></td>
        </tr>
        </table>
        </form>
    </div>
    
    <!--Logo section-->
   
    <!--Background music change section-->
    
    <div id="back_music" style="width:95%; height:auto; display:none;margin-left: 30px;margin-top: 20px;">
    	<form action="" method="post" enctype="multipart/form-data">
    	<table border="2">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:25px;">Background Music</p></th>
        <tr style="text-align:center;">
        <td style="text-align:right;"><label style="font-size: 18px;">Change Music : </label></td>
        <td><input type="file" name="music" style="height: 32px;"/></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center;"><input type="submit" name="update_music" value="Update" style="width: 150px;height: 35px;"/></td>
        </tr>
    </table>
    </form>
    </div>
    
    <!--Background music change section-->
    
   
    <!--Social Link section-->
    
    <!--Social Link add/update validation-->
    <script>
	function check(){
		 var link1=document.getElementById('soc_name').value;
		 var image1=document.getElementById('social_icon1').value;
		 var lnk=document.getElementById('link').value;
		 
		 if(link1=='')
		 {
			 alert('Enter Social Link Name!');
			 return false;
		 }
		 /*
		 if(link1.length>0)
		 {
			 alert(link1);
			  $.ajax({
		url:"soc.php",
		dataType:"html",
		type:'POST',
		data:{id:link1},
		success: function(res){
			alert(res);
			if(res==1){
				alert('Social link already exist');
				$('#soc_name').val('');
				return false;
			}
			
			
		}
	})
	
	
		 }
		 */
		 
		 else if(!image1)
		 {
			 alert('Please Browse the Image File!');
			 return false;
		 }
		  else if(lnk=='')
		 {
			 alert('Enter Social Link!');
			 return false;
		 }
		 
		 else
		 {
			 
			 return true;
		 }
		  
		
	}
	
	function checkupdate(){
		 var link1=document.getElementById('soc_name').value;
		 var image1=document.getElementById('social_icon1').value;
		 var lnk=document.getElementById('link').value;
		 //alert(link1);
		 if(link1=='')
		 {
			 alert('Please Enter Your Social Link Name!');
			 return false;
		 }
		 
		  else if(lnk=='')
		 {
			 alert('Please Enter Your Social Link!');
			 return false;
		 }
		 else
		 {
			 return true;
		 }
		
	}
	</script>
    
     <!--Add Member add validation-->
     
     <script>
	 
	 function check_mem()
	 {
		
	 var mem_name=document.getElementById('mem_nam').value;
	 var mem_post=document.getElementById('mem_post').value;
	 var mem_img=document.getElementById('mem_img').value;
	 
	 if(mem_name=='')
	 {
		 alert('Please Enter Your Member Name!');
		 return false;
	 }
	else if(mem_post=='')
	{
		alert('Please Enter Your Designation!');
		return false;
	}
	else if(mem_img=='')
	{
		alert('Please Select Your Picture!');
		return false;
	}
	else
	 {
		 return true;
	 }
	 
	 
	 }
	 
	 </script>

    
     <!--Social Link add validation-->
    <div id="foot" style="width:95%; height:200px; display:none;margin-left: 30px;margin-top: 20px;">
    <form action="" method="post" enctype="multipart/form-data">
    	<table border="2">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:25px;">Social Link</p></th>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">All Social Link : </label></td>
        <td>
        
      
        
        <select style="width: 250px;height: 32px;" class="form-combo1" id="link1" name="combo">
        <option selected>Select</option>
        		   <?php 
					 include('config.php');
					 $sql50=mysql_query("select distinct name  from social");
					 while($row50=mysql_fetch_assoc($sql50))
{
$soc_name=$row50['name'];

 echo '<option value="'.$soc_name.'">'.$soc_name.'</option>';
}
					 
					 ?>
       		 </select>
             
             <!--code for validation-->
             <script type="text/javascript">
			 
       
             </script>
             <!--code for validation--------->
<!--script for category-->

        </td>
        </tr>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Social Link Name : </label></td>
        <td><input type="text" id="soc_name" name="soc_name" style="width: 250px;height: 32px;"/></td>
        </tr>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Social Link Image : </label></td>
        <td><input type="file" name="social_icon" style="height: 32px;" id="social_icon1"/></td>
        </tr>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Social Link : </label></td>
        <td><input type="text" name="link" id="link" style="width: 250px;height: 32px;"/></td>
        </tr>
        
        <tr>
        <td colspan="2" style="text-align:center;">
        <input type="submit" name="soc_add" value="Add" style="width:60px;height: 35px;" onclick='return check();' id="sub"/>
        <input type="submit" name="soc_update" value="Update" style="width:60px;height: 35px;" onclick='return checkupdate();'/>
        <input type="submit" name="soc_delete" value="Delete" style="width:60px;height: 35px;"/>
        </td>
        </tr>
        </table>
        </form>
    </div>
    
    <!--Social Link section-->
    
    <!--Address section-->
    
    <div id="home" style="width:95%; height:200px; display:none;margin-left: 30px;margin-top: 20px;">
     <?php 
					 include('config.php');
					
					 $sql1=mysql_query("select *  from address");
					 $row5=mysql_num_rows($sql1);
					 
					 //$row1=mysql_fetch_array($sql1);
					 if($row5>0){
						while($row1=mysql_fetch_array($sql1))
						{
							
							////$id=$row1[0];
$add=$row1[2];
$phone=$row1[3];
$email=$row1[4];
						}
					 }
					 else{
					 //while($row1)
//{

////echo $id1;
//}
					 }
					 ?>
                     
                     <!-- address validation-->
    <script>
   
	function addval(){
		 //var add=document.getElementById('add12').value;
		 // var add = $.trim($("textarea").val());
		 var phone=document.getElementById('phone').value;
		 var mail=document.getElementById('mail').value;
		
		 //alert(mail);
		 //var mac="\\d{10,12}";
		 var mac="\\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,4}\\b";
		 
		 /*if(add=='')
		 {
			 alert('TYPE THE ADDRESS');
			 return false;
		 }*/
		var mac1="\\d{10,12}";
		// if(!phone.match(mac1))
		if(isNaN(phone)){
		 //if(!IsNumeric(phone)) 
		 
			 alert('Enter Your Proper Phone Number!');
			 return false;
		 }
		if(!mail.match(mac))
		 {
			 alert('Enter Your Proper Email ID!');
			 
			 return false;
		 }
		  
		 else
		 {
			 return true;
		 }
		
	}
	
   
	</script>
     <!--Social Link add validation-->
                     
    <form  action="" method="post">
    
        <table border="2">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:25px;">Address</p></th>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Full Address : </label></td>
        <td> <textarea name="address" style="width: 341px;height: 171px;" id="add12"><?php echo $add;?></textarea></td>
        </tr>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Contact No : </label></td>
        <td><input type="text" value="<?php echo $phone;?>" name="phone" style="width: 250px;height: 32px;" id="phone"/></td>
        <tr>
    	<td style="text-align:right;"><label style="font-size: 18px;">Email Id : </label></td>
        <td><input type="text" value="<?php echo $email;?>" name="email" style="width: 250px;height: 32px;" id="mail"/></td>
        <tr>
        <td colspan="2" style="text-align:center;">
       <!-- <input type="submit"  value="Submit" style="width:60px;height: 35px;"/>-->
        <input type="submit" name="save_add" value="Update" style="width:60px;height: 35px;" onClick="return addval();"/>
        <!--<input type="submit" value="Delete" style="width:60px;height: 35px;"/>-->
        </td>
        </tr>
        </table>
        </form>
    </div>
    
     <!--Address section-->
     
     <!--Background Image section-->
    
    <div id="back_image" style="width:95%; height:200px; display:none;margin-left: 30px;margin-top: 20px;">

    	<table>
<tr><td width="20%" align="center">Background Image</td><td></td><td></td><td></td></tr>

<tr> <td><form action='' method='post' enctype='multipart/form-data'><input type='file' name='banner_file'><input type='submit' name='banner_add' value='Add'></form></td></tr>
<tr>

<?php
		include('config.php');
$query2="select * from background_image ";
$fetch2=mysql_query($query2);

while ($rows2=mysql_fetch_array($fetch2)) {
	$id22=$rows2['id'];
  echo "
  
 
  
  <td><img  width='300' height='100' src='shutterstock/".$rows2['image_name']."'  /></td><form action='' method='post' enctype='multipart/form-data'><td><input type='file' name='image'><input type='hidden' name='id' value='".$id22."'>&nbsp;<input type='submit' name='go' value='Update'></td></form><td><form action='' method='post' enctype='multipart/form-data'><input type='hidden' name='id1' value='".$id22."'><input type='submit' name='banner_delete' value='Delete'></td></form></td></tr>";   
}
?>



</table>
        
    </div>
	
   <!--Background Image section-->
    
    <!--About Us menu section-->
    
    <div id="about_us_details" style="width:95%; height:200px; display:none;margin-left: 30px;margin-top: 20px;">
    <form action="" method="post" enctype="multipart/form-data">
    
		<?php include('config.php');
$query500="select * from aboutus ";
$fetch500=mysql_query($query500);

while ($rows500=mysql_fetch_array($fetch500)) {
	$file500=$rows500['file'];
	//echo $file500;
}
?>
    
    <table border="2" width="100%">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:25px;">About Us Title & Details</p></th>
        <tr>
        <td>
        <script type='text/javascript'>
    //<![CDATA[
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    //]]>
    </script>
        
        <textarea name="text"  style='-moz-box-shadow: 0 0 20px #000;
	-webkit-box-shadow: 0 0 20px #000;
	-webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 10px;width:600px;height:190px; background-color:#999 '   cols=15 rows=8><?php echo $file500;?></textarea>
    </td>
    </tr>
        <tr>
        <td colspan="2" style="text-align:center;">
        <!--<input type="submit" value="Submit"  style="width:60px;height: 35px;"/>-->
        <input type="submit" value="Update" name="update" style="width:60px;height: 35px;"/>
       <!-- <input type="submit" value="Delete" style="width:60px;height: 35px;"/>-->
        </td>
        </tr>
        </table>
        </form>
    </div>
    
 
  <div id="add_team" style="width:95%; height:auto; display:none;margin-left: 30px;margin-top: 20px;">
    <form name="f3" action="" method="post" enctype="multipart/form-data" >
    	<table border="2" style="margin-bottom:10px;margin-left:25%;">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:20px;">Add Team Member</p></th>
        <tr style="text-align:right;">
        <td style="text-align:right;"><label style="font-size: 18px;">Member Name : </label></td>
        <td><input type="text" name="mem_nam" id="mem_nam" style="width: 250px;height: 32px;"/></td>
        </tr>
        
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Member Designation : </label></td>
        <td><input type="text" name="mem_post" id="mem_post" style="width: 250px;height: 32px;"/></td>
        </tr>
        
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Member Picture : </label></td>
        <td><input type="file" name="mem_img" id="mem_img" style="height: 32px;" /></td>
        </tr>
        </table>
        
        <table border="2">
        <th colspan="4" style="border-bottom:2px solid #666;"><p style="font-size:20px;">Add Social Link</p></th>
        
        <tr>
        <td>1.</td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Name</label><input type="text" name="s1_name" id="s1_name" style="width: 250px;height: 32px;"/>
        </td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Image</label><input type="file" name="s1_img" id="s1_img" style="height: 32px;border: 1px solid #666;padding-top: 8px;" class="file"/>
        </td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Link</label><input type="text" name="s1_url" id="s1_url" style="width: 250px;height: 32px;"/>
        </td>
        </tr>
        
        <tr>
        <td>2.</td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Name</label><input type="text" name="s2_name" id="s2_name" style="width: 250px;height: 32px;"/>
        </td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Image</label><input type="file" name="s2_img" id="s2_img" style="height: 32px;border: 1px solid #666;padding-top: 8px;" class="file"/>
        </td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Link</label><input type="text" name="s2_url" id="s2_url" style="width: 250px;height: 32px;"/>
        </td>
        </tr>
        
        <tr>
        <td>3.</td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Name</label><input type="text" name="s3_name" id="s3_name" style="width: 250px;height: 32px;"/>
        </td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Image</label><input type="file" name="s3_img" id="s3_img" style="height: 32px;border: 1px solid #666;padding-top: 8px;" class="file"/>
        </td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Link</label><input type="text" name="s3_url" id="s3_url" style="width: 250px;height: 32px;"/>
        </td>
        </tr>
        
        <tr>
        <td>4.</td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Name</label><input type="text" name="s4_name" id="s4_name" style="width: 250px;height: 32px;"/>
        </td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Image</label><input type="file" name="s4_img" id="s4_img" style="height: 32px;border: 1px solid #666;padding-top: 8px;" class="file"/>
        </td>
        <td style="text-align:center;">
        <label style="font-size: 18px;">Social Link</label><input type="text" name="s4_url" id="s4_url" style="width: 250px;height: 32px;"/>
        </td>
        </tr>
        
        <tr>
        <td colspan="4" style="text-align:center;">
        <input type="button" value="Add" name="add_mem"  style="width:60px;height: 35px;" id="add_mem"/>
       
        </td>
        </tr>
        </table>
        </form>
            </form>
    </div>
    
    <script>
	 $(function() {
		 
		 var file_up,file_up1,file_up2,file_up3,file_up4;
		 
		 
		 
		 
		 
		  $('#s1_img').on('change', function (event){
					 file_up = event.target.files;
					 //alert(file_up);
				});
				
				 $('#s2_img').on('change', function (event){
					 file_up1 = event.target.files;
					 //alert(file_up);
				});
				
				 $('#s3_img').on('change', function (event){
					 file_up2 = event.target.files;
					 //alert(file_up);
				});
				
				 $('#s4_img').on('change', function (event){
					 file_up3 = event.target.files;
					 //alert(file_up);
				});
				
				$('#mem_img').on('change', function (event){
					 file_up4 = event.target.files;
					 //alert(file_up);
				});
		  $('#add_mem').click(function() {
			  
			  
			 if($('#mem_nam').val()=='')
			 {
				 alert("Please Enter Your Member Name!");
			 }
			 else if($('#mem_post').val()=='')
			 {
				  alert("Please Enter Your Designation!");
				 
			 }else if($('#mem_img').val()=='')
			 {
				  alert("Please Select Your Picture!");
			 }
			 else
			 {
				 
		 
			  
			   var fd=new FormData();
			  var fbool=0;
			  $(file_up4).each(function(key, value){
				  //alert('kk')
					fd.append('mem_img', value);
					fbool=1;
					return;
				});
			  $(file_up).each(function(key, value){
				  //alert('kk')
					fd.append('s1_img', value);
					fbool=1;
					return;
				});
				
				$(file_up1).each(function(key, value){
				  //alert('kk')
					fd.append('s2_img', value);
					fbool=1;
					return;
				});
				$(file_up2).each(function(key, value){
				  //alert('kk')
					fd.append('s3_img', value);
					fbool=1;
					return;
				});
				$(file_up3).each(function(key, value){
				  //alert('kk')
					fd.append('s4_img', value);
					fbool=1;
					return;
				});
				
				//alert(c_name);
			  fd.append('mem_nam', $('#mem_nam').val());
			  fd.append('mem_post', $('#mem_post').val());
			  fd.append('s1_name', $('#s1_name').val());
			  fd.append('s1_url', $('#s1_url').val());
			   fd.append('s2_name', $('#s2_name').val());
			  fd.append('s2_url', $('#s2_url').val());
			   fd.append('s3_name', $('#s3_name').val());
			  fd.append('s3_url', $('#s3_url').val());
			   fd.append('s4_name', $('#s4_name').val());
			  fd.append('s4_url', $('#s4_url').val());
			  
			  
			  $.ajax({
							   type:"POST",
							   url:"add_member.php?files",
							   processData: false,
							   contentType: false,
							   data:fd,
							   dataType:"html",
							   success:function(res){
								   alert("successfully inserted");
								  location.reload();
								  
								  //$('#form').val()
								   //$('#mem_nam').val('');
								  
								   
							   }
			  })
			  
			  
			 }
			  
		  })
		 
		  
		 
	 })
	</script>

   <!--<script>
   var _URL = window.URL || window.webkitURL;

$(".file1").on('change', function () {
	
   
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>29 && this.height>20 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 30*20');
                $(".file1").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});
//service picture//

$("#serv_pic").on('change', function () {
	
   alert('fdrf');
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
            
            if(this.width>29 && this.height>20 )
            {
				 alert('FILE DIMENSION MUST BE WITHIN 30*20');
                $("#serv_pic").val('');
            }
            else{
                //alert("The image width is " +this.width + " and image height is " + this.height);
            }
        };
    
        image.src = _URL.createObjectURL(file);


    }

});


//service picture//

   </script>-->
   
   
   
   <!-------------update and delete member selection and Validation--------------------->
    <script>
    function mem_up_sec(){
		
		
		
		 var mem_select_name =document.getElementById('mem_select_name').value;
	 
	 if(mem_select_name=='Select Member Name')
		{
			alert('Please Select Member Name');
			return false;
			
		}
		
		
		document.getElementById('mem_up_delete').style.display="none";
		document.getElementById('member_update1').style.display="block";
		
		document.getElementById('head').style.display="none";
	document.getElementById('foot').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('back_image').style.display="none";
	document.getElementById('about_us_details').style.display="none";
	document.getElementById('add_team').style.display="none";
	document.getElementById('back_music').style.display="none";
	document.getElementById('gallery1').style.display="none";
	
	document.getElementById('add_portfolio').style.display="none";
	document.getElementById('delete_portfolio').style.display="none";
	document.getElementById('add_portfolio2').style.display="none";
	
	document.getElementById('blog').style.display="none";  
    document.getElementById('blog_add').style.display="none";
    document.getElementById('blog_delete').style.display="none";
	
	document.getElementById('b1').style.display="none"; 
	 document.getElementById('b2').style.display="none"; 
	 document.getElementById('b3').style.display="none";
	 
	 document.getElementById('a1').style.display="none"; 
	 document.getElementById('a2').style.display="none"; 
	 document.getElementById('a3').style.display="none";
	 
	 document.getElementById('service').style.display="none";
	document.getElementById('delete_service').style.display="none";
	document.getElementById('add_service').style.display="none";	
	
	document.getElementById('gallery_delete').style.display="none";
		
	}
    </script>
    
    
    <!-------------delete Member Validation--------------------->
    
    
    
    <script>
	 function mem_del_sec()
	 {
		
		 var mem_select_name =document.getElementById('mem_select_name').value;
	 
	 if(mem_select_name=='Select Member Name')
		{
			alert('Please Select Member Name');
			return false;
			
		}
		else
		{
			return true;
		}
	 }
	
	</script>

    
    
    <div id="mem_up_delete" style="width:95%; height:auto; display:none;margin-left: 30px;margin-top: 20px;">
    <form action="" method="post" name="member" enctype="multipart/form-data">
    	<table border="2">
         <tr>
        <td>
        <select  name="mem_select_name" id="mem_select_name" class="form-combo10" style="width: 250px;height: 32px;">
        <option selected="selected">Select Member Name</option>
        		<?php
include('config.php');
$sql=mysql_query("select * from member_info");
while($row=mysql_fetch_array($sql))
{
$mem_id1=$row[0];
$mem_name1=$row[1];

//$data=$row[1];
echo '<option value="'.$mem_id1.'">'.$mem_name1.'</option>';
} ?>
        </select>
        </td>
        <td><input onClick="mem_up_sec();" type="button" value="Update" name="update_mem" style="width:60px;height: 35px;"/></td>
        <td><input type="submit" value="Delete" onClick='return mem_del_sec();' name="del_mem" style="width:60px;height: 35px;"/></td>
        </tr>
       
        </table>
        </form>
    </div>
    
    
    <div id="member_update1" style="width:95%; height:auto; display:none;margin-left: 30px;margin-top: 20px;">
    <form action="" method="post" enctype="multipart/form-data">
    	<table border="2" style="margin-bottom:10px;">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:20px;">Member Information</p></th>
        <tr>
        <td><label style="font-size: 18px;">Member Name : </label></td>
        <td><input type="text" name="mem_name1" id="mem_name1" style="width: 250px;height: 32px;"/></td>
       <input type="hidden" id="hidden_name" name="hidden_name"/>
        </tr>
        <tr>
        <td><label style="font-size: 18px;">Member Post : </label></td>
        <td><input type="text" name="mem_post1" id="mem_post1" style="width: 250px;height: 32px;"/></td>
        
        </tr>
        <tr>
        <td><label style="font-size: 18px;">Member Picture : </label></td>
        <td><input type="file" name="mem_pic1" id="mem_pic1" style="height: 32px;border: 1px solid #666;padding-top: 8px;"/></td>
        </tr>
        <tr>
        <td colspan="2" style="text-align:center;">
        <input type="submit" onClick="return mem_info_up();" value="Update" name="update_mem1"  style="width:60px;height: 35px;"/>
        </td>
        </tr>
        </table>
        
        <table border="2" id="update_td">
        <tbody>
        <th colspan="5" style="border-bottom:2px solid #666;"><p style="font-size:20px;">Social Information</p>
        </th>
        <tr>
        <td style="text-align:center;">Social Name</td>
        <td style="text-align:center;">Social Url</td>
        <td style="text-align:center;">Social Image</td>
        <td colspan="2" style="text-align:center;">Customise</td>
        </tr>
        </tbody>
        <tbody id="sss">
        </tbody>
     
        </table>
        </form>
        
    </div>
    
   <!---Validation for Member Information-->
   
   <script>
   function mem_info_up()
   {
	    var mem_name1 =document.getElementById('mem_name1').value;
		var mem_post1 =document.getElementById('mem_post1').value;
		var mem_pic1 =document.getElementById('mem_pic1').value;
		
		if(mem_name1=='')
		{
			alert("Please Enter Your Member Name!");
			return false;
		}
		else if(mem_post1=='')
		{
			alert("Please Enter Your Designation!");
			return false;
		}
		else if(mem_pic1=='')
		{
			alert("Please Enter Your Picture!");
			return false;
		}
		else
		{
			return true;

		
		}
	   
	   
   }
   
   
   </script>
    <!---->
    
    <!--->
    
    
    
     <!---php part for add category-->
     
     
     <!---php part for add category-->
     
     
    <!--Category menu section-->
     <div id="add_category" style="width:95%; height:200px; display:none;margin-left: 30px;margin-top: 20px;">
    
    <form name="f1" action="" method="post" enctype="multipart/form-data">
     <table border="2">
     	<th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:25px;">Add Category</p></th>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Category Name : </label></td>
        <td><input type="text" name="save_category" style="width: 250px;height: 32px;" id="c_name"/></td>
        </tr>
        
         <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Category Image : </label></td>
        <td><input type="file" style="height: 32px;" id="propic"/></td>
        </tr>
        
       <td colspan="3" style="text-align:center;">
        <input type="button"  value="Submit" style="width:60px;height: 35px;" id="add_category1"/>
        </td>
     </table>
     </form>
     </div>
    
    <Script language="javascript"> 
   
   
   function category_add1(){
	   
	 document.getElementById('add_category').style.display="block"; 
	 document.getElementById('gallery1').style.display="none"; 
	 
	 document.getElementById('gallery_delete').style.display="none";
   }
   
   function back_gallery(){
	 document.getElementById('add_category').style.display="none"; 
	 document.getElementById('gallery1').style.display="block";
	 
	 document.getElementById('gallery_delete').style.display="none";
	 
	 var c_name=document.getElementById('c_name').value;
	   alert(c_name);
   }
   
   function add_folder(){
	   document.getElementById('gallery_img').style.display="none";	 
		 document.getElementById('gallery_add').style.display="none";	
		  document.getElementById('l22').style.display="none";	
	   document.getElementById('a1').style.display="none"; 
	 document.getElementById('a2').style.display="none"; 
	 document.getElementById('a3').style.display="none";
	  
	 
	 document.getElementById('b1').style.display="block"; 
	 document.getElementById('b2').style.display="block"; 
	 document.getElementById('b3').style.display="block";
	 
	 document.getElementById('gallery_delete').style.display="none";
	 
   }
   
    function add_folder_back(){
	 document.getElementById('b1').style.display="none"; 
	 document.getElementById('b2').style.display="none"; 
	 document.getElementById('b3').style.display="none";
	 
	 document.getElementById('a1').style.display="block"; 
	 document.getElementById('a2').style.display="block"; 
	 document.getElementById('a3').style.display="block";
	 
	 document.getElementById('gallery_delete').style.display="none";  
	   
   }
   
</Script>
     
    <div id="gallery1" style="width:95%; height:200px; display:none;margin-left: 30px;margin-top: 20px;">
    <form name="f2" action="" method="post" enctype="multipart/form-data">
        <table border="2">
        <th colspan="3" style="border-bottom:2px solid #666;"><p style="font-size:25px;">Gallery</p></th>
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Select Category : </label></td>
        <td>
        	<select id="all_category" style="width: 250px;height: 32px;">
        		<option>Select Category</option>
                 <?php
								 
				           
							
							
                            
                            $sql=mysql_query("select * from galery_category");
                            
                            while($row=@mysql_fetch_assoc($sql)){
							
                            	echo '<option value="'.$row['c_id'].'">'.$row['name'].'</option>';
                            } 
							?>
       		 </select>
        </td>
        <td><a onClick="category_add1();" href="javascript:void(0);"><img src="images/add.png"/></a></td>
        </tr>
        
        <tr >
        <td style="text-align:right;">
        <label id="a1" style="font-size: 18px;">Select Category : </label>
        <label id="b1" style="font-size: 18px; display:none;">Enter Sub Category Name : </label>
        </td>
        <td>
        	<select id="a2" style="width: 250px;height: 32px;">
            	<option>Select Folder</option>
                
                <?php
        		
                            
                            $sql=mysql_query("select * from galery_sub_category");
                            
                            while($row=@mysql_fetch_assoc($sql)){
							
                            	echo '<option value="'.$row['s_id'].'">'.$row['s_name'].'</option>';
                            } 
							?>
       		 </select>
             <input id="b2" type="text" name="folder_name" style="width: 250px;height: 32px;display:none;"/>
        </td>
        <td>
        <a id="a3" onClick="add_folder();" href="javascript:void(0);"><img src="images/add.png"/></a>
        <input  id="b3" type="button" value="Submit" style="width:60px;height: 35px; display:none;"/>
        </td>
        </tr>
        
       
        
        <tr id="up_img">
        <td style="text-align:right;"><label id="l22" style="font-size: 18px;">Upload Image : </label></td>
        <td><input type="file" name="gallery_img" style="height: 32px;" id="gallery_img"/></td>
        <td></td>
        </tr>
        
        <tr id="add_btn1">
        <td></td>
        <td style="text-align:center;"><input type="button" value="Add" style="width:60px;height: 35px;" id="gallery_add"/></td>
        <td></td>
        </tr>
        </table>
        </form>
       
    </div>
    
    <div id="gallery_delete" style="width:95%; height:200px; display:none;margin-left: 30px;margin-top: 20px;">
    
    <form enctype="multipart/form-data" action="" method="post">
    <table border="2">
    <th colspan="3" style="border-bottom:2px solid #666;"><p style="font-size:25px;">Delete Gallery</p></th>
    <tr>
    <td>
    <select class="find_sub" id="find_sub" name="find_sub">
    <option selected >Select Category</option>
    <?php
        		
                            
                            $sql9456=mysql_query("select * from galery_category");
                            
                            while($row9456=@mysql_fetch_assoc($sql9456)){
							$g_id=$row9456['c_id'];
                            	echo '<option value="'.$row9456['c_id'].'">'.$row9456['name'].'</option>';
                            } 
							?>
    </select>
    </td>
    </tr>
    <tr>
    <td>
    <select class="find_sub_cat" id="find_sub_cat" name="find_sub_cat">
   
    </select>
    </td>
    </tr>
    <tr>
    <td><input type="button" name="delete_gallery" value="Delete" id="del_g"/></td>
    </tr>
    </table>
    </form>
    
    </div>
    <script>
	$(function() {
		
		$('#del_g').click(function() {
			
			var a=$('#find_sub').val();
			var a1=$('#find_sub_cat').val();
			//alert(a);
			$.ajax({
		type: "POST",
		url:"del_gallery.php",
		data:{cat:a,sub_cat:a1},
		dataType:"html",
		success: function(res){
			alert("Deleted Successfully");
		//$('table#update_td tbody#sss').html(res);
	}
		});
			
			
		})
		
	})
	
	</script>
    
    <!--Gallery menu section-->
    
    <!--Portfolio menu section----------------------->
    <script>
	function port_add()
	{
	document.getElementById('add_portfolio').style.display="block";
	document.getElementById('delete_portfolio').style.display="none";
	document.getElementById('add_portfolio2').style.display="block";
	
	document.getElementById('blog').style.display="none";  
   document.getElementById('blog_add').style.display="none";
   document.getElementById('blog_delete').style.display="none";
   
   document.getElementById('service').style.display="none";
	document.getElementById('delete_service').style.display="none";
	document.getElementById('add_service').style.display="none";
	
	document.getElementById('head').style.display="none";
	document.getElementById('foot').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('back_image').style.display="none";
	document.getElementById('about_us_details').style.display="none";
	document.getElementById('add_team').style.display="none";
	document.getElementById('back_music').style.display="none";
	document.getElementById('gallery1').style.display="none";
	
	document.getElementById('mem_up_delete').style.display="none";
     document.getElementById('member_update1').style.display="none";
	 
	 document.getElementById('add_category').style.display="none";
	 document.getElementById('b1').style.display="none"; 
	 document.getElementById('b2').style.display="none"; 
	 document.getElementById('b3').style.display="none";
	 
	 document.getElementById('a1').style.display="none"; 
	 document.getElementById('a2').style.display="none"; 
	 document.getElementById('a3').style.display="none";
	 
	 document.getElementById('gallery_delete').style.display="none";
	}
	function port_delete()
	{
    document.getElementById('add_portfolio').style.display="block";
	document.getElementById('add_portfolio2').style.display="none";
	document.getElementById('delete_portfolio').style.display="block";
	
	document.getElementById('blog').style.display="none";  
   document.getElementById('blog_add').style.display="none";
   document.getElementById('blog_delete').style.display="none";
   
   document.getElementById('service').style.display="none";
	document.getElementById('delete_service').style.display="none";
	document.getElementById('add_service').style.display="none";
	
	document.getElementById('head').style.display="none";
	document.getElementById('foot').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('back_image').style.display="none";
	document.getElementById('about_us_details').style.display="none";
	document.getElementById('add_team').style.display="none";
	document.getElementById('back_music').style.display="none";
	document.getElementById('gallery1').style.display="none";
	
	document.getElementById('mem_up_delete').style.display="none";
     document.getElementById('member_update1').style.display="none";
	 
	 document.getElementById('add_category').style.display="none";
	 document.getElementById('b1').style.display="none"; 
	 document.getElementById('b2').style.display="none"; 
	 document.getElementById('b3').style.display="none";
	 
	 document.getElementById('a1').style.display="none"; 
	 document.getElementById('a2').style.display="none"; 
	 document.getElementById('a3').style.display="none";
	 
	 document.getElementById('gallery_delete').style.display="none";
	}
	</script>
    <!--portfolio avalidation start-->
    <script>
	function portfolio(){
		
		var r=document.getElementById('port_nm').value;
		if(r=='')
		{
			alert('Please type the Portfolio Name!');
			return false;
		}
	}
		function blogval(){
		
		var r1=document.getElementById('blog_name1').value;
		//alert('');
		if(r1=='')
		{
			alert('Please type the Event Name!');
			return false;
		}
		}
		
	
	</script>
     <!--portfolio validation end-->
    
    <div id="add_portfolio" style="width:95%; height:200px; display:none;margin-left: 30px;margin-top: 20px;">
    <form action="" method="post" enctype="multipart/form-data"> 
    <table id="add_portfolio2" border="2" style="margin-bottom:10px;margin-left:25%; width:46%;">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:20px;">Add Portfolio</p></th>
        <tr style="text-align:right;">
        <td style="text-align:right;"><label style="font-size: 18px;">Portfolio Name : </label></td>
        <td><input type="text" name="port_name" style="width: 250px;height: 32px;" id="port_nm"/></td>
        </tr>
        
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Portfolio Category : </label></td>
        <td><input type="text" name="port_cat" style="width: 250px;height: 32px;"/></td>
        </tr>
        
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Portfolio Picture : </label></td>
        <td><input type="file" name="port_file" style="height: 32px;" id="port_img"/></td>
        </tr>
        <tr style="text-align:center;">
        <td colspan="2"><input type="submit" value="Add" name="add_portfolio" style="height: 32px;" id="add_port" onClick="return portfolio();"/></td>
        </tr>
        </table>
        
        
        <table id="delete_portfolio" style="display:none; width:40%;" border="2">
         <tr>
        <td>
        <select style="width: 250px;height: 32px;" name="p_name">
         <option>Select Portfolio Title</option>
        		 <?php
        		
                            
                            $sql91=mysql_query("select * from portfolio");
                            
                            while($row91=@mysql_fetch_assoc($sql91)){
							
                            	echo '<option value="'.$row91['id'].'">'.$row91['portfolio_name'].'</option>';
                            } 
							
							?>
        </select>
        </td>
        <td><input type="submit" value="Delete" style="width:60px;height: 35px;" name="port_delete"/></td>
        </tr>
       
        </table>
        </form>
    </div>
    <?php
		if(isset($_POST['port_delete'])){
			$a=$_POST['p_name'];
			$sql="select * from portfolio where id='$a'";
			$ad=@mysql_fetch_array($sql);
			$d=$ad['portfolio_img'];
			echo '<script>alert($a);</script>';
			
			if(file_exists($d)) {
  unlink("admin/img/gallery/portfolio/$d");
   // echo 'File '.$filename.' has been deleted';
  }
			mysql_query("delete from portfolio where id='$a'");
			echo "<script>alert('Portfolio Deleted Successfully!');</script>";
		}
		?>
    
    
  <!--Blog menu section-->
  <script>
  function blog()
  {
  document.getElementById('blog').style.display="block";  
  document.getElementById('blog_add').style.display="block";
  document.getElementById('blog_delete').style.display="none";
  
  document.getElementById('add_portfolio').style.display="none";
	document.getElementById('delete_portfolio').style.display="none";
	document.getElementById('add_portfolio2').style.display="none";
	
	document.getElementById('service').style.display="none";
	document.getElementById('delete_service').style.display="none";
	document.getElementById('add_service').style.display="none";
	
	document.getElementById('head').style.display="none";
	document.getElementById('foot').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('back_image').style.display="none";
	document.getElementById('about_us_details').style.display="none";
	document.getElementById('add_team').style.display="none";
	document.getElementById('back_music').style.display="none";
	document.getElementById('gallery1').style.display="none";
	
	document.getElementById('mem_up_delete').style.display="none";
     document.getElementById('member_update1').style.display="none";
	 
	 document.getElementById('add_category').style.display="none";
	 document.getElementById('b1').style.display="none"; 
	 document.getElementById('b2').style.display="none"; 
	 document.getElementById('b3').style.display="none";
	 
	 document.getElementById('a1').style.display="none"; 
	 document.getElementById('a2').style.display="none"; 
	 document.getElementById('a3').style.display="none";
	 
	 document.getElementById('gallery_delete').style.display="none";
  }
  
  function delete_blog()
  {
   document.getElementById('blog').style.display="block";
  document.getElementById('blog_add').style.display="none";
  document.getElementById('blog_delete').style.display="block";
  
  document.getElementById('add_portfolio').style.display="none";
	document.getElementById('delete_portfolio').style.display="none";
	document.getElementById('add_portfolio2').style.display="none";
	
	document.getElementById('service').style.display="none";
	document.getElementById('delete_service').style.display="none";
	document.getElementById('add_service').style.display="none";
	
	document.getElementById('head').style.display="none";
	document.getElementById('foot').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('back_image').style.display="none";
	document.getElementById('about_us_details').style.display="none";
	document.getElementById('add_team').style.display="none";
	document.getElementById('back_music').style.display="none";
	document.getElementById('gallery1').style.display="none";
	
	document.getElementById('mem_up_delete').style.display="none";
     document.getElementById('member_update1').style.display="none";
	 
	 document.getElementById('add_category').style.display="none";
	 document.getElementById('b1').style.display="none"; 
	 document.getElementById('b2').style.display="none"; 
	 document.getElementById('b3').style.display="none";
	 
	 document.getElementById('a1').style.display="none"; 
	 document.getElementById('a2').style.display="none"; 
	 document.getElementById('a3').style.display="none";
	 
	 document.getElementById('gallery_delete').style.display="none";
  }
  </script>
 <div id="blog" style="width:95%; height:200px; display:none;margin-left: 30px;margin-top: 20px;">   
 <form id="blog_add" action="" enctype="multipart/form-data" method="post">
    <table border="2" style="margin-bottom:10px;">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:20px;">Event</p></th>
        <tr style="text-align:right;">
        <td style="text-align:right;"><label style="font-size: 18px;">Event Title : </label></td>
        <td style="text-align:left;"><input type="text" name="blog_title" style="width: 250px;height: 32px;" id="blog_name1"/></td>
        </tr>
        
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Event Describtion : </label></td>
        <td>   
        <textarea name="blog_text"  style='-moz-box-shadow: 0 0 20px #000;
	-webkit-box-shadow: 0 0 20px #000;
	-webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 10px;width:600px;height:190px; background-color:#999 '   cols=15 rows=8></textarea></td>
        </tr>
        
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Event Picture : </label></td>
        <td><input type="file" name="blog_pic" style="height: 32px;" id="event_pic"/></td>
        </tr>
        <tr style="text-align:center;">
        <td colspan="2"><input type="submit" value="Add" name="blog_add" style="height: 32px;" id="add_blogspot" onClick="return blogval();"/></td>
        </tr>
        </table>
        </form>
        
        
        <form id="blog_delete" action="" method="post">
        <table style="margin-bottom:10px;margin-left:25%;" border="2">
        <th colspan="2" style="border-bottom:2px solid #666;"><p style="font-size:20px;">Delete Event</p></th>
        <tr>
        <td>
        <select name="blog_name">
        <option>Select Event Title</option>
         <?php
        		
                            
                            $sql90=mysql_query("select * from blog");
                            
                            while($row90=@mysql_fetch_assoc($sql90)){
							
                            	echo '<option value="'.$row90['id'].'">'.$row90['blog_title'].'</option>';
                            } 
							
							?>
        </select>
       
        </td>
        <td><input type="submit" value="Delete" name="delete"/></td>
        </tr>
        </table>
        </form>
         <?php
		if(isset($_POST['delete'])){
			$a=$_POST['blog_name'];
			
			mysql_query("delete from blog where id='$a'");
			echo "<script>alert('Event Deleted Successfully!');</script>";
		}
		?>
    </div>
    <!--Blog menu section-->
    
   
   <!-------------------Services menu section----------------------->
      <script>
	function service_add()
	{
	document.getElementById('service').style.display="block";
	document.getElementById('delete_service').style.display="none";
	document.getElementById('add_service').style.display="block";
	
	document.getElementById('add_portfolio').style.display="none";
	document.getElementById('delete_portfolio').style.display="none";
	document.getElementById('add_portfolio2').style.display="none";
	
	document.getElementById('blog').style.display="none";  
   document.getElementById('blog_add').style.display="none";
   document.getElementById('blog_delete').style.display="none";
   
   document.getElementById('head').style.display="none";
	document.getElementById('foot').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('back_image').style.display="none";
	document.getElementById('about_us_details').style.display="none";
	document.getElementById('add_team').style.display="none";
	document.getElementById('back_music').style.display="none";
	document.getElementById('gallery1').style.display="none";
	
	document.getElementById('gallery1').style.display="none";
	 document.getElementById('add_category').style.display="none";
	 document.getElementById('b1').style.display="none"; 
	 document.getElementById('b2').style.display="none"; 
	 document.getElementById('b3').style.display="none";
	 
	 document.getElementById('a1').style.display="none"; 
	 document.getElementById('a2').style.display="none"; 
	 document.getElementById('a3').style.display="none";
	 
	 document.getElementById('mem_up_delete').style.display="none";
     document.getElementById('member_update1').style.display="none";
	 
	 document.getElementById('gallery_delete').style.display="none";
	}
	function service_delete()
	{
	document.getElementById('service').style.display="block";
	document.getElementById('add_service').style.display="none";
	document.getElementById('delete_service').style.display="block";
	
	document.getElementById('add_portfolio').style.display="none";
	document.getElementById('delete_portfolio').style.display="none";
	document.getElementById('add_portfolio2').style.display="none";
	
	document.getElementById('blog').style.display="none";  
   document.getElementById('blog_add').style.display="none";
   document.getElementById('blog_delete').style.display="none";
   
   document.getElementById('head').style.display="none";
	document.getElementById('foot').style.display="none";
	document.getElementById('home').style.display="none";
	document.getElementById('back_image').style.display="none";
	document.getElementById('about_us_details').style.display="none";
	document.getElementById('add_team').style.display="none";
	document.getElementById('back_music').style.display="none";
	
	
	document.getElementById('gallery1').style.display="none";
	 document.getElementById('add_category').style.display="none";
	 document.getElementById('b1').style.display="none"; 
	 document.getElementById('b2').style.display="none"; 
	 document.getElementById('b3').style.display="none";
	 
	 document.getElementById('a1').style.display="none"; 
	 document.getElementById('a2').style.display="none"; 
	 document.getElementById('a3').style.display="none";
	 
	 document.getElementById('mem_up_delete').style.display="none";
     document.getElementById('member_update1').style.display="none";
	 
	 document.getElementById('gallery_delete').style.display="none";
	}
	</script>
     
     
<script language="javascript">
$(document).ready(function(e) {
    

var counter=1;
 $("#addButton").click(function () {
		
			counter++;
			$('#hidden_count').val(counter);
			//alert(counter);
			var newTextBoxDiv = $(document.createElement('tr')).attr("id", 'TextBoxDiv' + counter);
                newTextBoxDiv.after().html('<td></td><td><input type="file"  name="service_picture' + counter + '" id="service_picture' + counter + '" ></td><td></td>');
            
			newTextBoxDiv.appendTo("#TextBoxesGroup");
			//$('#toby'+counter).focus();
		
		    
	    });
		
		$("#removeButton").click(function () {
		    if(counter==1){
		        alert("No more textbox to remove");
		        return false;
		    }   
	        detele_val(counter);
	        $("#TextBoxDiv" + counter).remove();
			counter--;
			$('#hidden_product_count').val(counter);
			//alert(counter);
		});
		
		});
</script>
<div id="service" style="width:95%; height:auto; display:none;margin-left: 30px;margin-top: 20px;">
    	
        <form id="add_service" action="" enctype="multipart/form-data" method="post">
    	<table id="TextBoxesGroup"  border="2" style="width:100%;">
        
        <th colspan="3" style="border-bottom:2px solid #666;"><p style="font-size:20px;">Add Service</p></th>
        <tr style="text-align:right;">
        <td style="text-align:right;"><label style="font-size: 18px;">Service Title : </label></td>
        <td style="text-align: left;"><input type="text" name="service_title" style="width: 250px;height: 32px;"/>
        </td>
        <td></td>
        </tr>
        
        <tr>
        <td style="text-align:right;"><label style="font-size: 18px;">Service Details : </label></td>
        <td> <textarea name="service_details"  style='-moz-box-shadow: 0 0 20px #000;
	-webkit-box-shadow: 0 0 20px #000;
	-webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 10px;width:600px;height:190px; background-color:#999 '   cols=15 rows=8></textarea>
    </td>
    <td></td>
        </tr>
        
        <tr >
        <td style="text-align:right;"><label style="font-size: 18px;">Service Picture : </label></td>
        <td ><input type="file" name="service_picture1" id="serv_pic123" style="height: 32px;"/></td>
        <td><!--<input type="button" style="background:url(images/add.png) no-repeat; border:none; cursor:pointer;" name="add_file" value="" id="addButton"/>--></td>
        </tr>
       
        </table>
        <table border="2" style="margin-bottom:10px;width:100%;">
        <tr>
        <td style="text-align:center;" ><input type="submit" value="Add" style="width:60px;height: 35px;" name="add_serv"/></td>
        </tr>
        </table>
        <input style="display:none;" type="text" id="hidden_count" name="h_name" value="1" />
        </form>
        <form name="f5" action="" method="post" >
        <table id="delete_service" style="display:none; width:37%;" border="2">
         <tr>
        <td>
        <select style="width: 250px;height: 32px;" name="serv_sel">
        <option>Select service Title</option>
        	 <?php
        		
                            
                            $sql92=mysql_query("select distinct serv_title from service");
                            
                            while($row92=@mysql_fetch_assoc($sql92)){
							
                            	echo '<option value="'.$row92['serv_title'].'">'.$row92['serv_title'].'</option>';
                            } 
							
							?>	
        </select>
        </td>
        <td><input type="submit" value="Delete" style="width:60px;height: 35px;" name="serv_del"/></td>
        </tr>
       
        </table>
        </form>
        
        
        
    </div>

   
    
</div>
<input style="display:none;" type="text" id="hidden_count"  value="1" />
</div>
</body>
</html>
<?php
if(isset($_POST['save_logo'])){
	//session_start();
	
	
$id=$_POST['id'];
$logo_title=$_POST['logo_title'];
//echo $id;
 include('config.php');
 $sql1=mysql_query("select image_name  from logo where id='$id'");
 while ($rows2=mysql_fetch_array($sql1)) 
 {
	$image_name=$rows2['image_name'];
//	echo $image_name;
 }
 
 if (file_exists($image_name)) {
  //  unlink("..img/$image_name");
   // echo 'File '.$filename.' has been deleted';
  }
  

  $imgname1=$_FILES['logo']['name'];
  $imgname2=$image_name;
 // echo $imgname1;

  $imageextension1 = substr(strrchr($imgname1,'.'), 1);
  if (($imageextension1!= "jpg") && ($imageextension1 != "jpeg") && ($imageextension1 != "gif")&& ($imageextension1 != "png")&& ($imageextension1 != "bmp") && ($imageextension1!= "tif")) {
	   echo '<script>alert("Only JPG,BMP,JPEG,PNG files are supported.");</script>';
	   echo '<script> document.getElementById("head").style.display="block" ;</script>';
	 //$_session['s']=1;
    die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension1= "jpg") && ($imageextension1= "jpeg") && ($imageextension1= "gif") && ($imageextension1 = "png") && ($imageextension1 = "bmp") && ($imageextension1= "tif")) {   
    $query1=mysql_query("UPDATE logo SET image_title='$logo_title' WHERE id ='$id'");
	
    $action = move_uploaded_file($_FILES['logo']['tmp_name'],"../img/".$imgname2);
	echo '<script>alert("Logo Updated Successfully!");</script>';
	
	if($action) {
		 //header("Location:admin.php");
		 
	}
	// echo "<body onload='window'></body>";
    //die('Uploded');
 
}

}

?>