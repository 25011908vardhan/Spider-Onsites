<?php
 $ciphermethod="AES-128-CTR";
 $iv_length=openssl_cipher_iv_length($ciphermethod);
 $opt=0;
 $encIV='2120191817161514';//Same for decryption
 $encKey="Yashvardhan";//Same for decryption
?>