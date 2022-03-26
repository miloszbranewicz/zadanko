<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zadanko</title>
    <link rel="stylesheet" href="./dist/style.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
    <script src="./src/js/index.js" defer></script>
</head>

<body>

<?php
$example_data = [
    0 => [
      'title' => 'Z pasji do <strong>piękna</strong> <br>z pasji do <strong>mody</strong>',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
      'link' => [
        'url' => 'https://www.youtube.com/watch?v=CelgqNnv0wU',
        'title' => 'zobacz więcej'
      ],
      'image' => './src/assets/img/1.jpg'
    ],
    1 => [
      'title' => 'Z pasji do <strong>piękna</strong> <br>z pasji do <strong>wody</strong>',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
      'link' => [
        'url' => 'https://www.youtube.com/watch?v=CelgqNnv0wU',
        'title' => 'zobacz więcej'
        
      ]
      ,
      'image' => './src/assets/img/2.jpg'
    ],
    2 => [
      'title' => 'Z pasji do <strong>piękna</strong> <br>z pasji do <strong>sody</strong>',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e',
      'link' => [
        'url' => 'https://www.youtube.com/watch?v=CelgqNnv0wU',
        'title' => 'zobacz więcej'
      ],
      'image' => './src/assets/img/3.jpg'
    ]
  ];
?>
    <div class="sliders-wrapper">
        <div class="slick-slider-wrapper">
            <div class="slick-slider">
                <?php foreach ($example_data as $item): ?>
                <div class="slick-slider__slide">
                    <div class="slide__left-column">
                        <h1 class="slide__title"><?php echo $item['title'] ?></h1>
                        <p class="slide__description"><?php echo $item['content'] ?></p>
                        <a href="<?php echo $item['link']['url'] ?>" class="slide__link"><?php echo $item['link']['title'] ?></a>
                    </div>
                    <div class="slide__right-column" style="background-image:url(<?php echo $item['image'] ?>)">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="slider-side-wrapper">
            <div class="slider-side">
            <?php foreach ($example_data as $item): ?>

                <div class="slide-side__slide">
                    <div class="slide__left-column">
                        <h1 class="slide__title"><?php echo $item['title'] ?></h1>
                        <p class="slide__description"><?php echo $item['content'] ?></p>
                        <a href="<?php echo $item['link']['url'] ?>" class="slide__link"><?php echo $item['link']['title'] ?></a>
                    </div>
                    <div class="slide__right-column" style="background-image:url(<?php echo $item['image'] ?>">
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="sliders-navigation">
            <span class="sliders-navigation__prev">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
            </span>
            <div class="slides-count">
                <span class="slides-count__current-slide"></span>
                <span class="slides-count__total-slides">/</span>
            </div>
            <span class="sliders-navigation__next">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
            </span>
    </div>

    </div>
</body>

</html>