<?php 
include "tree.php"; // امر ربط ملف قاعدة البيانات مع هذا الملف
global $connect; // جلب امر الاتصال بقاعدة البيانات
mysqli_set_charset( $connect, 'utf8'); // يسمح لنا بأستخدام اللغه العربيه
?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <!-- 739gfk2364kjt idfc slowed  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">     
    <link rel="stylesheet" href="style.css">
    <title>موقع الهدايا</title> 
</head> 
<body>
    <header class="header">
        <div class="logo-navber">
          <a href="#"><img class="logo-nav control-nav" src="img-project/pngtree.png" alt="Error"></a>
        </div> 
        <ul class="ul-nav control-nav">
          <div class="dropdown-all">
            <li>
            <a href="#">قسم البطاقات</a>
            <ul class="dropdown">
              <li class="line-dropdown"><a href="#">بطاقات الدعوه</a></li>
              <li class="line-dropdown"><a href="#">بطاقات التهنئة</a></li>
              <li class="line-dropdown"><a href="#">بطاقات  ايتونز</a></li>
            </ul>
          </li>
        </div>
           <li><a href="#">بطاقات العيد</a></li>
           <li><a href="#">بطاقات المناسبات</a></li>
           <li><a href="singup.php">تسجيل دخول</a></li>
           <li><a href="#">تجهيزات كرسمس</a></li>
           <li><a href="#">عطور رجالي</a></li>
           <li><a href="#">عطور نسائي</a></li>
           <li style="border-right: none;"><a href="#">تجهيزات المناسبات</a></li>
        </ul>
      </header>
    <div class="cont-all">
      <div class="head-text">
      <div class="header-text">
        <h1 class="title-header">انتقاء افضل الهدايا</h1>
        <p class="text-par">نسق هديتك على ذوقك و نحن جاهزين على مدار 24 ساعة</p>
        <a href="#" class="about-item-link-a">
          <button class="button-btn">ابدء الان</button>        
        </a>
      </div>
      <div class="about-singup">
          <a href="singup.php"><button class="but-sin" type="submit">singup</button></a>
        </div>
    </div>
    </div>
 <div class="section-header">
  <div class="section-text">
    <h1 class="dep-title">مرحبا بكم في الهدايا</h1>
    <center class="section-border"></center>
  </div><!---section-text-->
 </div><!--section-header---->
<div class="Container">
  <div class="row">
    <div class="section-card">
        <div class="section-img">
             <img class="img" src="img-project/christmas-gift.png" alt="Eror">
        </div>
        <div class="section-info">
          <h1 class="Article-id">هديتك بين ايديك</h1>
          <p class="text-per">Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consectetur adipisicing elit.</p>
          <a class="for-link" href="#">اذهب الان</a>
        </div>
    </div>
    <div class="section-card">
      <div class="section-img">
           <img src="img-project/christmas-gift.png" alt="Eror">
      </div>
      <div class="section-info">
        <h1 class="Article-id">هديتك بين ايديك</h1>
        <p class="text-per">Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consectetur adipisicing elit.</p>
        <a class="for-link" href="#">اذهب الان</a>
      </div>
  </div>
  <div class="section-card">
    <div class="section-img">
         <img src="img-project/medical-lab.png" alt="Eror">
    </div>
    <div class="section-info">
      <h1 class="Article-id">هديتك بين ايديك</h1>
      <p class="text-per">Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consectetur adipisicing elit.</p>
      <a class="for-link" href="#">اذهب الان</a>
    </div>
</div>

</div>
</div>
</body>
</html>