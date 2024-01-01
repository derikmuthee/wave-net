<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
    <header>
        <nav class="flex items-center justify-between flex-wrap bg-slate-900 p-4">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <svg alt="Wave Icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 00-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <span class="font-semibold font-mono text-xl tracking-tight italic font-bold">The Wave Network </span>
            </div>
        </nav>
    </header>

 <body>
    <div class="flex flex-wrap gap-4 justify-center pt-8">
        <!-- Card 1 -->
        <div class="max-w-sm mx-auto p-6 border border-gray-200 rounded-lg shadow bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">Monthly Package @ 350 ksh</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 text-gray-400">Get unlimited connection for 30 days</p>
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Purchase Now
            </button>
        </div>

        <!-- Card 2 -->
        <div class="max-w-sm mx-auto p-6 border border-gray-200 rounded-lg shadow bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">Two Weeks Package @ 200 ksh</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 text-gray-400">Get unlimited Package for 14 days</p>
            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Purchase Now
            </button>
        </div>

        <!-- Card 3 -->
        <div class="max-w-sm mx-auto p-6 border border-gray-200 rounded-lg shadow bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">A Week's Package @ 120 ksh</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 text-gray-400 ">Get unlimited internet for one week.</p>
            <button href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Purchase Now
            </button>
        </div>

        <!-- Card 4 -->
        <div class="max-w-sm mx-auto p-6 border border-gray-200 rounded-lg shadow bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">A one day Package @25 ksh</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 text-gray-400 ">Get unlimited internet for one week.</p>
            <button href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Purchase Now
            </button>
        </div>
    </div>

    <h1 class="text-center mt-8">Welcome <?= $userData['username']; ?>!</h1>
    <p class="text-center">Email: <?= $userData['email']; ?></p>

    <!-- Display other user data as needed -->

    <p class="text-center mt-4"><a href="<?= site_url('logout'); ?>" class="text-blue-500 hover:underline">Logout</a></p>

    <footer class="flex items-center justify-center flex-wrap bg-slate-900 fixed inset-x-0 bottom-0">
        <div class="p-4 text-center text-white dark:text-neutral-200">
            © 2023 Copyright: Byzantine
        </div>
    </footer>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
