<?php
  function checkuser($username,$password){
    $sql ="Select * fromm user where username =? and password=? ";
    return user($sql,$username,$password);
  }
?>