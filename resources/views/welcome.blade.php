<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex items-center justify-center h-screen">
    <div class="bg-white rounded-lg shadow-xl p-8 max-w-md w-full">
        <h1 class="text-4xl font-semibold text-center text-indigo-600 mb-6">Welkom</h1>
        <p class="text-lg text-gray-700 text-center mb-6">Je bent succesvol ingelogd. Klik hieronder om naar de leverancierspagina te gaan:</p>
        <div class="text-center">
            <a href="{{ route('leveranciers.index') }}" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-md text-xl font-medium hover:bg-indigo-700 transition duration-300 ease-in-out">
                Ga naar Leveranciers
            </a>
        </div>
    </div>
</body>
</html>
