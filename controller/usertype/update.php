<?php
// include database connection file
include_once("../../config/config.php");


// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    // update user data
    $query = "UPDATE usertype SET nama='$nama' WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);

    $message = 'User updated successfully';

    echo "
    <script>
    alert('$message');
    window.location.href='/klinik/usertype';
    </script>
    ";

    // header("Location: /klinik/usertype");
}
