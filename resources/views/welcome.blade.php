<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IMPRENTA RIVADAVIA</title>
        <link rel="stylesheet" href="{{asset('css/homeinit.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        <header class="bg_animate">
            <div class="header_nav">
                <div class="contenedor">
                    <img class="imagen-navegador" src="{{asset('image/logo.png')}}" alt="">
                    <nav class="navegador-principal">
                            @if (Route::has('login'))
                            <div class="navegador-items">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class=""><i class="fas fa-tachometer-alt"></i>PAGINA PRINCIPAL</a>
                                @else
                                    <a href="{{ route('login') }}" class=""> <i class="fas fa-user"></i> INICIAR SESION</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class=""><i class="fas fa-users"></i>REGISTRATE</a>
                                    @endif
                                @endauth
                            </div>
                            @endif
                    </nav>
                </div>
            </div>


            <section class="banner contenedor">
                <section class="banner_title">
                    <h2 class="letras-header animate__animated animate__zoomIn">
                        <span class="lh">RI</span>
                        <span class="lh">VA</span>
                        <span class="lh">DA</span>
                        <span class="lh">VIA</span>
                    </h2>
                    <h3 class="letras-header-sc animate__animated animate__slideInLeft">Somos tu mejor opcion</h3>
                    <a href="https://wa.me/59168392417?text=Hola,%20me%20interesa%20contactarme%20con%20su%20imprenta%20vi%20su%20anuncio%20en%20internet" class="llamanos animate__animated animate__slideInUp"><i class="fas fa-phone"></i>Llamanos ya!</a>
                </section>
                <div class="banner_img">
                    <img class="animate__animated animate__zoomInDown" src="https://www.precisecontinental.com/wp-content/uploads/2018/06/1200px-Missmatch_Registration.png" alt="">
                </div>
            </section>
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
        </header>
        <section class="mision-vision">
            <article class="card" data-aos="fade-right">
                <div class="card-img">
                    <img src="https://www.grupoioe.es/wp-content/uploads/2019/01/110.Definir-la-mision-y-vision-de-una-empresa.jpg" alt="">
                </div>
                <div class="card-text">
                    <h3>MISION</h3>
                    <p>
                        La Misi??n de Imprenta Rivadavia es proporcionar productos relacionados con las artes gr??ficas,
                         siendo sus prioridades ofrecer un servicio de la m??xima calidad, respetando el medio ambiente
                         y cuidando los intereses de sus empleados tanto como los de la propia empresa.
                    </p>
                </div>
            </article>
            <article class="card" data-aos="fade-up">
                <div class="card-img">
                    <img src="https://fundhemi.org/wp-content/uploads/2019/03/vision.jpg" alt="">
                </div>
                <div class="card-text">
                    <h3>VISION</h3>
                    <p>
                        La Visi??n de Imprenta Rivadavia es llegar a ser l??der en el sector, ampliando su mercado hacia 
                        otras provincias andaluzas; distingui??ndose por el uso de tecnolog??a m??s avanzada y el respeto
                        al medio ambiente.
                    </p>
                </div>
            </article>
            <article class="card" data-aos="fade-left">
                <div class="card-img">
                    <img src="https://coworkingfy.com/wp-content/uploads/2020/03/M%C3%A9todos-para-definir-objetivos-1024x612.jpg" alt="">
                </div>
                <div class="card-text">
                    <h3>OBJETIVOS</h3>
                    <p>
                        Como objetivos de Imprenta Rivadavia contemplan, reducir el tiempo del proceso de impresi??n mediante 
                        el uso de nuevas tecnolog??as as?? como reducir el uso de productos qu??micos aplicados en el mismo, y 
                        alcanzar de nuevo un incremento del 20% een la cifra de ventas para el pr??ximo ejercicio.
                    </p>
                </div>
            </article>
        </section>
        <section class="servicios">
            <h1 class="texto-priv" data-aos="zoom-in">VENTAJAS DE TRABAJAR CON IMPRENTA OFFSET RIVADAVIA</h1>
            <div class="medio-servicios">
                <div class="articulos-izquierda">
                    <article class="card-serv" data-aos="fade-right">
                        <h1>Dise??o de tarjetas</h1>
                        <p>aunque es cierto que su uso se ha limitado por las circunstancias sanitarias que han impedido o han limitado las reuniones presenciales, las tarjetas de visita siempre tendr??n su lugar. Las reuniones y los actos de networking volver??n con m??s fuerza que nunca y entonces las tarjetas de visita ser??n imprescindibles. Una imprenta para empresas debe tener la capacidad de dise??ar e imprimir unas tarjetas de visita originales y de calidad. Pero, ??te imaginas unir ambos mundos? En Publifes, incorporamos un c??digo QR a las tarjetas de visita (siempre que la empresa quiera). As??, cualquier cliente con tu tarjeta de visita, puede visitar tu web y conocer tus servicios r??pidamente desde cualquier dispositivo.</p>
                    </article>
                    <article class="card-serv" data-aos="fade-right">
                        <h1>Dise??o e impresi??n de folletos, d??pticos o tr??pticos</h1>
                        <p>en los que se puede plasmar una informaci??n de la empresa, una oferta o un lanzamiento de un nuevo producto. Elegir el formato m??s ??ptimo y realizar un dise??o que llame la atenci??n en ocasiones es responsabilidad de la imprenta y debe estar preparada para ello y, por supuesto, para su impresi??n.</p>
                    </article>
                    <article class="card-serv" data-aos="fade-right">
                        <h1>Carpetas y sobres corporativos</h1>
                        <p>son uno de los elementos de papeler??a m??s utilizados en las empresas. Las carpetas son muy ??tiles en reuniones, para dejar presupuestos de forma presencial a posibles clientes o para ordenar documentaci??n dentro de la propia oficina. Mientras, los sobres son indispensables para enviar o entregar documentaci??n a clientes, proveedores, empleados o Administraci??n P??blica.</p>
                    </article>
                    <article class="card-serv" data-aos="fade-right">
                        <h1>Asesoramiento</h1>
                        <p>la mayor??a de imprentas que trabajan con empresas tienen la experiencia suficiente para recomendar qu?? tipo de formatos cumplen mejor con las necesidades de la marca en cada momento. Y si a??nan esta experiencia con conocimientos en marketing y dise??o gr??fico mucho mejor.</p>
                    </article>
                </div>
                <div class="img-derecha" data-aos="fade-left"> 
                    <div class="img-dd">

                    </div>
                </div>
            </div>
            <h1 class="texto-priv" >Y MUCHAS COSAS MAS, REGISTRATE GRATIS!!!</h1>
        </section>
        <footer class="pie-pagina">
                <h3>Contacto</h3>
                <p>
                    <i class="fas fa-map-marker-alt"></i>
                    Calle Fortunato Gumiel N??34
                </p>
                <p>
                    <i class="fas fa-phone"></i>
                    +591 68392417
                </p>
                <p>
                    <i class="fas fa-envelope"></i>
                    martinbecerra123@gmail.com
                </p>
        </footer>
    </body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/102099bbc5.js" crossorigin="anonymous"></script>
    <script defer>
        AOS.init();
    </script>
</html>
