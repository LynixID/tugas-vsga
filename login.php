<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Menu</title>
    <link rel="icon" href="asset/img/loggo-web.png" type="image/png" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="bg-white p-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
            <div class="flex items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">Masuk untuk meminjam</h2>
                    <p class="mt-2 text-base text-gray-600">Tidak mempunyai akun? <a href="register.php" title="" class="font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 hover:underline focus:text-blue-700">Buat akun gratis</a></p>

                    <form action="process_login.php" method="POST" class="mt-8">
                        <div class="space-y-5">
                            <div>
                                <label for="username" class="text-base font-medium text-gray-900">Username</label>
                                <div class="mt-2.5">
                                    <input type="text" name="username" id="username" placeholder="Username" class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600" required />
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password" class="text-base font-medium text-gray-900">Password</label>
                                    <a href="#" title="" class="text-sm font-medium text-blue-600 hover:underline hover:text-blue-700 focus:text-blue-700">Lupa password?</a>
                                </div>
                                <div class="mt-2.5">
                                    <input type="password" name="password" id="password" placeholder="*********" class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600" required />
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700">Log in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="flex items-center justify-center px-4 py-10 sm:py-16 lg:py-24 sm:px-6 lg:px-8">
                <div class="bg-[url('asset/img/hero-login1.jpg')] w-full h-full bg-contain bg-no-repeat bg-center scale-125"></div>
            </div>
        </div>
    </section>

    <div class="absolute top-10 left-14 py-1 px-3 border-b-black border-l-black rounded-full"><a href="index.php">Kembali</a></div>
</body>

</html>