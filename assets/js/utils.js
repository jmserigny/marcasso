/* Tiny helpers used by section renderers. */
window.MARC = window.MARC || {};

MARC.escape = function (s) {
  return String(s == null ? '' : s)
    .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
};

// Tiny tagged-template html`` that escapes interpolated values by default.
// Pass already-trusted HTML by wrapping it with MARC.raw(...).
MARC.raw = function (s) { return { __raw: String(s) }; };
MARC.html = function (strings, ...vals) {
  let out = '';
  for (let i = 0; i < strings.length; i++) {
    out += strings[i];
    if (i < vals.length) {
      const v = vals[i];
      if (v == null) { /* skip */ }
      else if (Array.isArray(v)) out += v.join('');
      else if (typeof v === 'object' && v.__raw != null) out += v.__raw;
      else out += MARC.escape(v);
    }
  }
  return out;
};

MARC.arrow = function () {
  return '<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">' +
    '<path d="M2 7H12M12 7L7 2M12 7L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
};

MARC.mount = function (selector, html) {
  const el = document.querySelector(selector);
  if (el) el.innerHTML = html;
  return el;
};
