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
                     <strong>Tambah</strong> Detail Tempat Olahraga
                  </div>
                  <div class="card-body card-block">
                  <?php echo form_open('admin/createketerangan'); ?>
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
                              <select class='form-control' id='id_jenis' name='id_jenis'>
                                 <option value='0'>--pilih--</option>
                                    <?php 
                                       foreach ($keterangan as $key) {
                                       echo "<option value='$key->id_jenis'>$key->nama_olahraga</option>";
                                       }
                                    ?>
                                 <span class="text-danger"><font color='red'><?php echo form_error('id_jenis'); ?></font></span>
                              </select>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col col-md-3">
                              <label for="text-input" class="form-control-label">Detail Keterangan</label>
                           </div>
                           <div class="col-12 col-md-9">
                              <input type="text" id="keterangan" name="keterangan" placeholder="Detail Keterangan" class="form-control">
                              <small class="form-text text-muted">Masukkan Detail Keterangan</small>
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