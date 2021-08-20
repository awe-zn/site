import bootstrap from 'bootstrap';

(() => {
  const typingEls = [...document.querySelectorAll('.typing')];
  typingEls.forEach((el) => {
    const { delay } = el.dataset;
    let { words } = el.dataset;
    words = words.split(',');

    el.style.animationDuration = `${delay}ms`;

    let indexCurrentWord = 0,
      indexCurrentChar = 0;

    setInterval(() => {
      el.textContent += words[indexCurrentWord].charAt(indexCurrentChar);

      if (indexCurrentChar === words[indexCurrentWord].length - 1) {
        if (indexCurrentWord === words.length - 1) {
          indexCurrentWord = 0;
          indexCurrentChar = 0;
        } else {
          indexCurrentWord++;
          indexCurrentChar = 0;
        }

        if (indexCurrentChar === 0) {
          console.log(indexCurrentChar);
          setTimeout(() => {
            el.textContent = '';
          }, delay / 2);
        }
      } else {
        indexCurrentChar++;
      }
    }, delay);
  });
})();
