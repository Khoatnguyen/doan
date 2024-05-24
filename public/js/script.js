$(document).ready(function(){
    $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });

    let endDate = new Date("01/01/2024 00:00:00").getTime();
    let check = setInterval(function(){
        let now = new Date().getTime();
        let distance = endDate - now;
        let day = Math.floor(distance / (24*60*60*1000));
        let hour = Math.floor((distance % (24*60*60*1000)) / (60* 60*1000));
        let minute = Math.floor((distance % (60* 60*1000)) / (60*1000));
        let seconds = Math.floor((distance % (60*1000)) / 1000);
        document.getElementById('day').innerText = day;
        document.getElementById('hour').innerText = hour;
        document.getElementById('minute').innerText = minute;
        document.getElementById('seconds').innerText = seconds;
        if(distance <= 0){
            clearInterval(check);
        }
    }, 1000);


    $('.slider-plash').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $('.autoplay').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $('.single-item').slick();

        $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
        $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });



});
