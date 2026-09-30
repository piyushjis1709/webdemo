<?php
$pageTitle = 'About JIS | Jharkhand IT Services';
$pageDescription = 'Learn about Jharkhand IT Services Software Pvt. Ltd., a technology partner helping businesses grow since 2015.';
$currentPage = 'about';
include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="aboutPageHero">
    <div class="grid"></div>
    <div class="container aboutHeroGrid">
      <div class="reveal">
        <span class="eyebrow"><i></i> About Jharkhand IT Services</span>
        <h1>Technology with a <span>reason to exist.</span></h1>
        <p>We are a Ranchi-based digital technology company helping ambitious businesses turn ideas into useful, reliable and measurable products.</p>
      </div>
      <div class="aboutHeroNote reveal">
        <div>
        <p>Since 2015, our team has brought strategy, design, development and marketing together so clients can move from a challenge to a clear digital outcome.</p>
      </div>
    </div>
  </section>

  <section class="story">
    <div class="container storyGrid">
      <div class="storyVisual reveal">
        <h3>10+</h3>
        <p>Years of building practical digital solutions for startups, institutions and growing enterprises.</p>
        <div class="storyQuote"><strong>Your idea. Our technology.</strong>
          <p>One focused team, one measurable outcome.</p>
        </div>
      </div>
      <div class="reveal">
        <span class="kicker">Our story</span>
        <h2>Small details. Serious business value.</h2>
        <p>Jharkhand IT Services Software Pvt. Ltd. started with a simple belief: technology should make business clearer, faster and easier to run.</p>
        <p>Today, we design and develop websites, mobile apps, business software, portals and digital growth systems for clients in India and worldwide. We stay close to the problem, communicate clearly and build for the people who will use the product every day.</p>
      </div>
    </div>
  </section>

  <section class="principles">
    <div class="container principlesGrid">
      <div class="reveal">
        <span class="kicker">How we think</span>
        <h2>Partnership is part of the product.</h2>
        <p>Good digital work depends on trust as much as technology. Our process keeps decisions visible and progress practical from the first conversation to long-term support.</p>
      </div>
      <div class="principleList reveal">
        <div class="principle"><b>01</b>
          <div><strong>Understand before we build</strong><small>We begin with your goals, audience and real operational needs.</small></div>
        </div>
        <div class="principle"><b>02</b>
          <div><strong>Make complexity feel simple</strong><small>Clear interfaces and focused systems help teams work with confidence.</small></div>
        </div>
        <div class="principle"><b>03</b>
          <div><strong>Stay accountable</strong><small>Milestones, honest communication and dependable delivery guide every project.</small></div>
        </div>
        <div class="principle"><b>04</b>
          <div><strong>Keep improving</strong><small>Launch is a beginning, not an ending. We support, measure and refine.</small></div>
        </div>
      </div>
    </div>
  </section>

  <section class="milestones">
    <div class="container">
      <div class="sectionHead reveal"><span class="kicker">Our journey</span>
        <h2>A decade of moving forward.</h2>
        <p>Experience that keeps us grounded, curious and ready for the next challenge.</p>
      </div>
      <div class="milestoneGrid">
        <article class="milestone reveal"><strong>2015</strong>
          <h3>JIS begins</h3>
          <p>A technology partner takes root in Ranchi.</p>
        </article>
        <article class="milestone reveal"><strong>300+</strong>
          <h3>Projects delivered</h3>
          <p>Websites, apps and business systems brought to life.</p>
        </article>
        <article class="milestone reveal"><strong>10+</strong>
          <h3>Years of learning</h3>
          <p>Deep experience across industries and digital platforms.</p>
        </article>
        <article class="milestone reveal"><strong>24x7</strong>
          <h3>Support mindset</h3>
          <p>Reliable help for the work that continues after launch.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="ctaSection" id="contact">
    <div class="container">
      <div class="ctaBox reveal">
        <div><span class="kicker" style="color:#6bd7ff">Let's build something useful</span>
          <h2>Have an idea? Let's turn it into reality.</h2>
          <p>Tell us what you want to build and our team will help you choose the right technology.</p>
        </div><a class="btn" href="contact.php">Get a Quote &#8594;</a>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php';
exit; ?>

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
</script>
</body>

</html>