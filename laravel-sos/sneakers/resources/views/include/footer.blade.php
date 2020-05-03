

    <footer class="footer" id="contact">
      <div class="container">
        <div class="footer-nav">
          <a href="#" class="footer-nav-link">your account</a>
          <a href="#" class="footer-nav-link">contact us</a>
          <a href="#" class="footer-nav-link">terms of service</a>
        </div>
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
        <div class="copyright">
          Copyright&copy; 2019 INHA. All rights reserved. Designed by SOS group.
        </div>
      </div>
    </footer>

    <script>
      $('a[href^="#"]').on("click", function(event) {
        var target = $(this.getAttribute("send"));
        if (target.length) {
          event.preventDefault();
          $("html, body")
            .stop()
            .animate(
              {
                scrollTop: target.offset().top - 76
              },
              1000
            );
        }
      });
    </script>