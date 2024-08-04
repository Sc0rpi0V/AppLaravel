<footer style="background-color: #f8f9fa; padding: 20px 0;">
    <div style="display: flex; justify-content: space-around; align-items: flex-start;">
        <!-- 1ère partie : Logo -->
        <div>
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="WebCrea Logo">
        </div>

        <!-- 2ème partie : Liens rapides -->
        <div>
            <h4>Liens rapides</h4>
            <ul style="list-style-type: none; padding: 0;">
                <li><a href="{{ url('/about') }}">À propos</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- 3ème partie : Service -->
        <div>
            <h4>Service</h4>
            <ul style="list-style-type: none; padding: 0;">
                <li><a href="#">Consultation</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Formation</a></li>
                <li><a href="#">Développement</a></li>
            </ul>
        </div>

        <!-- 4ème partie : Contact -->
        <div>
            <h4>Contact</h4>
            <address>
                59223 Roncq, France<br>
                Tél : +33 7 72 26 60 18<br>
                Email : <a href="valentinc.boury@gmail.com">valentinc.boury@gmail.com</a>
            </address>
        </div>

        <!-- 5ème partie : Newsletter -->
        <div>
            <h4>Newsletter</h4>
            {{-- <form action="{{ route('newsletter.subscribe') }}" method="POST"> --}}
                @csrf
                <input type="email" name="email" placeholder="Votre email" required style="margin-bottom: 10px; padding: 5px;">
                <button type="submit" style="padding: 5px 10px;">S'inscrire</button>
            </form>
        </div>
    </div>
    <div style="text-align: center; padding: 10px 0; border-top: 1px solid #ddd; margin-top: 20px;">
        <p>&copy; {{ date('Y') }} WebCrea. Tous droits réservés.</p>
    </div>
</footer>
