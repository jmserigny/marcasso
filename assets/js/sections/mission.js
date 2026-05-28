/* Mission — three pillars with line icons. */
(function () {
  const { html, raw } = MARC;

  function pillarIcon(i) {
    if (i === 0) return `
<svg viewBox="0 0 64 64" fill="none" aria-hidden="true">
  <circle cx="28" cy="28" r="20" stroke="#4a9c4a" stroke-width="2"/>
  <ellipse cx="28" cy="28" rx="8" ry="20" stroke="#4a9c4a" stroke-width="1.5"/>
  <path d="M 8 28 L 48 28" stroke="#4a9c4a" stroke-width="1.5"/>
  <circle cx="46" cy="46" r="9" fill="#f7f5f0" stroke="#c41e1e" stroke-width="2.5"/>
  <path d="M 53 53 L 60 60" stroke="#c41e1e" stroke-width="3" stroke-linecap="round"/>
</svg>`;
    if (i === 1) return `
<svg viewBox="0 0 64 64" fill="none" aria-hidden="true">
  <path d="M 32 54 C 12 40, 8 26, 18 18 C 26 12, 32 22, 32 22 C 32 22, 38 12, 46 18 C 56 26, 52 40, 32 54 Z" fill="none" stroke="#c41e1e" stroke-width="2.5" stroke-linejoin="round"/>
  <path d="M 14 32 L 22 32 L 26 24 L 32 40 L 36 30 L 42 32 L 50 32" stroke="#c41e1e" stroke-width="2.2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
</svg>`;
    return `
<svg viewBox="0 0 64 64" fill="none" aria-hidden="true">
  <rect x="6" y="10" width="36" height="26" rx="6" stroke="#3a7ec4" stroke-width="2" fill="none"/>
  <path d="M 14 36 L 14 44 L 22 36" stroke="#3a7ec4" stroke-width="2" stroke-linejoin="round" fill="none"/>
  <line x1="14" y1="20" x2="34" y2="20" stroke="#3a7ec4" stroke-width="1.5"/>
  <line x1="14" y1="26" x2="28" y2="26" stroke="#3a7ec4" stroke-width="1.5"/>
  <rect x="24" y="28" width="34" height="22" rx="6" fill="#f7f5f0" stroke="#c41e1e" stroke-width="2"/>
  <path d="M 50 50 L 50 56 L 44 50" stroke="#c41e1e" stroke-width="2" stroke-linejoin="round" fill="none"/>
  <circle cx="34" cy="39" r="1.5" fill="#c41e1e"/>
  <circle cx="41" cy="39" r="1.5" fill="#c41e1e"/>
  <circle cx="48" cy="39" r="1.5" fill="#c41e1e"/>
</svg>`;
  }

  function render(t) {
    const pillars = t.pillars.map((p, i) => `
      <article class="pillar">
        <div class="pillar-icon">${pillarIcon(i)}</div>
        <div class="pillar-num serif">${MARC.escape(p.n)}</div>
        <h3 class="pillar-title serif">${MARC.escape(p.t)}</h3>
        <p class="pillar-body">${MARC.escape(p.d)}</p>
      </article>
    `).join('');

    return html`
      <section class="mission" id="mission">
        <div class="wrap">
          <div class="mission-head">
            <div class="eyebrow">${t.mission_eyebrow}</div>
            <h2 class="display mission-title">${t.mission_title}</h2>
            <p class="mission-body">${t.mission_body}</p>
          </div>
          <div class="pillars">${raw(pillars)}</div>
        </div>
      </section>
    `;
  }

  MARC.sections = MARC.sections || {};
  MARC.sections.mission = { render, bind: () => {} };
})();
