<form class="search-form" action="/party-records/">
  <label for="search-field"><span class="screen-reader-text">Search past Carnegie International participants</span></label>
  <input type="search" id="search-field" placeholder="<?= esc_attr_x( 'SEARCH PAST PARTICIPANTS', 'placeholder' ) ?>" value="<?= esc_attr(get_query_var( 'search' )) ?>" name="search" />
  <span class="input-underline"></span>
</form>
