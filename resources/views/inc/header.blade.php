
<header>
        <div class="inside">
            <div class="header-info">
                <div class="logo"  >
                    <a href="{{route('home')}}"><img src="{{asset("images/logo.svg")}}" alt="logo"></a>
                    <div class="name">
                        <a href="{{route('home')}}">
                            <h5>Металло <span>-</span></h5>
                            <h4>конструкции</h4>
                        </a>
                    </div>
                </div>
                <div class="callback">
                    <div class="number" >
                        <img src="{{asset("images/call.png")}}" alt="">
                        <div class="text">
                            <div class="phone">
                                <a href="tel:0966293442"><h5 id="sec-phone">38 (096) 629-34-42</h5></a>
                                <a href="tel:0669178126"><h5>38 (066) 917-81-26</h5></a>
                            </div>
                          <button-konst></button-konst>

                        </div>
                        <button-menu></button-menu>

                       <button-konst-head></button-konst-head>
                    </div>
                </div>
            </div>
        </div>
    <div class="bar">
        <div class="bar-inside">
            <a href="">
                <div>
                    <p><span>Хиты продаж</span></p>
                </div>
            </a>
            <a href="{{url('/kategory/'. 'reshetka')}}">
                <div>
                    <p>Решетки на окна</p>
                </div>
            </a><a href="{{url('/kategory/'. 'naves')}}">
                <div>
                    <p>Навесы</p>
                </div>
            </a><a href="{{url('/kategory/'. 'balcon')}}">
            <div>
                    <p>Балконы</p>
                </div>
            </a><a href="{{url('/kategory/'. 'zabor')}}">
                <div>
                    <p>Заборы</p>
                </div>
            </a> <a href="{{url('/kategory/'. 'lestnica')}}">
                <div>
                    <p>Лестницы</p>
                </div>
            </a><a href="{{url('/kategory/'. 'dveri')}}">
                <div>
                    <p>Двери</p>
                </div>
            </a><a href="{{url('/kategory/'. 'vorota')}}">
                <div>
                    <p>Ворота</p>
                </div>
            </a>
        </div>
    </div>

</header>




