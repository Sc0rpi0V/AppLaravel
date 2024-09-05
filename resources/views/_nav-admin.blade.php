<nav>
    <div class="sidebar-top">
        <a href="{{ route('home') }}" class="logo__wrapper">
            <img src="{{ asset('img/scorp-logo.png') }}" alt="Logo" class="logo">
            <h1 style="color:black;">ScorpWPCrea</h1>
        </a>
    </div>
    <div class="sidebar-links">
        <ul>
            <li>
                <a href="{{ url('/admin/dashboard') }}" title="Accueil" class="tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                    <path d="M10 12h4v4h-4z"></path>
                    </svg>
                    <span class="link hide">Accueil</span>
                    <span class="tooltip__content">Accueil</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.team') }}" title="Utilisateurs" class="tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 4h6v8h-6z"></path>
                    <path d="M4 16h6v4h-6z"></path>
                    <path d="M14 12h6v8h-6z"></path>
                    <path d="M14 4h6v4h-6z"></path>
                    </svg>
                    <span class="link hide">Utilisateurs</span>
                    <span class="tooltip__content">Utilisateurs</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.messages') }}" title="Messages" class="tooltip">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                    </svg>
                    <span class="link hide">Messages</span>
                    <span class="tooltip__content">Messages</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.formations') }}" title="Formations" class="tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M8 16l2 -6l6 -2l-2 6l-6 2"></path>
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                    </svg>
                    <span class="link hide">Formations</span>
                    <span class="tooltip__content">Formations</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.analytics') }}" title="Analytics" class="tooltip">
                    <div style="position: relative;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-graph" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 18v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                        <path d="M7 14l3 -3l2 2l3 -3l2 2"></path>
                    </svg>
                    <div class="notification"></div>
                    </div>
                    <span class="link hide">Analytics</span>
                    <span class="tooltip__content">Analytics</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.reports') }}" title="Reports" class="tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-description" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                    <path d="M9 17h6"></path>
                    <path d="M9 13h6"></path>
                    </svg>
                    <span class="link hide">Reports</span>
                    <span class="tooltip__content">Reports</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-bottom hide">
        <form method="POST" action="{{ route('logout') }}">
        @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();" class="logout-button">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>
    <div class="expand-btn">
        <img src="{{ asset('img/admin/right-collapse.svg') }}" alt="Left Collapse">
        <span class="hide">
            Collapse
        </span>
    </div>
</nav>

<script>
    const expand_btn = document.querySelector(".expand-btn");
    const img = expand_btn.querySelector("img");

    let activeIndex;

    expand_btn.addEventListener("click", () => {
        document.body.classList.toggle("collapsed");
    });

    const current = window.location.href;

    const allLinks = document.querySelectorAll(".sidebar-links a");

    allLinks.forEach((elem) => {
        elem.addEventListener('click', function() {
            const hrefLinkClick = elem.href;

            allLinks.forEach((link) => {
            if (link.href == hrefLinkClick){
                link.classList.add("active");
            } else {
                link.classList.remove('active');
            }
            });
        })
    });
</script>