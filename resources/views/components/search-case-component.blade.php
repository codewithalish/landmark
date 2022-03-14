<div class="section section-static section-bg-2 pt-9 pb-9">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <div class="wrap-title">
                        <h3 class="title">
                            <span class="first-word">جستجوی</span> ملک
                        </h3>
                        <p class="sub-title">
                            <i class="icon-decotitle"></i>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                        </p>
                    </div>
                </div>
                <form class="advanced-search-property" method="get" action="/cases">
                    <div class="advanced-search-property-wrap">
                        <div class="row">
                            <div class="item-wrap col-md-3">
                                <input type="text" id="keyword" name="q" placeholder="عبارت مورد جستجو ..."
                                       class="keyword" autocomplete="off">
                            </div>
                            <div class="item-wrap col-md-3">
                                <div class="form-group keyword">
                                    <input type="number" id="keyword" name="area_min"
                                           placeholder="متراژ از." class="keyword"
                                           autocomplete="off">
                                </div>
                                <div class="form-group keyword">
                                    <input type="number" id="keyword" name="area_max"
                                           placeholder="متراژ تا" class="keyword"
                                           autocomplete="off">
                                </div>
                            </div>
                            <div class="item-wrap col-md-3">
                                <select class="form-control" name="contract">
                                    <option value="">نوع قرارداد</option>
                                    <option value="FOR_SALE" >برای فروش</option>
                                    <option value="FOR_RENT" >برای اجاره</option>

                                </select>
                            </div>
                            <div class="item-wrap col-md-3">
                                <select class="form-control" name="type" >
                                    <option value="">همه انواع ملک</option>
                                    <option value="APARTMENT" >آپارتمان</option>
                                    <option value="VILLA" >ویلایی</option>
                                    <option value="FIELD" >زمین</option>
                                    <option value="ُSHARED_HOUSE" >منزل مشترک</option>
                                </select>
                            </div>
                            <div class="item-wrap col-md-3">
                                <select class="form-control" name="room_number">
                                    <option value="" selected>تعداد اتاق خواب</option>
                                    <option>1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                    <option >5</option>
                                </select>
                            </div>

                            <div class="item-wrap col-md-3">
                                <select class="form-control" name="parking_number">
                                    <option value="">هر تعداد پارکینگ</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="item-wrap col-md-3">
                                <div class="price_slider_wrapper widget_price_filter">
                                    <div class="price_slider" style="display:none;"></div>
                                    <div class="price_slider_amount" data-currency="تومان" data-step="100000">
                                        <input type="hidden" id="min_price" name="min_price"
                                               data-min="500000"
                                               placeholder="حداقل قیمت">
                                        <input type="hidden" id="max_price" name="max_price"
                                               data-max="600000000"
                                               placeholder="حداکثر قیمت">
                                        <div class="price_label" style="display:none;">
                                            <span class="from"></span> - <span class="to"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row box-action">
{{--                            <div class="col-md-9 box-show-features">--}}
{{--                                <span class="show-features">فیلتر های بیشتر</span>--}}
{{--                            </div>--}}
                            <div class="col-md-3 box-button">
                                <button type="submit" class="button">
                                    <span class="ion-search"></span> جستجوی ملک
                                </button>
                            </div>
                        </div>
{{--                        <div class="row box-features">--}}
{{--                            <div class="col-md-12 box-features-content">--}}
{{--                                <div class="item-wrap">--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_basement" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">زیرزمین</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_swimming_pool" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">استخر شنا</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_cooling_system" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">سیستم سرمایش</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_fence" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">حصار</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_gas_heat" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">گرمایش گازی</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_balcony" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">بالکن</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_central_vacuum" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">تهویه مرکزی</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_security_system" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">سیستم امنیتی</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_cable_tv_available" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">تلویزیون کابلی</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_lake_view" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">منظره دریاچه</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_attic" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">اتاق زیر شیروانی</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_solar_heat" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">گرمایش خورشیدی</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_golf_course" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">زمین گلف</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_wet_bar" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">رخت شویی</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_backyard" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">حیاط خلوت</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_skylights" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">پنجره های سقنی</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_office_den" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">دفتر کار</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">--}}
{{--                                        <div class="checked">--}}
{{--                                            <input type="checkbox" name="property_fireplace" value="1">--}}
{{--                                            <label class="checkbox"></label>--}}
{{--                                        </div>--}}
{{--                                        <label class="text">جعبه آتش نشانی</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
