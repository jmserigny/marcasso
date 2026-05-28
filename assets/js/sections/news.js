/* News — fetches articles/index.json at runtime, renders cards.
 * To add a new article:
 *   1. Create articles/<slug>.html (copy an existing one as a template).
 *   2. Add an entry to articles/index.json (newest first).
 * No code changes required.
 */
(function () {
  const { html, raw, arrow } = MARC;

  function renderItems(items, lang, t) {
    if (!items || !items.length) {
      return `<p class="muted news-empty">${MARC.escape(lang === 'fr' ? 'Bientôt — premiers articles en préparation.' : 'Coming soon — first articles in preparation.')}</p>`;
    }
    return items.map(n => {
      const date  = lang === 'fr' ? (n.date_fr || n.date) : (n.date_en || n.date);
      const title = lang === 'fr' ? (n.title_fr || n.title) : (n.title_en || n.title);
      const body  = lang === 'fr' ? (n.excerpt_fr || n.body) : (n.excerpt_en || n.body_en);
      const tag   = MARC.escape(n.tag || '');
      const accent = MARC.escape(n.accent || 'accent');

      const inner = `
        <div class="news-date serif">${MARC.escape(date)}</div>
        <div class="news-body">
          <div class="news-tagline"><span class="tag tag-${accent}">${tag}</span></div>
          <h3 class="news-title-item serif">${MARC.escape(title)}</h3>
          <p class="news-text">${MARC.escape(body)}</p>
          ${n.file ? `<span class="news-readmore">${MARC.escape(t.news_readmore)} ${arrow()}</span>` : ''}
        </div>
        <div class="news-arrow">${arrow()}</div>
      `;

      if (n.file) {
        return `<a class="news-item news-${accent} is-link" href="${MARC.escape(n.file)}">${inner}</a>`;
      }
      return `<article class="news-item news-${accent}">${inner}</article>`;
    }).join('');
  }

  function render(t, lang, items) {
    return html`
      <section class="news" id="news">
        <div class="wrap">
          <div class="news-head">
            <div class="eyebrow">${t.news_eyebrow}</div>
            <h2 class="display news-title">${t.news_title}</h2>
          </div>
          <div class="news-list" id="news-list">
            ${raw(renderItems(items, lang, t))}
          </div>
        </div>
      </section>
    `;
  }

  // Resolve the article list:
  //   1. Inline global ARTICLES_INDEX (works when opened from file://)
  //   2. fetch() articles/index.json (works on any HTTP server, also picks up
  //      edits made only to the JSON without touching the JS).
  function load(lang, t) {
    const list = document.getElementById('news-list');
    if (!list) return;

    if (Array.isArray(window.ARTICLES_INDEX) && window.ARTICLES_INDEX.length) {
      list.innerHTML = renderItems(window.ARTICLES_INDEX, lang, t);
    }

    fetch('articles/index.json', { cache: 'no-cache' })
      .then(r => r.ok ? r.json() : Promise.reject())
      .then(items => { list.innerHTML = renderItems(items, lang, t); })
      .catch(() => { /* file:// or offline — inline list is already shown */ });
  }

  MARC.sections = MARC.sections || {};
  MARC.sections.news = {
    render,
    bind: (t, lang) => load(lang, t)
  };
})();
