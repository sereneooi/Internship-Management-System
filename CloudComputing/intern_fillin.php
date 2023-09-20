<?php
error_reporting(0);

if (isset($_POST['insert_button'])) {
    $reg_no = $_POST['reg_no'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    // Check if all required fields are filled
    if (empty($reg_no) || empty($first_name) || empty($last_name) || empty($age)) {
        echo "All fields are required.";
    } else {
        $con = mysqli_connect("localhost", "root", "", "db_issm");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
            // Use prepared statement to prevent SQL injection
            $sql = "INSERT INTO students (reg_no, first_name, last_name, age) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "sssi", $reg_no, $first_name, $last_name, $age);

            if (mysqli_stmt_execute($stmt)) {
                echo "Record inserted successfully.";
            } else {
                echo "Error: " . mysqli_error($con);
            }

            mysqli_stmt_close($stmt);
            mysqli_close($con);
        }
    }
}
?>

<form name="insert" method="post" action="">
    <input type="text" name="reg_no" placeholder="Registration Number" required><br>
    <input type="text" name="first_name" placeholder="First Name" required><br>
    <input type="text" name="last_name" placeholder="Last Name" required><br>
    <input type="text" name="age" placeholder="Age" required><br>
    <input type="submit" name="insert_button" value="Insert Record">
</form>
