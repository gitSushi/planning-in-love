<!DOCTYPE html>
<html lang="en" class="h-full bg-yellow-50">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/tailwind.css">
    <title>login</title>
    <style>
        #username,
        #password,
        #username:-internal-autofill-selected,
        #password:-internal-autofill-selected {
            background-color: white !important;
        }
    </style>
</head>
<body class="m-0 min-h-full flex">
    <main class="flex-auto flex items-center justify-center text-center">
        <div class="w-full max-w-sm">
            <form action="../core/authentication/verification.php" method="post">
                <div>
                    <input class="bg-white appearence-none block w-full text-yellow-800 placeholder-yellow-200 rounded-md mb-4 border border-transparent shadow focus:border-yellow-400 px-3 py-2 focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none" type="text" name="username" id="username" placeholder="Pseudo">
                </div>
                <div>
                    <input class="bg-white appearence-none block w-full text-yellow-800 placeholder-yellow-200 rounded-md mb-4 border border-transparent shadow focus:border-yellow-400 px-3 py-2 focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none" type="password" name="password" id="password" placeholder="Mot de passe">
                </div>
                <button class="block w-full py-2 px-3 border border-transparent rounded-md text-yellow-500 font-medium bg-black shadow-sm sm:text-sm mb-10 hover:bg-yellow-600 hover:text-black focus:outline-none focus-visible:ring-2 focus-visible:ring-yellow-700 focus-visible:ring-offset-2 focus-visible:ring-offset-yellow-100" type="submit">Send</button>
                <p><a href="#">Mot de passe oublié ?</a></p>
                
            </form>
        </div>
    </main>
</body>
</html>