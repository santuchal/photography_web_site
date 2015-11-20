
<?php

if(isset($_POST['save_logo'])){
	session_start();
	
	
$id=$_POST['id'];
$logo_title=$_POST['logo_title'];
//echo $id;
 include('config.php');
 $sql1=mysql_query("select image_name  from logo where id='$id'");
 while ($rows2=mysql_fetch_array($sql1)) {
	$image_name=$rows2['image_name'];
	//echo $image_name;
 }
 
 if (file_exists($image_name)) {
  //  unlink("..img/$image_name");
   // echo 'File '.$filename.' has been deleted';
  }
  

  $imgname1=$_FILES['logo']['name'];
  //$s=time().$fileName;
  $imgname2=$image_name;
 // echo $imgname1;

  $imageextension1 = substr(strrchr($imgname1,'.'), 1);
  if (($imageextension1!= "jpg") && ($imageextension1 != "jpeg") && ($imageextension1 != "gif")&& ($imageextension1 != "png")&& ($imageextension1 != "bmp") && ($imageextension1!= "tif")) {
	 
	 //$_session['s']=1;
    //die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension1= "jpg") && ($imageextension1= "jpeg") && ($imageextension1= "gif") && ($imageextension1 = "png") && ($imageextension1 = "bmp") && ($imageextension1= "tif")) {   
    $query1=mysql_query("UPDATE logo SET image_title='$logo_title' WHERE id ='$id'");
    $action = move_uploaded_file($_FILES['logo']['tmp_name'],"../img/".$imgname2);
	
	
	if($action) {
		 //header("Location:admin.php");
	}
	 //echo "<body onload='goBack();'></body>";
    //die('Uploded');
 
}
}
?> 