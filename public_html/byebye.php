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
    <h1>We Thank You.</h1>
    <h3>Product ID: <?= $name?></h3>
    <h3>Product Date of Birth: <?= $power?></h3>
    <h3>Product Location: <?= $rank?></h3>
    <h3>Product Coping Mechanism: <?= $school?></h3>
    <h3>Product Risk: <?= $email?></h3>
    <h2>We will come for payment soon. </h2>
    <h5>Memento Mori</h5>
</body>
</html>