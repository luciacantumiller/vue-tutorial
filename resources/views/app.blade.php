<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracast Assets</title>
        <link rel="stylesheet" href="css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6 mb-8">
                    <img src="https://assets.laracasts.com/images/logo.svg" alt="laracasts_logo">
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <h5 class="uppercase font-bold mb-4">The Brand</h5>
                        <section class="mb-6">
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/">Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/about">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/">Typography</router-link></li>
                            </ul>
                        </section>

                        <h5 class="uppercase font-bold mb-4">Doodles</h5>
                        <section>
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/about">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/">Loaders and Animations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/about">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>  
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
