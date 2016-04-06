// map center
var center = new google.maps.LatLng(51.507351,-0.127758);

// marker position
var factory = new google.maps.LatLng(51.507351,-0.127758);

function initialize() {
    var mapOptions = {
        center: center,
        zoom: 7,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);

    // InfoWindow content
    var content =       '<div class=".cityTitle">' +
                            'London' +
                        '</div>' +
                        '<div class="trendsGroup">' +
                            '<div class="trend">ABERDEEN</div>' +
                            '<div class="trend">ABERDEEN</div>' +
                            '<div class="trend">ABERDEEN</div>' +
                            '<div class="trend">ABERDEEN</div>' +
                        '</div>'+
                        '<div class="trendsGroup">' +
                            '<div class="trend">ABERDEEN</div>' +
                            '<div class="trend">ABERDEEN</div>' +
                            '<div class="trend">ABERDEEN</div>' +
                            '<div class="trend">ABERDEEN</div>' +
                        '</div>'+
                        '<div class="trendsGroup">' +
                            '<div class="trend">ABERDEEN</div>' +
                            '<div class="trend">ABERDEEN</div>' +
                        '</div>'
                    ;

    // A new Info Window is created and set content
    var infowindow = new google.maps.InfoWindow({
        content: content
    });

    // marker options
    var marker = new google.maps.Marker({
        position: factory,
        map: map,
        title:"London"
    });

    // This event expects a click on a marker
    // When this event is fired the Info Window is opened.
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

    // Event that closes the Info Window with a click on the map
    google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
    });

    // *
    // START INFOWINDOW CUSTOMIZE.
    // The google.maps.event.addListener() event expects
    // the creation of the infowindow HTML structure 'domready'
    // and before the opening of the infowindow, defined styles are applied.
    // *
    google.maps.event.addListener(infowindow, 'domready', function() {

        // Reference to the DIV that wraps the bottom of infowindow
        var iwOuter = $('.gm-style-iw');

        /* Since this div is in a position prior to .gm-div style-iw.
         * We use jQuery and create a iwBackground variable,
         * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
         */
        var iwBackground = iwOuter.prev();

        // Removes background shadow DIV
        iwBackground.children(':nth-child(2)').css({'display' : 'none'});

        // Removes white background DIV
        iwBackground.children(':nth-child(4)').css({'display' : 'none'});

        // Moves the infowindow 115px to the right.
        iwOuter.parent().parent().css({left: '115px'});

        // Moves the shadow of the arrow 76px to the left margin.
        iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 150px !important;'});

        // Moves the arrow 76px to the left margin.
        iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 150px !important;'});

        // Changes the desired tail shadow color.
        iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(0, 0, 0, 0.6) 0px 1px 6px', 'z-index' : '1'});

        // Reference to the div that groups the close button elements.
        var iwCloseBtn = iwOuter.next();

        // Apply the desired effect to the close button
        iwCloseBtn.css({opacity: '1', right: '40px', top: '3px', border: '7px solid white', 'border-radius': '13px', 'box-shadow': '0 0 5px black'});

        iwCloseBtn.mouseout(function(){
            $(this).css({opacity: '1'});
        });
    });
}
google.maps.event.addDomListener(window, 'load', initialize);