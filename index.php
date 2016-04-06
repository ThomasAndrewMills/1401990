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
                        require "twitteroauth/autoload.php";

                        use Abraham\TwitterOAuth\TwitterOAuth;

                        $connection = new TwitterOAuth('OAtCFNvjagzQCoHp5sJU2KtuE','CXHT54PYFdFugE6LKaqvVhUeFRZr8BVhZyHN8iGEsZmfqBlBBZ', $access_token, $access_token_secret);
                        $content = $connection->get("account/verify_credentials");

                        $tweets = $connection->get("https://api.twitter.com/1.1/trends/23424977.json");

                        echo json_encode($tweets);
                        echo $tweets; //testing remove for production

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