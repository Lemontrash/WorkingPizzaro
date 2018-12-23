@extends('layout')

@section('body') <body class="store-locator-page"> @endsection

@section('content')
    <div id="page" class="hfeed site">

        <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" >
                        <div id="post-537" class="post-537 page type-page status-publish hentry">
                            <header class="entry-header">
                                <h1 class="entry-title">Store Locator</h1>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <div id="wpsl-wrap">

                                    <div id="wpsl-result-list" class="col-md-4 col-sm-6 col-lg-4 col-xs-12">
                                        <div id="wpsl-stores" >
                                            <ul>
                                                <li data-store-id="535">
                                                    <div>
                                                        <p>
                                                            <strong>Pizzaro</strong>
                                                            <span class="wpsl-street">27, Maraicoir Street</span>
                                                            <span>Chennai Tamil Nadu 600001</span>
                                                            <span class="wpsl-country">India</span>
                                                        </p>
                                                    </div>
                                                    <div class="wpsl-direction-wrap">2.9 km
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-lg-8 col-xs-12 map">
                                        <!-- <div id="wpsl-gmap" class="wpsl-gmap-canvas"></div> -->
                                        <div class="contact-map" >
                                            <iframe src="http://2gis.ua/odessa/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap" height="462" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- #post-## -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .col-full -->
        </div>
@endsection
