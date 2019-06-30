<!doctype html>
<html lang="vn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adino</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-sans">
        <div id="app">
            <div class="container px-8">
                <header class="py-6 mb-8">
                    <h1>
                        <img alt="Laracasts" src="http://pluspng.com/img-png/avengers-logo-png-avengers-logo-3069.png" width="180">
                    </h1>
                </header>

                 <main class="flex">
                    <aside class="w-1/5 pt-8">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3 text-base">The Brand</h5>

                             <ul class="list-reset">
                               <li class="text-sm leading-loose"><router-link class="text-black" to="/" exact>Logo</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black" to="/colors">Colors</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black" to="/typography">Typography</router-link></li>
                            </ul>
                        </section>
                         <section>
                            <h5 class="uppercase font-bold mb-3">Doodles</h5>

                             <ul class="list-reset">
                               <li class="text-sm leading-loose"><router-link class="text-black" to="/mascot">Mascot</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black" to="/illustrations">Illustrations</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black" to="/loaders-and-animations">Loaders and Animations</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black" to="/achievements">Achievements</router-link></li>
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
