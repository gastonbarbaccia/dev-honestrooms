@extends('template_two')

@section('main')
    <main>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Spartan:wght@200;400;600;800&display=swap');

            * {
                font-family: 'Lato', sans-serif;


            }

        </style>


        <div class="whole-section sect_home" ng-controller="home_owl" ng-cloak>
            <div class="page-container-responsive new-page-container mini-rel-top row-space-top-1"
                style="margin-bottom: 5%;">
                <!------------------------------ Banner principal ------------------------------------->
                <div class="panel">
                    <div id="discovery-container" class="pad-sm-20 mt-5"
                        style="float:left;width:100%;/* height: 100% !important; background-image: url('http://honestrooms.herokuapp.com/images/home/home_two_new.jpg') ;*/height:200px ;width: 1500px;margin-left: -170px;padding-right: 100px; padding-left: 20%;background-repeat: no-repeat;">
                        <img src="http://honestrooms-qa.herokuapp.com/images/home/banner.jpg" alt="" class="my-5 mt-md-0"
                            style="position: absolute; left: 0; width: 100%; height: 400px; object-fit: cover;margin-top: -200px !important;">
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
                        style="margin-top: 10%;margin-bottom: 7%;">
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
                            <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center;width: 100%;">
                                <div style="width: 40%;float:left">
                                    <img src="http://honestrooms.herokuapp.com/images/home/1.png" style="margin-left: 40%;">
                                </div>
                                <div>
                                    <div style="text-align: left;">
                                        <h4 style="color:#d51b5e ; font-weight: 700;font-size: 140%;">Buscá y elegí con
                                            seguridad</h4>
                                    </div>
                                    <div style="text-align: left;">
                                        <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                            Busca tu habitación perfecta. Sabemos que lo primero antes de tomar una decisión
                                            importante es informarse por eso te acercamos descripciones detalladas tanto de
                                            la propiedad como del barrio.
                                        </p>
                                        <div style="color:#24A4BA;font-weight: 700;font-size: 120%;">
                                            A) Chequeamos las propiedades
                                        </div>
                                        <br>
                                        <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                            Para tu tranquilidad, en lugar de usar materiales de terceros, nos encargamos de
                                            visitar y fotografiar todas las habitaciones. Así a la hora de mudarte no te
                                            encontras con ninguna sorpresa.
                                        </p>
                                        <br>
                                        <div style="color:#24A4BA;font-weight: 700;font-size: 120%;">
                                            B) Vos decidís
                                        </div>
                                        <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                            Todas las habitaciones son privadas, en caso de que quieras compartirla con
                                            alguien podés pero eso es algo que elegís vos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center;width: 100%;">
                                <div style="width: 40%;float:left">
                                    <img src="http://honestrooms.herokuapp.com/images/home/2.png" style="margin-left: 40%;">
                                </div>
                                <div>
                                    <div style="text-align: left;">
                                        <h4 style="color: #d51b5e ; font-weight: 700;font-size: 140%;">Reservá online</h4>
                                    </div>
                                    <div style="text-align: left;">
                                        <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                            Una vez que hagas la consulta de reserva, el propietario tendrá hasta 24hs para
                                            confirmar la solicitud. Podran hablar a través de nuestra plataforma para
                                            despejar
                                            dudas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center;width: 100%;">
                                <div style="width: 40%;float:left">
                                    <img src="http://honestrooms.herokuapp.com/images/home/3.png" style="margin-left: 40%;">
                                </div>
                                <div>
                                    <div style="text-align: left;">
                                        <h4 style="color: #d51b5e; font-weight: 700;font-size: 140%;">Confirmación y pago
                                        </h4>
                                    </div>
                                    <div style="text-align: left;">
                                        <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                            Ni bien el propietario acepte tu reserva podrás realizar el pago a través de
                                            Mercado
                                            Pago o Paypal y te pondremos en contacto con tu anfitrión para coordinar tu
                                            mudanza.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center;width: 100%;">
                                <div style="width: 40%;float:left">
                                    <img src="http://honestrooms.herokuapp.com/images/home/4.png" style="margin-left: 40%;">
                                </div>
                                <div>
                                    <div style="text-align: left;">
                                        <h4 style="color: #d51b5e; font-weight: 700;font-size: 140%;">Todo listo para
                                            mudarte
                                        </h4>
                                    </div>
                                    <div style="text-align: left;">
                                        <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                            ¡Llegó el dia! Ya tenes un nuevo hogar y llegaste al comienzo de tu estadía en
                                            esta
                                            hermosa ciudad. Te recibirá tu anfitrión y realizarán la firma online del
                                            contrato.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div style="text-align:center;margin-top:4%;font-size:20px">
                    <a href="" style="color:#24A4BA;text-decoration: none;">QUIERO SABER MÁS <i class="fa fa-angle-right"
                            style="color:#24A4BA;padding-left:3px;"></i></a>
                </div>


            </div>

            <!----------------------------- Inicio de Footer ------------------------->

            <!--------------------- Fin de Footer ----------------------------->
        </div>
        </div>

    </main>
@stop
