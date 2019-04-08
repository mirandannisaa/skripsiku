<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Malang Sports Information System</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="DirectoryPlus template project">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body style="background-image: url('<?php echo base_url("");?>/asset/images/backgroundfix.png'); background-size: 100%; background-attachment: fixed; background-position: center;">
      <div class="container" >
         <div clas="row" style="margin-top:15%; margin-left:auto; margin-right:auto">
            <div class="col-lg-12" >
               <div class="card">
               
                  <div class="card-header">
                     <strong>Tambah</strong> Tempat Olahraga
                  </div>
                  <div class="card-body card-block">
                  <?php echo form_open_multipart('admin/createtempat'); ?>
                        <div class="row form-group">
                        
                           <div class="col col-md-3">
                              <label class=" form-control-label">Username</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <p class="form-control-static">Admin</p>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Jenis Olahraga</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <select name="jenis_olaharaga" onchange="selectDataKeterangan();" id="jenis_olahraga" class="form-control">
                                 <option value="">-- Jenis Olahraga --</option>
                                 <option value="futsal"> Futsal</option>
                                 <option value="bulutangkis"> Bulutangkis</option>
                                 <option value="berenang"> Berenang</option>
                                 <option value="jogging"> Jogging</option>
                                 <option value="gym"> Gym</option>
                              </select>
                              <small class="form-text text-muted">Pilih Jenis Olahraga</small>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Nama Tempat</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="tempat_olahraga" name="tempat_olahraga" placeholder="Tempat Olahraga" class="form-control">
                              <small class="form-text text-muted">Masukkan Tempat Olahraga</small>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Alamat</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control">
                              <small class="form-text text-muted">Masukkan Alamat</small>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Nomor Telepon</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="no_telp" name="no_telp" placeholder="Nomor Telepon" class="form-control">
                              <small class="form-text text-muted">Masukkan Nomor Telepon</small>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Harga</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="harga" name="harga" placeholder="Harga" class="form-control">
                              <small class="form-text text-muted">Masukkan Harga</small>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Jam Buka</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="jam_buka" name="jam_buka" placeholder="Jam Buka" class="form-control">
                              <small class="form-text text-muted">Masukkan Jam Buka</small>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Jam Tutup</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="jam_tutup" name="jam_tutup" placeholder="Jam Tutup" class="form-control">
                              <small class="form-text text-muted">Masukkan Jam Tutup</small>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Latitude</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="latitude" name="latitude" placeholder="Latitude" class="form-control">
                              <small class="form-text text-muted">Masukkan Latitude</small>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Longitude</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="longitude" name="longitude" placeholder="Longitude" class="form-control">
                              <small class="form-text text-muted">Masukkan Longitude</small>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Foto</label>
                           </div>
                           <div class="col-12 col-md-9">
                               <input type="file" name="upload_Files[]" multiple class="form-control-file" />
                               <small class="form-text text-muted">Upload Foto</small>
                            </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Fasilitas</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="checkbox" name="fasilitas[]" alt="Checkbox" value="2"> Kamar Mandi / Kamar Ganti
		                        <br><input type="checkbox" name="fasilitas[]" alt="Checkbox" value="6"> Toilet
                              <br><input type="checkbox" name="fasilitas[]" alt="Checkbox" value="7"> Air Hangat
		                        <br><input type="checkbox" name="fasilitas[]" alt="Checkbox" value="8"> Shower
                              <br><input type="checkbox" name="fasilitas[]" alt="Checkbox" value="4"> Tempat Parkir Sepeda Motor
		                        <br><input type="checkbox" name="fasilitas[]" alt="Checkbox" value="5"> Tempat Parkir Mobil
                              <br><input type="checkbox" name="fasilitas[]" alt="Checkbox" value="1"> Kantin
		                        <br><input type="checkbox" name="fasilitas[]" alt="Checkbox" value="9"> Gazebo / Tempat Duduk
                            </div>
                        </div>
                        <!-- <center>
                        <button type="button" onclick="keteranganfutsal()" class="btn btn-primary">Tambah Keterangan</button>
                        </center><br> -->
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Keterangan</label>
                           </div>
                           <div id='keterangan' class="col-12 col-md-9">
                              
                           </div>
                        </div>
                     <center>
                     <button type="submit" id="submit-button" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                     <button type="reset" class="btn btn-danger" id="cancel-button"  name="action" value="CANCEL">Cancel</button>
                     </center>
                  <?php echo form_close(); ?>
                  </div>
               </div>
            </div>
        </div>
   </body>

<script>

   function selectDataKeterangan(){
      var jenisOr = document.getElementById('jenis_olahraga').value;
      if(jenisOr=='futsal'){
         keteranganfutsal();
      } 
      else if(jenisOr=='bulutangkis'){
         keteranganbulutangkis();
      }
      else if(jenisOr=='berenang'){
         keteranganrenang();
      }
      else if(jenisOr=='jogging'){
         keteranganjogging();
      }
      else{
         keterangangym();
      }
   }
    function keteranganfutsal ()
    {
        document.getElementById("keterangan").innerHTML="<input type='checkbox' name='keterangan[]' value='1' pattern='' title=''>Lapangan Besar Vynil</input><br><input type='checkbox' name='keterangan[]' value='2' pattern='' title=''>Lapangan Kecil Vynil</input><br><input type='checkbox' name='keterangan[]' value='3' pattern='' title=''>Lapangan Besar Rumput</input><br><input type='checkbox' name='keterangan[]' value='4' pattern='' title=''>Lapangan Kecil Rumput</input>"
    }

    function keteranganbulutangkis ()
    {
        document.getElementById("keterangan").innerHTML="<input type='checkbox' name='keterangan[]' value='5' pattern='' title=''>Lapangan Besar</input><br><input type='checkbox' name='keterangan[]' value='6' pattern='' title=''>Lapangan Kecil</input>"
    }

    function keteranganrenang ()
    {
        document.getElementById("keterangan").innerHTML="<input type='checkbox' name='keterangan[]' value='7' pattern='' title=''>Kolam Renang Dewasa</input><br><input type='checkbox' name='keterangan[]' value='8' pattern='' title=''>Kolam Renang Anak</input>"
    }

    function keteranganjogging ()
    {
        document.getElementById("keterangan").innerHTML="<input type='checkbox' name='keterangan[]' value='36' pattern='' title=''>Lapangan Besar</input><br><input type='checkbox' name='keterangan[]' value='37' pattern='' title=''>Lapangan Kecil</input>"
    }

    function keterangangym ()
    {
        document.getElementById("keterangan").innerHTML="<input type='checkbox' name='keterangan[]' value='9' pattern='' title=''>Drumbbel</input><br><input type='checkbox' name='keterangan[]' value='10' pattern='' title=''>Barbel</input><br><input type='checkbox' name='keterangan[]' value='11' pattern='' title=''>Weight Plates</input><br><input type='checkbox' name='keterangan[]' value='12' pattern='' title=''>Kettlebells</input><br><input type='checkbox' name='keterangan[]' value='13' pattern='' title=''>Medicine Bells</input><br><input type='checkbox' name='keterangan[]' value='14' pattern='' title=''>Weighted Bars</input><br><input type='checkbox' name='keterangan[]' value='15' pattern='' title=''>Curl Bars</input><br><input type='checkbox' name='keterangan[]' value='16' pattern='' title=''>Tricep Bars</input><br><input type='checkbox' name='keterangan[]' value='17' pattern='' title=''>Pull Up Bars</input><br><input type='checkbox' name='keterangan[]' value='18' pattern='' title=''>Fitnes Bench</input><br><input type='checkbox' name='keterangan[]' value='19' pattern='' title=''>Hyper Extenxion Bars</input><br><input type='checkbox' name='keterangan[]' value='20' pattern='' title=''>Sit Up Bench</input><br><input type='checkbox' name='keterangan[]' value='21' pattern='' title=''>Swiss Ball</input><br><input type='checkbox' name='keterangan[]' value='22' pattern='' title=''>Push Up Grip</input><br><input type='checkbox' name='keterangan[]' value='23' pattern='' title=''>Matras</input><br><input type='checkbox' name='keterangan[]' value='24' pattern='' title=''>Dip Bar</input><br><input type='checkbox' name='keterangan[]' value='25' pattern='' title=''>ABS Crunch Machine</input><br><input type='checkbox' name='keterangan[]' value='26' pattern='' title=''>Static Bycycle</input><br><input type='checkbox' name='keterangan[]' value='27' pattern='' title=''>Leg Press Machine</input><br><input type='checkbox' name='keterangan[]' value='28' pattern='' title=''>Treadmill</input><br><input type='checkbox' name='keterangan[]' value='29' pattern='' title=''>Chest Pass Machine</input><br><input type='checkbox' name='keterangan[]' value='30' pattern='' title=''>Squat Hack Machine</input><br><input type='checkbox' name='keterangan[]' value='31' pattern='' title=''>Barbel Machine</input><br><input type='checkbox' name='keterangan[]' value='32' pattern='' title=''>Eliptical Machine</input><br><input type='checkbox' name='keterangan[]' value='33' pattern='' title=''>Shoulder Press Machine</input><br><input type='checkbox' name='keterangan[]' value='34' pattern='' title=''>Bicep Curl Machine</input><br><input type='checkbox' name='keterangan[]' value='35' pattern='' title=''>Tricep Machine</input>"
    }
</script>
