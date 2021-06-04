<main class="main-body pt-6 py-2 md:mx-0 m-0 h-full from-to-gradient">
    <h1
        class="pil-h1 text-center text-3xl md:text-4xl lg:text-5xl md:text-3xl font-black text-yellow-700">
        PROJEKTS LIST
    </h1>
    <div
        class="hidden md:block h-0.5 w-3/5 mx-auto my-4 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 shadow">
    </div>
    <section class="flex flex-wrap justify-center mt-6">
        <?php
        foreach ($projects as $project) {
        ?>
        <a class="block w-full resp-md-w m-2 p-2 bg-white shadow-lg rounded-md border-2 border-transparent hover:border-yellow-500 cursor-pointer"
            href="index.php?pages=projekts/projekt-detail&id=<? echo htmlspecialchars($project['project_id'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
            <div class="grid grid-cols-3 grid-rows-3">
                <img class="object-contain h-12 rounded"
                    src="<? echo htmlspecialchars($project['logo'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                    alt="projekt logo <? echo htmlspecialchars($project['project_id'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
                <div class="col-span-2 flex justify-center items-center">
                    <span class="font-black">
                        <? echo htmlspecialchars($project['project_name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </span>
                </div>
                <div class="col-span-3 flex items-center">
                    <p class="md:text-lg">
                        <? echo htmlspecialchars($project['description'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                </div>
                <div class="col-start-2 col-end-4 flex justify-end items-end">
                    <div class="pb-2 pr-4">
                        <?php
                            $start = new DateTime($project['start_date']);
                            $end = new DateTime($project['end_date']);
                            echo "<p class=\"text-gray-500 text-sm\">Du {$start->format('M d, Y')} au {$end->format('M d, Y')}</p>";
                            ?>
                    </div>
                </div>
            </div>
        </a>
        <?php
        }
        ?>
    </section>
</main>