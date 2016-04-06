//DARREN WILLIAMSON, THOMAS MILLS, CALLUM MELIA, CALLUM ROBERTSON, CIARAN MILLER
function initMap() {
    var myLatLng = {lat: 0, lng: 0};

    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 0, lng: 0},
        disableDefaultUI: true,
        zoom: 3,
        styles: [{
            featureType: 'poi',
            stylers: [{ visibility: 'off' }]  // Turn off points of interest.
        }, {
            featureType: 'transit.station',
            stylers: [{ visibility: 'off' }]  // Turn off bus stations, train stations, etc.
        }],
        disableDoubleClickZoom: true

    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
}