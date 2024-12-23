<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);

    echo "
    <div style='max-width: 500px; margin: 50px auto; font-family: Arial, sans-serif; padding: 20px; border: 1px solid #ccc;'>
      <h2>Registration Details</h2>
      <p><strong>Full Name:</strong> $name</p>
      <p><strong>Email Address:</strong> $email</p>
      <p><strong>Phone Number:</strong> $phone</p>
      <p><strong>Date of Birth:</strong> $dob</p>
      <p><strong>Gender:</strong> $gender</p>
      <a href='registration.html' style='text-decoration: none; color: white; background: #0078d7; padding: 10px 15px; border-radius: 4px;'>Back to Form</a>
    </div>
    ";
} else {
    echo "Invalid request.";
}
?>
