<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاركيبا - فشل في الإرسال</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #fff9f9 0%, #fff0f0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .notification-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(220, 80, 80, 0.15);
            width: 100%;
            max-width: 500px;
            overflow: hidden;
            text-align: center;
            transform: scale(0.9);
            opacity: 0;
            animation: fadeIn 0.6s ease forwards;
            position: relative;
        }
        
        .notification-header {
            padding: 35px 20px;
            background: linear-gradient(135deg, #FF5252 0%, #D32F2F 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .header-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23000000' fill-opacity='1' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        
        .icon-container {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            background: rgba(255, 255, 255, 0.25);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }
        
        .icon-container i {
            font-size: 45px;
        }
        
        .notification-header h2 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 700;
            position: relative;
            z-index: 2;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        
        .notification-body {
            padding: 30px;
        }
        
        .notification-body p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 30px;
        }
        
        .error-details {
            background: #FFF5F5;
            border: 1px solid #FFCDD2;
            border-radius: 12px;
            padding: 15px;
            margin: 20px 0;
            text-align: right;
            direction: ltr;
            font-family: monospace;
            color: #D32F2F;
            font-size: 14px;
            max-height: 120px;
            overflow-y: auto;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .btn {
            padding: 14px 30px;
            border-radius: 50px;
            border: none;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
        }
        
        .btn-primary {
            background: #D32F2F;
            color: white;
            box-shadow: 0 5px 20px rgba(211, 47, 47, 0.3);
        }
        
        .btn-primary:hover {
            background: #B71C1C;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(211, 47, 47, 0.4);
        }
        
        .btn-secondary {
            background: #f5f5f5;
            color: #555;
            border: 1px solid #e0e0e0;
        }
        
        .btn-secondary:hover {
            background: #e0e0e0;
            transform: translateY(-2px);
        }
        
        .btn i {
            margin-left: 8px;
        }
        
        .logo {
            margin-top: 30px;
            opacity: 0.7;
            font-weight: 600;
            color: #D32F2F;
            font-size: 18px;
            letter-spacing: 1px;
        }
        
        .leaf-decoration {
            position: absolute;
            width: 120px;
            height: 120px;
            opacity: 0.1;
            z-index: 1;
        }
        
        .leaf-1 {
            bottom: -30px;
            left: -30px;
            transform: rotate(45deg);
        }
        
        .leaf-2 {
            top: -30px;
            right: -30px;
            transform: rotate(220deg);
        }
        
        @keyframes fadeIn {
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        @media (max-width: 600px) {
            .notification-container {
                max-width: 100%;
            }
            
            .btn-container {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
            
            .notification-header {
                padding: 25px 15px;
            }
            
            .icon-container {
                width: 70px;
                height: 70px;
            }
            
            .icon-container i {
                font-size: 35px;
            }
            
            .notification-header h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="notification-container">
        <div class="leaf-decoration leaf-1">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <path fill="#D32F2F" d="M50,15 C30,15 15,30 15,50 C15,70 30,85 50,85 C70,85 85,70 85,50 C85,30 70,15 50,15 Z M50,80 C32,80 20,68 20,50 C20,32 32,20 50,20 C68,20 80,32 80,50 C80,68 68,80 50,80 Z" />
                <path fill="#D32F2F" d="M50,25 C35,25 25,35 25,50 C25,65 35,75 50,75 C65,75 75,65 75,50 C75,35 65,25 50,25 Z M50,70 C38,70 30,62 30,50 C30,38 38,30 50,30 C62,30 70,38 70,50 C70,62 62,70 50,70 Z" />
            </svg>
        </div>
        <div class="leaf-decoration leaf-2">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <path fill="#D32F2F" d="M50,15 C30,15 15,30 15,50 C15,70 30,85 50,85 C70,85 85,70 85,50 C85,30 70,15 50,15 Z M50,80 C32,80 20,68 20,50 C20,32 32,20 50,20 C68,20 80,32 80,50 C80,68 68,80 50,80 Z" />
                <path fill="#D32F2F" d="M50,25 C35,25 25,35 25,50 C25,65 35,75 50,75 C65,75 75,65 75,50 C75,35 65,25 50,25 Z M50,70 C38,70 30,62 30,50 C30,38 38,30 50,30 C62,30 70,38 70,50 C70,62 62,70 50,70 Z" />
            </svg>
        </div>
        
        <div class="notification-header">
            <div class="header-pattern"></div>
            <div class="icon-container">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <h2>فشل في الإرسال</h2>
        </div>
        
        <div class="notification-body">
            <p>عذراً، حدث خطأ أثناء محاولة إرسال رسالتك. يرجى المحاولة مرة أخرى أو التواصل معنا عبر وسائل التواصل الأخرى.</p>
            
            <div class="error-details">
                Error: Connection timeout. Please check your internet connection and try again.
            </div>
            
            <div class="btn-container">
                <button class="btn btn-primary" onclick="tryAgain()">
                    المحاولة مرة أخرى <i class="fas fa-redo"></i>
                </button>
                <button class="btn btn-secondary" onclick="goToHome()">
                    العودة للرئيسية <i class="fas fa-home"></i>
                </button>
            </div>
            
            <div class="logo">TARKIBA | تاركيبا</div>
        </div>
    </div>

    <script>
        // دالة للمحاولة مرة أخرى
        function tryAgain() {
            window.history.back();
        }
        
        // دالة للعودة إلى الصفحة الرئيسية
        function goToHome() {
            window.location.href = '../index.html';
        }
        
        // عرض تفاصيل الخطأ الحقيقية (سيتم استبدالها من الخادم)
        function displayErrorDetails(errorInfo) {
            document.querySelector('.error-details').textContent = errorInfo;
        }
        
        // لمحاكاة بيانات الخطأ (في الواقع، هذه القيمة ستأتي من PHP)
        const errorInfo = "فشل في الاتصال بالخادم: تعذر الاتصال بخادم البريد. يرجى المحاولة لاحقاً.";
        displayErrorDetails(errorInfo);
    </script>
</body>
</html>-