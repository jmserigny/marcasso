<?php
$accent = get_post_meta( get_the_ID(), 'accent', true );
$tag    = get_post_meta( get_the_ID(), 'tag',    true );
$post_date = get_post_meta( get_the_ID(), 'post_date',    true );
?>
<a class="news-item news-<?php echo esc_attr( $accent ); ?> is-link" href="<?php echo esc_url( get_permalink() ); ?>">
  <div class="news-date serif"><?php echo esc_html( $post_date ); ?></div>
  <div class="news-body">
    <div class="news-tagline"><span class="tag tag-<?php echo esc_attr( $accent ); ?>"><?php echo esc_html( $tag ); ?></span></div>
    <h3 class="news-title-item serif"><?php echo esc_html( get_the_title() ); ?></h3>
    <p class="news-text"><?php echo esc_html( get_the_excerpt() ); ?></p>
    <?php if ( get_the_content() ) : ?>
      <span class="news-readmore">Lire l'article
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
          <path d="M2 7H12M12 7L7 2M12 7L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
    <?php endif; ?>
  </div>
  <div class="news-arrow">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
      <path d="M2 7H12M12 7L7 2M12 7L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
</a>
