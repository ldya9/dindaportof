<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    />
    <title>Dinda Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <nav>
      <div class="nav-container">
        <div class="logo" data-aos="zoom-in" data-aos-duration="1000">
          <span>Portofolio</span>
        </div>
        <div class="links">
          <div
            class="link"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="100"
          >
            <a href="index.php">Home</a>
          </div>
          <div
            class="link"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
          >
            <a href="about.php">About</a>
          </div>
          <div
            class="link"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="300"
          >
            <a href="project.php">Project</a>
          </div>
          <div
            class="link"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="500"
          >
            <a href="contact.php">Contact</a>
          </div>
        </div>
        <i class="fa-solid fa-bars hamburg" onclick="hamburg()"></i>
      </div>
      <div class="dropdown">
        <div class="links">
          <a href="">Home</a>
          <a href="">About</a>
          <a href="">Project</a>
          <a href="">Contact</a>
          <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
        </div>
      </div>
    </nav>