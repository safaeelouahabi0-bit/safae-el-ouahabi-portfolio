<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Your Name | Web Developer Portfolio</title>
  <meta name="description" content="Portfolio of Your Name, a web developer building modern, useful and beautifully crafted digital experiences." />
  <meta name="theme-color" content="#17131A" />

  <!-- Fonts: Fraunces (headings), DM Sans (body), JetBrains Mono (code details) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <!-- ========== HEADER: navbar + scroll progress bar ========== -->
  <header class="site-header" id="siteHeader">
    <nav class="navbar" aria-label="Main navigation">
      <a class="navbar__brand" href="#home" aria-label="Your Name, back to home">
        <span class="navbar__logo" aria-hidden="true"></span>
        <span class="navbar__name">safae</span>
      </a>

      <button class="navbar__toggle" id="navToggle" type="button" aria-expanded="false" aria-controls="navMenu" aria-label="Open menu">
        <span class="navbar__bar"></span>
        <span class="navbar__bar"></span>
        <span class="navbar__bar"></span>
      </button>

      <ul class="navbar__menu" id="navMenu">
        <li><a class="nav-link is-active" href="#home">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li><a class="nav-link" href="#skills">Skills</a></li>
        <li><a class="nav-link" href="#projects">Projects</a></li>
        <li><a class="nav-link" href="#exercises">Exercises</a></li>
        <li><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </nav>

    <div class="scroll-progress" role="progressbar" aria-label="Page scroll progress" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
      <div class="scroll-progress__bar" id="scrollProgressBar"></div>
    </div>
  </header>

  <main id="main">

    <!-- ========== HERO ========== -->
    <section class="hero" id="home" aria-labelledby="heroTitle">
      <!-- Decorative background: glowing orbs and sparkles (hidden from screen readers) -->
      <div class="hero__decor" aria-hidden="true">
        <span class="orb orb--pink"></span>
        <span class="orb orb--lavender"></span>
        <span class="sparkle sparkle--1"></span>
        <span class="sparkle sparkle--2"></span>
        <span class="sparkle sparkle--3"></span>
        <span class="sparkle sparkle--4"></span>
      </div>

      <div class="container hero__inner">
        <div class="hero__content">
          <p class="status-badge">
            <span class="status-badge__dot" aria-hidden="true"></span>
            Open to opportunities
          </p>

          <h1 class="hero__title" id="heroTitle">
            Hi, I'm <span class="text-gradient">Your Name</span>.
            I design and build modern web experiences.
          </h1>

          <p class="hero__role">Web Developer &middot; Computer Science Student</p>

          <p class="hero__bio">
            I create clean, responsive and accessible websites with HTML, CSS, JavaScript and PHP.
            I care about code that is easy to read and interfaces that are a pleasure to use.
          </p>

          <div class="hero__actions">
            <a class="btn btn--primary" href="#projects">View My Projects</a>
            <a class="btn btn--outline" href="#contact">Contact Me</a>
            <a class="btn btn--ghost" href="docs/cv.pdf" download>Download CV</a>
          </div>

          <ul class="social-list" aria-label="Social links">
            <li><a class="social-link" href="https://github.com/your-username" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><img src="assets/icons/github.svg" alt="" width="20" height="20" /></a></li>
            <li><a class="social-link" href="https://www.linkedin.com/in/your-username" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><img src="assets/icons/linkedin.svg" alt="" width="20" height="20" /></a></li>
            <li><a class="social-link" href="https://www.instagram.com/your-username" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><img src="assets/icons/instagram.svg" alt="" width="20" height="20" /></a></li>
          </ul>
        </div>

        <!-- Profile photo placeholder: replace images/profile.jpg with your photo -->
        <div class="hero__visual">
          <div class="profile-frame">
            <img class="profile-frame__img" src="images/profile.jpg" alt="Portrait of Your Name" width="400" height="480" />
          </div>
        </div>
      </div>
    </section>

    <!-- ========== ABOUT ========== -->
    <section class="section reveal" id="about" aria-labelledby="aboutTitle">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title" id="aboutTitle">About me</h2>
          <p class="section__subtitle">A little about who I am and what I care about.</p>
        </header>

        <div class="about">
          <article class="glass-card about__intro">
            <p>
              I'm a computer science student who loves turning ideas into useful, good-looking websites.
              I enjoy the whole journey, from sketching a layout in Figma to writing the code and testing it on real devices.
            </p>
            <p>
              I'm passionate about web development and about building digital experiences that feel modern, simple and helpful.
            </p>
            <ul class="tag-list" aria-label="Personal qualities">
              <li class="tag">Creative</li>
              <li class="tag">Curious</li>
              <li class="tag">Always learning</li>
            </ul>
          </article>

          <div class="about__facts">
            <article class="glass-card info-card">
              <h3 class="info-card__title">Education</h3>
              <p>Full stack developer — 2nd Year,ISTA NTIC</p>
            </article>
            <article class="glass-card info-card">
              <h3 class="info-card__title">Location</h3>
              <p>Tangier, Morocco</p>
            </article>
            <article class="glass-card info-card">
              <h3 class="info-card__title">Current focus</h3>
              <p>Full-stack development with PHP and MySQL</p>
            </article>
            <article class="glass-card info-card">
              <h3 class="info-card__title">Career goal</h3>
              <p>A junior web developer role in a team that values quality</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== SKILLS ========== -->
    <!-- Badges are written in HTML so the page works without JavaScript.
         script.js can re-render them from a data array if you prefer. -->
    <section class="section reveal" id="skills" aria-labelledby="skillsTitle">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title" id="skillsTitle">Skills and tech stack</h2>
          <p class="section__subtitle">The tools I use to design, build and ship.</p>
        </header>

        <div class="skills" id="skillsGrid">
          <article class="glass-card skill-group">
            <h3 class="skill-group__title">Frontend</h3>
            <ul class="skill-group__list">
              <li class="skill-badge"><img src="assets/icons/html5.svg" alt="" width="20" height="20" /><span>HTML5</span></li>
              <li class="skill-badge"><img src="assets/icons/css3.svg" alt="" width="20" height="20" /><span>CSS3</span></li>
              <li class="skill-badge"><img src="assets/icons/javascript.svg" alt="" width="20" height="20" /><span>JavaScript</span></li>
              <li class="skill-badge"><img src="assets/icons/bootstrap.svg" alt="" width="20" height="20" /><span>Bootstrap</span></li>
            </ul>
          </article>

          <article class="glass-card skill-group">
            <h3 class="skill-group__title">Backend</h3>
            <ul class="skill-group__list">
              <li class="skill-badge"><img src="assets/icons/php.svg" alt="" width="20" height="20" /><span>PHP</span></li>
              <li class="skill-badge"><img src="assets/icons/mysql.svg" alt="" width="20" height="20" /><span>MySQL</span></li>
              <li class="skill-badge"><img src="assets/icons/pdo.svg" alt="" width="20" height="20" /><span>PDO</span></li>
            </ul>
          </article>

          <article class="glass-card skill-group">
            <h3 class="skill-group__title">Tools</h3>
            <ul class="skill-group__list">
              <li class="skill-badge"><img src="assets/icons/git.svg" alt="" width="20" height="20" /><span>Git</span></li>
              <li class="skill-badge"><img src="assets/icons/github.svg" alt="" width="20" height="20" /><span>GitHub</span></li>
              <li class="skill-badge"><img src="assets/icons/vscode.svg" alt="" width="20" height="20" /><span>VS Code</span></li>
              <li class="skill-badge"><img src="assets/icons/figma.svg" alt="" width="20" height="20" /><span>Figma</span></li>
              <li class="skill-badge"><img src="assets/icons/wamp.svg" alt="" width="20" height="20" /><span>WAMP</span></li>
            </ul>
          </article>
        </div>
      </div>
    </section>

    <!-- ========== PROJECTS ========== -->
    <!-- Each card uses data-tilt; script.js adds the spotlight (--mouse-x / --mouse-y) and tilt. -->
    <section class="section reveal" id="projects" aria-labelledby="projectsTitle">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title" id="projectsTitle">Academic and personal projects</h2>
          <p class="section__subtitle">Selected work from my studies and side projects.</p>
        </header>

        <div class="projects" id="projectsGrid">

          <article class="project-card" data-tilt>
            <div class="project-card__media">
              <img src="images/project1.jpg" alt="Preview of my personal developer portfolio" loading="lazy" width="640" height="400" />
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Personal Developer Portfolio</h3>
              <p class="project-card__text">A responsive single-page portfolio with animated sections, a filterable exercise library and an EmailJS contact form.</p>
              <ul class="tag-list" aria-label="Technologies used">
                <li class="tag">HTML5</li><li class="tag">CSS3</li><li class="tag">JavaScript</li>
              </ul>
              <div class="project-card__actions">
                <a class="btn btn--small btn--outline" href="https://github.com/your-username/portfolio" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a class="btn btn--small btn--primary" href="https://your-username.github.io/portfolio" target="_blank" rel="noopener noreferrer">Live Demo</a>
              </div>
            </div>
          </article>

          <article class="project-card" data-tilt>
            <div class="project-card__media">
              <img src="images/project2.jpg" alt="Preview of the Shiny Brand static e-commerce website" loading="lazy" width="640" height="400" />
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">Shiny Brand: Static E-commerce Website</h3>
              <p class="project-card__text">A product catalogue site with a responsive grid, product pages and a shopping-style layout built from scratch.</p>
              <ul class="tag-list" aria-label="Technologies used">
                <li class="tag">HTML5</li><li class="tag">CSS3</li><li class="tag">Bootstrap</li>
              </ul>
              <div class="project-card__actions">
                <a class="btn btn--small btn--outline" href="https://github.com/your-username/shiny-brand" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a class="btn btn--small btn--primary" href="https://your-username.github.io/shiny-brand" target="_blank" rel="noopener noreferrer">Live Demo</a>
              </div>
            </div>
          </article>

          <article class="project-card" data-tilt>
            <div class="project-card__media">
              <img src="images/project3.jpg" alt="Preview of my HTML and CSS practice projects" loading="lazy" width="640" height="400" />
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">HTML / CSS Projects</h3>
              <p class="project-card__text">A collection of layouts and components: flexbox and grid pages, forms, cards and responsive navigation.</p>
              <ul class="tag-list" aria-label="Technologies used">
                <li class="tag">HTML5</li><li class="tag">CSS3</li><li class="tag">Flexbox</li><li class="tag">Grid</li>
              </ul>
              <div class="project-card__actions">
                <a class="btn btn--small btn--outline" href="https://github.com/your-username/html-css-projects" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a class="btn btn--small btn--primary" href="https://your-username.github.io/html-css-projects" target="_blank" rel="noopener noreferrer">Live Demo</a>
              </div>
            </div>
          </article>

          <article class="project-card" data-tilt>
            <div class="project-card__media">
              <img src="images/project1.jpg" alt="Preview of my JavaScript exercises" loading="lazy" width="640" height="400" />
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">JavaScript Exercises</h3>
              <p class="project-card__text">Small interactive apps that practise DOM manipulation, events, arrays and form validation.</p>
              <ul class="tag-list" aria-label="Technologies used">
                <li class="tag">JavaScript</li><li class="tag">DOM</li><li class="tag">CSS3</li>
              </ul>
              <div class="project-card__actions">
                <a class="btn btn--small btn--outline" href="https://github.com/your-username/javascript-exercises" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a class="btn btn--small btn--primary" href="https://your-username.github.io/javascript-exercises" target="_blank" rel="noopener noreferrer">Live Demo</a>
              </div>
            </div>
          </article>

          <article class="project-card" data-tilt>
            <div class="project-card__media">
              <img src="images/project2.jpg" alt="Preview of my PHP and MySQL project" loading="lazy" width="640" height="400" />
            </div>
            <div class="project-card__body">
              <h3 class="project-card__title">PHP / MySQL Projects</h3>
              <p class="project-card__text">Database-driven applications with CRUD features, secure PDO queries and server-side validation.</p>
              <ul class="tag-list" aria-label="Technologies used">
                <li class="tag">PHP</li><li class="tag">MySQL</li><li class="tag">PDO</li>
              </ul>
              <div class="project-card__actions">
                <a class="btn btn--small btn--outline" href="https://github.com/your-username/php-mysql-projects" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a class="btn btn--small btn--primary" href="https://your-username.github.io/php-mysql-projects" target="_blank" rel="noopener noreferrer">Live Demo</a>
              </div>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- ========== EXERCISES / LABS ========== -->
    <!-- Filter buttons use data-filter; each item uses data-category (same value as its filter). -->
    <section class="section reveal" id="exercises" aria-labelledby="exercisesTitle">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title" id="exercisesTitle">Exercises and labs</h2>
          <p class="section__subtitle">Coursework I've completed, with files you can download.</p>
        </header>

        <div class="filter-bar" id="exerciseFilters" role="group" aria-label="Filter exercises by category">
          <button class="filter-btn is-active" type="button" data-filter="all" aria-pressed="true">All</button>
          <button class="filter-btn" type="button" data-filter="html-css" aria-pressed="false">HTML/CSS</button>
          <button class="filter-btn" type="button" data-filter="bootstrap" aria-pressed="false">Bootstrap</button>
          <button class="filter-btn" type="button" data-filter="javascript" aria-pressed="false">JavaScript</button>
          <button class="filter-btn" type="button" data-filter="php-mysql" aria-pressed="false">PHP/MySQL</button>
          <button class="filter-btn" type="button" data-filter="python" aria-pressed="false">Python</button>
          <button class="filter-btn" type="button" data-filter="uml" aria-pressed="false">UML</button>
        </div>

        <ul class="exercise-list" id="exerciseList">

          <li class="exercise-card" data-category="html-css">
            <div class="exercise-card__info">
              <h3 class="exercise-card__title">Responsive Landing Page</h3>
              <p class="exercise-card__meta">HTML/CSS &middot; Semantic markup, Flexbox</p>
            </div>
            <div class="exercise-card__downloads">
              <a class="download-btn" href="docs/html-css-landing.pdf" download aria-label="Download Responsive Landing Page as PDF"><img src="assets/icons/file-pdf.svg" alt="" width="16" height="16" />PDF</a>
              <a class="download-btn" href="images/html-css-landing.png" download aria-label="Download Responsive Landing Page as PNG"><img src="assets/icons/file-image.svg" alt="" width="16" height="16" />PNG</a>
              <a class="download-btn" href="docs/html-css-landing.zip" download aria-label="Download Responsive Landing Page as ZIP"><img src="assets/icons/file-zip.svg" alt="" width="16" height="16" />ZIP</a>
            </div>
          </li>

          <li class="exercise-card" data-category="html-css">
            <div class="exercise-card__info">
              <h3 class="exercise-card__title">CSS Grid Gallery</h3>
              <p class="exercise-card__meta">HTML/CSS &middot; Grid, custom properties</p>
            </div>
            <div class="exercise-card__downloads">
              <a class="download-btn" href="docs/css-grid-gallery.pdf" download aria-label="Download CSS Grid Gallery as PDF"><img src="assets/icons/file-pdf.svg" alt="" width="16" height="16" />PDF</a>
              <a class="download-btn" href="docs/css-grid-gallery.zip" download aria-label="Download CSS Grid Gallery as ZIP"><img src="assets/icons/file-zip.svg" alt="" width="16" height="16" />ZIP</a>
            </div>
          </li>

          <li class="exercise-card" data-category="bootstrap">
            <div class="exercise-card__info">
              <h3 class="exercise-card__title">Bootstrap Dashboard Layout</h3>
              <p class="exercise-card__meta">Bootstrap &middot; Grid system, components</p>
            </div>
            <div class="exercise-card__downloads">
              <a class="download-btn" href="docs/bootstrap-dashboard.pdf" download aria-label="Download Bootstrap Dashboard Layout as PDF"><img src="assets/icons/file-pdf.svg" alt="" width="16" height="16" />PDF</a>
              <a class="download-btn" href="images/bootstrap-dashboard.png" download aria-label="Download Bootstrap Dashboard Layout as PNG"><img src="assets/icons/file-image.svg" alt="" width="16" height="16" />PNG</a>
              <a class="download-btn" href="docs/bootstrap-dashboard.zip" download aria-label="Download Bootstrap Dashboard Layout as ZIP"><img src="assets/icons/file-zip.svg" alt="" width="16" height="16" />ZIP</a>
            </div>
          </li>

          <li class="exercise-card" data-category="javascript">
            <div class="exercise-card__info">
              <h3 class="exercise-card__title">To-Do List App</h3>
              <p class="exercise-card__meta">JavaScript &middot; DOM, events, local storage</p>
            </div>
            <div class="exercise-card__downloads">
              <a class="download-btn" href="docs/js-todo.pdf" download aria-label="Download To-Do List App as PDF"><img src="assets/icons/file-pdf.svg" alt="" width="16" height="16" />PDF</a>
              <a class="download-btn" href="docs/js-todo.zip" download aria-label="Download To-Do List App as ZIP"><img src="assets/icons/file-zip.svg" alt="" width="16" height="16" />ZIP</a>
            </div>
          </li>

          <li class="exercise-card" data-category="javascript">
            <div class="exercise-card__info">
              <h3 class="exercise-card__title">Form Validation</h3>
              <p class="exercise-card__meta">JavaScript &middot; Regular expressions, error messages</p>
            </div>
            <div class="exercise-card__downloads">
              <a class="download-btn" href="docs/js-form-validation.pdf" download aria-label="Download Form Validation as PDF"><img src="assets/icons/file-pdf.svg" alt="" width="16" height="16" />PDF</a>
              <a class="download-btn" href="docs/js-form-validation.zip" download aria-label="Download Form Validation as ZIP"><img src="assets/icons/file-zip.svg" alt="" width="16" height="16" />ZIP</a>
            </div>
          </li>

          <li class="exercise-card" data-category="php-mysql">
            <div class="exercise-card__info">
              <h3 class="exercise-card__title">Student Management CRUD</h3>
              <p class="exercise-card__meta">PHP/MySQL &middot; PDO, prepared statements</p>
            </div>
            <div class="exercise-card__downloads">
              <a class="download-btn" href="docs/php-crud.pdf" download aria-label="Download Student Management CRUD as PDF"><img src="assets/icons/file-pdf.svg" alt="" width="16" height="16" />PDF</a>
              <a class="download-btn" href="docs/php-crud.zip" download aria-label="Download Student Management CRUD as ZIP"><img src="assets/icons/file-zip.svg" alt="" width="16" height="16" />ZIP</a>
            </div>
          </li>

          <li class="exercise-card" data-category="python">
            <div class="exercise-card__info">
              <h3 class="exercise-card__title">Python Basics Workbook</h3>
              <p class="exercise-card__meta">Python &middot; Loops, functions, lists</p>
            </div>
            <div class="exercise-card__downloads">
              <a class="download-btn" href="docs/python-basics.pdf" download aria-label="Download Python Basics Workbook as PDF"><img src="assets/icons/file-pdf.svg" alt="" width="16" height="16" />PDF</a>
              <a class="download-btn" href="docs/python-basics.zip" download aria-label="Download Python Basics Workbook as ZIP"><img src="assets/icons/file-zip.svg" alt="" width="16" height="16" />ZIP</a>
            </div>
          </li>

          <li class="exercise-card" data-category="uml">
            <div class="exercise-card__info">
              <h3 class="exercise-card__title">Library System Diagrams</h3>
              <p class="exercise-card__meta">UML &middot; Use case and class diagrams</p>
            </div>
            <div class="exercise-card__downloads">
              <a class="download-btn" href="docs/uml-library.pdf" download aria-label="Download Library System Diagrams as PDF"><img src="assets/icons/file-pdf.svg" alt="" width="16" height="16" />PDF</a>
              <a class="download-btn" href="images/uml-library.png" download aria-label="Download Library System Diagrams as PNG"><img src="assets/icons/file-image.svg" alt="" width="16" height="16" />PNG</a>
            </div>
          </li>

        </ul>

        <p class="exercise-empty" id="exerciseEmpty" hidden>No exercises in this category yet. Check back soon.</p>
      </div>
    </section>

    <!-- ========== CONTACT ========== -->
    <section class="section reveal" id="contact" aria-labelledby="contactTitle">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title" id="contactTitle">Let's work together</h2>
          <p class="section__subtitle">Have an opportunity or a question? Send me a message and I'll reply soon.</p>
        </header>

        <div class="contact">
          <!-- Left column: direct contact links -->
          <div class="contact__info glass-card">
            <p class="contact__intro">
              I'm looking for internships and junior roles, and I'm happy to chat about web projects.
            </p>
            <ul class="contact-list">
              <li><a class="contact-link" href="mailto:you@example.com"><img src="assets/icons/mail.svg" alt="" width="20" height="20" /><span>you@example.com</span></a></li>
              <li><a class="contact-link" href="https://github.com/your-username" target="_blank" rel="noopener noreferrer"><img src="assets/icons/github.svg" alt="" width="20" height="20" /><span>GitHub</span></a></li>
              <li><a class="contact-link" href="https://www.linkedin.com/in/your-username" target="_blank" rel="noopener noreferrer"><img src="assets/icons/linkedin.svg" alt="" width="20" height="20" /><span>LinkedIn</span></a></li>
              <li><a class="contact-link" href="https://www.instagram.com/your-username" target="_blank" rel="noopener noreferrer"><img src="assets/icons/instagram.svg" alt="" width="20" height="20" /><span>Instagram</span></a></li>
            </ul>
          </div>

          <!-- Right column: contact form (EmailJS-ready).
               The name attributes below match the variables in your EmailJS template:
               {{from_name}}, {{reply_to}}, {{message}}. -->
          <form class="contact-form glass-card" id="contactForm" novalidate>
            <div class="form-field">
              <label for="contactName">Name</label>
              <input type="text" id="contactName" name="from_name" autocomplete="name" placeholder="Your name" required aria-describedby="contactNameError" />
              <p class="form-field__error" id="contactNameError" role="alert"></p>
            </div>

            <div class="form-field">
              <label for="contactEmail">Email</label>
              <input type="email" id="contactEmail" name="reply_to" autocomplete="email" placeholder="you@example.com" required aria-describedby="contactEmailError" />
              <p class="form-field__error" id="contactEmailError" role="alert"></p>
            </div>

            <div class="form-field">
              <label for="contactMessage">Message</label>
              <textarea id="contactMessage" name="message" rows="5" placeholder="How can I help?" required aria-describedby="contactMessageError"></textarea>
              <p class="form-field__error" id="contactMessageError" role="alert"></p>
            </div>

            <button class="btn btn--primary btn--full" type="submit" id="contactSubmit">Send message</button>
            <p class="form-status" id="formStatus" role="status" aria-live="polite"></p>
          </form>
        </div>
      </div>
    </section>

  </main>

  <!-- ========== FOOTER ========== -->
  <footer class="site-footer">
    <div class="container site-footer__inner">
      <p class="site-footer__copy">&copy; <span id="currentYear">2026</span> Your Name. All rights reserved.</p>

      <ul class="social-list social-list--small" aria-label="Social links">
        <li><a class="social-link" href="https://github.com/your-username" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><img src="assets/icons/github.svg" alt="" width="18" height="18" /></a></li>
        <li><a class="social-link" href="https://www.linkedin.com/in/your-username" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><img src="assets/icons/linkedin.svg" alt="" width="18" height="18" /></a></li>
        <li><a class="social-link" href="https://www.instagram.com/your-username" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><img src="assets/icons/instagram.svg" alt="" width="18" height="18" /></a></li>
      </ul>

      <p class="site-footer__built">Built with HTML, CSS &amp; JavaScript</p>
    </div>
  </footer>

  <!-- EmailJS SDK. Add your Public Key, Service ID and Template ID in script.js (never in this file). -->
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script src="script.js" defer></script>
</body>
</html>
