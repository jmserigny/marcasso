/* Hero — large display, portrait illustration, marquee of cities. */
(function () {
  const { html, raw, arrow } = MARC;

  const CITIES = ['Grenoble','Madrid','Varsovie','Tel Aviv','Saint-Pétersbourg','Madison','Tashkent','Milan','Risoul','New Jersey','Amsterdam'];

  function portraitSVG() {
    return `
<svg viewBox="0 0 400 500" class="portrait-svg" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
  <defs>
    <linearGradient id="sky-grad" x1="0" x2="0" y1="0" y2="1">
      <stop offset="0" stop-color="#f7f5f0"/>
      <stop offset="0.5" stop-color="#e8eef5"/>
      <stop offset="1" stop-color="#cfe0f2"/>
    </linearGradient>
    <linearGradient id="hill-1" x1="0" x2="0" y1="0" y2="1">
      <stop offset="0" stop-color="#5fb45f"/><stop offset="1" stop-color="#4a9c4a"/>
    </linearGradient>
    <linearGradient id="hill-2" x1="0" x2="0" y1="0" y2="1">
      <stop offset="0" stop-color="#3a7ec4"/><stop offset="1" stop-color="#245a93"/>
    </linearGradient>
    <linearGradient id="hill-3" x1="0" x2="0" y1="0" y2="1">
      <stop offset="0" stop-color="#2f6e2f"/><stop offset="1" stop-color="#1f4a1f"/>
    </linearGradient>
    <radialGradient id="sun-glow" cx="0.78" cy="0.22" r="0.35">
      <stop offset="0" stop-color="#fff5d6" stop-opacity="0.9"/>
      <stop offset="1" stop-color="#fff5d6" stop-opacity="0"/>
    </radialGradient>
    <pattern id="dots" x="0" y="0" width="14" height="14" patternUnits="userSpaceOnUse">
      <circle cx="2" cy="2" r="0.8" fill="#2a2a2a" opacity="0.18"/>
    </pattern>
  </defs>
  <rect width="400" height="500" fill="url(#sky-grad)"/>
  <circle cx="312" cy="110" r="56" fill="url(#sun-glow)"/>
  <circle cx="312" cy="110" r="28" fill="#ffe9b0" opacity="0.95"/>
  <path d="M0 280 Q 60 230, 130 270 T 280 240 T 400 260 L 400 360 L 0 360 Z" fill="url(#hill-2)" opacity="0.85"/>
  <path d="M0 320 Q 80 270, 170 310 T 340 290 T 400 310 L 400 410 L 0 410 Z" fill="url(#hill-1)"/>
  <path d="M0 380 Q 100 350, 200 380 T 400 370 L 400 500 L 0 500 Z" fill="url(#hill-3)"/>
  <path d="M0 380 Q 100 350, 200 380 T 400 370 L 400 500 L 0 500 Z" fill="url(#dots)"/>
  <line x1="78" y1="500" x2="78" y2="345" stroke="#2a2a2a" stroke-width="3" stroke-linecap="round"/>
  <ellipse cx="78" cy="335" rx="22" ry="32" fill="#4a9c4a"/>
  <ellipse cx="86" cy="320" rx="14" ry="20" fill="#5fb45f"/>
  <path d="M 200 500 Q 220 460, 200 420 Q 180 395, 200 380" stroke="#f7f5f0" stroke-width="6" fill="none" stroke-linecap="round" opacity="0.6"/>
  <ellipse cx="200" cy="412" rx="28" ry="4" fill="#2a2a2a" opacity="0.25"/>
  <rect x="188" y="378" width="10" height="38" rx="4" fill="#2a2a2a"/>
  <rect x="202" y="378" width="10" height="38" rx="4" fill="#2a2a2a"/>
  <path d="M 178 320 Q 178 305, 200 305 Q 222 305, 222 320 L 222 385 L 178 385 Z" fill="#c41e1e"/>
  <path d="M 188 312 L 188 360" stroke="#931515" stroke-width="1.5"/>
  <path d="M 212 312 L 212 360" stroke="#931515" stroke-width="1.5"/>
  <rect x="170" y="322" width="9" height="36" rx="4" fill="#c41e1e"/>
  <rect x="221" y="322" width="9" height="36" rx="4" fill="#c41e1e"/>
  <ellipse cx="200" cy="290" rx="18" ry="20" fill="#2a2a2a"/>
  <path d="M 184 282 Q 200 268, 216 282 Q 216 274, 200 270 Q 184 274, 184 282 Z" fill="#1a1a1a"/>
  <path d="M 60 80 q 8 -6 16 0 q 8 -6 16 0" stroke="#2a2a2a" stroke-width="2" fill="none" stroke-linecap="round"/>
  <path d="M 130 110 q 6 -4 12 0 q 6 -4 12 0" stroke="#2a2a2a" stroke-width="1.6" fill="none" stroke-linecap="round"/>
  <path d="M 90 140 q 5 -3 10 0 q 5 -3 10 0" stroke="#2a2a2a" stroke-width="1.4" fill="none" stroke-linecap="round"/>
</svg>`;
  }

  function render(t) {
    const meta = t.hero_meta.map(m => {
      const [num, ...rest] = m.split(' ');
      return `<li><span class="hero-meta-num">${MARC.escape(num)}</span><span class="hero-meta-lbl">${MARC.escape(rest.join(' '))}</span></li>`;
    }).join('');

    const marqueeRow = CITIES.map(c =>
      `<span class="marquee-city">${MARC.escape(c)}</span><span class="marquee-sep">✶</span>`
    ).join('');

    return html`
      <section class="hero" id="top">
        <div class="hero-grain"></div>
        <div class="wrap hero-grid">
          <div class="hero-text">
            <div class="eyebrow hero-eyebrow"><span class="dot" style="color: var(--accent)"></span>${t.eyebrow_hero}</div>
            <h1 class="display hero-display">
              <span class="kicker-line">${t.hero_kicker}</span>
              <span class="line-2">${t.hero_title}</span>
            </h1>
            <p class="hero-lede">${t.hero_lede}</p>
            <div class="hero-cta">
              <a href="#join" class="btn btn-primary">${t.cta_primary} ${raw(arrow())}</a>
              <a href="#marc" class="btn btn-ghost">${t.cta_secondary}</a>
            </div>
            <ul class="hero-meta">${raw(meta)}</ul>
          </div>
          <div class="hero-visual">
            <div class="portrait-card">
              <div class="portrait-frame">
                <div class="portrait-img">${raw(portraitSVG())}</div>
                <div class="portrait-caption">
                  <div class="portrait-name">${t.portrait_name}</div>
                  <div class="portrait-role">${t.portrait_role}</div>
                </div>
              </div>
              <div class="portrait-stat">
                <div class="stat-num serif">15<span class="stat-unit">${t.stat_unit}</span></div>
                <div class="stat-lbl">${t.stat_lbl}</div>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-marquee" aria-hidden="true">
          <div class="marquee-track">
            ${raw(`<span class="marquee-row">${marqueeRow}</span>`.repeat(3))}
          </div>
        </div>
      </section>
    `;
  }

  MARC.sections = MARC.sections || {};
  MARC.sections.hero = { render, bind: () => {} };
})();
