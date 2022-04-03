@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @role('cliente')
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('image/one.jpg')}}" class="d-block w-100" >
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/two.jpg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/three.jpg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('image/two.jpg')}}" class="d-block w-100" >
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/three.jpg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/one.jpg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('image/three.jpg')}}" class="d-block w-100" >
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/one.jpg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('image/two.jpg')}}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>
            </div>
        </div>

    @elserole('empleado')
        <div class="container-fluid d-flex">
            <h1 class="h3"> {{__('Bienvenido ')}} {{ Auth::user()->name }}</h1>
        </div>

    @elserole('administrador')
    
        
    @endrole

@stop

@section('content')




    <div class="burbujas">
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
    </div>
@stop
@section('css')
<style>
    /*BREAKPOINTS*/
    @media only screen and (min-width:0px) and (max-width: 768px) {
        /*burbujas*/
        .burbujas{
            position: fixed;
            top: -100px;
            width: 100%;
            height: 100%;
            z-index: 5;
        }
        .burbuja{
            border-radius: 50%;
            background: white;
            opacity: 0.3;
            position: absolute;
            bottom: -150;
            animation: burbujas 3s linear infinite;
        }
        .burbuja:nth-child(1){
            width: 80px;
            height: 80px;
            left: 5%;
            animation-duration: 3s;
            animation-delay: 3s;
        } 
        .burbuja:nth-child(2){
            width: 100px;
            height: 100px;
            left: 35%;
            animation-duration: 3s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(3){
            width: 20px;
            height: 20px;
            left: 15%;
            animation-duration: 1.5s;
            animation-delay: 7s;
        }
        .burbuja:nth-child(4){
            width: 50px;
            height: 50px;
            left: 90%;
            animation-duration: 6s;
            animation-delay: 3s;
        }
        .burbuja:nth-child(5){
            width: 70px;
            height: 70px;
            left: 65%;
            animation-duration: 3s;
            animation-delay: 1s;
        }
        .burbuja:nth-child(6){
            width: 20px;
            height: 20px;
            left: 50%;
            animation-duration: 4s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(7){
            width: 20px;
            height: 20px;
            left: 50%;
            animation-duration: 4s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(8){
            width: 100px;
            height: 100px;
            left: 52%;
            animation-duration: 5s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(9){
            width: 65px;
            height: 65px;
            left: 51%;
            animation-duration: 3s;
            animation-delay: 2s;
        }
        .burbuja:nth-child(10){
            width: 40px;
            height: 40px;
            left: 35%;
            animation-duration: 3s;
            animation-delay: 4s;
        }
       
        @keyframes burbujas{
            0%{
                bottom: 0;
                opacity: 0;
            }
            30%{
                transform: translateX(30px);
            }
            50%{
                opacity: 0.4;
            }
            100%{
                bottom: 100vh;
                opacity: 0;
            }
        }
        @keyframes movimiento{
            0%{
                transform: translateY(0px);
            }
            50%{
                transform: translateY(30px);
            }
            100%{
                transform: translateY(0px);
            }
        }
    }
    @media only screen and (min-width: 768px) and (max-width: 992px){
    
        /*burbujas*/
        .burbujas{
            position: fixed;
            top: -100px;
            width: 100%;
            height: 100%;
            z-index: 5;
        }
        .burbuja{
            border-radius: 50%;
            background: white;
            opacity: 0.3;
            position: absolute;
            bottom: -150;
            animation: burbujas 3s linear infinite;
        }
        .burbuja:nth-child(1){
            width: 80px;
            height: 80px;
            left: 5%;
            animation-duration: 3s;
            animation-delay: 3s;
        } 
        .burbuja:nth-child(2){
            width: 100px;
            height: 100px;
            left: 35%;
            animation-duration: 3s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(3){
            width: 20px;
            height: 20px;
            left: 15%;
            animation-duration: 1.5s;
            animation-delay: 7s;
        }
        .burbuja:nth-child(4){
            width: 50px;
            height: 50px;
            left: 90%;
            animation-duration: 6s;
            animation-delay: 3s;
        }
        .burbuja:nth-child(5){
            width: 70px;
            height: 70px;
            left: 65%;
            animation-duration: 3s;
            animation-delay: 1s;
        }
        .burbuja:nth-child(6){
            width: 20px;
            height: 20px;
            left: 50%;
            animation-duration: 4s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(7){
            width: 20px;
            height: 20px;
            left: 50%;
            animation-duration: 4s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(8){
            width: 100px;
            height: 100px;
            left: 52%;
            animation-duration: 5s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(9){
            width: 65px;
            height: 65px;
            left: 51%;
            animation-duration: 3s;
            animation-delay: 2s;
        }
        .burbuja:nth-child(10){
            width: 40px;
            height: 40px;
            left: 35%;
            animation-duration: 3s;
            animation-delay: 4s;
        }
        @keyframes burbujas{
            0%{
                bottom: 0;
                opacity: 0;
            }
            30%{
                transform: translateX(30px);
            }
            50%{
                opacity: 0.4;
            }
            100%{
                bottom: 100vh;
                opacity: 0;
            }
        }
        @keyframes movimiento{
            0%{
                transform: translateY(0px);
            }
            50%{
                transform: translateY(30px);
            }
            100%{
                transform: translateY(0px);
            }
        }
    }
    
    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) and (max-width: 1200px) {
        /*burbujas*/
        .burbujas{
            position: fixed;
            top: -100px;
            width: 100%;
            height: 100%;
            z-index: 5;
        }
        .burbuja{
            border-radius: 50%;
            background: white;
            opacity: 0.3;
            position: absolute;
            bottom: -150;
            animation: burbujas 3s linear infinite;
        }
        .burbuja:nth-child(1){
            width: 80px;
            height: 80px;
            left: 5%;
            animation-duration: 3s;
            animation-delay: 3s;
        } 
        .burbuja:nth-child(2){
            width: 100px;
            height: 100px;
            left: 35%;
            animation-duration: 3s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(3){
            width: 20px;
            height: 20px;
            left: 15%;
            animation-duration: 1.5s;
            animation-delay: 7s;
        }
        .burbuja:nth-child(4){
            width: 50px;
            height: 50px;
            left: 90%;
            animation-duration: 6s;
            animation-delay: 3s;
        }
        .burbuja:nth-child(5){
            width: 70px;
            height: 70px;
            left: 65%;
            animation-duration: 3s;
            animation-delay: 1s;
        }
        .burbuja:nth-child(6){
            width: 20px;
            height: 20px;
            left: 50%;
            animation-duration: 4s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(7){
            width: 20px;
            height: 20px;
            left: 50%;
            animation-duration: 4s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(8){
            width: 100px;
            height: 100px;
            left: 52%;
            animation-duration: 5s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(9){
            width: 65px;
            height: 65px;
            left: 51%;
            animation-duration: 3s;
            animation-delay: 2s;
        }
        .burbuja:nth-child(10){
            width: 40px;
            height: 40px;
            left: 35%;
            animation-duration: 3s;
            animation-delay: 4s;
        }
        @keyframes burbujas{
            0%{
                bottom: 0;
                opacity: 0;
            }
            30%{
                transform: translateX(30px);
            }
            50%{
                opacity: 0.4;
            }
            100%{
                bottom: 100vh;
                opacity: 0;
            }
        }
        @keyframes movimiento{
            0%{
                transform: translateY(0px);
            }
            50%{
                transform: translateY(30px);
            }
            100%{
                transform: translateY(0px);
            }
        }
    }
    
    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
    
        /*burbujas*/
        .burbujas{
            position: fixed;
            top: -100px;
            width: 100%;
            height: 100%;
            z-index: 5;
        }
        .burbuja{
            border-radius: 50%;
            background: white;
            opacity: 0.3;
            position: absolute;
            bottom: -150;
            animation: burbujas 3s linear infinite;
        }
        .burbuja:nth-child(1){
            width: 80px;
            height: 80px;
            left: 5%;
            animation-duration: 3s;
            animation-delay: 3s;
        } 
        .burbuja:nth-child(2){
            width: 100px;
            height: 100px;
            left: 35%;
            animation-duration: 3s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(3){
            width: 20px;
            height: 20px;
            left: 15%;
            animation-duration: 1.5s;
            animation-delay: 7s;
        }
        .burbuja:nth-child(4){
            width: 50px;
            height: 50px;
            left: 90%;
            animation-duration: 6s;
            animation-delay: 3s;
        }
        .burbuja:nth-child(5){
            width: 70px;
            height: 70px;
            left: 65%;
            animation-duration: 3s;
            animation-delay: 1s;
        }
        .burbuja:nth-child(6){
            width: 20px;
            height: 20px;
            left: 50%;
            animation-duration: 4s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(7){
            width: 20px;
            height: 20px;
            left: 50%;
            animation-duration: 4s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(8){
            width: 100px;
            height: 100px;
            left: 52%;
            animation-duration: 5s;
            animation-delay: 5s;
        }
        .burbuja:nth-child(9){
            width: 65px;
            height: 65px;
            left: 51%;
            animation-duration: 3s;
            animation-delay: 2s;
        }
        .burbuja:nth-child(10){
            width: 40px;
            height: 40px;
            left: 35%;
            animation-duration: 3s;
            animation-delay: 4s;
        }
    
        @keyframes burbujas{
            0%{
                bottom: 0;
                opacity: 0;
            }
            30%{
                transform: translateX(30px);
            }
            50%{
                opacity: 0.4;
            }
            100%{
                bottom: 100vh;
                opacity: 0;
            }
        }
        @keyframes movimiento{
            0%{
                transform: translateY(0px);
            }
            50%{
                transform: translateY(30px);
            }
            100%{
                transform: translateY(0px);
            }
        }
    }
    </style>
@stop

@section('js')
@stop