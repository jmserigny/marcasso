<!DOCTYPE html>
<html lang="fr">
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>marc·asso — Ma Rééducation Collective</title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header" id="site-header">
  <div class="wrap header-inner">
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="brand">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png"
           alt="MaRC — Ma Rééducation Collective" class="brand-mark"/>
    </a>
    <nav class="site-nav">
      <a href="<?php echo esc_url( home_url('/#mission') ); ?>">Mission</a>
      <a href="<?php echo esc_url( home_url('/#marc') ); ?>">Marc</a>
      <a href="<?php echo esc_url( home_url('/#therapies') ); ?>">Thérapies</a>
      <a href="<?php echo esc_url( home_url('/#news') ); ?>">Actualités</a>
      <a href="<?php echo esc_url( home_url('/#join') ); ?>">Adhésion</a>
    </nav>
    <div class="header-actions">
      <a href="<?php echo esc_url( home_url('/#join') ); ?>" class="btn btn-primary btn-sm">Faire un don</a>
    </div>
  </div>
</header>