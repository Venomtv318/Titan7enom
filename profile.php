<?php
    if($_COOKIE["loginCookies"] == 1){

    }else{
        // امر الميتا للانتقال الى الصفحة التالية بعد مرور مدة زمنية معينة
        echo'<meta http-equiv="refresh" content="0; url=login.php" />';
        // هذا الامر لتوقف الاوامر البرمجية الى هنا وعدم الاستمرار
        exit();
    }

    include "tree.php"; // امر ربط ملف قاعدة البيانات مع هذا الملف
    global $connect; // جلب امر الاتصال بقاعدة البيانات
    mysqli_set_charset( $connect, 'utf8'); // يسمح لنا بأستخدام اللغه العربية

    //جلب بيانات المستخدم من قاعدة البيانات
    $TokenUser = $_COOKIE["tokencookies"];
    @$GetInfouser = "SELECT * FROM gift_web WHERE token_person = '$TokenUser'";
    @$RunInfouser = mysqli_query($connect, $GetInfouser);
    @$RowInfouser = mysqli_fetch_array($RunInfouser);
    @$username = $RowInfouser['name_person'];
    @$userpassword = $RowInfouser['pass_person'];
    @$useremail = $RowInfouser['email_person'];
    @$userbirthday = $RowInfouser['birthday_person'];
    @$userimg = $RowInfouser['img_person'];

    if(isset($_FILES["show_img2"])){
        @$u_img2 = $_FILES['show_img2']['name'];
        @$u_img_tmp2 = $_FILES['show_img2']['tmp_name'];
        @$target_dir = "img-person"; // مسار الصورة
        @$target_file = $target_dir . basename($_FILES["show_img2"]["name"]); //file/img_user/778.png 
        @$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //lower png size and read
        @$uploadOk = 1; // شرط تم رفع الصورة او لا من اجل الحماية 
        @$newimgproblem = uniqid('venom+', true)
        . '.' . strtolower(pathinfo($_FILES['show_img2']['name'], PATHINFO_EXTENSION)); // تغيير اسم الصورة s
     }
    $SW_Post01 = htmlspecialchars(@$_POST['get01']); // اسم الانبوت في ال فرونت ايند
    $SW_Post02 = htmlspecialchars(@$_POST['get02']); // اسم الانبوت في ال فرونت ايند 
    $SW_Post03 = htmlspecialchars(@$_POST['get03']); // اسم الانبوت في ال فرونت ايند
    $SW_Post04 = htmlspecialchars(@$_POST['get04']); // اسم الانبوت في ال فرونت ايند

    if(isset($_POST['get06'])){
        // اذا كان امتداد الصورة فارغ
        if(empty($u_img2)){
            echo'<p>2لم يتم التغيير</p><p>الرجاء اضافة مرفق</p>'; // اظهار رسالة الخطاء
            $uploadOk = 0; // تغيير القيمة الى 0 من اجل عدم السماح برفع الفايل
            echo'<meta http-equiv="refresh" content="5; url=profile.php">'; // تحديث الصفحة
            exit();
        }else{
            # المسارات المسموح بها
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "pdf") {
                echo' <p>الامتداد المسموح به</p> <p>JPG, JPEG, PNG , GIF , PDF</p>';
                $uploadOk = 0; // تغيير القيمة الى 0 من اجل عدم السماح برفع الفايل
                echo'<meta http-equiv="refresh" content="5; url=profile.php">';// تحديث الصفحة
                exit;
            }
            if($uploadOk == 0) {
                echo' <p>لم يتم التغيير</p> <p>الرجاء اضافة مرفق</p>';
                echo'<meta http-equiv="refresh" content="5; url=profile.php">';// تحديث الصفحة
                exit;
            }
            if($uploadOk == 1) {
                move_uploaded_file($u_img_tmp2,"img-person/$newimgproblem"); // حفظ الصورة الى السيرفر
                @unlink("img-person/$userimg");
                if (@$_FILES["u_img"]["size"] > 5000) {
                    # IF Image png type.
                    if($imageFileType == "png"){
                        # Read images to Resize it.
                        function aborahaf($filename,$percent){
                            list($width, $height) = getimagesize($filename);
                            $newwidth = $width * $percent;
                            $newheight = $height * $percent;
                            $thumb = imagecreatetruecolor($newwidth, $newheight);
                            $source = imagecreatefrompng($filename);
                            // preserve transparency START
                            imagecolortransparent($thumb, imagecolorallocatealpha($thumb, 0, 0, 0, 127));
                            imagealphablending($thumb, false);
                            imagesavealpha($thumb, true);
                            // preserve transparency end
                            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                            imagepng($thumb, $filename);
                        }
                        aborahaf("img-person/$newimgproblem", 0.5); // حفظ الصورة الى المسار مع الاحتافظ بالجودة مع تقليل الحجم
                        unlink("img-person/$userimg"); // حذف الصورة القديمة اوتماتيكياً
                    }
                    # IF Image gif type.
                    if($imageFileType == "gif"){
                        # Read images to Resize it.
                        function aborahaf($filename,$percent){
                            list($width, $height) = getimagesize($filename);
                            $newwidth = $width * $percent;
                            $newheight = $height * $percent;
                            $thumb = imagecreatetruecolor($newwidth, $newheight);
                            $source = imagecreatefromgif($filename);
                            // preserve transparency START
                            imagecolortransparent($thumb, imagecolorallocatealpha($thumb, 0, 0, 0, 127));
                            imagealphablending($thumb, false);
                            imagesavealpha($thumb, true);
                            // preserve transparency end
                            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                            imagegif($thumb, $filename);
                        }
                        aborahaf("img-person/$newimgproblem", 0.5);// حفظ الصورة الى المسار مع الاحتافظ بالجودة مع تقليل الحجم
                        unlink("img-person/$userimg"); // حذف الصورة القديمة اوتماتيكياً
                    }
                    # IF Image jpg type or jpeg type.
                    if($imageFileType == "jpg" || $imageFileType == "jpeg"){
                        # Read images to Resize it.
                        function aborahaf($filename,$percent){ 
                            list($width, $height) = getimagesize($filename);
                            $newwidth = $width * $percent;
                            $newheight = $height * $percent;
                            $thumb = imagecreatetruecolor($newwidth, $newheight);
                            $source = imagecreatefromjpeg($filename);
                            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                            imagejpeg($thumb, $filename);
                        }
                        aborahaf("img-person/$newimgproblem", 0.5);// حفظ الصورة الى المسار مع الاحتافظ بالجودة مع تقليل الحجم
                        unlink("img-pseron/$userimg"); // حذف الصورة القديمة اوتماتيكياً
                    } 
                }
                $updateinfo = "UPDATE gift_web SET img_person = '$newimgproblem' WHERE token_person = '$TokenUser' ";
            }
            if(mysqli_query($connect, $updateinfo)){
                echo'<meta http-equiv="refresh" content="3; url=profile.php">';
                exit;
            }
            else {
                echo'<p>لم يتم التغيير</p> <p>الرجاء اضافة صورة</p>';
                echo'<meta http-equiv="refresh" content="5; url=profile.php">';
                exit;
            }
        }
    }
    if(isset($_POST['get07'])){
        $deleteimguser = "UPDATE gift_web SET img_person = '' WHERE token_person = '$TokenUser' ";
        mysqli_query($connect, $deleteimguser);
        unlink('img-person/'.$userimg.'');
    }
    if(isset($_POST['get05'])){
        $updateuserinfo = "UPDATE gift_web SET 
            name_person = '$SW_Post01',
            pass_person = '$SW_Post02',
            email_person = '$SW_Post03',
            birthday_person = '$SW_Post04'
            WHERE token_person = '$TokenUser'
        ";
        mysqli_query($connect, $updateuserinfo);
        echo'<meta http-equiv="refresh" content="2; url=profile.php">';
        exit;
    }
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?1" media="screen"/>
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>الملف الشخصي</title>
</head>
<body>
    <div class="profile-background"></div>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
            <div class="profile">
            <div class="content-front">
            <div class="profile-jmg-username">
                <img class="img-profile" src="img-person/<?php echo $userimg; ?>"onerror="this.src='img-person/user_new.jpg';"/>
                <input class="delete-image" type="submit" name="get07" value="حذف الصورة"/>
            </div>
            <div class="lower-lift">
            <div class="file-down">
                <input type="file" name="show_img2" class="custom-file-input"/>
            </div>
            <div class="file-upload">
                <input class="file-upload-input" type="submit" name="get06" value="file upload"/>
            </div>
            <div class="update-date">
                <input class="update-date-input" type="submit" value="تحديث البيانات" name="get05"/>
           </div>
            </div>
            <div class="section-date">
            <div class="box-username">
                <input require type="text" placeholder="اكتب اسم المستخدم" name="get01" value="<?php echo $username; ?>"/>
            </div>
            <div class="box-password">
                <input require type="text" placeholder="اكتب كلمة السر" name="get02" value="<?php echo $userpassword;?>"/>
            </div>
            <div class="box-email">
                <input require type="email" placeholder="اكتب الايميل" name="get03" autocomplete="off" pattern=".+@gmail\.com" value="<?php echo $useremail ?>"/>
            </div>
            <div class="box-birthday">
            <input type="birthady" placeholder="2000-12-25" name="get04"  pattern="[0-9]{4}-[0-12]{2}-[0-31]{2}"
            value="<?php echo $userbirthday; ?>"/>
            </div>
            </div>
            <div class="content-lower">
            <div class="control-admin-loginout">
            <?php
            if ($_COOKIE["tokencookies"] == "1"){
                echo '<li><a class="a-nav" href="admin.php">صفحة الادمن</a></li>';
             } else {
             }
            ?>   
            <li><a class="loign-leave" href="loginout.php"> تسجيل المغادرة</a></li>
           </div>
          </div><!----content-lower----->
        </div>
    </form>

</body>
</html>