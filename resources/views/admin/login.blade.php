<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Wedding Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm p-6 bg-white rounded-2xl shadow-xl border border-slate-100">
        <h2 class="text-xl font-bold text-slate-800 text-center mb-1">Admin Panel</h2>
        <p class="text-xs text-slate-400 text-center mb-6">Undangan Digital Edi & Husna</p>

        @if($errors->has('error'))
            <div class="mb-4 p-3 bg-red-50 text-red-600 text-xs rounded-lg text-center font-medium border border-red-100">
                {{ $errors->first('error') }}
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST" class="space-y-4 text-xs">
            @csrf
            <div>
                <label class="block text-slate-600 font-semibold mb-1">Username</label>
                <input type="text" name="username" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:outline-none focus:border-indigo-500 transition">
            </div>
            <div>
                <label class="block text-slate-600 font-semibold mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:outline-none focus:border-indigo-500 transition">
            </div>
            <button type="submit" class="w-full bg-slate-800 text-white font-semibold py-3 rounded-lg hover:bg-slate-900 transition mt-2">Masuk ke Dashboard</button>
        </form>
    </div>
</body>
</html>