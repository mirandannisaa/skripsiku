<!DOCTYPE html>
<html lang="en">
	<head>
      <title>Malang Sports Information System</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="DirectoryPlus template project">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>

<body>

<div class="super_container">
	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Listings -->

		<div class="listings container_custom">
			<div class="container">
				<div class="row">
					
					<!-- Listings Content -->
					<div class="col-xl-8">
						<div class="listings_content">

							<!-- Listing Search -->
							<div class="listing_search_container">
								<form action="#" class="search_form" id="search_form">
									<div class="d-flex flex-md-row flex-column align-items-start justify-content-start">
										<div>
											<input type="text" class="search_input" placeholder="What are you looking for?" required="required">
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
								<div class="section_title"><h1>Fasilitas</h1></div>
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
							<div class="results_container">
								<div class="section_title"><h1><span>Results for: </span>New York</h1></div>
								<div class="results grid">

									<!-- Result Item -->
									<div class="grid-item result coffee">
										<div class="listing" style="height: 450px;">
										<?php foreach ($tempat_list as $key) { ?>
											<div class="listing_image">
												<?php echo $key->foto ?>
											</div>
											<div class="listing_title_container">
												<div class="listing_title"><a href=""><?php echo $key->nama_tempat ?></a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4,5</div>
													<div class="listing_price"><?php echo $key->jenis_olahraga ?></div>
													<div class="listing_divider">|</div>
													<div class="listing_type"><?php echo $key->alamat ?></div>
													<div class="listing_divider">|</div>
													<div class="listing_status"><?php echo $key->jam_buka ?> - <?php echo $key->jam_tutup ?></div>
												</div>
											</div>
											<?php } ?>
										</div>
									</div>			
									
									<!-- Result Item -->
									<div class="grid-item result coffee">
										<div class="listing" style="height: 450px;">
											<div class="listing_image">
												<div class="listing_icon"><a href="listing.html"><img src="asset/images/white/joggingw.png" alt="" style="width:25px; heigth:auto;"></a></div>
												<img src="asset/images/listing_1.jpg" alt="">
											</div>
											<div class="listing_title_container">
												<div class="listing_title"><a href="listing.html">The Meal</a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4,5</div>
													<div class="listing_price">$$$</div>
													<div class="listing_divider">|</div>
													<div class="listing_type">Restaurant</div>
													<div class="listing_divider">|</div>
													<div class="listing_status">Closed</div>
												</div>
											</div>
											<div class="listing_testimonial" style=" padding: 2%;">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="testimonial_image"><img src="asset/images/user_1.jpg" alt=""></div>
													<div class="testimonial_text">
														<p>Great place to visit, the food is awesome, I really love it.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Result Item -->
									<div class="grid-item result coffee">
										<div class="listing" style="height: 450px;">
											<div class="listing_image">
												<div class="listing_icon"><a href="listing.html"><img src="asset/images/white/joggingw.png" alt="" style="width:25px; heigth:auto;"></a></div>
												<img src="asset/images/listing_1.jpg" alt="">
											</div>
											<div class="listing_title_container">
												<div class="listing_title"><a href="listing.html">The Meal</a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4,5</div>
													<div class="listing_price">$$$</div>
													<div class="listing_divider">|</div>
													<div class="listing_type">Restaurant</div>
													<div class="listing_divider">|</div>
													<div class="listing_status">Closed</div>
												</div>
											</div>
											<div class="listing_testimonial" style=" padding: 2%;">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="testimonial_image"><img src="asset/images/user_1.jpg" alt=""></div>
													<div class="testimonial_text">
														<p>Great place to visit, the food is awesome, I really love it.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Result Item -->
									<div class="grid-item result coffee">
										<div class="listing" style="height: 450px;">
											<div class="listing_image">
												<div class="listing_icon"><a href="listing.html"><img src="asset/images/white/joggingw.png" alt="" style="width:25px; heigth:auto;"></a></div>
												<img src="asset/images/listing_1.jpg" alt="">
											</div>
											<div class="listing_title_container">
												<div class="listing_title"><a href="listing.html">The Meal</a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4,5</div>
													<div class="listing_price">$$$</div>
													<div class="listing_divider">|</div>
													<div class="listing_type">Restaurant</div>
													<div class="listing_divider">|</div>
													<div class="listing_status">Closed</div>
												</div>
											</div>
											<div class="listing_testimonial" style=" padding: 2%;">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="testimonial_image"><img src="asset/images/user_1.jpg" alt=""></div>
													<div class="testimonial_text">
														<p>Great place to visit, the food is awesome, I really love it.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Result Item -->
									<div class="grid-item result coffee">
										<div class="listing" style="height: 450px;">
											<div class="listing_image">
												<div class="listing_icon"><a href="listing.html"><img src="asset/images/white/joggingw.png" alt="" style="width:25px; heigth:auto;"></a></div>
												<img src="asset/images/listing_1.jpg" alt="">
											</div>
											<div class="listing_title_container">
												<div class="listing_title"><a href="listing.html">The Meal</a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4,5</div>
													<div class="listing_price">$$$</div>
													<div class="listing_divider">|</div>
													<div class="listing_type">Restaurant</div>
													<div class="listing_divider">|</div>
													<div class="listing_status">Closed</div>
												</div>
											</div>
											<div class="listing_testimonial" style=" padding: 2%;">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="testimonial_image"><img src="asset/images/user_1.jpg" alt=""></div>
													<div class="testimonial_text">
														<p>Great place to visit, the food is awesome, I really love it.</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Result Item -->
									<div class="grid-item result coffee">
										<div class="listing" style="height: 450px;">
											<div class="listing_image">
												<div class="listing_icon"><a href="listing.html"><img src="asset/images/white/joggingw.png" alt="" style="width:25px; heigth:auto;"></a></div>
												<img src="asset/images/listing_1.jpg" alt="">
											</div>
											<div class="listing_title_container">
												<div class="listing_title"><a href="listing.html">The Meal</a></div>
												<div class="listing_info d-flex flex-row align-items-center justify-content-between">
													<div class="listing_rating">4,5</div>
													<div class="listing_price">$$$</div>
													<div class="listing_divider">|</div>
													<div class="listing_type">Restaurant</div>
													<div class="listing_divider">|</div>
													<div class="listing_status">Closed</div>
												</div>
											</div>
											<div class="listing_testimonial" style=" padding: 2%;">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="testimonial_image"><img src="asset/images/user_1.jpg" alt=""></div>
													<div class="testimonial_text">
														<p>Great place to visit, the food is awesome, I really love it.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Listings Map -->
					<div class="col-xl-4">
						<div class="listings_map">
							<!-- Google Map -->
							<div class="map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
</body>
</html>