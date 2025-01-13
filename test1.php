<?php
    $var=3;
    echo $var;

    echo" <h1>hello world</h1>";
    $color='red';

    echo gettype($color);
    echo '<br>';
    echo gettype(true);
    echo '<br>';
    echo gettype(100);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Data to Server</title>
</head>
<body>
<hr>
<hr>

<!--<h2 style="color: --><?php //echo $color; ?><!--">This is a colored heading</h2>-->
<h2 style="color: <?=$color; ?>">This is a colored heading</h2>

<h1>Send Data to Server</h1>
<form action="test2.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <button type="submit">Submit</button>
</form>

</body>
</html>
