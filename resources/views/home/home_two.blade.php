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
        <div class="page-container-responsive new-page-container mini-rel-top row-space-top-1">
            <!------------------------------ Banner principal ------------------------------------->
            <div class="panel">
                <div id="discovery-container" class="pad-sm-20 mt-5" style="float:left;width:100%;/* height: 100% !important; background-image: url('http://honestrooms-qa.herokuapp.com/images/home/home_two_new.jpg') ;*/ height: 600px;width: 1500px;margin-left: -170px;padding-right: 100px; padding-left: 20%;background-repeat: no-repeat;">
                <img src="http://honestrooms-qa.herokuapp.com/images/home/home_two_new.jpg" alt="" class="my-5 mt-md-0" style="position: absolute; left: 0; width: 100%; height: 600px; object-fit: cover;object-position: top;">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-top:5%">
                        <div class="no-mar-sm" style="margin-top: 94px;">
                            <div class="textHeaderContainerMarginTop_13o8qr2-o_O-textHeaderContainerWidth_peyti4 row-space-7">
                                <h1 class="textHeader_8yxs9w" style="color:white !important;">
                                    <span class="textHeaderTitle_153t78d-o_O-textHeader_rausch_hp6jb4" style="color:white !important;">
                                        <!--{{ $site_name }}--> There is a room that awaits you.
                                    </span>
                                    <!-- react-text: 7341 -->
                                    <br>
                                    <div style="font-size:30px">
                                        {{ trans('messages.home.desc') }}
                                    </div>
                                    <!-- /react-text -->
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 hide-sm">
                        <div class="container_e4p5a8">
                            <!-- react-empty: 18439 -->
                            <form action="{{ url('s') }}" class="simple-search" method="get" id="searchbar-form" name="simple-search">
                                <div class="container_1tvwao0" style="width: 80% !important;">
                                    <div class="container_mv0xzc" style="width: 100%;background-color:white">
                                        <div class="label_1om3jpt">{{ trans('messages.header.where') }}</div>
                                        <div class="largeGeocomplete_1g20x4k">
                                            <div class="container_gor68n">
                                                <div>
                                                    <div class="container_e296pg">
                                                        <div class="container_36rlri-o_O-block_r99te6">
                                                            <label class="label_hidden_1m8bb6v">{{ trans('messages.header.where') }}</label>
                                                            <div class="container_ssgg6h-o_O-container_noMargins_18e9acw-o_O-borderless_mflkgb-o_O-block_r99te6">
                                                                <div class="inputContainer_178faes">
                                                                    <input autocomplete="off" class="input_70aky9-o_O-input_book_f17nnd-o_O-input_ellipsis_1bgueul-o_O-input_defaultPlaceholder_jsyynz" id="header-search-form" name="location" placeholder="{{ trans('messages.header.anywhere') }}" value="" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="focusUnderline_7131v4">

                                        </div>
                                    </div>

                                    <div class="container_mv0xzc" style="width: 150px;">

                                        <div class="save_search">



                                            <div class="container_mv0xzc save_but_block" style="background-color:white;">
                                                <!-- react-text: 18478 -->
                                                <!-- /react-text --><button type="submit" class="btn btn-primary searchButton_n8fchz" style="background-color:#ff5a5f !important">
                                                    <span>{{ trans('messages.home.search') }}</span>
                                                </button>
                                                <div class="focusUnderline_7131v4"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="focusUnderline_7131v4">

                                    </div>
                                </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!------------------------------ Fin Banner principal ------------------------------------->

            <!------------------------------- mobile view header -------------------------------------->
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 show-sm hide-md viedat mt-5 mt-md-0">
                <div class="searchBarWrapper_1aq8p3r">
                    <div class="container_puzkdo">
                        <div>
                            <div data-id="SearchBarSmall" class="container_1tvwao0">
                                <div class="container_mv0xzc" style="width: 100%;">

                                    <button type="button" class="button_1b5aaxl button-sm-search">
                                        <span class="icon_12hl23n">
                                            <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 18px; width: 18px;">
                                                <path fill-rule="nonzero"></path>
                                            </svg>
                                        </span>
                                        <span class="copy_14aozyc">{{ trans('messages.header.anywhere') }} ·
                                            {{ trans('messages.header.anytime') }} · 1
                                            {{ trans('messages.header.guest') }}</span></button>
                                    <div class="focusUnderline_7131v4"></div>
                                </div>
                            </div><!-- react-empty: 29505 -->
                        </div>
                    </div>
                </div>


                <div class="panel-drop-down hide-drop-down" style="z-index: 2000;">
                    <div class="panelContent_1jzf86v">
                        <div class="container_gvf938-o_O-container_dropdown_bed46g">
                            <div class="left_egy8rd">
                                <button aria-haspopup="false" aria-expanded="false" class="container_1rp5252" type="button" style="padding: 20px; margin: -20px;">
                                    <svg viewBox="0 0 18 18" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(72, 72, 72); height: 16px; width: 16px;">
                                        <path fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="right_8ydhe">
                                <div class="text_5mbkop-o_O-size_small_1gg2mc">
                                    <button aria-disabled="false" class="component_9w5i1l-o_O-component_button_r8o91c" type="button"><span>Clear all</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="body_1sn4o6s-o_O-body_dropdown_7xdft6 arrow-button">
                            <button type="button" class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                                <span class="icon_12hl23n">
                                    <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 1em; width: 1em;">
                                        <g fill-rule="evenodd">
                                            <path></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="copy_14aozyc">
                                    <span>{{ trans('messages.header.anywhere') }}</span></span>
                            </button>
                            <div style="margin-top: 16px; margin-bottom: 16px;">
                                <button type="button" class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                                    <span class="icon_12hl23n">
                                        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 1em; width: 1em;">
                                            <path></path>
                                        </svg>
                                    </span>
                                    <span class="copy_14aozyc">{{ trans('messages.header.anytime') }}</span>
                                </button>
                            </div>
                            <button type="button" class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                                <span class="icon_12hl23n">
                                    <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 1em; width: 1em;">
                                        <path></path>
                                    </svg>
                                </span>
                                <span class="copy_14aozyc"><span><span>1
                                            {{ trans('messages.header.guest') }}</span></span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------- Fin mobile view header -------------------------------------->


            {{--HostExperienceBladeCommentStart
              <div ng-repeat="featured_category in featured_host_experience_categories">
                <div class="lazy-load-div1 lazy-load1 col-md-12 col-lg-12 col-sm-12 col-xs-12  p-0" id="lazy_load_slider" ng-if="featured_category.all_host_experiences_count > 0">
                @include('host_experiences.home_category_slider')
                </div>
              </div>
            HostExperienceBladeCommentEnd--}}
            <div class="discovery-section explore_community exploer_banner page-container-no-padding mt-0 mt-md-5" id="discover-recommendations" ng-init="city_count=city_count-1 ;">
                <div class="section-intro text-center row-space-6 row-space-top-8" ng-if="home_city_explore.length!=0">
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
                        <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center">
                            <div>
                                <img src="http://honestrooms.herokuapp.com/images/home/1.png">
                            </div>
                            <div>
                                <h4 style="color: #24A4BA ; font-weight: 700;font-size: 140%;">Buscá y elegí con seguridad</h4>
                            </div>
                            <div style="padding-left:5%;padding-right:5%">
                                <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                    Sabemos que lo primero antes de tomar una decision es informarse, por eso te acercamos descripciones detalladas tanto de la propiedad como del barrio.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center">
                            <div>
                                <img src="http://honestrooms.herokuapp.com/images/home/2.png">
                            </div>
                            <div>
                                <h4 style="color: #24A4BA ; font-weight: 700;font-size: 140%;">Reservá online</h4>
                            </div>
                            <div style="padding-left:5%;padding-right:5%">
                                <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                    Una vez que hagas la consulta de reserva, el propietario tendrá hasta 24hs para confirmar la solicitud. Podran hablar a través de nuestra plataforma para despejar dudas.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center">
                            <div>
                                <img src="http://honestrooms.herokuapp.com/images/home/3.png">
                            </div>
                            <div>
                                <h4 style="color: #24A4BA; font-weight: 700;font-size: 140%;">Confirmación y pago</h4>
                            </div>
                            <div style="padding-left:5%;padding-right:5%">
                                <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                    Ni bien el propietario acepte tu reserva podrás realizar el pago a través de Mercado Pago o Paypal y te pondremos en contacto con tu anfitrión para coordinar tu mudanza.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center">
                            <div>
                                <img src="http://honestrooms.herokuapp.com/images/home/4.png">
                            </div>
                            <div>
                                <h4 style="color: #24A4BA; font-weight: 700;font-size: 140%;">Todo listo para mudarte</h4>
                            </div>
                            <div style="padding-left:5%;padding-right:5%">
                                <p class="content-font" style="margin-left: 5%;margin-right: 5%;font-size:16px">
                                    ¡Llegó el dia! Ya tenes un nuevo hogar y llegaste al comienzo de tu estadía en esta hermosa ciudad. Te recibirá tu anfitrión y realizarán la firma online del contrato.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div style="text-align:center;margin-top:4%;font-size:20px">
                <a href="how_it_works" style="color:#24A4BA;text-decoration: none;">QUIERO SABER MÁS <i class="fa fa-angle-right" style="color:#24A4BA;padding-left:3px;"></i></a>
            </div>

            <!------------------------------ Muestra las habitaciones  ---------------------->
            <div class="lazy-load-div1 lazy-load1 col-md-12 col-lg-12 col-sm-12 col-xs-12  p-0" id="lazy_load_slider">
                {{--HostExperienceBladeCommentStart
                    @include('host_experiences.home_slider', ['title_text'=> trans('experiences.home.experiences'), 'see_all_link' => url('s?current_refinement=Experiences'),'category_id'=> 'all_exp' ])
                    HostExperienceBladeCommentEnd--}}
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nwt_slid p-0" ng-if="most_viewed.length > 0">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl" style="padding:0px;     margin: 45px 0px 15px;">
                        <h3 class="rowHeader pull-left" style="margin-right: 10px;">
                            <!-- react-text: 38121--> {{ trans('messages.header.most_viewed') }}
                            <!--/react-text-->
                        </h3>
                        <div>
                            <hr>
                        </div>

                    </div>



                    <div class="home-bx-slider col-md-12 col-lg-12 col-sm-12 col-xs-12 " style="position:relative;padding:0px;">
                        <div class="owl-carousel cate3">

                            <div class="cateimg" ng-repeat="view_count in most_viewed">
                                <a href=" @{{ url+view_count.id }}">
                                    <img ng-src="@{{ view_count.photo_name}}" /></a>
                                <div class="panel-body" style="padding: 5px 0;height:80px;">
                                    <div class="media">
                                        <!--<div class="category_city hm_cate">
                                                <span class="pull-left">@{{ view_count.room_type_name }}</span>
                                                <span class="pull-left dot-cont">·</span>
                                                <span class="pull-left">@{{ view_count.beds }}
                                                    @{{ view_count.bed_lang }}</span>
                                            </div>-->
                                        <a href=" @{{ url+view_count.id }}" target="listing_10001" class="text-normal" style="text-decoration:none !important;">

                                            <h3 title="@{{view_count.name}}" itemprop="name" class="h5 listing-name text-truncate row-space-top-1 ng-binding" style="width:95%;">
                                                @{{view_count.name}}
                                            </h3>
                                        </a>
                                        <div class="exp_price">
                                            <span ng-bind-html=" view_count.rooms_price.currency.symbol"></span>
                                            @{{ view_count.rooms_price.month }}
                                            {{ trans("messages.rooms.per_month") }}

                                            <span ng-if="view_count.booking_type == 'instant_book'"> <i class="icon icon-instant-book icon-beach"></i></span>

                                        </div>
                                        <div itemprop="description" class="rt_set pull-left text-muted listing-location text-truncate"><a href="" class="text-normal link-reset pull-left">
                                                <span class="pull-left">

                                                    <span class="pull-left ng-binding" ng-bind-html=" view_count.overall_star_rating">

                                                    </span>
                                                </span>
                                                <a href=" @{{ url+view_count.id }}">
                                                    <span class="pull-left rw_view" style="padding-left: 5px; ">
                                                        <span ng-if="view_count.reviews_count" class="pull-left r-count ng-binding" style="font-size:15px;color:#555;">
                                                            @{{ view_count.reviews_count }}</span>
                                                        <span ng-if="view_count.overall_star_rating" class="pull-left r-label ng-binding" style="font-size:12px;color:#555;">
                                                            @{{ view_count.reviews_count_lang }}
                                                        </span>
                                                    </span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="seeMoreContainer_11b8zgn">

                    <a href="{{ url('s') }}" ng-if="most_viewed.length > 3">
                        <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0" style="padding-left:0px !important">
                            <span class="text_13lu1ne"><span>{{ trans('messages.header.seeall') }}</span>
                            </span>
                            <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
                                <path fill-rule="evenodd" d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
                                </path>
                            </svg>
                        </button>
                    </a>

                </div>

            </div>
            <!-------------------------------- Fin de muestra de habitaciones ------------------------->
            <!------------------------------ Nuestro diferencial INICIO ----------------------------->
            <link href="https://honestrooms-qa.herokuapp.com/css/custom.css" rel="stylesheet">

            <div class="discovery-section explore_community exploer_banner page-container-no-padding" id="discover-recommendations" ng-init="city_count=city_count-1 ;">
                <div class="section-intro text-center row-space-6 row-space-top-8" ng-if="home_city_explore.length!=0">
                    <p class="text-lead">
                        PORQUÉ ELEGIRNOS
                    </p>
                    <h2 class="row-space-1">
                        Nuestro diferencial
                    </h2>
                </div>

                <style>
                    #eye:hover {
                        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
                    }

                    #check:hover {
                        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
                    }

                    #heart:hover {
                        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
                    }

                    #people:hover {
                        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
                    }
                </style>
                <div class="row d-flex justify-content-around">

                    <div class="discovery-tiles col-sm-12 col-md-6 px-3 px-md-2" id="eye">

                        <div class=" mb-5 bg-white rounded p-3">
                            <div>
                                <img src="http://honestrooms.herokuapp.com/images/home/eye.PNG">
                            </div>
                            <div style="margin-top:7%;font-weight: bold">
                                <h4>Lo que ves es lo que recibís</h4>
                            </div>
                            <div>
                                <p class="content-font">
                                    Podés confiar en las fotos que te mostramos porque fuimos a tomarlas nosotros. Ademas todas las casas ofrecidas están chequeadas personalmente por nuestros profesionales.
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="discovery-tiles col-sm-12 col-md-6 px-3 px-md-2" id="check">

                        <div class=" mb-5 bg-white rounded p-3">
                            <div>
                                <img src="http://honestrooms.herokuapp.com/images/home/check.PNG">
                            </div>
                            <div style="margin-top:7%;font-weight: bold">
                                <h4>Garantía 24hs. Reality Check</h4>
                            </div>
                            <div>
                                <p class="content-font">
                                    Si en las primeras 24 horas que llegaste hay algo que no coincide con las fotos o con las descripciones que viste y no te queres quedar ¡No te preocupes! Nos avisás y te devolvemos el dinero de la reserva. Super fácil, cero riesgos.
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="discovery-tiles col-sm-12 col-md-6 px-3 px-md-2" id="heart" style="margin-top:2%">

                        <div class=" mb-5 bg-white rounded p-3">
                            <div>
                                <img src="http://honestrooms.herokuapp.com/images/home/heart.PNG">
                            </div>
                            <div style="margin-top:7%;font-weight: bold">
                                <h4>Impacto positivo por dónde lo mires</h4>
                            </div>
                            <div>
                                <p class="content-font">
                                    Mientras vos alquilás una habitación segura y verificada, generás oportunidades para que más mujeres mayores generen un ingreso genuino alquilándote a vos ese cuarto extra que tienen en sus casas.
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="discovery-tiles col-sm-12 col-md-6 px-3 px-md-2" id="people" style="margin-top:2%">

                        <div class=" mb-5 bg-white rounded p-3">
                            <div>
                                <img src="http://honestrooms.herokuapp.com/images/home/people.PNG">
                            </div>
                            <div style="margin-top:7%;font-weight: bold">
                                <h4>Somos el intermediario</h4>
                            </div>
                            <div>
                                <p class="content-font">
                                    Cuidamos cada detalle de tu estadía. En caso de que tengas algún problema con tu host vamos a estar ahí para ayudar a resolver cualquier conflicto y evitar asperezas entre quienes conviven.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!------------------------------- Nuestro diferencial FIN --------------------------------->
            <style>
                .imgRedonda {
                    /*width: 70px;*/
                    height: 70px;
                    border-radius: 150px;
                }
            </style>

            <!----------------------------- Que opinan nuestros clientes INICIO ------------------------>
        </div>

            <div id="discovery-container " class="pad-sm-20 fondoGris" style="margin-top:5%">

                <div class="discovery-section explore_community exploer_banner page-container-no-padding" id="discover-recommendations">
                    <div class="text-center row-space-6 row-space-top-8">
                        <p class="text-lead">
                            TESTIMONIOS
                        </p>
                        <h2 class="row-space-1">
                            Que opinan nuestros clientes
                        </h2>
                    </div>

                    <div class="text-center row justify-content-around mx-0 mx-md-5">

                        <div class="discovery-tiles col-12 col-lg-4">

                            <div class="shadow p-3 mb-5 bg-white rounded" style="float: left;">
                                <div style="text-align:center">
                                    <img class="imgRedonda" src="http://honestrooms-qa.herokuapp.com/images/home/1_user.png">
                                </div>
                                <div>
                                    <p class="content-font"  style="margin-left: 7%;margin-right: 7%;">
                                        ¡Hola! Soy Jessica, vine hace unos meses de Brasil para estudiar medicina en la UBA. Cuando llegué a Buenos Aires me costó mucho encontrar un lugar donde hospedarme que no se aprovechase de mi escaso conocimiento sobre los precios de renta en la ciudad.
                                    </p>
                                </div>
                                <div style="text-align:center;margin-left: 40%;">
                                    <hr style="width:50px;">
                                </div>
                                <p>
                                    Jessica - Porto Alegre, Brasil
                                </p>

                            </div>

                        </div>

                        <div class="discovery-tiles col-12 col-lg-4">

                            <div class="shadow p-3 mb-5 bg-white rounded" style="float: left;">
                                <div style="text-align:center">
                                    <img class="imgRedonda" src="http://honestrooms-qa.herokuapp.com/images/home/2_user.png">
                                </div>
                                <div>
                                    <p class="content-font" style="padding-bottom: 7%;margin-left: 7%;margin-right: 7%;">
                                        Llegué a Sparer Rooms Buenos Aires por Google, me contacté con ellas y me dieron la seguridad que necesitaba. La habitacion no es para mí, si no para Mati, mi hijo que el mes que viene se va a estudiar Kinesiología a Buenos Aires.
                                    </p>
                                </div>
                                <div style="text-align:center;margin-left: 40%;">
                                    <hr style="width:50px;">
                                </div>
                                <p>
                                    Patricia - Bahia Blanca, Argentina
                                </p>

                            </div>

                        </div>

                        <div class="discovery-tiles col-12 col-lg-4">

                            <div class="shadow p-3 mb-5 bg-white rounded" style="float: left;">
                                <div style="text-align:center">
                                    <img class="imgRedonda" src="http://honestrooms-qa.herokuapp.com/images/home/3_user.png">
                                </div>
                                <div>
                                    <p class="content-font" style="padding-bottom: 7%;margin-left: 7%;margin-right: 7%;">
                                        Vine hace 3 meses de París (Francia) para hacer un cuatrimestre de intercambio en la Universidad de Buenos Aires. Siempre quise conocer esta ciudad y cada vez la amo más. Pude dar con gente increíble y súper amable como Graciela.
                                    </p>
                                </div>
                                <div style="text-align:center;margin-left: 40%;">
                                    <hr style="width:50px;">
                                </div>
                                <p>
                                    Esteban - París, Francia
                                </p>

                            </div>

                        </div>



                    </div>

                </div>
            </div>

            <style>
                .fondoGris {
                    width: 100%;
                    background-color: #E7E5E5;

                }
            </style>

            <!------------------------------------ Que opinan nuestros clientes FIN --------------------------------->
        <div class="page-container-responsive new-page-container mini-rel-top row-space-top-1">
            <!----------------------------------- Prensa INICIO ------------------------------------->

            <div id="discovery-container" class="pad-sm-20">

                <div class="discovery-section explore_community exploer_banner page-container-no-padding" id="discover-recommendations">
                    <div class="section-intro text-center row-space-6 row-space-top-8">
                        <p class="text-lead">
                            PRENSA
                        </p>
                        <h2 class="row-space-1">
                            Que dicen los medios
                        </h2>
                    </div>

                    <div class="text-center row justify-content-around mx-1">

                        <div class="discovery-tiles col-12 col-lg-4">

                            <div class="shadow-sm p-3 mb-5 bg-white rounded" style="border: #EDEDED 3px solid;">
                                <div style="text-align:center">
                                    <img src="http://honestrooms.herokuapp.com/images/home/nacion.PNG" style="width: 50%;">
                                </div>
                                <div style="margin-top:7%;font-weight: bold">
                                    <h3 style="color:#EA0A37;font-size: 150%;"><b>Una red para alojar extranjeros</b></h3>
                                </div>
                                <div style="margin-top:7%;">
                                    <p style="font-size:12px">LA NACIÓN (NEWSPAPER),MARCH 21, 2011</p>
                                </div>
                                <div>
                                    <p class="content-font">
                                        Spare Rooms Buenos Aires ofrece por Internet la posibilidad de contratar
                                        habitaciones para quienes hacen intercambios...
                                    </p>
                                </div>

                                <a class="btn btn-outline-primary w-50" href="#" style="border-color: #24A4BA;color: #24A4BA;border-radius: 0.5em;">LEER MÁS</a>



                            </div>

                        </div>

                        <div class="discovery-tiles col-12 col-lg-4">

                            <div class="shadow-sm p-3 mb-5 bg-white rounded" style="border: #EDEDED 3px solid;">
                                <div style="text-align:center">
                                    <img src="http://honestrooms.herokuapp.com/images/home/logo_ieco.png" style="width: 20%;">
                                </div>
                                <div style="margin-top:7%;font-weight: bold">
                                    <h3 style="color:#EA0A37;font-size: 150%;"><b>Crece el negocio de los servicios para estudiantes</b></h3>
                                </div>
                                <div style="margin-top:7%;">
                                    <p style="font-size:12px">CLARÍN (NEWSPAPER), NOVEMBER 10, 2013</p>
                                </div>
                                <div>
                                    <p class="content-font">
                                        Alojamiento, seleccion de cursos y paseos por la ciudad son partes del combo que ofrecen las empresas dedicadas al rubro "Study Abroad".
                                    </p>
                                </div>
                                <a class="btn btn-outline-primary w-50" href="#" style="border-color: #24A4BA;color: #24A4BA;border-radius: 0.5em;">LEER MÁS</a>

                            </div>

                        </div>

                        <div class="discovery-tiles col-12 col-lg-4">

                            <div class="shadow-sm p-3 mb-5 bg-white rounded" style="border: #EDEDED 3px solid;">
                                <div style="text-align:center">
                                    <img src="http://honestrooms.herokuapp.com/images/home/logo_latinvision.png" style="width: 25%;">
                                </div>
                                <div style="margin-top:7%;font-weight: bold">
                                    <h3 style="color:#EA0A37;font-size: 150%;"><b>Latin American Startups: 10 Women to Watch</b></h3>
                                </div>
                                <div style="margin-top:7%;">
                                    <p style="font-size:12px">THE NEXT WEB, JUNE 12, 2011</p>
                                </div>
                                <div>
                                    <p class="content-font">
                                        From founders launching their first venture to facilitators and inverstors, here are 10 women you should watch.
                                    </p>
                                </div>
                                <a class="btn btn-outline-primary w-50" href="#" style="border-color: #24A4BA;color: #24A4BA;border-radius: 0.5em;">LEER MÁS</a>

                            </div>

                        </div>

                    </div>

                </div>
            </div>


            <!--------------------------------- Prensa FIN ------------------------------------>

        </div>
    </div>

    <!----------------------------- Inicio de Footer ------------------------->

    <!--------------------- Fin de Footer ----------------------------->
    </div>
    </div>

</main>
@stop