<?php
if (isset($_COOKIE['user'])) {
?>
<div class="flex flex-col md:flex-row md:justify-between px-4">
    <ul class="self-center flex text-yellow-700 text-xs md:text-base">
        <li class="mx-4 text-yellow-400 hover:text-yellow-200"><a
                href="index.php">DASHBOARD</a></li>
        <li class="mx-4 dropdown inline-block relative">
            <span class="dropdown block hover:text-yellow-500">PROJEKTS</span>
            <ul
                class="dropdown-menu absolute hidden bg-black text-yellow-700 pt-1 z-10">
                <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2"
                        href="index.php?pages=projekts/projekts-list">projekts
                        list</a></li>
                <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2"
                        href="index.php?pages=projekts/my-projekts">my
                        projekts</a></li>
            </ul>
        </li>
        <li class="mx-4 dropdown inline-block relative">
            <span class="dropdown block hover:text-yellow-500">USERS</span>
            <ul
                class="dropdown-menu absolute hidden bg-black text-yellow-700 pt-1 z-10">
                <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2"
                        href="index.php?pages=users/users-list">users list</a>
                </li>
                <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2"
                        href="index.php?pages=users/my-users">my friends</a>
                </li>
            </ul>
        </li>
        <li class="mx-4 dropdown inline-block relative">
            <span class="dropdown block hover:text-yellow-500">TEAMS</span>
            <ul
                class="dropdown-menu absolute hidden bg-black text-yellow-700 pt-1 z-10">
                <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2"
                        href="index.php?pages=teams/teams-list">teams list</a>
                </li>
                <li><a class="block mt-4 lg:inline-block lg:mt-0 hover:text-yellow-500 px-4 py-2 rounded mr-2"
                        href="index.php?pages=teams/my-teams">my teams</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="md:w-1/2 w-full">
        <form
            class="relative md:w-1/2 w-full md:float-right my-4 md:mt-0 md:mb-2">
            <svg width="20" height="20" fill="currentColor"
                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-yellow-700">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
            </svg>
            <input
                class="focus:border-yellow-700 focus:ring-1 focus:ring-yellow-700 focus:outline-none w-full text-sm text-black placeholder-gray-500 border-2 border-yellow-700 rounded-md py-1.5 pl-10"
                type="text" aria-label="Filter projects"
                placeholder="Filter projects" />
        </form>
        <!-- user logo ? -->
    </div>
</div>
<?php
}
?>