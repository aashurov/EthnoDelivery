function initMap() {
    var locationMoscow = {
        lat: 55.6776693,
        lng: 37.6414595
    };
    var center = {
        lat: 48.2432879,
        lng: 54.8469534
    };
    // var center = {
    //     lat: 51.768199,
    //     lng: 55.096955
    // };
    var locationTashkent = {
        lat: 41.320608,
        lng: 69.281245
    };
    var map = new google.maps.Map(document.getElementById("contact-section"), {
        zoom: 5,
        center: center
    });
    var markerMoscow = new google.maps.Marker({
        position: locationMoscow,
        map: map
    });
    var markerTashkent = new google.maps.Marker({
        position: locationTashkent,
        map: map
    });
}
