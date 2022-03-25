// $example_data = [
//     0 => [
//       'title' => 'Z pasji do <strong>piękna</strong> <br>z pasji do <strong>mody</strong>',
//       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
//       'link' => [
//         'url' => 'https://www.youtube.com/watch?v=CelgqNnv0wU',
//         'title' => 'zobacz więcej'
//       ]
//     ],
//     1 => [
//       'title' => 'Z pasji do <strong>piękna</strong> <br>z pasji do <strong>wody</strong>',
//       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
//       'link' => [
//         'url' => 'https://www.youtube.com/watch?v=CelgqNnv0wU',
//         'title' => 'zobacz więcej'
//       ]
//     ],
//     2 => [
//       'title' => 'Z pasji do <strong>piękna</strong> <br>z pasji do <strong>sody</strong>',
//       'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
//       'link' => [
//         'url' => 'https://www.youtube.com/watch?v=CelgqNnv0wU',
//         'title' => 'zobacz więcej'
//       ]
//     ]
//   ];
$('.slider-faker').slick({
    infinite:true,
    arrows:false,
    adaptiveHeight:true,
    asNavFor: '.slider',
    initialSlide: 3

})


$('.slider').slick({
    infinite: true,
    // slidesToShow: 3,
    // slidesToScroll: 3,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    asNavFor: '.slider-faker'
  });