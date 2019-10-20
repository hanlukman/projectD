<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reference
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Reference</li>
      </ol>
    </section>

<!--     <?php echo $message; ?>
 -->
    <section class="content">
      <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
      <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>File</th>
            <th>AKSI</th>
        </tr>
        <?php
        $no = 1;
        foreach ($d_reference as $ref) : ?>
<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ref->name ?></td>
            <td><?php echo $ref->file ?></td>
            <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('c_reference/hapus/'.$ref->id_ref.'/'.$id_process,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          
        </tr>
      <?php endforeach; ?>
</table>
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
        <form method="post" action="<?php echo base_url().'c_reference/add'; ?>" enctype="multipart/form-data">
            <input type="hidden" name="id_process" value="<?php echo $id_process ?>">
                <div class="formgroup">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"></div>
                    <div class="formgroup">
                    <label>File</label>
                    <input type="file" name="file" class="form-control"></div>

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
