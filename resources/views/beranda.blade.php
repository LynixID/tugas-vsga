<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="asset/img/loggo-web.png" type="image/png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>E-Book Library</title>
  </head>

  <body>
    <!-- HERO SECTION -->
    <div class="bg-white">
      <header class="bg-[#FCF8F1] bg-opacity-30">
        <div class="px-4 mx-auto sm:px-6 lg:px-8">
          <div class="flex items-center justify-between h-16 lg:h-20">
            <div class="flex-shrink-0">
              <a href="#" title="" class="flex">
                <img
                  class="w-auto h-8"
                  src="https://cdn.rareblocks.xyz/collection/celebration/images/logo.svg"
                  alt=""
                />
              </a>
            </div>

            <button
              type="button"
              class="inline-flex p-2 text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 hover:bg-gray-100"
            >
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg
                class="block w-6 h-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 8h16M4 16h16"
                ></path>
              </svg>

              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg
                class="hidden w-6 h-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg>
            </button>

            <div
              class="hidden lg:flex lg:items-center lg:justify-center lg:space-x-10"
            >
              <a
                href="#"
                title=""
                class="text-base text-black transition-all duration-200 hover:text-opacity-80"
              >
                Beranda
              </a>

              <a
                href="#"
                title=""
                class="text-base text-black transition-all duration-200 hover:text-opacity-80"
              >
                Teratas
              </a>

              <a
                href="#"
                title=""
                class="text-base text-black transition-all duration-200 hover:text-opacity-80"
              >
                E-Book
              </a>

              <form class="max-w-md mx-auto">
                <label
                  for="default-search"
                  class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
                  >Search</label
                >
                <div class="relative">
                  <div
                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
                  >
                    <svg
                      class="w-4 h-4 text-gray-500 dark:text-gray-400"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 20 20"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                      />
                    </svg>
                  </div>
                  <input
                    type="search"
                    id="default-search"
                    class="block w-full py-2 px-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Cari E-Book..."
                    required
                  />
                  <!-- <button
                    type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >
                    Search
                  </button> -->
                </div>
              </form>
            </div>

            <a
              href="#"
              title=""
              class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-base transition-all duration-200 hover:bg-yellow-300 hover:text-black focus:text-black focus:bg-yellow-300 font-semibold text-white bg-black rounded-full"
              role="button"
            >
              Masuk
            </a>
          </div>
        </div>
      </header>

      <section
        class="bg-[#ggg] bg-center bg-cover bg-opacity-30 py-10 sm:py-6 lg:py-8"
      >
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
            <div>
              <p
                class="text-base font-semibold tracking-wider text-blue-600 uppercase"
              >
                Platform peminjaman E-Book
              </p>
              <h1
                class="mt-4 text-4xl font-bold text-black lg:mt-8 sm:text-6xl xl:text-8xl"
              >
                Temukan <br />
                E-Book Favoritmu
              </h1>
              <p class="mt-4 text-base text-black lg:mt-8 sm:text-xl">
                Pinjam kapanpun dan dimanapun.
              </p>

              <a
                href="#"
                title=""
                class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full lg:mt-16 hover:bg-yellow-400 focus:bg-yellow-400"
                role="button"
              >
                Mulai Jelajahi...
                <svg
                  class="w-6 h-6 ml-8 -mr-2"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                </svg>
              </a>
            </div>

            <div>
              <img
                class="w-full lg:scale-[1.3]"
                src="asset/img/hero2.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- HERO SECTION END -->
  </body>
</html>
