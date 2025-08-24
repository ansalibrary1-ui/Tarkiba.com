<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// استدعاء الملفات
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

header('Content-Type: text/html; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // إعدادات SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // سيرفر Gmail
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ansalibrary1@gmail.com'; // بريدك
        $mail->Password   = 'kscv ficv bper chaa';   // كلمة مرور التطبيقات (وليس كلمة المرور العادية)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        // بيانات المرسل والمستقبل
        $mail->setFrom('yourgmail@gmail.com', 'TARKIBA Website');
        $mail->addAddress('ansalibrary1@gmail.com', 'Ansa Library');

        // المحتوى
        $mail->isHTML(true);
        $mail->Subject = '=?UTF-8?B?' . base64_encode('رسالة جديدة من TARKIBA') . '?=';
        $mail->Body    = "
            <strong>الاسم الكامل:</strong> $name <br>
            <strong>البريد الإلكتروني:</strong> $email <br>
            <strong>رقم الهاتف:</strong> $phone <br>
            <strong>الرسالة:</strong> <br>" . nl2br($message);

        $mail->send();
        echo "<script>window.location.href='send_email_success.php';</script>";
    } catch (Exception $e) {
        echo "<script>window.location.href='send_email_error.php';</script>";
    }
}