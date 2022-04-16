<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Database connection and sending data to database</title>
</head>
<body>

<h3>A simple program showing database connection using php and sending data to database</h3>

<!-- Post request is made to the database so it doesn't exposes the entered detail on the url -->
<form action="send.php" method="POST">

    <p>Enter your name = <input type="text" name="name"></p>
    <p>Enter your age = <input type="text" name="age"></p>
    <input type="submit">

    
<p>When submit button is clicked then it will send the data to the database</p>
</form>

</body>
</html>