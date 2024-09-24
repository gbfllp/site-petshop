<?php
    session_start();
    include ('connect.php');

    $regname = mysqli_real_escape_string($conectar, trim($_POST['regname']));
    $regemail = mysqli_real_escape_string($conectar, trim($_POST['regemail']));
    $regpw = mysqli_real_escape_string($conectar, trim(md5($_POST['regpw'])));

    $sql = "select count(*) as total from registro where email = '$regemail'";
    $result = mysqli_query($conectar, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1) {
        $_SESSION['exists'] = true;
        header('Location: ../entrar.php');
        exit();
    } 

    $sql = "insert into registro (name, email, pw) values ('$regname', '$regemail', '$regpw')";

    if($conectar->query($sql) === TRUE) {
        $_SESSION['sucess'] = true;
    }

    $conectar->close();
    
    header('Location: ../entrar.php');
    exit;
?>