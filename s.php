
                	<?php 
						include('config.php');
							
				$value600005=mysql_query("select * from blog");
				while($row600005=mysql_fetch_array($value600005))
				{
					$blog_title=$row600005['blog_title'];
					$blog_date=$row600005['blog_date'];
					$blog_user=$row600005['blog_user'];
					$blog_text=$row600005['blog_text'];
					$blog_pic=$row600005['blog_pic'];
					
					if (strlen($blog_text) > 100) {

    // truncate string
    $stringCut = substr($blog_text, 0, 100);
	echo $stringCut;
	
	$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href=".$blog_text.">Read More</a>'; 

					}
					echo $string;
				}
				?>