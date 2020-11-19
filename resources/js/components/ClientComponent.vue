<template>
    <div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-6">
                <div class="card border-dark mb-3">
                <div class="card-header"></div>
                <div class="card-body text-dark">
                    <h5 class="card-title"><i class="fas fa-chart-line "></i> &nbsp Historial de consumo</h5>
                    <p class="card-text">Ver mas <i class="fas fa-arrow-right"></i></p>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-dark mb-3">
                <div class="card-header"></div>
                <div class="card-body text-dark">
                    <h5 class="card-title"><i class="far fa-credit-card"></i>&nbsp Tu saldo</h5>
                    <p class="card-text valor" >$ 0.00 </p>
                </div>
                </div>
            </div>
                 <div class="col-6">
                <div class="card border-dark mb-3">
                <div class="card-header"></div>
                <div class="card-body text-dark">
                    <h5 class="card-title"><i class="fas fa-money-bill-wave"></i>&nbsp Recarga tu cuenta </h5>
                    <p class="card-text">Recargar saldo.</p>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-dark mb-3">
                <div class="card-header"></div>
                <div class="card-body text-dark">
                    <h5 class="card-title"><i class="fas fa-charging-station"></i>&nbsp Estaciones de recarga</h5>
                    <p class="card-text">Ver mas <i class="fas fa-arrow-right"></i></p>
                </div>
                </div>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header">
                Estaciones de carga cercanas !
            </div>
            <div class="card-body">
                <div id="map"></div>
            </div>
        </div>
        
    </div>

</template>

<script>
export default {
    mounted(){
        google.maps.event.addDomListener(window, "load", function(){
            let mapElement = document.getElementById("map");
            let electrolinera = {lat: 5.0653113,lng: -75.48997};
            let map = new google.maps.Map(mapElement, {center: electrolinera ,zoom: 12.7});
            let marker = new google.maps.Marker({position:electrolinera, title:'Electrolinera Mall Plaza', map:map});
            let infoWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation){
                navigator.geolocation.getCurrentPosition( function(position) {
                    let pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    let marker = new google.maps.Marker({position:pos,title:'Tu ubicación',map:map});
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function(){
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                handleLocationError(false, infoWindow, map.getCenter());
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.open(map);
            }
        });
    }
}
</script>

<style>
    #map {
        width: 1500px;
        max-width: 100%;
        height: 400px;
        max-height: 100vh;
    }
    .valor{
        font-size: 18px;
    }
</style>