<?php
// Retrieve the submitted data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Process the data (e.g. send an email, save to a database, etc.)
// Send an email with the submitted data
$to = 'priderobo@gmail.com';
$subject = 'New message from ' . $name;
$body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
  // Email sent successfully
  echo "success";
} else {
    header("HTTP/1.1 404 Not Found");
}


// Redirect the user back to the form page with a success message
// header('Location: form.php?success=1');
exit();
?>