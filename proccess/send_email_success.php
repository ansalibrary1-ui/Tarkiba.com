<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarkiba - إشعار</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f9f7f0 0%, #e8f5e9 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .notification-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            overflow: hidden;
            text-align: center;
            transform: scale(0.9);
            opacity: 0;
            animation: fadeIn 0.5s ease forwards;
        }
        
        .notification-header {
            padding: 30px 20px;
            background: linear-gradient(135deg, #4CAF50 0%, #2E7D32 100%);
            color: white;
        }
        
        .notification-error .notification-header {
            background: linear-gradient(135deg, #FF5252 0%, #D32F2F 100%);
        }
        
        .icon-container {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .icon-container i {
            font-size: 40px;
        }
        
        .notification-header h2 {
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .notification-body {
            padding: 25px;
        }
        
        .notification-body p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 25px;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .btn {
            padding: 12px 25px;
            border-radius: 50px;
            border: none;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-primary {
            background: #4CAF50;
            color: white;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        
        .btn-primary:hover {
            background: #388E3C;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(76, 175, 80, 0.4);
        }
        
        .btn-secondary {
            background: #f5f5f5;
            color: #555;
        }
        
        .btn-secondary:hover {
            background: #e0e0e0;
        }
        
        .btn i {
            margin-left: 8px;
        }
        
        .logo {
            margin-top: 20px;
            opacity: 0.7;
            font-weight: 600;
            color: #4CAF50;
            font-size: 18px;
            letter-spacing: 1px;
        }
        
        @keyframes fadeIn {
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        @media (max-width: 480px) {
            .notification-container {
                max-width: 100%;
            }
            
            .btn-container {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="notification-container" id="notification">
        <div class="notification-header">
            <div class="icon-container">
                <i class="fas fa-check"></i>
            </div>
            <h2>تم الإرسال بنجاح</h2>
        </div>
        <div class="notification-body">
            <p>شكراً لتواصلك مع  <b>تركيبة</b> . تم استلام رسالتك وسنرد عليك في أقرب وقت ممكن.</p>
            <div class="btn-container">
                <button class="btn btn-primary" onclick="goToHome()">
                    العودة للرئيسية <i class="fas fa-home"></i>
                </button>
                <button class="btn btn-secondary" onclick="goBack()">
                    رجوع <i class="fas fa-arrow-left"></i>
                </button>
            </div>
            <div class="logo">TARKIBA | تركيبة</div>
        </div>
    </div>

    <script>
        // Simulate different scenarios for demonstration
        const urlParams = new URLSearchParams(window.location.search);
        const type = urlParams.get('type');
        
        if (type === 'error') {
            showError("فشل الإرسال: يرجى التأكد من صحة البيانات المدخلة والمحاولة مرة أخرى.");
        }
        
        function showError(errorMsg) {
            const notification = document.getElementById('notification');
            notification.classList.add('notification-error');
            
            const header = notification.querySelector('.notification-header');
            header.querySelector('i').className = 'fas fa-exclamation-circle';
            header.querySelector('h2').textContent = 'فشل في الإرسال';
            
            const body = notification.querySelector('.notification-body');
            body.querySelector('p').textContent = errorMsg;
        }
        
        function goToHome() {
            window.location.href = '../index.html';
        }
        
        function goBack() {
            window.history.back();
        }
        
        // For demonstration purposes - show success by default
        // In your PHP code, you would conditionally show success or error
    </script>
</body>
</html>