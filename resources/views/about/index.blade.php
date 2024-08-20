@vite('resources/css/app.css')

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
        @include('_nav')

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">

                <section class="aboutme">
                    <h1 class="text-2xl font-bold">À propos de moi</h1>
                    <hr class="my-4" />
                    <div class="flex flex-col md:flex-row">
                        <div class="img-about md:w-1/3">
                            <img src="{{ asset('img/profil.jpg') }}" alt="Photo de profil" class="w-full rounded-lg shadow-md" />
                        </div> 
                        <div class="info-about md:w-2/3 mt-4 md:mt-0 md:pl-6">
                            <h2 class="text-xl font-semibold">Une Histoire de Travail Acharné et de Persévérance</h2>
                            <p class="mt-4">Passionné d'informatique depuis plus de 10 ans maintenant, je me suis lancé dans le monde de la programmation web en solo. En tant qu'autodidacte, 
                            j'ai acquis mes compétences en suivant des cours en ligne et en explorant par moi-même les dernières technologies. Ma formation initiale dans le domaine 
                            des réseaux informatiques (RIMS = Réseaux Informatiques Mobilité et Sécurité) m'a fourni une base solide pour comprendre les tenants et aboutissants de l'informatique. 
                            Je m'épanouis en réalisant divers sites web et en écrivant du code, ce qui me permet de rester constamment en contact avec différents langages de programmation 
                            tels que HTML, Javascript, PHP, CSS, REACT JS, Laravel, Symfony.</p>
                            <p class="mt-4">Mon approche autodidacte et ma soif d'apprentissage me poussent à me former de manière autonome, en suivant des cours en ligne et en me tenant au courant des 
                            dernières mises à jour technologiques. Grâce à mon esprit rapide et ma facilité de compréhension, je suis capable d'interpréter rapidement les besoins de mes clients 
                            et de mettre en place des solutions innovantes. Mon objectif est de rester à la pointe de la technologie et de fournir des solutions efficaces, tout en continuant à 
                            élargir mes connaissances pour répondre aux défis de demain.</p>
                            <p class="mt-4">Je réalise quelque sites ou quelques codes afin de pouvoir garder la main sur certains langages de programmation (HTML, Javascript, PHP, CSS, REACT JS), afin de 
                            ne pas être en retard sur les dernières technologies et dernières mises à jour. Ayant un esprit rapide et une facilité de compréhension, cela me permet de pouvoir 
                            interpréter et mettre en place assez facilement et rapidement ce que l'on me demande.</p>
                        </div>
                    </div>
                    <h4 class="technology mt-6 text-lg font-bold">Technologies</h4>
                    <div class="button-list flex flex-wrap gap-2 mt-4">
                        <a href="#" class="home-btn home-btn1 bg-blue-500 text-white px-4 py-2 rounded">SQL</a>
                        <a href="#" class="home-btn home-btn2 bg-blue-500 text-white px-4 py-2 rounded">AS400</a>
                        <a href="#" class="home-btn home-btn3 bg-blue-500 text-white px-4 py-2 rounded">PHP</a>
                        <a href="#" class="home-btn home-btn4 bg-blue-500 text-white px-4 py-2 rounded">JAVA</a>
                        <a href="#" class="home-btn home-btn5 bg-blue-500 text-white px-4 py-2 rounded">JAVASCRIPT</a>
                        <a href="#" class="home-btn home-btn6 bg-blue-500 text-white px-4 py-2 rounded">HTML</a>
                        <a href="#" class="home-btn home-btn7 bg-blue-500 text-white px-4 py-2 rounded">PYTHON</a>
                        <a href="#" class="home-btn home-btn8 bg-blue-500 text-white px-4 py-2 rounded">CSS</a>
                        <a href="#" class="home-btn home-btn9 bg-blue-500 text-white px-4 py-2 rounded">React JS</a>
                    </div>
                </section>

                <section class="services mt-12">
                    <div class="container-services">
                        <h1 class="my-title text-2xl font-bold">Mes Services</h1>
                        <div class="services-list grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                            <div class="first p-4 border rounded shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8 mb-4"><path d="M94.1 315.1c0 25.9-21.2 47.1-47.1 47.1S0 341 0 315.1c0-25.9 21.2-47.1 47.1-47.1h47.1v47.1zm23.7 0c0-25.9 21.2-47.1 47.1-47.1s47.1 21.2 47.1 47.1v117.8c0 25.9-21.2 47.1-47.1 47.1s-47.1-21.2-47.1-47.1V315.1zm47.1-189c-25.9 0-47.1-21.2-47.1-47.1S139 32 164.9 32s47.1 21.2 47.1 47.1v47.1H164.9zm0 23.7c25.9 0 47.1 21.2 47.1 47.1s-21.2 47.1-47.1 47.1H47.1C21.2 244 0 222.8 0 196.9s21.2-47.1 47.1-47.1H164.9zm189 47.1c0-25.9 21.2-47.1 47.1-47.1 25.9 0 47.1 21.2 47.1 47.1s-21.2 47.1-47.1 47.1h-47.1V196.9zm-23.7 0c0 25.9-21.2 47.1-47.1 47.1-25.9 0-47.1-21.2-47.1-47.1V79.1c0-25.9 21.2-47.1 47.1-47.1 25.9 0 47.1 21.2 47.1 47.1V196.9zM283.1 385.9c25.9 0 47.1 21.2 47.1 47.1 0 25.9-21.2 47.1-47.1 47.1-25.9 0-47.1-21.2-47.1-47.1v-47.1h47.1zm0-23.7c-25.9 0-47.1-21.2-47.1-47.1 0-25.9 21.2-47.1 47.1-47.1h117.8c25.9 0 47.1 21.2 47.1 47.1 0 25.9-21.2 47.1-47.1 47.1H283.1z"/></svg>
                                <h2 class="text-lg font-semibold">Développeur Back-End</h2>
                                <p class="mt-2">Le développeur back-end est le cerveau invisible derrière les applications et les sites web que nous utilisons au quotidien. En se concentrant sur la logique 
                                et la fonctionnalité qui se cachent sous la surface, ce professionnel de la programmation crée et maintient les serveurs, les bases de données et les algorithmes 
                                qui permettent aux systèmes de fonctionner en douceur. En utilisant des langages de programmation tels que Python, Java, Ruby ou PHP, le développeur back-end conçoit 
                                les structures qui permettent le traitement des données, la gestion des utilisateurs et la communication avec le front-end.</p>
                            </div>
                            <div class="second p-4 border rounded shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-8 h-8 mb-4"><path d="M61.5 66.7C71.6 50.3 90.6 40 111.1 40H400.9c20.5 0 39.5 10.3 49.6 26.7L512 192H0L61.5 66.7zM32 224H480V432c0 26.5-21.5 48-48 48H80c-26.5 0-48-21.5-48-48V224z"/></svg>
                                <h2 class="text-lg font-semibold">Développeur Front-End</h2>
                                <p class="mt-2">Un développeur front-end est l'architecte visuel des expériences numériques. Spécialisé dans la création d'interfaces utilisateurs attrayantes, il transforme les 
                                concepts de design en réalité interactive. Grâce à sa maîtrise du HTML, du CSS et du JavaScript, il construit des pages web réactives, accessibles et esthétiques, 
                                garantissant une navigation fluide et une interactivité engageante. Travaillant main dans la main avec les concepteurs UX/UI, le développeur front-end s'assure 
                                que chaque élément visuel est optimisé pour offrir une expérience utilisateur intuitive et agréable.</p>
                            </div>
                            <div class="third p-4 border rounded shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="width:30px;"><path d="M349.9 236.3h-66.1v-59.4h66.1v59.4zm0-204.3h-66.1v60.7h66.1V32zm78.2 144.8H362v59.4h66.1v-59.4zm-156.3-72.1h-66.1v60.1h66.1v-60.1zm78.1 0h-66.1v60.1h66.1v-60.1zm276.8 100c-14.4-9.7-47.6-13.2-73.1-8.4-3.3-24-16.7-44.9-41.1-63.7l-14-9.3-9.3 14c-18.4 27.8-23.4 73.6-3.7 103.8-8.7 4.7-25.8 11.1-48.4 10.7H2.4c-8.7 50.8 5.8 116.8 44 162.1 37.1 43.9 92.7 66.2 165.4 66.2 157.4 0 273.9-72.5 328.4-204.2 21.4 .4 67.6 .1 91.3-45.2 1.5-2.5 6.6-13.2 8.5-17.1l-13.3-8.9zm-511.1-27.9h-66v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm-78.1-72.1h-66.1v60.1h66.1v-60.1z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:30px;"><path d="M216.3 158.4H137C97 147.9 6.5 150.6 6.5 233.2c0 30.1 15 51.2 35 61-25.1 23-37 33.9-37 49.2 0 11 4.5 21.1 17.9 26.8C8.1 383.6 0 393.4 0 411.7c0 32.1 28.1 50.8 101.6 50.8 70.8 0 111.8-26.4 111.8-73.2 0-58.7-45.2-56.5-151.6-63l13.4-21.6c27.3 7.6 118.7 10 118.7-67.9 0-18.7-7.7-31.7-15-41.1l37.4-2.8zm-63.4 241.9c0 32.1-104.9 32.1-104.9 2.4 0-8.1 5.3-15 10.6-21.5 77.7 5.3 94.3 3.4 94.3 19.1zm-50.8-134.6c-52.8 0-50.5-71.2 1.2-71.2 49.5 0 50.8 71.2-1.2 71.2zm133.3 100.5v-32.1c26.8-3.7 27.2-2 27.2-11V203.6c0-8.5-2.1-7.4-27.2-16.3l4.5-32.9H324v168.7c0 6.5 .4 7.3 6.5 8.1l20.7 2.8v32.1zm52.5-244.3c-23.2 0-36.6-13.4-36.6-36.6s13.4-35.8 36.6-35.8c23.6 0 37 12.6 37 35.8s-13.4 36.6-37 36.6zM512 350.5c-17.5 8.5-43.1 16.3-66.3 16.3-48.4 0-66.7-19.5-66.7-65.5V194.8c0-5.4 1.1-4.1-31.7-4.1V154.5c35.8-4.1 50-22 54.5-66.3h38.6c0 65.8-1.3 61.8 3.3 61.8H501v40.7h-60.6v97.2c0 6.9-4.9 51.4 60.6 26.8z"/></svg>
                                <h2 class="text-lg font-semibold">Gestion Back-End</h2>
                                <p class="mt-2">En tant que professionnel ayant atteint un niveau confirmé dans la gestion de Git et Docker, je possède une expertise solide dans le domaine du développement et 
                                du déploiement de logiciels. Avec Git, je gère efficacement les versions du code source, facilitant ainsi la collaboration au sein d'équipes et le suivi des 
                                modifications. Grâce à ma maîtrise de Docker, je suis en mesure de créer, déployer et gérer des environnements d'application isolés, assurant ainsi une portabilité 
                                et une stabilité optimales lors du déploiement sur différentes plateformes. Mon expérience dans l'utilisation de Docker me permet d'orchestrer des processus complexes 
                                tout en simplifiant la gestion des infrastructures.</p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</body>
@include('_footer')
