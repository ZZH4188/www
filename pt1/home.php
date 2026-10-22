<?php
$content = '
    <div class="row">
        <div class="col-12 py-5 bg-dark text-secondary text-center">
            <h1 class="display-4 text-light">Custom Playing Cards</h1>
            <p class="lead mt-3">Where Gothic arches, medieval tales and wild blooms weave into your unique deck of cards.</p>
            <button class="btn btn-outline-secondary mt-4">Explore Gallery</button>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-10 offset-lg-1">
            <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="5"></button>
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/1.jpg" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/2.jpg" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/3.jpg" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="images/4.jpg" class="d-block w-100" alt="Image 4">
                    </div>
                    <div class="carousel-item">
                        <img src="images/5.jpg" class="d-block w-100" alt="Image 5">
                    </div>
                    <div class="carousel-item">
                        <img src="images/6.jpg" class="d-block w-100" alt="Image 6">
                    </div>
                    <div class="carousel-item">
                        <img src="images/7.jpg" class="d-block w-100" alt="Image 7">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <hr class="my-5 border-secondary">
    <div class="row g-4 mt-4">
        <div class="col-md-4">
            <div class="card bg-dark text-secondary h-100">
                <div class="card-body">
                    <h4 class="card-title text-light">Floral Motifs</h4>
                    <p class="card-text">Blooms, vines and thorns handcrafted for your custom playing cards.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-secondary h-100">
                <div class="card-body">
                    <h4 class="card-title text-light">Medieval Heraldry</h4>
                    <p class="card-text">Ancient crests, shields and old tales from medieval manuscripts.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-secondary h-100">
                <div class="card-body">
                    <h4 class="card-title text-light">Gothic Beauty</h4>
                    <p class="card-text">Pointed arches, subtle shadow and quiet romantic darkness.</p>
                </div>
            </div>
        </div>
    </div>
';
?>
<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>
        <div class="col bg-light">
            <div id="myBurger" class="p-3 d-lg-none text-white bg-dark">
                <div class="row">
                    <a href="#" class="text-white text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#mySidebar">
                        <i class="bi bi-list"></i><h5 class="ms-3 d-inline">My Card</h5>
                    </a>
                </div>
            </div>
            
            <div class="p-4">
                <?= $content ?? '' ?>
            </div>
        </div>
<?php require_once 'footer.php'; ?>
