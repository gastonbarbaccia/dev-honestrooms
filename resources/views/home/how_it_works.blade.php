@extends('template_two')

@section('main')
    <main>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Spartan:wght@200;400;600;800&display=swap');

            * {
                font-family: 'Lato', sans-serif;
                font-size: 14px;


            }

            .resp-step {}

            @media (max-width: 760px) {
                .no-mar-sm {
                    margin-top: 13% !important;
                    padding-left: 10%;
                    padding-right: 70%;
                }

                .resp-steps {
                    margin-right: 10%;
                    margin-left: 10%;
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
                        style="margin-top: 70px;margin-bottom: 7%;">
                        <h2 class="row-space-1">
                            {{ trans('messages.home.how_it_works') }}
                        </h2>
                        <p class="text-lead" style="text-align: center;padding-left: 20%;padding-right: 20%;font-size:20px">
                            {{ trans('messages.home.steps_desc') }} 
                        </p>
                    </div>

                    <div class="discovery-tiles">
                        <div class="row">
                            <div class="container">
                                <div class="row resp-steps" style="margin-bottom: 7%;" >
                                    <div class="col-12 mb-4">
                                        <!--1er item-->
                                        <div class="row">
                                            <div class="col-md-4 col-lg-3 text-center">
                                                <img src="http://honestrooms.herokuapp.com/images/home/1.png"
                                                    class="mb-1">
                                            </div>
                                            <div class="col-md-8 col-lg-7">
                                                <h4 style="color:#d51b5e ; font-weight: 700;font-size: 140%;">
                                                    {{ trans('messages.home.step_1_title') }} 
                                                </h4>
                                                <p class="content-font" style="font-size:16px">
                                                    {{ trans('messages.home.step_1_desc') }} 
                                                </p>
                                                <div style="color:#24A4BA;font-weight: 700;font-size: 120%;">
                                                    A) {{ trans('messages.home.step_1_desc_A') }}
                                                </div>
                                                <p class="content-font" style="font-size:16px">
                                                    {{ trans('messages.home.step_1_desc_A_desc') }}
                                                </p>

                                                <div style="color:#24A4BA;font-weight: 700;font-size: 120%">
                                                    B) {{ trans('messages.home.step_1_desc_B') }}
                                                </div>

                                                <p class="content-font" style="font-size:16px">
                                                    {{ trans('messages.home.step_1_desc_B_desc') }}
                                                </p>



                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12 mb-4" style="margin-top: 5%;">
                                        <!--2do item-->
                                        <div class="row">
                                            <div class="col-md-4 col-lg-3 text-center">
                                                <img src="http://honestrooms.herokuapp.com/images/home/2.png"
                                                    class="mb-1">
                                            </div>
                                            <div class="col-md-8 col-lg-7">

                                                <h4 style="color: #d51b5e ; font-weight: 700;font-size: 140%;">
                                                    {{ trans('messages.home.step_2_title') }} 
                                                </h4>


                                                <p class="content-font" style="font-size:16px">
                                                    {{ trans('messages.home.step_2_desc') }} 
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12 mb-4" style="margin-top: 5%;">
                                        <!--3ER item-->
                                        <div class="row">
                                            <div class="col-md-4 col-lg-3 text-center">
                                                <!--Espacio de img-->
                                                <img src="http://honestrooms.herokuapp.com/images/home/3.png"
                                                    class="mb-1">
                                            </div>

                                            <div class="col-md-8 col-lg-7">
                                                <!--Espacio de texto-->


                                                <h4 style="color: #d51b5e; font-weight: 700;font-size: 140%;">
                                                    {{ trans('messages.home.step_3_title') }} 
                                                </h4>


                                                <p class="content-font" style="font-size:16px">
                                                    {{ trans('messages.home.step_3_desc') }} 
                                                </p>

                                                <div style="color:#24A4BA;font-weight: 700;font-size: 120%;">
                                                    A) {{ trans('messages.home.step_3_desc_A') }} 
                                                </div>

                                                <p class="content-font" style="font-size:16px">
                                                    {{ trans('messages.home.step_3_desc_A_desc') }} 
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12 " style="margin-top: 5%;">
                                        <!--4ER item-->
                                        <div class="row">
                                            <div class="col-md-4 col-lg-3 text-center">
                                                <!--Espacio de img-->
                                                <img src="http://honestrooms.herokuapp.com/images/home/4.png"
                                                    class="mb-1">
                                            </div>

                                            <div class="col-md-8 col-lg-7">
                                                <!--Espacio de texto-->


                                                <h4 style="color: #d51b5e; font-weight: 700;font-size: 140%;">
                                                    {{ trans('messages.home.step_4_title') }} 
                                                </h4>


                                                <p class="content-font" style="font-size:16px">
                                                    {{ trans('messages.home.step_4_desc') }} 
                                                </p>

                                                <div style="color:#24A4BA;font-weight: 700;font-size: 120%">
                                                    A)  {{ trans('messages.home.step_4_desc_A') }}     
                                                </div>

                                                <p class="content-font" style="font-size:16px">
                                                    {{ trans('messages.home.step_4_desc_A_desc') }}
                                                </p>

                                                <div style="color:#24A4BA;font-weight: 700;font-size: 120%">
                                                    B) {{ trans('messages.home.step_4_desc_B') }}
                                                </div>

                                                <p class="content-font" style="font-size:16px">
                                                    {{ trans('messages.home.step_4_desc_B_desc') }}
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    <div style="text-align:center;margin-top:10%;font-size:20px">
                                        <a class="btn btn-outline-primary w-50"
                                            href="s?min_price=94&max_price=7013&room_type=&current_refinement=Homes&property_type=&amenities=&services_offer=&checkin=&checkout=&guests=1&private_bathrooms=&shared_bathrooms=&page=1&instant_book=undefined&php_date_format=d/m/Y"
                                            style="border-color: #24A4BA;color: #24A4BA;border-radius: 0.5em;text-decoration: none;margin-top:5%">
                                            {{ trans('messages.home.view_properties') }}
                                            </a>
                                    </div>


                                </div>

                                <!----------------------------- Inicio de Footer ------------------------->

                                <!--------------------- Fin de Footer ----------------------------->
                            </div>


    </main>
@stop
