<?php
// Retrieve the submitted data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if(isset($name,$email,$subject,$message)) {
    echo "Hello, $name";
    echo "Your email is, $email";
    echo "subject is , $subject";
    echo "messsage, $message";
} else {
    echo "Variable is not set.";
}


// Process the data (e.g. send an email, save to a database, etc.)
// ...

// Redirect the user back to the form page with a success message
// header('Location: submit.php?success=1');
exit();
?>
