<?php 
include "tree.php";
global $connect;
mysqli_set_charset( $connect, 'utf8');
$qure = 'select * from gift_web';
$select = mysqli_query($connect, $qure);
?>
<body id="admin-bg">
<!-- <div class="img-admin">
    <img src="img-project/admin.jpg" alt="">
</div>  -->
<link rel="stylesheet" href="style.css">
 <form class="search" action="admin.php" method="POST">
    <input class="search-input-1" type="text" name="Search Users" placeholder="Search Users">
    <input class="submit-input-2" type="submit" name="search" value="search">
 </form>
<table class="users-table">
    <thead>
        <th>full_name</th>
        <th>name_person</th>
        <th>pass_person</th>
        <th>email_person</th>
        <th>city_person</th>
        <th>edit</th>
        <th>delete</th>
    </thead>
     <?php
    $count = 0;
    while ($s = mysqli_fetch_assoc($select)){
        $count++;
        echo  "<tbody>";
        echo  "<tr>";
        echo  " <td class=date-td date-labal=full_name>" . $s['full_name'] . "</td>";
        echo  " <td class=date-td date-labal=name_person>" . $s['name_person'] . "</td>";
        echo  " <td class=date-td date-labal=pass_person>" . $s['pass_person'] . "</td>";
        echo  " <td class=date-td date-labal=email_person>" . $s['email_person'] . "</td>";
        echo  " <td class=date-td date-labal=city_person>" . $s['city_person'] . "</td>";
    }
   ?>
    <td class="control"><a href="updata.php?sid=<?php echo $row['id']; ?>">edit</a></td>
    <td class="control"><a href="delet.php?sid=<?php echo $row['id']; ?> " onclick="return  confirm('do you want to delete Y/N')">delete</a></td>
<?php 
  echo  "</tr>";
  echo  "</tbody>";
?>
</table> 
<table class="results-table">
    <?php
    if (isset($_POST['search'])) {
    ?>
     <thead>
        <th>full_name</th>
        <th>name_person</th>
        <th>pass_person</th>
        <th>email_person</th>
        <th>city_person</th>
        <th>edit</th>
        <th>delete</th>
     </thead>
        <div class="section-search-result">
             <h1 class="search-result">نتيجة البحث</h1>
        </div>
        <?php
        $standerd = $_POST['standerd'];
        $qure = "select * from gift_web where name_person like '%" . $standerd . "%'";
        $reslt = mysqli_query($connect, $qure);
        $count = 0;
        if (!$reslt) {
            echo "<tr><td colspan='5'> no found</td></tr>";
        } else {
            while ($s = mysqli_fetch_assoc($reslt)) {
                echo  "<tbody>";
                echo  "<tr>";
                echo  " <td class=date-td date-labal=full_name>" . $s['full_name'] . "</td>";
                echo  " <td class=date-td date-labal=name_person>" . $s['name_person'] . "</td>";
                echo  " <td class=date-td date-labal=pass_person>" . $s['pass_person'] . "</td>";
                echo  " <td class=date-td date-labal=email_person>" . $s['email_person'] . "</td>";
                echo  " <td class=date-td date-labal=city_person>" . $s['city_person'] . "</td>";
            }
           ?>
            <td class="control"><a href="updata.php?sid=<?php echo $row['id']; ?>">edit</a></td>
            <td class="control"><a href="delet.php?sid=<?php echo $row['id']; ?> " onclick="return  confirm('do you want to delete Y/N')">delete</a></td>
        <?php 
          echo  " </tr>";
          echo  "</tbody>";
        }
    }
        ?>
</table>
</body>
</html>