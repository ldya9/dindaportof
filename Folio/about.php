<?php
include('partials/home.php');
?>

    <section id="about" class="about-section">
        <div class="about-container">
            <div class="about-content" data-aos="fade-up" data-aos-duration="1000">
                <h2>About Me</h2>
                <p>
                <strong>Hi! I'm Dinda, </strong> a passionate learner in the world of technology and creativity. 
                    I enjoy exploring new ideas, building engaging digital experiences, and constantly improving my skills. 
                    With a strong interest in web development and design, I strive to create meaningful projects that leave an impact.
                </p>
                <p>
                Beyond coding, I have a deep passion for research and advocacy. 
                I love diving into new insights, analyzing trends, and using technology to drive positive change. 
                Whether it's exploring innovative solutions or advocating for important causes, I believe that knowledge and action go hand in hand. 
                Let's connect and create something impactful together!
                </p>
            </div>
        </div>
    </section>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({ offset: 0 });
    </script>
    <script>
      function hamburg() {
        const navbar = document.querySelector(".dropdown");
        navbar.style.transform = "translateY(0px)";
      }
      function cancel() {
        const navbar = document.querySelector(".dropdown");
        navbar.style.transform = "translateY(-500px)";
      }

      document.addEventListener("DOMContentLoaded", function () {
        const typewriterSpan = document.querySelector(".typewriter span");
        const text = "About Me";
        let i = 0;
      });
    </script>
  </body>
</html>
