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
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                                        <label for="text-input" class=" form-control-label">Nama Tempat</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="nama_tempat" name="nama_tempat" placeholder="Nama Tempat" class="form-control">
                                                        <small class="form-text text-muted">Masukkan Nama Tempat</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Alamat</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control">
                                                        <small class="form-text text-muted">Masukkan Alamat</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Nomor Telepon</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="no_telp" name="no_telp" placeholder="Nomor Telepon" class="form-control">
                                                        <small class="form-text text-muted">Masukkan Nomor Telepon</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Harga</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="harga" name="harga" placeholder="Harga" class="form-control">
                                                        <small class="form-text text-muted">Masukkan Harga</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Jam Buka</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="jam_buka" name="jam_buka" placeholder="Jam Buka" class="form-control">
                                                        <small class="form-text text-muted">Masukkan Jam Buka</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Jam Tutup</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="jam_tutup" name="jam_tutup" placeholder="Jam Tutup" class="form-control">
                                                        <small class="form-text text-muted">Masukkan Jam Tutup</small>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Jenis Olahraga</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="jenis_olahraga" id="jenis_olahraga" class="form-control">
                                                            <option value="futsal">Futsal</option>
                                                            <option value="badminton">Badminton</option>
                                                            <option value="berenang">Berenang</option>
                                                            <option value="gym">Gym</option>
                                                            <option value="jogging">Jogging</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="foto" class=" form-control-label">Foto</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="file" id="foto" name="foto" multiple="" class="form-control-file">
                                                    </div>
                                                </div>
                                                
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label class=" form-control-label">Fasilitas</label>
                                                    </div>
                                                    <div class="col col-md-9">
                                                        <div class="form-check">
                                                            <div class="checkbox">
                                                                <label for="kamarmandi" class="form-check-label ">
                                                                    <input type="checkbox" id="kamarmandi" name="kamarmandi" value="kamarmandi" class="form-check-input">Kamar Mandi / Kamar Ganti
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="airhangat" class="form-check-label ">
                                                                    <input type="checkbox" id="airhangat" name="airhangat" value="airhangat" class="form-check-input"> Air Hangat
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="loker" class="form-check-label ">
                                                                    <input type="checkbox" id="loker" name="loker" value="loker" class="form-check-input"> Loker
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="parkirmotor" class="form-check-label ">
                                                                    <input type="checkbox" id="parkirmotor" name="parkirmotor" value="parkirmotor" class="form-check-input">Tempat Parkir Sepeda Motor
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="parkirmobil" class="form-check-label ">
                                                                    <input type="checkbox" id="parkirmobil" name="parkirmobil" value="parkirmobil" class="form-check-input"> Tempat Parkir Mobil
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="kantin" class="form-check-label ">
                                                                    <input type="checkbox" id="kantin" name="kantin" value="kantin" class="form-check-input"> Kantin
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label for="gazebo" class="form-check-label ">
                                                                    <input type="checkbox" id="gazebo" name="gazebo" value="gazebo" class="form-check-input"> Gazebo / Tempak Duduk
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </form>
                                            <center>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Simpan
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                            </center>
                                        </div>
                                    </div>
                                    <?php echo form_close(); ?>
                    </div>
            </div>
        </div>
    </div>
</body>