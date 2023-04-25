<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giff Search engine.</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
</html>

<html>

<body>
<form action="/index.php" method="post">

    <div><label for="limit">Result limit 1-50:</label></div>
    <div><input type="number" id="limit" name="limit" min="1" max="50" value="25"></div>

    <h1><label for="searchPhrase">Search for:</label></h1>
    <h1><input type="text" id="searchPhrase" name="searchPhrase" value="Cat"><br><br></h1>
    <h1><input type="submit" value="Search"></h1>

</form>
</body>
</html>