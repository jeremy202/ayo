// $('.autoplay').slick({
//   centerMode: true,
//   slidesToShow: 2,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 3000,
//   centerPadding: '60px',
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         infinite: true,
//         dots: true,

//       }
//     },
//     {
//       breakpoint: 900,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 768,
//       settings: {
//         centerMode: false,
//         autoplay: true,
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//   ]
// });

$('.autoplay').slick({
  centerMode: true,
  centerPadding: '20px',
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
			