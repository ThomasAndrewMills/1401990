<html>
    <head>
        <!--CSS link-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--Google Maps API link-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.20"></script>

        <!-- use the existing file in the js folder -->
        <script type="text/javascript" src="jquery.js"></script>

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
                        var str = "";
                        var obj = $.getJSON('/twitter-proxy.php?url=' + encodeURIComponent('trends/place.json?id=1'), function (result) {
                        });
                        $(document).ready(function () {
                            $(".signintwitter").click(function () {
                            //$('#overlay').hide();
                            //$('#mainMenu').hide();
                                console.log(obj.responseJSON[0].trends[0].name);
                                console.log(obj.responseJSON[0].trends[1].name);
                                console.log(obj.responseJSON[0].trends[2].name);
                                console.log(obj.responseJSON[0].trends[3].name);
                                console.log(obj.responseJSON[0].trends[4].name);
                                console.log(obj.responseJSON[0].trends[5].name);
                                console.log(obj.responseJSON[0].trends[6].name);
                                console.log(obj.responseJSON[0].trends[7].name);
                                console.log(obj.responseJSON[0].trends[8].name);
                                console.log(obj.responseJSON[0].trends[9].name);
                                console.log(obj.responseJSON[0].trends[9].name);
                                console.log(obj.responseJSON[0].trends[11].name);
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