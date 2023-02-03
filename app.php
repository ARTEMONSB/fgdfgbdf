<?php 
  $wallet = $_POST['wallet'];
  file_put_contents('wallets.txt', $wallet);
  ?>
