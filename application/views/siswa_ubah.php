<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-primary card-success">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
                  <?php foreach ($siswa->result() as $value): ?>
                  <form class="formhorizontal" method="post" action="<?php echo base_url('siswa/update') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">No</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $value->no; ?>" disabled>
                            </div>
                            <input type="hidden" class="form-control" name="no" value="<?php echo $value->no; ?>">
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nisn" value="<?php echo $value->nisn; ?>" placeholder="NISN" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $value->nama_lengkap; ?>" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group row">
                          <label class="col-sm-2 col-form-label">id kelas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_kelas" value="<?php echo $value->id_kelas; ?>" placeholder="id kelas" required>
                            </div>
                             <div class="form-group row">
                          <label class="col-sm-2 col-form-label">alamat</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="alamat" value="<?php echo $value->alamat; ?>" placeholder="alamat" required>
                            </div>
                             <div class="form-group row">
                          <label class="col-sm-2 col-form-label">No tlp</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="no_tlp" value="<?php echo $value->no_tlp; ?>" placeholder="no_tlp" required>
                            </div>
                             <div class="form-group row">
                          <label class="col-sm-2 col-form-label">id spp</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_spp" value="<?php echo $value->id_spp; ?>" placeholder="id spp" required>
                            </div>
                               <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Opsi</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="opsi" value="<?php echo $value->opsi; ?>" placeholder="Opsi" required>
                            </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
                <?php endforeach; ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->