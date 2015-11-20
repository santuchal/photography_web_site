<?php
include('config.php');
//include('config.php');
//echo "sss";
    $s=$_POST['cat'];
	$s1=$_POST['sub_cat'];
	
	//echo $s;
	echo $s1;
	
	if($s1=='Select Sub Category')
	{
		$sql22=mysql_query("select * from galery_category where c_id='$s'");
		
		$asd=mysql_fetch_assoc($sql22);
		$sd=$asd['name'];
		$c_img=$asd['c_image'];
		unlink('images/category/'.$c_img);
		
		$sql20=mysql_query("select * from galery_sub_category where c_id='$s'");
		while($d=mysql_fetch_assoc($sql20)){
			$id=$d['s_id'];
			$name=$d['s_name'];
			
			$sql00=mysql_query("select * from galery_content where c_id='$s' and s_id='$id'");
			while($d1=mysql_fetch_assoc($sql00)){
				unlink('images/category/'.$sd."/".$name."/".$d1['img']);
			}
			rmdir('images/category/'.$sd."/".$name);
		}
		
		$sql=mysql_query("delete from galery_content where c_id='$s'");
		$sql1=mysql_query("delete from galery_sub_category where c_id='$s'");
		$sql2=mysql_query("delete from galery_category where c_id='$s'");
		
		//rmdir("service/".$sel);
		rmdir('images/category/'.$sd);
		
		
	}
	else
	{
		$sql221=mysql_query("select * from galery_category where c_id='$s'");
		
		$asd1=mysql_fetch_assoc($sql221);
		$sd1=$asd1['name'];
		
		$sql22=mysql_query("select * from galery_sub_category where s_id='$s1'");
		
		$asd=mysql_fetch_assoc($sql22);
		$sd=$asd['s_name'];
		
		$sql000=mysql_query("select * from galery_content where c_id='$s' and s_id='$s1'");
			while($d=mysql_fetch_assoc($sql000)){
			 //$im=$d['img'];
			 
			unlink('images/category/'.$sd1.'/'.$sd.'/'.$d['img']);
			}
		
		
		$sql=mysql_query("delete from galery_content where s_id='$s1'");
		$sql1=mysql_query("delete from galery_sub_category where s_id='$s1'");
		
		rmdir('images/category/'.$sd1.'/'.$sd);
		//$sql2=mysql_query("delete from galery_category where c_id='$s'");
	}
	



?>