<script>
    // Helper: body overflow beheren op basis van zichtbare modals
    function updateBodyOverflow() {
        const openModals = document.querySelectorAll('.modal-bg.flex');
        if (openModals.length > 0) {
            document.body.classList.add('overflow-hidden');
        } else {
            document.body.classList.remove('overflow-hidden');
        }
    }

    function showModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                let content = modal.querySelector('.modal-content');
                if(content) content.focus();
            }, 10);
        }
        updateBodyOverflow();
    }
    function hideModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }
        updateBodyOverflow();
    }

    // Buitenkant klikken
    let isMouseDownOutside = false;
    document.addEventListener('mousedown', function(e) {
        document.querySelectorAll('.modal-bg.flex').forEach(function(bg) {
            let modalContent = bg.querySelector('.modal-content');
            if (!modalContent.contains(e.target)) {
                isMouseDownOutside = true;
            } else {
                isMouseDownOutside = false;
            }
        });
    });

    document.addEventListener('mouseup', function(e) {
        document.querySelectorAll('.modal-bg.flex').forEach(function(bg) {
            let modalContent = bg.querySelector('.modal-content');
            if (isMouseDownOutside && !modalContent.contains(e.target)) {
                bg.classList.remove('flex');
                bg.classList.add('hidden');
                updateBodyOverflow();
            }
        });
        isMouseDownOutside = false;
    });

    // Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") {
            document.querySelectorAll('.modal-bg.flex').forEach(function(bg) {
                bg.classList.remove('flex');
                bg.classList.add('hidden');
            });
            updateBodyOverflow();
        }
    });
</script>
