<!-- 16.Create a table student with fields roll no, name, mark, grade. Insert some records in
the table. Write a PHP program to display the mark list of a student by accepting the
register no of the student. -->

<html>
<head>
<title>Marklist</title>
</head>
<body>
<h3><center>Marksheet</center></h3>

<form method="POST" action="">
    <label>Reg no:</label>
    <input type="text" name="txtreg" required/><br><br><br>
    <input type="submit" value="View Results">
</form>

<!-- if posted
if not empty
if connected
if result found
if no. of rows  -->

<?php
if ($_POST) {
    $rg_no = $_POST['txtreg'];
    if (!empty($rg_no) && is_numeric($rg_no)) {
        $con = pg_connect("host=localhost port=5432 dbname=test user=postgres password=iisj123"); //dhupp
        if ($con) {
            $qry = "SELECT * FROM student WHERE roll_no = $1"; //1 is just a placeholder
            $result = pg_query_params($con, $qry, array($rg_no)); //pg_query_params is used to execute the query
                if ($result) {
                        $number_of_rows = pg_num_rows($result); //checks the no. of rows 
                    if ($number_of_rows > 0) {
                            while ($row = pg_fetch_assoc($result)) { // fetch each row and store in $row
                        echo "<br>\n";
                        echo "Roll No: " . htmlspecialchars($row['roll_no']) . " | ";
                        echo "Name: " . htmlspecialchars($row['name']) . " | ";
                        echo "Marks: " . htmlspecialchars($row['mark']) . " | ";
                        echo "Grade: " . htmlspecialchars($row['grade']);
                    }
                    } 
                    else {
                    echo "No records found for Roll No: $rg_no.";
                        }
                } 
                else {
                echo "Error executing query.";
                }
        pg_close($con);
    } else {
            echo "Failed to connect to the database.";
    }
    } else {
        echo "Please enter a valid registration number.";
    }
}
?>

</body>
</html>



 