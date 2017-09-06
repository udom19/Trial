<?php
     if(isset($_POST['submit'])){
    	$config = include('../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);
        $result = $con->query('SELECT * FROM password LIMIT 1');
        $data = $result->fetch();
        $to = $_POST['to'];
        $password = $data['password'];
        $fullname = $_POST['fullname'];
        $area = $_POST['area'];
        header("location:http://hng.fun/sendmail.php?password=".$password."&fullname=".$fullname."&area=".$area."&to=".$to);
     }
     else{
         header("location: contactform.html");
     }