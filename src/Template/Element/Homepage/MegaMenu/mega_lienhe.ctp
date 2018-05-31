<style>
    .google-map {
        height: 100%;
        border-bottom: 1px solid #707070;
        border-left: 1px solid #707070;
        min-height: 350px;
    }
</style>
<ul class="dropdown-menu" style="min-height: 350px;">
    <li>
        <div class="dropdown-mega-content">
            <div class="row">
                <div id="map" class="google-map col-lg-6 dropdown-mega-sub-content-block overlay overlay-show overlay-color-primary d-none d-lg-block" ></div>
                <div class="col-lg-2 ml-auto">
                    <span class="dropdown-mega-sub-title">BỘ PHẬN KỸ THUẬT</span>
                    <ul class="dropdown-mega-sub-nav">
                        <li><a class="dropdown-item" href="tel:01203101994" data-hash data-hash-offset="70"><i class="fas fa-phone"></i>&nbsp;&nbsp; 01203101994</a></li>
                        <li><a class="dropdown-item" href="tel:01203101994" data-hash data-hash-offset="70"><i class="fas fa-envelope"></i>&nbsp;&nbsp; kythuat@polygonvietnam.com</a></li>
                        <li><a class="dropdown-item" href="tel:01203101994" data-hash data-hash-offset="70"><i class="fab fa-skype"></i>&nbsp;&nbsp; kythuatpolygon</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <span class="dropdown-mega-sub-title">BỘ PHẬN KINH DOANH</span>
                    <ul class="dropdown-mega-sub-nav">
                        <li><a class="dropdown-item" href="tel:01203101994" data-hash data-hash-offset="70"><i class="fas fa-phone"></i>&nbsp;&nbsp; 01203101994</a></li>
                        <li><a class="dropdown-item" href="tel:01203101994" data-hash data-hash-offset="70"><i class="fas fa-envelope"></i>&nbsp;&nbsp; kythuat@polygonvietnam.com</a></li>
                        <li><a class="dropdown-item" href="tel:01203101994" data-hash data-hash-offset="70"><i class="fab fa-skype"></i>&nbsp;&nbsp; kythuatpolygon</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <span class="dropdown-mega-sub-title">BỘ PHẬN HỖ TRỢ</span>
                    <ul class="dropdown-mega-sub-nav">
                        <li><a class="dropdown-item" href="tel:01203101994" data-hash data-hash-offset="70"><i class="fas fa-phone"></i>&nbsp;&nbsp; 01203101994</a></li>
                        <li><a class="dropdown-item" href="tel:01203101994" data-hash data-hash-offset="70"><i class="fas fa-envelope"></i>&nbsp;&nbsp; kythuat@polygonvietnam.com</a></li>
                        <li><a class="dropdown-item" href="tel:01203101994" data-hash data-hash-offset="70"><i class="fab fa-skype"></i>&nbsp;&nbsp; kythuatpolygon</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
</ul>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 10.7959741, lng: 106.6300859},
            zoom: 17
        });

        var marker = new google.maps.Marker({
            position: {lat: 10.7959741, lng: 106.6300859},
            icon: 'http://localhost/homepage/img/polygon-pin-2.png',
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaIATDqciDbPJu4VmIpt5NJOSZvqck9GA&callback=initMap" async defer></script>