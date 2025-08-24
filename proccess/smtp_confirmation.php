<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// استدعاء الملفات
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

header('Content-Type: text/html; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // إعدادات SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // سيرفر Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'ansalibrary1@gmail.com'; // بريدك
        $mail->Password = 'kscv ficv bper chaa';   // كلمة مرور التطبيقات
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        // بيانات المرسل والمستقبل
        $mail->setFrom('ansalibrary1@gmail.com', 'Tarkiba - للعلاجات للعلاج القولون العصبي');
        $mail->addAddress($email, $name); // إرسال إلى العميل
        $mail->addAddress('ansalibrary1@gmail.com', 'Tarkiba - للعلاجا للعلاج القولون العصبي'); // نسخة إلى المتجر

        // المحتوى
        $mail->isHTML(true);
        $mail->Subject = '=?UTF-8?B?' . base64_encode('تأكيد طلب - Tarkiba ') . '?=';
        
        // نص الرسالة المطلوب
        $emailBody = "✨ شكراً لاختيارك تركيبة، الحل الطبيعي الفعّال للتخلص من معاناة القولون العصبي 🌿💚<br><br>
        <strong>الاسم الكامل:</strong> $name <br>
        <strong>رقم الهاتف:</strong> $phone <br>
        <strong>العنوان:</strong> $address <br>
        <strong>المدينة:</strong> $city <br><br>
        📦 فريقنا سيقوم بالتواصل معك لتأكيد الطلب وتوصيل المنتج حتى باب منزلك بسرعة وأمان 🚚💨<br>
        مع تركيبة … راحة القولون بين يديك 🙌";
        
        $mail->Body = $emailBody;
        $mail->AltBody = strip_tags($emailBody); // نسخة نصية عادية

        $mail->send();
        echo "<script>window.location.href='send_confirmation_success.php';</script>";
    } catch (Exception $e) {
        echo "<script>window.location.href='send_confirmation_error.php';</script>";
    }
}