<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <nav class="bg-indigo-600 text-white p-4 shadow-md flex justify-between items-center">
        <a href="/" class="text-xl font-bold">PortfolioGen</a>
        <div>
            <a href="/" class="mr-4 hover:underline">Home</a>
            <a href="/portfolios" class="hover:underline">Manage Portfolios</a>
        </div>
    </nav>

    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-4">
        &copy; Portfolio Generator System
    </footer>
</body>
</html>