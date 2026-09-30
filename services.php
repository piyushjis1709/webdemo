<?php
$pageTitle = 'Services | Jharkhand IT Services';
$pageDescription = 'Explore website, mobile app, software, e-commerce, SEO, digital marketing, hosting and business technology services from Jharkhand IT Services.';
$currentPage = 'services';
include __DIR__ . '/includes/header.php';
?>

<main>
  <section class="servicesHero">
    <div class="grid"></div>
    <div class="container servicesHeroContent">
      <div class="reveal"><span class="eyebrow"><i></i> Digital solutions, built around you</span>
        <h1>One team for your <span>next big move.</span></h1>
        <p>From the first sketch to the final launch, we combine strategy, design, technology and growth to solve real business problems.</p>
        <div class="serviceTools"><button class="serviceFilter active" data-filter="all">All services</button><button class="serviceFilter" data-filter="build">Build</button><button class="serviceFilter" data-filter="grow">Grow</button><button class="serviceFilter" data-filter="support">Support</button></div>
      </div>
    </div>
  </section>

  <section class="serviceCatalog">
    <div class="container">
      <div class="sectionHead reveal"><span class="kicker">What we do</span>
        <h2>Technology that earns its place.</h2>
        <p>Choose a focused service or bring us a bigger challenge. We will help shape the right solution.</p>
      </div>
      <div class="servicesGrid" id="serviceGrid">
        <article class="serviceCard reveal" id="website" data-type="build" data-number="01">
          <div class="serviceIcon">&#127760;</div>
          <h3>Website Development</h3>
          <p>Responsive corporate, custom and e-commerce websites designed to perform across every screen.</p><a href="contact.php">Start a website &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="mobile" data-type="build" data-number="02">
          <div class="serviceIcon">&#128241;</div>
          <h3>Mobile App Development</h3>
          <p>Android, iOS, Flutter and React Native apps that turn useful ideas into daily habits.</p><a href="contact.php">Build an app &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="software" data-type="build" data-number="03">
          <div class="serviceIcon">&#9881;</div>
          <h3>Custom Software</h3>
          <p>Business applications, web apps, CMS, CRM, ERP and workflow automation for growing teams.</p><a href="contact.php">Discuss software &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="marketing" data-type="grow" data-number="04">
          <div class="serviceIcon">&#128200;</div>
          <h3>SEO & Digital Marketing</h3>
          <p>SEO, social media, PPC, content, video and performance marketing focused on measurable growth.</p><a href="contact.php">Grow online &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="ecommerce" data-type="build" data-number="05">
          <div class="serviceIcon">&#128722;</div>
          <h3>E-commerce Development</h3>
          <p>Online stores, shopping portals, payment integration and scalable commerce experiences.</p><a href="contact.php">Plan commerce &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="design" data-type="build" data-number="06">
          <div class="serviceIcon">&#127912;</div>
          <h3>UI/UX & Logo Design</h3>
          <p>Clear interfaces, graphics, logo design and memorable visual identities for your brand.</p><a href="contact.php">Shape a brand &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="hosting" data-type="support" data-number="07">
          <div class="serviceIcon">&#9729;</div>
          <h3>Domain & Hosting</h3>
          <p>Linux, Windows, VPS, dedicated, cloud, WordPress and webmail hosting options.</p><a href="contact.php">Find hosting &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="seo" data-type="grow" data-number="08">
          <div class="serviceIcon">&#128269;</div>
          <h3>Google Ads & SEO</h3>
          <p>Search visibility and paid campaigns that help the right customers discover you faster.</p><a href="contact.php">Plan a campaign &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="crm" data-type="build" data-number="09">
          <div class="serviceIcon">&#128202;</div>
          <h3>CRM & ERP Solutions</h3>
          <p>Centralize leads, operations, teams, reports and workflows in one connected system.</p><a href="contact.php">Improve operations &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="payment" data-type="build" data-number="10">
          <div class="serviceIcon">&#128179;</div>
          <h3>Payment Gateway Integration</h3>
          <p>Connect secure payment journeys to websites, apps, portals and online businesses.</p><a href="contact.php">Connect payments &#8594;</a>
        </article>
        <article class="serviceCard reveal" data-type="build" data-number="11">
          <div class="serviceIcon">&#127891;</div>
          <h3>Education Portals</h3>
          <p>Admissions, learning, examinations, student and institutional workflows made simpler.</p><a href="contact.php">Build a portal &#8594;</a>
        </article>
        <article class="serviceCard reveal" id="support" data-type="support" data-number="12">
          <div class="serviceIcon">&#128274;</div>
          <h3>Maintenance & Support</h3>
          <p>Security, updates, monitoring, debugging and dependable technical support after launch.</p><a href="contact.php">Get support &#8594;</a>
        </article>
      </div>
    </div>
  </section>

  <section class="serviceRibbon">
    <div class="container serviceRibbonGrid">
      <div class="reveal"><span class="kicker">Our approach</span>
        <h2>From rough idea to reliable outcome.</h2>
        <p>JIS brings the right people into the room at the right time, keeping your project focused, transparent and ready to grow.</p>
      </div>
      <div class="serviceSteps">
        <div class="serviceStep reveal"><b>01</b><strong>Think</strong><small>Understand the business problem and the people behind it.</small></div>
        <div class="serviceStep reveal"><b>02</b><strong>Build</strong><small>Design and develop a solution that feels clear and useful.</small></div>
        <div class="serviceStep reveal"><b>03</b><strong>Grow</strong><small>Launch, learn and keep improving with ongoing support.</small></div>
      </div>
    </div>
  </section>

  <section class="ctaSection">
    <div class="container">
      <div class="ctaBox reveal">
        <div><span class="kicker" style="color:#6bd7ff">Ready when you are</span>
          <h2>Have a challenge worth solving?</h2>
          <p>Tell us what you want to build, improve or grow. We will help you choose the right next step.</p>
        </div><a class="btn" href="contact.php">Start a conversation &#8594;</a>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="container footer">
    <div class="footerGrid">
      <div><img class="footerLogo" src="https://jharkhanditservices.com/images/jis-logo.png" alt="JIS">
        <p>Professional web, mobile app, software development, digital marketing and hosting solutions from Ranchi.</p>
      </div>
      <div>
        <h4>Services</h4><a href="services.html#website">Website Development</a><a href="services.html#mobile">Mobile Apps</a><a href="services.html#software">Software Development</a><a href="services.html#marketing">SEO & Marketing</a><a href="services.html#hosting">Hosting</a>
      </div>
      <div>
        <h4>Quick Links</h4><a href="about.html">About Us</a><a href="index.html#clients">Portfolio</a><a href="index.html#reviews">Reviews</a><a href="contact.html">Contact</a>
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
  document.querySelectorAll('.serviceFilter').forEach(button => button.addEventListener('click', () => {
    document.querySelectorAll('.serviceFilter').forEach(item => item.classList.remove('active'));
    button.classList.add('active');
    const filter = button.dataset.filter;
    document.querySelectorAll('.serviceCard').forEach(card => {
      card.hidden = filter !== 'all' && card.dataset.type !== filter;
    });
  }));
</script>
</body>

</html>