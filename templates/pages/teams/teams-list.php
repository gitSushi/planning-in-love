<main class="main-body pt-6 py-2 md:mx-0 m-0 h-full from-to-gradient">
    <h1
        class="pil-h1 text-center text-3xl md:text-4xl lg:text-5xl md:text-3xl font-black text-yellow-700">
        TEAMS LIST
    </h1>
    <div
        class="hidden md:block h-0.5 w-3/5 mx-auto my-4 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 shadow">
    </div>
    <section class="flex flex-wrap justify-center mt-6">
        <?php
        foreach ($teams as $team) {
        ?>
        <a class="block w-full mx-2 my-1 px-2 py-1 bg-white shadow rounded-md border-2 border-transparent hover:border-yellow-500 cursor-pointer"
            href="index.php?pages=teams/team-detail&id=<? echo htmlspecialchars($team->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
            <div class="flex items-center">
                <img class="object-cover w-20 h-10 rounded mr-4 md:mr-8"
                    src="<? echo htmlspecialchars($team->getLogo(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                    alt="projekt logo <? echo htmlspecialchars($team->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
                <div class="w-full flex flex-col md:flex-row">
                    <p class="w-1/4 font-black mr-4 md:mr-8">
                        <? echo htmlspecialchars($team->getName(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                    <p class="md:text-lg">
                        <? echo htmlspecialchars($team->getSlogan(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                </div>
            </div>
        </a>
        <?php
        }
        ?>
    </section>
</main>