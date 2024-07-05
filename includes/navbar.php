<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="index.html" class="navbar-brand d-lg-none">
                <h1 class="text-primary m-0">Lab<span class="text-dark">sky</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="<?= LINK ?>home" class="nav-item nav-link active">Accueil</a>
                    <a href="<?= LINK ?>about" class="nav-item nav-link">A Propos!</a>
                    <a href="<?= LINK ?>service" class="nav-item nav-link">Services</a>
                    <a href="<?= LINK ?>blog" class="nav-item nav-link">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Formations</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="feature.html" class="dropdown-item">Informatique</a>
                            <a href="team.html" class="dropdown-item">Developpement</a>
                            <a href="testimonial.html" class="dropdown-item">Marketing Digital</a>
                            <a href="appoinment.html" class="dropdown-item">Autres</a>
                        </div>
                    </div>
                    <a href="<?= LINK ?>contact" class="nav-item nav-link">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-flex">
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->