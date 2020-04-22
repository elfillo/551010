function initMap() {
    var uluru = {
        lat: 52.310714,
        lng: 104.236796
    };
    var map_container = document.getElementById('map');
    if(map_container){
        var map = new google.maps.Map(map_container, {
            zoom: 17,
            center: uluru,
            styles: [{
                "featureType": "all",
                "elementType": "all",
                "stylers": [{
                    "saturation": -100
                }, {
                    "gamma": 0.5
                }]
            }]
        });
    }

    var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        
    });
}