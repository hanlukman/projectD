<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Divisi
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Divisi</li>
      </ol>
    </section>

    <section class="content">
       <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
            <th>No.</th>
            <th>ID Divisi</th>
            <th>Nama</th>
            <th>AKSI</th>
        </tr>
        <?php
          $no = 1;
        foreach ($d_divisi as $dds) : ?>
<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dds->id_divisi ?></td>
            <td><?php echo $dds->nama ?></td>
            <td><?php echo anchor('c_divisi/edit/'.$dds->id_divisi,'<div class="btn btn-info btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('c_divisi/hapus/'.$dds->id_divisi,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          
        </tr>
      <?php endforeach; ?>
  </table>
  </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form data -->
        <form method="post" action="<?php echo base_url().'c_divisi/add'; ?>">
                <div class="formgroup">
                    <label>ID Divisi</label>
                    <input type="text" name="id_divisi" class="form-control"></div>
                    <div class="formgroup">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control"></div>

                    <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                 </form>
        </div>

      </div>
    </div>
  </div>
</div>