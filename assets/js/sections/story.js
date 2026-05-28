/* Marc's story — sticky aside, illustrated photo, timeline, book card. */
(function () {
  const { html, raw, arrow } = MARC;

  function storyIllust() {
    return `
<svg viewBox="0 0 240 300" preserveAspectRatio="xMidYMid slice" class="story-illust" aria-hidden="true">
  <defs>
    <linearGradient id="sp-bg" x1="0" x2="0" y1="0" y2="1">
      <stop offset="0" stop-color="#fff5d6"/><stop offset="1" stop-color="#f4cccc"/>
    </linearGradient>
  </defs>
  <rect width="240" height="300" fill="url(#sp-bg)"/>
  <circle cx="180" cy="70" r="36" fill="#ffe9b0" opacity="0.6"/>
  <circle cx="180" cy="70" r="22" fill="#fff5d6"/>
  <ellipse cx="92" cy="120" rx="14" ry="16" fill="#2a2a2a"/>
  <path d="M 76 140 Q 76 132, 92 132 Q 108 132, 108 140 L 108 220 L 76 220 Z" fill="#3a7ec4"/>
  <rect x="80" y="220" width="9" height="50" rx="3" fill="#2a2a2a"/>
  <rect x="95" y="220" width="9" height="50" rx="3" fill="#2a2a2a"/>
  <rect x="106" y="170" width="14" height="6" rx="3" fill="#3a7ec4"/>
  <ellipse cx="148" cy="160" rx="11" ry="13" fill="#2a2a2a"/>
  <path d="M 136 178 Q 136 172, 148 172 Q 160 172, 160 178 L 160 230 L 136 230 Z" fill="#c41e1e"/>
  <rect x="140" y="230" width="7" height="40" rx="3" fill="#2a2a2a"/>
  <rect x="151" y="230" width="7" height="40" rx="3" fill="#2a2a2a"/>
  <path d="M 118 175 Q 130 170, 138 178" stroke="#2a2a2a" stroke-width="3.5" fill="none" stroke-linecap="round"/>
  <path d="M 0 268 Q 120 262, 240 268" stroke="#4a9c4a" stroke-width="3" fill="none" stroke-linecap="round"/>
  <path d="M 0 280 L 240 280" stroke="#2f6e2f" stroke-width="2" fill="none" opacity="0.4"/>
</svg>`;
  }

  function render(t) {
    const timeline = t.story_chapters.map(c => `
      <li class="timeline-item">
        <div class="timeline-marker"><span></span></div>
        <div class="timeline-year serif">${MARC.escape(c.y)}</div>
        <div class="timeline-content">
          <h4 class="timeline-title serif">${MARC.escape(c.t)}</h4>
          <p class="timeline-body">${MARC.escape(c.d)}</p>
        </div>
      </li>
    `).join('');

    return html`
      <section class="story" id="marc">
        <div class="wrap story-grid">
          <aside class="story-aside">
            <div class="eyebrow">${t.story_eyebrow}</div>
            <div class="story-photo">
              <div class="story-photo-inner">${raw(storyIllust())}</div>
              <div class="story-photo-cap muted">${t.story_photo_cap}</div>
            </div>
            <blockquote class="story-pull serif">
              ${t.story_pull}
              <cite>${t.story_pull_attr}</cite>
            </blockquote>
          </aside>

          <div class="story-main">
            <h2 class="display story-title">${t.story_title}</h2>
            <p class="story-lede">${t.story_lede}</p>
            <ol class="timeline">${raw(timeline)}</ol>

            <div class="story-book">
              <div class="story-book-cover serif">
                <div class="book-title">${raw(t.book_title)}</div>
                <div class="book-author">${MARC.escape(t.book_author)}</div>
              </div>
              <div class="story-book-text">
                <div class="eyebrow">${t.book_eyebrow}</div>
                <h4 class="serif">${t.book_h}</h4>
                <p class="muted">${t.book_body}</p>
                <a href="https://www.amazon.fr/dp/B07Y4KC5S1" target="_blank" rel="noopener" class="btn btn-paper btn-sm">FR sur Amazon ${raw(arrow())}</a>
                <a href="https://www.amazon.com/dp/B088T26YXB" target="_blank" rel="noopener" class="btn btn-paper btn-sm">EN on Amazon ${raw(arrow())}</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    `;
  }

  MARC.sections = MARC.sections || {};
  MARC.sections.story = { render, bind: () => {} };
})();
