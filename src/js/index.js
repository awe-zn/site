import bootstrap from 'bootstrap';
import Swiper from 'swiper/swiper-bundle';

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

new Swiper('.swiper-quotes .swiper-container', {
  slidesPerView: 1.33,
  spaceBetween: 24,
  loop: true,
  navigation: {
    prevEl: '.swiper-quotes .swiper-prev',
    nextEl: '.swiper-quotes .swiper-next',
  },
  breakpoints: {
    1200: {
      slidesPerView: 1.5,
    },
  },
});

new Swiper('.swiper-cases .swiper-container', {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  navigation: {
    prevEl: '.swiper-cases .swiper-prev',
    nextEl: '.swiper-cases .swiper-next',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    1200: {
      slidesPerView: 3,
    },
  },
});
