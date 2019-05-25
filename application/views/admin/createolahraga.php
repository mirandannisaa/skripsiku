<div class="super_container">
   <div class="container">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Tambah</strong> Jenis Olahraga
                    </div>
                    <div class="card-body card-block">
                        <?php echo form_open('admin/createolahraga'); ?>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="form-control-label">Nama Olahraga</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nama_olahraga" name="nama_olahraga" placeholder="Nama Olahraga" class="form-control">
                                    <small class="form-text text-muted">Masukkan Nama Olahraga</small>
                                </div>
                            </div>
                            <center>
                                <button type="submit" id="submit-button" class="btn btn-primary" value="submit">Save</button>
                                <button type="reset" class="btn btn-danger" id="cancel-button" name="action" value="CANCEL">Cancel</button>
                            </center>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>