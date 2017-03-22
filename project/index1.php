<!DOCTYPE html>
<html>
<head>
	<title>hello world h</title>
		<?php
		$dir = "/var/www/udbhava/project/uploads/cse/first/prob";

		// Open a directory, and read its contents
		if (is_dir($dir)){
		  if ($dh = opendir($dir)){
		    while (($file = readdir($dh)) !== false){
		    	$len = strlen($file);

		    	if($len >= 4)
			      echo "<a href='uploads/cse/first/prob/$file' download> $file </a>";
			  	  echo "<br>";
		    }
		    closedir($dh);
		  }
		}
		?>
</head>
<body>

	<form action="loc.php" method="post" enctype="multipart/form-data">
	    Select file to upload:
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <input type="submit" value="Upload PDF" name="submit">
	</form>

</body>
</html>

<script type="text/javascript">
	function fun(){
		location.reload();
	}
</script>