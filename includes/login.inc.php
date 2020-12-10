<?php
  if(isset($_POST['login-button'])){
    require "dbh.inc.php";

    $username = $_POST['uid'];
    $password = $_POST['psw'];

    if(empty($username) || empty($password)){
      header("Location: ../index.php?error=emptyfields&email=".$email);
      exit();
    } else{
      $sql = "SELECT * FROM users WHERE uidUsers=?;";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../index.php?error=sqlerror");
        exit();
      } else{
        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
          $pwdCheck = password_verify($password, $row['pswUsers']);
          if($pwdCheck == false){
            header("Location: ../index.php?error=wrong");
            exit();
          } else if($pwdCheck == True){
            session_start();
            $_SESSION['userId'] = $row['idUsers'];
            $_SESSION['userUid'] = $row['uidUsers'];

            header("Location: ../dashboard.php");
          } else{
            header("Location: ../index.php?error=wrong");
          }
        } else{
          header("Location: ../index.php?error=wrong");
          exit();
        }
      }
    }
  } else{
    header("Location: ../index.php");
  }

 ?>
