<!DOCTYPE HTML>
<html dir="rtl" lang="fa">  
<head>
<meta charset="utf-8">
<style>


.button {
    background-color: #527a7a;
    border: none;
    color: white;
    padding: 13px 20px;
    text-align: center;
	font-family: tahoma;
    font-size:18px;
    cursor: pointer;
	margin-top: 20px;
	width: 100px;
	display: block;
	margin-right:52px
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

body { 
  margin: 0;
  font-family: tahoma;
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

<body style=" background-color:#a3c2c2;">

<div class="header"  >
  <a href="#default" class="logo" >نظرات شما</a>
  <div class="header-right">
    <a class="active" href="HomePage.php">خانه</a>
  </div>
</div>


<div  style="margin:10px;" >
<?php echo $_POST["name"]; ?> عزیز !<br>
نظر شما ثبت شد.<br>
<br>
<br>
<?php echo $_POST["comment"]; ?>
</div>


</body>
</html>