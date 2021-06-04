<main class="main-body px-2 md:mx-0 m-0 h-full flex from-to-gradient">
    <section class=" flex-auto flex items-center justify-center text-center">
        <div class="w-full max-w-sm">
            <form action="../core/authentication/verification.php"
                method="post">
                <div>
                    <input
                        class="bg-white appearence-none block w-full text-yellow-800 placeholder-yellow-300 rounded-md mb-4 border border-transparent shadow focus:border-yellow-400 px-3 py-2 focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none"
                        type="text" name="username" id="username"
                        placeholder="Pseudo">
                </div>
                <div>
                    <input
                        class="bg-white appearence-none block w-full text-yellow-800 placeholder-yellow-300 rounded-md mb-4 border border-transparent shadow focus:border-yellow-400 px-3 py-2 focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none"
                        type="password" name="password" id="password"
                        placeholder="Mot de passe">
                </div>
                <button
                    class="block w-full py-2 px-3 border border-transparent rounded-md text-yellow-500 font-medium bg-black shadow-sm sm:text-sm mb-10 hover:bg-yellow-600 hover:text-black focus:outline-none focus-visible:ring-2 focus-visible:ring-yellow-700 focus-visible:ring-offset-2 focus-visible:ring-offset-yellow-100"
                    type="submit">Send</button>
                <p><a href="#">Mot de passe oublié ?</a></p>
            </form>
        </div>
    </section>
</main>