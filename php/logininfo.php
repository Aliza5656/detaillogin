<?php



if (isset($_POST['Rbtnregister'])) {

    $email = $_POST['email'];
    $password = base64_encode(trim($_POST['password']));

    $query = "SELECT * FROM `sigin` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $count = mysqli_num_rows($result); // Correct variable!

    if ($count > 0) {
        $row = mysqli_fetch_array($result);
        if ($row['role'] === 'user') {
            echo "<script>alert('Login Successful');</script>";
            // Redirect or do something else here
        } else {
            echo "<script>alert('Login failed: Incorrect role'); window.location.href='login.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Login failed: No such user'); window.location.href='login.php';</script>";
        exit;
    }
}
?>
