  <footer>
    <div class="container footer">
      <div class="footerGrid">
        <div><img class="footerLogo" src="https://jharkhanditservices.com/images/jis-logo.png" alt="JIS">
          <p>Professional web, mobile app, software development, digital marketing and hosting solutions from Ranchi.</p>
        </div>
        <div>
          <h4>Services</h4><a href="services.php#website">Website Development</a><a href="services.php#mobile">Mobile Apps</a><a href="services.php#software">Software Development</a><a href="services.php#marketing">SEO & Marketing</a><a href="services.php#hosting">Hosting</a>
        </div>
        <div>
          <h4>Quick Links</h4><a href="about.php">About Us</a><a href="portfolio.php">Portfolio</a><a href="contact.php">Contact</a>
        </div>
        <div>
          <h4>Contact</h4>
          <div class="contactLine">&#128205; 3rd Floor, Janki Tower, Tagore Hill Road,Morabadi, Ranchi, Jharkhand-834008</div>
          <div class="contactLine">&#9742; <a href="tel:6209009007">+91 6209009007</a></div>
          <div class="contactLine">&#9993; <a href="mailto:info@jharkhanditservices.com">info@jharkhanditservices.com</a></div>
        </div>
      </div>
      <div class="copyright"><span>&copy; 2015-2026 JIS Software Pvt. Ltd. All rights reserved.</span><span>Designed by Jharkhand IT Services</span></div>
    </div>
  </footer>
  <div id="jisChatbotEmbed" aria-label="Jharkhand IT Services AI Assistant"><iframe src="chatboat.php" title="Jharkhand IT Services AI Assistant" loading="eager" allow="clipboard-write"></iframe></div>
  <style>
    #jisChatbotEmbed {
      position: fixed;
      right: 0;
      bottom: 0;
      width: 430px;
      height: 720px;
      max-width: 100vw;
      max-height: 100vh;
      z-index: 99999;
      pointer-events: none;
      overflow: hidden
    }

    #jisChatbotEmbed iframe {
      width: 100%;
      height: 100%;
      display: block;
      border: 0;
      background: transparent;
      pointer-events: auto
    }

    @media(max-width:520px) {
      #jisChatbotEmbed {
        width: 100vw;
        height: 100vh
      }
    }
  </style>
  <script>
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('show');
      });
    }, {
      threshold: .12
    });
    document.querySelectorAll('.reveal').forEach(element => observer.observe(element));
  </script>
  </body>

  </html>