<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        
        // include database connection file
        include_once("../../config/config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO usertype(nama) VALUES('$nama')");
        
        // Show message when user added
        $message = 'User added successfully';
        // echo "<script type='text/javascript'>alert('$message')</script>"; 

        echo "<script>
        alert('$message');
        window.location.href='/klinik/usertype';
        </script>";
        // header("Location: /klinik/usertype");
        
    }
    ?>