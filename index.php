<!--DARREN WILLIAMSON, THOMAS MILLS, CALLUM MELIA, CALLUM ROBERTSON, CIARAN MILLER-->
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <title>
            trendingWhere?
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Bitter:700' rel='stylesheet' type='text/css'>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPq8HpLPgbIWth84LJfbbR4jsCJkrasuc&libraries=visualization&callback=initMap">
        </script>


        <script>
            $(document).ready(function(){
                $(".signintwitter").click(function(){
                    $('#overlay').hide();
                    $('#mainMenu').hide();
                });
            });

            $(document).ready(function(){

            });


        </script>

        <script type="text/javascript" src="jquery.js"></script>
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
                    <img src="signInTwitter.png" class="signInTwitter">
                </span>
            </div>
        </div>
    </body>
</html>