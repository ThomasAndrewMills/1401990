<!--DARREN WILLIAMSON, THOMAS MILLS, CALLUM MELIA, CALLUM ROBERTSON, CIARAN MILLER-->
<html>
    <head>
        <title>trendingWhere?</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPq8HpLPgbIWth84LJfbbR4jsCJkrasuc
        &libraries=visualization&callback=initMap">
        </script>
        <script src="map.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Bitter:700' rel='stylesheet' type='text/css'>
        <?php
            function getConnectionWithAccessToken($oauth_token, $oauth_token_secret) {
                $connection = new TwitterOAuth("OAtCFNvjagzQCoHp5sJU2KtuE","CXHT54PYFdFugE6LKaqvVhUeFRZr8BVhZyHN8iGEsZmfqBlBBZ", $oauth_token, $oauth_token_secret);
                return $connection;
            }


        ?>
    </head>
    <body>
        <div id="overlay">

        </div>
        <div id="map">

        </div>
        <div id="mainMenu">
            <div id="menuItem1">
                <span class="title">#trending<span class="titleColourEdit">Where?</span></span>
                    <br>
                    <span class="subtitle">
                        <?php
                        $connection = getConnectionWithAccessToken("455303569-USh4o67B8c6vYzw8taIp4G6WtjQoxpMOS8rseRNI", "lIrlNxvTW6TY5DBUJmn7VuiWlMtAPz4tUrLE5ngUpENRL");
                        //$content = $connection->

                        //get("statuses/home_timeline");

                        echo("Test!");
                        ?>
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