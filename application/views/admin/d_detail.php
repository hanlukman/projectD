<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Process
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Process</li>
      </ol>
    </section>

<!--     <?php echo $message; ?>
 -->
    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
      <table class="table">
        <tr>
            <th>No.</th>
            <th>ID Divisi</th>
            <th>Nama</th>
            <th>AKSI</th>
        </tr>
        <?php
        $no = 1;
        foreach ($d_detail as $ddt) : ?>
<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ddt->id_divisi ?></td>
            <td><?php echo $ddt->dvs ?></td>
            <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('c_detail/hapus/'.$ddt->id_divisi.'/'.$ddt->id_process,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          
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
        <form method="post" action="<?php echo base_url().'c_detail/add'; ?>">
                    <input type="hidden" name="id_process" value="<?php echo $d_process[0]->id_process ?>">
                    <div class="formgroup">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $d_process[0]->process_name ?>" readonly></div>
                    
                    <label>ID Divisi</label>

                      <select name="id_divisi" class="form-control"> 
                        <?php foreach ($d_divisi as $dvs) : ?>
                          <option value="<?php echo $dvs->id_divisi; ?>"><?php echo $dvs->nama; ?></option>
                          <?php endforeach; ?>
                      </select>


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