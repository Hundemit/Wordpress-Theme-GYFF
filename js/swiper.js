const buttonFill = [
  '<span class="pointer-events-none inline-flex items-center justify-center w-4 h-4 mr-2 text-xs font-semibold text-white rounded-full" > <img src="Icons/chart-line-bold.svg" alt="" /> </span> <span class="leading-3 pt-1 pointer-events-none"> Technische Indikatoren </span>',
];

const buttonText = ["Technische Indikatoren", "Fundamentaldaten", "Sentiments", "Risikomaße"];
const buttonImgSrc = [
  '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dddddd" viewBox="0 0 256 256"><path d="M236,208a12,12,0,0,1-12,12H32a12,12,0,0,1-12-12V48a12,12,0,0,1,24,0v85.55L88.1,95a12,12,0,0,1,15.1-.57l56.22,42.16L216.1,87A12,12,0,1,1,231.9,105l-64,56a12,12,0,0,1-15.1.57L96.58,119.44,44,165.45V196H224A12,12,0,0,1,236,208Z"></path></svg>',
  '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dddddd" viewBox="0 0 256 256"><path d="M196,35.52C177.62,25.51,153.48,20,128,20S78.38,25.51,60,35.52C39.37,46.79,28,62.58,28,80v96c0,17.42,11.37,33.21,32,44.48,18.35,10,42.49,15.52,68,15.52s49.62-5.51,68-15.52c20.66-11.27,32-27.06,32-44.48V80C228,62.58,216.63,46.79,196,35.52ZM204,128c0,17-31.21,36-76,36s-76-19-76-36v-8.46a88.9,88.9,0,0,0,8,4.94c18.35,10,42.49,15.52,68,15.52s49.62-5.51,68-15.52a88.9,88.9,0,0,0,8-4.94ZM128,44c44.79,0,76,19,76,36s-31.21,36-76,36S52,97,52,80,83.21,44,128,44Zm0,168c-44.79,0-76-19-76-36v-8.46a88.9,88.9,0,0,0,8,4.94c18.35,10,42.49,15.52,68,15.52s49.62-5.51,68-15.52a88.9,88.9,0,0,0,8-4.94V176C204,193,172.79,212,128,212Z"></path></svg>',
  '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dddddd" viewBox="0 0 256 256"><path d="M219.29,31.5a20,20,0,0,0-18.52-2.14C187,34.72,159.17,43.7,128,43.7s-59-9-72.77-14.34A20,20,0,0,0,28,48v55.77c0,36.64,9.9,71.25,27.88,97.45C74.81,228.81,100.42,244,128,244s53.19-15.19,72.12-42.76C218.1,175,228,140.43,228,103.79V48A20,20,0,0,0,219.29,31.5ZM204,103.79c0,31.84-8.41,61.63-23.67,83.87C166,208.51,147.43,220,128,220s-38-11.49-52.33-32.34C60.41,165.42,52,135.63,52,103.79v-50c16.59,5.95,44.67,13.94,76,13.94s59.41-8,76-13.94Zm-66.11,27.37a12,12,0,0,1,3.61-16.58,41.8,41.8,0,0,1,45,0,12,12,0,0,1-13,20.2,17.81,17.81,0,0,0-19.06,0,12,12,0,0,1-16.59-3.61ZM92,132a19.14,19.14,0,0,0-9.53,2.77,12,12,0,1,1-13-20.19,41.78,41.78,0,0,1,45,0,12,12,0,1,1-13,20.19A19.21,19.21,0,0,0,92,132Zm73.33,34.67a12,12,0,0,1-1.79,16.87,56.92,56.92,0,0,1-71.08,0,12,12,0,0,1,15.08-18.67,32.92,32.92,0,0,0,40.92,0A12,12,0,0,1,165.33,166.67Z"></path></svg>',
  '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dddddd" viewBox="0 0 256 256"><path d="M172,228a12,12,0,0,1-12,12H96a12,12,0,0,1,0-24h64A12,12,0,0,1,172,228ZM230.94,58.48A115.25,115.25,0,0,0,190.4,13.86a12,12,0,1,0-12.8,20.29,90.1,90.1,0,0,1,32,35.38A12,12,0,0,0,220.3,76a11.86,11.86,0,0,0,5.51-1.35A12,12,0,0,0,230.94,58.48ZM46.37,69.53a90.1,90.1,0,0,1,32-35.38A12,12,0,1,0,65.6,13.86,115.25,115.25,0,0,0,25.06,58.48a12,12,0,0,0,5.13,16.17A11.86,11.86,0,0,0,35.7,76,12,12,0,0,0,46.37,69.53Zm173.51,98.35A20,20,0,0,1,204,200H52a20,20,0,0,1-15.91-32.12c7.17-9.33,15.73-26.62,15.88-55.94A76,76,0,0,1,204,112C204.15,141.26,212.71,158.55,219.88,167.88ZM196.34,176c-8.16-13-16.19-33.57-16.34-63.94A52,52,0,1,0,76,112c-.15,30.42-8.18,51-16.34,64Z"></path></svg>',
];

var swiper = new Swiper(".mySwiper", {
  grabCursor: true,
  effect: "creative",
  creativeEffect: {
    prev: {
      translate: ["-120%", 0, -500],
      opacity: "0",
    },
    next: {
      translate: ["120%", 0, -500],
      opacity: "0",
    },
  },
  autoHeight: true,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,

    renderBullet: function (index, className) {
      return (
        '<button class="w-full  sm:w-auto justify-center  inline-flex !m-0 !my-2 !mr-4 items-center px-5 py-2.5 text-base font-medium text-center text-white bg-darkgreen rounded-lg focus:ring-4 focus:outline-none focus:ring-darkGreen hover:opacity-100 duration-200 ' +
        className +
        ' ">  <span class="pointer-events-none inline-flex items-center justify-center w-4 h-4 mr-2 text-xs font-semibold text-white rounded-full" > ' +
        buttonImgSrc[index] +
        ' </span> <span class="leading-3 pt-1 pointer-events-none"> ' +
        buttonText[index] +
        " </span>   </button>"
      );
    },
  },
});
