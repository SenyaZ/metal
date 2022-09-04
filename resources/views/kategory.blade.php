@extends('layouts.app')

@section('content')
    @include('inc.header')

    <div class="main-block">
        <div class="inside-main-block">
            <p class="breadcrumb"><a href="{{route('home')}}">Главная</a>  &nbsp/&nbsp  <span>{{$kat}}</span></p>
            <div class="capt-main-block" >
                <div class="caption-text kategory-gsap-capt" style="margin-top: 20px">
                    @switch($kategory)
                        @case('reshetka')
                            <h1>Решетки <br><span>на окна</span></h1>
                            @break
                        @case('balcon')
                            <h1>Балконы</h1>
                            @break
                        @case('lestnica')
                            <h1>Лестницы</h1>
                            @break
                        @case('dveri')
                            <h1>Двери</h1>
                            @break
                        @case('vorota')
                            <h1>Ворота</h1>
                            @break
                        @case('naves')
                            <h1>Навесы</h1>
                            @break
                        @case('zabor')
                            <h1>Заборы</h1>
                            @break
                        @case('all')
                            <h1>Все <br><span>товары</span></h1>
                            @break
                    @endswitch
                </div>
                <a href="{{url('/kategory/'. 'all')}}">
                    <div class="button-all-product kategory-gsap-button-all">
                        <p>Все товары</p>
                    </div>
                </a>
            </div>
{{--            <div class="filter">--}}
{{--                <div class="price">--}}
{{--                    <h6>Цена</h6>--}}
{{--                    <input type="number" min="0">--}}
{{--                    <i>-</i>--}}
{{--                    <input type="number" max="20000">--}}
{{--                    <button>Ок</button>--}}
{{--                    <section class="range-slider">--}}
{{--                        <input value="500" min="500" max="50000" step="500" type="range">--}}
{{--                        <input value="50000" min="500" max="50000" step="500" type="range">--}}
{{--                    </section>--}}
{{--                </div>--}}
{{--                <div class="check-box">--}}
{{--                    <h6>Тип конструкции</h6>--}}
{{--                    <label><input type="radio" name="type"> Прямые решетки</label>--}}
{{--                    <label><input type="radio" name="type"> Пузатые решетки</label>--}}
{{--                    <label><input type="radio" name="type"> Открывающиеся решетки</label>--}}
{{--                    <label><input type="radio" name="type"> Решеточные двери</label>--}}

{{--                </div>--}}
{{--                <div class="check-box"  id="without-border">--}}
{{--                    <h6>Рейтинг</h6>--}}
{{--                    <label><input type="radio" name="ratings"> 5</label>--}}
{{--                    <label><input type="radio" name="ratings"> 4+</label>--}}
{{--                    <label><input type="radio" name="ratings"> 3+</label>--}}

{{--                </div>--}}
{{--            </div>--}}

            <div class="products">
                @foreach($products as $card)
                <div class="card card{{$card->id}}">
                    <a href="{{url('/kategory/'.$card->kategory.'/id/'.$card->id)}}">
                        <img src="{{'/storage/'.$card->srcPhoto}}" alt="">
                    </a>


                    @php
                        $average = 0;
                            $productFeed = $productsFeedback->where('objectId', $card->objectId);


                                foreach ($productFeed as $item) {
                                    $average += $item->rating;
                                }

                                if (count($productFeed) != 0){
                                       $average /= count($productFeed);
                                      $average = round($average, 1);
                                }else{
                                        $average /= 1;
                                         $average = round($average, 1);
                                }


                    @endphp


                    @switch(round($average,0))
                        @case(0)
                            <div class="stars">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($productFeed)}})</b>

                            </div>
                            @break
                        @case(1)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($productFeed)}})</b>

                            </div>
                            @break
                        @case(2)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($productFeed)}})</b>

                            </div>
                            @break
                        @case(3)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($productFeed)}})</b>

                            </div>
                            @break
                        @case(4)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($productFeed)}})</b>

                            </div>

                            @break
                        @case(5)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <b>{{$average}}</b><b>({{count($productFeed)}})</b>

                            </div>

                            @break
                    @endswitch


                    <a href="{{url('/kategory/'.$card->kategory.'/id/'.$card->id)}}">

                        <h3>{{$card->nameProd}}</h3>
                    </a>
                    <p>{{$card->price}} грн м<sup>2</sup></p>


                    <a href="{{url('/kategory/'.$card->kategory.'/id/'.$card->id)}}"><div><p>Подробнее</p></div></a>
{{--                    <div><p class="strelka">Вызвать замерщика</p></div>--}}
                </div>
                @endforeach





            </div>

        </div>
    </div>

    <div class="gray-info-block">
        <div class="inside-info-block">
            <div class="ico1-rec">
                <img src="/images/deliver.png" alt="" id="firstIco">
                <p  id="firstIcoText">Работаем<br>по всему<br>городу</p>
            </div>
            <div class="ico2-rec">
                <img src="/images/quolite.png" alt="">
                <p>Только<br>качественная<br>работа</p>
            </div>
            <div class="ico3-rec">
                <img src="/images/calendar.png" alt="">
                <p>Делаем все<br>в кратчайшие<br>сроки</p>
            </div>
            <div class="ico4-rec">
                <img src="/images/list.png" alt="">
                <p>Обсудим<br>все детали</p>
            </div>
        </div>
    </div>

@endsection
