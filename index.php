<?php require_once('templates/top.php');

if($_GET['url']){
$url=$_GET['url'];   $adr=mysqli_query($de_con,$query);
    if (!$adr){
        exit('error query');
    }
    $result=mysqli_fetch_array($adr);
}else{
    $url='index';
}
$query="SELECT*FROM maintexts WHERE url='$url'";

/*
echo"<pre>";
print_r($result);
echo"</pre>";*/

?>
    <h2><?=$result['name'];?></h2><br>
								<div class="inf">
 <?=$result['body'];?>

								</div>

					

<?php require_once('templates/bottom.php');?>