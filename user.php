<?php
  function checkuser($username,$password){
    $sql ="Select * form user where username =? and password=? ";
    return user($sql,$username,$password);
  }
?>