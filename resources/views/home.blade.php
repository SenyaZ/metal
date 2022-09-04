@extends('layouts.app')

@section('content')
    <script>
        $(window).scroll(function(){
            if($(window).scrollTop()>80){
                $('#showHeader').show()
            }
        })
    </script>
    <div id="showHeader">
    @include('inc.header')
    </div>
    @include('inc.headerMainPhoto')
    <div class="popup" style="opacity: 0; z-index: -20; transition: .3s" id="popup-window">
        <div class="window">
            <div class="cancel" onclick="show()">
                <p></p>
            </div>
            <h1 class="caption-popup">Бесплатный замер</h1>
            <p>Для точного расчета стоимости изделия,
                вызовите замерщика, заполнив форму,
                расположенную ниже</p>
            <form method="post" action="{{route('mail')}}">
                @csrf
                <h3>Имя</h3>
                <input type="text" name="name">
                <h3>Номер телефона</h3>
                <input type="number" class="number-input" name="number">
                <input class="send-but" type="submit" name="" id="" value="Оставить заявку">
            </form>

        </div>
    </div>

    <div class="main-block">
    <div class="inside-main-block">
        <div class="capt-main-block">
            <div class="caption-text kategory-gsap-capt">
                <p>7 категорий</p>
                <h1>Категории <br><span>товаров</span></h1>


            </div>
            <a href="{{url('/kategory/'. 'all')}}" class="kategory-gsap-button-all">
            <div class="button-all-product">
                <p>Все товары</p>
            </div>
            </a>
        </div>

        <div class="kategory">
            <a href="{{url('/kategory/'. 'reshetka')}}" class="card-kategory-gsap1">
                <div>
                    <p>Решетки <br> на окна</p>
                    <p></p>
                </div>
            </a>
            <a href="{{url('/kategory/'. 'balcon')}}" class="card-kategory-gsap2">
                <div>
                    <p>Балконы</p>
                    <p></p>
                </div>
            </a>
            <a href="{{url('/kategory/'. 'lestnica')}}" class="card-kategory-gsap3">
            <div>
                    <p>Лестницы</p>
                    <p></p>
                </div>
            </a>
            <a href="{{url('/kategory/'. 'dveri')}}" class="card-kategory-gsap4">
            <div>
                    <p>Двери</p>
                    <p></p>
                </div>
            </a>
            <a href="{{url('/kategory/'. 'vorota')}}" class="card-kategory-gsap5">
            <div>
                    <p>Ворота</p>
                    <p></p>
                </div>
            </a>
            <a href="{{url('/kategory/'. 'naves')}}" class="card-kategory-gsap6">
            <div>
                    <p>Навесы</p>
                    <p></p>
                </div>
            </a>
            <a href="{{url('/kategory/'. 'zabor')}}" class="card-kategory-gsap7">
            <div>
                    <p>Заборы</p>
                    <p></p>
                </div>
            </a>
            <a disabled class="card-kategory-gsap8">
                <div class="card-people">
                    <div class="card-left-side">
                        <div>
                            <h1>Оставьте заявку <br>для бесплатного <br>замера</h1>
                            <h6>Наш сотрудник свяжется с Вами, для уточнения даты времени замера</h6>
                        </div>
                        <div class="button open-popup" onclick="show()">
                            <p>Перейти</p>
                        </div>
                    </div>

                    <img src="/images/worker.png" id="worker" alt="">

                </div>

            </a>

        </div>
    </div>
</div>

<div class="main-block" id="app">
    <div class="inside-main-block">
        <div class="capt-main-block">
            <div class="caption-text capt-gsap">
                <p>Высокий рейтинг</p>
                <h1>Популярные <br><span>товары</span></h1>
            </div>
            <div class="button-all-product capt-gsap-but">
                <p>Все товары</p>
            </div>
        </div>
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
<div class="main-block bg-defence">
    <div class="inside-main-block block-flex-row">
        <div class="discont-one">
            <div class="caption-text space">
                <h1 class="white">Скидка 10%<br><span>на навесы</span></h1>
                <div class="block-disc">
                    <a href="{{url('/kategory/'. 'naves')}}">
                        <div class="more-button"><h3>Подробнее</h3></div></a>
                    <h4>Действует до 30.09</h4>
                </div>
            </div>
        </div>
        <div class="discont-two">
            <div class="caption-text space">
                <h1 class="white">Скидка 10%<br><span>на решетки</span></h1>
                <div class="block-disc">
                    <a href="{{url('/kategory/'. 'reshetka')}}">
                        <div class="more-button"><h3>Подробнее</h3></div></a>
                    <h4>Действует до 30.09</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


