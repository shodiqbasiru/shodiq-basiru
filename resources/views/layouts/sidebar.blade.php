<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <img src="assets/img/logo-basiru-white.png" alt="">
    </div>
    <nav>
        <a href="/" class=" {{ (request()->segment(1) === null ? 'active' : '') }}">
            <i class="bi bi-house-fill"></i>
        </a>

        <a href="/about" class="{{ request ()->segment(1) == 'about' ? 'active' : '' }}">
            <i class="bi bi-people-fill"></i>
        </a>

        <a href="/projects" class="{{ request ()->segment(1) == 'projects' ? 'active' : '' }}">
            <i class="bi bi-person-workspace"></i>
        </a>

        <a href="/contact" class="{{ request ()->segment(1) == 'contact' ? 'active' : '' }}">
            <i class="bi bi-envelope-fill"></i>
        </a>
    </nav>

    <div class="sidebar-footer">
        <a href="https://www.linkedin.com/in/shodiq-basiru" class="sidebar-footer-link" target="_blank">
            <i class="bi bi-linkedin"></i>
        </a>
        <a href="https://www.instagram.com/shodiqbasiru_/" class="sidebar-footer-link" target="_blank">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="https://github.com/shodiqbasiru" class="sidebar-footer-link" target="_blank">
            <i class="bi bi-github"></i>
        </a>
    </div>

</div>
<div class="icon">
    <i class="fa-solid fa-bars" aria-label="hidden"></i>
</div>

