<main class="main-body pt-6 py-2 md:mx-0 m-0 h-full from-to-gradient">
    <h1
        class="pil-h1 text-center text-3xl md:text-4xl lg:text-5xl md:text-3xl font-black text-yellow-700">
        USERS LIST
    </h1>
    <div
        class="hidden md:block h-0.5 w-3/5 mx-auto my-4 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 shadow">
    </div>
    <section class="flex flex-wrap justify-center mt-6">
        <?php
        foreach ($users as $user) {
        ?>
        <a class="block w-full resp-md-w m-2 p-2 bg-white shadow-lg rounded-md border-2 border-transparent hover:border-yellow-500 cursor-pointer"
            href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($user['id'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
            <div class="grid grid-cols-3 grid-rows-2">
                <img class="object-cover w-12 h-12 rounded-full"
                    src="<? echo htmlspecialchars($user['logo'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                    alt="projekt logo <? echo htmlspecialchars($user['id'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
                <div class="col-span-2 flex justify-center items-center">
                    <span class="font-black">
                        <? echo htmlspecialchars($user['username'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </span>
                </div>
                <div class="col-span-3 flex items-center">
                    <p class="md:text-lg">
                        <? echo htmlspecialchars($user['email'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                </div>
            </div>
        </a>
        <?php
        }
        ?>
    </section>
</main>