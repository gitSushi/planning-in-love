<div class="flex justify-end">
    <?php
    include('./core/authentication/guard.php');

    if (!isLogged() && !isset($_GET['connect'])) {
    ?>
        <a class="mr-1 bg-yellow-600 text-yellow-800 py-2 px-3 rounded-lg hover:bg-yellow-500 hover:text-yellow-200" href="index.php?connect=signgin">Créer un compte</a>
        <a class="mr-1 bg-yellow-600 text-yellow-800 py-2 px-3 rounded-lg hover:bg-yellow-500 hover:text-yellow-200" href="index.php?connect=login">Se connecter</a>
    <?php
    } else if (isLogged()) {
    ?>
        <a class="mr-1 bg-yellow-600 text-yellow-800 py-2 px-3 rounded-lg hover:bg-yellow-500 hover:text-yellow-200" href="http://localhost:4321/core/authentication/logging_out.php">Se déconnecter</a>
    <?php
    }
    ?>
</div>