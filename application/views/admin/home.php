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
      <section>
         <div class="super_container" >
         <div class="super_container_inner">
         <div class="super_overlay"></div>
         <div class="home" style="padding-top: 9%; padding-left:1%; padding-right:1%">
         <div class="card">
         <div class="card-header">
            <h4>Data Admin</h4>
         </div>
         <div class="card-body">
         <div class="default-tab">
            <nav>
               <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-tempat-tab" data-toggle="tab" href="#nav-tempat" role="tab" aria-controls="nav-tempat"
                     aria-selected="true">Tempat Olahraga</a>
                  <a class="nav-item nav-link" id="nav-fasilitas-tab" data-toggle="tab" href="#nav-fasilitas" role="tab" aria-controls="nav-fasilitas"
                     aria-selected="false">Fasilitas</a>
                  <a class="nav-item nav-link" id="nav-jenis-tab" data-toggle="tab" href="#nav-jenis" role="tab" aria-controls="nav-jenis"
                     aria-selected="false">Jenis Olahraga</a>
               </div>
            </nav>

            <!-- Tempat Olahraga -->
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-tempat" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <a href="<?php echo base_url('admin/create/') ?>" class="btn btn-primary float-right">
                           <i class="fa fa-plus-circle"></i> Tambah Tempat Olahraga
                           </a>
                        </div>
                        <div class="card-body">
                           <table id="bootstrap-data-table" class="table table-striped table-bordered">
                              <thead>
                                 <tr>
                                    <th>Nama Tempat</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Harga</th>
                                    <th>Jam Operasional</th>
                                    <th>Fasilitas</th>
                                    <th>Jenis Olahraga</th>
                                    <th>Lokasi</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>$320,800</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>
                                       <div class="table-data-feature">
                                          <a href="<?php echo site_url('admin/edittempat/')?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                          <i class="fa fa-edit"></i>
                                          </a>
                                          <a href="<?php echo site_url('admin/hapustempat/')?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                          <i class="fa fa-ban"></i>
                                          </a>
                                       </div>
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
                                       <td><?php echo $key->id_fasilitas ?></td>
                                       <td><?php echo $key->nama_fasilitas ?></td>
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
                                       <td><?php echo $key->id_jenis ?></td>
                                       <td><?php echo $key->nama_olahraga ?></td>
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
            </div>
         </div>
      </section>
   </body>