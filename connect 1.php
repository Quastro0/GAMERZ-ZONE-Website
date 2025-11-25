<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $connect = mysqli_connect('localhost', 'root', 'DBMS', 'gamerz_zone');
    
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error($connect));
      }
    $sql = "INSERT INTO contact_us (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($connect, $sql)) {
        echo '
            <script>
                    alert("Form Submitted Successfully");
                    location = "5th.html";
            </script>
        ';
    }
    else{
        echo'
            <script>
                alert("An Unexpected Error Occured);
                localtin="5th.html";
            </script>
        ';
    }

?>