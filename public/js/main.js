// ===== DOM ELEMENTS =====
const sidebar = document.getElementById('sidebar');
const sidebarToggle = document.getElementById('sidebarToggle');
const navLinks = document.querySelectorAll('.nav-link');
const pageTitle = document.getElementById('pageTitle');

// ===== SIDEBAR TOGGLE =====
function setupSidebarToggle() {
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth < 992 &&
                sidebar &&
                !sidebar.contains(e.target) &&
                !sidebarToggle.contains(e.target) &&
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });
    }
}

// ===== NAVIGATION =====
function setupNavigation() {
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove active class from all links
            navLinks.forEach(navLink => navLink.classList.remove('active'));

            // Add active class to clicked link
            this.classList.add('active');

            // Update page title
            const sectionText = this.querySelector('.nav-text').textContent;
            if (pageTitle) {
                pageTitle.textContent = sectionText;
            }

            // Close sidebar on mobile
            if (window.innerWidth < 992 && sidebar) {
                sidebar.classList.remove('active');
            }
        });
    });
}

// ===== MODAL FUNCTIONS =====
function openModal(modal) {
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeModal(modal) {
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
}

// ===== NOTIFICATION =====
function showNotification(message, type = 'success') {
    // In a real app, you would show a proper toast notification
    console.log(`${type.toUpperCase()}: ${message}`);

    // Simple alert for demo purposes
    alert(message);
}

// ===== INITIALIZATION =====
document.addEventListener('DOMContentLoaded', function() {
    setupSidebarToggle();
    setupNavigation();

    // Set active nav link based on current page
    const currentPage = window.location.pathname.split('/').pop();
    setActiveNavLink(currentPage);
});

// ===== SET ACTIVE NAV LINK BASED ON PAGE =====
function setActiveNavLink(page) {
    let activeLink = '';

    switch(page) {
        case 'index.html':
        case '':
            activeLink = 'dashboard';
            break;
        case 'clients.html':
            activeLink = 'clients';
            break;
        case 'services.html':
            activeLink = 'services';
            break;
        case 'orders.html':
            activeLink = 'orders';
            break;
    }

    navLinks.forEach(link => {
        const section = link.getAttribute('data-section');
        if (section === activeLink) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// ===== EXPORT FUNCTIONS =====
if (typeof module !== 'undefined' && module.exports) {
    // Node.js environment
    module.exports = {
        setupSidebarToggle,
        setupNavigation,
        openModal,
        closeModal,
        showNotification
    };
} else {
    // Browser environment
    window.Common = {
        setupSidebarToggle,
        setupNavigation,
        openModal,
        closeModal,
        showNotification
    };
}
