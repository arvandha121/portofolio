<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Login</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .email-wrapper {
            max-width: 480px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .title {
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 20px;
        }

        .otp-box {
            background: #f0f9ff;
            border: 2px dashed #38bdf8;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            margin: 25px 0;
        }

        .otp {
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 8px;
            color: #0ea5e9;
        }

        .text {
            font-size: 15px;
            color: #374151;
            line-height: 1.6;
            text-align: center;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #6b7280;
            text-align: center;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 22px;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
        }

    </style>
</head>

<body>
    <div class="email-wrapper">

        <h2 class="title">Kode Verifikasi Anda</h2>

        <p class="text">
            Halo! Berikut adalah kode verifikasi untuk login akun Anda.
        </p>

        <div class="otp-box">
            <div class="otp">{{ $code }}</div>
        </div>

        <p class="text">
            Kode ini berlaku selama <strong>5 menit</strong>.
            <br>Jangan bagikan kepada siapapun.
        </p>

        <p class="text">
            Jika Anda tidak merasa melakukan login, abaikan email ini.
        </p>

        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }} — Sistem Verifikasi Aman
        </div>

    </div>
</body>
</html>
