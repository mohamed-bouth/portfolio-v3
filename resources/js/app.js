import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    const header = document.getElementById("header");
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const menuIcon = document.getElementById("menuIcon");
    const closeIcon = document.getElementById("closeIcon");

    // Scroll effect
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            header.classList.add("bg-black/90", "backdrop-blur-md", "py-4", "shadow-lg", "shadow-[#00FF00]/10");
            header.classList.remove("py-6");
        } else {
            header.classList.remove("bg-black/90", "backdrop-blur-md", "py-4", "shadow-lg", "shadow-[#00FF00]/10");
            header.classList.add("py-6");
        }
    });

    // Mobile menu toggle
    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");

        menuIcon.classList.toggle("hidden");
        closeIcon.classList.toggle("hidden");
    });

    // Close menu when clicking link
    document.querySelectorAll(".mobile-link").forEach(link => {
        link.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
            menuIcon.classList.remove("hidden");
            closeIcon.classList.add("hidden");
        });
    });

    // Active section highlight
    const sections = ["home", "projects", "education", "contact"];
    const navLinks = document.querySelectorAll(".nav-link");

    window.addEventListener("scroll", () => {
        let scrollPos = window.scrollY + 100;

        sections.forEach((section) => {
            const el = document.getElementById(section);
            if (el && el.offsetTop <= scrollPos && el.offsetTop + el.offsetHeight > scrollPos) {
                navLinks.forEach(link => {
                    link.classList.remove("text-[#00FF00]");
                    link.classList.add("text-gray-400");

                    if (link.getAttribute("href") === "#" + section) {
                        link.classList.add("text-[#00FF00]");
                        link.classList.remove("text-gray-400");
                    }
                });
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("scrollTopBtn");

    if (btn) {
        btn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }
});