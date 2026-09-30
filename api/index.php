<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Your Name | Web Developer Portfolio</title>
  <meta name="description" content="Portfolio of Your Name, a web developer building modern, useful digital experiences." />
  <meta name="theme-color" content="#17131A" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&display=swap" rel="stylesheet" />

  <style>
/* ===== 1. Variables ===== */
:root{
  --bg:#17131A; --card:#211A24; --text:#FFF7FB; --muted:#c9b9c7;
  --pink:#F3A6C8; --blush:#FFD6E7; --lavender:#B9A1FF;
  --grad:linear-gradient(135deg,var(--pink),var(--lavender));
  --border:rgba(243,166,200,.22); --glass:rgba(33,26,36,.62);
  --radius:20px; --shadow:0 12px 40px rgba(0,0,0,.35);
  --head:'Fraunces',Georgia,serif; --body:'DM Sans',system-ui,sans-serif;
  --nav-h:68px;
}
/* ===== 2. Base ===== */
*,*::before,*::after{box-sizing:border-box}
html{scroll-behavior:smooth;scroll-padding-top:calc(var(--nav-h) + 12px)}
body{margin:0;font-family:var(--body);color:var(--text);line-height:1.65;background:var(--bg);
  background-image:radial-gradient(60rem 40rem at 85% -10%,rgba(185,161,255,.14),transparent 60%),
                   radial-gradient(50rem 40rem at -10% 30%,rgba(243,166,200,.10),transparent 60%);
  background-attachment:fixed;-webkit-font-smoothing:antialiased}
img{max-width:100%;display:block}
a{color:inherit;text-decoration:none}
ul{list-style:none;margin:0;padding:0}
h1,h2,h3{font-family:var(--head);line-height:1.2;margin:0}
p{margin:0 0 1em}
:focus-visible{outline:2px solid var(--pink);outline-offset:3px;border-radius:6px}
.container{width:min(1120px,100% - 2.5rem);margin-inline:auto}
.skip-link{position:absolute;left:-999px;top:8px;background:var(--pink);color:#17131A;padding:.5rem 1rem;border-radius:8px;z-index:200}
.skip-link:focus{left:8px}
.text-gradient{background:var(--grad);-webkit-background-clip:text;background-clip:text;color:transparent}

/* ===== 3. Navbar + progress ===== */
.site-header{position:fixed;inset:0 0 auto 0;z-index:100;background:var(--glass);
  -webkit-backdrop-filter:blur(16px) saturate(140%);backdrop-filter:blur(16px) saturate(140%);
  border-bottom:1px solid var(--border)}
.navbar{height:var(--nav-h);width:min(1120px,100% - 2.5rem);margin-inline:auto;display:flex;align-items:center;justify-content:space-between}
.brand{display:flex;align-items:center;gap:.7rem;font-family:var(--head);font-weight:600}
.brand__logo{width:38px;height:38px;border-radius:12px;display:grid;place-items:center;background:var(--grad);color:#17131A;font-weight:700;font-size:.95rem}
.menu{display:flex;gap:.4rem}
.nav-link{position:relative;padding:.5rem .9rem;border-radius:999px;color:var(--muted);transition:color .25s,background .25s}
.nav-link::after{content:"";position:absolute;left:.9rem;right:.9rem;bottom:.25rem;height:2px;border-radius:2px;background:var(--grad);transform:scaleX(0);transition:transform .3s}
.nav-link:hover{color:var(--text)}
.nav-link.is-active{color:var(--text);background:rgba(243,166,200,.1)}
.nav-link:hover::after,.nav-link.is-active::after{transform:scaleX(1)}
.toggle{display:none;width:44px;height:44px;border:1px solid var(--border);border-radius:12px;background:transparent;cursor:pointer;flex-direction:column;align-items:center;justify-content:center;gap:5px}
.toggle span{width:20px;height:2px;background:var(--text);border-radius:2px;transition:transform .3s,opacity .3s}
.toggle[aria-expanded="true"] span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.toggle[aria-expanded="true"] span:nth-child(2){opacity:0}
.toggle[aria-expanded="true"] span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
.progress{position:absolute;left:0;right:0;bottom:-2px;height:3px;background:transparent}
.progress__bar{height:100%;width:0;background:var(--grad);border-radius:0 3px 3px 0;box-shadow:0 0 12px rgba(243,166,200,.75);transition:width .12s ease-out}

/* ===== 4. Buttons, tags, cards ===== */
.btn{display:inline-flex;align-items:center;justify-content:center;gap:.5rem;min-height:46px;padding:.7rem 1.4rem;border-radius:999px;border:1px solid transparent;font:600 .95rem var(--body);cursor:pointer;transition:transform .25s,box-shadow .25s,background-position .4s,border-color .25s}
.btn:hover{transform:translateY(-3px)}
.btn--primary{background:var(--grad);background-size:160% 100%;color:#17131A;box-shadow:0 6px 22px rgba(243,166,200,.28)}
.btn--primary:hover{background-position:100% 0;box-shadow:0 10px 30px rgba(185,161,255,.45)}
.btn--outline{border-color:var(--pink);color:var(--blush)}
.btn--outline:hover{background:rgba(243,166,200,.12);box-shadow:0 8px 24px rgba(243,166,200,.2)}
.btn--ghost{color:var(--muted)}
.btn--ghost:hover{color:var(--text);border-color:var(--border)}
.btn--small{min-height:40px;padding:.5rem 1.05rem;font-size:.88rem}
.tags{display:flex;flex-wrap:wrap;gap:.45rem}
.tag{font-size:.8rem;padding:.2rem .7rem;border-radius:999px;background:rgba(185,161,255,.12);color:var(--blush);border:1px solid rgba(185,161,255,.25)}
.glass-card{background:var(--glass);border:1px solid var(--border);border-radius:var(--radius);box-shadow:var(--shadow);
  -webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px)}

/* ===== 5. Hero ===== */
.hero{position:relative;min-height:100svh;display:flex;align-items:center;padding:calc(var(--nav-h) + 3rem) 0 4rem;overflow:hidden}
.hero__inner{position:relative;display:grid;grid-template-columns:1.25fr .75fr;gap:3rem;align-items:center}
.status-badge{display:inline-flex;align-items:center;gap:.6rem;padding:.4rem 1rem;border-radius:999px;background:rgba(243,166,200,.1);border:1px solid var(--border);font-size:.9rem;color:var(--blush)}
.status-badge__dot{width:9px;height:9px;border-radius:50%;background:#7ee2a8;box-shadow:0 0 0 0 rgba(126,226,168,.6);animation:pulse 2s infinite}
@keyframes pulse{70%{box-shadow:0 0 0 10px rgba(126,226,168,0)}100%{box-shadow:0 0 0 0 rgba(126,226,168,0)}}
.hero__title{font-size:clamp(2.2rem,5.2vw,3.8rem);font-weight:600;margin:1.2rem 0 .8rem;letter-spacing:-.01em}
.hero__role{color:var(--lavender);font-weight:500;margin-bottom:.6rem}
.hero__bio{max-width:52ch;color:var(--muted);font-size:1.05rem}
.hero__actions{display:flex;flex-wrap:wrap;gap:.8rem;margin:1.8rem 0}
.socials{display:flex;gap:.6rem;flex-wrap:wrap}
.social-link{padding:.4rem 1rem;border-radius:999px;border:1px solid var(--border);color:var(--muted);font-size:.9rem;transition:color .25s,border-color .25s,transform .25s,box-shadow .25s}
.social-link:hover{color:var(--text);border-color:var(--pink);transform:translateY(-3px);box-shadow:0 8px 22px rgba(243,166,200,.2)}
.hero__visual{display:grid;place-items:center}
.profile-frame{position:relative;width:min(340px,80%);aspect-ratio:4/5;padding:6px;border-radius:32px 32px 120px 32px;background:var(--grad);box-shadow:0 0 70px rgba(243,166,200,.28)}
.profile-frame__inner{width:100%;height:100%;border-radius:27px 27px 115px 27px;overflow:hidden;background:var(--card) linear-gradient(160deg,rgba(243,166,200,.25),rgba(185,161,255,.2))}
.profile-frame img{width:100%;height:100%;object-fit:cover}
.orb{position:absolute;border-radius:50%;filter:blur(70px);opacity:.5;animation:float 9s ease-in-out infinite}
.orb--pink{width:320px;height:320px;background:var(--pink);top:8%;left:-6%;opacity:.22}
.orb--lavender{width:360px;height:360px;background:var(--lavender);bottom:0;right:-8%;opacity:.22;animation-delay:-4s}
@keyframes float{50%{transform:translateY(-28px) scale(1.06)}}
.sparkle{position:absolute;color:var(--blush);animation:twinkle 3.5s ease-in-out infinite}
.sparkle::before{content:"\2726"}
.s1{top:20%;left:46%;font-size:1rem}.s2{top:68%;left:8%;font-size:.8rem;animation-delay:-1s}
.s3{top:30%;right:8%;font-size:1.2rem;animation-delay:-2s}.s4{bottom:14%;left:52%;font-size:.9rem;animation-delay:-.5s}
@keyframes twinkle{0%,100%{opacity:.15;transform:scale(.8)}50%{opacity:.9;transform:scale(1.15)}}

/* ===== 6. Sections ===== */
.section{padding:5.5rem 0}
.section__header{margin-bottom:2.6rem;max-width:60ch}
.section__title{font-size:clamp(1.8rem,3.6vw,2.5rem);font-weight:600}
.section__title::after{content:"";display:block;width:56px;height:3px;border-radius:3px;background:var(--grad);margin-top:.8rem}
.section__subtitle{color:var(--muted);margin:.9rem 0 0}
.reveal{opacity:0;transform:translateY(26px);transition:opacity .8s ease,transform .8s ease}
.reveal.is-visible{opacity:1;transform:none}

/* About */
.about{display:grid;grid-template-columns:1.2fr 1fr;gap:1.5rem}
.about__intro{padding:2rem}
.about__intro .tags{margin-top:1.2rem}
.about__facts{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
.info-card{padding:1.2rem 1.3rem}
.info-card h3{font-size:1rem;color:var(--pink);margin-bottom:.35rem}
.info-card p{margin:0;color:var(--muted);font-size:.93rem}

/* Skills */
.skills{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.5rem}
.skill-group{padding:1.6rem}
.skill-group h3{font-size:1.15rem;margin-bottom:1rem}
.skill-list{display:flex;flex-wrap:wrap;gap:.6rem}
.skill-badge{display:inline-flex;align-items:center;gap:.5rem;padding:.45rem .95rem;border-radius:999px;background:rgba(255,255,255,.04);border:1px solid var(--border);font-size:.92rem;transition:transform .25s,background .25s,border-color .25s,box-shadow .25s}
.skill-badge i{font-style:normal;color:var(--pink);font-size:.8rem}
.skill-badge:hover{transform:translateY(-3px);background:rgba(185,161,255,.14);border-color:var(--lavender);box-shadow:0 8px 22px rgba(185,161,255,.22)}

/* Projects */
.projects{display:grid;grid-template-columns:repeat(auto-fill,minmax(310px,1fr));gap:1.6rem}
.project-card{position:relative;display:flex;flex-direction:column;overflow:hidden;border-radius:var(--radius);background:var(--card);border:1px solid var(--border);
  box-shadow:var(--shadow);transform-style:preserve-3d;transition:transform .25s ease-out,box-shadow .3s,border-color .3s;will-change:transform}
.project-card:hover{border-color:rgba(185,161,255,.5);box-shadow:0 18px 50px rgba(185,161,255,.2)}
.project-card::before{content:"";position:absolute;inset:0;z-index:1;pointer-events:none;opacity:0;transition:opacity .3s;
  background:radial-gradient(360px circle at var(--mx,50%) var(--my,50%),rgba(243,166,200,.16),transparent 65%)}
.project-card:hover::before{opacity:1}
.project-card__media{aspect-ratio:16/10;overflow:hidden;background:linear-gradient(135deg,rgba(243,166,200,.3),rgba(185,161,255,.25))}
.project-card__media img{width:100%;height:100%;object-fit:cover;transition:transform .6s}
.project-card:hover .project-card__media img{transform:scale(1.05)}
.project-card__body{position:relative;z-index:2;display:flex;flex-direction:column;gap:.8rem;padding:1.4rem;flex:1}
.project-card__body h3{font-size:1.2rem}
.project-card__body p{color:var(--muted);font-size:.95rem;margin:0}
.project-card__actions{display:flex;gap:.6rem;margin-top:auto;padding-top:.4rem}

/* Exercises */
.filters{display:flex;flex-wrap:wrap;gap:.6rem;margin-bottom:1.8rem}
.filter-btn{padding:.5rem 1.15rem;border-radius:999px;border:1px solid var(--border);background:transparent;color:var(--muted);font:500 .92rem var(--body);cursor:pointer;transition:all .25s}
.filter-btn:hover{color:var(--text);border-color:var(--pink);transform:translateY(-2px)}
.filter-btn.is-active{background:var(--grad);color:#17131A;border-color:transparent;box-shadow:0 6px 20px rgba(243,166,200,.3)}
.exercise-list{display:grid;gap:.9rem}
.exercise-card{display:flex;align-items:center;justify-content:space-between;gap:1rem;flex-wrap:wrap;padding:1.1rem 1.4rem;border-radius:16px;background:var(--glass);border:1px solid var(--border);transition:transform .25s,border-color .25s,box-shadow .25s;animation:pop .4s ease both}
@keyframes pop{from{opacity:0;transform:scale(.97)}}
.exercise-card:hover{transform:translateX(6px);border-color:var(--lavender);box-shadow:0 10px 30px rgba(185,161,255,.16)}
.exercise-card h3{font-size:1.05rem}
.exercise-card p{margin:.15rem 0 0;font-size:.88rem;color:var(--muted)}
.downloads{display:flex;gap:.5rem}
.download-btn{padding:.4rem .95rem;border-radius:10px;border:1px solid var(--border);font-size:.82rem;font-weight:600;color:var(--blush);transition:all .25s}
.download-btn:hover{background:var(--grad);color:#17131A;border-color:transparent;transform:translateY(-2px)}
.exercise-empty{color:var(--muted);text-align:center;padding:2rem}

/* Footer */
.site-footer{border-top:1px solid var(--border);padding:2rem 0;background:rgba(23,19,26,.8)}
.footer__inner{display:flex;align-items:center;justify-content:space-between;gap:1rem;flex-wrap:wrap;color:var(--muted);font-size:.9rem}
.footer__inner p{margin:0}

/* ===== 7. Responsive ===== */
@media (max-width:900px){
  .hero__inner,.about{grid-template-columns:1fr}
  .hero__visual{order:-1}
  .profile-frame{width:min(240px,60%)}
  .hero{min-height:auto}
}
@media (max-width:760px){
  .toggle{display:flex}
  .menu{position:absolute;top:var(--nav-h);left:0;right:0;flex-direction:column;padding:1rem 1.25rem 1.4rem;background:rgba(23,19,26,.96);
    -webkit-backdrop-filter:blur(16px);backdrop-filter:blur(16px);border-bottom:1px solid var(--border);
    opacity:0;visibility:hidden;transform:translateY(-10px);transition:all .3s}
  .menu.is-open{opacity:1;visibility:visible;transform:none}
  .nav-link{padding:.8rem 1rem}
}
@media (max-width:560px){
  .section{padding:4rem 0}
  .about__facts{grid-template-columns:1fr}
  .projects{grid-template-columns:1fr}
  .hero__actions .btn{flex:1 1 100%}
  .footer__inner{justify-content:center;text-align:center}
}
@media (prefers-reduced-motion:reduce){
  *,*::before,*::after{animation:none!important;transition:none!important;scroll-behavior:auto!important}
  .reveal{opacity:1;transform:none}
}
  </style>
</head>

<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <!-- ===== Header: navbar + scroll progress bar ===== -->
  <header class="site-header">
    <nav class="navbar" aria-label="Main navigation">
      <a class="brand" href="#home" aria-label="Your Name, back to home">
        <span class="brand__logo" aria-hidden="true"></span><span>safae</span>
      </a>
      <button class="toggle" id="navToggle" type="button" aria-expanded="false" aria-controls="navMenu" aria-label="Open menu">
        <span></span><span></span><span></span>
      </button>
      <ul class="menu" id="navMenu">
        <li><a class="nav-link is-active" href="#home">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li><a class="nav-link" href="#skills">Skills</a></li>
        <li><a class="nav-link" href="#projects">Projects</a></li>
        <li><a class="nav-link" href="#exercises">Exercises</a></li>
      </ul>
    </nav>
    <div class="progress" role="progressbar" aria-label="Page scroll progress" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
      <div class="progress__bar" id="progressBar"></div>
    </div>
  </header>

  <main id="main">

    <!-- ===== Hero ===== -->
    <section class="hero" id="home" aria-labelledby="heroTitle">
      <div aria-hidden="true">
        <span class="orb orb--pink"></span><span class="orb orb--lavender"></span>
        <span class="sparkle s1"></span><span class="sparkle s2"></span><span class="sparkle s3"></span><span class="sparkle s4"></span>
      </div>
      <div class="container hero__inner">
        <div>
          <p class="status-badge"><span class="status-badge__dot" aria-hidden="true"></span>Open to opportunities</p>
          <h1 class="hero__title" id="heroTitle">Hi, I'm <span class="text-gradient">safae el ouahabi</span>. I design and build modern web experiences.</h1>
          <p class="hero__role">Web Developer &middot; Computer Science Student</p>
          <p class="hero__bio">I create clean, responsive and accessible websites with HTML, CSS, JavaScript and PHP. I care about code that is easy to read and interfaces that are a pleasure to use.</p>
          <div class="hero__actions">
            <a class="btn btn--primary" href="#projects">View My Projects</a>
            <a class="btn btn--outline" href="#exercises">Browse Exercises</a>
            <a class="btn btn--ghost" href="docs/cv.pdf" download>Download CV</a>
          </div>
          <ul class="socials" aria-label="Social links">
            <li><a class="social-link" href="https://github.com/your-username" target="_blank" rel="noopener noreferrer">GitHub</a></li>
            <li><a class="social-link" href="https://www.linkedin.com/in/your-username" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
            <li><a class="social-link" href="https://www.instagram.com/your-username" target="_blank" rel="noopener noreferrer">Instagram</a></li>
          </ul>
        </div>
        <!-- Replace images/profile.jpg with your photo -->
        <div class="hero__visual">
          <div class="profile-frame"><div class="profile-frame__inner">
            <img src="images/profile.jpg" alt="Portrait of Your Name" width="400" height="500" onerror="this.style.display='none'" />
          </div></div>
        </div>
      </div>
    </section>

    <!-- ===== About ===== -->
    <section class="section reveal" id="about" aria-labelledby="aboutTitle">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title" id="aboutTitle">About me</h2>
          <p class="section__subtitle">A little about who I am and what I care about.</p>
        </header>
        <div class="about">
          <article class="glass-card about__intro">
            <p>I'm a computer science student who loves turning ideas into useful, good-looking websites. I enjoy the whole journey, from sketching a layout in Figma to writing the code and testing it on real devices.</p>
            <p>I'm passionate about web development and about building digital experiences that feel modern, simple and helpful.</p>
            <ul class="tags" aria-label="Personal qualities"><li class="tag">Creative</li><li class="tag">Curious</li><li class="tag">Always learning</li></ul>
          </article>
          <div class="about__facts">
            <article class="glass-card info-card"><h3>Education</h3><p>Your Degree, Your University</p></article>
            <article class="glass-card info-card"><h3>Location</h3><p>Your City, Country</p></article>
            <article class="glass-card info-card"><h3>Current focus</h3><p>Full-stack development with PHP and MySQL</p></article>
            <article class="glass-card info-card"><h3>Career goal</h3><p>A junior web developer role in a team that values quality</p></article>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== Skills (rendered by JavaScript) ===== -->
    <section class="section reveal" id="skills" aria-labelledby="skillsTitle">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title" id="skillsTitle">Skills and tech stack</h2>
          <p class="section__subtitle">The tools I use to design, build and ship.</p>
        </header>
        <div class="skills" id="skillsGrid"></div>
      </div>
    </section>

    <!-- ===== Projects (rendered by JavaScript) ===== -->
    <section class="section reveal" id="projects" aria-labelledby="projectsTitle">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title" id="projectsTitle">Academic and personal projects</h2>
          <p class="section__subtitle">Selected work from my studies and side projects.</p>
        </header>
        <div class="projects" id="projectsGrid"></div>
      </div>
    </section>

    <!-- ===== Exercises / Labs (rendered + filtered by JavaScript) ===== -->
    <section class="section reveal" id="exercises" aria-labelledby="exercisesTitle">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title" id="exercisesTitle">Exercises and labs</h2>
          <p class="section__subtitle">Coursework I've completed, with files you can download.</p>
        </header>
        <div class="filters" id="filters" role="group" aria-label="Filter exercises by category"></div>
        <ul class="exercise-list" id="exerciseList"></ul>
        <p class="exercise-empty" id="exerciseEmpty" hidden>No exercises in this category yet.</p>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer__inner">
      <p>&copy; <span id="year">2026</span> Your Name. All rights reserved.</p>
      <ul class="socials" aria-label="Social links">
        <li><a class="social-link" href="https://github.com/your-username" target="_blank" rel="noopener noreferrer">GitHub</a></li>
        <li><a class="social-link" href="https://www.linkedin.com/in/your-username" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
        <li><a class="social-link" href="https://www.instagram.com/your-username" target="_blank" rel="noopener noreferrer">Instagram</a></li>
      </ul>
      <p>Built with HTML, CSS &amp; JavaScript</p>
    </div>
  </footer>

  <script>
/* =====================================================
   1. DATA: edit these arrays to change your content
   ===================================================== */
const skills = {
  Frontend: ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap'],
  Backend:  ['PHP', 'MySQL', 'PDO'],
  Tools:    ['Git', 'GitHub', 'VS Code', 'Figma', 'WAMP']
};

const projects = [
  { title: 'Personal Developer Portfolio', text: 'A responsive portfolio with animated sections and a filterable exercise library.',
    image: 'images/project1.jpg', tags: ['HTML5', 'CSS3', 'JavaScript'],
    github: 'https://github.com/your-username/portfolio', demo: 'https://your-username.github.io/portfolio' },
  { title: 'Shiny Brand: Static E-commerce Website', text: 'A product catalogue with a responsive grid, product pages and a shopping-style layout.',
    image: 'images/project2.jpg', tags: ['HTML5', 'CSS3', 'Bootstrap'],
    github: 'https://github.com/your-username/shiny-brand', demo: 'https://your-username.github.io/shiny-brand' },
  { title: 'HTML / CSS Projects', text: 'Layouts and components: flexbox and grid pages, forms, cards and responsive navigation.',
    image: 'images/project3.jpg', tags: ['HTML5', 'CSS3', 'Grid'],
    github: 'https://github.com/your-username/html-css-projects', demo: 'https://your-username.github.io/html-css-projects' },
  { title: 'JavaScript Exercises', text: 'Small interactive apps practising DOM manipulation, events and form validation.',
    image: 'images/project1.jpg', tags: ['JavaScript', 'DOM'],
    github: 'https://github.com/your-username/javascript-exercises', demo: 'https://your-username.github.io/javascript-exercises' },
  { title: 'PHP / MySQL Projects', text: 'Database-driven apps with CRUD features, secure PDO queries and server-side validation.',
    image: 'images/project2.jpg', tags: ['PHP', 'MySQL', 'PDO'],
    github: 'https://github.com/your-username/php-mysql-projects', demo: '#' }
];

const filters = [
  ['all', 'All'], ['html-css', 'HTML/CSS'], ['bootstrap', 'Bootstrap'], ['javascript', 'JavaScript'],
  ['php-mysql', 'PHP/MySQL'], ['python', 'Python'], ['uml', 'UML']
];

// files: { type: path }. Remove a type to hide its download button.
const exercises = [
  { title: 'Responsive Landing Page', meta: 'HTML/CSS · Semantic markup, Flexbox', category: 'html-css',
    files: { pdf: 'docs/html-css-landing.pdf', png: 'images/html-css-landing.png', zip: 'docs/html-css-landing.zip' } },
  { title: 'CSS Grid Gallery', meta: 'HTML/CSS · Grid, custom properties', category: 'html-css',
    files: { pdf: 'docs/css-grid-gallery.pdf', zip: 'docs/css-grid-gallery.zip' } },
  { title: 'Bootstrap Dashboard Layout', meta: 'Bootstrap · Grid system, components', category: 'bootstrap',
    files: { pdf: 'docs/bootstrap-dashboard.pdf', png: 'images/bootstrap-dashboard.png', zip: 'docs/bootstrap-dashboard.zip' } },
  { title: 'To-Do List App', meta: 'JavaScript · DOM, events, local storage', category: 'javascript',
    files: { pdf: 'docs/js-todo.pdf', zip: 'docs/js-todo.zip' } },
  { title: 'Form Validation', meta: 'JavaScript · Regular expressions', category: 'javascript',
    files: { pdf: 'docs/js-form-validation.pdf', zip: 'docs/js-form-validation.zip' } },
  { title: 'Student Management CRUD', meta: 'PHP/MySQL · PDO, prepared statements', category: 'php-mysql',
    files: { pdf: 'docs/php-crud.pdf', zip: 'docs/php-crud.zip' } },
  { title: 'Python Basics Workbook', meta: 'Python · Loops, functions, lists', category: 'python',
    files: { pdf: 'docs/python-basics.pdf', zip: 'docs/python-basics.zip' } },
  { title: 'Library System Diagrams', meta: 'UML · Use case and class diagrams', category: 'uml',
    files: { pdf: 'docs/uml-library.pdf', png: 'images/uml-library.png' } }
];

/* =====================================================
   2. RENDERING: builds the skills, projects and exercises
   ===================================================== */
const $ = (selector) => document.querySelector(selector);

function renderSkills() {
  $('#skillsGrid').innerHTML = Object.entries(skills).map(([group, items]) => `
    <article class="glass-card skill-group">
      <h3>${group}</h3>
      <ul class="skill-list">
        ${items.map((s) => `<li class="skill-badge"><i aria-hidden="true">✦</i>${s}</li>`).join('')}
      </ul>
    </article>`).join('');
}

function renderProjects() {
  $('#projectsGrid').innerHTML = projects.map((p) => `
    <article class="project-card" data-tilt>
      <div class="project-card__media">
        <img src="${p.image}" alt="Preview of ${p.title}" loading="lazy" width="640" height="400" onerror="this.style.display='none'" />
      </div>
      <div class="project-card__body">
        <h3>${p.title}</h3>
        <p>${p.text}</p>
        <ul class="tags" aria-label="Technologies used">${p.tags.map((t) => `<li class="tag">${t}</li>`).join('')}</ul>
        <div class="project-card__actions">
          <a class="btn btn--small btn--outline" href="${p.github}" target="_blank" rel="noopener noreferrer">GitHub</a>
          <a class="btn btn--small btn--primary" href="${p.demo}" target="_blank" rel="noopener noreferrer">Live Demo</a>
        </div>
      </div>
    </article>`).join('');
}

function renderFilters() {
  $('#filters').innerHTML = filters.map(([key, label], i) =>
    `<button class="filter-btn${i === 0 ? ' is-active' : ''}" type="button" data-filter="${key}" aria-pressed="${i === 0}">${label}</button>`
  ).join('');
}

function renderExercises(category = 'all') {
  const list = exercises.filter((ex) => category === 'all' || ex.category === category);
  $('#exerciseList').innerHTML = list.map((ex) => `
    <li class="exercise-card">
      <div><h3>${ex.title}</h3><p>${ex.meta}</p></div>
      <div class="downloads">
        ${Object.entries(ex.files).map(([type, path]) =>
          `<a class="download-btn" href="${path}" download aria-label="Download ${ex.title} as ${type.toUpperCase()}">${type.toUpperCase()}</a>`
        ).join('')}
      </div>
    </li>`).join('');
  $('#exerciseEmpty').hidden = list.length > 0;
}

/* =====================================================
   3. INTERACTIONS
   ===================================================== */
// Exercise filter buttons
function initFilters() {
  $('#filters').addEventListener('click', (e) => {
    const btn = e.target.closest('.filter-btn');
    if (!btn) return;
    document.querySelectorAll('.filter-btn').forEach((b) => {
      const active = b === btn;
      b.classList.toggle('is-active', active);
      b.setAttribute('aria-pressed', active);
    });
    renderExercises(btn.dataset.filter);
  });
}

// Scroll progress bar (percentage of the page scrolled)
function initProgress() {
  const bar = $('#progressBar');
  const wrap = bar.parentElement;
  const update = () => {
    const max = document.documentElement.scrollHeight - window.innerHeight;
    const pct = max > 0 ? Math.min(100, (window.scrollY / max) * 100) : 0;
    bar.style.width = pct + '%';
    wrap.setAttribute('aria-valuenow', Math.round(pct));
  };
  window.addEventListener('scroll', update, { passive: true });
  window.addEventListener('resize', update);
  update();
}

// Mobile menu
function initMenu() {
  const toggle = $('#navToggle');
  const menu = $('#navMenu');
  const setOpen = (open) => {
    menu.classList.toggle('is-open', open);
    toggle.setAttribute('aria-expanded', open);
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
  };
  toggle.addEventListener('click', () => setOpen(!menu.classList.contains('is-open')));
  menu.addEventListener('click', (e) => { if (e.target.closest('a')) setOpen(false); });
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape') setOpen(false); });
}

// Highlight the nav link of the section currently in view
function initActiveLink() {
  const links = document.querySelectorAll('.nav-link');
  const sections = [...links].map((l) => document.querySelector(l.getAttribute('href')));
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      links.forEach((l) => l.classList.toggle('is-active', l.getAttribute('href') === '#' + entry.target.id));
    });
  }, { rootMargin: '-45% 0px -50% 0px' });
  sections.forEach((s) => s && observer.observe(s));
}

// Scroll reveal with IntersectionObserver
function initReveal() {
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) { entry.target.classList.add('is-visible'); obs.unobserve(entry.target); }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
}

// Project cards: mouse-following spotlight + subtle 3D tilt
function initCardEffects() {
  const canHover = window.matchMedia('(hover: hover)').matches;
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!canHover || reduce) return;

  document.querySelectorAll('[data-tilt]').forEach((card) => {
    card.addEventListener('mousemove', (e) => {
      const r = card.getBoundingClientRect();
      const x = e.clientX - r.left;
      const y = e.clientY - r.top;
      card.style.setProperty('--mx', x + 'px');
      card.style.setProperty('--my', y + 'px');
      const rotY = (x / r.width - 0.5) * 8;   // max 4deg each way
      const rotX = (0.5 - y / r.height) * 8;
      card.style.transform = `perspective(900px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateY(-6px)`;
    });
    card.addEventListener('mouseleave', () => { card.style.transform = ''; });
  });
}

/* =====================================================
   4. START
   ===================================================== */
renderSkills();
renderProjects();
renderFilters();
renderExercises();
initFilters();
initProgress();
initMenu();
initActiveLink();
initReveal();
initCardEffects();
$('#year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
