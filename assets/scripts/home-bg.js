const CycleLetters = (function($) {

  const characters = ['c', 'i', '5', '7', '1', '8'];
  let step = 0;

  const getLetter = function() {
    var char = step % characters.length;
    return characters[char];
  }

  const getNextLetter = function() {
    step++;
    return getLetter();
  }

  const run = function() {
    const current_char = getLetter();
    $('.content').addClass(`icon-${current_char}`);

    setInterval(function() {
      const current_char = getLetter();
      $('.content').removeClass(`icon-${current_char}`);
      const next_char = getNextLetter();
      $('.content').addClass(`icon-${next_char}`);
    }, 10000);
  }

  return {
    run
  }

})(jQuery);


export default CycleLetters;
