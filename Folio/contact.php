<?php
include('partials/home.php');
?>

<section class="contact-section">
    <div class="contact-container">
        <div class="contact-content">
            <h2>Contact Me</h2>
            <p>Feel free to reach out to me for any project collaboration or inquiries.</p>
        </div>
        <form class="contact-form">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea rows="5" placeholder="Your Message" required></textarea>
            <button onclick="showAlert()" type="submit">Send Message</button>
        </form>
    </div>
</section>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({ 
      offset: 100, 
      duration: 1000, 
      easing: "ease-in-out", 
      once: true 
  });

  function hamburg() {
      const navbar = document.querySelector(".dropdown");
      navbar.style.transform = "translateY(0px)";
  }

  function cancel() {
      const navbar = document.querySelector(".dropdown");
      navbar.style.transform = "translateY(-500px)";
  }

  function showAlert() {
      alert("Your message has been sent successfully!");
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
