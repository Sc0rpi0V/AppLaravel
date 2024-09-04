<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Admin Dashboard ScorpWPCrea</title>

        @vite('resources/css/nav-admin.css')

    </head>

    <body class="antialiased">

        <div class="layout-container">
            @include('_nav-admin')
            
            <div class="content-container">
                @include('_team-admin')
                @include('_messages-admin')
            </div>
        </div>

    </body>
</html>

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