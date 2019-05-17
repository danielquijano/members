<!DOCTYPE html>
<html>
<head>
<title>PHP Gallery</title>
</head>
<body>
<?php
	// gallery directory
	$ThumbsDir = 'thumbs/';

	// Search the gallery directory for images
	foreach(glob("$ThumbsDir{*.jpg,*.gif,*.mp4}", GLOB_BRACE) as $photo) {
		// Loop this code for each image
		// Explode the image name (currently 'thumgs/image.jpg') at '/'
		$ItemName = explode("/", $photo);
		// Get the last part of the exploded image name (now 'image.jpg')
		$ItemName = end($ItemName);

		// Generate the HTML code to display each image in a grid
		echo "<a href='$photo' title='$ItemName'>";
		echo "<img src='$photo' style='max-height:150px; max-width:150px;'><br><p>$ItemName</p>";
		echo "</a>";
	}

?>
</body>
</html>