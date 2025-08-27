(function() {
    const sidebar = document.getElementById('sidebar');
    const backdrop = document.getElementById('sidebar-backdrop');
    const toggle = document.getElementById('sidebar-toggle');
    let open = false;

    function openSidebar() {
        sidebar.classList.remove('-translate-x-64');
        backdrop.classList.remove('opacity-0', 'pointer-events-none');
        backdrop.classList.add('opacity-100');
        open = true;
    }
    function closeSidebar() {
        sidebar.classList.add('-translate-x-64');
        backdrop.classList.remove('opacity-100');
        backdrop.classList.add('opacity-0', 'pointer-events-none');
        open = false;
    }

    toggle.addEventListener('click', function() {
        if (open) {
            closeSidebar();
        } else {
            openSidebar();
        }
    });

    backdrop.addEventListener('click', closeSidebar);

    // Bij resize: sidebar altijd tonen vanaf xl
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1280) {
            sidebar.classList.remove('-translate-x-64');
            backdrop.classList.add('opacity-0', 'pointer-events-none');
            open = false;
        } else if (!open) {
            sidebar.classList.add('-translate-x-64');
        }
    });
})();
