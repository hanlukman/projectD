  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <style>
        table, td, td{border:1px solid black;
          padding: 15px;}
      </style>
    <!-- Main content -->
    <div class="content">
      <br>
        <table width="100%">
          <br> <br>
        <tr>
            <td width="50%"><b>Process Name:</b><br> <?php echo $d_process[0]->process_name; ?>
              <br><br><br>
              <b>Critical Success Factor:</b><br> <?php echo $d_process[0]->critical; ?></td>
            <td width="50%"><b>Process Owner:</b><br>  <ul>
              <?php foreach ($d_divisi as $own): ?>
                <li><?php echo $own->name; ?></a></li>
              <?php endforeach ?>
              </ul>
              <br><br><br>
            <b>Start Event:</b><br> <?php echo $d_process[0]->start_event; ?>
            <br><br><br>
            <b>End Event:</b><br> <?php echo $d_process[0]->end_event; ?>
          </td>
        </tr>
      </table>


      <br>
      <style>
        table, td, td{border:1px solid black;
          padding: 15px;}
      </style>


      <table>
         <tr>
         <td rowspan="4"><b>Supplier for Process / Previous Process :</b><br> <?php echo $d_process[0]->input; ?></td>
         <td rowspan="3"><b>Process Input :</b><br> <?php echo $d_process[0]->process_input; ?>
        <br><br><br>
        <b>Interfaces For Input :</b><br> <?php echo $d_process[0]->int_for_input; ?>
         </td>
         <td><b>Resources / Material :</b><br><ul>
              <?php foreach ($d_resource as $res): ?>
                <li><a href="<?php echo base_url(''); ?>upload/resource/<?php echo $res->file; ?>"><?php echo $res->name; ?></a></li>
              <?php endforeach ?>
              </ul></td>
         <td><b>Process Personnel : </b><br>
              <?php foreach ($d_person as $per): ?>
                <li><a href="<?php echo base_url(''); ?>upload/personel/<?php echo $per->file; ?>"><?php echo $per->name; ?></a></li>
              <?php endforeach ?></td>
         <td rowspan="3"><b>Process Output :</b><br> <?php echo $d_process[0]->process_output; ?>
         <br><br><br>
         <b>Interfaces for Output :</b><br> <?php echo $d_process[0]->process_output; ?>
         </td>
         <td rowspan="4"><b>Customer of Process / Next Process :</b><br> <?php echo $d_process[0]->output; ?></td>
         </tr>
         <tr>
          <td colspan="2"><b>Process :</b><br> <?php echo $d_process[0]->process; ?></td>
         </tr>
         <tr>
          <td><b>Process Indicator :</b><br> <?php echo $d_process[0]->process_indicator; ?></td>
          <td><b>Process objectives / Purpose :</b><br> <?php echo $d_process[0]->process_obj; ?></td>
         </tr>
         <tr>
          <td><b>Risk Analysis : </b><br>
            <ul>
              <?php foreach ($d_risk as $rsk): ?>
                <li><a href="<?php echo base_url(''); ?>upload/risk/<?php echo $rsk->file; ?>"><?php echo $rsk->name; ?></a></li>
              <?php endforeach ?>
              </ul>
          </td> 
          <td colspan="2"><b>Reference Document :</b><br> <br>
              <ul>
              <?php foreach ($d_reference as $def): ?>
                <li><a href="<?php echo base_url(''); ?>upload/reference/<?php echo $def->file; ?>"><?php echo $def->name; ?></a></li>
              <?php endforeach ?>
              </ul>
          </td>  
          <td><b>Process Improvement :</b><br> <?php echo $d_process[0]->process_improv; ?></td>
         </tr>
      </table>

            </div>
      
      </section>
      
      </div>

</body>
</html>
