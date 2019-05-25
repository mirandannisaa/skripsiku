<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<div class="super_container">
    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Listings -->
        <div class="listings container_custom">
            <div class="container">
                <div class="row">
                    <!-- Listings Content -->
                    <div class="col-xl-6">
                        <div class="listings_content">
                            <!-- Listing Search -->
                            <div class="listing_search_container">
                                <form action="#" class="search_form" id="search_form">
                                    <div class="d-flex flex-md-row flex-column align-items-start justify-content-start">
                                        <div>
                                            <input type="text" class="search_input" placeholder="Cari Tempat Olahraga" required="required" id="nama_tempat">
                                            <button class="search_button">Search</button>
                                        </div>
                                        <div>
                                            <input type="text" class="search_input" placeholder="Your Location" required="required">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Listing Filter -->
                            <div class="listing_filter">
                                <div class="section_title">
                                    <h1>Fasilitas</h1></div>
                                <div class="listing_filter_container d-flex flex-row align-items-start justify-content-start flex-wrap">

                                    <!-- Listing Checkbox -->
                                    <div class="listing_checkbox">
                                        <label>Kamar Mandi / Kamar Ganti
                                            <input type="checkbox" data-filter=".bathroom">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <!-- Listing Checkbox -->
                                    <div class="listing_checkbox">
                                        <label>Toilet
                                            <input type="checkbox" data-filter=".toilet">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <!-- Listing Checkbox -->
                                    <div class="listing_checkbox">
                                        <label>Air Hangat
                                            <input type="checkbox" data-filter=".hotwater">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <!-- Listing Checkbox -->
                                    <div class="listing_checkbox">
                                        <label>Shower
                                            <input type="checkbox" data-filter=".shower">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <!-- Listing Checkbox -->
                                    <div class="listing_checkbox">
                                        <label>Tempat Parkir Sepeda Motor
                                            <input type="checkbox" data-filter=".motor">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <!-- Listing Checkbox -->
                                    <div class="listing_checkbox">
                                        <label>Tempat Parkir Mobil
                                            <input type="checkbox" data-filter=".mobil">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <!-- Listing Checkbox -->
                                    <div class="listing_checkbox">
                                        <label>Kantin
                                            <input type="checkbox" data-filter=".kantin">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <!-- Listing Checkbox -->
                                    <div class="listing_checkbox">
                                        <label>Gazebo / Tempat Duduk
                                            <input type="checkbox" data-filter=".gazebo">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Results -->
                            <div class="blog" style="padding-top: 8%">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="blog_posts_container" style="padding-top: 8%">
                                                <div class="blog_posts">
                                                    <!-- Blog Post -->
                                                    <?php foreach ($tempat_list as $key) { ?>
                                                        <div class="blog_post">
                                                            <div class="blog_post_container" style="height:400px;">
                                                                <div class="blog_post_image"><a href="#"><img src="<?php echo base_url('uploads/files/').$key->foto?>"></a></div>
                                                                <div class="blog_post_content">
                                                                    <div class="blog_post_date"><a href=""><?php echo $key->nama_olahraga ?></a></div>
                                                                    <div class="blog_post_title">
                                                                        <h3><a href="<?php echo site_url('detail/index/').$key->id_tempat?>"><?php echo $key->nama_tempat ?></a></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <div class="col-xl-6">
                        <div class="listings_map">
                            <div class="map" style="padding-top:5%">
                                <div id="google_map" class="google_map" style="width:100%;height:100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $listTempat = json_encode($tempat_list); ?>
<script>
var mapsList = JSON.parse('<?php echo $listTempat ?>');

function initialize(){

directionsDisplay = new google.maps.DirectionsRenderer();

var mapProp = {
    //latlong malang
    center: new google.maps.LatLng(-7.983908, 112.621391),
    zoom: 15
};

var map = new google.maps.Map(document.getElementById("google_map"), mapProp);
var marker = new google.maps.Marker({
    position: new google.maps.LatLng(-7.983908, 112.621391),
    animation: google.maps.Animation.BOUNCE
});
var bounds = new google.maps.LatLngBounds();
for(var i = 0; i < mapsList.length; i++){
        var nama = mapsList[i].nama_tempat;
        var lat = mapsList[i].latitude;
        var lng = mapsList[i].longitude;
        var latlngset = new google.maps.LatLng(lat,lng);
        let marker = new google.maps.Marker({
        position: latlngset,
        title: nama,
        animation: google.maps.Animation.BOUNCE
        });
        marker.setMap(map)
        bounds.extend(latlngset);
    }
    map.fitBounds(bounds);
    
}

// var request = {
// origin : new google.maps.LatLng(-7.983908, 112.621391),
// destination : new google.maps.LatLng(-7.932292, 112.62987),
// travelMode : google.maps.TravelMode.Driving
// };

// directionsService.route(request, function(result, status){
// if (status == google.maps.DirectionsStatus.OK){
//     directionsDisplay.setDirections(result);
// }
// });

</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCZiFA_tn3XBDOzHE2Pd1TEi39LhHSbWLw&callback=initialize"></script>

<!-- AutoComplete -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script async='async' type='text/javascript'>
    $("#nama_tempat").autocomplete({
        source: "<?php echo site_url('olahraga/auto_complete/?')?>"
    });
</script>