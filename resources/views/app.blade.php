<!doctype html>
<html lang="vn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adino</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div id="app">
        <div class="container mx-auto">
            <header class="py-6">
                <h1 class="">AdinoWayne</h1>
            </header>
            <main class="flex">
                <aside class="w-1/5">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-4">The Brand</h5>
                        <ul class="list-reset">
                            <li class="text-sm pb-4">
                                <router-link class="text-black" to="/">Logo</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" :to="{ name: 'about'}">Logo Symbol</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" :to="{ name: 'about'}">Colors</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" :to="{ name: 'about'}">Typography</router-link>
                            </li>
                        </ul>
                    </section>
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-4">Doodles</h5>
                        <ul class="list-reset">
                            <li class="text-sm pb-4">
                                <router-link class="text-black" to="/">Home</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" :to="{ name: 'about'}">Mascot</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" :to="{ name: 'about'}">Illustrations</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" :to="{ name: 'about'}">Loaders & Animations</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" :to="{ name: 'about'}">Wallpapers</router-link>
                            </li>
                        </ul>
                    </section>
                </aside>
                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>
</body>
<script src="/js/app.js"></script>

</html>