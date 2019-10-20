<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Turtel
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('c_turtel/turtel') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Turtle</li>
      </ol>
    </section>

<!--     <?php echo $message; ?>
 -->
    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
        <?php echo $this->session->flashdata('message'); ?>
    <div style="overflow-x: auto;">
      <table class="table">
        <tr>
            <th>No.</th>
            <th>Process Name</th>
            <th>Critical Success Factor</th>
            <th>Process Owner</th>
            <th>Start Event</th>
            <th>End Event</th>
            <th>Supplier for process / Previous Process</th>
            <th>Process Input</th>
            <th>Interface for Input</th>
            <th>Resources / Material (With What?)</th>
            <th>Process Personnel (with whom?)</th>
            <th>Process</th>
            <th>Process Indicator (how many?)</th>
            <th>Process Objectives / Purpose</th>
            <th>Risk Analysis</th>
            <th>Process Output</th>
            <th>Interface for output</th>
            <th>Process Improvement</th>
            <th>Customer of Process / Next process</th>
            <th>Reference</th>
            <th>Risk Analysis</th>
            <th>Divisi</th>
            <th><center>AKSI</center></th>
        </tr>
        <?php
        $no = 1;
        foreach ($d_turtel as $ttl) : ?>
<tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ttl->process_name ?></td>
            <td><?php echo $ttl->critical ?></td>
            <td><?php echo $ttl->process_owner ?></td>
            <td><?php echo $ttl->start_event ?></td>
            <td><?php echo $ttl->end_event ?></td>
            <td><?php echo $ttl->input ?></td>
            <td><?php echo $ttl->process_input ?></td>
            <td><?php echo $ttl->int_for_input ?></td>
            <td><?php echo anchor('c_resource/view/'.$ttl->id_process,'<div class="btn btn-info btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('c_personel/view/'.$ttl->id_process,'<div class="btn btn-info btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo $ttl->process ?></td>
            <td><?php echo $ttl->process_indicator ?></td>
            <td><?php echo $ttl->process_obj ?></td>
            <td><?php echo $ttl->risk ?></td>
            <td><?php echo $ttl->process_output ?></td>
            <td><?php echo $ttl->int_for_output ?></td>
            <td><?php echo $ttl->process_improv ?></td>
            <td><?php echo $ttl->output ?></td>
            <td><?php echo anchor('c_reference/view/'.$ttl->id_process,'<div class="btn btn-info btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
           <td><?php echo anchor('c_risk/view/'.$ttl->id_process,'<div class="btn btn-info btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('c_detail/viewbyid/'.$ttl->id_process,'<div class="btn btn-info btn-sm"><i class="fa fa-users"></i></div>') ?></td>
            <td><?php echo anchor('c_turtel/edit/'.$ttl->id_process,'<div class="btn btn-info btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('c_turtel/hapus/'.$ttl->id_process,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

          
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
        <form method="post" action="<?php echo base_url().'c_turtel/tambah_aksi'; ?>" enctype="multipart/form-data">
                    <div class="formgroup">
                    <label>Process Name</label>
                    <input type="text" name="proc_name" class="form-control"></div>
                    <div class="formgroup">
                    <label>Critical Success Factors</label>
                    <input type="text" name="critical_fact" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Owner</label>
                    <input type="text" name="proc_own" class="form-control"></div>
                    <div class="formgroup">
                    <label>Start Event</label>
                    <input type="text" name="start_ev" class="form-control"></div>
                    <div class="formgroup">
                    <label>End Event</label>
                    <input type="text" name="end_ev" class="form-control"></div>

                    <div class="formgroup">
                    <label>Supplier for process / previous process</label>
                    <input type="text" name="input_proc" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Input</label>
                    <input type="text" name="proc_input" class="form-control"></div>
                    <div class="formgroup">
                    <label>Interfaces for Input</label>
                    <input type="text" name="int_inp" class="form-control"></div>
                    <div class="formgroup">
                    <label>Resources / Material</label>
                    <textarea type="text" name="material" class="form-control" style="height:200px"></textarea></div>
                    <div class="formgroup">
                    <label>Process Personnel</label>
                    <input type="text" name="human" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process</label>
                    <textarea type="text" name="process_do" class="form-control" style="height:200px"></textarea>
                    </div>
                    <div class="formgroup">
                    <label>Process Indicator</label>
                    <input type="text" name="proc_indi" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Objectives</label>
                    <input type="text" name="proc_obj" class="form-control"></div>
                    <div class="formgroup">
                    <label>Risk Analysis</label>
                    <input type="text" name="risk" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Output</label>
                    <input type="text" name="proc_outp" class="form-control"></div>
                    <div class="formgroup">
                    <label>Interfaces Output</label>
                    <input type="text" name="int_outp" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Improvement</label>
                    <input type="text" name="proc_impro" class="form-control"></div>
                    <div class="formgroup">
                    <label>Customer of Process / Next Process</label>
                    <input type="text" name="outp_proc" class="form-control"></div>
                    
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