<main
    class="main-body pt-2 md:pt-6 py-2 md:mx-0 m-0 h-full bg-gradient-to-br from-yellow-200 via-red-300 to-pink-300">
    <div class="flex justify-between m-2">
        <div class="w-full bg-cover bg-center flex flex-col items-center justify-between"
            style="background-image:url('<? echo htmlspecialchars($team['logo'], ENT_QUOTES, null, false) ?>')">
            <h2
                class="text-outline text-4xl font-black md:text-8xl mb-12 md:mb-36">
                <? echo htmlspecialchars($team['name'], ENT_QUOTES, null, false) ?>
            </h2>
            <p class="md:text-2xl my-4 md:mt-8">
                <? echo htmlspecialchars($team['slogan'], ENT_QUOTES, null, false) ?>
            </p>
        </div>
    </div>
    <div class="flex justify-between m-2">
        <section class="block w-full m-2 p-2 bg-white shadow-lg rounded-md">
            <?php
            if (count($messages) > 0) {
                // 0 => sending.id, 1 => sending.username, 2 => sending.logo,
                // 3 => msg.header, 4 => msg.body, 5 => msg.send_date,
                // 6 => receiving.id, 7 => receiving.username, 8 => receiving.logo
                foreach ($messages as $msg) {
            ?>
            <div
                class="mx-4 mt-4 pb-2 border-b-2 border-gray-200 hover:bg-gray-50">
                <div class="flex">
                    <div class="grid grid-rows-3 grid-cols-2">
                        <img class="m-auto object-cover w-12 h-12 rounded-full"
                            src="<? echo htmlspecialchars($msg[2], ENT_QUOTES, null, false) ?>"
                            alt="user logo <? echo htmlspecialchars($msg[0], ENT_QUOTES, null, false) ?>" />
                        <a class="font-semibold"
                            href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($msg[0], ENT_QUOTES, null, false) ?>">
                            <?php echo htmlspecialchars($msg[1], ENT_QUOTES, null, false); ?>
                        </a>
                        <svg class="h-10 m-auto" viewBox="0 0 600 600">
                            <path
                                d="M200,50 h200 v250 h100 l-200,250 l-200,-250 h100z" />
                        </svg>
                        <div>
                            <?php
                                    $end = new DateTime($msg[5]);
                                    echo "<span class=\"text-gray-500 text-sm\"> {$end->format('M d, Y')}</span>";
                                    ?>
                        </div>
                        <img class="m-auto object-cover w-12 h-12 rounded-full"
                            src="<? echo htmlspecialchars($msg[8], ENT_QUOTES, null, false) ?>"
                            alt="user logo <? echo htmlspecialchars($msg[6], ENT_QUOTES, null, false) ?>" />
                        <a class="font-semibold"
                            href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($msg[6], ENT_QUOTES, null, false) ?>">
                            <?php echo htmlspecialchars($msg[7], ENT_QUOTES, null, false); ?>
                        </a>
                    </div>
                    <div class="ml-6 grid grid-rows-2">
                        <div class="flex items-center">
                            <p class="font-bold">
                                <? echo htmlspecialchars($msg[3], ENT_QUOTES, null, false) ?>
                            </p>
                        </div>
                        <p>
                            <? echo htmlspecialchars($msg[4], ENT_QUOTES, null, false) ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                ?>
            <p>Pas de message dans votre inbox</p>
            <?php
            }
            ?>
        </section>
    </div>
</main>