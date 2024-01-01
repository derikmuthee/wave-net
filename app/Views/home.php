<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

  <header>
    
<nav class="flex items-center justify-between flex-wrap bg-slate-900 p-4">
<div class="flex items-center flex-shrink-0 text-white mr-6">
<svg alt="Wave Icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 00-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
</svg>
<span class="font-semibold font-mono text-xl tracking-tight italic font-bold">The Wave Network </span>

<a href="<?php echo site_url('/register') ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded  absolute right-0">
Create Account
</a>

</nav>
</header>
</div>

<div class="w-full bg-center bg-cover h-full bg-no-repeat"
    style="background-image: url(assests/images/tech.jpg);">    
   
    <div class="flex items-center h-full justify-center w-full bg-gray-900 bg-opacity-50 py-20 ">
    
    <form action="<?= site_url('login') ?>" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="text-center">Login to get connected</div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email" required>
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************" required>
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Login">
            Sign In
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
            Forgot Password?
        </a>
    </div>
</form>
</div>
</div>
 

<div class="text-center italic text-lime-950 mt-2 font-fomo"><p>Enjoy our packages and awesome offers</p></div>
<div class="text-center"><p>Create an account to get access to internet at low cost.</p></div>
</div>

<footer class="flex items-center justify-center flex-wrap bg-slate-900 fixed inset-x-0 bottom-0">
 <div class="p-4 text-center text-white dark:text-neutral-200">
    © 2023 Copyright:Byzantine
  </div>
</footer>

<script src="https://cdn.tailwindcss.com"></script>
  </body>

</html>
