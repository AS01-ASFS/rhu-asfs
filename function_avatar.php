<?php

function make_avatar($character)
{
	$path = 'avatar/' . time() . '.png';

	$image = imagecreate(200, 200);

	$red = rand(0, 255);

	$green = rand(0, 255);

	$blue = rand(0, 255);

	imagecolorallocate($image, $red, $green, $blue);

	$textcolor = imagecolorallocate($image, 255, 255, 255);

	imagettftext($image, 100, 0, 55, 150, $textcolor, 'vendor/AllerDisplay.ttf', $character);

	header('Content-type: image/png');

	imagepng($image, $path);

	imagedestroy($image);

	return $path;
}

function Get_user_avatar($login_user, $db){
	$query = "
	SELECT userimg FROM user WHERE username='".$login_user."'";
	$statement = $db->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();

	foreach($result as $row){
		echo'<img src="'.$row['userimg'].'" width="75" class="img-thumnail img-circle" />';
	}
}
?>