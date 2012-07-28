<?PHP
include 'sdk-1.5.10/sdk.class.php';

$uploaddir = getcwd();
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$filename = $_FILES['userfile']['name'];

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

	$s3 = new AmazonS3();
	
	$response = $s3->create_object('ph-content', $filename, array('fileUpload' => $uploadfile));
	if($response->isOK()) { echo "file uploaded"; }

}

?>
