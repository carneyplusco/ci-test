<?php
  use Roots\Sage\Extras;
  $title = get_the_title();
  $title_number = Extras\menu_number('Home Nav', $title);
?>

<section class="page-header">
  <span class="section-number"><?= $title_number ?>.</span>
  <h1 class="page-header__title underline"><a href="<?= get_the_permalink() ?>"><?= $title ?></a></h1>
  <a class="page-header__back-button" href="<?= Extras\back_link() ?>" aria-label="Go back to previous page" tabindex="0">Back</a>
</section>
