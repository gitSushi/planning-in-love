<main class="main-body pt-6 py-2 md:mx-0 m-0 h-full from-to-gradient">
    <div class="flex justify-between m-2">
        <h2 class="text-lg">
            Projekt :
            <span class="font-black">
                <? echo htmlspecialchars($projekt->getProjektName(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
            </span>
        </h2>
        <div>
            <p>Nom de la team associée : <span class="font-bold">
                    <? echo htmlspecialchars($projekt->getTeam()->getName(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')
                    ?>
                </span></p>
            <p>Utilisateurs liés au projekt :</p>
            <?php
            if (count($members) > 0) {
            ?>
            <ul class="flex">
                <?php
                    foreach ($members as $member) {
                    ?>
                <li class="ml-2 cursor-pointer">
                    <img data-modal="modal-<? echo htmlspecialchars($member->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                        class="modal-open object-cover h-8 w-8 rounded-full"
                        src="<? echo htmlspecialchars($member->getLogo(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                        alt="member logo <? echo htmlspecialchars($member->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                        title="<? echo htmlspecialchars($member->getFirstname(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />

                    <!--Modal-->
                    <div id="modal-<? echo htmlspecialchars($member->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                        class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center cursor-default">
                        <!-- Entoure ça -->
                        <div
                            class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50">
                        </div>

                        <div
                            class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                            <!-- Add margin if you want to see some of the overlay behind the modal-->
                            <div class="modal-content py-4 text-left px-6">
                                <!--Title-->
                                <div
                                    class="flex justify-between items-center pb-3">
                                    <a class="text-2xl font-bold hover:text-yellow-500"
                                        href="index.php?pages=users/user-detail&id=<? echo htmlspecialchars($member->getId(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
                                        <?php echo htmlspecialchars($member->getFirstname(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>
                                    </a>
                                    <!-- <div
                                        class="modal-close cursor-pointer z-50">
                                        <svg class="fill-current text-black"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18" height="18"
                                            viewBox="0 0 18 18">
                                            <path
                                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                            </path>
                                        </svg>
                                    </div> -->

                                </div>

                                <!--Body-->
                                <p>
                                    <? echo htmlspecialchars($member->getFirstname(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                                    <? echo htmlspecialchars($member->getLastname(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                                </p>
                                <p>
                                    <? echo htmlspecialchars($member->getEmail(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>
                                </p>

                            </div>
                        </div>
                    </div>

                </li>
                <?php
                    }
                    ?>
            </ul>
            <?php
            } else {
            ?>
            <p>Aucun utilisateur affecté à ce projekt</p>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    if (count($tickets) > 0) {
    ?>
    <section
        class="flex flex-wrap md:flex-nowrap rounded-md mt-4 mb-2 mx-2 p-2 bg-white">
        <?php
            $tasks = array("todo", "doing", "done", "backlog");

            foreach ($tasks as $task) {
                echo "<div data-ticket-status=\"{$task}\" class=\"dropzone w-full md:w-1/4 grid auto-rows-max grid-cols-1 m-2 p-2 text-center font-bold rounded border-4 border-dashed border-transparent $task-bg\">$task";
                foreach ($tickets as $ticket) {
                    $deadline = new DateTime($ticket->getEndDate());

                    if ($ticket->getTicketStatus() === $task) {
                        echo "
                    <article
                    id=\"ticket-{$ticket->getId()}\" draggable=\"true\"
                    class=\"w-full my-2 py-2 bg-white shadow-lg rounded-md border-2 border-transparent hover:border-yellow-500 cursor-move\"
                    >
                    <div class=\"grid grid-cols-2\">
                        <div class=\"col-span-2 flex justify-center items-center\">
                            <p>Affected #
                                <span id=\"status-{$ticket->getId()}\"
                                    class=\"cursor-pointer font-black {$ticket->getTicketStatus()}-text\">
                                    {$ticket->getAffected()}
                                </span>
                            </p>
                        </div>
                        <div class=\"col-start-2 col-end-4 flex justify-end items-end\">
                            <div class=\"pb-2 pr-4\">
                            <p class=\"text-gray-500 text-sm\">{$deadline->format('M d, Y')}</p>
                            </div>
                        </div>
                    </div>
                </article>
                    ";
                    }
                }
                echo "</div>";
            }
            ?>
    </section>
    <?php
    } else {
    ?>
    <p>Aucun ticket affecté à ce projekt</p>
    <?php
    }
    ?>
</main>