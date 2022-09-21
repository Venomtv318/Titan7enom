<?php
    include "tree.php"; // امر ربط ملف قاعدة البيانات مع هذا الملف
    global $connect; // جلب امر الاتصال بقاعدة البيانات
    mysqli_set_charset( $connect, 'utf8'); // يسمح لنا بأستخدام اللغه العربيه
    $error = "";
    $welcom = "";
        // xss هنا اغلاق ثغرة
        $SW_Post01 = htmlspecialchars(@$_POST['get01']);// اسم الانبوت في ال فرونت ايند
        $SW_Post02 = htmlspecialchars(@$_POST['get02']);
        $SW_Post03 = htmlspecialchars(@$_POST['get03']);
        $SW_Post04 = htmlspecialchars(@$_POST['get04']);
        $SW_Post05 = htmlspecialchars(@$_POST['get05']);
        $SW_Post06 = htmlspecialchars(@$_POST['get06']);
        $SW_Post07 = htmlspecialchars(@$_POST['get07']);
        // $passsha=sha1($SW_Post03);
        $Token = @date("ymdhis");
        $RandomNumber = rand(100,200);
        $NewToken = $Token . $RandomNumber;
        if(isset($_POST['get08'])){
         if(empty($SW_Post01) ||  empty($SW_Post02) || empty($SW_Post03) || empty($SW_Post04)){
            $error = "<p class='style11'>يرجى عدم ترك حقل فارغ</p>";
            $welcome = "";    
        }else{
            //هذا الامر للتحقق من الايميل في قاعدة البيانات
            $GetUserInfo = "SELECT * FROM gift_web WHERE email_person ='$SW_Post04'"; 
            // هذا الامر لتفعيل واعطاء صلاحيه للامر التحقق
            $ٌRunUserInfo = mysqli_query($connect, $GetUserInfo);
            // الحصول البيانات بشكل مصفوفة
            $RowUserInfo = mysqli_fetch_array($ٌRunUserInfo);
            // الحصول ايميل المستخدم
            @$emailDatabase = $RowUserInfo['email_person'];
            //هذا الامر للتحقق من اسم المستخدم في قاعدة البيانات
            $GetUserInfo2 = "SELECT * FROM gift_web WHERE name_person = '$SW_Post02'"; 
            // هذا الامر لتفعيل واعطاء صلاحيه للامر التحقق
            $ٌRunUserInfo2 = mysqli_query($connect, $GetUserInfo2);
            // الحصول علي البيانات بشكل مصفوفة
            $RowUserInfo2 = mysqli_fetch_array($ٌRunUserInfo2);
            // الحصول علي اسم المستخدم 
            @$userName = $RowUserInfo2['name_person'];

            // اذا كان الايميل مكرر في قاعدة البيانات
            if($SW_Post04 == $emailDatabase){
                $error = "<p class='style11'>هذه الايميل مستخدم بالفعل حاول بريد اخر</p>";
            }
            // اذا كان اسم المستخدم مكرر
            elseif($SW_Post02 == $userName){ 
                $error = "<p class='style11'> هذا الاسم مستخدم بالفعل</p>";
            }else{
                $insertIntoDatabase = "INSERT INTO gift_web
                (         
                    token_person,
                    full_name,
                    name_person,
                    pass_person,
                    email_person,
                    birthday_person,
                    phone_person,
                    city_person,
                    img_person,
                    button_type
                ) VALUES
                (
                    '$NewToken',
                    '$SW_Post01',
                    '$SW_Post02',
                    '$SW_Post03',
                    '$SW_Post04',
                    '$SW_Post05',
                    '$SW_Post06',
                    '$SW_Post07',
                    '',
                    '1'
                )";
                if(mysqli_query($connect, $insertIntoDatabase)){
                    // اوامر انشاء كوكيز جديد
                    setcookie('tokencookies', $NewToken, time() + (86400 * 365), "/");
                    setcookie('loginCookies', '1', time() + (86400 * 365), "/");            
                    // اوامر  انشاء سيسيون جديد
                    $_SESSION["userSession"] = "$SW_Post02";
                    // امر الميتا للانتقال الى الصفحة التالية بعد مرور مدة زمنية معينة
                    echo'<meta http-equiv="refresh" content="10"; url=index.php" />';
                    // اظهار رسالة الترحيب بأسم المستخدم
                    echo' اهلاً وسهلاً بك يا '.$SW_Post02.'';
                    exit();
                }else{
                    $error = "<p class='style11'>لم يتم ارسال البيانات بشكل صحيح</p>";
                    $welcome = "";
                    exit();
                }
            }
        }
        mysqli_close($connect);
    }
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?5" media="screen"/>
    <title>singup</title>
</head>
<body class="body-background">
    <form action="" method="post">
            <form action="/action_page.php">
            <?php echo $error; ?>
            <?php echo @$welcome; ?>
            <div class="servs-all">
            <div class="singup-box text-center">   
            <lord-icon  
                src="https://cdn.lordicon.com/elkhjhci.json"
                trigger="hover"
                colors="primary:#212529"
                style="width:50px;height:50px">
                <!-- https://www.mediafire.com/file/hif4sewcyn7y9ww/-_The_Complete_2020_PHP_Full_Stack_Web_Developer_Bootcamp.rar/file
            https://download1074.mediafire.com/6nafp6qt9hzg/1e284fx0fstvp2o/Udemy+-+Build+a+Dropshipping+Empire+From+Scratch.+Proven+Blueprint.rar
            -->
            </lord-icon>
            <h2 class="text-singup">singup</h2>
            <p class="per-singup">Welcome to login to the gift site</p>
            <div class="border-official"></div>
            <div class="part-data">
            <input class="section-send" require type="text" placeholder="الاسم الكامل" name="get01"/>
            </div>
            <div class="part-data">
            <input class="section-send" require type="text" placeholder=" اسم المستخدم" name="get02"/>
            </div>
            <div class="part-data">
            <input id="#password" class="section-send" require type="password" placeholder=" كلمة السر" pattern=".{10,}" name="get03"/>
            </div>
            <div class="part-data">
            <input class="section-send" require type="email" placeholder=" البريد الالكتروني" name="get04" autocomplete="off" pattern=".+@gmail\.com"/>
            </div>
            <div class="part-data">
            <input class="section-send" require type="date" name="get05">
            </div>
            <!-- nour3mk joined  -->
            <div class="part-data">
            <input class="section-send" require placeholder="رقم الهاتف" type="tel" id="phone" name="get06" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            </div>
            <!-- <div class="part-data">
            <input class="section-send" require placeholder="ادخال الرابط" type="url" name="get07" required>
            </div> -->
            <div class="part-data">
             <select class="Historical" name = "get07">
                <option value="IRQA">IRAQ</option>
                <option value="IRAN">IRAN</option>
                <option value="UKRINA">UKRINA</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="audi">Canada</option>
                <option value="audi">China</option>
                <option value="audi">Colombia</option>
             </select>
            </div>
         </form> 
            <button class="but-btn" type="submit" value="انشاء حساب جديد" name="get08">
                انشاء حساب جديد
            </button>
            </div>
           </div>
          </div>
         </div>
        </div>
       <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
</body>
</html>