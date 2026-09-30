<?php
$pageTitle = 'Contact JIS | Jharkhand IT Services';
$pageDescription = 'Contact Jharkhand IT Services for websites, mobile apps, custom software, digital marketing and hosting solutions.';
$currentPage = 'contact';
include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="contactHero">
    <div class="container contactHeroGrid">
      <div class="reveal"><span class="eyebrow"><i></i> Start a conversation</span>
        <h1>Let's make your next <span>digital move.</span></h1>
        <p>Have a business challenge, a product idea or a project waiting for the right team? Tell us what you have in mind. We usually respond within one business day.</p>
      </div>
      <div class="contactHeroVisual reveal"><strong>Good things start with a message.</strong>
        <div>
        <div class="contactHeroStats">
          <div><b>24x7</b><small>Support mindset</small></div>
          <div><b>300+</b><small>Projects delivered</small></div>
          <div><b>10+</b><small>Years experience</small></div>
        </div>
      </div>
    </div>
  </section>

  <section class="contactSection">
    <div class="container contactGrid">
      <div class="contactCard reveal" id="project-form"><span class="kicker">Project brief</span>
        <h2>Tell us what you are building.</h2>
        <p>Share a few details and we will come back with useful next steps.</p>
        <form class="contactForm" id="contactForm" action="mailto:info@jharkhanditservices.com" method="post" enctype="text/plain">
          <label for="name">Your name<input id="name" name="name" type="text" placeholder="e.g. Priya Sharma" required></label>
          <label for="email">Work email<input id="email" name="email" type="email" placeholder="you@company.com" required></label>
          <label for="service">What do you need?<select id="service" name="service" required>
              <option value="" selected disabled>Choose a service</option>
              <option>Website Development</option>
              <option>Mobile App Development</option>
              <option>Custom Software</option>
              <option>Digital Marketing & SEO</option>
              <option>Hosting & Maintenance</option>
              <option>Something else</option>
            </select></label>
          <label for="message">Project details<textarea id="message" name="message" placeholder="Tell us about your goals, timeline or budget..." required></textarea></label>
          <button class="btn" type="submit">Send Project Brief &#8594;</button>
          <div class="formStatus" id="formStatus" role="status" aria-live="polite"></div>
        </form>
      </div>
      <aside class="contactInfo reveal"><span class="kicker">Reach JIS directly</span>
        <h3>Prefer a quick chat?</h3>
        <p>Choose the channel that works best for you. We are here to help you find the right direction.</p>
        <a class="contactItem" href="tel:6209009007"><span>☎</span>
          <div><strong>Call us</strong><small>+91 6209009007</small></div>
        </a>
        <a class="contactItem" href="mailto:info@jharkhanditservices.com"><span>✉</span>
          <div><strong>Email us</strong><small>info@jharkhanditservices.com</small></div>
        </a>
        <div class="contactItem"><span>⌖</span>
          <div><strong>Visit our office</strong><small>3rd Floor, Janki Tower, Tagore Hill Road, Morabadi, Ranchi, Jharkhand-834008</small></div>
        </div>
        <div class="contactItem"><span>◷</span>
          <div><strong>Working hours</strong><small>Monday to Saturday, 10:00 AM to 7:00 PM</small></div>
        </div>
      </aside>
    </div>
  </section>

  <section class="contactMap"><iframe title="JIS office location" loading="lazy" src="https://www.google.com/maps?q=Janki%20Tower%20Morabadi%20Ranchi&output=embed"></iframe></section>
</main>

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
        <div class="contactLine">&#128205; 3rd Floor, Janki Tower, Tagore Hill Road,<br> Morabadi, Ranchi, Jharkhand-834008</div>
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
  document.querySelector('#contactForm').addEventListener('submit', event => {
    event.preventDefault();
    document.querySelector('#formStatus').textContent = 'Thanks. Your email client will open with the project brief ready to send.';
    window.location.href = 'mailto:info@jharkhanditservices.com?subject=New%20JIS%20Project%20Brief&body=' + encodeURIComponent(new FormData(event.target).get('message'));
  });
</script>
</body>

</html>