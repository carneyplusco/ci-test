<article <?php post_class(); ?>>
  <aside>
    <span></span>
  </aside>
  <section>
    <header>
      <p class="entry-title"><a href="<?php the_permalink(); ?>"><?php strtoupper(the_title()); ?></a></p>
      <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </section>
</article>
