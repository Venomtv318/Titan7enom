<?php
  // حذف الكوكيز
  unset($_COOKIE['tokencookies']); 
  setcookie('tokencookies', null, -1, '/'); 
  unset($_COOKIE['loginCookies']); 
  setcookie('loginCookies', null, -1, '/'); 
  // حذف السيسون
  unset($_SESSION['userSession']);
  // امر الميتا للانتقال الى الصفحة التالية بعد مرور مدة زمنية معينة
  echo'<meta http-equiv="refresh" content="0; url=index.php" />';



?>