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

    <article class="wrap-narrow article-body">
      <?php the_content(); ?>
    </article>
</div>
<?php endwhile; ?>