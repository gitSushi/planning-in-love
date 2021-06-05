<main
    class="main-body pt-6 py-2 md:mx-0 m-0 h-full bg-gradient-to-br from-yellow-200 via-red-300 to-pink-300">
    <div class="flex justify-between m-2">
        <section class="block w-full m-2 p-2 bg-white shadow-lg rounded-md">
            <div class="grid grid-cols-3 grid-rows-3">
                <img class="object-contain h-12 rounded"
                    src="<? echo htmlspecialchars($user->getLogo(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                    alt="user logo <? echo htmlspecialchars($user->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
                <div class="col-span-2 flex justify-center items-center">
                    <span class="font-black">
                        <? echo htmlspecialchars($user->getUsername(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </span>
                </div>
                <div class="col-span-3 flex items-center">
                    <p class="md:text-lg">
                        <? echo htmlspecialchars($user->getEmail(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                </div>
            </div>
            <div
                class="block h-0.5 w-3/5 mx-auto my-4 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 shadow">
            </div>
            <p class="font-semibold">Envoyer un message à
                <? echo htmlspecialchars($user->getUsername(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
            </p>
            <form action="../../../core/sendMessage.php" method="post">
                <input class="hidden" type="text" name="receiver-id"
                    id="receiver-id"
                    value="<? echo htmlspecialchars($user->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
                <div class="flex flex-col items-end">
                    <div class="w-full">
                        <input
                            class="bg-white appearence-none block w-full text-yellow-800 placeholder-yellow-300 rounded-md mb-4 border border-transparent shadow-md focus:border-yellow-400 px-3 py-2 focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none"
                            type="text" name="header" id="header"
                            placeholder="Titre" maxlength="45" required />
                    </div>
                    <div class="w-full">
                        <input
                            class="bg-white appearence-none block w-full text-yellow-800 placeholder-yellow-300 rounded-md mb-4 border border-transparent shadow-md focus:border-yellow-400 px-3 py-2 focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none"
                            type="text" name="body" id="body"
                            placeholder="Votre message" maxlength="1000"
                            required />
                    </div>
                    <button
                        class="block py-2 px-3 border border-transparent rounded-md text-yellow-500 font-medium bg-black shadow-sm sm:text-sm hover:bg-yellow-600 hover:text-black focus:outline-none focus-visible:ring-2 focus-visible:ring-yellow-700 focus-visible:ring-offset-2 focus-visible:ring-offset-yellow-100"
                        type="submit">Envoyer</button>
                </div>
            </form>
            <div
                class="block h-0.5 w-3/5 mx-auto mt-4 mb-6 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 shadow">
            </div>
            <?php
            if (count($messages) > 0) {
                foreach ($messages as $msg) {
            ?>
            <div
                class="mx-4 mt-4 pb-2 border-b-2 border-gray-100 hover:bg-gray-50">
                <div class="flex">
                    <img class="object-cover w-12 h-12 rounded-full mr-4"
                        src="<? echo htmlspecialchars($msg['logo'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                        alt="user logo <? echo htmlspecialchars($msg['id'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
                    <div>
                        <p class="font-semibold">
                            <a
                                href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($msg['id'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
                                <?php echo htmlspecialchars($msg['username'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>
                            </a>
                            <?php
                                    $end = new DateTime($msg['send_date']);
                                    echo "<span class=\"text-gray-500 text-sm\"> {$end->format('M d, Y')}</span>";
                                    ?>
                        </p>
                        <div class="ml-6">
                            <p class="font-bold">
                                <? echo htmlspecialchars($msg['header'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                            </p>
                            <p>
                                <? echo htmlspecialchars($msg['body'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                            </p>
                        </div>
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