<?php 
namespace  keyvenom2;
const ROOM_ONE = "VENOM";
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="remix-icon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <title>موقع الهدايا</title>
</head>
<body>          
    <header class="header  header-loco">            
      <div class="section-gift">
        <?php  if (isset($_COOKIE["loginCookies"]) == 1) {   
                 echo ' <li><a href="profile.php"><i class="fa-sharp fa-solid fa-bag-shopping"></i>Profile</a></li> 
                        <li><a href="buy.php"><i class="fa-sharp fa-solid fa-bag-shopping"></i>باقات الشراء</a></li>
                  ';}
        ?>
      </div>
    <div class="section-high">
          <div class="section-search">
          <input id="search" type="search" placeholder="ابحث في مخزن الهدايا">
          <input id="send-seacrh" type="submit" value="search">
    </div>
      </div>
      <input type="checkbox" name="hamburger" id="hamburger">
          <div class="x-ham"></div>
          </label>
        <div class="logo-navber">
          <a href="#"><img class="logo-nav control-nav" src="img-project/loco.png" alt="Error"></a>        
        </div>
        <?php 
         if (isset($_COOKIE["loginCookies"]) == 1) {
          echo '
          <ul class="ul-nav ps-0">
            <li class="dropdown-all">
            <a href="#">قسم البطاقات</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#">بطاقات الدعوه</a></li>
              <li class="line-dropdown"><a href="#">بطاقات التهنئة</a></li>
              <li class="line-dropdown"><a href="#">بطاقات ايتونز</a></li>
              <li class="line-dropdown"><a href="#">بطاقات العيد</a></li>
              <li class="line-dropdown"><a href="#">بطاقات المناسبات</a></li>
            </ul>
            <li class="dropdown-all">
            <a href="#">قسم الهدايا حسب السعر</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#"> هدايا رخيصة السعر</a></li>
              <li class="line-dropdown"><a href="#">هدايا متوسطة السعر</a></li>
              <li class="line-dropdown"><a href="#">هدايا ذات قيمة عالية</a></li>
             </ul>
            </li>      
            <li class="dropdown-all">
            <a href="#">قسم الهدايا الشخصية</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#">هدايا مخصصة بالاسم</a></li>
              <li class="line-dropdown"><a href="#">هدايا تحمل الصورة</a></li>
              <li class="line-dropdown"><a href="#">هدايا تحمل الرسالة الشخصية </a></li>
             </ul>
            </li>        
            <li class="dropdown-all">
            <a href="#">قسم الهدايا الفاخرة/الفنية</a>
            <ul class="dropdown ps-0">
            <li class="line-dropdown"><a href="#">هدايا فاخرة(عروض)</a></li>
              <li class="line-dropdown"><a href="#">هدايا فاخرة</a></li>
              <li class="line-dropdown"><a href="#">هدايا فنية</a></li>
             </ul>
            </li>        
            <li class="dropdown-all">
            <a href="#">عطور</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#">عطور رجالي</a></li>
              <li class="line-dropdown"><a href="#">عطور نسائية</a></li>
              <li class="line-dropdown"><a href="#">عطور اطفال</a></li>
             </ul>
            </li>        
            <li class="dropdown-all">
            <a href="#">قسم الهدايا الخاصة</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#">هدايا لمحبي السفر</a></li>
              <li class="line-dropdown"><a href="#">هدايا لمحبي الطبخ</a></li>
              <li class="line-dropdown"><a href="#">هدايا لعشاق الرياضة</a></li>
             </ul>
            </li>          
          </ul>
              ';
              if(isset($_SESSION["userSession"])){
                        echo '
              <li><a class="a-nav" href="loginout.php"> تسجيل المغادرة</a></li>
              ';
              }
        } else {
            echo '
            <ul class="ul-nav ps-0">
            <li class="dropdown-all">
            <a href="#">قسم البطاقات</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#">بطاقات الدعوه</a></li>
              <li class="line-dropdown"><a href="#">بطاقات التهنئة</a></li>
              <li class="line-dropdown"><a href="#">بطاقات ايتونز</a></li>
              <li class="line-dropdown"><a href="#">بطاقات العيد</a></li>
              <li class="line-dropdown"><a href="#">بطاقات المناسبات</a></li>
            </ul>
            <li class="dropdown-all">
            <a href="#">قسم الهدايا حسب السعر</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#"> هدايا رخيصة السعر</a></li>
              <li class="line-dropdown"><a href="#">هدايا متوسطة السعر</a></li>
              <li class="line-dropdown"><a href="#">هدايا ذات قيمة عالية</a></li>
             </ul>
            </li>      
            <li class="dropdown-all">
            <a href="#">قسم الهدايا الشخصية</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#">هدايا مخصصة بالاسم</a></li>
              <li class="line-dropdown"><a href="#">هدايا تحمل الصورة</a></li>
              <li class="line-dropdown"><a href="#">هدايا تحمل الرسالة الشخصية </a></li>
             </ul>
            </li>        
            <li class="dropdown-all">
            <a href="#">قسم الهدايا الفاخرة/الفنية</a>
            <ul class="dropdown ps-0">
            <li class="line-dropdown"><a href="#">هدايا فاخرة(عروض)</a></li>
              <li class="line-dropdown"><a href="#">هدايا فاخرة</a></li>
              <li class="line-dropdown"><a href="#">هدايا فنية</a></li>
             </ul>
            </li>        
            <li class="dropdown-all">
            <a href="#">عطور</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#">عطور رجالي</a></li>
              <li class="line-dropdown"><a href="#">عطور نسائية</a></li>
              <li class="line-dropdown"><a href="#">عطور اطفال</a></li>
             </ul>
            </li>        
            <li class="dropdown-all">
            <a href="#">قسم الهدايا الخاصة</a>
            <ul class="dropdown ps-0">
              <li class="line-dropdown"><a href="#">هدايا لمحبي السفر</a></li>
              <li class="line-dropdown"><a href="#">هدايا لمحبي الطبخ</a></li>
              <li class="line-dropdown"><a href="#">هدايا لعشاق الرياضة</a></li>
             </ul>
            </li>          
           <li style="border-right: none;"><a href="login.php">Login</a></li>
           <li><a href="singup.php">Singup</a></li>
        </ul>  
          ';
      }
      ?>
</li>
        <?php 
           if(isset($_SESSION["userSession"])){
            echo '<li><a class="a-nav" href="loginout.php"> تسجيل المغادرة</a></li>';
      }
        ?>
      </header>
    <div class="front-container">
      <div class="header-text">
        <h1 class="title-header">انتقاء افضل الهدايا</h1>
        <p class="Describe">نسق هديتك على ذوقك و نحن جاهزين على مدار 24 ساعة</p>
        <a href="#" class="about-item-link-a">
          <button class="button-btn">ابدء الان</button>     
        </a>
      </div>
    </div>
 <!-- section container gift -->
 <div class="container-venom">  
      <div class="c-wrapper">
      <div class="wrapper">
        <div class="wrapper-holder">
          <div class="slider-img-1">
          <p>اختار ما يحلو لك</p>
          </div>
          <div class="slider-img-2">
          </div>
          <div class="slider-img-3">
          </div>
          <div class="slider-img-4">
          </div>
        </div>
      </div>
      <div class="button-holder">
        <a href="slider-img-1"
        class="button"></a>
        <a href="slider-img-2"
        class="button"></a>
        <a href="slider-img-3"
        class="button"></a>
        <a href="slider-img-4"
        class="button"></a>
      </div>
    </div> 
      <h1 class="Article-id">اختاري هدية المكياج المفضلة لصديقتك</h1>
  <div class="container-gift">
        <div class="cart-item">
          <div class="cart-img">
          <img src="img-project/makeup-gift.jpg" alt="404">
          </div>
          <div class="cart-info">
            <h1 class="cart-title">حمرة ماركة</h1>
            <p class="star">★★★★★</p> 
            <h2 class="article-id">5$</h2>
          <div class="section-buy">     
            <a href="#">
            <button class="cart-link-buy"> buy now</button> 
            </a>   
           <a href="#">      
            <button class="cart-link-info"> info shop </button>
           </a>
          </div> 
            </div>
           </div>
           <div class="cart-item">
          <div class="cart-img">
          <img src="img-project/makeup-gift.jpg" alt="404">
          </div>
          <div class="cart-info">
            <h1 class="cart-title">حمرة ماركة</h1>
            <p class="star">★★★★★</p> 
            <h2 class="article-id">5$</h2>
          <div class="section-buy">     
            <a href="#">
            <button class="cart-link-buy"> buy now</button> 
            </a>   
           <a href="#">      
            <button class="cart-link-info"> info shop </button>
           </a>
          </div> 
            </div>
           </div>
           <div class="cart-item">
          <div class="cart-img">
          <img src="img-project/makeup-gift.jpg" alt="404">
          </div>
          <div class="cart-info">
            <h1 class="cart-title">حمرة ماركة</h1>
            <p class="star">★★★★★</p> 
            <h2 class="article-id">5$</h2>
          <div class="section-buy">     
            <a href="#">
            <button class="cart-link-buy"> buy now</button> 
            </a>   
           <a href="#">      
            <button class="cart-link-info"> info shop </button>
           </a>
          </div> 
            </div>
           </div>
           <div class="cart-item">
          <div class="cart-img">
          <img src="img-project/makeup-gift.jpg" alt="404">
          </div>
          <div class="cart-info">
            <h1 class="cart-title">حمرة ماركة</h1>
            <p class="star">★★★★★</p> 
            <h2 class="article-id">5$</h2>
          <div class="section-buy">     
            <a href="#">
            <button class="cart-link-buy"> buy now</button> 
            </a>   
           <a href="#">      
            <button class="cart-link-info"> info shop </button>
           </a>
          </div> 
            </div>
           </div>
           <div class="cart-item">
          <div class="cart-img">
          <img src="img-project/makeup-gift.jpg" alt="404">
          </div>
          <div class="cart-info">
            <h1 class="cart-title">حمرة ماركة</h1>
            <p class="star">★★★★★</p> 
            <h2 class="article-id">5$</h2>
          <div class="section-buy">     
            <a href="#">
            <button class="cart-link-buy"> buy now</button> 
            </a>   
           <a href="#">      
            <button class="cart-link-info"> info shop </button>
           </a>
          </div> 
            </div>
           </div>
           <div class="cart-item">
          <div class="cart-img">
          <img src="img-project/makeup-gift.jpg" alt="404">
          </div>
          <div class="cart-info">
            <h1 class="cart-title">حمرة ماركة</h1>
            <p class="star">★★★★★</p> 
            <h2 class="article-id">5$</h2>
          <div class="section-buy">     
            <a href="#">
            <button class="cart-link-buy"> buy now</button> 
            </a>   
           <a href="#">      
            <button class="cart-link-info"> info shop </button>
           </a>
          </div> 
            </div>
           </div>
        <div class="cart-item">
          <div class="cart-img">
            <img src="img-project/makeup-gift.jpg" alt="404">
          </div>
          <div class="cart-info">
            <h1 class="cart-title">حمرة ماركة</h1>
            <p class="star">★★★★★</p>
            <h2 class="article-id">5$</h2>
            <div class="section-buy">     
            <a href="#">
            <button class="cart-link-buy"> buy now</button> 
            </a>   
           <a href="#">      
            <button class="cart-link-info"> info shop </button>
           </a>
          </div> 
            </div>
           </div>
        <div class="cart-item">
          <div class="cart-img">
          <img src="img-project/makeup-gift.jpg" alt="404">
          </div>
          <div class="cart-info">
            <h1 class="cart-title">حمرة ماركة</h1>
            <p class="cart-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consectetur adipisicing elit.
             libero eaque.Inventore</p>
            <p class="star">★★★★★</p>
            <h2 class="article-id">5$</h2>
           <div class="section-buy">     
            <a href="#">
            <button class="cart-link-buy"> buy now</button> 
            </a>   
           <a href="#">      
            <button class="cart-link-info"> info shop </button>
           </a>
          </div> 
            </div>
           </div>    
     </div>
    <div class="container-venom">
      <!-- about description gift -->
       <div class="controller">
        <div class="description-section">
          <div  class="img-description">
            <img src="img-project/christmas-gift.png" alt="404">
          </div>
           <div class="info-description">
            <h2 class="description-title">welcom gift</h2>
            <p class="par-description">There Are Many Variations Of Passages Of Lorem 
              Ipsum  Available, But The Majority Have Suffered 
              Alteration In Some Form </p>
              <div class="border-description"></div>          
           </div>
        </div>
        <div class="description-section">
          <div  class="img-description">
            <img src="img-project/christmas-gift.png" alt="404">
          </div>
           <div class="info-description">
            <h2 class="description-title">welcom gift</h2>
            <p class="par-description">There Are Many Variations Of Passages Of Lorem 
              Ipsum  Available, But The Majority Have Suffered 
              Alteration In Some Form </p>
              <div class="border-description"></div>
           </div>
        </div>
        <div class="description-section">
          <div  class="img-description">
            <img src="img-project/christmas-gift.png" alt="404">
          </div>
           <div class="info-description">
            <h2 class="description-title">welcom gift</h2>
            <p class="par-description">There Are Many Variations Of Passages Of Lorem 
              Ipsum  Available, But The Majority Have Suffered 
              Alteration In Some Form </p>
              <div class="border-description"></div>
           </div>
        </div>
       </div> <!-- -->
    </div>
    <footer class="container-venom">
      <div class="content">
        <div class="about-com">
         <li><a href="#"><i class="fa-solid fa-phone"></i>+1373293297</a></li>
         <li><a href="#"><i class="fa-brands fa-facebook"></i>facebook</a></li>
         <li><a href="#"><i class="fa-solid fa-earth-americas"></i>51st Street New York Godfather Branch</a></li>
         <li><a href="#"><i class="fa-solid fa-envelope"></i>example@gmail.com</a></li>
          <form class="form-floating">
          <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com">
          <label for="floatingInputValue">Subscribe us</label>
        </form>
        </div>
      <div class="about-footer">
        <h1>للتواصل</h1>
        <center class="section-border-footer"></center>
        <p>واتساب</p>
        <p>فيس بوك</p>
        <p>تليكرام</p>
      </div>
      <div class="about-footer">
        <h1>الاعمال</h1>
        <center class="section-border-footer"></center>
        <p>واتساب</p>
        <p>فيس بوك</p>
        <p>تليكرام</p>
      </div>
      <div class="about-footer">
        <h1>الدعم الفني</h1>
        <center class="section-border-footer"></center>
        <p>0734999977</p>
        <p>0773284982</p>
        <p>0770127334</p>
      </div>
      <div class="about-footer">
        <h1>الدعم الفني</h1>
        <center class="section-border-footer"></center>
        <p>0734999977</p>
        <p>0773284982</p>
        <p>0770127334</p>
      </div> 

      </div>      
      <div class="copyright content">
          <p>VENOM copyright 2022-2023</p>
      </div>
    </footer>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src ="java.js"></script>
</body>
</html>