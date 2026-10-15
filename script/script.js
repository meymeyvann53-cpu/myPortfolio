/* ====== Reliable navbar and mobile menu ====== */
document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.getElementById("menuToggle");
  const menuNav = document.querySelector(".menu nav");
  const navLinks = document.querySelectorAll('.menu nav a[href^="#"]');
  const sections = document.querySelectorAll("main section[id]");

  // Mobile menu toggle (only attach if these elements exist)
  if (menuToggle && menuNav) {
    menuToggle.addEventListener("click", () => {
      menuToggle.classList.toggle("open");
      menuNav.classList.toggle("open");
    });
  }

  // Scroll to each section reliably and account for the fixed navbar.
  navLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      const hash = link.getAttribute("href");
      const target = hash ? document.querySelector(hash) : null;
      if (!target) return;

      event.preventDefault();
      const header = document.querySelector(".navbar");
      const headerHeight = header ? header.offsetHeight : 0;
      const top = target.getBoundingClientRect().top + window.scrollY - headerHeight;

      window.scrollTo({ top: Math.max(0, top), behavior: "smooth" });
      history.replaceState(null, "", hash);

      navLinks.forEach((item) => item.classList.remove("active"));
      link.classList.add("active");

      if (menuToggle && menuNav) {
        menuToggle.classList.remove("open");
        menuNav.classList.remove("open");
      }
    });
  });

  // Keep the active navbar item in sync while scrolling.
  if ("IntersectionObserver" in window) {
    const spyObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const id = entry.target.id;
        navLinks.forEach((link) => {
          link.classList.toggle("active", link.getAttribute("href") === "#" + id);
        });
      });
    }, {
      rootMargin: "-90px 0px -55% 0px",
      threshold: 0
    });
    sections.forEach((section) => spyObserver.observe(section));
  }
});

/* ====== Resume tab switching ====== */
const resumeBtns = document.querySelectorAll('.resume-btn');
const resumeDetails = document.querySelectorAll('.resume-detail');   // needs the dot

resumeBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    resumeBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const target = btn.getAttribute('data-target');
    resumeDetails.forEach(detail => {
      detail.classList.toggle('active', detail.classList.contains(target));
    });
  });
});

/* ====== Scroll-reveal animation ====== */
const revealEls = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('in-view');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.15 });
revealEls.forEach(el => revealObserver.observe(el));

/* ====== Animated skill bars (fill when scrolled into view) ====== */
const skillBars = document.querySelectorAll('.bar i');
const barObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('in-view');
      barObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.3 });
skillBars.forEach(bar => barObserver.observe(bar));

/* ====== Project filtering ====== */
const filterBtns = document.querySelectorAll('.filter-btn');
const projectCards = document.querySelectorAll('.project-card');

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const filter = btn.getAttribute('data-filter');

    projectCards.forEach(card => {
      const categories = card.getAttribute('data-category');
      const show = filter === 'all' || categories.includes(filter);   // 'show' was never defined before
      card.style.display = show ? '' : 'none';
    });
  });
});

/* ====== Project details modal ====== */
const projectData = {
  portfolio: {
    title: "Personal Portfolio Website",
    overview: "A responsive personal portfolio built to showcase who I am, what I'm learning and what I've built so far.",
    problem: "I needed a central place to present myself professionally to potential employers and collaborators, instead of relying only on a resume PDF.",
    goal: "Build a clean, fast, fully responsive single-page site that honestly represents my current skill level as a student developer.",
    features: ["Sticky navbar with scrollspy", "Mobile hamburger menu", "Animated hero and skill bars", "Filterable project grid", "Resume tabs (Experience, Education, Achievements, Goals)"],
    tech: ["HTML", "CSS", "JavaScript", "PHP"],
    role: "Sole designer and developer - planned the structure, wrote all the HTML/CSS/JS and iterated on the layout.",
    learned: "How to structure a responsive layout with CSS Grid/Flexbox, build a mobile nav from scratch and use IntersectionObserver for scroll effects.",
    challenges: "Getting the mobile menu and scroll-based section highlighting to work smoothly together took a few iterations.",
    github: "#",
    demo: "#"
  },
  restaurant: {
    title: "Restaurant Management System",
    overview: "Placeholder - describe what this system manages (menu, orders, tables, staff, etc.).",
    problem: "Placeholder - what problem does this solve for a restaurant?",
    goal: "Placeholder - what was the goal of building this?",
    features: ["Add feature 1", "Add feature 2", "Add feature 3"],
    tech: ["PHP", "MySQL"],
    role: "Placeholder - describe your role in this project.",
    learned: "Placeholder - what did you learn from building this?",
    challenges: "Placeholder - what was difficult about this project?",
    github: "#",
    demo: ""
  },
  school: {
    title: "PHP / MySQL School Project",
    overview: "Placeholder - describe this school assignment and what it does.",
    problem: "Placeholder - what requirement or problem did this assignment address?",
    goal: "Placeholder - what was the goal of the assignment?",
    features: ["Add feature 1", "Add feature 2"],
    tech: ["PHP", "MySQL"],
    role: "Placeholder - describe your role (individual or group project).",
    learned: "Placeholder - what concepts did this project help you practice?",
    challenges: "Placeholder - what was the hardest part?",
    github: "",
    demo: ""
  },
  frontend: {
    title: "Frontend Practice Project",
    overview: "Placeholder - describe this frontend-only project.",
    problem: "Placeholder - what were you practicing or trying to recreate?",
    goal: "Placeholder - what was the goal?",
    features: ["Add feature 1", "Add feature 2"],
    tech: ["HTML", "CSS", "JavaScript"],
    role: "Placeholder - describe your role.",
    learned: "Placeholder - what did you learn?",
    challenges: "Placeholder - what was tricky about it?",
    github: "",
    demo: ""
  }
};

const modal = document.getElementById('projectModal');
const modalContent = document.getElementById('modalContent');
const modalClose = document.getElementById('modalClose');

document.querySelectorAll('.btn-details').forEach(btn => {
  btn.addEventListener('click', () => {
    const key = btn.getAttribute('data-project');
    const data = projectData[key];
    if (!data) return;

    modalContent.innerHTML = `
      <h3>${data.title}</h3>
      <h4>Overview</h4><p>${data.overview}</p>
      <h4>Problem</h4><p>${data.problem}</p>
      <h4>Goal</h4><p>${data.goal}</p>
      <h4>Features</h4><ul>${data.features.map(f => `<li>${f}</li>`).join('')}</ul>
      <h4>Technologies</h4><p>${data.tech.join(', ')}</p>
      <h4>My Role</h4><p>${data.role}</p>
      <h4>What I Learned</h4><p>${data.learned}</p>
      <h4>Challenges</h4><p>${data.challenges}</p>
    `;
    modal.classList.add('open');
  });
});

function closeModal() {
  modal.classList.remove('open');
}
modalClose.addEventListener('click', closeModal);
modal.addEventListener('click', (e) => {
  if (e.target === modal) closeModal();
});
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') closeModal();
});