const App = {
    async init() {
        window.addEventListener('hashchange', () => this.route());
        this.route();
        
        // Initial language
        const savedLang = localStorage.getItem('bahasaDipilih') || 'id';
        this.gantiBahasa(savedLang);
    },

    async route() {
        const hash = window.location.hash.replace('#', '') || 'landing_page';
        const contentDisplay = document.getElementById('content-display');
        const navbarContainer = document.getElementById('navbar-container');

        // Logic for showing/hiding navbar based on page
        const pagesWithNavbar = ['beranda', 'acara', 'data', 'serba_serbi', 'rentetan'];
        if (pagesWithNavbar.includes(hash)) {
            navbarContainer.style.display = 'block';
        } else {
            navbarContainer.style.display = 'none';
        }

        try {
            const response = await fetch(`${hash}.html`);
            if (response.ok) {
                const html = await response.text();
                contentDisplay.innerHTML = html;
                
                // Re-apply language to new content
                const currentLang = localStorage.getItem('bahasaDipilih') || 'id';
                this.applyLanguage(currentLang);
                
                // Execute scripts in the loaded HTML
                this.executeScripts(contentDisplay);
                
                // Scroll to top
                window.scrollTo(0, 0);
            } else {
                contentDisplay.innerHTML = "<div class='container mt-5 text-center'><h2>Halaman Tidak Ditemukan! (Hash: " + hash + ")</h2><a href='#'>Kembali ke Landing Page</a></div>";
            }
        } catch (error) {
            console.error('Routing error:', error);
            contentDisplay.innerHTML = "<div class='container mt-5 text-center'><h2>Terjadi kesalahan saat memuat halaman.</h2></div>";
        }
    },

    gantiBahasa(pilihan) {
        localStorage.setItem('bahasaDipilih', pilihan);
        this.applyLanguage(pilihan);
    },

    applyLanguage(pilihan) {
        const elemenTeks = document.querySelectorAll('.lang-txt');
        elemenTeks.forEach(el => {
            const kunci = el.getAttribute('data-key');
            if (kamus[pilihan] && kamus[pilihan][kunci]) {
                el.innerText = kamus[pilihan][kunci];
            }
        });

        // RTL Logic
        if (pilihan === 'ar') {
            document.body.style.direction = 'rtl';
            document.body.style.textAlign = 'right';
        } else {
            document.body.style.direction = 'ltr';
            document.body.style.textAlign = 'left';
        }

        // Update Button UI
        document.querySelectorAll('.btn-bahasa').forEach(btn => {
            btn.classList.remove('btn-success');
            btn.classList.add('btn-outline-dark');
        });
        const btnAktif = document.getElementById('btn-' + pilihan);
        if (btnAktif) {
            btnAktif.classList.replace('btn-outline-dark', 'btn-success');
        }

        // Force footer LTR
        const footer = document.querySelector('footer');
        if (footer) {
            footer.style.direction = 'ltr';
            footer.style.textAlign = 'left';
        }
    },

    executeScripts(container) {
        const scripts = container.querySelectorAll('script');
        scripts.forEach(oldScript => {
            const newScript = document.createElement('script');
            // Copy attributes
            Array.from(oldScript.attributes).forEach(attr => {
                newScript.setAttribute(attr.name, attr.value);
            });
            // Copy content
            newScript.appendChild(document.createTextNode(oldScript.innerHTML));
            // Replace to execute
            oldScript.parentNode.replaceChild(newScript, oldScript);
        });
    }
};

// Initialize App
App.init();
