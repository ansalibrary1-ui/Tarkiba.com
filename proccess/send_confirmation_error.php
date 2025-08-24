<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خطأ في إرسال الطلب | Tarkiba</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7f9;
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
        }
        
        .header {
            background: linear-gradient(to right, #f44336, #d32f2f);
            color: white;
            padding: 2rem;
        }
        
        .content {
            padding: 2rem;
        }
        
        .error-icon {
            font-size: 80px;
            color: #f44336;
            margin-bottom: 20px;
        }
        
        h1 {
            color: #d32f2f;
            margin-bottom: 15px;
        }
        
        p {
            margin-bottom: 20px;
            font-size: 18px;
            color: #555;
        }
        
        .support-note {
            background-color: #ffebee;
            border-right: 4px solid #f44336;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            text-align: right;
        }
        
        .actions {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-primary {
            background-color: #f44336;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #d32f2f;
            transform: translateY(-2px);
        }
        
        .btn-outline {
            border: 2px solid #f44336;
            color: #f44336;
            background: white;
        }
        
        .btn-outline:hover {
            background-color: #ffebee;
        }
        
        .whatsapp-btn {
            background-color: #25D366;
            color: white;
            margin-top: 20px;
        }
        
        .whatsapp-btn:hover {
            background-color: #128C7E;
        }
        
        .contact-methods {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .footer {
            padding: 20px;
            color: #777;
            font-size: 0.9rem;
            background-color: #f9f9f9;
        }
        
        @media (max-width: 768px) {
            .actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="color: white;">Tarkiba - للعلاج القولون العصبي</h1>
        </div>
        
        <div class="content">
            <div class="error-icon">❌</div>
            <h1>عذراً، حدث خطأ أثناء إرسال الطلب</h1>
            <p>لم نتمكن من معالجة طلبك في الوقت الحالي. يرجى المحاولة مرة أخرى أو التواصل معنا مباشرة.</p>
            
            <div class="support-note">
                <h3>للحصول على مساعدة فورية:</h3>
                <p>يمكنك التواصل معنا عبر أي من قنوات الدعم المتاحة أدناه، وسنكون سعداء بمساعدتك في إكمال طلبك.</p>
            </div>
            
            <div class="actions">
                <a href="javascript:history.back()" class="btn btn-primary">المحاولة مرة أخرى</a>
                <a href="index.html" class="btn btn-outline">العودة إلى الرئيسية</a>
            </div>
            
            <div class="contact-methods">
                <a href="https://wa.me/212711979716" class="btn whatsapp-btn">
                    التواصل عبر واتساب
                    <svg style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="white">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488"/>
                    </svg>
                </a>
                
                <div class="contact-item">
                    <strong>هاتف:</strong>
                    <span>0711979716</span>
                </div>
                
                <div class="contact-item">
                    <strong>البريد الإلكتروني:</strong>
                    <span>info.tarkiba@gmail.com</span>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>© 2025  Tarkiba - جميع الحقوق محفوظة</p>
            <p>نعتذر للإزعاج ونشكرك على صبرك</p>
        </div>
    </div>
</body>
</html>