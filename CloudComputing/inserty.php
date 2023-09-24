<html>
<body>
<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish a database connection
    $con = mysqli_connect('db1.cpg9cjdwwtu2.us-east-1.rds.amazonaws.com', 'main', 'qwer1234', 'db1');

    // Check the connection
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    // Select the database
    mysqli_select_db($con, "db1");

    // Get and sanitize form input
    $company_name = mysqli_real_escape_string($con, $_POST['company_name']);
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    // Handle file upload
    $fname = time() . '_' . $_FILES['file']['name'];
    $loc = './upload/';
    $move = move_uploaded_file($_FILES['file']['tmp_name'], $loc . $fname);

    if (!$move) {
        die('File upload failed.');
    }

    // Insert data into the database
    $sql = "INSERT INTO fill_details (company_name, first_name, last_name, email, gender, file)
            VALUES ('$company_name', '$first_name', '$last_name', '$email', '$gender', '$fname')";

    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    // Redirect to a success page
    header('location: file_uploading/index.php?success');

    // Close the database connection
    mysqli_close($con);
} else {
    // Handle the case where the form was not submitted
    echo 'Form not submitted.';
}
?>
</body>
</html>
