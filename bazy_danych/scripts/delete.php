<?php
  if (!empty($_GET['id'])) {
    require_once './connect.php';
    $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[id]";
    $connect->query($sql);
    if ($connect->affected_rows) {
      //echo $connect->affected_rows;
      header("location: ../3_bazy_tabela_delete.php?error=0&info=Usunięto reokord o id=$_GET[id]");
    }
    else {
      header('location: ../3_bazy_tabela_delete.php?error=1&info=Nie usunięto rekordu');
    }
  }
  else{
    header('location: ../3_bazy_tabela_delete.php');
  }

?>
