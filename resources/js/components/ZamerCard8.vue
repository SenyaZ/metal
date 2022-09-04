<template>
    <div class="container" style="z-index: 20;">
        <div class="button" onclick="show()">
            <p>Перейти</p>
        </div>

    </div>
</template>

<script>
export default {
    data: ()=>
    {
        return {
            popup: false,
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}

</script>

<style>
.caption-popup{
    text-transform: uppercase;
    font-size: 40px;
}
.number-input:before{
    content: "+38";
    color: black;
}
.send-but{
    background: #fe5c01;
    border-radius: 10px;
    color: white;
    margin-top:20px;
    padding: 15px 10px;
    border:none;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items:center;
    height: auto !important;
}
.window>form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 80%;
}
.window>form>input {
    width: 100%;
    height: 30px;
    font-size:19px;
}
.caption-popup{
    color:black !important;
    margin-bottom: 15px;
}
.button-zam{
    display:flex;
    flex-direction:row;
    justify-content:center;
    align-items:center;
    width: 200px;
    height: 50px;
    border-radius:10px;
    background:#fe5c01;
}
.button-zam>p{
    color: white;
    font-size: 14px;
}
.button-zam>p:after{
    content:'\276F';
    margin-left: 10px;
}
.button-zam:hover{
    transition: 0.5s;
    background: #ff7a2f;
}
.popup{
    height: 100%;
    width: 100%;
    background: rgba(0, 0,0, 0.5);
    position: fixed;
    top: 0px;
    left: 0px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

}
#canc-x{
    color: black;
}
#canc-x:hover{
    color: #fe5c01;
    transition:0.2s;
}
@media only screen and (min-width: 1023px) {

    .window>form{
        width: 50%;
    }
}
.window{
    padding: 0 20px;
    padding-top:20px;
    width: 80%;
    height: 80%;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.window>p{
    text-align: center;
}
.cancel{
    flex-direction: row;
    align-self: flex-end !important;
}

.cancel>p:after{
    content: 'x';
    font-size: 40px;
}
.cancel>p:hover{
    color: #fe5c01;
    transition:0.2s;
}

</style>
