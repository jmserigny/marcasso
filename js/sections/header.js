/* Header — sticky, scroll-aware, language toggle. */
(function () {
  const { html, raw, arrow } = MARC;

  function render(t, lang) {
    const navItems = t.nav.map(n =>
      `<a href="${MARC.escape(n.href)}">${MARC.escape(n.label)}</a>`
    ).join('');

    return html`
      <header class="site-header" id="site-header">
        <div class="wrap header-inner">
          <a href="#top" class="brand" aria-label="MaRC — Ma Rééducation Collective">
            <img src="assets/logo.png" alt="MaRC — Ma Rééducation Collective" class="brand-mark"/>
          </a>
          <nav class="site-nav">${raw(navItems)}</nav>
          <div class="header-actions">
            <button class="lang-toggle" type="button" id="lang-toggle" aria-label="Toggle language">
              <span class="${lang === 'fr' ? 'on' : ''}">FR</span>
              <span class="lang-sep">/</span>
              <span class="${lang === 'en' ? 'on' : ''}">EN</span>
            </button>
            <a href="#join" class="btn btn-primary btn-sm">${t.donate}</a>
          </div>
        </div>
      </header>
    `;
  }

  function bind() {
    const header = document.getElementById('site-header');
    if (!header) return;
    const onScroll = () => {
      header.classList.toggle('is-scrolled', window.scrollY > 12);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    const toggle = document.getElementById('lang-toggle');
    if (toggle) toggle.addEventListener('click', () => MARC.setLang(MARC.lang === 'fr' ? 'en' : 'fr'));
  }

  MARC.sections = MARC.sections || {};
  MARC.sections.header = { render, bind };
})();
