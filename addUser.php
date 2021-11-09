<?php
  if (!empty($_POST)){
      foreach($_POST as $key => $value){
          if (empty($value)){
              header('location: ./database_insert.php?error=1&info=Wypełnij wszystkie dane!&addUser=');
              exit();
          }
      }
      
      require_once './connect.php';
        $sql = "INSERT INTO `users` (`id`, `name`, `surname`, `birthday`, `cityId`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', '$_POST[cityId]');";
      $connect->query($sql);
      
      if($connect->affected_rows == 1){
          header('location: ./database_insert.php?error=1&info=dodano user&addUser=');
      }
      else{
          header('location: ./database_insert.php?error=1&info=nie dodano user&addUser=');
      }
      $connect->close();
  }
  else {
    header('location: ./database_insert.php?error=1&info=Wypełnij wszystkie dane!&addUser=');
  }
?>