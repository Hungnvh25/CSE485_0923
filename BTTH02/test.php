<?php

// Bước 1: Đưa vào tệp PHPMailer
require 'PHPMailer/PHPMailerAutoload.php';

// Hàm để tạo mã xác thực ngẫu nhiên
function generate_verification_code($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

// Thông tin tài khoản email gửi
$sender_email = 'your_email@gmail.com';
$sender_password = 'your_email_password';

// Thông tin người nhận email
$receiver_email = 'recipient_email@gmail.com';

// Tạo mã xác thực
$verification_code = generate_verification_code();

// Tạo đối tượng PHPMailer

require 'PHPMailer/PHPMailerAutoload.php';

class EmailSender {
    private $mailer;

    function __construct() {
        $this->mailer = new PHPMailer;
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.gmail.com';
        $this->mailer->SMTPAuth = true;
        $this->mailer->SMTPSecure = 'tls';
        $this->mailer->Port = 587;
    }

    function sendEmail($sender_email, $sender_password, $receiver_email, $subject, $body) {
        $this->mailer->Username = $sender_email;
        $this->mailer->Password = $sender_password;
        
        $this->mailer->setFrom($sender_email, 'Your Name');
        $this->mailer->addAddress($receiver_email);

        $this->mailer->Subject = $subject;
        $this->mailer->Body = $body;

        if (!$this->mailer->send()) {
            return 'Gửi email thất bại: ' . $this->mailer->ErrorInfo;
        } else {
            return "Email đã được gửi đến $receiver_email";
        }
    }
}

// Sử dụng class EmailSender
$emailSender = new EmailSender();

// Thực hiện gửi email
$result = $emailSender->sendEmail('your_email@gmail.com', 'your_email_password', 'recipient_email@gmail.com', 'Xác thực tài khoản', 'Mã xác thực của bạn là: 123456');

echo $result;


// Đặt tiêu đề và nội dung email
$mail->Subject = 'Xác thực tài khoản';
$mail->Body = "Mã xác thực của bạn là: $verification_code";

// Gửi email
if (!$mail->send()) {
    echo 'Gửi email thất bại: ' . $mail->ErrorInfo;
} else {
    echo "Email đã được gửi đến $receiver_email. Mã xác thực: $verification_code";
}
?>
