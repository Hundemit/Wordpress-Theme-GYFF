const phone = document.querySelector(".phone");

ticking = false;
window.addEventListener("scroll", () => {
  window.requestAnimationFrame(() => {
    scrollForPhone(-380);
  });
});

function scrollForPhone(abwann) {
  const scrollPosition = window.scrollY + abwann;
  const screenWidth = window.innerWidth;

  let phoneRight, phoneBottom;
  phoneBottom = Math.min(120, Math.max(0, 120 - scrollPosition / 7)) + "%";

  if (screenWidth >= 1536) {
    // 2xl
    phoneRight = Math.min(20, Math.max(0, 20 - scrollPosition / 35)) + "%";
  } else if (screenWidth >= 1280) {
    // xl
    phoneRight = Math.min(24, Math.max(0, 24 - scrollPosition / 30)) + "%";
  } else if (screenWidth >= 1024) {
    // lg
    phoneRight = Math.min(30, Math.max(0, 30 - scrollPosition / 27)) + "%";
  } else if (screenWidth >= 768) {
    // kleiner als lg
    phoneRight = Math.min(29, Math.max(0, 29 - scrollPosition / 25)) + "%";
  } else {
    // kleiner als lg
    phoneRight = 0;
    phoneBottom = 0;
  }

  phone.style.right = phoneRight;
  phone.style.bottom = phoneBottom;
}

window.onresize = function () {
  scrollForPhone(-450);
};

scrollForPhone(-450);
