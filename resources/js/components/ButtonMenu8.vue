<template>
    <div class="container">
        <div class="button-menu" v-on:click="elVisible = !elVisible"><p></p></div>

        <transition name="fade">
            <div  class="menu" v-if="elVisible">
                <header style="background: #eeeeee">
                    <div class="inside">
                        <div class="header-info">
                            <div class="logo">
                                <a href=""><img src='/../../../../images/logo.svg' alt="logo" style="z-index: 20; display:flex; width: 50px; height: 40px"></a>
                                <div class="name">
                                    <a href="">
                                        <h5>Металло <span>-</span></h5>
                                        <h4>конструкции</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="callback">
                                <div class="number" id="app">
                                    <img src="/../images/call.png" alt="">
                                    <div class="text">
                                        <div class="phone">
                                            <a href=""><h5 id="sec-phone">38 (096) 604-24-28</h5></a>
                                            <a href=""><h5>38 (096) 604-24-22</h5></a>
                                        </div>
                                        <a href=""><h6>Заказать звонок</h6></a>
                                    </div>
                                    <div class="button-menu" v-on:click="elVisible = !elVisible"><p class="cancel-but" style="font-size: 25px"></p></div>
                                    <div class="consult">
                                        <p>Консультация</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </header>
                <h2 style="font-size: 35px">Категории</h2>
                <a href="">
                    <div>
                        <p><span style="font-size: 22px">Хиты продаж</span></p>
                    </div>
                </a>
                <div class="kateg">
                    <a href="/kategory/reshetka">
                        <div>
                            <p>Решетки на окна</p>
                        </div>
                    </a>
                    <a href="/kategory/naves">
                        <div>
                            <p>Навесы</p>
                        </div>
                    </a>
                    <a href="/kategory/balcon">
                        <div>
                            <p>Балконы</p>
                        </div>
                    </a>
                    <a href="/kategory/zabor">
                        <div>
                            <p>Заборы</p>
                        </div>
                    </a>
                    <a href="/kategory/lestnica">
                        <div>
                            <p>Лестницы</p>
                        </div>
                    </a>
                    <a href="/kategory/dveri">
                        <div>
                            <p>Двери</p>
                        </div>
                    </a>
                    <a href="/kategory/vorota">
                        <div>
                            <p>Ворота</p>
                        </div>
                    </a>
                </div>

                <h2 style="font-size: 35px">Для клиента</h2>
                <div class="kateg">
                    <a href="">
                        <div>
                            <p>О нас</p>
                        </div>
                    </a>
                    <a href="">
                        <div>
                            <p>Наши работы</p>
                        </div>
                    </a>
                </div>

                <div class="button-section" style="margin-top: 25px" onclick="show()">
                    <div>
                        <p>Бесплатный замер</p>
                    </div>
                </div>
                <div class="call-bl">
                    <a href="" style="margin-top: 5px"><p>+38 (096) 604-24-28</p></a>
                    <a href="" style="margin-top: 5px"><p>+38 (096) 604-24-28</p></a>
                </div>


            </div>

        </transition>
    </div>
</template>

<script>
    export default {
        data: ()=>
        {
            return {
                elVisible: false,
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>

<style>

    .menu{
        height: 100%;
        width: 100%;
        background: #eeeeee;
        position: fixed;
        right: 0;
        top:0;
        transition: 2s;
        display: flex;
        flex-direction: column;
        padding: 50px 0;
        align-items: center;
    }
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */ {
        opacity: 0;
    }
    .cancel-but:after{
        content: "x" !important;
        font-size: 30px !important;
        margin-top:10px;
        margin-right: 30px;
    }
    .button-section{
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 100%;
        height: 50px;
    }
    .button-section>div{
        width: 170px;
        height: 50px;
        background: #fe5c01;
        border-radius: 10px;
        display:flex;
        flex-direction: row;
        justify-content: center;
        align-items:center;
    }
    .button-section>div:hover{
        background: #ff7428;
        transition:0.2s;
    }
    .button-section>div>p{
        color: white;
        font-size: 15px;
        text-align: center;
    }
    .button-section>div>p:after{
        content: '\276F';
        font-size: 15px;
        margin-left: 10px;
    }

    .kateg{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .kateg>a>div>p{

        font-size: 22px;
    }
    .kateg>a>div>p:hover{
        color:#fe5c01;
        transition: 0.2s;
    }

    .call-bl{
        display: flex;
        flex-direction: column;
    }
    .call-bl>a>p:hover{
        color: #ff7428;
        transition: 0.2s;
    }
</style>
