document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('year').textContent = new Date().getFullYear();

    // Mobile menu toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const iconOpen = document.getElementById('iconOpen');
    const iconClose = document.getElementById('iconClose');

    menuBtn.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
        menuBtn.setAttribute('aria-expanded', String(isHidden));
    });

    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
        });
    });

    // Contact form
    const form = document.getElementById('contactForm');
    const status = document.getElementById('formStatus');
    const submitBtn = form.querySelector('button[type="submit"]');

    const showStatus = (message, isError) => {
        status.textContent = message;
        status.classList.remove('hidden', 'text-cyan', 'text-red-400');
        status.classList.add(isError ? 'text-red-400' : 'text-cyan');
    };

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        submitBtn.disabled = true;

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: { Accept: 'application/json' },
                body: new FormData(form),
            });
            const data = await response.json();

            if (!response.ok) {
                const firstError = data.errors ? Object.values(data.errors)[0][0] : null;
                showStatus(firstError || data.message || 'Something went wrong. Please try again.', true);
                return;
            }

            showStatus(data.message, false);
            form.reset();
        } catch {
            showStatus('Something went wrong. Please check your connection and try again.', true);
        } finally {
            submitBtn.disabled = false;
        }
    });
});
