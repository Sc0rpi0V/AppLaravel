<footer class="bg-gray-100 py-6 border-t border-gray-300">
    <div class="flex flex-wrap justify-around items-start mx-6">
        <!-- 1ère partie : Logo -->
        <div class="mb-6">
            <img src="{{ asset('img/scorp-logo.png') }}" class="h-8" alt="ScorpWPCrea Logo">
        </div>

        <!-- 2ème partie : Liens rapides -->
        <div class="mb-6">
            <h4 class="font-semibold text-lg mb-2">Liens rapides</h4>
            <ul class="list-none p-0">
                <li><a href="{{ url('/about') }}" class="text-gray-600 hover:text-gray-900">À propos</a></li>
                <li><a href="{{ url('/services') }}" class="text-gray-600 hover:text-gray-900">Services</a></li>
                <li><a href="{{ url('/project') }}" class="text-gray-600 hover:text-gray-900">Portfolio</a></li>
                <li><a href="{{ url('/blog') }}" class="text-gray-600 hover:text-gray-900">Blog</a></li>
                <li><a href="{{ url('/contact') }}" class="text-gray-600 hover:text-gray-900">Contact</a></li>
            </ul>
        </div>

        <!-- 3ème partie : Services -->
        <div class="mb-6">
            <h4 class="font-semibold text-lg mb-2">Services</h4>
            <ul class="list-none p-0">
                <li><a href="{{ url('/services/consultation') }}" class="text-gray-600 hover:text-gray-900">Consultation</a></li>
                <li><a href="{{ url('/services/support') }}" class="text-gray-600 hover:text-gray-900">Support</a></li>
                <li><a href="{{ url('/services/formation') }}" class="text-gray-600 hover:text-gray-900">Formation</a></li>
                <li><a href="{{ url('/services/developpement') }}" class="text-gray-600 hover:text-gray-900">Développement</a></li>
                <li><a href="{{ url('/services/conception') }}" class="text-gray-600 hover:text-gray-900">Conception</a></li>
            </ul>
        </div>

        <!-- 4ème partie : Contact -->
        <div class="mb-6">
            <h4 class="font-semibold text-lg mb-2">Contact</h4>
            <address class="not-italic text-gray-600">
                Roncq, France<br>
                Tél : +33 7 72 26 60 18<br>
                Email : <a href="mailto:valentinc.boury@gmail.com" class="text-gray-600 hover:text-gray-900">valentinc.boury@gmail.com</a>
            </address>
        </div>

        <!-- 5ème partie : Newsletter -->
        <div class="mb-6">
            <h4 class="font-semibold text-lg mb-2">Newsletter</h4>
            <form action="{{ route('newsletter.subscribe') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Votre email" required class="mb-2 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-purple-500">
                <button type="submit" class="p-2 bg-purple-600 text-white rounded hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">S'inscrire</button>
            </form>
        </div>
    </div>
    <div class="text-center py-4 border-t border-gray-300 mt-6">
        <p>&copy; {{ date('Y') }} WebCrea. Tous droits réservés. BOURY VALENTIN</p>
    </div>
</footer>
