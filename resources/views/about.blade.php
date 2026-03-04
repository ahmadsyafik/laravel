<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-2xl p-10 max-w-xl text-center">
        <h1 class="text-3xl font-bold text-indigo-600 mb-4">
            About This Project
        </h1>

        <p class="text-gray-600 mb-6">
            Ini adalah project Laravel pertama saya yang menggunakan 
            Git Branch Workflow dan Blade Template.
        </p>

        <div class="flex justify-center gap-4">
            <a href="/" 
               class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
               Home
            </a>

            <a href="https://github.com/ahmadsyafik/laravel" target="_blank"
               class="border border-indigo-600 text-indigo-600 px-5 py-2 rounded-lg hover:bg-indigo-50 transition">
               GitHub
            </a>
        </div>
    </div>

</body>
</html>