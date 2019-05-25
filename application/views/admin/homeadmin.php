<div class="super_container_inner">
    <div class="super_overlay"></div>
    
    <div class="card" style="margin-top:8%;">
        	<div class="card-header">
            	<h4>Data Admin</h4>
            </div>
            <div class="card-body">
                <div class="default-tab">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        	<a class="nav-item nav-link active" id="nav-tempat-tab" data-toggle="tab" href="#nav-tempat" role="tab" aria-controls="nav-tempat" aria-selected="true">Tempat Olahraga</a>
                            <a class="nav-item nav-link" id="nav-fasilitas-tab" data-toggle="tab" href="#nav-fasilitas" role="tab" aria-controls="nav-fasilitas" aria-selected="false">Fasilitas</a>
                            <a class="nav-item nav-link" id="nav-jenis-tab" data-toggle="tab" href="#nav-jenis" role="tab" aria-controls="nav-jenis" aria-selected="false">Jenis Olahraga</a>
                            <a class="nav-item nav-link" id="nav-keterangan-tab" data-toggle="tab" href="#nav-keterangan" role="tab" aria-controls="nav-keterangan" aria-selected="false">Keterangan</a>
                        </div>

                        <!-- Tempat Olahraga -->
                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                        	
                        		<div class="col-md-12">
                        			<div class="card">
                        				<div class="card-header">
                        					<a href="<?php echo base_url('admin/createtempat/') ?>" class="btn btn-primary float-right">
                        						<i class="fa fa-plus-circle"></i> Tambah Tempat Olahraga
                        					</a>
                        				</div>

                        				<div class="card-body">
                        					<table id="bootstrap-data-table" class="table table-striped table-responsive table-bordered">
                        						<thead>
                                                	<tr>
                                                    	<th>ID Tempat</th>
                                                        <th>Jenis Olahraga</th>
                                                        <th>Nama Tempat</th>
                                                        <th>Alamat</th>
                                                        <th>Kecamatan</th>
                                                        <th>Nomor Telepon</th>
                                                        <th>Harga</th>
                                                        <th>Hari Buka</th>
                                                        <th>Jam Buka</th>
                                                        <th>Jam Tutup</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                        <th>Fasilitas</th>
                                                        <th>Keterangan</th>
                                                        <th>Foto</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($tempat_list as $key) { ?>
                                                    	<tr>
                                                        	<td>
                                                            	<?php echo $key->id_tempat ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->nama_olahraga ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->nama_tempat ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->alamat ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->kecamatan ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->no_telp ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->harga ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->hari_buka ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->jam_buka ?>
                                                            </td>
                                                            <td>
                                                            	<?php echo $key->jam_tutup ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->latitude ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->longitude ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->nama_fasilitas ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $key->keterangan ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                    $this->load->model('Admin_model');
                                                                    $data['foto']=$this->Admin_model->getFoto($key->id_tempat);
                                                                    foreach ($data['foto'] as $key) { ?>
                                                                    <img src="<?php echo base_url('uploads/files/').$key->foto?>" width="400px" height="200px">
                                                                <?php } ?>
                                                                    <td>
                                                                        <div class="table-data-feature">
                                                                                    <a href="<?php echo site_url('admin/edittempat/').$key->id_tempat?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                                        <i class="fa fa-edit"></i>
                                                                                    </a>
                                                                                    <a href="<?php echo site_url('admin/hapustempat/').$key->id_tempat?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                                        <i class="fa fa-ban"></i>
                                                                                    </a>
                                                                        </div>
                                                                    </td>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fasilitas -->
                                <div class="tab-pane fade" id="nav-fasilitas" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="<?php echo base_url('admin/createfasilitas/') ?>" class="btn btn-primary float-right">
                                                    <i class="fa fa-plus-circle"></i> Tambah Fasilitas
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nama Fasilitas</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($fasilitas_list as $key) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $key->id_fasilitas ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $key->nama_fasilitas ?>
                                                                </td>
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <a href="<?php echo site_url('admin/editfasilitas/').$key->id_fasilitas?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <a href="<?php echo site_url('admin/deletefasilitas/').$key->id_fasilitas?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                            <i class="fa fa-ban"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Jenis -->
                                <div class="tab-pane fade" id="nav-jenis" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="<?php echo base_url('admin/createolahraga/') ?>" class="btn btn-primary float-right">
                                                    <i class="fa fa-plus-circle"></i> Tambah Jenis Olahraga
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nama Olahraga</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($olahraga_list as $key) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $key->id_jenis ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $key->nama_olahraga ?>
                                                                </td>
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <a href="<?php echo site_url('admin/editolahraga/').$key->id_jenis?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <a href="<?php echo site_url('admin/deleteolahraga/').$key->id_jenis?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                            <i class="fa fa-ban"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Keterangan -->
                                <div class="tab-pane fade" id="nav-keterangan" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="<?php echo base_url('admin/createketerangan/') ?>" class="btn btn-primary float-right">
                                                    <i class="fa fa-plus-circle"></i> Tambah Detail Tempat Olahraga
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Jenis Olahraga</th>
                                                            <th>Detail Keterangan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($detail_list as $key) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $key->id_keterangan ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $key->nama_olahraga ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $key->keterangan ?>
                                                                </td>
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <a href="<?php echo site_url('admin/editketerangan/').$key->id_keterangan?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <a href="<?php echo site_url('admin/deleteketerangan/').$key->id_keterangan?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                            <i class="fa fa-ban"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>
</div>