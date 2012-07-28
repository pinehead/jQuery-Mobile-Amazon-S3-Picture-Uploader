<!DOCTYPE html> 
<html> 
	<head> 
	<title>Page Title</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
</head> 

<body> 
 
 <h1>Picture uploader</h1>
 <form enctype="multipart/form-data" action="upload.php" id="uploadForm" data-ajax="false" method="POST">
 	<input type="hidden" name="MAX_FILE_SIZE" value="3000000000" />
 	Select Picture/File To Upload: <input type="file" name="userfile" onchange="getFileName(this.files)" id="file" />
 	<input type="submit" value="Upload" data-role="button" />
 </form> 
 
 <script>
 	function getFileName(fileName) {
 	//	alert(fileName[0].name);
 	//	alert(fileName[0].size);
 	
 	}
 </script>
 
</body>
</html>