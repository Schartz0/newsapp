<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-purple-500 to-blue-500 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h1 class="text-2xl font-semibold text-center mb-6">Login</h1>
        <form method="POST" action="{{ route('login.authenticate') }}">
            @csrf
            @if ($errors->any())
                <div class="mb-4">
                    <ul class="text-red-500">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="mb-4 text-green-500">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="mb-4 text-red-500">
                    {{ session('error') }}
                </div>
            @endif
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <p class="text-gray-600">Don't have an account? <a href="{{ route('register.index') }}" class="text-blue-500 hover:underline">Register Now</a></p>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-500 text-white rounded-md p-2 hover:bg-blue-600 transition duration-200">Login</button>
            </div>
        </form>
    </div>
</body>
</html>