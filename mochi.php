<?php
$name = "Prince";
$greeting= "Hello";

if ($name != " "){
  $greeting= "Welcome Back!";
}

$product= "Mochi";
$cost=10;



?>
<!DOCTYPE html>
<html>
     <?php require 'includes/header.php'; ?>
    <body>
        
        <h1>Mochi!</h1>
        <p><?= $greeting . ", " . $name ?></p>
        <table>
            <tr>
                <th>Packs</th>
                <th>Prices</th>
            </tr>
            <?php 
            for($i=0; $i<=10; $i++){
          $subtotal= $cost*$i;
          $discount=($cost/100)*4;
          $total=[$i => $subtotal-$discount];
       
            foreach ($total as $quantity => $price) { ?>
                <tr>
                    <?php if ($quantity===0) {
                      continue;
                      } 
                    ?>
                      <td><?= $quantity ?> Packs</td>
                      <td>$<?= $price ?></td>
                </tr>
                
                <?php } ?>

            <?php } ?>
        </table>
      
        



    
       <?php include_once 'includes/footer.php'; ?>
    </body>
    
</html>