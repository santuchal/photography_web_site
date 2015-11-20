<?php
include('Admin/config.php');





$id1=$_POST['id1'];
$src=array();
$count=0;

$sql1=mysql_query("select * from portfolio where id='$id1'");
{
	$row1=mysql_fetch_assoc($sql1);
	$portfolio_img=$row1['portfolio_img'];
	$portfolio_name=$row1['portfolio_name'];//portfolio name
	$portfolio_category=$row1['portfolio_category'];//portfolio category
	
	
	if (file_exists('admin/img/gallery/portfolio/'.$portfolio_img.'')) {
		
					    echo '<li class="ipl6 isotope-item"><a id="1" class="example-image-link" href="admin/img/gallery/portfolio/'.$portfolio_img.'" rel="bookmark" data-lightbox="example-1"><img class="" src="admin/img/gallery/portfolio/'.$portfolio_img.'" style="overflow:hidden; height:220px;" alt="Ravi_Shanker_tulsan" draggable="false" /></a>
						<p><a onClick="" href="javascript:void(0;)">'.$portfolio_name.'</a><span>'.$portfolio_category.'</span></p>
						
						</li>';
						}
						else{
					
							echo '<li class="ipl6 isotope-item">
                            <a class="example-image-link" id="1" href="" rel="bookmark"><img src="" alt="" draggable="false" /><div><span></span></div></a>
                            <p><a onClick="" href="javascript:void(0;)">'.$portfolio_name.'</a><span>'.$portfolio_category.'</span></p>                     
                        </li>';
	
}



}
	
?>