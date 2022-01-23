<div class="widget">
    <h3 class="widget-title">یافتن ملک</h3>
    <div class="advanced_search_property vertical">
        <div class="noo-map">
            <div class="gsearch">
                <div class="gsearch-wrap">
                    <form class="gsearchform" action="/search" method="get">
                        <div class="gsearch-content">
                            <div class="gsearch-field">
                                <div class="form-group keyword">
                                    <input type="text" id="keyword" name="q" placeholder="عبارت مورد جستجو ..."
                                           value="{{$request->get('q')}}" class="keyword" autocomplete="off">
                                </div>

                                <div class="form-group keyword">
                                    <input type="number" id="keyword" name="area_min"
                                           value="{{$request->get('area_min')}}" placeholder="متراژ از." class="keyword"
                                           autocomplete="off">
                                </div>
                                <div class="form-group keyword">
                                    <input type="number" id="keyword" name="area_max"
                                           value="{{$request->get('area_max')}}" placeholder="متراژ تا" class="keyword"
                                           autocomplete="off">
                                </div>


                                <div class="form-group gtype">
                                    <div class="label-select">
                                        <select class="form-control" name="type" >
                                            <option value="">همه انواع ملک</option>
                                            <option value="APARTMENT" {{$request->get('type') == 'APARTMENT' ? 'selected' : ''}}>آپارتمان</option>
                                            <option value="VILLA" {{$request->get('type') == 'VILLA' ? 'selected' : ''}}>ویلایی</option>
                                            <option value="FIELD" {{$request->get('type') == 'FIELD' ? 'selected' : ''}}>زمین</option>
                                            <option value="ُSHARED_HOUSE" {{$request->get('type') == 'ُSHARED_HOUSE' ? 'selected' : ''}}>منزل مشترک</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ggarage">
                                    <div class="label-select">
                                        <select class="form-control" name="contract"
                                                >
                                            <option value="">نوع قرارداد</option>
                                            <option value="FOR_SALE" {{$request->get('contract') == 'FOR_SALE' ? 'selected' : ''}}>برای فروش</option>
                                            <option value="FOR_RENT" {{$request->get('contract') == 'FOR_RENT' ? 'selected' : ''}}>برای اجاره</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group gbed">
                                    <div class="label-select">
                                        <select class="form-control" name="room_number">

                                            <option value="" selected>تعداد اتاق خواب</option>
                                            <option {{$request->get('room_number') == 1 ? 'selected' : ''}}>1</option>
                                            <option {{$request->get('room_number') == 2 ? 'selected' : ''}}>2</option>
                                            <option {{$request->get('room_number') == 3 ? 'selected' : ''}}>3</option>
                                            <option {{$request->get('room_number') == 4 ? 'selected' : ''}}>4</option>
                                            <option {{$request->get('room_number') == 5 ? 'selected' : ''}}>5</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group ggarage">
                                    <div class="label-select">
                                        <select class="form-control" name="parking_number"
                                                >
                                            <option value="">هر تعداد پارکینگ</option>
                                            <option {{$request->get('parking_number') == 1 ? 'selected' : ''}}>1</option>
                                            <option {{$request->get('parking_number') == 2 ? 'selected' : ''}}>2</option>
                                            <option {{$request->get('parking_number') == 3 ? 'selected' : ''}}>3</option>
                                            <option {{$request->get('parking_number') == 4 ? 'selected' : ''}}>4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group gprice">
                                    <span class="gprice-label">قیمت (تومان)</span>
                                    <div class="price_slider_wrapper widget_price_filter">
                                        <div class="price_slider" style="display:none;"></div>
                                        <div class="price_slider_amount" data-currency="" data-step="100000">
                                            <input type="hidden" id="min_price" name="min_price"
                                                   value="{{$request->get('min_price')}}" data-min="500000"
                                                   placeholder="حداقل قیمت">
                                            <input type="hidden" id="max_price" name="max_price"
                                                   value="{{$request->get('max_price')}}" data-max="600000000"
                                                   placeholder="حداکثر قیمت">
                                            <div class="price_label" style="display:none;">
                                                <span class="from"></span> - <span class="to"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gsearch-action">
                                <div class="gsubmit">
                                    <button type="submit" class="button">
                                        <span class="ion-search"></span> جستجوی ملک
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
