/* Therapies — dark grid of documented protocols. */
(function () {
  const { html, raw, arrow } = MARC;

  const tagColors = {
    neuromodulation: 'accent', oxygen: 'sky', biological: 'leaf', surgical: 'accent',
    motor: 'leaf', vestibular: 'sky', auditory: 'sky', mobility: 'leaf'
  };

  function render(t, therapies) {
    const cards = therapies.map(th => `
      <article class="therapy">
        <div class="therapy-head">
          <div class="therapy-abbr serif">${MARC.escape(th.abbr)}</div>
          <span class="tag tag-${tagColors[th.tag] || 'accent'}">${MARC.escape(th.tag)}</span>
        </div>
        <h3 class="therapy-name">${MARC.escape(th.name)}</h3>
        <div class="therapy-meta">
          <span class="therapy-origin">${MARC.escape(th.origin)}</span>
          <span class="therapy-years">${MARC.escape(th.years)}</span>
        </div>
      </article>
    `).join('');

    return html`
      <section class="therapies" id="therapies">
        <div class="wrap">
          <div class="therapies-head">
            <div class="eyebrow">${t.therapies_eyebrow}</div>
            <h2 class="display therapies-title">${t.therapies_title}</h2>
            <p class="therapies-lede">${t.therapies_lede}</p>
          </div>
          <div class="therapies-grid">${raw(cards)}</div>
          <div class="therapies-foot">
            <div class="muted">${t.therapies_foot}</div>
            <a href="#join" class="btn btn-ghost btn-sm">${t.therapies_link} ${raw(arrow())}</a>
          </div>
        </div>
      </section>
    `;
  }

  MARC.sections = MARC.sections || {};
  MARC.sections.therapies = { render, bind: () => {} };
})();
