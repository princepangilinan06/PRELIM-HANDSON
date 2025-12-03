<?php
$username = "Prince";
$greeting= "Hello";

$offer=["Mochi", 6, 5, 4 ];


$usualPrice= $offer[1]*$offer[2];

$offerPrice= $offer[1]*$offer[3];

$saving= $usualPrice - $offerPrice


?>
<!DOCTYPE html>
<html>
     <?php include_once 'includes/header.php'; ?>
       <p class="saving">              <br><br>        SAVE! $<?= $saving ?></p>
    <body>

        
        <h1>Multi-Buy Offers</h1>
        <p><?= $greeting . ", " . $username ?></p>
    

         <p>Buy <?= $offer[1] ?> pcs of mochi for $<?= $offerPrice ?> (usual price is $<?=$usualPrice?>) </p>
        



    
       <?php include_once 'includes/footer.php'; ?>
    </body>
    
</html>