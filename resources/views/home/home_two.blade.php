@extends('template_two')

@section('main')
<main>
    <div class="whole-section sect_home" ng-controller="home_owl" ng-cloak>
        <div class="page-container-responsive new-page-container mini-rel-top row-space-top-1">
          <!------------------------------ Banner principal ------------------------------------->
            <div class="panel">
                <div id="discovery-container" class="pad-sm-20" style="float:left;width:100%;/* height: 100% !important; */background-image: url('http://honestrooms.herokuapp.com/images/home/home_two_new.jpg');height: 600px;width: 1500px;position: relative;margin-left: -170px;padding-right: 100px; padding-left: 20%;background-repeat: no-repeat;">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-top:5%">
                        <div class="no-mar-sm" style="margin-top: 94px;">
                            <div
                                class="textHeaderContainerMarginTop_13o8qr2-o_O-textHeaderContainerWidth_peyti4 row-space-7">
                                <h1 class="textHeader_8yxs9w" style="color:white !important;">
                                    <span class="textHeaderTitle_153t78d-o_O-textHeader_rausch_hp6jb4"
                                        style="color:white !important;">
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
                            <form action="{{ url('s') }}" class="simple-search" method="get" id="searchbar-form"
                                name="simple-search">
                                <div class="container_1tvwao0" style="width: 80% !important;">
                                    <div class="container_mv0xzc" style="width: 100%;background-color:white">
                                        <div class="label_1om3jpt">{{ trans('messages.header.where') }}</div>
                                        <div class="largeGeocomplete_1g20x4k">
                                            <div class="container_gor68n">
                                                <div>
                                                    <div class="container_e296pg">
                                                        <div class="container_36rlri-o_O-block_r99te6">
                                                            <label
                                                                class="label_hidden_1m8bb6v">{{ trans('messages.header.where') }}</label>
                                                            <div
                                                                class="container_ssgg6h-o_O-container_noMargins_18e9acw-o_O-borderless_mflkgb-o_O-block_r99te6">
                                                                <div class="inputContainer_178faes">
                                                                    <input autocomplete="off"
                                                                        class="input_70aky9-o_O-input_book_f17nnd-o_O-input_ellipsis_1bgueul-o_O-input_defaultPlaceholder_jsyynz"
                                                                        id="header-search-form" name="location"
                                                                        placeholder="{{ trans('messages.header.anywhere') }}"
                                                                        value="" type="text">
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
                                                <!-- /react-text --><button type="submit"
                                                    class="btn btn-primary searchButton_n8fchz"
                                                    style="background-color:#ff5a5f !important">
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
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 show-sm hide-md viedat">
                <div class="searchBarWrapper_1aq8p3r">
                    <div class="container_puzkdo">
                        <div>
                            <div data-id="SearchBarSmall" class="container_1tvwao0">
                                <div class="container_mv0xzc" style="width: 100%;">

                                    <button type="button" class="button_1b5aaxl button-sm-search">
                                        <span class="icon_12hl23n">
                                            <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true"
                                                focusable="false"
                                                style="display: block; fill: currentcolor; height: 18px; width: 18px;">
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
                                <button aria-haspopup="false" aria-expanded="false" class="container_1rp5252"
                                    type="button" style="padding: 20px; margin: -20px;">
                                    <svg viewBox="0 0 18 18" role="img" aria-label="Close" focusable="false"
                                        style="display: block; fill: rgb(72, 72, 72); height: 16px; width: 16px;">
                                        <path fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="right_8ydhe">
                                <div class="text_5mbkop-o_O-size_small_1gg2mc">
                                    <button aria-disabled="false" class="component_9w5i1l-o_O-component_button_r8o91c"
                                        type="button"><span>Clear all</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="body_1sn4o6s-o_O-body_dropdown_7xdft6 arrow-button">
                            <button type="button"
                                class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                                <span class="icon_12hl23n">
                                    <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                                        style="display: block; fill: currentcolor; height: 1em; width: 1em;">
                                        <g fill-rule="evenodd">
                                            <path></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="copy_14aozyc">
                                    <span>{{ trans('messages.header.anywhere') }}</span></span>
                            </button>
                            <div style="margin-top: 16px; margin-bottom: 16px;">
                                <button type="button"
                                    class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                                    <span class="icon_12hl23n">
                                        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true"
                                            focusable="false"
                                            style="display: block; fill: currentcolor; height: 1em; width: 1em;">
                                            <path></path>
                                        </svg>
                                    </span>
                                    <span class="copy_14aozyc">{{ trans('messages.header.anytime') }}</span>
                                </button>
                            </div>
                            <button type="button"
                                class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                                <span class="icon_12hl23n">
                                    <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                                        style="display: block; fill: currentcolor; height: 1em; width: 1em;">
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

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <ul class="home-menu">
                    <li><a class="foryou current" href="{{ url('/') }}">{{ trans('messages.header.for_you') }}</a></li>
                    <li><a class="homes"
                            href="{{ url('/s?current_refinement=Homes') }}">{{ trans('messages.header.homes') }} </a>
                    </li>
                    {{--HostExperienceBladeCommentStart
                       <li><a class="experiences" href="{{ url('/s?current_refinement=Experiences') }}">{{ trans('experiences.home.experiences') }}
                    </a></li>
                    HostExperienceBladeCommentEnd--}}
                </ul>
            </div>


            <!------------------------------- Validar que es -------------------------------------->
            <div class="lazy-load-div1 lazy-load1 col-md-12 col-lg-12 col-sm-12 col-xs-12  p-0" id="lazy_load_slider">
                {{--HostExperienceBladeCommentStart
                    @include('host_experiences.home_slider', ['title_text'=> trans('experiences.home.experiences'), 'see_all_link' => url('s?current_refinement=Experiences'),'category_id'=> 'all_exp' ])
                    HostExperienceBladeCommentEnd--}}

                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nwt_slid p-0" ng-if="reservation.length > 0">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl"
                        style="padding:0px;     margin: 45px 0px 15px;">
                        <h3 class="rowHeader pull-left">
                            <!-- react-text: 38121 -->{{ trans('messages.header.justbooked') }}
                            <!-- /react-text -->
                        </h3>
                        <div class="seeMoreContainer_11b8zgn pull-right">

                            <a href="{{ url('s') }}" ng-if="reservation.length > 3">
                                <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">
                                    <span class="text_13lu1ne"><span>{{ trans('messages.header.seeall') }}</span></span>
                                    <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false"
                                        style="fill: currentcolor; height: 10px; width: 10px;">
                                        <path fill-rule="evenodd"
                                            d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
                                        </path>
                                    </svg>
                                </button></a>


                        </div>
                    </div>

                    <div class="home-bx-slider1 col-md-12 col-lg-12 col-sm-12 col-xs-12 "
                        style="position:relative;padding:0px;">

                        <div class="owl-carousel cate1">
                            <div class="cateimg" ng-repeat="fetch_data in reservation">

                                <a href=" @{{ url+fetch_data.room_id }}">
                                    <img ng-src="@{{ fetch_data.rooms.photo_name }} ">
                                </a>

                                <div class="panel-body panel-card-section">
                                    <div class="media">
                                        <div class="category_city hm_cate">
                                            <span class="pull-left">@{{ fetch_data.rooms.room_type_name }}</span>
                                            <!-- <span class="pull-left dot-cont">·</span>
                                <span class="pull-left">@{{ fetch_data.rooms.beds }} @{{ fetch_data.rooms.bed_lang }}</span> -->
                                        </div>

                                        <a href=" @{{ url+fetch_data.room_id }}" target="listing_10001"
                                            class="text-normal" style="text-decoration:none !important;">
                                            <h3 title="@{{ fetch_data.rooms.name}}" itemprop="name"
                                                class="h5 listing-name text-truncate row-space-top-1" style="width:95%;"
                                                ng-if=" fetch_data.rooms.name">

                                                @{{ fetch_data.rooms.name}}

                                            </h3>
                                        </a>
                                        <div class="exp_price"><span ng-bind-html="fetch_data.currency.symbol"></span>
                                            @{{ fetch_data.rooms.rooms_price.month }}
                                            {{ trans("messages.service_host_rule.per_month") }}
                                            <span ng-if="fetch_data.rooms.booking_type == 'instant_book'"> <i
                                                    class="icon icon-instant-book icon-beach"></i></span>
                                        </div>
                                        <div itemprop="description"
                                            class="pull-left text-muted rt_set listing-location text-truncate"><a
                                                href=" @{{ url+fetch_data.room_id }}"
                                                class="text-normal link-reset pull-left ">
                                                <span class="pull-left"
                                                    ng-bind-html="fetch_data.rooms.overall_star_rating">

                                                </span>
                                                <a href=" @{{ url+fetch_data.room_id }}">
                                                    <span class="pull-left mr_mb" style="padding-left: 5px;">
                                                        <span class="pull-left r-count ng-binding "
                                                            ng-if="fetch_data.rooms.reviews_count > 0"
                                                            style="font-size:15px;color:#555;">
                                                            @{{ fetch_data.rooms.reviews_count }} </span>
                                                        <span ng-if="fetch_data.rooms.overall_star_rating!=''"
                                                            class="pull-left r-label ng-binding"
                                                            style="font-size:12px;color:#555;">
                                                            @{{ fetch_data.rooms.reviews_count_lang }}
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


                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nwt_slid p-0" ng-if="recommented.length >0">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl "
                        style="padding:0px;     margin: 45px 0px 15px;">
                        <h3 class="rowHeader pull-left">
                            <!-- react-text: 38121 -->{{ trans('messages.header.recommend') }}
                            <!-- /react-text -->
                        </h3>
                        <div class="seeMoreContainer_11b8zgn pull-right">


                            <a href="{{ url('s') }}" ng-if="recommented.length > 3"><button
                                    class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">

                                    <span class="text_13lu1ne">
                                        <span>{{ trans('messages.header.seeall') }}</span></span>


                                    <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false"
                                        style="fill: currentcolor; height: 10px; width: 10px;">
                                        <path fill-rule="evenodd"
                                            d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
                                        </path>
                                    </svg>
                                </button></a>


                        </div>
                    </div>
                    <div class="home-bx-slider1 col-md-12 col-lg-12 col-sm-12 col-xs-12 "
                        style="position:relative;padding:0px;">

                        <div class="owl-carousel cate2">

                            <div class="cateimg" ng-repeat="reservation in recommented"><a
                                    href=" @{{ url+reservation.id }}"><img ng-src="@{{ reservation.photo_name }}" /></a>

                                <div class="panel-body panel-card-section">
                                    <div class="media">
                                        <div class="category_city hm_cate">
                                            <span class="pull-left">@{{ reservation.room_type_name }}</span>
                                            <!-- <span class="pull-left dot-cont">·</span>
                              <span class="pull-left">@{{ reservation.beds }} @{{ reservation.bed_lang }}</span> -->
                                        </div>
                                        <a href=" @{{ url+reservation.id }}" target="listing_10001" class="text-normal"
                                            style="text-decoration:none !important;">

                                            <h3 title="@{{reservation.name}}" itemprop="name"
                                                class="h5 listing-name text-truncate row-space-top-1 ng-binding"
                                                style="width:95%;">
                                                @{{ reservation.name}}
                                            </h3>
                                        </a>
                                        <div class="exp_price">
                                            <span
                                                ng-bind-html="reservation.rooms_price.currency.symbol"></span>@{{ reservation.rooms_price.month }}
                                            {{ trans("messages.service_host_rule.per_month") }}

                                            <span ng-if="reservation.booking_type == 'instant_book'"> <i
                                                    class="icon icon-instant-book icon-beach"></i></span>

                                        </div>
                                        <div itemprop="description"
                                            class="rt_set pull-left text-muted listing-location text-truncate"><a
                                                href="" class="text-normal link-reset pull-left">

                                                <span class="pull-left">
                                                    <span class="pull-left ng-binding"
                                                        ng-bind-html="reservation.overall_star_rating">
                                                    </span>
                                                </span>

                                                <span class="pull-left" style="padding-left: 5px;color:#555;">
                                                    <a href=" @{{ url+reservation.id }}">
                                                        <span ng-if="reservation.reviews_count > 0"
                                                            class="pull-left r-count ng-binding"
                                                            style="font-size:15px;color:#555;">
                                                            @{{ reservation.reviews_count }}
                                                        </span><span ng-if="reservation.overall_star_rating"
                                                            class="pull-left r-label ng-binding" style="color:#555;">
                                                            @{{ reservation.reviews_count_lang }}
                                                        </span>
                                                    </a>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nwt_slid p-0" ng-if="most_viewed.length > 0">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl"
                        style="padding:0px;     margin: 45px 0px 15px;">
                        <h3 class="rowHeader pull-left">
                            <!-- react-text: 38121 -->{{ trans('messages.header.most_viewed') }}
                            <!-- /react-text -->
                        </h3>
                        <div class="seeMoreContainer_11b8zgn pull-right">

                            <a href="{{ url('s') }}" ng-if="most_viewed.length > 3">
                                <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">
                                    <span class="text_13lu1ne"><span>{{ trans('messages.header.seeall') }}</span>
                                    </span>
                                    <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false"
                                        style="fill: currentcolor; height: 10px; width: 10px;">
                                        <path fill-rule="evenodd"
                                            d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
                                        </path>
                                    </svg>
                                </button>
                            </a>

                        </div>
                    </div>

                    <div class="home-bx-slider col-md-12 col-lg-12 col-sm-12 col-xs-12 "
                        style="position:relative;padding:0px;">
                        <div class="owl-carousel cate3">

                            <div class="cateimg" ng-repeat="view_count in most_viewed"><a
                                    href=" @{{ url+view_count.id }}"><img ng-src="@{{ view_count.photo_name}}" /></a>
                                <div class="panel-body panel-card-section">
                                    <div class="media">
                                        <div class="category_city hm_cate">
                                            <span class="pull-left">@{{ view_count.room_type_name }}</span>
                                            <!--  <span class="pull-left dot-cont">·</span>
                      <span class="pull-left">@{{ view_count.beds }} @{{ view_count.bed_lang }}</span> -->
                                        </div>
                                        <a href=" @{{ url+view_count.id }}" target="listing_10001" class="text-normal"
                                            style="text-decoration:none !important;">

                                            <h3 title="@{{view_count.name}}" itemprop="name"
                                                class="h5 listing-name text-truncate row-space-top-1 ng-binding"
                                                style="width:95%;">
                                                @{{view_count.name}}
                                            </h3>
                                        </a>
                                        <div class="exp_price">
                                            <span ng-bind-html=" view_count.rooms_price.currency.symbol"></span>
                                            @{{ view_count.rooms_price.month }}
                                            {{ trans("messages.rooms.per_month") }}

                                            <span ng-if="view_count.booking_type == 'instant_book'"> <i
                                                    class="icon icon-instant-book icon-beach"></i></span>

                                        </div>
                                        <div itemprop="description"
                                            class="rt_set pull-left text-muted listing-location text-truncate"><a
                                                href="" class="text-normal link-reset pull-left">
                                                <span class="pull-left">

                                                    <span class="pull-left ng-binding"
                                                        ng-bind-html=" view_count.overall_star_rating">

                                                    </span>
                                                </span>
                                                <a href=" @{{ url+view_count.id }}">
                                                    <span class="pull-left rw_view" style="padding-left: 5px; ">
                                                        <span ng-if="view_count.reviews_count"
                                                            class="pull-left r-count ng-binding"
                                                            style="font-size:15px;color:#555;">
                                                            @{{ view_count.reviews_count }}</span>
                                                        <span ng-if="view_count.overall_star_rating"
                                                            class="pull-left r-label ng-binding"
                                                            style="font-size:12px;color:#555;">
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

            </div>
            <!------------------------------- Fin de Validar que es -------------------------------------->
            
            {{--HostExperienceBladeCommentStart
              <div ng-repeat="featured_category in featured_host_experience_categories">
                <div class="lazy-load-div1 lazy-load1 col-md-12 col-lg-12 col-sm-12 col-xs-12  p-0" id="lazy_load_slider" ng-if="featured_category.all_host_experiences_count > 0">
                @include('host_experiences.home_category_slider')
                </div>
              </div>
            HostExperienceBladeCommentEnd--}}
            <div class="discovery-section explore_community exploer_banner page-container-no-padding"
                    id="discover-recommendations" ng-init="city_count=city_count-1 ;">
                    <div class="section-intro text-center row-space-6 row-space-top-8"
                        ng-if="home_city_explore.length!=0">
                        <h2 class="row-space-1">
                            <!-- <strong>{{ trans('messages.home.explore_world') }}</strong>-->
                            How does it work?
                        </h2>
                        <p class="text-lead">
                            {{ trans('messages.home.explore_desc') }}
                        </p>
                        <!--Se copia texto para ejemplo-->
                        <p class="text-lead">
                            Texto de ejemplo para la web
                        </p>
                    </div>

                    <div class="discovery-tiles">
                        <div class="row">                            
                            <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center">
                                <div>
                                    <img src="http://honestrooms.herokuapp.com/images/home/1.png">
                                </div>
                                <div>
                                    <h4 style="color: #24A4BA">Search and choose safely</h4>
                                </div>
                                <div style="padding-left:5%;padding-right:5%">
                                    <p class="content-font" style="margin-left: 10%;margin-right: 10%;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam voluptatem
                                        rerum
                                        asperiores earum, maiores impedit accusamus nemo provident saepe laborum
                                        nisi
                                        quisquam? Culpa vero labore praesentium explicabo hic eligendi vel?
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center">
                                <div>
                                    <img src="http://honestrooms.herokuapp.com/images/home/2.png">
                                </div>
                                <div>
                                    <h4 style="color: #24A4BA">Online booking</h4>
                                </div>
                                <div style="padding-left:5%;padding-right:5%">
                                    <p class="content-font" style="margin-left: 10%;margin-right: 10%;">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et autem officiis
                                        veritatis ipsam ut ducimus a laborum qui, voluptate quisquam quae
                                        asperiores,
                                        odio vel sed, quaerat soluta nesciunt. Corporis, consectetur.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center">
                                <div>
                                    <img src="http://honestrooms.herokuapp.com/images/home/3.png">
                                </div>
                                <div>
                                    <h4 style="color: #24A4BA">Confirmation and payment</h4>
                                </div>
                                <div style="padding-left:5%;padding-right:5%">
                                    <p class="content-font" style="margin-left: 10%;margin-right: 10%;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quam tempore
                                        voluptate vel odit quasi repellendus fugiat modi? Corporis a quaerat itaque
                                        est
                                        aperiam doloribus beatae distinctio similique vitae exercitationem!
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3" style="float:left;text-align:center">
                                <div>
                                    <img src="http://honestrooms.herokuapp.com/images/home/4.png">
                                </div>
                                <div>
                                    <h4 style="color: #24A4BA">All ready to move in</h4>
                                </div>
                                <div style="padding-left:5%;padding-right:5%">
                                    <p class="content-font" style="margin-left: 10%;margin-right: 10%;">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis
                                        mollitia
                                        impedit quo sed praesentium aspernatur, cupiditate voluptatibus vero iure,
                                        dolore voluptate totam quas quidem autem ullam quisquam fugiat, illum nisi!
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div style="text-align:center;margin-top:4%">
                    <a href="#" style="color:#24A4BA;text-decoration: none;">QUIERO SABER MÁS <i
                            class="fa fa-angle-right" style="color:#24A4BA;padding-left:3px;"></i></a>
                </div>

                <div class="lazy-load-div1 lazy-load1 col-md-12 col-lg-12 col-sm-12 col-xs-12  p-0"
                    id="lazy_load_slider">
                    {{--HostExperienceBladeCommentStart
                    @include('host_experiences.home_slider', ['title_text'=> trans('experiences.home.experiences'), 'see_all_link' => url('s?current_refinement=Experiences'),'category_id'=> 'all_exp' ])
                    HostExperienceBladeCommentEnd--}}
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nwt_slid p-0" ng-if="most_viewed.length > 0">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl"
                            style="padding:0px;     margin: 45px 0px 15px;">
                            <h3 class="rowHeader pull-left" style="margin-right: 10px;">
                                <!-- react-text: 38121--> {{ trans('messages.header.most_viewed') }}
                                <!--/react-text-->
                            </h3>
                            <div>
                                <hr>
                            </div>
                            <!-- <div class="seeMoreContainer_11b8zgn pull-right">

                                <a href="{{ url('s') }}" ng-if="most_viewed.length > 3">
                                    <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">
                                        <span class="text_13lu1ne"><span>{{ trans('messages.header.seeall') }}</span>
                                        </span>
                                        <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true"
                                            focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
                                            <path fill-rule="evenodd"
                                                d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
                                            </path>
                                        </svg>
                                    </button>
                                </a>

                            </div>-->
                        </div>



                        <div class="home-bx-slider col-md-12 col-lg-12 col-sm-12 col-xs-12 "
                            style="position:relative;padding:0px;">
                            <div class="owl-carousel cate3">

                                <div class="cateimg" ng-repeat="view_count in most_viewed"><a
                                        href=" @{{ url+view_count.id }}"><img
                                            ng-src="@{{ view_count.photo_name}}" /></a>
                                    <div class="panel-body" style="padding: 5px 0;height:80px;">
                                        <div class="media">
                                            <!--<div class="category_city hm_cate">
                                                <span class="pull-left">@{{ view_count.room_type_name }}</span>
                                                <span class="pull-left dot-cont">·</span>
                                                <span class="pull-left">@{{ view_count.beds }}
                                                    @{{ view_count.bed_lang }}</span>
                                            </div>-->
                                            <a href=" @{{ url+view_count.id }}" target="listing_10001"
                                                class="text-normal" style="text-decoration:none !important;">

                                                <h3 title="@{{view_count.name}}" itemprop="name"
                                                    class="h5 listing-name text-truncate row-space-top-1 ng-binding"
                                                    style="width:95%;">
                                                    @{{view_count.name}}
                                                </h3>
                                            </a>
                                            <div class="exp_price">
                                                <span ng-bind-html=" view_count.rooms_price.currency.symbol"></span>
                                                @{{ view_count.rooms_price.month }}
                                                {{ trans("messages.rooms.per_month") }}

                                                <span ng-if="view_count.booking_type == 'instant_book'"> <i
                                                        class="icon icon-instant-book icon-beach"></i></span>

                                            </div>
                                            <div itemprop="description"
                                                class="rt_set pull-left text-muted listing-location text-truncate"><a
                                                    href="" class="text-normal link-reset pull-left">
                                                    <span class="pull-left">

                                                        <span class="pull-left ng-binding"
                                                            ng-bind-html=" view_count.overall_star_rating">

                                                        </span>
                                                    </span>
                                                    <a href=" @{{ url+view_count.id }}">
                                                        <span class="pull-left rw_view" style="padding-left: 5px; ">
                                                            <span ng-if="view_count.reviews_count"
                                                                class="pull-left r-count ng-binding"
                                                                style="font-size:15px;color:#555;">
                                                                @{{ view_count.reviews_count }}</span>
                                                            <span ng-if="view_count.overall_star_rating"
                                                                class="pull-left r-label ng-binding"
                                                                style="font-size:12px;color:#555;">
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
                            <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0"
                                style="padding-left:0px !important">
                                <span class="text_13lu1ne"><span>{{ trans('messages.header.seeall') }}</span>
                                </span>
                                <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false"
                                    style="fill: currentcolor; height: 10px; width: 10px;">
                                    <path fill-rule="evenodd"
                                        d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
                                    </path>
                                </svg>
                            </button>
                        </a>

                    </div>

                </div>
            
        </div>
      </div>

      <!----------------------------- Inicio de Footer ------------------------->
     
      <!--------------------- Fin de Footer ----------------------------->
    </div>
  </div>

</main>
@stop