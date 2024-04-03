<header>
    <div class="header_wrapper">
        <a href="/"><h1>WorldWander</h1></a>
        <ul class="header_list">
            <li><a href="/#methods">Tanie podróżowanie</a></li>
            <li><a href="/#places">Tanie miejsca</a></li>
            <li><a href="/#pack">Jak się pakować</a></li>
            <li><a href="/#trails">Szlaki piesze</a></li>
            <li> <a href="/#calculator">Kalkulator</a></li>
            <li><a href="/#book">Księga Gości</a></li>
        </ul>
        <div class="mobile_nav">
            <button id="toggleMenuButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </button>
        </div>
        <div class="expanding_menu">
            <ul class="mobile_nav-list">
                <li><a href="/#methods">Tanie podróżowanie</a></li>
                <li><a href="/#places">Tanie miejsca</a></li>
                <li><a href="/#pack">Jak się pakować</a></li>
                <li><a href="/#trails">Szlaki piesze</a></li>
                <li><a href="/#calculator">Kalkulator</a></li>
                <li><a href="/#book">Księga Gości</a></li>
            </ul>
        </div>
    </div>
    
</header>
<script>
    let toggleMenu = false;
    const mobileMenu = document.querySelector('.expanding_menu');
    mobileMenu.dataset.open = toggleMenu;

    const toggle = () => {
        console.log('toggleMenu');
        toggleMenu = !toggleMenu;
        mobileMenu.dataset.open = toggleMenu;
    }

    document.querySelector('#toggleMenuButton').addEventListener('click', toggle);
</script>