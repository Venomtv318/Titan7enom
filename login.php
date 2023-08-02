<?php
     $error = "";
     $welcom = "";
    session_start();
    // التحقق اذا كان المستخدم مسجل دخول بالفعل
    if(isset($_COOKIE["loginCookies"]) && $_COOKIE["loginCookies"] == 1){
        // امر الميتا للانتقال الى الصفحة التالية بعد مرور مدة زمنية معينة
        echo'<meta http-equiv="refresh" content="0; url=index.php" />';
        // هذا الامر لتوقف الاوامر البرمجية الى هنا وعدم الاستمرار
        exit();
    }else{}

    include "tree.php"; // امر ربط ملف قاعدة البيانات مع هذا الملف
    global $connect; // جلب امر الاتصال بقاعدة البيانات
    mysqli_set_charset( $connect, 'utf8'); // يسمح لنا بأستخدام اللغه العربية
     // sql injection bilnd هنا تم اغلاق ثغرة 
     $SW_Post01 = addslashes(@$_POST['get01']); // اسم الانبوت في ال فرونت ايند
     $SW_Post02 = addslashes(@$_POST['get02']); // اسم الانبوت في ال فرونت ايند 

    // اذا ضغط على تسجيل الدخول
    if(isset($_POST['get03'])){
//         // اذا كان حقل الاسم او الباسورد فارغ
         if(empty($SW_Post01) ||  empty($SW_Post02)){
             $error = '<p class="style11">يرجى عدم ترك الحقول فارغة</p>'; // رسالة الخطأ
             $welcome = ''; // اخفاء رساله الترحيب
         }else{}
             //هذا الامر للتحقق من اسم المستخدم في قاعدة البيانات
             $GetUserInfo = "SELECT * FROM gift_web WHERE name_person ='$SW_Post01'"; 
             // هذا الامر لتفعيل واعطاء صلاحيه للامر التحقق
             $ٌRunUserInfo = mysqli_query($connect, $GetUserInfo);
             // يتحقق اذا كان هناك ناتج او لا
             if(mysqli_num_rows($ٌRunUserInfo) > 0){// جلب البيانات بشكل مصفوفة
                 $RowUserInfo = mysqli_fetch_array($ٌRunUserInfo);
                 // جلب اسم المستخدم
                 $username = $RowUserInfo['name_person'];
                 // جلب الباسورد
                 $passwordUser = $RowUserInfo['pass_person'];
                 // جلب التوكن
                 $tokenuser = $RowUserInfo['token_person'];
                 // التأكد من الباسورد هل هوة صحيح او لا
                 if($passwordUser != $SW_Post02){
                     // رسالة الخطأ
                    $error = '<p class="style11">يرجى كتابة كلمة السر بصورة صحيحة</p>';
                    // اخفاء رسالة الترحيب
                    $welcome = '';
                 }else{
                     // اوامر انشاء كوكيز جديد
                     setcookie('tokencookies', $tokenuser, time() + (86400 * 365), "/");
                     setcookie('loginCookies', '1', time() + (86400 * 365), "/");

                     // اوامر  انشاء سيسيون جديد
                     $_SESSION["userSession"] = "$username";
                     $_SESSION['verification_active'] = "";
                     // اظهار رسالة الترحيب بأسم المستخدم
                    echo'<div class="spinner-border m-5" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>';
                     // امر الميتا للانتقال الى الصفحة التالية بعد مرور مدة زمنية معينة
                     echo'<meta http-equiv="refresh" content="1; url=index.php" />';
                     // هذا الامر لتوقف الاوامر البرمجية الى هنا وعدم الاستمرار
                     exit();
                 }
             }else{
                 // هذه رسالة الخطأ
                 $error = '<p class="style11">ليس هناك حساب في هذا الاسم</p>';
                 // اخفاء رسالة الترحيب
                 $welcome = '';
             }
         }
?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?3" media="screen"/>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <title>صفحة تسجيل الدخول</title>
</head>
<body class="body-login">
    <div class="login-account">
    <form action="" method="post">
            <?php echo $error; ?>
            <?php echo @$welcome?>
            <div>
            <input class="section-login" require type="text" placeholder="اكتب اسم المستخدم" name="get01"/>
            </div>
            <div > 
            <input class="section-login" require type="password" placeholder="اكتب كلمة السر" name="get02"/>
            </div>
            <div>
            <input class="but-btn" type="submit" name="get03" value="login"> 
         </div> 
    </div>
</body>
