<?php
$getuser = getenv("username");
$users = array("masu","Martin");
if(in_array($getuser,$users)){
    echo $getuser.' is a valid user. </br>';
	echo 'Computer name: '.gethostname();
}else{
    echo $getuser.' is not a valid user.';
}
?>
