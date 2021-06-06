<main class="main-body pt-2 md:pt-6 py-2 md:mx-0 m-0 h-full from-to-gradient">
    <div class="flex justify-between m-2">
        <div class="w-full bg-cover bg-center flex flex-col items-center justify-between"
            style="background-image:url('<? echo htmlspecialchars($team->getLogo(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>')">
            <h2
                class="text-outline text-outline-black text-4xl font-black md:text-8xl mb-12 md:mb-36">
                <? echo htmlspecialchars($team->getName(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
            </h2>
            <p class="md:text-2xl my-4 md:mt-8">
                <? echo htmlspecialchars($team->getSlogan(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
            </p>
        </div>
    </div>
    <article class="mt-4 mb-2 mx-2 p-2 bg-white shadow-lg rounded-md">
        <?php
        if (count($members) > 0) {
        ?>
        <p class="mt-2 mb-4 pl-4 text-lg font-medium">Les membres de la team :
        </p>
        <ul class="pb-4 flex justify-evenly">
            <?php
                foreach ($members as $member) {
                ?>
            <li class="ml-2 cursor-pointer">
                <a
                    href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($member->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
                    <img class="modal-open object-cover h-12 w-12 rounded-full"
                        src="<? echo htmlspecialchars($member->getLogo(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                        alt="member logo <? echo htmlspecialchars($member->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                        title="<? echo htmlspecialchars($member->getUsername(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
                </a>
            </li>
            <?php
                }
                ?>
        </ul>
        <?php
        } else {
        ?>
        <p class="mt-2 mb-4 pl-4 text-lg font-medium">Aucun membre affecté à
            cette team</p>
        <?php
        }
        ?>
    </article>
    <div class="flex justify-between m-2">
        <div class="hidden md:block md:w-1/3">

            <img class="sticky top-0 mt-2 rounded-md"
                src="assets/images/postman/tumblr_owy7i3iPOq1u2vtwoo1_1280.jpg"
                alt="postman" />
            <h3
                class="sticky top-0 text-outline text-outline-white text-6xl font-black">
                MESSAGES
            </h3>
        </div>
        <section
            class="block w-full md:w-2/3 my-2 ml-2 p-2 bg-white shadow-lg rounded-md">
            <?php
            if (count($messages) > 0) {
                // 0 => sending.id, 1 => sending.username, 2 => sending.logo,
                // 3 => msg.header, 4 => msg.body, 5 => msg.send_date,
                // 6 => receiving.id, 7 => receiving.username, 8 => receiving.logo
                foreach ($messages as $msg) {
            ?>
            <div
                class="m-4 mb-6 p-2 pb-4 border-b-2 border-gray-200 hover:bg-gray-100">
                <div
                    class="flex flex-col md:flex-row items-center md:justify-evenly  bg-green-50">
                    <a class="text-lg font-medium msg-txt text-gray-700 hover:text-yellow-500"
                        href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($msg[0], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
                        <?php echo htmlspecialchars($msg[1], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>
                        <span class="text-green-300 hover:text-green-300">
                            >>></span>
                    </a>
                    <div>
                        <?php
                                $end = new DateTime($msg[5]);
                                echo "<span class=\"text-gray-500 text-lg font-semibold\"> {$end->format('M d, Y')}</span>";
                                ?>
                    </div>
                    <a class="text-lg font-medium msg-txt text-gray-700 hover:text-yellow-500"
                        href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($msg[6], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
                        <span class="text-green-300 hover:text-green-300">>>>
                        </span>
                        <?php echo htmlspecialchars($msg[7], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>
                    </a>

                </div>
                <!-- <svg class="h-10 m-auto" viewBox="0 0 600 600">
                    <path
                        d="M200,50 h200 v250 h100 l-200,250 l-200,-250 h100z" />
                </svg> -->
                <div class="md:ml-6 grid grid-rows-2">
                    <p class="mt-2 font-semibold text-green-900 underline"
                        style="text-indent: 2em;">
                        <? echo htmlspecialchars($msg[3], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
                    <p class="text-lg">
                        <? echo htmlspecialchars($msg[4], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                    </p>
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