<section class="hero" id="top">
  <div class="hero-grain"></div>
  <div class="wrap hero-grid">

    <div class="hero-text">
      <div class="eyebrow hero-eyebrow">
        <span class="dot" style="color: var(--accent)"></span>
        Association loi 1901 · Depuis 2023
      </div>
      <h1 class="display hero-display">
        <span class="kicker-line">Ma Rééducation</span>
        <span class="line-2">Collective.</span>
      </h1>
      <p class="hero-lede">Donner aux enfants cérébrolésés — comme Marc — l'accès aux protocoles de rééducation les plus innovants du monde.</p>
      <div class="hero-cta">
        <a href="#join" class="btn btn-primary">
          Soutenir Marc
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7H12M12 7L7 2M12 7L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#marc" class="btn btn-ghost">Lire l'histoire</a>
      </div>
      <ul class="hero-meta">
        <li><span class="hero-meta-num">10</span><span class="hero-meta-lbl">pays explorés</span></li>
        <li><span class="hero-meta-num">27</span><span class="hero-meta-lbl">protocoles documentés</span></li>
        <li><span class="hero-meta-num">1</span><span class="hero-meta-lbl">mère qui n'abandonne pas</span></li>
      </ul>
    </div>

    <div class="hero-visual">
      <div class="portrait-card">
        <div class="portrait-frame">
          <div class="portrait-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marc-portrait.jpeg" alt="Portrait de Marc, 14 ans, survivant d'un accident cérébral." width="436" height="654" loading="eager"/>
          </div>
          <div class="portrait-caption">
            <div class="portrait-name">Marc, 14 ans</div>
            <div class="portrait-role">Survivant, fils, futur YouTubeur</div>
          </div>
        </div>
        <div class="portrait-stat">
          <div class="stat-num serif">25<span class="stat-unit">min</span></div>
          <div class="stat-lbl">Le temps avant que son cœur ne reparte. Toute notre histoire commence là.</div>
        </div>
      </div>
    </div>

  </div>

  <div class="hero-marquee" aria-hidden="true">
    <div class="marquee-track">
      <?php for ( $i = 0; $i < 3; $i++ ) : ?>
      <span class="marquee-row">
        <span class="marquee-city">Grenoble</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">Madrid</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">Varsovie</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">Tel Aviv</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">Saint-Pétersbourg</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">Madison</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">Tashkent</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">Milan</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">Risoul</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">New Jersey</span><span class="marquee-sep">✶</span>
        <span class="marquee-city">Amsterdam</span><span class="marquee-sep">✶</span>
      </span>
      <?php endfor; ?>
    </div>
  </div>

</section>
