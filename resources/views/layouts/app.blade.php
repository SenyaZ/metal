<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <meta rel="stylesheet" href="{{asset('libs/slick/slick.css')}}">
    <meta rel="stylesheet" href="{{asset('libs/slick/slick-theme.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app29.css') }}">
    <title>Металлоконструкции</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
<script src="{{asset('libs/slick/slick.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>


<script>
    $(function (){

        $('.autoplay').slick({
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow:"<button type='button' class='slick-prev pull-left button-next-prev'><</button>",
            nextArrow:"<button type='button' class='slick-next pull-right button-next-prev'>></button>",
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 427,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
        });

    })


</script>


<div class="wrapper" id="app">
    @yield('content')
    @include('inc.footer')

</div>

<script>
    function show(){
        if (document.getElementById("popup-window").style.opacity == '0') {
            document.getElementById("popup-window").style.zIndex = '20';
            document.getElementById("popup-window").style.opacity = "100%";

        }
        else {
            document.getElementById("popup-window").style.zIndex = '-20';
            document.getElementById("popup-window").style.opacity = "0";

        }
    }

</script>
<script src="{{asset('js/app13.js')}}"></script>
<script src="{{asset('js/gsapScript1.js')}}"></script>


</body>
</html>
