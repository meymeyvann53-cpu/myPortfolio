<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>portfolio</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../style/style.css">
</head>

<body>
  <!-- ================= NAVBAR ================= -->
  <div class="navbar">
    <div class="container">
      <div class="nav-inner">
        <div class="portfolio"><a href="#home">Portfolio</a></div>
        <div class="menu">
          <nav id="menuItem">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#resume">Resume</a>
            <a href="#contact">Contact</a>
          </nav>
        </div>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </div>

  <main>
    <!-- ================= HOME / HERO ================= -->
    <section class="home" id="home">
      <div class="bars-animation">
        <div class="bar" style="--i:6;"></div>
        <div class="bar" style="--i:5;"></div>
        <div class="bar" style="--i:4;"></div>
        <div class="bar" style="--i:3;"></div>
        <div class="bar" style="--i:2;"></div>
        <div class="bar" style="--i:1;"></div>
      </div>

      <div class="home-info">
        <p class="hero-tag">Hello, I'm</p>
        <h1>MeyMey Vann</h1>
        <!-- 7 words x 4s each = 28s cycle (see .typewriter span in style.css).
             --i must count DOWN from the number of words to 1, in the order they appear. -->
        <h2 class="typewriter">I'm
          <span style="--i:7;" data-text="Problem Solver">Problem Solver</span>
          <span style="--i:6;" data-text="IT Student">IT Student</span>
          <span style="--i:5;" data-text="Full-Stack Web Developer student">Full-Stack Web Developer student</span>
          <span style="--i:4;" data-text="IT assistant">IT assistant</span>
          <span style="--i:3;" data-text="girl who loves coding">girl who loves coding</span>
          <span style="--i:2;" data-text="strong girl">strong girl</span>
          <span style="--i:1;" data-text="girl who  sl ke mnak eg">girl who sl ke mnak eg</span>
        </h2>
        <p>Now I am still learning this major .
          In my future i wanna be a full-stack web developer.
          This is my portfolio website.I designed it for myself
          for make other people know about my information and give
          me an importfunity to join thier company.
        </p>
        <div class="btn-sci">
          <a href="#projects" class="btn">View MY Projects</a>
          <a href="#" class="btn btn-outline">Download my CV</a>
          <div class="sci">
            <a href="#" aria-label="GitHub"><i class="bx bxl-github"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="bx bxl-linkedin"></i></a>
            <a href="#" aria-label="Twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" aria-label="Facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" aria-label="Instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
      </div>

      <div class="home-img">
        <div class="img-box">
          <div class="img-item">
            <img src="../image/ChatGPT Image Sep 1, 2026, 02_45_09 PM.png" alt="MeyMey Vann">
          </div>
        </div>
      </div>
    </section>

    <section class="stats-strip reveal">
      <div class="stat-item">
        <h3>Year 3</h3>
        <p>IT Student</p>
      </div>
      <div class="stat-item">
        <h3>8+</h3>
        <p>Technologies Learning</p>
      </div>
      <div class="stat-item">
        <h3>2</h3>
        <p>Work / Internship Roles</p>
      </div>
      <div class="stat-item">
        <h3>3</h3>
        <p>Years of Study So Far</p>
      </div>
    </section>

    <!-- ================= ABOUT ================= -->
    <section class="about reveal" id="about">
      <h2 class="heading">About <span>Me</span></h2>
      <!-- image + text must BOTH sit inside .about-container (side-by-side layout) -->
      <div class="about-container">
        <div class="about-img">
          <div class="about-img-box">
            <img src="../image/ChatGPT Image Sep 1, 2026, 02_45_09 PM.png" alt="MeyMey Vann">
          </div>
        </div>
        <div class="about-text">
          <p>I'm MeyMey Vann, a Year 3 IT student currently studying full-stack web development.
            I became interested in technology because I like the feeling of turning an idea into
            something people can actually click through and use — even a simple page feels
            satisfying to build.</p>
          <p>Right now I'm focused on strengthening my frontend fundamentals (HTML, CSS,
            JavaScript) while getting more comfortable with PHP and MySQL on the backend.
            I enjoy building small, practical projects — school assignments, personal practice
            sites, and this very portfolio — because it's the fastest way I've found to actually
            learn instead of just reading about it.</p>
          <p>My goal is to keep building real projects, get more comfortable across the full
            stack, and grow into a capable full-stack web developer. I'm still early in that
            journey, but I'm consistent about it.</p>
          <div class="about-info-grid">
            <div><strong>Name:</strong> Meymey Vann</div>
            <div><strong>Status:</strong> Year 3 IT student</div>
            <div><strong>Goal:</strong> Full-Stack Web Developer</div>
            <div><strong>Email:</strong> meymeyvann53@gmail.com</div>
          </div>
          <a href="#contact" class="btn">Let's Connect</a>
        </div>
      </div>
    </section>

    <!-- ================= SERVICES ================= -->
    <section class="services reveal" id="services">
      <h2 class="heading">What I <span>Can Do</span></h2>
      <p class="section-lead">These reflect my current skills and the kind of project
        work I can take on as I keep learning - not claims of professional freelance experience.</p>
      <div class="services-container">
        <div class="services-box">
          <div class="icon"><i class="bx bxs-code-alt"></i></div>
          <h3>Frontend Web Development</h3>
          <p>Building interactive page and UI with clean, structured markup and styling.</p>
          <div class="tech-tags"><span>HTML</span><span>CSS</span><span>JavaScript</span></div>
        </div>
        <div class="services-box">
          <div class="icon"><i class="bx bxs-devices"></i></div>
          <h3>Responsive Web Design</h3>
          <p>Designing layouts that adapt cleanly across desktop, tablet and mobile screens.</p>
          <div class="tech-tags"><span>CSS Grid</span><span>Flexbox</span><span>Media Queries</span></div>
        </div>
        <div class="services-box">
          <div class="icon"><i class="bx bxl-php"></i></div>
          <h3>PHP Web Development</h3>
          <p>Building dynamic page and reusable components using PHP includes and logic.</p>
          <div class="tech-tags"><span>PHP</span><span>MySQL</span></div>
        </div>
        <div class="services-box">
          <div class="icon"><i class="bx bxs-data"></i></div>
          <h3>Database Development</h3>
          <p>Designing simple relational database structures and connecting them to web apps.</p>
          <div class="tech-tags"><span>MySQL</span><span>SQL</span></div>
        </div>
        <div class="services-box">
          <div class="icon"><i class="bx bxs-layout"></i></div>
          <h3>UI Implementation</h3>
          <p>Turning a design concept into a working, styled interface in the browser.</p>
          <div class="tech-tags"><span>HTML</span><span>CSS</span></div>
        </div>
        <div class="services-box">
          <div class="icon"><i class="bx bxs-wrench"></i></div>
          <h3>Web Maintenance</h3>
          <p>Fixing bugs, cleaning up layout issues and keeping existing sites working well.</p>
          <div class="tech-tags"><span>Debugging</span><span>Git</span></div>
        </div>
        <div class="services-box">
          <div class="icon"><i class="bx bxs-spanner"></i></div>
          <h3>Basic IT Support</h3>
          <p>Troubleshooting common technical issues and providing end-user support.</p>
          <div class="tech-tags"><span>Troubleshooting</span></div>
        </div>
      </div>
    </section>

    <!-- ================= SKILLS ================= -->
    <section class="skills reveal" id="skills">
      <h2 class="heading">My <span>Skills</span></h2>
      <p class="section-lead">Grouped by area, with an honest label instead of a made-up percentage.</p>
      <div class="skills-grid">

        <div class="skill-group">
          <h3><i class="bx bx-code-curly"></i> Frontend</h3>
          <div class="skill-bar"><span>HTML</span><em class="tag comfortable">Comfortable</em>
            <div class="bar"><i style="width:85%"></i></div></div>
          <div class="skill-bar"><span>CSS</span><em class="tag comfortable">Comfortable</em>
            <div class="bar"><i style="width:80%"></i></div></div>
          <div class="skill-bar"><span>JavaScript</span><em class="tag developing">Developing</em>
            <div class="bar"><i style="width:55%"></i></div></div>
          <div class="skill-bar"><span>Responsive Design</span><em class="tag developing">Developing</em>
            <div class="bar"><i style="width:60%"></i></div></div>
        </div>

        <div class="skill-group">
          <h3><i class="bx bx-server"></i> Backend</h3>
          <div class="skill-bar"><span>PHP</span><em class="tag developing">Developing</em>
            <div class="bar"><i style="width:55%"></i></div></div>
          <div class="skill-bar"><span>MySQL</span><em class="tag developing">Developing</em>
            <div class="bar"><i style="width:50%"></i></div></div>
          <div class="skill-bar"><span>Server-side Basics</span><em class="tag familiar">Familiar</em>
            <div class="bar"><i style="width:35%"></i></div></div>
        </div>

        <div class="skill-group">
          <h3><i class="bx bx-terminal"></i> Programming</h3>
          <div class="skill-bar"><span>Java</span><em class="tag familiar">Familiar</em>
            <div class="bar"><i style="width:40%"></i></div></div>
          <div class="skill-bar"><span>C#</span><em class="tag familiar">Familiar</em>
            <div class="bar"><i style="width:35%"></i></div></div>
          <div class="skill-bar"><span>Core Concepts</span><em class="tag developing">Developing</em>
            <div class="bar"><i style="width:55%"></i></div></div>
        </div>

        <div class="skill-group">
          <h3><i class="bx bx-wrench"></i> Tools</h3>
          <div class="skill-bar"><span>Git &amp; GitHub</span><em class="tag developing">Developing</em>
            <div class="bar"><i style="width:55%"></i></div></div>
          <div class="skill-bar"><span>VS Code</span><em class="tag comfortable">Comfortable</em>
            <div class="bar"><i style="width:80%"></i></div></div>
          <div class="skill-bar"><span>Apache NetBeans</span><em class="tag familiar">Familiar</em>
            <div class="bar"><i style="width:40%"></i></div></div>
          <div class="skill-bar"><span>Docker</span><em class="tag learning">Learning</em>
            <div class="bar"><i style="width:20%"></i></div></div>
        </div>

        <div class="skill-group">
          <h3><i class="bx bx-bulb"></i> Currently Learning</h3>
          <div class="skill-bar"><span>React</span><em class="tag learning">Learning</em>
            <div class="bar"><i style="width:20%"></i></div></div>
          <div class="skill-bar"><span>SQL / DB Design</span><em class="tag learning">Learning</em>
            <div class="bar"><i style="width:30%"></i></div></div>
          <div class="skill-bar"><span>Full-Stack Dev</span><em class="tag learning">Learning</em>
            <div class="bar"><i style="width:30%"></i></div></div>
        </div>
      </div>

      <!-- Technology stack -->
      <h3 class="subheading">Technology Stack</h3>
      <div class="tech-stack">
        <div class="tech-item"><i class="bx bxl-html5"></i><span>HTML5</span></div>
        <div class="tech-item"><i class="bx bxl-css3"></i><span>CSS3</span></div>
        <div class="tech-item"><i class="bx bxl-javascript"></i><span>JavaScript</span></div>
        <div class="tech-item"><i class="bx bxl-php"></i><span>PHP</span></div>
        <div class="tech-item"><i class="bx bxs-data"></i><span>MySQL</span></div>
        <div class="tech-item"><i class="bx bxl-java"></i><span>Java</span></div>
        <div class="tech-item"><i class="bx bxs-file-blank"></i><span>C#</span></div>
        <div class="tech-item"><i class="bx bxl-react"></i><span>React</span></div>
        <div class="tech-item"><i class="bx bxl-git"></i><span>Git</span></div>
        <div class="tech-item"><i class="bx bxl-github"></i><span>GitHub</span></div>
        <div class="tech-item"><i class="bx bxl-docker"></i><span>Docker</span></div>
        <div class="tech-item"><i class="bx bxl-visual-studio"></i><span>VS Code</span></div>
      </div>

      <!-- Learning goals -->
      <h3 class="subheading">Currently Learning</h3>
      <div class="learning-goals">
        <div class="goal-pill"><i class="bx bx-bulb"></i> Advanced JavaScript</div>
        <div class="goal-pill"><i class="bx bx-bulb"></i> React</div>
        <div class="goal-pill"><i class="bx bx-bulb"></i> PHP</div>
        <div class="goal-pill"><i class="bx bx-bulb"></i> MySQL</div>
        <div class="goal-pill"><i class="bx bx-bulb"></i> Full-Stack Development</div>
        <div class="goal-pill"><i class="bx bx-bulb"></i> API Development</div>
        <div class="goal-pill"><i class="bx bx-bulb"></i> Git / GitHub</div>
        <div class="goal-pill"><i class="bx bx-bulb"></i> Docker</div>
        <div class="goal-pill"><i class="bx bx-bulb"></i> IT Support &amp; Networking</div>
      </div>
    </section>

    <!-- ================= PROJECTS ================= -->
    <section class="projects-page reveal" id="projects">
      <h2 class="heading">My <span>Projects</span></h2>
      <p class="section-lead">A mix of real projects I've built and placeholders for work I'm still adding - clearly marked either way.</p>
      <div class="project-filters">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="frontend">Frontend</button>
        <button class="filter-btn" data-filter="php">PHP</button>
        <button class="filter-btn" data-filter="database">Database</button>
        <button class="filter-btn" data-filter="school">School Projects</button>
        <button class="filter-btn" data-filter="personal">Personal Projects</button>
      </div>
      <div class="project-grid">
        <div class="project-card real" data-category="frontend personal php">
          <div class="project-thumb"><i class="bx bx-code-block"></i></div>
          <div class="project-body">
            <span class="project-tag real-tag">Real Project</span>
            <h3>Personal Portfolio Website</h3>
            <p>This very site - a responsive personal portfolio built to showcase who I am, what I'm learning, and what I've built so far.</p>
            <div class="tech-tags"><span>HTML</span><span>CSS</span><span>JavaScript</span><span>PHP</span></div>
            <ul class="feature-list">
              <li>Sticky navbar with mobile hamburger menu</li>
              <li>Scroll-based section highlighting</li>
              <li>Animated hero section and skill bars</li>
              <li>Fully responsive across devices</li>
            </ul>
            <div class="project-actions">
              <a href="#" class="btn-sm">GitHub</a>
              <a href="#" class="btn-sm">Live Demo</a>
              <button class="btn-sm btn-details" data-project="portfolio">View Details</button>
            </div>
          </div>
        </div>
        <div class="project-card placeholder" data-category="php database school">
          <div class="project-thumb"><i class="bx bx-restaurant"></i></div>
          <div class="project-body">
            <span class="project-tag">Placeholder - Add Details</span>
            <h3>Restaurant Management System</h3>
            <p>Add a description of this project: what it manages, who it's for and what problem it solves.</p>
            <div class="tech-tags"><span>PHP</span><span>MySQL</span></div>
            <div class="project-actions">
              <a href="#" class="btn-sm">GitHub</a>
              <button class="btn-sm btn-details" data-project="restaurant">View Details</button>
            </div>
          </div>
        </div>
        <div class="project-card placeholder" data-category="school database">
          <div class="project-thumb"><i class="bx bx-data"></i></div>
          <div class="project-body">
            <span class="project-tag">Placeholder - Add Details</span>
            <h3>PHP / MySQL School Project</h3>
            <p>Add details of a school assignment involving PHP and a MySQL database.</p>
            <div class="tech-tags"><span>PHP</span><span>MySQL</span></div>
            <div class="project-actions">
              <button class="btn-sm btn-details" data-project="school">View Details</button>
            </div>
          </div>
        </div>
        <div class="project-card placeholder" data-category="frontend personal">
          <div class="project-thumb"><i class="bx bx-window-alt"></i></div>
          <div class="project-body">
            <span class="project-tag">Placeholder - Add Details</span>
            <h3>Frontend Practice Project</h3>
            <p>Add a small frontend-only project - a layout clone, a landing page or a UI experiment.</p>
            <div class="tech-tags"><span>HTML</span><span>CSS</span><span>JavaScript</span></div>
            <div class="project-actions">
              <button class="btn-sm btn-details" data-project="frontend">View Details</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Project details modal (hidden until .open is added by script.js) -->
    <div class="modal-overlay" id="projectModal">
      <div class="modal-box">
        <button class="modal-close" id="modalClose" aria-label="Close">&times;</button>
        <div id="modalContent"></div>
      </div>
    </div>

    <!-- ================= RESUME ================= -->
    <section class="resume reveal" id="resume">
      <div class="resume-container">

        <!-- left column: intro + tab buttons -->
        <div class="resume-box">
          <h2>Why Hire Me</h2>
          <p class="desc">I am a passionate and dedicated full-stack web developer with a strong foundation in both frontend
            and backend technologies. My experience include working on diverse projects that have honed my
            problem-solving skills and ability to work effectively in team environments.
          </p>
          <!-- data-target must match the extra class on each .resume-detail below -->
          <button class="resume-btn active" data-target="learning">Experience &amp; Learning</button>
          <button class="resume-btn" data-target="education">Education</button>
          <button class="resume-btn" data-target="achievements">Achievements</button>
          <button class="resume-btn" data-target="future">Future Goals</button>
          <a href="#" class="btn resume-cv-btn">Download CV</a>
        </div>

        <!-- right column: the four panels are SIBLINGS (never nest one inside another) -->
        <div class="resume-box">

          <div class="resume-detail learning active">
            <h2 class="heading-left">My <span>Experience &amp; Learning</span></h2>
            <p class="professional-note"><i class="bx bx-info-circle"></i> Professional Experience: Currently seeking my first professional opportunity.</p>
            <p class="desc">I have worked on various web development projects, gaining experience in both frontend and backend technologies.</p>
            <div class="resume-list">
              <div class="resume-item">
                <p class="year">2025 - Present</p>
                <h3>IT Assistant</h3>
                <p class="company">WTX Leanding Fashion CO.,LTD</p>
                <p>Assisting in the development and maintenance of web applications,
                  troubleshooting technical issues, and providing support to end-users.
                </p>
              </div>
              <div class="resume-item">
                <p class="year">2024 - 2025</p>
                <h3>Internship</h3>
                <p class="company">WTX Leanding Fashion CO.,LTD</p>
                <p>Gained hands-on experience in web development, working on real-world projects and collaborating with a team of developers.</p>
              </div>
              <div class="resume-item">
                <p class="year">Ongoing</p>
                <h3>Academic &amp; Personal Projects</h3>
                <p class="company">Self-directed / School</p>
                <p>Building school assignments and personal practice projects to apply what I learn in frontend, PHP and MySQL.</p>
              </div>
            </div>
          </div>

          <div class="resume-detail education">
            <h2 class="heading-left">My <span>Education</span></h2>
            <p class="desc">I have strong educational background in information technology and software engineering.</p>
            <div class="resume-list">
              <div class="resume-item">
                <p class="year">2024 - Present</p>
                <h3>Third Year of Full-Stack Web Developer</h3>
                <p class="company">Royal University of Law and Economic</p>
                <p>Pursuing a degree in Full-Stack Web Development, gaining knowledge in both frontend and backend technologies.</p>
              </div>
              <div class="resume-item">
                <p class="year">2021 - 2024</p>
                <h3>High School</h3>
                <p class="company">Hun Sen Prek Amble High School</p>
                <p>Completed High school get grade B at BACII and started learning IT</p>
              </div>
              <div class="resume-item">
                <p class="year">2018 - 2021</p>
                <h3>High School Diploma</h3>
                <p class="company">Hun Sen Prek Amble High School</p>
                <p>Complete Diploma and get good grades</p>
              </div>
            </div>

            <h3 class="subheading">Learning Journey</h3>
            <div class="timeline">
              <div class="timeline-item"><span class="dot"></span>
                <div><strong>Computer &amp; IT Fundamentals</strong><p>Started learning the basics of computers and IT.</p></div></div>
              <div class="timeline-item"><span class="dot"></span>
                <div><strong>HTML &amp; CSS</strong><p>Learned to build and style static web pages.</p></div></div>
              <div class="timeline-item"><span class="dot"></span>
                <div><strong>JavaScript</strong><p>Started adding interactivity to web pages.</p></div></div>
              <div class="timeline-item"><span class="dot"></span>
                <div><strong>PHP &amp; MySQL</strong><p>Learned server-side logic and database-driven pages.</p></div></div>
              <div class="timeline-item"><span class="dot"></span>
                <div><strong>School Projects</strong><p>Built PHP/MySQL and frontend projects for coursework.</p></div></div>
              <div class="timeline-item"><span class="dot"></span>
                <div><strong>Git &amp; GitHub</strong><p>Started version-controlling my projects properly.</p></div></div>
              <div class="timeline-item"><span class="dot"></span>
                <div><strong>React (Started)</strong><p>Currently starting to learn React fundamentals.</p></div></div>
              <div class="timeline-item current"><span class="dot"></span>
                <div><strong>Full-Stack Development</strong><p>Currently developing my full-stack skills across the board.</p></div></div>
              <div class="timeline-item goal"><span class="dot"></span>
                <div><strong>Goal: Full-Stack Developer</strong><p>Working toward becoming a capable full-stack web developer.</p></div></div>
            </div>
          </div>

          <div class="resume-detail achievements">
            <h2 class="heading-left">What I've <span>Learned</span></h2>
            <p class="desc">Things I've accomplished so far through practice and coursework.</p>
            <div class="achievements-grid">
              <div class="achievement-card"><i class="bx bx-devices"></i><p>Built responsive websites</p></div>
              <div class="achievement-card"><i class="bx bxl-php"></i><p>Created PHP/MySQL applications</p></div>
              <div class="achievement-card"><i class="bx bxs-data"></i><p>Designed simple databases</p></div>
              <div class="achievement-card"><i class="bx bxl-git"></i><p>Practiced Git/GitHub</p></div>
              <div class="achievement-card"><i class="bx bx-book-content"></i><p>Built school projects</p></div>
              <div class="achievement-card"><i class="bx bx-code-alt"></i><p>Learned frontend development</p></div>
              <div class="achievement-card"><i class="bx bx-server"></i><p>Started backend development</p></div>
              <div class="achievement-card"><i class="bx bx-support"></i><p>Practiced troubleshooting &amp; IT support</p></div>
            </div>
          </div>

          <div class="resume-detail future">
            <h2 class="heading-left">Future <span>Goals</span></h2>
            <p class="desc">Where I'm headed from here.</p>
            <ul class="goal-list">
              <li><i class="bx bx-check-circle"></i> Become a Full-Stack Web Developer</li>
              <li><i class="bx bx-check-circle"></i> Build more real-world applications</li>
              <li><i class="bx bx-check-circle"></i> Improve backend and database skills</li>
              <li><i class="bx bx-check-circle"></i> Learn modern frameworks like React</li>
              <li><i class="bx bx-check-circle"></i> Gain professional experience</li>
              <li><i class="bx bx-check-circle"></i> Keep improving my problem-solving skills</li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <!-- ================= CONTACT ================= -->
    <section class="contact-page reveal" id="contact">
      <h2 class="heading">Contact <span>Me</span></h2>
      <p class="desc">I'm currently open to learning opportunities, internships, collaborations and opportunities to grow as a developer.</p>
      <div class="contact-cards">
        <div class="contact-card">
          <i class="bx bx-envelope"></i>
          <h3>Email</h3>
          <p><a href="mailto:meymeyvann53@gmail.com">meymeyvann53@gmail.com</a></p>
        </div>
        <div class="contact-card">
          <i class="bx bx-phone"></i>
          <h3>Phone</h3>
          <p>+885 966 851 662</p>
        </div>
        <div class="contact-card">
          <i class="bx bx-map"></i>
          <h3>Address</h3>
          <p>Kandal province , Cambodia</p>
        </div>
      </div>
      <div class="contact-socials">
        <a href="#" aria-label="GitHub"><i class="bx bxl-github"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="bx bxl-linkedin"></i></a>
        <a href="#" aria-label="Facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" aria-label="Instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" aria-label="YouTube"><i class="bx bxl-youtube"></i></a>
      </div>
      <form class="contact-form" action="mailto:meymeyvann53@gmail.com" method="post" enctype="text/plain">
        <h3>Send Me a Message</h3>
        <div class="form-row">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="email" name="email" placeholder="Your Email" required>
        </div>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
        <p class="form-note">This opens your email app with the message pre-filled - I don't have a live server backend yet.</p>
      </form>
    </section>
  </main>

  <!-- ================= FOOTER ================= -->
  <footer class="site-footer">
    <div class="footer-container">
      <div class="footer-column">
        <h3>MeyMey Vann Portfolio</h3>
        <p>Building the best clean and beautiful website contact me.</p>
        <div class="footer-socials">
          <a href="#" aria-label="GitHub"><i class="bx bxl-github"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="bx bxl-linkedin"></i></a>
          <a href="#" aria-label="Facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" aria-label="Instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>
      <div class="footer-column">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Contact Us</h3>
        <address>
          <p>Email: <a href="mailto:meymeyvann53@gmail.com">meymeyvann53@gmail.com</a></p>
          <p>Phone: +885 966 851 662</p>
          <p>Address: Kandal province, Cambodia</p>
        </address>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 meymeyvann portfolio &nbsp;| &nbsp; Built with HTML, CSS, JavaScript</p>
    </div>
  </footer>

  <script src="../script/script.js"></script>
</body>

</html>