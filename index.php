<?php
// FineAttireLab - Main Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FineAttireLab — Bespoke Tailoring, Super 150s Wool & Sartorial Suit Science</title>
  <meta name="description" content="FineAttireLab explores bespoke full-canvas suit architecture, Super 150s worsted wool, Milanese lapel buttonholes, and Italian vs British tailoring.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,600;0,6..96,700;1,6..96,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-suit {
      background: var(--accent-gold) !important;
      color: #0c121e !important;
      border-color: var(--accent-gold) !important;
    }
  </style>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Fine<span>AttireLab</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Sartorial Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Bespoke Tailoring & Sartorial Science</span>
        <h1 class="hero-title">The Art of Full Canvas Bespoke Tailoring</h1>
        <p class="hero-desc">Explore the synthesis of Super 150s Australian merino wool, floating horsehair chest canvas, hand-stitched Milanese buttonholes, and horn buttons.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-gold">Explore Sartorial Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Atelier Studio</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Sartorial Suit Architecture & Fabric Weave Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Tailoring Standards</span>
        <h2 class="section-title">The Four Pillars of Bespoke Architecture</h2>
      </div>
      <div class="grid-4">
        <div class="suit-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">👔</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Full Floating Canvas</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Natural horsehair and silk chest piece molding to body contours for flawless suit drape.</p>
        </div>
        <div class="suit-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🧵</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Super 150s Merino Wool</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">16.0 micron fiber fineness woven into 280g/m 4-season worsted cloth for silky hand-feel.</p>
        </div>
        <div class="suit-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🪡</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Milanese Lapel Buttonhole</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Hand-sewn raised gimp thread lapel keyhole requiring 45 minutes of artisan handwork.</p>
        </div>
        <div class="suit-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">🐚</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Real Horn & Mother-of-Pearl</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Solid water buffalo horn buttons cross-stitched with waxed linen thread.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Bespoke Suit Silhouette & Textile Weight Explorer -->
  <section class="section" id="suit-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Silhouette Explorer</span>
        <h2 class="section-title">The Sartorial Cut & Canvas Architecture Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a suiting cut profile to inspect its canvas structure, shoulder padding, and drape score:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark suit-btn active-suit" data-suit="Neapolitan Soft-Tailored Jacket" data-desc="Unstructured soft shoulder (spalla camicia), high armholes, lightweight canvasing, and 3-roll-2 button stance." data-score="9.9/10 Natural Drape & Movement Freedom">Neapolitan Soft Jacket</button>
          <button class="btn btn-outline-dark suit-btn" data-suit="British Savile Row Structured Suit" data-desc="Roped shoulders (con rullino), heavy horsehair chest canvas, suppressed waist, and twin rear vents." data-score="9.8/10 Authoritative Architectural Drape">Savile Row Structured</button>
          <button class="btn btn-outline-dark suit-btn" data-suit="Double-Breasted Peak Lapel Suit" data-desc="6-on-2 button arrangement, 4-inch wide peak lapels, full canvas interlining, and side waist adjusters." data-score="9.9/10 Power Silhouette & Torso V-Taper">Double-Breasted Peak</button>
          <button class="btn btn-outline-dark suit-btn" data-suit="Tropical Super 130s Summer Suit" data-desc="Open-weave high-twist wool (fresco cloth), unlined back quarters, horn buttons, and breathable weave." data-score="9.6/10 Summer Heat Thermal Comfort">Tropical Summer Suit</button>
        </div>
        <div id="suit-detail">
          <div class="suit-card" style="border-left: 4px solid var(--accent-gold);">
            <h3 style="color: var(--accent-gold); font-size: 1.5rem; margin-bottom: 0.5rem;">Neapolitan Soft-Tailored Jacket Sartorial Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Unstructured soft shoulder (spalla camicia), high armholes, lightweight canvasing, and 3-roll-2 button stance.</p>
            <strong style="color: var(--accent-sapphire); font-size: 0.95rem;">Empirical Tailoring & Drape Benchmark: 9.9/10 Natural Drape & Movement Freedom</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Full Floating Horsehair Canvas & Super 150s Wool Spotlight -->
  <section class="section" id="canvas-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Atelier Physics</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Horsehair Canvas Molding & Eradicating Fused Glue</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            The difference between cheap off-the-rack fused suits and luxury bespoke tailoring lies in the chest canvas piece. Cheap fused suits use chemical glue that bubbles over dry cleaning, while full-canvas tailoring uses loose floating horsehair chest pieces.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🧵 <strong style="color:var(--text-primary);">Floating Haircloth Construction:</strong> Stitch-attached chest canvas that responds to body warmth and molds to chest contours.</li>
            <li style="margin-bottom: 0.75rem;">🪡 <strong style="color:var(--text-primary);">Hand-Padded Collar Roll:</strong> 120 tiny pad-stitches shaping the collar to hug the nape of the neck cleanly.</li>
            <li style="margin-bottom: 0.75rem;">📏 <strong style="color:var(--text-primary);">High-Twist Fresco Weave:</strong> Crease-resistant worsted yarns springing back into shape after travel.</li>
          </ul>
          <a href="about.html" class="btn btn-gold">Our Sartorial Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1594938298603-c8148c4dae35?auto=format&fit=crop&w=800&q=80" alt="Bespoke Suit Tailoring Display" style="border-radius: 6px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Sartorial Matcher & Suit Cut Diagnostic Quiz -->
  <section class="section" id="suit-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Sartorial Diagnostic</span>
        <h2 class="section-title">Bespoke Suit Matcher Quiz</h2>
      </div>
      <div class="suit-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-gold); margin-bottom: 1rem;">What Is Your Primary Goal When Ordering a Custom Bespoke Suit?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="suit-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Neapolitan Soft-Tailored Super 150s Suit: Spalla camicia soft shoulder + full canvas + 3-roll-2 button stance.">
            A. Effortless Italian Elegance, Natural Shoulder Comfort & All-Day Boardroom Drape
          </button>
          <button class="suit-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Savile Row Double-Breasted Peak Lapel Suit: Roped shoulder + 6-on-2 buttoning + heavy canvas.">
            B. Authoritative Executive Presence, Structured Shoulders & Power Peak Lapels
          </button>
          <button class="suit-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="High-Twist Tropical Wool Fresco Suit: Unlined quarters + open weave + wrinkle resistance for travel.">
            C. Summer Travel Resilience, Breathable Open Weave & Wrinkle Recovery
          </button>
        </div>
        <div id="suit-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Thread Count & Lapel Buttonhole Stitching Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Tailoring Benchmarks</span>
        <h2 class="section-title">Fine Attire Lab Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="suit-card" style="text-align: center;">
          <h3 class="metric-number text-gold" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="suit-card" style="text-align: center;">
          <h3 class="metric-number text-gold" data-target="150" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Super Wool Grade</p>
        </div>
        <div class="suit-card" style="text-align: center;">
          <h3 class="metric-number text-gold" data-target="120" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Pad-Stitches Per Collar</p>
        </div>
        <div class="suit-card" style="text-align: center;">
          <h3 class="metric-number text-gold" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Master Tailors & Sartorial Consultants Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Sartorial Acclaim</span>
        <h2 class="section-title">Endorsements From Master Cutters & Sartorial Historians</h2>
      </div>
      <div class="grid-3">
        <div class="suit-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "FineAttireLab provides the definitive guide for understanding full canvas chest molding, Super 150s worsted wool Micron ratings, and Milanese lapel buttonholes."
          </p>
          <strong style="color: var(--accent-gold); display: block;">— Master Cutter Giovanni Moretti</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Sartoria Master Tailor, Milan</span>
        </div>
        <div class="suit-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research on Neapolitan spalla camicia shoulders vs Savile Row roping and horn button cross-stitching sets a new bar for tailoring journalism."
          </p>
          <strong style="color: var(--accent-gold); display: block;">— Charles Sterling</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Sartorial Apparel Historian, London</span>
        </div>
        <div class="suit-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for understanding trouser rise architecture, high-twist fresco fabrics, and black-tie tuxedo satin facings."
          </p>
          <strong style="color: var(--accent-gold); display: block;">— Henri De La Tour</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Textile Mill Quality Inspector, Biella</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Bespoke Tailoring Dispatches & Article Grid -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Tailoring Dispatches</span>
        <h2 class="section-title">Latest Sartorial Essays</h2>
      </div>
      <div class="grid-3">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1594938298603-c8148c4dae35?auto=format&fit=crop&w=800&q=80" alt="Full Canvas Anatomy">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Full Canvas</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-anatomy-of-a-bespoke-suit-full-canvas-vs-half-canvas-construction.html">Anatomy of a Bespoke Suit</a></h3>
            <p class="blog-excerpt">Full floating horsehair canvas vs half canvas, interlinings, and chest piece drape.</p>
            <a href="blog/the-anatomy-of-a-bespoke-suit-full-canvas-vs-half-canvas-construction.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80" alt="Super Wool Numbers">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Fabric Science</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/demystifying-super-wool-numbers-super-110s-to-super-200s-explained.html">Demystifying Super Wool S-Numbers</a></h3>
            <p class="blog-excerpt">Super 110s to Super 200s worsted wool fiber micron fineness and weave durability.</p>
            <a href="blog/demystifying-super-wool-numbers-super-110s-to-super-200s-explained.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1617137984095-74e4e5e3613f?auto=format&fit=crop&w=800&q=80" alt="Italian vs British Suiting">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Suit Silhouettes</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/italian-vs-british-suiting-drape-padded-shoulders-and-silhouette.html">Italian vs British Suiting Architecture</a></h3>
            <p class="blog-excerpt">Neapolitan soft shoulders vs Savile Row roping, chest canvas, and waist suppression.</p>
            <a href="blog/italian-vs-british-suiting-drape-padded-shoulders-and-silhouette.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: VIP Sartorial Gazette Newsletter & Footer CTA -->
  <section class="section" id="newsletter" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="suit-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-gold);">
        <span class="section-subtitle">Sartorial Dispatch</span>
        <h1 class="section-title" style="margin-bottom: 1rem; font-size: 2.2rem;">Subscribe to The Fine Attire Gazette</h1>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of fabric weaves, bespoke fitting techniques, and suit care guides.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to FineAttireLab Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 4px;">
          <button type="submit" class="btn btn-gold">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Fine<span>AttireLab</span></a>
          <p>FineAttireLab is a premier editorial platform dedicated to high-end bespoke tailoring, Super 150s worsted wool, full canvas suit architecture, and sartorial fit science.</p>
          <p style="margin-top: 1rem; color: var(--accent-gold);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Sartorial Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Sartorial Focus</h4>
          <p>Deconstructing full floating horsehair canvas, Super wool Micron ratings, Milanese buttonholes, Neapolitan shoulder drape, and tuxedo etiquette globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 FineAttireLab. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Sartorial Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
