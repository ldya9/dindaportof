<?php
include('partials/home.php');
?>

        <section>
            <div class="main-container">
                <div class="image" data-aos="zoom-in-right" data-aos-duration="2500">
                    <img src="./images/main.png" alt="">
                </div>
                <div class="content">
                    <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800">Hello! I'm <span>Dinda</span></h1>
                    <div class="typewriter" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="900">I'm a <span></span></div>
                    <p data-aos="flip-up" data-aos-duration="1000" data-aos-delay="1000">I love exploring new things in the world of creativity and technology, and am always interested in making something meaningful. Let's create together!</p>
                    <div class="social-links" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="1200">
                        <a href="https://www.instagram.com/dindalyh?igsh=aTJlOGFicWo5cjF6" ><i class="fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/dinda-maulidiyah-1b6700298/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://x.com/lyw00__?t=6vHlxIwKIr-d843IUJ6gsg&s=09"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                    <div class="btn" data-aos="zoom-out-left" data-aos-duration="1000" data-aos-delay="1300">
                        <button>Download CV</button>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init({offset:0});
        </script>
        <script>
            function hamburg(){
                const navbar = document.querySelector(".dropdown")
                navbar.style.transform = "translateY(0px)"
            }
            function cancel(){
                const navbar = document.querySelector(".dropdown")
                navbar.style.transform = "translateY(-500px)"
            }
        </script>
</body>
</html>