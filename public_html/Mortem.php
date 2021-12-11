<!DOCTYPE html>
<html lang="en">

<head>
<h1>RIGOR MORTIS</h1>
</head>
<body>
    <h3>Would you like for someone to disappear? Tell us who they are.</h3>
    <form action="byebye.php" method="POST">
        <div>
            <label for="name">Full Name:</label>
            <input id="name" type="text" name="name">
        </div>
        <div>
            <label for="power">Date of Birth:</label>
            <input id="power" type="text" name="power">
        </div>
        <div>
            <label for="rank">Address:</label>
            <input id="rank" type="text" name="rank">
        </div>
        <div>
            <label for="school">Social Media:</label>
            <input id="school" type="text" name="school">
        </div>
        <div>
            <label for="email">Who would notice they went missing?:</label>
            <input id="email" type="text" name="email">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>