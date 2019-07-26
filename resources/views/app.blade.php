<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracast Assets</title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    </head>
    <body class="font-sans">
        <div id="app">
            <header class="py-6 mb-8">
                <img src="https://assets.laracasts.com/images/logo.svg" alt="laracasts_logo" class="mx-6">
            </header>

            <div class="container px-8">

                <main class="flex">
                    <aside class="w-64 pt-8">
                        <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                        <section class="mb-10">
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/" exact>Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/LogoSymbol">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/Colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/Typography">Typography</router-link></li>
                            </ul>
                        </section>

                        <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                        <section>
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/Mascot">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/Illustrations">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/LoadersAndAnimations">Loaders and Animations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/Wallpapers">Wallpapers</router-link></li>
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
