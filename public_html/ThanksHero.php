<!DOCTYPE html>
<html lang="en">

<head>
    
</head>
<body>
    <?php
        $name = htmlspecialchars($_POST['name']);
        $power = htmlspecialchars($_POST['power']);
        $rank = htmlspecialchars($_POST['rank']);
        $school = htmlspecialchars($_POST['school']);
        $email = htmlspecialchars($_POST['email']);
    ?>
    <h1>Thank you for registrating <?= $name?>!</h1>
    <h3>Your powers are: <?= $power?></h3>
    <h3>Your rank is: <?= $rank?></h3>
    <h3>You attended: <?= $school?></h3>
    <h3>Your email is: <?= $email?></h3>
    <h1>We will contact you soon!</h1>
</body>
</html>