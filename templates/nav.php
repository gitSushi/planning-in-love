<!-- nav menu -->
<nav class="bg-black pt-2">
    <div class="flex justify-end">
        <a class="mr-1 bg-yellow-600 text-yellow-800 py-2 px-3 rounded-lg hover:bg-yellow-500 hover:text-yellow-200" href="http://localhost:4321/core/authentication/logging_out.php">Se déconnecter</a>
    </div>
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
            <li class="mx-4 dropdown inline-block relative">
                <span class="dropdown block hover:text-yellow-500">PROJEKTS</span>
                <ul class="dropdown-menu absolute hidden bg-black text-yellow-700 pt-1 z-10">
                    <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2" href="index.php?pages=projekts/projekts-list">projekts list</a></li>
                    <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2" href="index.php?pages=projekts/projekt-detail">projekt detail</a></li>
                </ul>
            </li>
            <li class="mx-4"><a class="hover:text-yellow-500" href="index.php?pages=planning">PLANNING</a></li>
            <li class="mx-4 dropdown inline-block relative">
                <span class="dropdown block hover:text-yellow-500">TEAMS</span>
                <ul class="dropdown-menu absolute hidden bg-black text-yellow-700 pt-1 z-10">
                    <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2" href="index.php?pages=teams/teams-list">teams list</a></li>
                    <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2" href="index.php?pages=teams/team-detail">team detail</a></li>
                </ul>
            </li>
        </ul>
        <div class="md:w-1/2 w-full">
            <form class="relative md:w-1/2 w-full md:float-right my-4 md:mt-0 md:mb-2">
                <svg width="20" height="20" fill="currentColor" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-yellow-700">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                </svg>
                <input class="focus:border-yellow-700 focus:ring-1 focus:ring-yellow-700 focus:outline-none w-full text-sm text-black placeholder-gray-500 border-2 border-yellow-700 rounded-md py-1.5 pl-10" type="text" aria-label="Filter projects" placeholder="Filter projects" />
            </form>
            <!-- user logo ? -->
        </div>
    </div>
</nav>