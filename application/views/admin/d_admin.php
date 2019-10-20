<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Management
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Management</li>
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
            <th>NIK</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Level</th>
            <th>AKSI</th>
        </tr>
        <?php
          $no = 1;
        foreach ($d_admin as $adm) : ?>
<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $adm->nik ?></td>
            <td><?php echo $adm->nama ?></td>
            <td><?php echo $adm->no_telp ?></td>
            <td><?php echo $adm->level ?></td>
            <td><?php echo anchor('c_admin/edit/'.$adm->id,'<div class="btn btn-info btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('c_admin/hapus/'.$adm->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          
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
        <form method="post" action="<?php echo base_url().'c_admin/add'; ?>">
                <div class="formgroup">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" min="0" maxlength="8">
                     <label>Nama</label>
                    <input type="text" name="nama" class="form-control" min="0" maxlength="8">
                    <label>No. Telepon</label>
                    <input type="number" name="no_telp" class="form-control">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control" minlength="8" maxlength="12">
                    <label>Level</label>
                    <select name="level" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>

                    </select>



                    <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                 </form>
        </div>
      </div>
    </div>
  </div>
</div>