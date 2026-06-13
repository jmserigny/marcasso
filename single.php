<?php
/**
 * The template for displaying single posts
 *
 * @package MyTheme
 */
 
get_header(); ?>

<!-- HERO -->
 <?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="article-hero">
      <div class="wrap-narrow">
        <a href="<?php echo esc_url( get_template_directory_uri() ); ?>#news" class="article-back">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M12 7H2M2 7L7 2M2 7L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Retour aux actualités
        </a>
        <div class="article-meta">
          <span class="tag tag-leaf"><?php echo esc_html( get_post_meta(get_the_ID(), 'tag', true) ); ?></span>
          <span class="article-date"><?php echo esc_html( get_the_date() ); ?></span>
          <span>·</span>
          <span>Lecture 2 min</span>
        </div>
        <h1 class="display article-title"><?php the_title(); ?></h1>
        <p class="article-lede">
          <?php echo esc_html( get_the_excerpt() ); ?>
        </p>
      </div>
    </section>
    <figure class="article-cover">
      <svg viewBox="0 0 1200 420" preserveAspectRatio="xMidYMid slice">
        <defs>
          <linearGradient id="alinker-sky" x1="0" x2="0" y1="0" y2="1">
            <stop offset="0" stop-color="#e8f5e9"/>
            <stop offset="1" stop-color="#c8e6c9"/>
          </linearGradient>
          <linearGradient id="path-grad" x1="0" x2="1" y1="0" y2="0">
            <stop offset="0" stop-color="#8d6e63"/>
            <stop offset="1" stop-color="#a1887f"/>
          </linearGradient>
        </defs>
        <!-- Sky -->
        <rect width="1200" height="420" fill="url(#alinker-sky)"/>
        <!-- Ground -->
        <path d="M 0 340 Q 600 320, 1200 340 L 1200 420 L 0 420 Z" fill="#4caf50" opacity="0.6"/>
        <path d="M 0 360 Q 600 345, 1200 360 L 1200 420 L 0 420 Z" fill="#388e3c" opacity="0.5"/>
        <!-- Path / road -->
        <path d="M 50 420 Q 400 380, 700 360 Q 1000 340, 1200 360" stroke="url(#path-grad)" stroke-width="40" fill="none" opacity="0.5"/>
        <!-- Path dashes -->
        <path d="M 50 420 Q 400 380, 700 360 Q 1000 340, 1200 360" stroke="#fff" stroke-width="2" fill="none" opacity="0.4" stroke-dasharray="20,15"/>
        <!-- Trees -->
        <g>
          <ellipse cx="80" cy="270" rx="35" ry="50" fill="#2e7d32" opacity="0.8"/>
          <rect x="77" y="316" width="6" height="30" fill="#795548" opacity="0.8"/>
          <ellipse cx="200" cy="250" rx="28" ry="42" fill="#388e3c" opacity="0.8"/>
          <rect x="197" y="289" width="6" height="25" fill="#795548" opacity="0.8"/>
          <ellipse cx="950" cy="265" rx="30" ry="46" fill="#2e7d32" opacity="0.7"/>
          <rect x="947" y="308" width="6" height="28" fill="#795548" opacity="0.8"/>
          <ellipse cx="1100" cy="255" rx="25" ry="38" fill="#388e3c" opacity="0.7"/>
          <rect x="1097" y="291" width="6" height="22" fill="#795548" opacity="0.8"/>
          <ellipse cx="1180" cy="275" rx="20" ry="30" fill="#2e7d32" opacity="0.6"/>
          <rect x="1178" y="303" width="5" height="18" fill="#795548" opacity="0.8"/>
        </g>
        <!-- Alinker silhouette (walking bike) -->
        <g transform="translate(500, 270)">
          <!-- Frame -->
          <line x1="40" y1="20" x2="100" y2="20" stroke="#1565c0" stroke-width="5" stroke-linecap="round"/>
          <line x1="40" y1="20" x2="20" y2="60" stroke="#1565c0" stroke-width="5" stroke-linecap="round"/>
          <line x1="100" y1="20" x2="120" y2="60" stroke="#1565c0" stroke-width="5" stroke-linecap="round"/>
          <line x1="70" y1="20" x2="70" y2="-10" stroke="#1565c0" stroke-width="4" stroke-linecap="round"/>
          <!-- Handlebar -->
          <line x1="55" y1="-10" x2="85" y2="-10" stroke="#1565c0" stroke-width="4" stroke-linecap="round"/>
          <!-- Seat -->
          <line x1="60" y1="20" x2="80" y2="20" stroke="#e53935" stroke-width="6" stroke-linecap="round"/>
          <!-- Wheels -->
          <circle cx="20" cy="65" r="18" fill="none" stroke="#1565c0" stroke-width="4"/>
          <circle cx="120" cy="65" r="18" fill="none" stroke="#1565c0" stroke-width="4"/>
          <circle cx="20" cy="65" r="5" fill="#1565c0"/>
          <circle cx="120" cy="65" r="5" fill="#1565c0"/>
          <!-- Person silhouette -->
          <circle cx="70" cy="-28" r="12" fill="#e53935" opacity="0.9"/>
          <line x1="70" y1="-16" x2="70" y2="20" stroke="#e53935" stroke-width="5" stroke-linecap="round"/>
          <line x1="70" y1="-5" x2="55" y2="-14" stroke="#e53935" stroke-width="4" stroke-linecap="round"/>
          <line x1="70" y1="-5" x2="85" y2="-12" stroke="#e53935" stroke-width="4" stroke-linecap="round"/>
        </g>
        <!-- Sun -->
        <circle cx="1050" cy="80" r="55" fill="#fff9c4" opacity="0.7"/>
        <circle cx="1050" cy="80" r="38" fill="#fff176" opacity="0.6"/>
        <!-- Birds -->
        <path d="M 300 80 q 12 -8 24 0 q 12 -8 24 0" stroke="#2e7d32" stroke-width="2" fill="none" stroke-linecap="round" opacity="0.6"/>
        <path d="M 420 55 q 8 -5 16 0 q 8 -5 16 0" stroke="#2e7d32" stroke-width="1.8" fill="none" stroke-linecap="round" opacity="0.5"/>
      </svg>
    </figure>

    <article class="wrap-narrow article-body">
      <?php the_content(); ?>
    </article>
</div>
<?php endwhile; ?>