<?php
$pageTitle = $pageTitle ?? 'Jharkhand IT Services | Digital Solutions That Move Business Forward';
$pageDescription = $pageDescription ?? 'Jharkhand IT Services Software Pvt. Ltd. provides web, mobile app, software development, digital marketing, hosting and technology solutions.';
$currentPage = $currentPage ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?v=20260822">
</head>

<body>
  <div class="topbar">
    <div class="container">
      <div>Ranchi's technology partner for web, app & software solutions</div>
      <div class="toplinks"><a href="tel:6209009007">+91 6209009007</a><a href="mailto:info@jharkhanditservices.com">info@jharkhanditservices.com</a></div>
    </div>
  </div>
  <header>
    <div class="container nav">
      <a class="logo" href="index.php"><img src="https://jharkhanditservices.com/images/jis-logo.png" alt="Jharkhand IT Services"></a>
      <button class="menuBtn" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="site-navigation">&#9776;</button>
      <nav class="navlinks" id="site-navigation" aria-label="Main navigation">
        <div class="navDrawerHead"><strong>Menu</strong><button class="navCloseBtn" type="button" aria-label="Close menu">&times;</button></div>
        <a class="<?= $currentPage === 'home' ? 'active' : '' ?>" href="index.php">Home</a>
        <a class="<?= $currentPage === 'about' ? 'active' : '' ?>" href="about.php">About</a>
        <a class="<?= $currentPage === 'services' ? 'active' : '' ?>" href="services.php">Services</a>
        <a class="<?= $currentPage === 'solutions' ? 'active' : '' ?>" href="solutions.php">Solutions</a>
        <a class="<?= $currentPage === 'portfolio' ? 'active' : '' ?>" href="portfolio.php">Portfolio</a>
        <a class="<?= $currentPage === 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a>
        <a class="cta" href="contact.php">Get a Quote &#8599;</a>
      </nav>
    </div>
  </header>
  <div class="navOverlay" hidden></div>
  <script>
    (() => {
      const header = document.querySelector('header');
      const navigation = document.querySelector('.navlinks');
      const menuButton = document.querySelector('.menuBtn');
      const closeButton = document.querySelector('.navCloseBtn');
      const overlay = document.querySelector('.navOverlay');
      const mobileQuery = window.matchMedia('(max-width: 1050px)');

      function setMenuState(open) {
        navigation.classList.toggle('open', open);
        header.classList.toggle('menu-open', open);
        menuButton.setAttribute('aria-expanded', String(open));
        menuButton.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        menuButton.textContent = open ? '\u00d7' : '\u2630';
        overlay.hidden = !open;
        document.body.classList.toggle('nav-lock', open && mobileQuery.matches);
      }

      function setDropState(button, open) {
        const drop = button.closest('.drop');
        drop.classList.toggle('is-open', open);
        button.setAttribute('aria-expanded', String(open));
      }

      menuButton.addEventListener('click', () => setMenuState(!navigation.classList.contains('open')));
      closeButton.addEventListener('click', () => setMenuState(false));
      overlay.addEventListener('click', () => setMenuState(false));

      document.querySelectorAll('.navDropButton').forEach(button => {
        button.addEventListener('click', () => {
          const open = !button.closest('.drop').classList.contains('is-open');
          document.querySelectorAll('.navDropButton').forEach(item => {
            if (item !== button) setDropState(item, false);
          });
          setDropState(button, open);
        });
      });

      document.querySelectorAll('.megaGroupToggle').forEach(button => {
        button.addEventListener('click', () => {
          const group = button.parentElement;
          const open = !group.classList.contains('is-expanded');
          group.parentElement.querySelectorAll(':scope > div').forEach(item => {
            item.classList.remove('is-expanded');
            item.querySelector('.megaGroupToggle')?.setAttribute('aria-expanded', 'false');
          });
          group.classList.toggle('is-expanded', open);
          button.setAttribute('aria-expanded', String(open));
        });
      });

      navigation.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
        if (mobileQuery.matches) setMenuState(false);
      }));
      document.addEventListener('keydown', event => {
        if (event.key === 'Escape') setMenuState(false);
      });
      mobileQuery.addEventListener('change', () => {
        setMenuState(false);
        document.querySelectorAll('.drop').forEach(drop => drop.classList.remove('is-open'));
      });
    })();
  </script>