<!-- nav menu -->
<nav class="bg-black pt-2">
    <?php
    include('dynamic_elements/log_button.php');
    ?>
    <div class="flex justify-center mb-4 md:mb-0">
        <!-- logo link to homepage -->
        <a href="index.php">
            <div class="flex flex-col items-center">
                <img class="hidden lg:block object-contain object-bottom h-20" src="../assets/images/1_rmq7bd3GFjcwfXtkrBQaPQ.png" />
                <span class="font-mono text-2xl md:text-4xl text-gray-700 font-black -mb-2">Planning</span>
                <span class="font-sans text-sm text-yellow-600 font-bold">IN LOVE</span>
            </div>
        </a>
    </div>

    <?php include('dynamic_elements/menu.php') ?>
</nav>