
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="u6jUgrwUe8MXJaeE3euSHobKypsaUFix8mfyWofF">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link rel="preload" as="style" href="http://127.0.0.1:8001/build/assets/app-QruIybmb.css" /><link rel="modulepreload" href="http://127.0.0.1:8001/build/assets/app-vZDQhnJA.js" /><link rel="stylesheet" href="http://127.0.0.1:8001/build/assets/app-QruIybmb.css" /><script type="module" src="http://127.0.0.1:8001/build/assets/app-vZDQhnJA.js"></script>    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">    
                    <img src="{{asset('images/myLogo.png')}}" class="w-40 h-20 fill-current text-gray-500 rounded-circle">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <!-- Session Status -->
    
    <form method="POST" action="http://127.0.0.1:8001/login">
        <input type="hidden" name="_token" value="u6jUgrwUe8MXJaeE3euSHobKypsaUFix8mfyWofF" autocomplete="off">
        <!-- Email Address -->
        <div>
            <label class="block font-medium text-sm text-gray-700" for="email">
    Email
</label>
            <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required" autofocus="autofocus" autocomplete="username">
                    </div>

        <!-- Password -->
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" for="password">
    Password
</label>

            <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="current-password">

                    </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">Remember me</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="http://127.0.0.1:8001/forgot-password">
                    Forgot your password?
                </a>
            
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ms-3">
    Log in
</button>
        </div>
    </form>
            </div>
        </div>
    </body>
</html>