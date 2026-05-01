/* Join + Donate split card. */
(function () {
  const { html, raw, arrow } = MARC;

  function donateDeco() {
    return `
<svg viewBox="0 0 200 200" aria-hidden="true">
  <g opacity="0.18">
    <path d="M 30 180 L 30 80 a 30 30 0 0 1 60 0 L 90 180 Z" fill="#fbf8f1"/>
    <path d="M 70 180 L 70 80 a 30 30 0 0 1 60 0 L 130 180 Z" fill="#fbf8f1"/>
    <path d="M 110 180 L 110 80 a 30 30 0 0 1 60 0 L 170 180 Z" fill="#fbf8f1"/>
  </g>
  <path d="M 75 95 C 75 80, 95 75, 105 90 C 115 75, 135 80, 135 95 C 135 115, 105 140, 105 140 C 105 140, 75 115, 75 95 Z" fill="#fbf8f1"/>
</svg>`;
  }

  function render(t) {
    const perks = t.join_perks.map(p => `
      <li>
        <span class="perk-mark">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M2 7.5L5.5 11L12 3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>${MARC.escape(p)}
      </li>
    `).join('');

    const amounts = [20, 50, 100, 250].map(a => `<button type="button" class="donate-amount">${a}€</button>`).join('') +
                    `<button type="button" class="donate-amount donate-other">Autre</button>`;

    return html`
      <section class="join" id="join">
        <div class="wrap join-grid">
          <div class="join-card join-membership">
            <div class="eyebrow">${t.join_eyebrow}</div>
            <h2 class="display join-title">${t.join_title}</h2>
            <p class="join-body">${t.join_body}</p>
            <ul class="join-perks">${raw(perks)}</ul>
            <a href="https://www.helloasso.com/associations/mareeducationcollective/adhesions/adhesion-annuelle"
               target="_blank" rel="noopener" class="btn btn-primary">${t.join_cta} ${raw(arrow())}</a>
          </div>
          <div class="join-card join-donate">
            <div class="donate-deco">${raw(donateDeco())}</div>
            <h3 class="display donate-title">${t.donate_title}</h3>
            <p class="donate-body">${t.donate_body}</p>
            <div class="donate-amounts">${raw(amounts)}</div>
            <a href="https://www.helloasso.com/associations/mareeducationcollective/formulaires/1"
               target="_blank" rel="noopener" class="btn btn-paper">${t.donate_cta} ${raw(arrow())}</a>
          </div>
        </div>
      </section>
    `;
  }

  MARC.sections = MARC.sections || {};
  MARC.sections.join = { render, bind: () => {} };
})();
