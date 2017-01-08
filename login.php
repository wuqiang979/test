<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-01-07 15:36:26
 * @version $Id$
 */
// session_start();
// $name=$_POST['login'];
// $pwd=$_POST['pwd'];

// $connect=mysqli_connect('localhost','root','123456','test','3306');
// $sql="select * from login where name='".$name."' and password='".$pwd."'";
// // $sql1 = "INSERT into login (id,name,password) values (2,'".$name."','".$pwd."')";
// // echo $sql1;
// $result=mysqli_execute($sql1);
// $count=mysqli_num_rows($result);
// //var_dump($count);
// if($count==1)
// {
//     $_SESSION['name']=$name;
//     //echo $_SESSION['name'];
//     //exit;
//     echo '<script language=javascript>window.location.href="login1.php"</script>'; 
// }
phpinfo();
echo "phpstudy";
for($i=0; $i<10; $i++)
    echo "$i ################<br>";