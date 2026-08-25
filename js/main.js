/* FineAttireLab - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Bespoke Suit Silhouette & Textile Weight Explorer
  const suitButtons = document.querySelectorAll('.suit-btn');
  const suitDisplay = document.getElementById('suit-detail');

  if (suitButtons.length > 0 && suitDisplay) {
    suitButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        suitButtons.forEach(b => b.classList.remove('active-suit'));
        this.classList.add('active-suit');
        const suitName = this.getAttribute('data-suit');
        const description = this.getAttribute('data-desc');
        const score = this.getAttribute('data-score');

        suitDisplay.innerHTML = `
          <div class="suit-card" style="border-left: 4px solid var(--accent-gold); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-gold); font-size: 1.5rem; margin-bottom: 0.5rem;">${suitName} Sartorial Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-sapphire); font-size: 0.95rem;">Empirical Tailoring & Drape Benchmark: ${score}</strong>
          </div>
        `;
      });
    });
  }

  // Sartorial Matcher & Suit Cut Diagnostic Quiz
  const suitQuizButtons = document.querySelectorAll('.suit-quiz-btn');
  const suitQuizResult = document.getElementById('suit-quiz-result');

  if (suitQuizButtons.length > 0 && suitQuizResult) {
    suitQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        suitQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        suitQuizResult.innerHTML = `
          <div class="suit-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-gold);">
            <h4 style="color: var(--accent-gold); margin-bottom: 0.5rem;">Your Curated Sartorial Tailoring Recommendation</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
