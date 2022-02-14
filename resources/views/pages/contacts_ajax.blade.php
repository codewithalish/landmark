@extends('layouts.masterPages.landmark')
@section('content')
    <div id="main">
        <div class="section mt-7 mb-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-information">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <h3 class="title">در ارتباط باشید</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی</p>
                                    <div class="wrap-info">
                                        <div class="info-item">
                                            <span class="info-icon"><i class="fa fa-map-marker"></i></span>
                                            <p class="info-text">تبریز، ولیعصر، پلاک 896</p>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-icon"><i class="fa fa-phone"></i></span>
                                            <p class="info-text ltr_text">(+1)-800-555-6789</p>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-icon"><i class="fa fa-envelope"></i></span>
                                            <p class="info-text">contact.us@sample.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">

                                    <livewire:contact/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <div id="googleMap" data-icon="images/icon_location.png" data-lat="38.066082" data-lon="46.323638"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

