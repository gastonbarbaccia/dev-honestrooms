
@extends('template_two')

@section('main')
<main>
  <div class="whole-section sect_home" ng-controller="home_owl" ng-cloak>
    <div class="page-container-responsive new-page-container mini-rel-top row-space-top-1">
      <div class="panel">
        <div id="discovery-container" class="pad-sm-20" style="float:left;width:100%;/* height: 100% !important; */background-image: url('http://honestrooms.herokuapp.com/images/home/home_two.jpg');height: 600px;width: 1500px;position: relative;margin-left: -170px;padding-right: 100px; padding-left: 20%;">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-top:5%">
            <div class="no-mar-sm" style="margin-top: 94px;">
              <div class="textHeaderContainerMarginTop_13o8qr2-o_O-textHeaderContainerWidth_peyti4 row-space-7">
                <h1 class="textHeader_8yxs9w" style="color:white !important;">
                <span class="textHeaderTitle_153t78d-o_O-textHeader_rausch_hp6jb4" ><!--{{ $site_name }}--> There is a room that awaits you </span>
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
              <div class="container_e4p5a8"><!-- react-empty: 18439 -->
                <form action="{{ url('s') }}" class="simple-search" method="get" id="searchbar-form" name="simple-search">
                  <div class="container_1tvwao0" style="width: 80% !important;">
                    <div class="container_mv0xzc" style="width: 100%;background-color:white">
                      <div class="label_1om3jpt">{{ trans('messages.header.where') }}</div>
                      <div class="largeGeocomplete_1g20x4k">
                        <div class="container_gor68n">
                          <div>
                            <div class="container_e296pg">
                              <div class="container_36rlri-o_O-block_r99te6">
                                <label class="label_hidden_1m8bb6v" >{{ trans('messages.header.where') }}</label>
                                <div class="container_ssgg6h-o_O-container_noMargins_18e9acw-o_O-borderless_mflkgb-o_O-block_r99te6">
                                  <div class="inputContainer_178faes">
                                    <input autocomplete="off" class="input_70aky9-o_O-input_book_f17nnd-o_O-input_ellipsis_1bgueul-o_O-input_defaultPlaceholder_jsyynz"
                                    id="header-search-form" name="location" placeholder="{{ trans('messages.header.anywhere') }}" value="" type="text">
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
                    <!-- <div class="container_mv0xzc-o_O-borderLeft_1ujj4hk-o_O-borderRight_1x9yfnn" style="width: 100%;">
                      <div class="label_1om3jpt">{{ trans('messages.header.when') }}</div>
                      <div class="webcot-lg-datepicker webcot-lg-datepicker--jumbo">
                        <div class="dateRangePicker_e296pg-o_O-hidden_ajz5vs">
                          <div class="DateRangePickerDiv">
                            <div>
                              <div class="DateRangePickerInput">
                                <div class="DateInput">
                                  <input aria-label="Check In" class="DateInput__input needsclick" id="checkin" name="checkin" value="" placeholder="{{ trans('messages.header.checkin') }}" autocomplete="off" aria-describedby="DateInput__screen-reader-message-startDate" type="text">
                                  <div class="DateInput__display-text">{{ trans('messages.header.checkin') }}</div>
                                </div>
                                <div class="DateRangePickerInput__arrow" aria-hidden="true" role="presentation">-
                                </div>
                                <div class="DateInput">
                                  <input aria-label="Check Out" class="DateInput__input needsclick" id="checkout" name="checkout" value="" placeholder="{{ trans('messages.header.checkout') }}" autocomplete="off" aria-describedby="DateInput__screen-reader-message-endDate" type="text"><div class="DateInput__display-text">{{ trans('messages.header.checkout') }}</div>
                                </div>

                              </div></div></div></div>
                              <div>
                                <button type="button" tabindex="-1" class="button_1b5aaxl-o_O-button_large_c3pob4">
                                  <span class="icon_12hl23n"></span>
                                  <span class="copy_14aozyc-o_O-copy_fakePlaceholder_10k87om">{{ trans('messages.header.anytime') }}</span>
                                </button>
                              </div>
                            </div>
                            <div class="focusUnderline_7131v4">

                            </div>
                          </div> --
                           <div class="container_mv0xzc-o_O-borderLeft_1ujj4hk-o_O-borderRight_1x9yfnn" style="width: 100%;">
                      <div class="label_1om3jpt">{{ trans('messages.header.when') }}</div>
                      <div class="webcot-lg-datepicker webcot-lg-datepicker--jumbo">
                        <div class="dateRangePicker_e296pg-o_O-hidden_ajz5vs">
                          <div class="DateRangePickerDiv">
                            <div>
                              <div class="DateRangePickerInput">
                                <div class="DateInput">
                                  <input aria-label="Check In" class="DateInput__input needsclick" id="checkin" name="checkin" value="" placeholder="{{ trans('messages.header.checkin') }}" autocomplete="off" aria-describedby="DateInput__screen-reader-message-startDate" type="text">
                                  <div class="DateInput__display-text">{{ trans('messages.header.checkin') }}</div>
                                </div>
                              </div></div></div></div>
                              <div>
                                <button type="button" tabindex="-1" class="button_1b5aaxl-o_O-button_large_c3pob4">
                                  <span class="icon_12hl23n"></span>
                                  <span class="copy_14aozyc-o_O-copy_fakePlaceholder_10k87om">{{ trans('messages.header.anytime') }}</span>
                                </button>
                              </div>
                            </div>
                            <div class="focusUnderline_7131v4">

                            </div>
                          </div>
                          <div class="container_mv0xzc" style="width: 130px;border-right: 1px solid #e4e4e4;">
                            <div class="search_month">
                              <div class="label_1om3jpt col-md-12 padding_left"> {{ trans_choice('messages.new_rooms.month',1)  }} </div>
                              <select id="month" name="month" class="gst gst_icon col-md-12 ">
                                @for($i=1;$i<=$number_of_month;$i++)
                                  <option value="{{ $i }}"> {{$i.' '.trans_choice('messages.new_rooms.month',$i)}} </option>
                                @endfor
                              </select>
                            </div>
                          </div> -->
                          <div class="container_mv0xzc" style="width: 150px;">
                            <!-- <div class="search_guest">
                              <div class="label_1om3jpt col-md-12 padding_left"> {{ trans('messages.header.guest') }} </div>
                              <select id="guests" name="guests" class="gst gst_icon col-md-12 ">
                                @for($i=1;$i<=$number_of_accomodates;$i++)
                                <option value="{{ $i }}"> {{ ($i == '16') ? $i.'+ '.trans_choice('messages.home.guest',$i) : $i.' '.trans_choice('messages.home.guest',$i) }} </option>
                                @endfor
                              </select>
                            </div> -->
                            <div class="save_search">



                              <div class="container_mv0xzc save_but_block" style="background-color:white;"><!-- react-text: 18478 --><!-- /react-text --><button type="submit" class="btn btn-primary searchButton_n8fchz" style="background-color:#ff5a5f !important">
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

          <!-- mobile view header -->

          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 show-sm hide-md viedat">
            <div class="searchBarWrapper_1aq8p3r">
              <div class="container_puzkdo">
                <div>
                  <div data-id="SearchBarSmall" class="container_1tvwao0">
                    <div class="container_mv0xzc" style="width: 100%;">

                      <button type="button" class="button_1b5aaxl button-sm-search">
                        <span class="icon_12hl23n">
                          <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 18px; width: 18px;"><path fill-rule="nonzero"></path></svg>
                        </span>
                        <span class="copy_14aozyc">{{ trans('messages.header.anywhere') }} · {{ trans('messages.header.anytime') }} · 1 {{ trans('messages.header.guest') }}</span></button>
                        <div class="focusUnderline_7131v4"></div></div></div><!-- react-empty: 29505 -->
                      </div>
                    </div></div>


                    <div class="panel-drop-down hide-drop-down" style="z-index: 2000;">
                      <div class="panelContent_1jzf86v">
                        <div class="container_gvf938-o_O-container_dropdown_bed46g">
                          <div class="left_egy8rd">
                            <button aria-haspopup="false" aria-expanded="false" class="container_1rp5252" type="button" style="padding: 20px; margin: -20px;">
                              <svg viewBox="0 0 18 18" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(72, 72, 72); height: 16px; width: 16px;"><path fill-rule="evenodd"></path></svg>
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
                              <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 1em; width: 1em;"><g fill-rule="evenodd"><path></path></g></svg>
                            </span>
                            <span class="copy_14aozyc">
                              <span>{{ trans('messages.header.anywhere') }}</span></span>
                            </button>
                            <div style="margin-top: 16px; margin-bottom: 16px;">
                              <button type="button" class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                                <span class="icon_12hl23n">
                                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 1em; width: 1em;"><path ></path></svg>
                                </span>
                                <span class="copy_14aozyc">{{ trans('messages.header.anytime') }}</span>
                              </button>
                            </div>
                            <button type="button" class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                              <span class="icon_12hl23n">
                                <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 1em; width: 1em;"><path></path></svg>
                              </span>
                              <span class="copy_14aozyc"><span><span>1 {{ trans('messages.header.guest') }}</span></span></span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                 <!--  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                     <ul class="home-menu">
                       <li><a class="foryou current" href="{{ url('/') }}">{{ trans('messages.header.for_you') }}</a></li>
                       <li><a class="homes" href="{{ url('/s?current_refinement=Homes') }}">{{ trans('messages.header.homes') }} </a></li>
                       {{--HostExperienceBladeCommentStart
                       <li><a class="experiences" href="{{ url('/s?current_refinement=Experiences') }}">{{ trans('experiences.home.experiences') }} </a></li>
                       HostExperienceBladeCommentEnd--}}
                     </ul>
                   </div>
                       -->     

                <!--    
                   <div class="lazy-load-div1 lazy-load1 col-md-12 col-lg-12 col-sm-12 col-xs-12  p-0" id="lazy_load_slider">
                    {{--HostExperienceBladeCommentStart
                    @include('host_experiences.home_slider', ['title_text'=> trans('experiences.home.experiences'), 'see_all_link' => url('s?current_refinement=Experiences'),'category_id'=> 'all_exp' ])
                    HostExperienceBladeCommentEnd--}}

                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nwt_slid p-0" ng-if="reservation.length > 0">
                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl" style="padding:0px;     margin: 45px 0px 15px;">
                       <h3 class="rowHeader pull-left"><!-- react-text: 38121  {{ trans('messages.header.justbooked') }}<!-- /react-text </h3>
                   <!--    <div class="seeMoreContainer_11b8zgn pull-right">

                        <a href="{{ url('s') }}" ng-if="reservation.length > 3">
                         <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">
                           <span class="text_13lu1ne"><span>{{ trans('messages.header.seeall') }}</span></span>
                           <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;"><path fill-rule="evenodd" d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z"></path></svg>
                         </button></a>


                       </div>
                     </div>

                     <div class="home-bx-slider1 col-md-12 col-lg-12 col-sm-12 col-xs-12 " style="position:relative;padding:0px;" >

                       <div class="owl-carousel cate1">
                        <div class="cateimg"  ng-repeat="fetch_data in reservation">

                          <a href=" @{{ url+fetch_data.room_id }}">
                            <img ng-src="@{{ fetch_data.rooms.photo_name }} " >
                          </a>

                          <div class="panel-body panel-card-section">
                            <div class="media">
                              <div class="category_city hm_cate">
                                <span class="pull-left">@{{ fetch_data.rooms.room_type_name }}</span>
                                <!-- <span class="pull-left dot-cont">·</span>
                                <span class="pull-left">@{{ fetch_data.rooms.beds }} @{{ fetch_data.rooms.bed_lang }}</span> -->
                  <!--            </div>

                              <a href=" @{{ url+fetch_data.room_id }}"   target="listing_10001" class="text-normal" style="text-decoration:none !important;">
                                <h3 title="@{{ fetch_data.rooms.name}}" itemprop="name" class="h5 listing-name text-truncate row-space-top-1" style="width:95%;" ng-if=" fetch_data.rooms.name">

                                  @{{ fetch_data.rooms.name}}

                                </h3>
                              </a>
                              <div class="exp_price"><span ng-bind-html="fetch_data.currency.symbol"></span>
                               @{{ fetch_data.rooms.rooms_price.month }}
                               {{ trans("messages.service_host_rule.per_month") }}
                               <span ng-if="fetch_data.rooms.booking_type == 'instant_book'"> <i class="icon icon-instant-book icon-beach"></i></span>
                             </div>
                             <div itemprop="description" class="pull-left text-muted rt_set listing-location text-truncate"><a href=" @{{ url+fetch_data.room_id }}" class="text-normal link-reset pull-left ">
                              <span class="pull-left" ng-bind-html="fetch_data.rooms.overall_star_rating">

                              </span>
                              <a href=" @{{ url+fetch_data.room_id }}">
                                <span class="pull-left mr_mb" style="padding-left: 5px;" >
                                  <span class="pull-left r-count ng-binding " ng-if="fetch_data.rooms.reviews_count > 0" style="font-size:15px;color:#555;"> @{{ fetch_data.rooms.reviews_count }} </span>
                                  <span ng-if="fetch_data.rooms.overall_star_rating!=''" class="pull-left r-label ng-binding" style="font-size:12px;color:#555;">
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
                  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl " style="padding:0px;     margin: 45px 0px 15px;">
                    <h3 class="rowHeader pull-left"><!-- react-text: 38121 {{ trans('messages.header.recommend') }}<!-- /react-text </h3>
             <!--       <div class="seeMoreContainer_11b8zgn pull-right">


                      <a href="{{ url('s') }}" ng-if="recommented.length > 3"><button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">

                        <span class="text_13lu1ne"> <span>{{ trans('messages.header.seeall') }}</span></span>


                        <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;"><path fill-rule="evenodd" d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z"></path></svg>
                      </button></a>


                    </div>
                  </div>
                  <div class="home-bx-slider1 col-md-12 col-lg-12 col-sm-12 col-xs-12 " style="position:relative;padding:0px;">

                    <div class="owl-carousel cate2">

                      <div class="cateimg" ng-repeat="reservation in recommented"><a href=" @{{ url+reservation.id }}"><img ng-src="@{{ reservation.photo_name }}" /></a>

                        <div class="panel-body panel-card-section">
                          <div class="media">
                            <div class="category_city hm_cate">
                              <span class="pull-left">@{{ reservation.room_type_name }}</span>
                              <!-- <span class="pull-left dot-cont">·</span>
                              <span class="pull-left">@{{ reservation.beds }} @{{ reservation.bed_lang }}</span> -->
                 <!--           </div>
                            <a href=" @{{ url+reservation.id }}" target="listing_10001" class="text-normal" style="text-decoration:none !important;">

                              <h3 title="@{{reservation.name}}" itemprop="name" class="h5 listing-name text-truncate row-space-top-1 ng-binding" style="width:95%;">
                               @{{ reservation.name}}
                             </h3>
                           </a>
                           <div class="exp_price">
                            <span ng-bind-html="reservation.rooms_price.currency.symbol"></span>@{{ reservation.rooms_price.month }}
                            {{ trans("messages.service_host_rule.per_month") }}

                            <span ng-if="reservation.booking_type == 'instant_book'"> <i class="icon icon-instant-book icon-beach"></i></span>

                          </div>
                          <div itemprop="description" class="rt_set pull-left text-muted listing-location text-truncate"><a href="" class="text-normal link-reset pull-left">

                            <span class="pull-left" >
                              <span class="pull-left ng-binding" ng-bind-html="reservation.overall_star_rating">
                              </span>
                            </span>

                            <span class="pull-left" style="padding-left: 5px;color:#555;">
                              <a href=" @{{ url+reservation.id }}">
                                <span ng-if="reservation.reviews_count > 0" class="pull-left r-count ng-binding" style="font-size:15px;color:#555;">
                                  @{{ reservation.reviews_count }}
                                </span><span ng-if="reservation.overall_star_rating" class="pull-left r-label ng-binding" style="color:#555;">
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
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl" style="padding:0px;     margin: 45px 0px 15px;">
              <h3 class="rowHeader pull-left"><!-- react-text: 38121{{ trans('messages.header.most_viewed') }}<!-- /react-text </h3>
        <!--      <div class="seeMoreContainer_11b8zgn pull-right">

                <a href="{{ url('s') }}" ng-if="most_viewed.length > 3">
                  <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">
                    <span class="text_13lu1ne"><span>{{ trans('messages.header.seeall') }}</span> </span>
                    <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;"><path fill-rule="evenodd" d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z"></path></svg>
                  </button>
                </a>

              </div>
            </div>

            <div class="home-bx-slider col-md-12 col-lg-12 col-sm-12 col-xs-12 " style="position:relative;padding:0px;">
              <div class="owl-carousel cate3">

               <div class="cateimg" ng-repeat="view_count in most_viewed"><a href=" @{{ url+view_count.id }}"><img ng-src="@{{ view_count.photo_name}}" /></a>
                <div class="panel-body panel-card-section">
                  <div class="media">
                    <div class="category_city hm_cate">
                      <span class="pull-left">@{{ view_count.room_type_name }}</span>
                     <!--  <span class="pull-left dot-cont">·</span>
                      <span class="pull-left">@{{ view_count.beds }} @{{ view_count.bed_lang }}</span> -->
             <!--       </div>
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
                      <span class="pull-left" >

                        <span class="pull-left ng-binding" ng-bind-html=" view_count.overall_star_rating">

                        </span>
                      </span>
                      <a href=" @{{ url+view_count.id }}">
                        <span class="pull-left rw_view" style="padding-left: 5px; ">
                          <span ng-if="view_count.reviews_count" class="pull-left r-count ng-binding" style="font-size:15px;color:#555;"> @{{ view_count.reviews_count }}</span>
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

      </div>-->
      

      {{--HostExperienceBladeCommentStart
      <div ng-repeat="featured_category in featured_host_experience_categories">
        <div class="lazy-load-div1 lazy-load1 col-md-12 col-lg-12 col-sm-12 col-xs-12  p-0" id="lazy_load_slider" ng-if="featured_category.all_host_experiences_count > 0">
         @include('host_experiences.home_category_slider')
        </div>
      </div>
     HostExperienceBladeCommentEnd--}}
     <div class="discovery-section explore_community exploer_banner page-container-no-padding" id="discover-recommendations" ng-init="city_count=city_count-1 ;">
      <div class="section-intro text-center row-space-6 row-space-top-8" ng-if="home_city_explore.length!=0">
        <h2 class="row-space-1">
         <!-- <strong>{{ trans('messages.home.explore_world') }}</strong>-->
         <strong>How does it work?</strong>
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
          <div ng-repeat="explore in home_city_explore " ng-init="j=6;x=7">
            <div  ng-class="$index % 10 == 0 || $index == j || $index == j+10 ? 'col-lg-8 col-md-6 col-sm-12 rm-padding-sm' : 'col-lg-4 col-md-6 col-sm-12 rm-padding-sm'" >
              <div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " style="background-image:url('@{{ explore.image_url }}');">
                <a href="@{{ explore.search_url }}" class="link-reset" data-hook="discovery-card">
                  <div class="va-container va-container-v va-container-h">
                    <div class="va-middle text-center text-contrast">
                      <div class="h2">
                        <strong>
                         @{{ explore.name }}
                       </strong>
                     </div>
                   </div>
                 </div>
               </a>
             </div> 
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="col-lg-12 col-md-12 col-sm-12 our-community p-0">
   <div class="row">
     <div class="discovery-section explore_community page-container-responsive page-container-no-padding" style="padding:0px;">
     <div class="col-lg-12 nopad text-center" style="padding: 0;" ng-if="our_community.length!=0">
        <h2 class="row-space-1" style="padding:30px 0px 15px;">
        <strong>
          {{trans('messages.home.our_community')}}
        </strong>
        </h2>
        <div class="col-lg-4 pos-rel com-img pad-left col-md-4 new_our_community" ng-repeat="our_community in our_community ">
         <div class="por_ab">
          <a class="com-link-img" href="@{{our_community.link}}" target="_blank" style="background: url(@{{our_community.image_url}});">
          </a>
          <div class="com-header">
            <!-- <a>Travelling</a> -->
          </div>
          <div class="com-sub">
            <h2 class="over-head" style="width:90% !important;">@{{our_community.title}}</h2>
            <p class="over-head" style="width:90% !important;" ng-bind-html="our_community.description"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
 
<div class="panel" style="padding:0px;float: left; margin:0 15px; width:auto;">
 <div class="col-lg-12 col-md-12 col-sm-12" style="background:#ffffff;">
   <div class="col-md-4 columnn-foot">
    <div class="columnContentContainer">
     <div class="iconContainer">
      <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display:block;fill:currentColor;height:33px;width:33px;" data-reactid="431"><path fill-rule="evenodd" d="M22.786 18.264l-3.44-3.44a1.65 1.65 0 0 0-2.34.004l-.519.518-1.225 1.225a.657.657 0 0 1-.937-.007L7.526 9.766a.658.658 0 0 1-.007-.937l1.743-1.743c.647-.647.65-1.695.004-2.34l-3.44-3.44a1.648 1.648 0 0 0-2.337 0L.893 3.9c-.59.59-.83 1.646-.54 2.425.009.032.042.133.092.276.083.236.183.506.3.806a33.12 33.12 0 0 0 1.235 2.762c1.399 2.788 3.15 5.372 5.28 7.504 2.346 2.344 4.818 4.008 7.265 5.106.86.386 1.656.673 2.37.877.436.124.75.193.926.22.752.185 1.793-.105 2.37-.681l1.366-1.367.707-.707.522-.521a1.652 1.652 0 0 0 0-2.337zM4.196 2.013a.648.648 0 0 1 .922 0l3.44 3.44a.654.654 0 0 1-.003.926l-.518.518-.069-.07-4.225-4.224-.069-.069.522-.521zm15.287 20.476c-.33.33-1.012.52-1.464.41a8.24 8.24 0 0 1-.849-.204 16.65 16.65 0 0 1-2.236-.827c-2.339-1.05-4.71-2.645-6.966-4.901-2.048-2.048-3.74-4.546-5.094-7.246a32.023 32.023 0 0 1-1.197-2.677 23.004 23.004 0 0 1-.379-1.042c-.16-.433-.014-1.078.302-1.394l1.367-1.367.069.07L7.26 7.534l.069.069-.518.518a1.658 1.658 0 0 0 .007 2.35l6.799 6.799a1.657 1.657 0 0 0 2.35.007l.519-.518 4.363 4.362-1.367 1.367zm2.596-2.596l-.522.522-4.363-4.362.518-.518a.65.65 0 0 1 .926-.004l3.44 3.44a.652.652 0 0 1 0 .922z" data-reactid="432"/></svg>
    </div>
    <div class="textContainer">
      <div class="columnHeader" ><span >24/7 customer support</span></div>
      <div ><span class="content-font">If you need help while traveling or hosting, contact us at our toll free number: {{$customer_support}}</span></div>
    </div>
  </div>
</div>
<div class="col-md-4 columnn-foot" style="">
  <div class="columnContentContainer">
   <div class="iconContainer">
    <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display:block;fill:currentColor;height:33px;width:33px;" data-reactid="441"><path d="M12 4a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 15a7 7 0 1 1 0-14 7 7 0 0 1 0 14zm10.334-4.27c.02-.074.04-.147.07-.222.013-.032.027-.068.039-.094.058-.123.124-.236.206-.327.073-.062.469-.39.536-.45.555-.486.815-.935.815-1.628 0-.682-.253-1.13-.79-1.612-.067-.061-.478-.409-.596-.518a1.014 1.014 0 0 1-.103-.147c-.006-.012-.006-.024-.012-.035a1.955 1.955 0 0 1-.116-.257c-.01-.026-.015-.05-.023-.077a1.885 1.885 0 0 1-.105-.513 1.373 1.373 0 0 1 .01-.367c.01-.019.036-.094.068-.181-.039.105.14-.38.179-.496.067-.199.111-.368.136-.538a1.876 1.876 0 0 0-.251-1.26c-.385-.668-.827-.883-1.75-1.052-.395-.072-.377-.069-.515-.1-.056-.018-.12-.057-.183-.093l-.008-.007a1.671 1.671 0 0 1-.185-.128l-.025-.02a2.524 2.524 0 0 1-.193-.175 2.453 2.453 0 0 1-.203-.241c-.03-.042-.062-.086-.08-.118a1.304 1.304 0 0 1-.123-.253l-.075-.434c-.16-.939-.374-1.385-1.05-1.775a1.883 1.883 0 0 0-1.227-.257 3.008 3.008 0 0 0-.549.13c-.1.033-.468.163-.514.18a5.07 5.07 0 0 1-.247.082c-.086.016-.185.007-.282.002-.07-.003-.15-.01-.24-.026a2.208 2.208 0 0 1-.218-.057 1.957 1.957 0 0 1-.222-.07c-.032-.013-.068-.027-.094-.039a1.366 1.366 0 0 1-.327-.206c-.062-.073-.39-.469-.45-.536C13.153.26 12.703 0 12.01 0c-.682 0-1.13.253-1.612.79-.06.067-.409.478-.518.596a1.011 1.011 0 0 1-.147.103c-.012.006-.024.006-.035.012-.043.025-.136.07-.258.116-.025.01-.05.015-.075.023a2.2 2.2 0 0 1-.353.089 2.132 2.132 0 0 1-.161.016 1.371 1.371 0 0 1-.367-.01c-.019-.01-.094-.036-.181-.068.105.039-.38-.14-.496-.179a3.066 3.066 0 0 0-.538-.136 1.876 1.876 0 0 0-1.26.251c-.668.385-.883.827-1.052 1.75-.072.395-.069.377-.1.515-.018.056-.057.12-.093.183l-.007.008a1.677 1.677 0 0 1-.128.185l-.02.025c-.049.06-.11.127-.175.193a2.45 2.45 0 0 1-.24.202c-.043.031-.087.063-.12.082a1.3 1.3 0 0 1-.252.122l-.434.075c-.939.16-1.385.374-1.775 1.05a1.883 1.883 0 0 0-.257 1.227c.022.173.065.346.13.549.033.1.163.468.18.514.032.09.059.17.083.247.015.086.006.185 0 .282-.002.07-.01.15-.025.24a2.204 2.204 0 0 1-.057.218c-.02.074-.04.147-.07.222-.013.032-.027.068-.039.094a1.368 1.368 0 0 1-.206.327c-.073.062-.469.39-.536.45C.26 10.847 0 11.297 0 11.99c0 .682.253 1.13.79 1.612.067.06.478.409.596.518.032.036.067.087.103.147.006.011.006.024.012.035.025.043.07.136.116.257.01.026.015.05.023.077a1.901 1.901 0 0 1 .105.513c.009.126.013.252-.01.367-.01.019-.036.094-.068.181.039-.105-.14.38-.179.496a3.052 3.052 0 0 0-.136.538c-.064.436.01.843.251 1.26.385.667.827.883 1.75 1.052.395.072.377.069.515.1.056.018.12.056.183.093l.008.007c.048.027.113.072.185.128l.025.02c.06.048.126.11.193.175a2.486 2.486 0 0 1 .203.24c.03.043.062.087.08.119.05.083.095.167.123.253l.075.434c.16.939.374 1.385 1.05 1.775.405.234.803.311 1.227.257.173-.022.346-.065.549-.13.1-.033.468-.163.514-.18.09-.032.17-.059.247-.083.086-.015.185-.006.282 0 .07.002.15.01.24.025.072.014.145.034.218.057.074.02.147.04.222.07.032.013.068.027.094.039.123.058.236.124.327.206.062.073.39.469.45.536.485.555.935.815 1.628.815.682 0 1.13-.253 1.612-.79.06-.067.409-.478.518-.596.036-.032.087-.067.147-.103.011-.006.024-.006.035-.012a1.96 1.96 0 0 1 .257-.116c.026-.01.05-.015.076-.023a1.891 1.891 0 0 1 .514-.105c.126-.009.252-.013.367.01.019.01.094.036.181.068-.105-.039.38.14.496.179.199.067.368.111.538.136.436.064.843-.01 1.26-.251.668-.385.883-.827 1.052-1.75.072-.395.069-.377.1-.515.018-.056.057-.12.093-.183l.007-.008a1.674 1.674 0 0 1 .148-.21c.048-.06.11-.126.175-.193a2.51 2.51 0 0 1 .241-.203c.042-.03.086-.062.118-.08.083-.05.167-.095.253-.123l.434-.075c.939-.16 1.385-.374 1.775-1.05.234-.405.311-.803.257-1.227a3.006 3.006 0 0 0-.13-.549c-.033-.1-.163-.468-.18-.514a7.81 7.81 0 0 1-.083-.247c-.015-.086-.006-.185 0-.282.002-.07.01-.15.025-.24a2.21 2.21 0 0 1 .057-.219zm-.392-1.348c-.125.137-.217.27-.297.405-.002.005-.007.007-.009.01a2.412 2.412 0 0 0-.086.166c-.012.025-.028.048-.04.073-.01.026-.012.049-.023.074-.018.043-.035.08-.053.128a3.324 3.324 0 0 0-.129.445l-.006.034a2.414 2.414 0 0 0-.024.954l.012.056c.04.133.07.225.108.331.253.72.234.664.258.85a.887.887 0 0 1-.131.6c-.204.352-.405.448-1.078.564-.381.065-.376.064-.525.096-.15.048-.274.116-.401.183-.024.01-.05.01-.072.024a.528.528 0 0 0-.042.029c-.04.023-.076.05-.113.076-.09.06-.184.135-.289.225-.028.025-.061.044-.089.07-.02.019-.03.036-.05.055-.027.026-.053.044-.08.072-.042.043-.071.093-.11.138a3.07 3.07 0 0 0-.15.188 2.472 2.472 0 0 0-.137.202l-.011.016c-.005.008-.004.017-.008.025a2.17 2.17 0 0 0-.188.4c-.046.2-.043.182-.119.596-.12.662-.219.862-.568 1.064-.22.126-.4.16-.615.128-.184-.027-.12-.006-.838-.266a8.838 8.838 0 0 0-.265-.092 2.544 2.544 0 0 0-.487-.052c-.009 0-.017-.005-.026-.005-.024 0-.059.007-.084.008a2.626 2.626 0 0 0-.382.037c-.044.007-.084.013-.13.023a3.246 3.246 0 0 0-.427.123c-.023.008-.039.017-.06.025-.038.014-.071.017-.109.033-.02.009-.034.025-.054.034a2.44 2.44 0 0 0-.217.109c-.044.026-.077.062-.11.098-.09.06-.193.1-.272.172-.157.168-.51.584-.557.636-.31.344-.51.458-.868.458-.362 0-.563-.116-.877-.474-.046-.052-.378-.453-.496-.584a2.422 2.422 0 0 0-.406-.297c-.004-.002-.006-.007-.01-.009a2.325 2.325 0 0 0-.163-.085c-.026-.012-.05-.029-.075-.04-.026-.012-.049-.013-.074-.024-.043-.018-.08-.035-.128-.053a3.331 3.331 0 0 0-.445-.129l-.035-.006a2.416 2.416 0 0 0-.953-.024l-.056.012a6.68 6.68 0 0 0-.331.108c-.72.253-.664.234-.85.258a.887.887 0 0 1-.6-.131c-.352-.204-.448-.405-.564-1.078-.065-.381-.064-.376-.096-.525-.048-.15-.116-.274-.183-.401-.01-.024-.011-.05-.024-.072a.528.528 0 0 0-.029-.042c-.023-.04-.05-.076-.076-.113a3.08 3.08 0 0 0-.225-.289c-.025-.028-.044-.061-.07-.089-.019-.02-.036-.03-.055-.05-.026-.027-.044-.053-.072-.08-.043-.042-.093-.071-.137-.11a3.068 3.068 0 0 0-.19-.15c-.066-.048-.131-.096-.2-.137l-.017-.011c-.008-.005-.017-.004-.025-.008a2.17 2.17 0 0 0-.4-.188c-.2-.046-.182-.043-.596-.119-.662-.12-.862-.219-1.064-.568a.88.88 0 0 1-.128-.615c.027-.184.006-.12.266-.838.035-.096.065-.18.092-.265.036-.167.049-.328.052-.487 0-.01.005-.017.005-.026 0-.024-.007-.058-.008-.084a2.63 2.63 0 0 0-.037-.382c-.007-.044-.013-.084-.023-.13a3.249 3.249 0 0 0-.123-.427c-.008-.023-.017-.039-.025-.06-.014-.038-.017-.071-.033-.109-.009-.02-.025-.034-.034-.054a2.46 2.46 0 0 0-.109-.217c-.026-.045-.062-.077-.098-.11-.06-.09-.1-.193-.172-.272-.168-.157-.584-.51-.636-.557-.344-.31-.458-.51-.458-.868 0-.362.116-.563.474-.877.052-.046.453-.379.584-.496.125-.137.217-.27.297-.406.002-.004.007-.006.009-.01.025-.042.055-.1.085-.165.012-.025.029-.048.04-.073.011-.026.013-.048.024-.074.018-.042.035-.08.053-.128a3.33 3.33 0 0 0 .129-.445l.006-.034c.066-.317.084-.637.024-.954l-.012-.056a6.659 6.659 0 0 0-.108-.331c-.253-.72-.234-.664-.258-.85a.887.887 0 0 1 .131-.6c.204-.352.405-.448 1.078-.564.381-.065.376-.064.525-.096.15-.048.274-.116.401-.183.024-.01.049-.01.072-.024.012-.007.03-.021.042-.029.04-.023.076-.05.113-.076.09-.06.184-.135.288-.225.029-.025.062-.043.09-.07.02-.019.031-.036.05-.055.027-.026.053-.044.08-.072.042-.043.071-.093.11-.138.056-.067.106-.127.15-.188.048-.066.096-.132.137-.202l.011-.016c.005-.008.004-.017.008-.025.073-.13.143-.26.188-.4.046-.2.043-.182.119-.596.12-.662.219-.862.568-1.064a.88.88 0 0 1 .615-.128c.184.027.12.006.838.266.096.035.18.065.265.092.167.036.328.049.487.052.009 0 .017.005.026.005.024 0 .058-.007.084-.008.13-.003.257-.016.382-.037.044-.007.084-.013.13-.023.145-.032.287-.071.427-.123l.061-.025c.037-.014.07-.017.108-.033.02-.009.034-.025.054-.034.088-.04.164-.078.217-.11a.465.465 0 0 0 .11-.097c.09-.06.193-.1.272-.172.157-.168.51-.584.557-.636.31-.345.51-.458.868-.458.362 0 .563.116.877.474.046.052.378.453.496.584.137.125.27.217.405.297.004.002.007.007.01.009.043.025.1.054.165.085.025.012.049.029.074.04.026.012.049.013.074.024.043.018.08.035.128.053.147.055.296.095.445.129l.035.006c.316.066.636.084.953.024l.056-.012c.133-.04.225-.07.331-.108.72-.253.664-.234.85-.258a.887.887 0 0 1 .6.131c.352.204.448.405.564 1.078.065.381.064.376.096.525.048.15.116.274.183.4.01.025.01.05.024.073.007.012.021.03.029.042.023.04.05.075.075.113.061.09.136.184.226.289.025.028.044.061.07.089.019.02.036.03.055.05.026.027.044.053.072.08.043.042.093.071.138.11a3 3 0 0 0 .39.287l.016.011c.008.005.017.004.025.008.13.073.26.143.4.188.2.046.182.043.596.119.662.12.862.219 1.064.567.126.22.16.4.128.616-.027.184-.006.12-.266.837a8.839 8.839 0 0 0-.092.266 2.542 2.542 0 0 0-.052.487c0 .01-.005.017-.005.026 0 .024.007.058.008.084.003.13.015.256.037.382.007.044.013.084.023.13.032.145.071.287.123.427.008.023.017.039.025.06.014.037.017.071.033.109.009.02.025.034.035.054.04.088.077.164.108.217a.492.492 0 0 0 .098.11c.06.09.1.193.172.272.168.157.584.51.636.557.344.31.458.51.458.868 0 .362-.116.563-.474.877-.052.046-.453.378-.584.496zm-8.895-2.685C13.617 10.345 14 9.72 14 9a2 2 0 1 0-4 0c0 .72.383 1.345.953 1.697l-1.722 1.378a.663.663 0 0 0-.231.494v3.862c0 .302.229.569.556.569h4.888a.566.566 0 0 0 .556-.57v-3.86a.635.635 0 0 0-.231-.495l-1.722-1.378zM12 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm2 8h-4v-3.26l2-1.6 2 1.6V16z" fill-rule="evenodd" data-reactid="442"/></svg>
  </div>
  <div class="textContainer">
    <div class="columnHeader"><span >₹6,00,00,000 host guarantee</span></div>
    <div >
     <span class="content-font">
      <!-- react-text: 449 -->Hosts are protected against property damages for up to ₹6,00,00,000. <!-- /react-text -->
      <span>
       <a href="{{ url('host_guarantee') }}" target="_blank" >
        <!-- react-text: 452 -->{{trans('messages.search.learn_more')}}<!-- /react-text -->
      </a>
    </span>
  </span>
</div>
</div>
</div>
</div>
<div class="col-md-4 columnn-foot" >
  <div class="columnContentContainer">
   <div class="iconContainer">
    <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display:block;fill:currentColor;height:33px;width:33px;" data-reactid="455"><path d="M22.5 2h-21C.724 2 0 2.724 0 3.5v14.986C0 19.273.72 20 1.5 20h10.672l1.362 1.363a2 2 0 0 0 2.83.001c.379-.379.57-.87.582-1.364H22.5c.78 0 1.5-.727 1.5-1.514V3.5c0-.776-.724-1.5-1.5-1.5zm-6.843 18.657a1 1 0 0 1-1.416-.001l-2.826-2.826a1 1 0 0 1 1.414-1.414l2.827 2.825a.997.997 0 0 1 0 1.416zM23 18.486c0 .237-.275.514-.5.514h-5.8a1.99 1.99 0 0 0-.337-.466l-2.826-2.826a1.996 1.996 0 0 0-2.426-.304l-.736-.736A4.97 4.97 0 0 0 12 11a5 5 0 1 0-5 5c.942 0 1.812-.276 2.564-.729l.082.083.757.756a1.993 1.993 0 0 0 .305 2.427l.464.463H1.5c-.225 0-.5-.277-.5-.514V3.5c0-.224.276-.5.5-.5h21c.224 0 .5.276.5.5v14.986zM7 15a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm1.854-4.854a.5.5 0 0 1 0 .708l-1.951 1.95a.568.568 0 0 1-.808-.005l-.93-.985a.5.5 0 1 1 .728-.686l.617.654 1.636-1.636a.5.5 0 0 1 .708 0zM21 7.5a.5.5 0 0 1-.5.5h-5.974a.5.5 0 0 1 0-1H20.5a.5.5 0 0 1 .5.5zm0 3a.5.5 0 0 1-.5.5h-5.974a.5.5 0 0 1 0-1H20.5a.5.5 0 0 1 .5.5zm0 3a.5.5 0 0 1-.5.5h-5.974a.5.5 0 0 1 0-1H20.5a.5.5 0 0 1 .5.5z" fill-rule="evenodd" data-reactid="456"/></svg>
  </div>
  <div class="textContainer">
    <div class="columnHeader" ><span >Verified ID</span></div>
    <div ><span class="content-font">We aim to build a trusted community by giving you more info when you're deciding who to host or stay with.</span></div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

</main>
@stop



