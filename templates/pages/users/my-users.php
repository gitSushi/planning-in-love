<main class="main-body pt-6 py-2 md:mx-0 m-0 h-full from-to-gradient">
    <h1
        class="pil-h1 text-center text-3xl md:text-4xl lg:text-5xl md:text-3xl font-black text-yellow-700">
        MY FRIENDS LIST
    </h1>
    <div
        class="hidden md:block h-0.5 w-3/5 mx-auto my-4 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 shadow">
    </div>
    <section class="flex flex-wrap justify-center mt-6">
        <?php
        if (count($users) == 0) {
        ?>
        <p>Vous n'avez pas d'amis. Eteignez l'ordinateur et sortez de chez vous
            pour socialiser.</p>
        <?php
        } else {
            foreach ($users as $user) {
            ?>
        <a class="block w-full resp-md-w m-2 p-2 bg-white shadow-lg rounded-md border-2 border-transparent hover:border-yellow-500 cursor-pointer"
            href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($user->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
            <div class="grid grid-cols-3 grid-rows-2">
                <img class="object-contain h-12 rounded"
                    src="<? echo htmlspecialchars($user->getLogo(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                    alt="user logo <? echo htmlspecialchars($user->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
                <div class="col-span-2 pl-2 md:pl-0">
                    <p class="font-black">
                        <? echo htmlspecialchars($user->getUsername(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                    <p class="font-medium">
                        <? echo htmlspecialchars($user->getFirstname(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                        <? echo htmlspecialchars($user->getLastname(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                </div>
                <div class="col-span-3 flex items-center">
                    <p class="md:text-lg">
                        <? echo htmlspecialchars($user->getEmail(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                </div>
            </div>
        </a>
        <?php
            }
        }
        ?>
    </section>
</main>