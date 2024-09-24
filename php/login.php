<?php
    session_start();
    include ('connect.php');
    if(empty($_POST['email']) || empty($_POST['pw'])) {
        header('Location: ../entrar.php');
        exit();
    }

    $email = mysqli_real_escape_string($conectar, $_POST['email']);
    $pw = mysqli_real_escape_string($conectar, $_POST['pw']);

    

    $query = "select name, email from registro where email = '{$email}' and pw = md5('{$pw}');";
    $result = mysqli_query($conectar, $query);
    $row = mysqli_num_rows($result);

    if($row == 1) {
        $consultname = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $consultname['name'];
        header('Location: ../index.php');
        exit();
    } else {
        $_SESSION['invalido'] = true;
        header('Location: ../entrar.php');
        exit();
    }

?>