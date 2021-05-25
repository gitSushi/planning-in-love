<!-- <nav class="relative col-start-1 col-end-4 px-4 sm:px-6 md:px-8 lg:px-0 lg:col-start-2 lg:col-end-4 xl:col-end-3 row-start-1 row-end-2 xl:row-end-3 pb-8 lg:pb-11 xl:pb-0">
    <div class="flex overflow-auto py-0.5 pl-0.5 -my-0.5 -mx-4 sm:-mx-6 md:-mx-8 xl:-ml-4 xl:mr-0">
        <ul class="whitespace-nowrap mx-auto xl:mx-0 px-4 sm:px-6 md:px-8 xl:px-0 grid gap-2 sm:gap-12" style="grid-template-columns: repeat(3, minmax(0px, 1fr));">
            <li class="relative"><button type="button" class="block w-full relative z-10 px-4 py-1 leading-6 sm:text-xl font-semibold focus:outline-none transition-colors duration-300 focus-visible:ring-2 focus-visible:ring-offset-white focus-visible:ring-gray-300 hover:text-gray-900 rounded-xl text-gray-400">
                    <div class="flex flex-col items-center py-1"><a href="index.php?action=teams">
                            Teams
                        </a></div>
                </button></li>
            <li class="relative"><button type="button" class="block w-full relative z-10 px-4 py-1 leading-6 sm:text-xl font-semibold focus:outline-none transition-colors duration-300 focus-visible:ring-2 focus-visible:ring-offset-white focus-visible:ring-gray-300 hover:text-gray-900 rounded-xl text-gray-400">
                    <div class="flex flex-col items-center py-1"><a href="index.php?action=projekts">
                            Projekts
                        </a></div>
                </button></li>
        </ul>
    </div>
</nav> -->
<!-- nav menu -->
<nav class="bg-black pt-2 md:pt-10">
    <div class="flex justify-center mb-4 md:mb-0">
        <!-- logo link to homepage -->
        <a href="index.php">
            <div class="flex flex-col items-center">
                <img class="hidden lg:block object-contain object-bottom h-20" src="../assets/images/1_rmq7bd3GFjcwfXtkrBQaPQ.png" />
                <span class="font-mono text-2xl md:text-4xl text-gray-700 font-black -mb-2">Planning</span>
                <span class="font-sans text-sm text-yellow-600 font-bold">IN LOVE</span>
            </div>
        </a>
    </div>

    <div class="flex flex-col md:flex-row md:justify-between px-4">
        <ul class="self-center flex text-yellow-700 text-xs md:text-base">
            <li class="mx-4 text-yellow-400 hover:text-yellow-200"><a href="index.php">DASHBOARD</a></li>
            <li class="mx-4"><a class="hover:text-yellow-500" href="index.php?action=projekts">PROJEKTS</a></li>
            <li class="mx-4"><a class="hover:text-yellow-500" href="index.php?action=planning">PLANNING</a></li>
            <li class="mx-4"><a class="hover:text-yellow-500" href="index.php?action=teams">TEAMS</a></li>
        </ul>
        <div class="md:w-1/2 w-full">
            <form class="relative md:w-1/2 w-full md:float-right my-4 md:mt-0 md:mb-2">
                <svg width="20" height="20" fill="currentColor" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-yellow-700">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                </svg>
                <input class="focus:border-yellow-700 focus:ring-1 focus:ring-yellow-700 focus:outline-none w-full text-sm text-black placeholder-gray-500 border-2 border-yellow-700 rounded-md py-1.5 pl-10" type="text" aria-label="Filter projects" placeholder="Filter projects" />
            </form>
        </div>
    </div>
</nav>