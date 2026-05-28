/* App boot — picks language, renders all sections, binds behaviors. */
(function () {
  const STORAGE_KEY = 'marc.lang';
  const data = window.SITE_DATA;

  function getInitialLang() {
    try {
      const stored = localStorage.getItem(STORAGE_KEY);
      if (stored === 'fr' || stored === 'en') return stored;
    } catch (e) {}
    const nav = (navigator.language || 'fr').slice(0, 2).toLowerCase();
    return nav === 'en' ? 'en' : 'fr';
  }

  function renderAll(lang) {
    const t = data.copy[lang];
    const S = MARC.sections;

    document.documentElement.setAttribute('lang', lang);

    document.getElementById('app-header').innerHTML  = S.header.render(t, lang);
    document.getElementById('app-hero').innerHTML    = S.hero.render(t);
    document.getElementById('app-mission').innerHTML = S.mission.render(t);
    document.getElementById('app-story').innerHTML   = S.story.render(t);
    document.getElementById('app-therapies').innerHTML = S.therapies.render(t, data.therapies);
    document.getElementById('app-news').innerHTML    = S.news.render(t, lang, data.newsFallback);
    document.getElementById('app-join').innerHTML    = S.join.render(t);
    document.getElementById('app-footer').innerHTML  = S.footer.render(t);

    S.header.bind();
    S.news.bind(t, lang);
  }

  MARC.lang = getInitialLang();
  MARC.setLang = function (lang) {
    if (lang !== 'fr' && lang !== 'en') return;
    MARC.lang = lang;
    try { localStorage.setItem(STORAGE_KEY, lang); } catch (e) {}
    renderAll(lang);
  };

  document.addEventListener('DOMContentLoaded', () => renderAll(MARC.lang));
})();
