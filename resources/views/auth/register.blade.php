<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-green-400 to-blue-500 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-center mb-6">Create an Account</h2>
        <form id="registration-form" method="POST" action="{{ route('register.process') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Full Name</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
                <span id="email-error" class="text-red-500 text-sm"></span>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
                <span id="password-error" class="text-red-500 text-sm"></span>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Favorite News Categories</label>
                <div class="flex flex-col">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="fav_categories[]" value="nasional" class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Nasional</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="fav_categories[]" value="internasional" class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Internasional</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="fav_categories[]" value="ekonomi" class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Ekonomi</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="fav_categories[]" value="olahraga" class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Olahraga</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="fav_categories[]" value="teknologi" class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Teknologi</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="fav_categories[]" value="hiburan" class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Hiburan</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="fav_categories[]" value="gaya-hidup" class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Gaya Hidup</span>
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white rounded-md p-2 hover:bg-blue-600 transition duration-200">Register</button>
            </div>
            <p class="text-center text-gray-600">Already have an account? <a href="#" class="text-blue-500 hover:underline">Login</a></p>
        </form>
    </div>
</body>
</html>