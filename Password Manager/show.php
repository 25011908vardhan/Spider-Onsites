<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Creds</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="back"><a href="index.php">Back</a></div>
    <table class="form">
        <thead>
            <tr>
                <th>Sr.no</th>
               <th>Account</th>
               <th>Username</th>
               <th>Email</th>
               <th>Password</th>
            </tr>
        </thead>
        <tbody>
             
        <?php
              
              include 'config.php';
              include 'opensslEncryption.php';
              $choose= "select * from creds"; 
              $query=mysqli_query($con,$choose);
              $nums=mysqli_num_rows($query);
              while($result=mysqli_fetch_array($query))
              {
                  ?><tr>
                      <td><?php echo $result['id']; $pollid=$result['id'];?></td>
                      <td><?php echo $result['account'];?></td>
                      <td><?php echo $result['username'];?></td>
                      <td><?php echo $result['email'];?></td>
                      <td><?php echo openssl_decrypt($result['password'],$ciphermethod,$encKey,$opt,$encIV);?></td>
                      
                  </tr>
                  <?php

              }
           
        ?> 
        </tbody>
    </table>
</body>
</html>