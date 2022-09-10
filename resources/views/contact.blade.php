@extends("layouts.header")

@section('content')
    <!-- ==========================================================
2.*Hero_area start
============================================================ -->
    <div class="romana_allPage_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="romana_allPage_text text-center">
                        <h1>contact</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a><span></span></li>
                            <li><a href="#">contact</a></li>
                        </ol>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
    <!-- ==========================================================
    3.*romana_contact_form_area start
    ============================================================ -->
    <div class="romana_contact_form_area romana_section_padding">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-sm-12">
                    <div id="g_Map"></div>
                </div>
                <!-- column End -->
                <div class="col-md-6 col-sm-12">
                    <div class="romana_contact_form romana_common_form">
                        <form action="https://formspree.io/crazycafe@gmail.com" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="field">
                                        <label class="placeholder" for="FistName">
                                            First name
                                        </label>
                                        <input id="FistName" type="text" name="name" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder" for="userEmail">
                                            Email Address
                                        </label>
                                        <input id="userEmail" type="text" name="_replyto" />
                                    </div>
                                </div>
                                <!-- column End -->
                                <div class="col-sm-6">
                                    <div class="field">
                                        <label class="placeholder" for="LastName">
                                            Last name
                                        </label>
                                        <input id="LastName" type="text" name="LastName" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder" for="userPhone">
                                            Phone Number
                                        </label>
                                        <input id="userPhone" type="text" name="userPhone" />
                                    </div>
                                </div>
                                <!-- column End -->
                            </div>
                            <!-- row End -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="field text-field">
                                        <label class="placeholder">
                                            Message
                                        </label>
                                        <textarea cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="romana_submit_btn">
                                        <input type="submit" value="Send">
                                    </div>
                                </div>
                                <!-- column End -->
                            </div>
                            <!-- row End -->
                        </form>
                    </div>
                    <!-- romana_registration form End -->
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
            <div class="romana_all_contact">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="romana_single_contact clearfix">
                            <div class="romana_contact_icon">
                                <a href="#"><i class="icofont icofont-ui-call"></i></a>
                            </div>
                            <div class="romana_contact_info text-center">
                                <p>+(00)111-222-333</p>
                                <p>+(00)44-556-6678</p>
                            </div>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-sm-4">
                        <div class="romana_single_contact clearfix">
                            <div class="romana_contact_icon">
                                <a href="#"><i class="icofont icofont-ui-message"></i></a>
                            </div>
                            <div class="romana_contact_info text-center">
                                <p>crazycafe.net@gmail.com</p>
                                <p>info@domainname.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-sm-4">
                        <div class="romana_single_contact clearfix">
                            <div class="romana_contact_icon">
                                <a href="#"><i class="icofont icofont-social-google-map"></i></a>
                            </div>
                            <div class="romana_contact_info text-center">
                                <p>21,ParkStreet Avenue</p>
                                <p>losAngeles, Newyork</p>
                            </div>
                        </div>
                    </div>
                    <!-- column End -->
                </div>
                <!-- row End -->
            </div>
        </div>
        <!-- container End -->
    </div>
    <!-- ==================================================
    4.*Footer_area start
    =================================================== -->
@endsection
@section('script')
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA"></script>
    <script type="text/javascript">
        var map;
        var latlng = new google.maps.LatLng(41.901630, 12.460245);
        var stylez = [
            {
                featureType: "all",
                elementType: "all",
                stylers: [
                    {
                        saturation: -100
                    } // <-- THIS
                ]
            }
        ];
        var mapOptions = {
            zoom: 13,
            center: latlng,
            scrollwheel: false,
            scaleControl: false,
            disableDefaultUI: true,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
            }
        };
        map = new google.maps.Map(document.getElementById("g_Map"), mapOptions);
        var geocoder_map = new google.maps.Geocoder();
        var address = 'Rome';
        geocoder_map.geocode({
            'address': address
        }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);

                var marker = new google.maps.Marker({
                    map: map,
                    icon: 'images/map.png',
                    position: map.getCenter()
                });

                var contentString = 'Rome';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
        var mapType = new google.maps.StyledMapType(stylez, {
            name: "Grayscale"
        });
        map.mapTypes.set('gMap', mapType);
        map.setMapTypeId('gMap');
    </script>
    <!-- ================= Bootstrap min Js =========== -->
    <script src="js/bootstrap.min.js"></script>

    <!-- ================= owl carousel min Js ======== -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- ================= progressbar Js ======== -->
    <script src="js/jQuery-plugin-progressbar.js"></script>

    <!-- ================= Active Js ================== -->
    <script src="js/active.js"></script>
@endsection
