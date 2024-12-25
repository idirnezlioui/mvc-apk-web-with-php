<html lang="en">

<head>
    <?php
    include "../view/includs/head.php"
    ?>
</head>

<body>
    <nav>
        <?php
        include "../view/includs/nav.php"
        ?>
    </nav>
    <main>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="../view/public/images/ph1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../view/public/images/ph2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item"data-bs-interval="3000">
                    <img src="../view/public/images/ph3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
           
            
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>