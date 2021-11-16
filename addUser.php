<?php
  if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday']) && !empty($_POST['cityid'])) {
    echo "Dane wypełnione";
    require_once './connect.php';
      
//      $name = $_GET['name'];
      
//    $sql="DELETE FROM `users` WHERE `users`.`id` = $_POST[id]";
    $sql2= "INSERT INTO `users`(`id`, `name`, `surname`, `birthday`, `city`) VALUES (NULL,$_POST[name],$_POST[surname],$_POST[birthday],$_POST[city])";
      
      $sql3= "INSERT INTO `users`(`id`, `name`, `surname`, `birthday`, `city`) VALUES (NULL,'$_POST[name]','$_POST[surname]',$_POST[birthday],$_POST[city])";
    $connect->query($sql3);
  }
  else {
    header('location: ../4_bazy_tabela_insert.php?error=1&info=Wypełnij wszystkie dane!&addUser=');
  }
?>
