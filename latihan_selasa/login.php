<?php

  require_once 'core/init.php';

  if(isset($_POST['simpan']))
  {
    $username = $_POST['username'];
    $nama     = $_POST['nama'];
    $password = $_POST['password'];
    $level    = $_POST['level'];
    tambah($username,$nama,$password,$level);
  }

  require_once 'view/header.php';

 ?>
    <form action="" method="post">
      <label for="">username</label> <br>
      <input type="text" name="username" ><br><br>

      <label for="">nama</label> <br>
      <input type="text" name="nama"><br><br>

      <label for="">password</label> <br>
      <input type="password" name="password" ><br><br>

      <label for="">level</label>
      <select name="level">
        <option>pilih</option>
        <option>1</option>
        <option>2</option>
      </select>
      <br><br>
      <input type="submit" name="simpan" value="simpan">
    </form>
