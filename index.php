<html>
    <head>
        <!--CSS link-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--Google Maps API link-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.20"></script>

        <!-- use the existing file in the js folder -->
        <script>
            //defining the center of the map
            var center = new google.maps.LatLng(55.864237,-4.251806);


            function initialize() {
                var mapOptions = {
                    center: center,
                    zoom: 7,
                    disableDefaultUI: true,
                    styles: [{
                        featureType: 'poi',
                        stylers: [{ visibility: 'off' }]  // Turn off points of interest.
                    }, {
                        featureType: 'transit.station',
                        stylers: [{ visibility: 'off' }]  // Turn off bus stations, train stations, etc.
                    }],
                    disableDoubleClickZoom: true
                };

                var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);

                //pop up trends menu
                var content =       '<div class="trendsMenuContainer">' +
                    '<div class="cityTitle">' +
                    'CITY NAME' +
                    '</div>' +
                    '<div class="trendsGroup">' +
                    '<div class="trend">Trend1</div>' +
                    '<div class="trend">Trend2</div>' +
                    '<div class="trend">Trend3</div>' +
                    '<div class="trend">Trend4</div>' +
                    '</div>'+
                    '<div class="trendsGroup">' +
                    '<div class="trend">Trend5</div>' +
                    '<div class="trend">Trend6</div>' +
                    '<div class="trend">Trend7</div>' +
                    '<div class="trend">Trend8</div>' +
                    '</div>'+
                    '<div class="trendsGroup">' +
                    '<div class="trend">Trend9</div>' +
                    '<div class="trend">Trend10</div>' +
                    '<div class="trend">Trend11</div>' +
                    '<div class="trend">Trend12</div>' +
                    '</div>' +
                    '</div>';

                //The pop-up trends menu
                var infowindow = new google.maps.InfoWindow({
                    content: content
                });

                // marker positions
                var city1 = new google.maps.LatLng(55.864237,-4.251806);
                var city2 = new google.maps.LatLng(57.149717,-2.094278);
                var city3 = new google.maps.LatLng(55.953252,-3.188267);
                var city4 = new google.maps.LatLng(51.507351,-0.127758);
                var city5 = new google.maps.LatLng(43.106456,-76.217705);
                var city6 = new google.maps.LatLng(53.480759,-2.242631);
                var city7 = new google.maps.LatLng(40.712784,-74.005941);
                var city8 = new google.maps.LatLng(48.856614,2.352222);
                var city9 = new google.maps.LatLng(52.520007,13.404954);
                var city10 = new google.maps.LatLng(55.755826,37.6173);
                var city11 = new google.maps.LatLng(28.613939,77.209021);

                // marker options
                var marker1 = new google.maps.Marker({
                    position: city1,
                    map: map,
                    title:"Glasgow"
                });

                var marker3 = new google.maps.Marker({
                    position: city3,
                    map: map,
                    title:"Edinburgh"
                });

                var marker4 = new google.maps.Marker({
                    position: city4,
                    map: map,
                    title:"Aberdeen"
                });

                var marker5 = new google.maps.Marker({
                    position: city5,
                    map: map,
                    title:"Aberdeen"
                });

                var marker6 = new google.maps.Marker({
                    position: city6,
                    map: map,
                    title:"Aberdeen"
                });

                var marker7 = new google.maps.Marker({
                    position: city7,
                    map: map,
                    title:"Aberdeen"
                });

                var marker8 = new google.maps.Marker({
                    position: city8,
                    map: map,
                    title:"Aberdeen"
                });

                var marker9 = new google.maps.Marker({
                    position: city9,
                    map: map,
                    title:"Aberdeen"
                });

                var marker10 = new google.maps.Marker({
                    position: city10,
                    map: map,
                    title:"Aberdeen"
                });

                var marker11 = new google.maps.Marker({
                    position: city11,
                    map: map,
                    title:"Aberdeen"
                });

                //marker listeners
                google.maps.event.addListener(marker1, 'click', function () {
                    var obj = $.getJSON('/twitter-proxy.php?url=' + encodeURIComponent('trends/place.json?id=21125'), function (result) {
                        
                        //adding the city title to the pop-up menu
                        var cityTitle = document.getElementsByClassName('cityTitle');
                        cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                        //getting an array of the trend classes
                        var trend = document.getElementsByClassName('trend');

                        //taking the data received in JSON and adding the trends to the pop-up menu
                        trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                        trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                        trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                        trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                        trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                        trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                        trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                        trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                        trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                        trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                        trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                        trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                        });
                    infowindow.open(map, marker1);
                });

                google.maps.event.addListener(marker3, 'click', function() {
                    var obj = $.getJSON('/twitter-proxy.php?url=' + encodeURIComponent('trends/place.json?id=19344'), function (result) {
                        var a = obj.responseJSON[0].trends[0].name;
                        //adding the city title to the pop-up menu
                        var cityTitle = document.getElementsByClassName('cityTitle');
                        cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                        //getting an array of the trend classes
                        var trend = document.getElementsByClassName('trend');

                        //taking the data received in JSON and adding the trends to the pop-up menu
                        trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                        trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                        trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                        trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                        trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                        trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                        trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                        trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                        trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                        trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                        trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                        trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                    });
                    infowindow.open(map,marker3);
                });

                google.maps.event.addListener(marker4, 'click', function() {
                    var obj = $.getJSON('/twitter-proxy.php?url=' + encodeURIComponent('trends/place.json?id=44418'), function (result) {
                        //adding the city title to the pop-up menu
                        var cityTitle = document.getElementsByClassName('cityTitle');
                        cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                        //getting an array of the trend classes
                        var trend = document.getElementsByClassName('trend');

                        //taking the data received in JSON and adding the trends to the pop-up menu
                        trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                        trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                        trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                        trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                        trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                        trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                        trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                        trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                        trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                        trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                        trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                        trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                    });
                    infowindow.open(map,marker4);
                });

                google.maps.event.addListener(marker5, 'click', function() {
                    //adding the city title to the pop-up menu
                    var cityTitle = document.getElementsByClassName('cityTitle');
                    cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                    //getting an array of the trend classes
                    var trend = document.getElementsByClassName('trend');

                    //taking the data received in JSON and adding the trends to the pop-up menu
                    trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                    trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                    trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                    trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                    trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                    trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                    trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                    trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                    trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                    trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                    trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                    trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                    infowindow.open(map,marker5);
                });

                google.maps.event.addListener(marker6, 'click', function() {
                    //adding the city title to the pop-up menu
                    var cityTitle = document.getElementsByClassName('cityTitle');
                    cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                    //getting an array of the trend classes
                    var trend = document.getElementsByClassName('trend');

                    //taking the data received in JSON and adding the trends to the pop-up menu
                    trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                    trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                    trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                    trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                    trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                    trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                    trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                    trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                    trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                    trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                    trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                    trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                    infowindow.open(map,marker6);
                });

                google.maps.event.addListener(marker7, 'click', function() {
                    //adding the city title to the pop-up menu
                    var cityTitle = document.getElementsByClassName('cityTitle');
                    cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                    //getting an array of the trend classes
                    var trend = document.getElementsByClassName('trend');

                    //taking the data received in JSON and adding the trends to the pop-up menu
                    trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                    trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                    trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                    trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                    trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                    trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                    trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                    trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                    trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                    trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                    trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                    trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                    infowindow.open(map,marker7);
                });

                google.maps.event.addListener(marker8, 'click', function() {
                    //adding the city title to the pop-up menu
                    var cityTitle = document.getElementsByClassName('cityTitle');
                    cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                    //getting an array of the trend classes
                    var trend = document.getElementsByClassName('trend');

                    //taking the data received in JSON and adding the trends to the pop-up menu
                    trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                    trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                    trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                    trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                    trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                    trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                    trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                    trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                    trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                    trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                    trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                    trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                    infowindow.open(map,marker8);
                });

                google.maps.event.addListener(marker9, 'click', function() {
                    //adding the city title to the pop-up menu
                    var cityTitle = document.getElementsByClassName('cityTitle');
                    cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                    //getting an array of the trend classes
                    var trend = document.getElementsByClassName('trend');

                    //taking the data received in JSON and adding the trends to the pop-up menu
                    trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                    trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                    trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                    trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                    trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                    trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                    trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                    trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                    trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                    trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                    trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                    trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                    infowindow.open(map,marker9);
                });

                google.maps.event.addListener(marker10, 'click', function() {
                    //adding the city title to the pop-up menu
                    var cityTitle = document.getElementsByClassName('cityTitle');
                    cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                    //getting an array of the trend classes
                    var trend = document.getElementsByClassName('trend');

                    //taking the data received in JSON and adding the trends to the pop-up menu
                    trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                    trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                    trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                    trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                    trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                    trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                    trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                    trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                    trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                    trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                    trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                    trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                    infowindow.open(map,marker10);
                });

                google.maps.event.addListener(marker11, 'click', function() {
                    //adding the city title to the pop-up menu
                    var cityTitle = document.getElementsByClassName('cityTitle');
                    cityTitle[0].innerHTML=obj.responseJSON[0].locations[0].name;

                    //getting an array of the trend classes
                    var trend = document.getElementsByClassName('trend');

                    //taking the data received in JSON and adding the trends to the pop-up menu
                    trend[0].innerHTML= obj.responseJSON[0].trends[0].name;
                    trend[1].innerHTML= obj.responseJSON[0].trends[1].name;
                    trend[2].innerHTML= obj.responseJSON[0].trends[2].name;
                    trend[3].innerHTML= obj.responseJSON[0].trends[3].name;
                    trend[4].innerHTML= obj.responseJSON[0].trends[4].name;
                    trend[5].innerHTML= obj.responseJSON[0].trends[5].name;
                    trend[6].innerHTML= obj.responseJSON[0].trends[6].name;
                    trend[7].innerHTML= obj.responseJSON[0].trends[7].name;
                    trend[8].innerHTML= obj.responseJSON[0].trends[8].name;
                    trend[9].innerHTML= obj.responseJSON[0].trends[9].name;
                    trend[10].innerHTML= obj.responseJSON[0].trends[10].name;
                    trend[11].innerHTML= obj.responseJSON[0].trends[11].name;
                    infowindow.open(map,marker11);
                });

                // close pop-up menu
                google.maps.event.addListener(map, 'click', function() {
                    infowindow.close();
                });

                google.maps.event.addListener(infowindow, 'domready', function() {

                    var iwOuter = $('.gm-style-iw');

                    var iwBackground = iwOuter.prev();

                    iwBackground.children(':nth-child(2)').css({'display' : 'none'});

                    iwBackground.children(':nth-child(4)').css({'display' : 'none'});

                    iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(0, 0, 0, 0.6) 0px 1px 6px', 'z-index' : '1'});

                    var iwCloseBtn = iwOuter.next();

                    iwCloseBtn.css({opacity: '1', right: '40px', top: '3px', border: '7px solid white', 'border-radius': '13px', 'box-shadow': '0 0 5px black'});
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

        <!--Importing fonts from Google-->
        <link href='https://fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Bitter:700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="overlay">

        </div>
        <div id="map-canvas">
        </div>
        <div id="mainMenu">
            <div id="menuItem1">
                <span class="title">#trending<span class="titleColourEdit">Where?</span></span>
                <br>
                <span class="subtitle">
                    <script>

                        $(document).ready(function () {
                            $(".signintwitter").click(function () {
                            $('#overlay').hide();
                            $('#mainMenu').hide();


                            });
                        });
                        </script>
                        Sign in using your twitter account and explore the trending topics<br> of cities around the world!
                    </span>
                <br>
                <br>
                <img src="trendingWhereInterface.png" class="trendingWhereInterface">
                <span class="bulletPointText">
                    <ul>
                        <li>Pan across the map by clicking and dragging your mouse.</li>
                        <li>Select your chosen city by clicking on the marker.</li>
                        <li>The top 10 trending topics for that city will be displayed.</li>
                        <li>Get started by signing in to twitter with the button below!</li>
                    </ul>
                    <a href="#"><img src="signInTwitter.png" class="signInTwitter"></a>
                </span>
            </div>
        </div>
    </body>
</html>