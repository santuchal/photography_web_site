  <?php
		include('config.php');

		$ss=$_POST['name'];
		
		$query3="select * from member_social where id='$ss'";
$fetch3=mysql_query($query3);
$s=mysql_fetch_assoc($fetch3);
$d=$s['s_image'];
 if (!file_exists($d)) {
 unlink("images/team/".$d);
 }
$a="";		
		
$query2="UPDATE member_social
SET    
s_name = '',
s_image ='',
s_url=''
WHERE  id = '$ss';";
$fetch2=mysql_query($query2);

?>