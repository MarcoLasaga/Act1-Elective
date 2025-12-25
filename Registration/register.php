<?php
require 'db.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

header('Content-Type: application/json');

$username = trim($_POST['username']);
$email    = trim($_POST['email']);
$password = $_POST['password'];

if (strlen($password) < 8) {
    echo json_encode(["status"=>"error","msg"=>"Password must be at least 8 characters"]);
    exit;
}

$check = $conn->prepare("SELECT id FROM users WHERE username=? OR email=?");
$check->bind_param("ss", $username, $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo json_encode(["status"=>"error","msg"=>"Username or email already exists"]);
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);
$token = bin2hex(random_bytes(32));

$stmt = $conn->prepare("INSERT INTO users (username,email,password,verify_token) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $username, $email, $hash, $token);

if (!$stmt->execute()) {
    echo json_encode(["status"=>"error","msg"=>"Registration failed"]);
    exit;
}

/* SEND EMAIL */
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'YOUR_GMAIL@gmail.com';
    $mail->Password = 'GMAIL_APP_PASSWORD';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('YOUR_GMAIL@gmail.com', 'Your App');
    $mail->addAddress($email);

    $link = "http://localhost/Regis/verify.php?token=$token";

    $mail->isHTML(true);
    $mail->Subject = "Verify Your Account";
    $mail->Body = "
        <h2>Welcome, $username</h2>
        <p>Click below to verify your account:</p>
        <a href='$link'>Verify Account</a>
    ";

    $mail->send();

    echo json_encode([
        "status"=>"success",
        "msg"=>"Account registered! Please check your email to verify."
    ]);

} catch (Exception $e) {
    echo json_encode([
        "status"=>"success",
        "msg"=>"Registered, but email failed. Contact admin."
    ]);
}
