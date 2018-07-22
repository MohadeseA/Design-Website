<!DOCTYPE HTML>
<html  dir="rtl" lang="fa">  

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
	margin-top: 55px;
	width: 250px;
	display: block;
	buttonAlign: 'center'
}
p{
	
margin:20px	;
text-align:right; 
font-family: tahoma;
 font-size: 19px;
}

h3{
	  font-family: tahoma;  
	  text-align: right;"
}

input[type=text], select {
   
    padding: 12px 20px;
    margin: 8px 0;
	margin-right:20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	text-align:right;
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



<h1 style="color:  #1122121;  font-family: tahoma;  text-align: center;"> پروژه طراحی وبسایت مهندسی اینترنت</h1>
<h2> نام استاد : آقای خسروی<br>
<br>
نام دانشجو : محدثه عالی<br>
</h2>
 <p > این پروژه به زبان php نوشته شده است. ابتدا whamp را نصب نموده و در سرور مجازی ایجاد شده پروژه را طراحی میکنیم.
طراحی های کل صفحات به کمک زبان html و css انجام شده است.</p>

<h3>صفحه HomePage:</h3>
 <p>در این صفحه دو دکمه با عنوان رزومه دانشجو و مستند پروژه قرار دارد. با فشردن دکمه رزومه، کاربر وارد صفحه STDResume 
  با دسترسی عمومی میشود و میتواند رزومه را مشاهده کند.با فشردن دکمه مستند پروژه کاربر وارد صفحه Login میشود.  </p>
  
  
 <h3>صفحه STDResume:</h3>
<p> در اینجا رزومه کاربر نمایش داده میشود. همچنین قابلیت تغییر فایل رزومه تعریف شده که اینکار تنها توسط مدیر وبسایت (با نام کاربری و رمز عبور  مخصوص خود) انجام میشود. با فشردن دکمه ،کاربر به صفحه AdminLogin راهنمایی میشود.
همچنین قابلیت ثبت Comment برای کاربر امکان پذیر است. اینکار توسط تگ form انجام میشود. متد فرم post و action آن submitComments است. فرم یک ورودی از نوع text دارد که نام را به صفحه مقصد میفرستد و پر کردن آن ضروری است.
قسمت نظرات از نوع textarea میباشد که تعداد ردیف و ستون آن مشخص است. هر فرم یک دکمه از نوع submit دارد که با فشردن دکمه، اطلاعات به صفحه مقصد فرستاده میشود.
</p>  

<h3>صفحه Login :</h3>
<p>برای دسترسی کاربر به صفحه مستند باید ابتدا وارد پنل کاربری خود بشود. در اینجا نیز از تگ form  برای وارد کردن نام کاربری و رمز عبور استفاده میشود.به این صورت که  متد فرم post و action آن Login است. به این دلیل برای رمز عبور و نام کاربری از متد post استفاده میکنیم که بر خلاف متد get اطلاعات را به کاربر نشان نمیدهد و مخفی نگه میدارد. یک ورودی از نوع text دارد که نام کاربری را به صفحه مقصد میفرستد و یک ورودی از نوع password که اعداد را مخفیانه نمایش میدهد. پر کردن هر دو فیلد ضروری است. و یک دکمه از نوع submit دارد که با فشردن دکمه، اطلاعات به صفحه مقصد فرستاده میشود.
در ابتدای صفحه کدی به زبان php قرار دارد. بدین صورت که اگر کاربر دکمه submit را فشرد ، وارد if میشود. در اینجا یک متغیر با نام inPassword وجود دارد که پسورد اصلی را به این متغیر میدهیم و داخل شرط if ، پسوردی که کاربر وارد کرده با این متغیر مقایسه میشود. به کمک $_POST["username"] نام کاربری ای که وارد شده را از متد post میگیریم و با نام کاربری مورد نظر مقایسه میکنیم.همچنین $_POST["pass"]  رمز عبور وارد شده را مقایسه میکنیم. اگر هردو شرط برقرار بود وارد if شده و به کمک کد header( "location: Documents.php " );  به صفحه document منتقل میشویم. اگر نام کاربری یا رمز عبور اشتباه باشد پیام خطا میدهد.
</p>


<h3>صفحه Documents :</h3>
<p>در این صفحه مستند پروژه به همراه توضیحات نمایش داده میشود. یک دکمه با عنوان  تغییر فایل رزومه تعریف شده که اینکار تنها توسط مدیر وبسایت (با نام کاربری و رمز عبور مخصوص خود) انجام میشود. با ف
شردن دکمه ،کاربر به صفحه AdminLogin راهنمایی میشود.</p>
 

<h3>صفحه submitComments :</h3> 
<p>در این صفحه نام کاربری را به همراه نظر وارد شده نمایش میدهد. به کمک کد php $_POST["name"] نام کاربری را از صفحه قبلی گرفته و به کمک $_POST["comment"]  نظرثبت شده را نمایش میدهد.</p>
  
  
 <h3>صصفحه adminLogin :</h3> 
<p>. در اینجا نیز از تگ form  برای وارد کردن نام کاربری و رمز عبور استفاده میشود.به این صورت که  متد فرم post و action آن adminLoginاست.یعنی اطلاعات به این صفحه فرستاده میشود. یک ورودی از نوع text دارد که نام کاربری را به صفحه مقصد میفرستد و یک ورودی از نوع password که اعداد را مخفیانه نمایش میدهد. پر کردن هر دو فیلد ضروری است. و یک دکمه از نوع submit دارد که با فشردن د
کمه، اطلاعات به صفحه مقصد فرستاده میشود.</p>


<h3>صفحه upload :</h3>
<p>این صفحه جهت upload کردن فایل word داکیومنت یا رزومه میباشد. دسترسی به این صفحه فقط توسط مدیر وبسایت است.
از تگ td برای گرفتن فایل مورد نظر استفاده میشود. یک ورودی با عنوان accept نوع فایلی که میتوانیم آپلود کنیم را مشخص میکند(doc/docx/pdf) . اسم فایل نیز filename نام میگیرد. یک وروردی دیگر از نوع submit  داریم.
به کمک $_FILES به مشخصات فایل خود دسترسی پیدا میکنیم. ابتدا بررسی میکنیم آیا فایلی آپلود شده یا خیر.
همچنین سایز فایل نیز مشخص میشود.اگر فایل آپلود شود یا با خطا مواجه شود، پیام مربوط خود را نمایش میدهد.</p>


 <form action="adminLogin.php" method="get">
<div  align="center">
<button class="button">تغییر فایل مستند پروژه</button>
</div>
</form>


<hr style="margin-top:10%;">

<h3 >ثبت نظرات :	</h3>
<div align="center">
<form action="SubmitComments.php" method="Post">
  نام: <input type="text" name="name" required><br>
دیدگاه: <textarea name="comment" rows="6" cols="40"></textarea><br>
<input  type="submit"  class="button">
</form>
</div>



</body>
</html>