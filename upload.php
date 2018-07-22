

<html >  

<head>
<meta charset="utf-8">
<style>


.button {
    background-color: #527a7a;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
	font-family: tahoma;
    font-size:16px;
    cursor: pointer;
	margin-top: 10px;
	margin-left:18px;
	width: 100px;
	display: block;
	buttonAlign: 'center'
}
.p{
	
margin-right:18px	;
}


input[type=text], select {
   
    padding: 12px 20px;
    margin: 8px 0;
	margin-right:20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
   
    padding: 12px 20px;
    margin: 8px 0;
	margin-right:33px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

body { 
  margin: 0;
  font-family: tahoma;
  text-align: center;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 15px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}



.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}


</style>
</head> 

<body  style=" background-color:#a3c2c2;">


<div class="header"  >
  <a href="#default" class="logo" >مستند پروژه</a>
  <div class="header-right">
    <a class="active" href="HomePage.php">خانه</a>
  </div>
</div>

<form enctype="multipart/form-data" method="POST" action="upload.php">
<h4>Upload your Document:</h4>

<table border="0">

<tbody>

<tr>

<td align="left">File:</td>

<td><input accept="doc/docx" name="filename" size="40" type="file" /></td>

</tr>

<tr>

<td><input name="Upload" type="submit" value="Upload"  class="button"/></td>

</tr>

</tbody></table>

</form>

</body>

</html>

<?php

//if we clicked on Upload button
if(!empty($_FILES['filename']))
  {
if($_POST['Upload'] == 'Upload')

  {

  //make the allowed extensions

  $goodExtensions = array(

  '.doc',

  '.docx',
  
  '.pdf',

  ); 

  $error='';

  //set the current directory where you wanna upload the doc/docx files

  $uploaddir = "uploads/";

  $name = $_FILES['filename']['name'];//get the name of the file that will be uploaded

  $min_filesize=10;//set up a minimum file size(a doc/docx can't be lower then 10 bytes)

  $stem=substr($name,0,strpos($name,'.'));

  //take the file extension

  $extension = substr($name, strpos($name,'.'), strlen($name)-1);

  //verify if the file extension is doc or docx

   if(!in_array($extension,$goodExtensions))

     $error.='Extension not allowed<br>';

echo "<span> </span>"; //verify if the file size of the file being uploaded is greater then 1

   if(filesize($_FILES['filename']['tmp_name']) < $min_filesize)

     $error.='File size too small<br>'."\n";

  $uploadfile = $uploaddir . $stem.$extension;

$filename=$stem.$extension;

if ($error=='')

{

//upload the file to

if (move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile)) {

echo 'File Uploaded in "uploads" folder. Thank You.';

}

}

else echo $error;

}
  }
  
  

?>