<?php
/**
 * sections/conference.php
 * -----------------------
 * Contenu de la section « Conférence entreprise » (L'électrochoc des aidants),
 * d'après le dossier de présentation de Svetlana Serigny.
 *
 * Cette section se place ENTRE le hero ("Ma Rééducation Collective")
 * et la section mission ("Aucun parent ne devrait avoir à chercher seul").
 *
 * Utilisation dans une page PHP :
 *
 *     <?php include __DIR__ . '/sections/conference.php'; ?>
 *
 * Le fichier réutilise les mêmes classes CSS que le reste du site
 * (voir page.css → bloc « CONFERENCE »). Aucune dépendance JS requise.
 *
 * Pour modifier le texte : éditez le tableau $CONFERENCE ci-dessous.
 * (La version statique/JS équivalente vit dans js/sections/conference.js.)
 */

/* ------------------------------------------------------------------ */
/* 1. CONTENU — éditez ici                                            */
/* ------------------------------------------------------------------ */
$CONFERENCE = [
    'eyebrow'   => 'Conférence entreprise',
    'quote'     => "J'ai vu mon fils mourir. 25 minutes. Arrêt cardiaque. Et j'ai compris ce que vos aidants vivent, en silence, chaque jour.",
    'quote_attr'=> 'Svetlana Serigny — Mère-aidante, fondatrice de MARC',
    'title'     => "L'électrochoc des aidants",
    'subtitle'  => "Transformer une fragilité en force pour l'entreprise.",
    'intro'     => "Un triptyque unique — un livre, un film, une conférence — pour révéler les 11 millions d'aidants invisibles qui travaillent déjà dans vos équipes.",
    'format_title' => 'Le format',
    'total'     => 'Durée totale 30 min',
    'teaser'    => 'Teaser 2 min',
    'formats'   => [
      ['kind' => 'Le pitch', 'title' => 'Svetlana Serigny',  'meta' => '10 min · Histoire & données',          'desc' => "Le vécu incarné d'une mère qui a traversé l'inimaginable — et les chiffres qui réveillent une salle."],
      ['kind' => 'Le film',  'title' => '« 25 Minutes »',     'meta' => '14 min · Court-métrage en festivals',   'desc' => "Une immersion documentaire qui crée l'impact émotionnel avant de déclencher l'action."],
      ['kind' => 'Le livre', 'title' => "Marc l'Invincible",  'meta' => 'Finaliste Page Turner Awards 2025',     'desc' => "Le récit fondateur, du drame à la reconstruction, signé Svetlana Serigny."],
    ],
    'stats'     => [
      ['num' => '11 M',  'label' => "d'aidants en France"],
      ['num' => '1 / 4', 'label' => 'salariés est aidant — et silencieux'],
      ['num' => '1 / 3', 'label' => 'réduisent ou quittent leur emploi'],
    ],
    'why_title' => 'Pourquoi cette conférence',
    'why'       => [
      "Vécu incarné — une mère, pas un consultant RH.",
      "ROI documenté — étude Harvard HBS à l'appui.",
      "Triptyque exclusif — livre, film, conférence.",
      "Émotion + données — l'impact, puis l'action.",
    ],
    'punch'     => "Je n'ai pas survécu pour vous parler de résilience. Je suis là pour vous réveiller.",
    'cta'       => 'Inviter Svetlana dans votre entreprise',
    'cta_note'  => '06 75 20 82 97 · svetpanuta@gmail.com',
];

/* ------------------------------------------------------------------ */
/* 2. HELPERS                                                         */
/* ------------------------------------------------------------------ */
$c = $CONFERENCE;

/** Échappe une chaîne pour une insertion HTML sûre. */
function conf_e($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

/** Icônes SVG des trois piliers (pitch / film / livre). */
function conf_icon($i) {
  $icons = [
    // 0 — micro (pitch)
    '<svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><rect x="18" y="6" width="12" height="22" rx="6" stroke="#e8554a" stroke-width="2"/><path d="M 12 24 a 12 12 0 0 0 24 0" stroke="#e8554a" stroke-width="2" fill="none"/><line x1="24" y1="36" x2="24" y2="44" stroke="#e8554a" stroke-width="2"/><line x1="16" y1="44" x2="32" y2="44" stroke="#e8554a" stroke-width="2" stroke-linecap="round"/></svg>',
    // 1 — clap (film)
    '<svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><rect x="6" y="14" width="36" height="26" rx="3" stroke="#e8554a" stroke-width="2"/><path d="M 6 16 L 14 8 L 22 16 M 18 16 L 26 8 L 34 16 M 30 16 L 38 8" stroke="#e8554a" stroke-width="2" stroke-linejoin="round" fill="none"/><path d="M 21 24 L 31 30 L 21 36 Z" fill="#e8554a"/></svg>',
    // 2 — livre (book)
    '<svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><path d="M 24 12 C 20 8, 12 8, 8 10 L 8 38 C 12 36, 20 36, 24 40 C 28 36, 36 36, 40 38 L 40 10 C 36 8, 28 8, 24 12 Z" stroke="#e8554a" stroke-width="2" stroke-linejoin="round" fill="none"/><line x1="24" y1="12" x2="24" y2="40" stroke="#e8554a" stroke-width="2"/></svg>',
  ];
  return $icons[$i] ?? '';
}

$conf_arrow = '<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7H12M12 7L7 2M12 7L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
?>

<!-- ================= CONFÉRENCE ENTREPRISE ================= -->
<section class="conference" id="conference">
  <div class="wrap">
    <div class="conf-eyebrow"><span class="dot"></span><?= conf_e($c['eyebrow']) ?></div>

    <blockquote class="conf-quote serif">
      <?= conf_e($c['quote']) ?>
      <cite><?= conf_e($c['quote_attr']) ?></cite>
    </blockquote>

    <div class="conf-grid">
      <div class="conf-lead">
        <h2 class="display conf-title"><?= conf_e($c['title']) ?></h2>
        <p class="conf-subtitle serif"><?= conf_e($c['subtitle']) ?></p>
        <p class="conf-intro"><?= conf_e($c['intro']) ?></p>

        <div class="conf-why-title"><?= conf_e($c['why_title']) ?></div>
        <ul class="conf-why">
          <?php foreach ($c['why'] as $w): ?>
            <li><span class="conf-why-mark"><?= $conf_arrow ?></span><span><?= conf_e($w) ?></span></li>
          <?php endforeach; ?>
        </ul>

        <a href="mailto:svetpanuta@gmail.com?subject=<?= rawurlencode($c['cta']) ?>" class="btn btn-primary conf-cta"><?= conf_e($c['cta']) ?> <?= $conf_arrow ?></a>
        <div class="conf-cta-note"><?= conf_e($c['cta_note']) ?></div>
      </div>

      <div class="conf-formats">
        <div class="conf-formats-head">
          <span class="conf-format-label"><?= conf_e($c['format_title']) ?></span>
          <span class="conf-format-duration"><?= conf_e($c['total']) ?> · <?= conf_e($c['teaser']) ?></span>
        </div>
        <?php foreach ($c['formats'] as $i => $f): ?>
          <article class="conf-format">
            <div class="conf-format-icon"><?= conf_icon($i) ?></div>
            <div class="conf-format-kind"><?= conf_e($f['kind']) ?></div>
            <h4 class="conf-format-title serif"><?= conf_e($f['title']) ?></h4>
            <div class="conf-format-meta"><?= conf_e($f['meta']) ?></div>
            <p class="conf-format-desc"><?= conf_e($f['desc']) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="conf-bottom">
      <div class="conf-stats">
        <?php foreach ($c['stats'] as $s): ?>
          <div class="conf-stat">
            <div class="conf-stat-num serif"><?= conf_e($s['num']) ?></div>
            <div class="conf-stat-lbl"><?= conf_e($s['label']) ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="conf-punch serif"><?= conf_e($c['punch']) ?></p>
    </div>
  </div>
</section>
