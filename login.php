<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="asset/img/loggo-web.png" type="image/png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Menu</title>
</head>

<body>
    <section class="bg-white p-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
            <div class="flex items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">Masuk untuk meminjam</h2>
                    <p class="mt-2 text-base text-gray-600">Tidak mempunyai akun? <a href="#" title="" class="font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 hover:underline focus:text-blue-700">Buat
                            akun gratis</a></p>

                    <form action="#" method="POST" class="mt-8">
                        <div class="space-y-5">
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Email
                                </label>
                                <div class="mt-2.5">
                                    <input type="email" name="" id="" placeholder="example@gmail.com" class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600" />
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="" class="text-base font-medium text-gray-900"> Password </label>

                                    <a href="#" title="" class="text-sm font-medium text-blue-600 hover:underline hover:text-blue-700 focus:text-blue-700">
                                        Lupa password? </a>
                                </div>
                                <div class="mt-2.5">
                                    <input type="password" name="" id="" placeholder="*********" class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600" />
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700">Log
                                    in</button>
                            </div>
                        </div>
                    </form>

                    <div class="mt-3 space-y-3">
                        <button type="button" class="relative inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 rounded-md hover:bg-gray-100 focus:bg-gray-100 hover:text-black focus:text-black focus:outline-none">
                            <div class="absolute inset-y-0 left-0 p-4">
                                <svg class="w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z">
                                    </path>
                                </svg>
                            </div>
                            Masuk dengan Google
                        </button>

                        <button type="button" class="relative inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 rounded-md hover:bg-gray-100 focus:bg-gray-100 hover:text-black focus:text-black focus:outline-none">
                            <div class="absolute inset-y-0 left-0 p-4">
                                <svg class="w-6 h-6 text-[#2563EB]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                                    </path>
                                </svg>
                            </div>
                            Masuk dengan Facebook
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center px-4 py-10 sm:py-16 lg:py-24 sm:px-6 lg:px-8">
                <div class="bg-[url('asset/img/hero-login1.jpg')] w-full h-full bg-contain bg-no-repeat bg-center scale-125">
                </div>
            </div>
        </div>
    </section>

    <div class="absolute top-10 left-14 py-1 px-3 border-b-black border-l-black rounded-full"><a href="index.php">Kembali</a></div>

</body>

</html>