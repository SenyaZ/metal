@extends('layouts.app')
@php
    foreach ($products as $prod){
        $feedbacks = DB::table('feedbacks')->where('objectId', $prod->objectId)->get();
        $idObject =  $prod->objectId;
    }

    $average = 0.0;
    if (count($feedbacks) != 0){

        foreach ($feedbacks as $feed){
            $average += $feed->rating;
        }

        $average = round($average/count($feedbacks), 1);
    }


@endphp
@section('content')
    @include('inc.header')
    <div class="popup" style="opacity: 0; z-index: -20; transition: .3s" id="popup-window">
        <div class="window">
            <div class="cancel" onclick="show()">
                <p></p>
            </div>
            <h1 class="caption-popup">Бесплатный замер</h1>
            <p>Для точного расчета стоимости изделия,
                вызовите замерщика, заполнив форму,
                расположенную ниже</p>
            <form action="">
                <h3>Имя</h3>
                <input type="text">
                <h3>Номер телефона</h3>
                <input type="number" class="number-input">
                <input class="send-but" type="submit" name="" id="" value="Оставить заявку">
            </form>

        </div>
    </div>

    <div class="main-block">
        <div class="inside-main-block">
            @foreach($products as $product)

            <p class="breadcrumb"><a href="{{route('home')}}">Главная</a>  &nbsp/&nbsp <a href="{{url('/kategory/'.$product->kategory)}}">{{$kat}}</a>   &nbsp/&nbsp <span>{{$product->nameProd}}</span></p>

            <div class="poduct-more">
                <div class="image-product">
                    <lingallery class="gallery" :iid.sync="currentId" :width="800" :height="400" :items="{{json_encode($photosMain)}}"/>
                </div>
                <div class="desc-product" style="padding: 10px">
                    <h2>{{$product->nameProd}}</h2>
                    <div class="review_stars_wrap">
                    </div>
                    @switch(round($average,0))
                        @case(0)
                            <div class="stars">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($feedbacks)}})</b>

                            </div>
                            @break
                        @case(1)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($feedbacks)}})</b>

                            </div>
                            @break
                        @case(2)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($feedbacks)}})</b>

                            </div>
                            @break
                        @case(3)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($feedbacks)}})</b>

                            </div>
                            @break
                        @case(4)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <b>{{$average}}</b><b>({{count($feedbacks)}})</b>

                            </div>

                            @break
                        @case(5)
                            <div class="stars">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <b>{{$average}}</b><b>({{count($feedbacks)}})</b>

                            </div>

                            @break
                    @endswitch


                    <p>{{$product->description}}</p>
                    <h3>Цена за м<sup>2</sup>: {{$product->price}} грн</h3>
                    <div class="button-zamer" onclick="show()"><p>Вызвать замерщика</p></div>
                </div>

            </div>
            @endforeach

            <div class="recomend">
                <h3>Вас также могут заинтересовать:</h3>

                @php
                    $recomend = DB::table('recomends')->join('products', 'products.id', '=', 'recomends.objectId')->get();

                     $RecFeedback =
                         DB::table('recomends')
                         ->join('products', 'products.id', '=', 'recomends.objectId')
                        ->join('feedbacks', 'products.id', '=', 'feedbacks.objectId')
                        ->get();


                @endphp
                <div class="autoplay products-top" >
                    @foreach($recomend as $rec)
                        <div class="slide">
                            @php
                                /*ratings*/
                                    $average = 0;
                                    $productFeed = $RecFeedback->where('objectId', $rec->objectId);
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
                                       /*end ratings*/

                                 $photoRec = DB::table('recomends')->join('photos', 'photos.objectId', '=', 'recomends.objectId')->get()->where('objectId', $rec->objectId);


                                 foreach ($photoRec as $item){
                                     $photo = $item->srcPhoto;
                                     break;
                                 }

                            @endphp


                            <img src="{{"/storage/".$photo}}" alt="">

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

                            <h3>{{$rec->nameProd}} </h3>
                            <a href="{{url('/kategory/'.$rec->kategory.'/id/'.$rec->id)}}">
                                <div><p>Подробнее</p></div></a>
                            <div><p class="strelka">Вызвать замерщика</p></div>
                        </div>

                    @endforeach



                </div>

            </div>
            <div class="feedbacks">
                <h1>Отзывы о товаре</h1>
                <hr>

                @foreach($feedbacks as $feed)
                <div>
                    <div class="stars top-margin">
                        @switch($feed->rating)
                            @case(1)
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                @break
                            @case(2)
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                @break
                            @case(3)
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                @break
                            @case(4)
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star1.png" alt="">
                                @break
                            @case(5)
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                <img class="star-img" src="/images/star2.png" alt="">
                                @break
                            @endswitch
                    </div>
                    <p>{{$feed->name}} {{$feed->surname}} | {{$feed->created_at}}</p>
                    <p style="color: black">{{$feed->feedback}}</p>
                </div>
                @endforeach

            </div>

            <div class="create-feedbacks">
                <form method="post" action="{{route('feedbacks')}}">
                    @csrf
                <h1>Поделитесь своим мнением</h1>
                <hr>
                <h3>Общая оценка</h3>
                <div class="stars-get">
                    <div class="rating">
                        <input hidden name="objectId" value="{{$idObject}}">
                        <div class="rating-items">
                            <input type="radio" id="rating_5" class="rating_item" name="rating_5" value="5" checked>
                            <label for="rating_5" class="rating_label"></label>
                            <input type="radio" id="rating_4" class="rating_item" name="rating_5" value="4">
                            <label for="rating_4" class="rating_label"></label>
                            <input type="radio" id="rating_3" class="rating_item" name="rating_5" value="3">
                            <label for="rating_3" class="rating_label"></label>
                            <input type="radio" id="rating_2" class="rating_item" name="rating_5" value="2">
                            <label for="rating_2" class="rating_label"></label>
                            <input type="radio" id="rating_1" class="rating_item" name="rating_5" value="1" >
                            <label for="rating_1" class="rating_label" ></label>
                        </div>
                    </div>
                </div>
                <h3>Отзыв</h3>
                <textarea name="feedback" id="" cols="100" rows="10"></textarea>
                <div class="personal-data">
                    <div>
                        <h3>Имя</h3>
                        <input type="text" name="nameFeedback">
                    </div>
                    <div>
                        <h3>Фамилия</h3>
                        <input type="text" name="surnameFeedback">
                    </div>
                </div>
                <input type="submit" class="button-send" value="Оставить отзыв">
                </form>
            </div>
        </div>
    </div>
    <div class="gray-info-block">
        <div class="inside-info-block">
            <div>
                <img src="/images/deliver.png" alt="" id="firstIco">
                <p  id="firstIcoText">Работаем<br>по всему<br>городу</p>
            </div>
            <div>
                <img src="/images/quolite.png" alt="">
                <p>Только<br>качественная<br>работа</p>
            </div>
            <div>
                <img src="/images/calendar.png" alt="">
                <p>Делаем все<br>в кратчайшие<br>сроки</p>
            </div>
            <div>
                <img src="/images/list.png" alt="">
                <p>Обсудим<br>все детали</p>
            </div>
        </div>
    </div>



@endsection
