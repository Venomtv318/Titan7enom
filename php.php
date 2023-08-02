<?php 
include "tree.php"; // امر ربط ملف قاعدة البيانات مع هذا الملف
global $connect; // جلب امر الاتصال بقاعدة البيانات
mysqli_set_charset( $connect, 'utf8'); // يسمح لنا بأستخدام اللغه العربيه
include_once("active-php.php");
echo $you;
$you = 40;
include_once("active-php.php");
echo $you;
# Welcom learn langushe PHP
// echo and print
# echo and print
/* echo and print */
// $GLOBALS: تشير إلى كل المتغيرات المتاحة في النطاق العام
// $_SERVER: معلومات الخادم وبيئة التنفيذ
// $_GET: متغيرات طلب HTTP باستخدام GET
// $_POST: متغيرات طلب HTTP باستخدام POST
// $_FILES: متغيرات طلب HTTP لتحميل ملف
// $_COOKIE: ملفات تعريف ارتباط HTTP(HTTP Cookies)
// $_SESSION: متغيرات الجلسة
// $_REQUEST: متغيرات طلب HTTP
// :$_ENV متغيرات البيئة
# Magic Content
// __LINE__	The current line number of the file.
// __FILE__	The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
// __DIR__	The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
// __FUNCTION__	The function name, or {closure} for anonymous functions.
// __CLASS__	The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, __CLASS__ is the name of the class the trait is used in.
// __TRAIT__	The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
// __METHOD__	The class method name.
// __NAMESPACE__	The name of the current namespace.
// ClassName::class	The fully qualified class name.
// == : Equal bool 
// === : Equal value and bool
// != . <> : Are they Equal?
echo "<h1>Hello VENOM</h1><br>";
print "true";
$php = "check";
$box = "welcom to web site" . $php;
echo $box;
echo "";
$work_e0 = "fight club";
$name = "VENOM";
$age = "30";
$from = "baghded";
echo "<br>" . $work_e0 . $name . $age . $from;
echo "work" .  '$from' . "<br>" . "$from";
echo "";
$fire = 190.54;
$on_fire = 80.8;
echo "<br>" . $fire / $on_fire;
echo "<br>" . $fire % $on_fire;
echo "<br>" . $fire + $on_fire;
echo "<br>" . $fire - $on_fire;
echo "<br>";
// Function
$connect = "learn php";
global $item;
$item = "learn server 1";    
// to fuction no global var
function server_local() {
    echo $GLOBALS['item'];
}
server_local();
function room_globals() {
    echo $GLOBALS["tilte"];
}
room_globals();
$age_person = true;
$room = "";
echo isset($age_person) ? "YEAH" : "NO" . "<br>";
echo "<br>";
echo isset($age) ? "yes" : "no";
echo "<br>";
$connectek = "learn php101";
$connectef = "learn php2";
$connectg = "learn php3";
echo $connectg;
echo "<br>";
define("VENOM" ," VENOM Welcom im Ali");
echo isset($VENOM) ? "yes word" : "no not"; // هل هذه المتغير فارغ ام لا
echo "<br>";
define("break_br",  "hello venom") . "<br>";
echo break_br;
$while = 0;
while($while <= 20) {
    echo "number while: $while <br>";
    $while+=10;
} 
$number_max_while = 1;
while ($number_max_while <= 20) { // اولا نضع المتغير المحدد تحت رقم  
    echo "number:  $number_max_while"; // ثانيا نقوم بطباعة رقم  المتغير
    $while+=10; // ثالثا زيادة الرقم

}
echo __file__ . "<br>"; // تحديد مسار ملف الحالي 
$num1 = 7.1;
$php_system = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION; // php تحديد اصدار لغة 
$verson = 5.4;
$php_verson =  PHP_MAJOR_VERSION.  "" . PHP_MINOR_VERSION;
echo ($num1 == $php_system) ? "less 8.1" : "hight 8.1";
$num01 = "one";
$num02 = "tow";
$num03 = "one"; 
$num001 = "one";
echo "<br>";
echo ($num01 != $num03) ? "no num" : "yes it is num";
echo "<br>";
echo ($num02 =  $num03) ? "no num" : "yes it is num";
echo "<br>";
echo ($num001 == $num01) ? "no num" : "yes it is num";
echo "<br>";
echo ($num01 === $num01) ? "no num" : "yes it is num";
//قم بإرجاع 0 إذا كانت القيم على كلا الجانبين متساوية
$x = 5;  
$y = 10;
echo "<br>";
echo ($x <=> $y);//قم بإرجاع 1 إذا كانت القيمة الموجودة على اليسار أكبر
$x = 10;  
$y = 5;
echo "<br>";
echo ($x <=> $y);//قم بإرجاع -1 إذا كانت القيمة الموجودة على اليمين أكبر
echo "<br>";
//================either====================//
$ever1  = "90";
$ever2  = "23.4";
if ($ever1 == "90" or $ever2 == "80") {
    echo "Ok number";
}else {
 echo "no if";
}
$doctor03 = "heart";
$heart03 =  "body";
if ($doctor03 == "heart" || $heart03 == "body") {
    echo "Ok yes";
}
//If both are incorrect
$doctor02 = "heart";
$heart02 =  "body";
if ($doctor02 == "heart0" xor $heart02  == "body") {
    echo "OK CHECK xor";
}
echo "<br>";
//=================both=====================//
$doctor = "heart";
$heart =  "body";
if ($doctor == "heart" and $heart  == "body") {
    echo "OK CHECK 1";
}
echo "<br>";
$doctor02 = "heart";
$heart02 =  "body";
if ($doctor02 == "heart" && $heart02  === "body") {
    echo "OK CHECK";
}
echo "<br>";
$doctor03 = "heart";
$heart03 =  "body";
if ($doctor03 == "hearb" and $heart03 == "body") {
    echo "OK 03";
}
echo "<br>";
$rond = "hhhh";
echo $setup = (empty($rond)) ? "yes it is" : "no empty"; echo "<br>";
# 1 bits = 0001
# 2 bits = 0010
# 3 bits = 0011
# 4 bits = 0100
# 5 bits = 0101
# 1 - 1 = 1
# 0 - 0 = 0
# 0 - 1 = 0
# 1 - 0 = 0
//--Types--//
// boolean - float - string - integer
// abc() للمقارنه . round() للتقريب. is_null هل فارغ ام لا. unset() للحذف
$nok1 = 1.60;
echo round($nok1); // round
$fight1 = 7.50;
$fight2 = 1.50;
// لمقارنة عددين مع بعضهما
echo (abs($fight1 - $fight2) < 6.0) ? "accpecting" : "reject";
echo (abs($fight1 - $fight2) < 7.0) ? "yes less 7.0" : "no less 7.1";
echo "<br>";
$vause = "ios";
echo ($vause == "ios") ? "value" : "not value";
$nok01 = "\"venom\" venom";
echo "<br>";
echo $nok01;
echo "<br>";
$nok01 = "\t\twelcom im venom 2";
echo $nok01;

$nok01 = '$fight1 im venom';
echo $nok01;
#strlen للتعامل مع النصوص و الكتابه ;
// is_null , unset() , method
$firstName = "John";
$lastName = "Smith";
$fullName = $firstName . "," . $lastName;
echo $fullName;

$inputValue = "fffff";
$hasValue = is_null($inputValue);
//Check
echo (!$hasValue) ? "Input has Value" : "Input is Empty"  . "<br>";
echo (!$hasvalue) ? "input value yes" : " no input value";
function destroy_foo() {
  global $foo;
  $foo = 'bar1';
  unset($foo);
}
destroy_foo();
echo $foo;
echo "<br>";

$chekk = true;
$chekname = "hamza,omar";
echo ($chekk && $chekname) ? "yes it is value" : "not value";
echo "<br>";

$markes = 1;
echo ($markes) ? "value" : "not value";
echo "<br>";
$room09 = null;
$roomvalue = is_null($room09);
echo (!$roomvalue) ? "yes value" : " no value";
echo "<br>";
$VENOM_ROOM = FALSE;
if ($VENOM_ROOM) {
    echo "if true yes";

} else {
   echo "false";
}
echo "<br>";
$gmail = true;
if ($VENOM_ROOM = $gmail) {
    echo "yes it is";
} else {
    echo "no it is";
}
echo "<br>";
$ifvenom = "user name venom";
$numvenom = 40;

if (!is_null($ifvenom) && isset($numvenom)) {
    echo '$ifvenom not empty';
} else {
    echo ' $ifvenom ues it is empty';
}
if (!is_null($ifvenom) || isset($numvenom)) {
    echo '$ifvenom not empty';
} else {
    echo ' $ifvenom ues it is empty';
}
if ($numvenom <= 50) {
    echo "num yes";
} else {
    echo "no num";
}
echo "<br>";
$inputValue_1 = 10;
if (isset($inputValue_1) && is_null($inputValue_1)){
    echo 'old number';
} else {
    echo 'tr9ue';
}
$weekend = "0348";
switch  ($weekend) {
    case "3875934":
     echo "false";
    break;
    case "0348":
     echo "true";
    break;
    default:
    echo "Others";
}
// for loop 3 section 
// اولا قام بتحديد المتغير و رقمه و ثانيا قام بتحديد مدى وصول الرقم  ثالثا قام بعملية الزيادة
for ($for_loop = 1 ; $for_loop <= 10 ; $for_loop++) {
    $resulte_odd = $for_loop % 2;
    if ($resulte_odd > 0) {
        echo "odd number:" . $for_loop . "<br>";
    }
}
// الطريقة الثانيه تقوم بتحديد متغير الرقم خارج نطاق عملية العد
$for_loop2 = 0;
for ( ; $for_loop2 <= 10 ; $for_loop2++) {
    $resulte_odd_2 = $for_loop2 * 2;
    if ($resulte_odd_2 > 0) {
       echo "Odd Number" . $for_loop2 . "<br>";
    }
}

for ($for_loop3 = 1 ; $for_loop3 <= 10;) { // هنا تم تحديد المتغيرات 
    $resulte_odd = $for_loop3 % 2; // تقسيم عبر النسبيه الى 2
    if ($resulte_odd > 0) { // شرط اذا كان تقسيم النسبيه اعلى من 0
        echo "odd number:" . $for_loop3 . "<br>";
    }
     $for_loop3++;
}

$while_loop = 1;
 while ($while_loop <= 10) {
    echo $while_loop . "<br>";
     $while_loop++;
 }

$Number_max = 150;
$while_zero = 1;
do {
  echo "number while:" . $while_zero . "<br>";
  $while_zero *= 2;
}
while ($while_zero < $Number_max); // اذا كان الرقم المحدد لوصوله اكبر من حده توقف فورا

$while_break = 1;
do { 
    echo $while_break . "<br>";
    if ($while_break > 10) {
        break;
    }
    $while_break++;
  
   } while (true); 

$number_max = 20;
$rskgh = 1;
do {
   echo "number size :" . $rskgh . "<br>"; 
   $rskgh *= 2.4;
   $rskgh++;
}
while($rskgh <= $number_max);

$value_v = 1;
do {
    echo "number break:" . $value_v;
    if ($value_v >= 10) {
        break;
    }
    $value_v++;

} while (true);

$loop1 = 1;
$loop2 = 1;
$loop3 = 1;

for ( ; $loop1 <= 10 ; $loop1++) {
    while ($loop2 <= 10) {
     do {
      if ($loop3 == 5){
           break;
      }
      echo "loop3: $loop3" . "<br>";
        $loop3++;
        }

     while($loop3 <= 10);
     
     if($loop2 == 6) {
           break;
        }
      echo "loop2: $loop2" . "<br>";
        $loop2++;
    }

    if ($loop1 == 7) {
           break;
    }
      echo "loop1: $loop1" . "<br>";
}

$num_value = 1;
while (true) {
    $resulte_value = $num_value % 2;
    if ($resulte_value == 0) {
       $num_value++;
       continue;
    }
    elseif ($num_value > 10) {
        break;
    }
    echo "Even number:" . $num_value;
    $num_value++;
}

function MyAdmin($username) {

    if (empty($username)) {
        echo "it is empty input \"username\"";    
        return;
    }
    switch ($username) {
        case "Admin":
            echo "hello administor";
            break;
        case "Venom";
            echo "HEllo VENOM";
            break;
    }
}
MyAdmin("Admin");
MyAdmin("");
MyAdmin("Venom");
//== require , include_once , reaqiurd_once ==//
$num_ever = 1;
 if ($num_ever < 2) {
    goto message;
 }
message:
 echo "Less Number";

 // strlen() , strpos() , stripos() wordworp() 
 $namenike = "null";
 echo strlen($namenike);
 echo "<br>";
 $_opuu = 10;

 if (strlen($_opuu > 10)) { // اذا كان اقل لا يكون صاحب قيمة رقميه
  echo "yes is value";
 }else {
  echo "no impty" . "<br>";
 };

 $position1 = "crros my baby";
 $positon2 = "baby";
 $position3 = stripos($position1 , $positon2); // اين يقع مرتبة الكلمة المحدده في الجملة الرئيسية
  echo $position3;

 $content = "!lorem brother about about forever";
 echo "find you item about room abpple:" . str_replace("forever","aboutr",$content) . "<br>"; //  استبدال الكلمة الاولى بالكلمة الثانيه من الجملة

 echo str_word_count($content) . "<br>"; // Calculation of words
 
 echo stripos($content , "brother") , "<br>"; // Calculation of letters
 
 echo strrev($content) . "<br>"; //Reverse Text
 
 echo strtoupper($content) . "<br>"; // Upper Text

 echo strtolower($content) . "<br>"; // lower Text

 echo str_shuffle($content) . "<br>"; // removie first letter to all words

 $Item = "      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, iste, excepturi minus in eos aperiam delectus cum, consectetur exercitationem qui libero reprehenderit ipsam unde
          adipisci cupiditate et culpa beatae debitis";
 echo trim($Item) . "<br>"; // removie space word


  echo "<br>";
  $arraye = [0,true,"opel",4.5];
  var_dump($arraye);
  echo "<br>";
  print_r($arraye);
  echo "<br>";
  $arraye[0] = "Zero";
  $arraye[1] = "one";
  $arraye[2] = "tow";
  $arraye[3] = "three";
  var_dump($arraye);
  echo "<br>";
  print_r($arraye);
  echo "<br>";
  echo "number array" . count($arraye); // استخراج ما هو موجود في المتغيرات بشكل خام

  for ($count = 0; $count < count($arraye); $count++) {
      echo $arraye[$count];
      echo "<br>";
      echo "$arraye[$count]";
      echo "<br>";
  }
  echo "<br>";
  var_dump($arraye); // watch dump
  echo "<br>";

  $arr = ["room-1","room-2","room-3"];
  var_dump($arr);
  $countenir = 0;
  foreach($arr as $value) {
      echo "[$countenir] => $value => $arr[$countenir]";
      $countenir++;
  }

  $arr2 = ["venom",9,];
  $num_foreach = 0;
  foreach($arr2 as $values_num_foreach){
      echo "[$num_foreach] => $values_num_foreach";
      $num_foreach++;
      var_dump($arr2); 
  }

  $arroption = [
       "VENOM",
        33.5,
        false
  ];
  var_dump($arroption);
  echo "<br>";

  // empty arrey
  $arr4 = [];
  var_dump($arr4);
  if (empty($arr4)) {
      echo "it is Empty";
  }

  $arr4[1] = [10.2];
  var_dump ($arr4);

  $arr = [];
  $arr[0] = 'ghost';
  $arr[1] = "venom";
  $arr[3] = true;
  $arr[10] = false;
  $arr[] = 10;
  var_dump($arr);

  $arr[1] = "clown fight";
  var_dump($arr);

  $arr[0] = "lorem text arr";
  foreach ($arr as $value_v) {
         echo "$value_v";
  }
  $arr = [1,2,3,4,5,5,6,7];
  var_dump($arr);

  $arr[200] = 200;
  var_dump($arr);

  $arr[] = 101;
  var_dump($arr); 


  $arr = [0];
  $arr = ["hello","naiber","venom","joker","batman"];
  var_dump($arr);

  $arr01 = ["monkey","greeen","blue"];
  var_dump($arr01);
  // here value no numbering
  foreach($arr01 as $v_value) {
      echo "$v_value" . "<br>";
  }
 
  //numbring to set word
  $arr01 = [ "one" => "monkey","tow" => "greeen" , "=>" ,"blue"];
  var_dump($arr01);
  foreach($arr01 as $key01 => $v_value) {
      echo "$key01" . "=>" .  "$v_value";
  }
   // All Key 
   print_r(array_keys($arr01));

  $userdata = [
      "jhon" => "02384",
      "ali"  => "58302",
      "omar" => "tree@gmail.com"
  ];
   var_dump($userdata);

  echo $userdata["ali"];

  $userDatalist["momo"] = "alitv88@gmailcom";
  var_dump($userDatalist);   

  echo $userDatalist[0];

  $arr2 = [
      [1,2,3,4,5,6],
      [7,8,9],
      [10,11],
  ];
  var_dump($arr2);
  
  foreach ($arr2 as $arr_login) {
      var_dump($arr_login);
  }

  $data1 = [
      // key data
      "dataofficell1" => [
      "jhon" => "02384",
      "ali"  => "58302",
      "omar" => "tree@gmail.com",
  ],
  
  "dataofficell2" => [ "jhon" => "02384","ali" => "58302"
  ,"omar" => "tree@gmail.com"],
  ];
  foreach ($data1 as $key_data) {  
      foreach ($key_data as $data001) {
          echo $data001;
    }
  }
  foreach ($data1 as $key_data => $valueArrye) {  
      echo "value for key: $key_data";
      foreach ($valueArrye as $data001) {
          echo $data001;
    }
  }
  $krip = [
      "sorjor" => "sglhsdfo",
      "dordjor" => "sglhsdfo",
      "worjpor" => "sglhsdfo",
      // data araye inner araye
      "trooook" => ["ali" => "dgdf@gmail.com"],
      "alvi" => ["dgdfg@gmail.com"],
      "djt" => ["ali" => "dgdf@gmail.com"],
      "hamza" => ["dgdf@gmail.com"],
  ];
   unset($krip["djt"]);
   print_r($krip);
   // order of number sort() and rsort()
   $arrrr = [2.2,4.5,34.5,12.7];
   sort($arrrr);
   print_r($arrrr);
   $arrrr = [2.2,4.5,34.5,12.7];
   rsort($arrrr);
   print_r($arrrr);
   // asort() and arsort()
  // ksort() and krsort()
 // index number
 $dkfh = ["2" => "alier" , "1" => "ser" , "5" => "fofrever"  , "7" => "wefr" , "9" => "forever"];
 // order word
 asort($dkfh);
 print_r($dkfh);
 arsort($dkfh);
 print_r($dkfh);
 //order number: invelsely  
 ksort($dkfh);
 print_r($dkfh);
 krsort($dkfh);
 print_r($dkfh);
 // copy arraye
 $kddfhvv = ["dfkh","dfl","lrejg"];
 $kddfh = $kddfhvv;
 var_dump($kddfh);

 $kddfhvv = ["dfkh","dfl","lrejg"];
 foreach  ($kddfhvv as $valuessss) {
  $arryed001[] = $valuessss;
 }
 var_dump($arryed001);

$kddfhvv = [ "2" => "dfkh",  "3" => "dfl",  "1" => "lrejg"];
$albsjg = $kddfhvv;
var_dump($albsjg);

$key = ["00001" => "d"];
$upe5 = [];
  foreach ($albsjg as $key => $value010) {
      $upe5[$key] = $value010;
}
var_dump($upe5);
// slit array
// string to array
$studentss  = "dddd ,ssss, ffff ,ttttt";
$studensarr = explode("," , $studentss , 3);
print_r($studensarr);
//array to string
$studensarr = implode("," , $studensarr);
echo $studensarr;
$studensarr = explode("," , $studentss, 3);
print_r($studensarr);

$dfl = [
  "001" => 
  [
      "name" => "ali",
      "age" => "90"

  ],
  "002" => 
  [
      "name" => "hamza",
      "age" => "80"

  ],
  "003" =>
  [
      "name" => "karar",
      "age" => "100"

  ]
  ];
foreach ($dfl as $keydfl => $valuedfl) {
    foreach($valuedfl as $emp1) {
      echo $emp1 , "<br>";
    }
}

$the_end_array = [
  "plus_data" => 
  [
  "data1" => ["temp" => "cold", "color" => "black"],
  "data2" => ["temp" => "hot", "color" => "white"],
  "data3" => ["temp" => "normal", "color" => "pink"]
  ]
  ];
  foreach ($the_end_array as $key_end => $the_end) {
      foreach($the_end as $the_end_array_data) {
          foreach ($the_end_array_data as $v) {
              echo $v . "<br>";
          }
      }
  }

  // function 
  function f_a($data10) {
      for($index = 0; $index <= $data10; $index++){
          if($index%3 == 0) {
              echo "Even Number: $index";
          }

  }
}
  F_a(20);

  function f_b($a , $b) {
      return $a + $b;
  }
echo f_b(10 , 20);

  function f_c($a , $b) {
      return $a % $b;

  }
echo f_c(20 , 15);

  function f_e(int $liimit , $skipnnumber) {
      for($index = 0; $index <= $liimit; $index++) {
       if ($index == $skipnnumber) {
              continue;
          }
       if ($index%2!=0) {
              echo "odd number: $index";
        }
      }
    }
    f_e(20 , "3");

  function fdd($c , $d): int {
      $addtion = $c + $d; // here + number
      return $addtion; // return value
  }
  echo "Number:" . fdd(1 , 2);

  function f_h( int $limmit_f , $skipnumber = -1) { // here array
      for ($index = 0; $index <= $limmit_f; $index++) {
         if ($skipnumber == $index) {
         }
          if ($index %2 != 0) {
              echo "Odd Number: $index";
          }
      }
  }
  f_h(20,"1");

  function f_j($limmit_f): array { // here array
      $return_f = [];
      for ($index = 0; $index <= $limmit_f; $index++) {
          if ($index%2 == 0) {
              $return[] = $index;
          }

      }
      return $return;
  }
  // danimac function
  function danimac($d , $g) {
      return $d - $g;
  }
  $addword = "danimac";
  echo "resulte:" . $addword(10 , 1);
  // Anonymous function
  $anonfunction = function ($r , $h): int {
      $additon = $r - $h;
      return $additon;
  };
   echo $anonfunction(8,6);

  $message = "hello";
  $anonfunction2 = function () use($message) {
          echo $message;
  };
  $anonfunction2();

  $dfkhfghk = "welcom Number";
  $ddshisg = function ($gg , $jj): int {
        $kshgsgkh = $gg + $jj;
        return $kshgsgkh;

  };
  echo $ddshisg(10,10);
  //argument
  $resultee = 0;
  function f_t($m , $u , $resultee = null) : int {
      $room01 = $m + $u;
      return $room01;

  };
  echo $resultee;
  $resultee = f_t(2,1);
  echo $resultee;

  $resulteee = 0;
  function f_y($m , $u , &$resulteee = null)  {
      $resulteee = $m + $u;
  };
  echo $resulteee; 
  f_y(2, 1, $resulteee);
  echo $resulteee;

  function stringfullname( int $firstuser , string $lastuser): 
      string {
          $fullname = $firstuser . "," . $lastuser;
          return $fullname;
  };
  echo $stringfullname("1","hamza");

  function calculator(int $a, int $b, String $operation = "all"){
      
      $operation = strtolower($operation);
      switch ($operation){
          case "add":
              $result = $a + $b;
              echo "Add: $result" . PHP_EOL;
              break;
          case "subtract":
              $result = $a - $b;
              echo "Subtract: $result" . PHP_EOL;
              break;
          case "multiply":
              $result = $a * $b;
              echo "Multiplee: $result" . PHP_EOL;
              break;
          case "divide":
              $result = $a / $b;
              echo "Divide: $result" . PHP_EOL;
              break;
          default:
              $result1 = $a + $b;
              echo "Add: $result1" . PHP_EOL;
              $result2 = $a - $b;
              echo "Subtract: $result2" . PHP_EOL;
              $result3 = $a * $b;
              echo "Multiple: $result3" . PHP_EOL;
              $result4 = $a / $b;
              echo "Divide: $result4" . PHP_EOL;
      }
    }
  calculator(3,2);
  calculator(2,2, "add");
  calculator(2,2, "subtract");
  calculator(2,2, "multiply");
  calculator(2,2, "divide");
  function divide($r , $y): int {
      if ($y <= 0) {
          throw new Exception("divide by zero");

      }
  $resulte = $r + $y;
  return $resulte;
  };
 //Here via method get try and catch  
 /* try to implement opration and catch to 
    excption and finaly to cleanup section crros message*/
  try {
      $resulte = divide(1,1);

  }catch (Exception $t) {
      echo "caught excptions:" . $t->getMessage();
  }
  // throw new out of the function
  function  cutsom_excptions_bandle($excptions) {
      echo "caught exceptions: " . $excptions->getMessage();
  }
  set_exception_handler("cutsom_excptions_bandle");
  throw new Exception("excptions is raised !");
  // ==.==
  function  cutsom_excptions__handlee($excptionss) {
      echo "caught exceptions: " . $excptionss->getMessage();
  }
  function dividee($b , $s): int {
      try {
          if ($s <= 0) {
          throw new Exception("Divide by zero excption 
          might happen");
          }
      $resulte = $b / $s;
      }
      catch (Exception $a) {
          throw new Exception("divide method has input
           pram is less than zero" . $s->getmessage());
      }    
      return $resulte;
  };
  set_exception_handler("cutsom_excptions__handlee");
  dividee(1,0);
  function handler_band($excption_band) {
      echo "caught excption" . $excption_band->getmessage();
  }
  set_exception_handler("handler_band") . "<br>";
  try {
      throw new Exception("exception is rasised");
  }finally {
      echo "this line is executed before exception" . "<br>";
  }
  // Raise Error
  function handler_error($num1,$num2) {
      echo $num2;
  }
  set_error_handler("handler_error");
  echo (5 / 0);
  // exercise raise exception
  function  cutsom_excptions__handleee($excptionss) {
      echo "caught exceptions: " . $excptionss->getMessage();
  }
  function PrintEvenNumber(int $num01 , int $num02) {
      if ($num01 <= 0 || $num02 <= 0 || $num01 == $num02) {
          throw new Exception("incorrect input parmeters");
      };
      for (;$num01 <= $num02;$num01++) {
       if ($num01%2==0) {
          echo "Even Number: $num01";
      }
  } 
  }
  set_exception_handler('cutsom_excptions__handleee');
  PrintEvenNumber(5 , 5);
  // clean exit with finally
  try  {
      throw new Exception("raside an exception");
  }catch (Execption $E_exception) {
      echo $E_exception->getmessage();
  }finally {
      echo "this block can be used as a cleanup section";
  }

/* FILES - == section working with file directories == */ 
/* scandir - list all files in a directory */
/* array_diff - removie dot file */
/* mkdir -  creat file */
/* copy - copy file */
/* die() - The die() function is an alias of the exit() function  */
  $get_file = "fontawesome";
  $get_f =  scandir($get_file);
  var_dump($get_f);
  foreach ($get_f as $doller) {
       if ($doller != "." && $doller != "..") {
          echo $doller . "<br>";
       }
  };   
  $get_f  = scandir($get_file);
  $get_f = array_diff($get_f , [".",".."]);
  foreach ($get_f as $doller) {
      if (is_file($get_file . "+" . $doller)) { 
          echo $doller . "<br>";
   }
  }
  // removie dot file
  $directed = array_diff($get_f , [".",".."]);
  foreach (directed as $doller) {
      echo $doller;
  };

  $reuslte10 = glob("*.php");
  var_dump($reuslte10);

  mkdir("test_folderf.php"); // create file
  echo $creat_file;
  copy("old/active-php.php" , "new/active-php2.php");

  // check if file exists
  // dirctory => folder
  // file => folder.txt
  $fileName = "MyFolder.txt";
  //Check File Exists
  if( file_exists($fileName) ){
      echo "File Exists" .PHP_EOL;

      //Check it is Directory
      if( is_dir($fileName) ){
          //Exit out of the Program
          die("It is a Directory not file");
      }
      //Copy File
      copy($fileName , "CopyFile.txt");
      copy("CopyFile.txt", "CopyFile2kk2.txt");
      //Rename File
      rename( "CopyFile1.txt", "RenamedFiiiiiiile.txt");
      copy("RenamedFiiiiiiile.txt", "RenamedFileDelkkkkketed.txt");
      //Delete File
      unlink( "RenamedFileDelkkkkketed.txt");
      } else {
        echo "File Does not Exists";
        die("No Such File");
      }
      /*======  ======*/
     // r - read mode 
     // w - write
     // a - append
     $File = "road.txt";
     $content = file_get_contents($File); // open file 
 
     echo $content;
     $File = "road.txt";
     $content2 = fopen($File , "r");
     $content3 = filesize($File); // file size
     $content4 =  fread($content2 , "2"); // read size
     $content4 =  fread($content2 , $content3); // Volume calculation
     echo $content4;
     fclose($content2);

     $filename1 = "road.txt";
     $content2 = fopen($filename1 , "w") or die("unable to write the file");
     fwrite($filename1 , "this is midified content");
     fclose($filename1);

     $filename1 = "road.txt";
     file_put_contents($filename1 , "welcommp the new file"); // Add word

      if (!file_exists($fileName)) {
      if (!is_dir($fileName)) {
          die ("this is dirctory");
    }
  }

  $settings = parse_ini_file("login.php");
  print_r($settings);

  foreach ($settings as $key => $value) {
      echo $key . "=>" . $value . "<br>";
  }

  echo $settings["car"] . "<br>";
  echo $settings["black"] . "<br>";
  // Read Entrie content
  $filename = "login.php";
  $content5 = file_get_contents($filename); //   قراءة الملف على شكل سلسة
  print_r($content5);
  // read line by line 
  $csvfile = file($filename);
  var_dump($csvfile);
  foreach ($csvfile as $key_file) {
   echo $key_file;
  }

  $filename = "login.php";
  $csvfile = file($filename);
  var_dump($csvfile);   
  // Each line is in a matrix and gets progressively larger str_getcsv
  foreach ($csvfile as $key_file) {
  $data_array[] = str_getcsv($key_file);
   print_r($data_array);
  }

  $fileneww = fopen("newfile.txt" , "w"); // file open
  fwrite($fileneww , "this is test file\r\n"); // write file
  fwrite($fileneww , "this is test file\r\n"); // write file
  fclose($fileneww);
  file_put_contents("newfile.txt" , "this is test file #VENOM",
  FILE_APPEND);
      
  file_put_contents("newfile.txt" , "some more new text\r\n",
  FILE_APPEND);

  $filehandler = fopen("newfile.txt" , "r");

  $content6 = fread($filehandler , filesize("newfile.txt"));
  echo $content6;
  fclose($filehandler);

  // data and time
  // date () , time()
  echo "time today:" . date("d-m-y"); 
  echo "time today:" . date("D-M-Y");
  echo "time today:" . date("d-m-y h:i:s:am");
  echo "time today:" . date("D-M-Y h:I:s:AM");
  echo "time today:" . date("d-m-y H:i:s:AM");
  // time miliseconde
  echo "time miliseond: " . time();
  // add time
  $time = time() + 1000;
  echo "add time:" . date("d-m-y h:i:s" , $time);
  $time = time() - 1000;
  echo "add time:" . date("d-m-y h:i:s" , $time);
  $time = time() * 1000;
  echo "add time:" . date("d-m-y h:i:s" , $time);
  $time = time() / 1000;
  echo "add time:" . date("d-m-y h:i:s" , $time);
  // info my date time
  $get_date = getdate();
  var_dump($get_date);
  foreach ($get_date as $d_info => $d_value); {
      echo "time: $d_value";
  };
  
  echo "weekday: " . $get_date["weekday"];
  echo "weekday: " . $get_date["weekday"];
  echo "year" . getdate()["year"];

  echo date_create("now")->format("Y-m-d H:i:s") . "<br>";
  echo date_create("+1 hour")->getdate("Y-m-d H:i:s") . "<br>";
  echo date_create("-1 year")->format("Y-m-d H:i:s") . "<br>";
  echo date_create("-30 minute")->format("Y-m-d H:i:s") . "<br>";
  echo date_create("+100 seconde")->format("Y-m-d H:i:s") . "<br>";
  echo date_create("-3  miliseconde")->format("Y-m-d H:i:s") . "<br>";

  $strtime = strtotime("2011-04-2 11:00:00");
  echo date("d:m:y h:i:s" , $strtime);
  // milie seconde and they are numbers
  if (time() >= $strtime) {
      echo "this is thirsday";
  } else {
      echo "this is not thirsday";
  }

  date_default_timezone_get();
  echo date("m/d/y h:i:s a");
  date_default_timezone_set("Asia");
  echo date("m/d/y h:i:s a");

  $date1 = time();
  sleep(5);
  $date2 = time();
  $content_time = ($date2 + $date1) / 60;
  echo $content_time;

  $start = date_create("2022-3-5 12:01:00");
  $end = date_create("2022-4-7  11:05:01");
  $diff_time = date_diff($end , $start); // مقارنة الوقتين
  print_r($diff_time);
  
  function dump(int $value): void {  
   var_dump($value);
  }  
  dump('13.37');
  dump(19.42);
  /*=========SESSION AND COOKIES==========*/
  


















?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Responsive</title>
</head>
<body style = "color: white; background-color: #212529;">
<h1>Exercise 1: Print Student Details</h1>
<?php

    $studentName = "Alex";
    $classSection = "5C";
    $age = 10;
    $sex = "Male";
    $contact = "+123456789";

    //Initiate the Variables
    $maths = 0;
    $science = 0;
    $total = 0;
    $totalMarks = 200;
    $percentage =  0;
    $passed = null;

?>
<h2>Student Information:</h2>

<table border = 1>
    <tr>
        <td>Name</td>
        <td>Class</td>
        <td>Age</td>
        <td>Sex</td>
        <td>Contact</td>
    </tr>
    <tr>
        <td><?= $studentName ?></td>
        <td><?= $classSection ?></td>
        <td><?= $age ?></td>
        <td><?= $sex ?></td>
        <td><?= $contact ?></td>
    </tr>
</table>
<h2>Exams Attended:</h2>
<?php
    $maths = 56;
    $science = 78;
    $total = $maths + $science;
    $examAttended = ($total < 0) ? true : false;
?>
Exam Attended : <?= ($examAttended) ? "Yes Attended" : "Not Attended"; ?> <br>

<h2>Final Marks:</h2>
Total Marks : <?= $total ?>
<h2>Percentage:</h2>
<?php
    $percentage = ( $total / $totalMarks) * 100; 
?>
Percentage : <?= $percentage ?>
<h2>Result:</h2>
Final Result : <?= ($percentage >= 60)  ? "Passed" : "Failed";?>
</body>
</html>