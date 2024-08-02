@vite('resources/css/app.css')

@extends('base')

@section('title', 'Accueil du blog')

@section('excerpt')

    <section class="aboutme">
        <h1>A propos de moi</h1>
        <hr />
        <div class="row">
            <div class="img-about">
                <img src=" {{ asset('img/profil.jpg') }}" alt="Photo de profil" />
            </div> 
            <div class="info-about">
                <h2>Une Histoire de Travail Acharné et de Persévérance</h2>
                <p>Passionné d'informatique depuis plus de 10 ans maintenant, je me suis lancé dans le monde de la programmation web en solo. En tant qu'autodidacte, 
                j'ai acquis mes compétences en suivant des cours en ligne et en explorant par moi-même les dernières technologies. Ma formation initiale dans le domaine 
                des réseaux informatiques (RIMS = Réseaux Informatiques Mobilité et Sécurité) m'a fourni une base solide pour comprendre les tenants et aboutissants de l'informatique. 
                Je m'épanouis en réalisant divers sites web et en écrivant du code, ce qui me permet de rester constamment en contact avec différents langages de programmation 
                tels que HTML, Javascript, PHP, CSS, REACT JS, Laravel, Symfony</p>
                <p>Mon approche autodidacte et ma soif d'apprentissage me poussent à me former de manière autonome, en suivant des cours en ligne et en me tenant au courant des 
                dernières mises à jour technologiques. Grâce à mon esprit rapide et ma facilité de compréhension, je suis capable d'interpréter rapidement les besoins de mes clients 
                et de mettre en place des solutions innovantes. Mon objectif est de rester à la pointe de la technologie et de fournir des solutions efficaces, tout en continuant à 
                élargir mes connaissances pour répondre aux défis de demain.</p>
                <p>Je réalise quelque sites ou quelques codes afin de pouvoir garder la main sur certains Langages de programmation (HTML, Javascript, PHP, CSS, REACT JS), afin de 
                ne pas être en retard sur les dernières technologies et dernières mises à jour. Ayant un esprit rapide et une facilité de compréhension, cela me permet de pouvoir 
                interpréter et mettre en place assez facilement et rapidement ce que l\'on me demande.</p>
            </div>
            <h4 class="technology">Technologies</h4>
            <div class="button-list">
                <a href="#" className="home-btn home-btn1">SQL</a>
                <a href="#" className="home-btn home-btn2">AS400</a>
                <a href="#" className="home-btn home-btn3">PHP</a>
                <a href="#" className="home-btn home-btn4">JAVA</a>
                <a href="#" className="home-btn home-btn5">JAVASCRIPT</a>
                <a href="#" className="home-btn home-btn6">HTML</a>
                <a href="#" className="home-btn home-btn7">PYTHON</a>
                <a href="#" className="home-btn home-btn8">CSS</a>
                <a href="#" className="home-btn home-btn9">React JS</a>
            </div>
        </div>
        </section>
                <section className="services">
                <div className="container-services">
                    <h1 className="my-title">Mes Services</h1>
                    <div className="services-list">
                        <div className="first">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width:30px;"><path d="M94.1 315.1c0 25.9-21.2 47.1-47.1 47.1S0 341 0 315.1c0-25.9 21.2-47.1 47.1-47.1h47.1v47.1zm23.7 0c0-25.9 21.2-47.1 47.1-47.1s47.1 21.2 47.1 47.1v117.8c0 25.9-21.2 47.1-47.1 47.1s-47.1-21.2-47.1-47.1V315.1zm47.1-189c-25.9 0-47.1-21.2-47.1-47.1S139 32 164.9 32s47.1 21.2 47.1 47.1v47.1H164.9zm0 23.7c25.9 0 47.1 21.2 47.1 47.1s-21.2 47.1-47.1 47.1H47.1C21.2 244 0 222.8 0 196.9s21.2-47.1 47.1-47.1H164.9zm189 47.1c0-25.9 21.2-47.1 47.1-47.1 25.9 0 47.1 21.2 47.1 47.1s-21.2 47.1-47.1 47.1h-47.1V196.9zm-23.7 0c0 25.9-21.2 47.1-47.1 47.1-25.9 0-47.1-21.2-47.1-47.1V79.1c0-25.9 21.2-47.1 47.1-47.1 25.9 0 47.1 21.2 47.1 47.1V196.9zM283.1 385.9c25.9 0 47.1 21.2 47.1 47.1 0 25.9-21.2 47.1-47.1 47.1-25.9 0-47.1-21.2-47.1-47.1v-47.1h47.1zm0-23.7c-25.9 0-47.1-21.2-47.1-47.1 0-25.9 21.2-47.1 47.1-47.1h117.8c25.9 0 47.1 21.2 47.1 47.1 0 25.9-21.2 47.1-47.1 47.1H283.1z"/></svg>                            <h2>Développeur Back-End</h2>
                            <p>Le développeur back-end est le cerveau invisible derrière les applications et les sites web que nous utilisons au quotidien. En se concentrant sur la logique 
                            et la fonctionnalité qui se cachent sous la surface, ce professionnel de la programmation crée et maintient les serveurs, les bases de données et les algorithmes 
                            qui permettent aux systèmes de fonctionner en douceur. En utilisant des langages de programmation tels que Python, Java, Ruby ou PHP, le développeur back-end conçoit 
                            les structures qui permettent le traitement des données, la gestion des utilisateurs et la communication avec le front-end.</p>
                        </div>
                        <div className="second">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:30px;"><path d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8 .9 0 1.8 .1 2.8 .2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7 .3 13.7 .3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:30px;"><path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1 .9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2 .6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6 .4 19.5 .6 29.5 .6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8 .9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"/></svg>
                            <h2>Techno Back-End</h2>
                            <p>En tant que développeur confirmé, je maîtrise à la fois WordPress et React, deux piliers essentiels du développement web. Avec WordPress, je crée des sites web 
                            dynamiques et conviviaux en utilisant des thèmes et des plugins personnalisés pour répondre aux besoins uniques de chaque projet. De plus, grâce à ma maîtrise de React, 
                            je suis en mesure de concevoir des interfaces utilisateur interactives et réactives, offrant ainsi une expérience en ligne fluide et captivante. Mon expertise dans ces 
                            deux langages me permet de fusionner le côté fonctionnel de WordPress avec la puissance de React, créant ainsi des expériences web attrayantes et efficaces pour les 
                            utilisateurs.</p>
                        </div>
                        <div className="third">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="width:30px;"><path d="M349.9 236.3h-66.1v-59.4h66.1v59.4zm0-204.3h-66.1v60.7h66.1V32zm78.2 144.8H362v59.4h66.1v-59.4zm-156.3-72.1h-66.1v60.1h66.1v-60.1zm78.1 0h-66.1v60.1h66.1v-60.1zm276.8 100c-14.4-9.7-47.6-13.2-73.1-8.4-3.3-24-16.7-44.9-41.1-63.7l-14-9.3-9.3 14c-18.4 27.8-23.4 73.6-3.7 103.8-8.7 4.7-25.8 11.1-48.4 10.7H2.4c-8.7 50.8 5.8 116.8 44 162.1 37.1 43.9 92.7 66.2 165.4 66.2 157.4 0 273.9-72.5 328.4-204.2 21.4 .4 67.6 .1 91.3-45.2 1.5-2.5 6.6-13.2 8.5-17.1l-13.3-8.9zm-511.1-27.9h-66v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm-78.1-72.1h-66.1v60.1h66.1v-60.1z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:30px;"><path d="M216.3 158.4H137C97 147.9 6.5 150.6 6.5 233.2c0 30.1 15 51.2 35 61-25.1 23-37 33.9-37 49.2 0 11 4.5 21.1 17.9 26.8C8.1 383.6 0 393.4 0 411.7c0 32.1 28.1 50.8 101.6 50.8 70.8 0 111.8-26.4 111.8-73.2 0-58.7-45.2-56.5-151.6-63l13.4-21.6c27.3 7.6 118.7 10 118.7-67.9 0-18.7-7.7-31.7-15-41.1l37.4-2.8zm-63.4 241.9c0 32.1-104.9 32.1-104.9 2.4 0-8.1 5.3-15 10.6-21.5 77.7 5.3 94.3 3.4 94.3 19.1zm-50.8-134.6c-52.8 0-50.5-71.2 1.2-71.2 49.5 0 50.8 71.2-1.2 71.2zm133.3 100.5v-32.1c26.8-3.7 27.2-2 27.2-11V203.6c0-8.5-2.1-7.4-27.2-16.3l4.5-32.9H324v168.7c0 6.5 .4 7.3 6.5 8.1l20.7 2.8v32.1zm52.5-244.3c-23.2 0-36.6-13.4-36.6-36.6s13.4-35.8 36.6-35.8c23.6 0 37 12.6 37 35.8s-13.4 36.6-37 36.6zM512 350.5c-17.5 8.5-43.1 16.3-66.3 16.3-48.4 0-66.7-19.5-66.7-65.5V194.8c0-5.4 1.1-4.1-31.7-4.1V154.5c35.8-4.1 50-22 54.5-66.3h38.6c0 65.8-1.3 61.8 3.3 61.8H501v40.7h-60.6v97.2c0 6.9-4.9 51.4 60.6 26.8z"/></svg>
                            <h2>Gestion Back-End</h2>
                            <p>En tant que professionnel ayant atteint un niveau confirmé dans la gestion de Git et Docker, je possède une expertise solide dans le domaine du développement et 
                            du déploiement de logiciels. Avec Git, je gère efficacement les versions du code source, facilitant ainsi la collaboration au sein d'équipes et le suivi des 
                            modifications. Grâce à ma maîtrise de Docker, je suis en mesure de créer, déployer et gérer des environnements d'application isolés, assurant ainsi une portabilité 
                            et une stabilité optimales lors du déploiement sur différentes plateformes. Mon expérience dans l'utilisation de Docker me permet d'orchestrer des processus complexes 
                            tout en simplifiant la gestion des infrastructures.</p>
                        </div>
                    </div>
                </div>
                <DownloadButton />
            </section>
    

@endsection