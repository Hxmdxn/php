<!-- 15.Create a login page using database. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
        Username: <input type="text" name="user" required><br><br>
        Password: <input type="password" name="pass" required><br><br>
        <input type="submit" value="Login"><br><br>
    </form>

    <?php
    if ($_POST) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $con = pg_connect("host=localhost port=5432 dbname=test user=postgres password=iisj123");

        if ($con) {
            $qry = "SELECT username, password FROM login1 WHERE username = $1 AND password = $2";
            $result = pg_query_params($con, $qry, array($username, $password));

            if ($result) {
                $number_of_rows = pg_num_rows($result);   
                if ($number_of_rows > 0) {
                    echo "<br>Welcome $username, You are logged in successfully...";
                } else {
                    echo "<br>Incorrect username or password!";
                }
            } else {
                echo "<br>Error in SQL execution!";
            }
        } else {
            echo "<br>Error connecting to the database!";
        }
    }
    ?>
</body>
</html>