<?php
include('Admin/config.php');

$id1=$_POST['id'];
$src=array();
$count=0;
function array_push_before($src,$in,$pos){
    if(is_int($pos)) $R=array_merge(array_slice($src,0,$pos), $in, array_slice($src,$pos));
    else{
        foreach($src as $k=>$v){
            if($k==$pos)$R=array_merge($R,$in);
            $R[$k]=$v;
        }
    }return $R;
}
$sql1=mysql_query("select * from galery_sub_category where s_id='$id1'");
{
	$row1=mysql_fetch_assoc($sql1);
	$name=$row1['s_name'];//sub category name
	$n1=$row1['c_id'];
	$sql2=mysql_query("select * from galery_category where c_id='$n1'");
	$row2=mysql_fetch_assoc($sql2);
	$nm=$row2['name'];///category name
}

$sql=mysql_query("select * from galery_content where s_id='$id1'");
//echo '<option>Select Sub Category</option>';
while($row=mysql_fetch_assoc($sql))
{

$data1=$row['img'];
//$a='/';
//echo $nm;
//echo $name;
//echo $data1;
//echo '<li class="ipl6 isotope-item" style="position: absolute; left: 0px; top: 180px;"><a href="javascript:void(0);" rel="bookmark" class="fancybox" onclick="cat1();"><img style="width:162px; height:162px;" src="Admin/images/category/'.$nm.''.$a.''.$name.''.$a.''.$data1.'" alt="Ravi_Shanker_tulsan" /><div style="display: none; left: 0px; top: 100%; transition: all 300ms ease 0s;"><span>cdxcxcf</span></div></a></li>';


 /* echo '<li><a onClick="cat1();" href="javascript:void(0);" ><img src="Admin/images/category/'.$nm.''.$a.''.$name.''.$a.''.$data1.'"  style="width:162px; height:162px;"/><div><span></span></div></a></li>
           ';

 */
 $count++;
 array_push($src,$nm,$name,$data1);
 

}
$in=array();
$in['0']=$count;
$gg=array_push_before($src,$in,0);
//echo print_r($gg);
echo json_encode($gg);
	
?>