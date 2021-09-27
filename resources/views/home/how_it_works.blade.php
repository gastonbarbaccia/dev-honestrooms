@extends('template_two')

@section('main')
    <main>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Spartan:wght@200;400;600;800&display=swap');

            * {
                font-family: 'Lato', sans-serif;
                font-size: 14px;


            }

            @media (max-width: 760px) {
                .no-mar-sm {
                    margin-top: 13% !important;
                    padding-left: 10%;
                    padding-right: 70%;
                }
               
            }

        </style>

<link href="http://honestrooms-qa.herokuapp.com/css/custom.css" rel="stylesheet">


<div class="sect_home" ng-controller="home_owl" ng-cloak>
    <div class="page-container-responsive new-page-container mini-rel-top row-space-top-1"
        style="margin-bottom: 5%;">
        <!------------------------------ Banner principal ------------------------------------->
        <div class="panel">
            <div id="discovery-container" class="pad-sm-20 mt-5"
                style="float:left;width:100%;/* height: 100% !important; background-image: url('http://honestrooms-qa.herokuapp.com/images/home/home_two_new.jpg') ;*/height:400px ;width: 1500px;margin-left: -170px;padding-right: 100px; padding-left: 20%;background-repeat: no-repeat;">
                <img src="http://honestrooms-qa.herokuapp.com/images/home/banner.jpg" alt="" class="my-5 mt-md-0"
                    style="position: absolute; left: 0; width: 100%; height: 400px; object-fit: cover;margin-top: -2% !important;">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-top:5%">
                    <div class="no-mar-sm" style="margin-top: 94px;">
                        <div
                            class="textHeaderContainerMarginTop_13o8qr2-o_O-textHeaderContainerWidth_peyti4 row-space-7">
                            {{-- <h1 class="textHeader_8yxs9w" style="color:white !important;">
                            <span class="textHeaderTitle_153t78d-o_O-textHeader_rausch_hp6jb4" style="color:white !important;">
                                <!--{{ $site_name }}--> There is a room that awaits you.
                            </span>
                            <!-- react-text: 7341 -->
                            <br>
                            <div style="font-size:30px">
                                {{ trans('messages.home.desc') }}
                            </div>
                            <!-- /react-text -->
                        </h1> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------ Fin Banner principal ------------------------------------->


        {{-- HostExperienceBladeCommentStart
      <div ng-repeat="featured_category in featured_host_experience_categories">
        <div class="lazy-load-div1 lazy-load1 col-md-12 col-lg-12 col-sm-12 col-xs-12  p-0" id="lazy_load_slider" ng-if="featured_category.all_host_experiences_count > 0">
        @include('host_experiences.home_category_slider')
        </div>
      </div>
    HostExperienceBladeCommentEnd --}}
        <div class="discovery-section explore_community exploer_banner page-container-no-padding mt-0 mt-md-5"
            id="discover-recommendations" ng-init="city_count=city_count-1 ;">
            <div class="section-intro text-center row-space-6 row-space-top-8" ng-if="home_city_explore.length!=0"
                style="margin-top: 25px;margin-bottom: 7%;">
                <h2 class="row-space-1">
                    <!-- <strong>{{ trans('messages.home.explore_world') }}</strong>-->
                    ¿Cómo funciona?
                </h2>
                <p class="text-lead" style="text-align: center;padding-left: 20%;padding-right: 20%;">
                    <!--  {{ trans('messages.home.explore_desc') }} -->

                    Omnis nostrum totam temporibus harum optio quia molestias iste itaque.<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.

                </p>
            </div>

            <div class="discovery-tiles">
                <div class="row">
                <div class="container">
                        <div class="row" style="margin-right: 20px; margin-left: 20px">
                            <div class="col-12 mb-4" > <!--1er item-->
                                <div class="row">
                                    <div class="col-md-4 col-lg-3 text-center">
                                        <img src="http://honestrooms.herokuapp.com/images/home/1.png" class="mb-1">
                                    </div>
                                    <div class="col-md-8 col-lg-9">
                                        <h4 style="color:#d51b5e ; font-weight: 700;font-size: 140%;">Buscá y elegí con seguridad</h4>
                                        <p class="content-font" style="font-size:16px">
                                            Busca tu habitación perfecta. Sabemos que lo primero antes de tomar una decisión
                                            importante es informarse por eso te acercamos descripciones detalladas tanto de
                                            la propiedad como del barrio.
                                        </p>
                                            <div style="color:#24A4BA;font-weight: 700;font-size: 120%;">
                                                A) Chequeamos las propiedades
                                            </div>
                                        <p class="content-font" style="font-size:16px">
                                            Para tu tranquilidad, en lugar de usar materiales de terceros, nos encargamos de
                                            visitar y fotografiar todas las habitaciones. Así a la hora de mudarte no te
                                            encontras con ninguna sorpresa.
                                        </p>

                                        <div style="color:#24A4BA;font-weight: 700;font-size: 120%">
                                            B) Vos decidís
                                        </div>

                                        <p class="content-font" style="font-size:16px">
                                            Todas las habitaciones son privadas, en caso de que quieras compartirla con
                                            alguien podés pero eso es algo que elegís vos.
                                        </p>



                                    </div>
                                </div>
                            </div>  

                            <div class="col-12 mb-4" > <!--2do item-->
                                <div class="row">
                                    <div class="col-md-4 col-lg-3 text-center">
                                        <img src="http://honestrooms.herokuapp.com/images/home/2.png" class="mb-1">
                                    </div>
                                    <div class="col-md-8 col-lg-9">
                                    
                                        <h4 style="color: #d51b5e ; font-weight: 700;font-size: 140%;">Reservá online tu habitación</h4>
                                    
                                    
                                        <p class="content-font" style="font-size:16px">
                                            Una vez que hagas la consulta de reserva el propietario tendra hasta 24 hs para
                                            confirmar la solicitud. Es común que ambos tengan consultas para hacerse por
                                            esto mismo les ofrecemos la posibilidad de hablar a través de nuestra
                                            plataforma.
                                        </p>

                                    
                                    </div>
                                </div>
                            </div>  

                            <div class="col-12 mb-4" > <!--3ER item-->
                                <div class="row">
                                    <div class="col-md-4 col-lg-3 text-center"> <!--Espacio de img-->
                                        <img src="http://honestrooms.herokuapp.com/images/home/3.png" class="mb-1">
                                    </div>

                                    <div class="col-md-8 col-lg-9"> <!--Espacio de texto-->

                                    
                                        <h4 style="color: #d51b5e; font-weight: 700;font-size: 140%;">Confirmación y métodos de pago</h4>
                                   
                                    
                                        <p class="content-font" style="font-size:16px">
                                            Ni bien el propietario acepte tu reserva podrás realizar el pago de la misma a
                                            través de Mercado Pago o PayPal y te pondremos en contacto con tu anfitrión para
                                            que arreglen el horario de tu mudanza.
                                        </p>

                                        <div style="color:#24A4BA;font-weight: 700;font-size: 120%;">
                                            A) ¿Qué estas pagando?
                                        </div>
                                        
                                        <p class="content-font" style="font-size:16px">
                                            El pago inicial incluye una comisión por única vez (Concierge Fee) por el
                                            seguimiento personalizado que te brindamos y un proporcional por el primer mes
                                            de alquiler.
                                        </p>
                                    
                                    
                                    </div>
                                </div>
                            </div>  

                            <div class="col-12 " > <!--4ER item-->
                                <div class="row">
                                    <div class="col-md-4 col-lg-3 text-center"> <!--Espacio de img-->
                                        <img src="http://honestrooms.herokuapp.com/images/home/4.png" class="mb-1">
                                    </div>
                                    
                                    <div class="col-md-8 col-lg-9"> <!--Espacio de texto-->
                                    
                                    
                                        <h4 style="color: #d51b5e; font-weight: 700;font-size: 140%;">Todo listo para mudarte</h4>
                                    
                                    
                                        <p class="content-font" style="font-size:16px">
                                            ¡Llegó el día! Ya tenés un nuevo hogar y llegaste al comienzo de tu estadia en
                                            esta hermosa ciudad. Te recibirá tu anfitriona y realizarán la firma online del
                                            contrato. El pago de lo que resta del mes (porque ya pagaste un proporcional con
                                            la reserva) y del depósito sera con ella en efectivo.
                                        </p>

                                        <div style="color:#24A4BA;font-weight: 700;font-size: 120%">
                                            A) Pago del mes
                                        </div>

                                        <p class="content-font" style="font-size:16px">
                                            El pago del primer mes será en efectivo y correspondera a la diferencia del
                                            proporcional que ya abonaste en la reserva. luego realizarás los siguientes
                                            pagos mensuales al cumplirse el mes de estadia. Esto quiere decir que no es
                                            necesario pagar en los inicios del mes, si no que la fecha se estipula según el
                                            dia de ingreso. Si entrás un 20 pagás el 20 de cada mes, si entrás un 1ro, pagás
                                            el 1ro y así.
                                        </p>

                                        <div style="color:#24A4BA;font-weight: 700;font-size: 120%">
                                            B) Depósito
                                        </div>

                                        <p class="content-font" style="font-size:16px">
                                            Se paga el dia que te mudás y en efectivo. Cuando termines la estadia que figura
                                            en el contrato se devuelve simpre que hayan cumplido las condiciones de contrato
                                            anteriormente firmadas.
                                            <br>
                                            Tu anfitriona será el punto de contacto a partir de este momento. Por supuesto,
                                            estaremos ahi para ayudarlas en caso de que lo necesiten.
                                        </p>

                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:4%;font-size:20px">
            <a class="btn btn-outline-primary w-50"
                href="s?min_price=94&max_price=7013&room_type=&current_refinement=Homes&property_type=&amenities=&services_offer=&checkin=&checkout=&guests=1&private_bathrooms=&shared_bathrooms=&page=1&instant_book=undefined&php_date_format=d/m/Y"
                style="border-color: #24A4BA;color: #24A4BA;border-radius: 0.5em;text-decoration: none">VER
                PROPIEDADES</a>
        </div>


    </div>

    <!----------------------------- Inicio de Footer ------------------------->

    <!--------------------- Fin de Footer ----------------------------->
</div>


</main>
@stop
