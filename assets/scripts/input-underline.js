const Underliner = (function($) {

  function init() {
    var input = $('.search-form input');

    input.on('input', function() {
      var length = $(this).val().length === 0 ? $(this).attr('placeholder').length : $(this).val().length;
      add_dashes(length);
    });

    input.trigger('input');
  }

  function add_dashes(amount) {
    $('.input-underline').html('-'.repeat(amount));
  }

  return {
    init
  }

})(jQuery);

export default Underliner;
