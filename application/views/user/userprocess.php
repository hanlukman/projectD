<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Process Name
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Divisi</li>
      </ol>
    </section>

<!--     <?php echo $message; ?>
 -->
    <section class="content">
      <table class="table">
        <tr>
            <th>No.</th>
            <th>ID Divisi</th>
            <th>Nama</th>
            <th>Detail</th>
        </tr>
        <?php
          $no = 1;
        foreach ($d_divisi as $dds) : ?>
<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dds->id_divisi ?></td>
            <td><?php echo $dds->nama ?></td>
            <td><a href="<?php echo base_url('c_struktur/viewdiagram/'.$dds->id_process) ?>" class="btn btn-info">Detail</a></td>
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

      </div>
    </div>
  </div>
</div>
