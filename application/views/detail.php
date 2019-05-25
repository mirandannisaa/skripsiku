<div class="super_container">
    <div class="super_container_inner">
        <div class="super_overlay"></div>
        <!--Carousel Wrapper-->
        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel" style="padding-top:10%; " >
            <?php foreach ($tempat_list as $key) { ?>
                <!--Slides-->
                <div class="carousel-inner" role="listbox" style="display: flex; justify-content: center;">
                    <div class="carousel-item active">
                    <center>
                        <img width="90%" height="800" src="<?php echo base_url('uploads/files/').$key->foto?>"></li>
                    </center>
                    </div>
                </div>
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>            
            <?php }?>
        </div>
        <!--/.Carousel Wrapper-->
        <div class="listing" style="padding-top:1%">
            <div class="container">
                    <div class="row">
                        <!-- Listing Content -->
                        <div class="col-md-8" style="padding-top:5%">
                            <div class="listing_content">
                                <?php foreach ($tempat_list as $key) { ?>
                                    <div class="section_title">
                                        <h1><?php echo $key->nama_tempat ?></h1>
                                    </div>
                                    <div class="listing_text">
                                        <p style="color:red;">
                                            <?php echo $key->nama_olahraga ?>
                                        </p>
                                    </div>
                                    <div class="listing_text">
                                        <p>
                                            <?php echo $key->alamat ?>
                                        </p>
                                    </div>
                                    <?php } ?>
                                        <div class="reviews">
                                            <!-- Reviews -->
                                            <div class="section_title">
                                                <h1>Review User</h1>
                                            </div>
                                            <?php foreach ($review_list as $key) { ?>
                                                <div class="reviews_container">
                                                    <!-- Review -->
                                                    <?php echo form_open_multipart('detail/createUlasan'); ?>
                                                    <div class="review d-flex flex-lg-row flex-column align-items-start justify-content-start">
                                                        <div class="review_content">
                                                            <div class="review_title_container d-flex flex-row align-items-start justify-content-start">
                                                                <div class="review_title" style="font-weight:bold">
                                                                    <?php echo $key->nama ?>
                                                                </div>
                                                            </div>
                                                            <div class="review_text">
                                                                <p>
                                                                    <?php echo $key->ulasan ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php echo form_close(); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                            </div>
                            <div style="padding-top:20px;">
                                <div id="comment-message" class="form-row">
                                    <textarea style="width:25%;" name="ulasan" placeholder="Komentari" id="ulasan"></textarea>
                                    <button type="button" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4" style="padding-top:5%">
                            <div class="sidebar">
                                <!-- Work Hours -->
                                <?php foreach ($tempat_list as $key) { ?>
                                    <div class="work_hours d-flex flex-row align-items-center justify-content-start">
                                        <div class="closed">
                                            <?php echo $key->hari_buka ?>
                                        </div>
                                        <div class="ml-auto">
                                            <?php echo $key->jam_buka ?> -
                                                <?php echo $key->jam_tutup ?>
                                        </div>
                                    </div>

                                    <!-- Info -->
                                    <div class="sidebar_info">
                                        <ul>
                                            <li class="d-flex flex-row align-items-start justify-content-start">
                                                <div class="sidebar_info_icon"><img src="asset/images/info_1.png" alt=""></div>
                                                <div class="sidebar_info_content"><span>Alamat: </span>
                                                    <?php echo $key->alamat ?>
                                                </div>
                                            </li>
                                            <li class="d-flex flex-row align-items-start justify-content-start">
                                                <div class="sidebar_info_icon"><img src="asset/images/info_2.png" alt=""></div>
                                                <div class="sidebar_info_content"><span>Nomor Telepon: </span>
                                                    <?php echo $key->no_telp ?>
                                                </div>
                                            </li>
                                            <li class="d-flex flex-row align-items-start justify-content-start">
                                                <div class="sidebar_info_icon"><img src="asset/images/info_3.png" alt=""></div>
                                                <div class="sidebar_info_content"><span>Harga: </span>
                                                    <?php echo $key->harga ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php } ?>
                            </div>
                            <!-- Google Map -->
                            <div class="col-xl-6" z-index:3;>
                                <div class="listings_map">
                                    <div class="map" style="padding-top:5%">
                                        <div id="google_map" class="google_map" style="width:350px;height:400px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
</div>
</div>
<!-- Gmaps -->
<script>

    function allMap(){
        var url = "http://localhost/olahraga/olahraga/setData";
        $.ajax({
            url:url,
            type:"GET",
            dataType:'json',
            success:function(response){
                console.log(response[0].longitude);
            }
        })
    }

    function myMap() {
        allMap();
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
        marker.setMap(map);
    
    }

    // Gson gson = new Gson();
    //         java.sql.Connection con = new DBConn().getConnection(); //establish the database connection you use

    //         String getquery = "SELECT * from tempat";

    //         ResultSet res = DBHandle.getData(con, getquery); 
    //         ArrayList<Marker> markerList;
    //         markerList = new ArrayList<Marker>();

    //         while (res.next()) {

    //           Marker marker=new Marker(); //model class with attributes latitude,longitude and name along with their getters and setters
    //           marker.setLatitude(res.getString("latitude"));
    //           marker.setLongitude(res.getString("longitude"));
    //           marker.setName(res.getString("nama_tempat"));
    //           animation: google.maps.Animation.BOUNCE
    //           markerList.add(marker);

    //         }
    //         String JsonString = gson.toJson(markerList, ArrayList.class);
    //         out.print(JsonString);
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCZiFA_tn3XBDOzHE2Pd1TEi39LhHSbWLw&callback=myMap"></script>