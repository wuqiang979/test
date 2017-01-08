<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>跳转页面</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
    <span>
        <?php
            session_start(); 
            if(isset($_SESSION['name']))
                echo $_SESSION['name'];
        ?>
    </span>
    <a href='test.php'></a>
</body>
</html>