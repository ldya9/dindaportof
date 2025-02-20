<?php
include('partials/home.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"> <!-- Tambahkan CSS AOS -->
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">My Projects</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card project-card" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/project1.png" class="card-img-top project-img" alt="Project 1">
                <div class="card-body">
                    <p class="card-text">Create a web-based information edukasi using Visual Studio Code.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card project-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="./images/project2.png" class="card-img-top project-img" alt="Project 2">
                <div class="card-body">
                    <p class="card-text">Create a web-based portfolio with Bootstrap using Visual Studio Code.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card project-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <img src="./images/project3.png" class="card-img-top project-img" alt="Project 3">
                <div class="card-body">
                    <p class="card-text">Create a web-based CRUD with Laravel and PHP using Visual Studio Code.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,  // Durasi animasi 1 detik
        once: true,      // Animasi hanya muncul sekali
        easing: "ease-in-out", // Efek animasi lebih smooth
    });

    function hamburg() {
        const navbar = document.querySelector(".dropdown");
        navbar.style.transform = "translateY(0px)";
    }

    function cancel() {
        const navbar = document.querySelector(".dropdown");
        navbar.style.transform = "translateY(-500px)";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
