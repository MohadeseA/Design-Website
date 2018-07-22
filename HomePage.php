<!DOCTYPE HTML>
<html> 
<head>
<style>
.button {
    background-color: #527a7a;
    border: none;
    color: white;
    padding: 18px 30px;
    text-align: center;
	font-family: tahoma;
    font-size:18px;
    cursor: pointer;
	margin-top: 50px;
	width: 250px;
	display: block;
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
  <a href="#default" class="logo" >پروژه مهندسی اینترنت</a>
  <div class="header-right">
    <a class="active" href="HomePage.php">خانه</a>
  </div>
</div>


<div  align="center" >
<h1> به نام خدا </h1>
</div>


<form action="STDResume.php" method="get">
<div  align="center">
<button class="button">رزومه دانشجو</button>
</div>
</form>

<form action="Login.php" method="get">
<div  align="center">
<button class="button">مستند پروژه</button>
</div>
</form>


</body>
</html>