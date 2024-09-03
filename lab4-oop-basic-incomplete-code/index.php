<?php

require "Profile.php";  

$profile = new Profile(
    "Dela Cruz",
    "Juan",
    "Dipasisiil"
);

$profile->setEmail('juan@delacruz.ph');
$profile->setAddress('Barangay Mintal, Davao City, Philippines 8000');
$profile->setFavoriteQuote('All is well.');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo $profile->getCompleteName(); ?></title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Full name: <?php echo $profile->getCompleteName(); ?></h1>
        <h2>Email: <?php echo $profile->getEmail();?></h2>
        <h2>Address: <?php echo $profile->getAddress();?></h2>
        <p>
            Favorite Quote: <?php echo $profile->getFavoriteQuote(); ?>
        </p>
    </div>
</body>
</html>