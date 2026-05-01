/* Site footer. */
(function () {
  const { html } = MARC;

  function render(t) {
    return html`
      <footer class="site-footer" id="contact">
        <div class="wrap footer-grid">
          <div class="footer-brand">
            <div class="footer-logo">
              <img src="assets/logo.png" alt="MaRC" class="footer-logo-img"/>
            </div>
            <p class="muted footer-tag">${t.footer_tag}</p>
            <p class="muted footer-siret">SIRET 923 805 808 00014</p>
          </div>
          <div class="footer-col">
            <div class="footer-col-title">${t.contact_title}</div>
            <a href="tel:+33675208297" class="footer-link">06 75 20 82 97</a>
            <a href="mailto:contact@marcasso.org" class="footer-link">contact@marcasso.org</a>
            <p class="footer-addr muted">${t.address}</p>
          </div>
          <div class="footer-col">
            <div class="footer-col-title">${t.footer_follow}</div>
            <a href="https://www.youtube.com/channel/UCsI5HkFM5ctBvEILtkMMEdw" target="_blank" rel="noopener" class="footer-link">YouTube</a>
            <a href="https://instagram.com/ma_reeducation_collective" target="_blank" rel="noopener" class="footer-link">Instagram</a>
            <a href="http://brain-injury-hope.com" target="_blank" rel="noopener" class="footer-link">Ressources & Liens</a>
          </div>
          <div class="footer-col">
            <div class="footer-col-title">${t.footer_act}</div>
            <a href="#join" class="footer-link">${t.footer_member}</a>
            <a href="#join" class="footer-link">${t.donate}</a>
            <a href="#" class="footer-link">${t.footer_partners}</a>
          </div>
        </div>
        <div class="wrap footer-bottom">
          <div class="muted">${t.footer_copy}</div>
          <div class="muted">${t.footer_love}</div>
        </div>
      </footer>
    `;
  }

  MARC.sections = MARC.sections || {};
  MARC.sections.footer = { render, bind: () => {} };
})();
