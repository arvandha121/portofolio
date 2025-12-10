<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi OTP</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: linear-gradient(135deg, #e0e7ff, #f8fafc);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl p-8 border border-gray-200">

        <!-- Header -->
        <div class="text-center mb-6">
            <h2 class="text-3xl font-extrabold text-gray-800">Verifikasi OTP</h2>
            <p class="text-gray-500 text-sm mt-1">
                Masukkan kode verifikasi yang telah dikirim ke email Anda.
            </p>
        </div>

        <!-- Alerts -->
        @if (session('error'))
            <div class="bg-red-100 border border-red-300 text-red-700 p-3 rounded mb-4 text-sm">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('verify.otp') }}" class="space-y-6">
            @csrf

            <!-- Input OTP -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Kode OTP</label>
                <input type="text" maxlength="6" name="otp" required
                       class="w-full border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                       rounded-xl px-4 py-3 text-gray-700 placeholder-gray-400 text-center 
                       text-xl tracking-[0.4em] font-semibold bg-gray-50">
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-xl 
                       font-semibold text-lg transition-all shadow-md hover:shadow-lg">
                Verifikasi
            </button>
        </form>

        <!-- Resend -->
        <div class="text-center mt-6 text-sm text-gray-500">
            Tidak menerima kode?
            <form action="{{ route('otp.resend') }}" method="GET" class="inline">
                <button id="resendBtn" type="submit"
                    class="text-blue-600 font-semibold hover:underline disabled:opacity-40 disabled:cursor-not-allowed"
                    disabled>
                    Kirim ulang dalam <span id="timer">300</span>d
                </button>
            </form>
        </div>
    </div>

    <!-- External JS -->
    <script src="{{ asset('js/otp-timer.js') }}"></script>

</body>
</html>
