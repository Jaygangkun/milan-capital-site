(function($){
    $(document).ready(function(){
        $('.home-hero-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            arrows: false,
            autoplay: true
        }).on('afterChange', function(slick, currentSlide){
            $('.home-hero-slick-dot').removeClass('active');
            $('.home-hero-slick-dot[index="' + currentSlide.currentSlide + '"]').addClass('active');
        });

        $(document).on('click', '.home-hero-slick-dot', function(){
            $('.home-hero-slick-dot').removeClass('active');
            $(this).addClass("active");
            var index = parseInt($(this).attr('index'));
            $('.home-hero-slider').slick('slickGoTo', index);
        })

        $(document).on('click', '.home-question-header', function(){
            var question_row = $(this).parents('.home-question-row');
            if($(question_row).hasClass('open')){
                $(question_row).removeClass('open');
                $(question_row).find('.home-question-body').slideUp();
            }
            else{
                $(question_row).addClass('open');
                $(question_row).find('.home-question-body').slideDown();
            }

        })
    })
})(jQuery)