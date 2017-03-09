<?php use Roots\Sage\Extras; ?>

<section class="page-header">
  <h1 class="page-header__title"><span class="page-title">Page not found</span></h1>
  <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
</section>

<section class="page-content">
  <div class="page-content__body">
    <p>Sorry, we couldn't find the page you were looking for.</p>
  </div>

  <section class="page-header">
    <span class="section-number"><i class="icon-search"></i></span>
    <?php get_search_form(); ?>
  </section>
</section>
