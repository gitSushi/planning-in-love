<main class="main-body pt-6 py-2 md:mx-0 m-0 h-full from-to-gradient">
    <h1
        class="pil-h1 text-center text-3xl md:text-4xl lg:text-5xl md:text-3xl font-black text-yellow-700">
        USERS LIST
    </h1>
    <div
        class="hidden md:block h-0.5 w-3/5 mx-auto my-4 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 shadow">
    </div>
    <section class="m-2 p-2 flex flex-col items-center mt-6">
        <?php
        foreach ($users as $user) {
        ?>
        <a class="block w-full mx-2 my-1 px-2 py-1 bg-white shadow rounded-md border-2 border-transparent hover:border-yellow-500 cursor-pointer"
            href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($user->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
            <div class="flex items-center">
                <img class="object-cover w-8 h-8 rounded-full mr-2 md:mr-8"
                    src="<? echo htmlspecialchars($user->getLogo(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                    alt="projekt logo <? echo htmlspecialchars($user->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
                <div class="flex flex-col md:flex-row">
                    <p class="font-black">
                        <? echo htmlspecialchars($user->getUsername(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                    <p class="text-sm md:text-lg md:ml-6">
                        <? echo htmlspecialchars($user->getEmail(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                </div>
            </div>
        </a>
        <?php
        }
        ?>
    </section>
</main>