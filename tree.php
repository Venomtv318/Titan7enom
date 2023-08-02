<?php
    $host = "localhost"; // اسم الهوست
    $username = "root"; // اسم المستخدم للاتصال بقاعدة البيانات
    $pass = "11111111"; // باسورد المستخدم
    $namedata ="project"; // اسم الداتا بيس
    $connect = mysqli_connect($host,$username,$pass,$namedata) OR die("هناك خطأ في الاتصال");

    // $offcial_conected = "mysql:host=localhost;doniam_name=project";
    // $user_name = "root";
    // $password_data_mysql = "11111111";
    // try {
    //     $offical_conect = new PDO($offcial_conected , $user_name , $password_data_mysql);
    // } catch (Exception $message){
    //     $error_message = $message->getmessage();
    //     echo "<p>not conected $error_message</p>";
    // }

    // query() . استعلام قاعدة البيانات
    // fetch_assoc() . احضار البيانات على شكل مصفوفه ترابطيه
    //
?>