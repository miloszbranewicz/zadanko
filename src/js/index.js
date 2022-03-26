const $mainSlider = $('.slick-slider');
const $sideSlider = $('.slider-side');
const $DOMcurrentSlide = $('.slides-count__current-slide')
const $DOMtotalSlides = $('.slides-count__total-slides')
const $arrowPrev = $('.sliders-navigation__prev')
const $arrowNext = $('.sliders-navigation__next')

$mainSlider.on('init', function (event, slick) {
    const slideCount = slick.slideCount

    if (slideCount < 9) {
        $DOMtotalSlides.text('/ 0' + slideCount)
        $DOMcurrentSlide.text(`0${slick.currentSlide + 1}`)

    } else {
        $DOMtotalSlides.text(slideCount)
        $DOMcurrentSlide.text(`${slick.currentSlide + 1}`)
    }
})
$mainSlider.slick({
    infinite: true,
    prevArrow: $arrowPrev,
    nextArrow: $arrowNext,
})

$sideSlider.slick({
    infinite: true,
    arrows: false,
    initialSlide: $mainSlider.slick('getSlick').slideCount - 1,
    fade: true
})


$mainSlider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    if (nextSlide > 0) {
        $sideSlider.slick("slickGoTo", nextSlide - 1, false)

    } else {
        $sideSlider.slick("slickGoTo", slick.slideCount - 1, false)
    }
    if (slick.slickCount > 9) {
        $DOMcurrentSlide.text(`${nextSlide + 1}`)
    } else {
        $DOMcurrentSlide.text(`0${nextSlide + 1}`)

    }
})

