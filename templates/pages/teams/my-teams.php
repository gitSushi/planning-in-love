<main
    class="main-body pt-6 py-2 md:mx-0 m-0 h-full bg-gradient-to-br from-yellow-200 via-red-300 to-pink-300">
    <h1
        class="pil-h1 text-center text-3xl md:text-4xl lg:text-5xl md:text-3xl font-black text-yellow-700">
        TEAMS LIST
    </h1>
    <div
        class="hidden md:block h-0.5 w-3/5 mx-auto my-4 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 shadow">
    </div>
    <section class="flex flex-wrap justify-center mt-6">
        <?php
        if (count($teams) == 0) {
        ?>
        <p>Vous n'êtes pas affecté à de teams</p>
        <?php
        } else {
            foreach ($teams as $team) {
            ?>
        <a class="block"
            href="index.php?pages=teams/team-detail&id=<? echo htmlspecialchars($team['id'], ENT_QUOTES, null, false) ?>">
            <article
                class="w-full resp-md-w m-2 p-2 bg-white shadow-lg rounded-md border-2 border-transparent hover:border-yellow-500 cursor-pointer">
                <div class="grid grid-cols-3 grid-rows-2">
                    <div class="">
                        <img class="object-contain h-12 rounded"
                            src="<? echo htmlspecialchars($team['logo'], ENT_QUOTES, null, false) ?>"
                            alt="projekt logo <? echo htmlspecialchars($team['id'], ENT_QUOTES, null, false) ?>" />
                    </div>
                    <div class="col-span-2 flex justify-center items-center">
                        <span class="font-black">
                            <? echo htmlspecialchars($team['name'], ENT_QUOTES, null, false) ?>
                        </span>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="md:text-lg">
                            <? echo htmlspecialchars($team['slogan'], ENT_QUOTES, null, false) ?>
                        </p>
                    </div>
                </div>
            </article>
        </a>
        <?php
            }
        }
        ?>
    </section>
</main>