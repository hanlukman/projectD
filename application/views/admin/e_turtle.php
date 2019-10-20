<div class="content-wrapper">
	<section class="content">
		<?php foreach ($d_turtel as $ttl) { ?>
		<form action="<?php echo base_url().'c_turtel/update';?>" method="post">
                    <input type="hidden" name="id_bidang2" class="form-control" readonly value="<?php echo $ttl->id_process ?>">
                    <div class="formgroup" >
                    <label>Process Name</label>
                    <input type="text" name="proc_name2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Critical Success Factors</label>
                    <input type="text" name="critical_fact2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Owner</label>
                    <input type="text" name="proc_own2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Start Event</label>
                    <input type="text" name="start_ev2" class="form-control"></div>
                    <div class="formgroup">
                    <label>End Event</label>
                    <input type="text" name="end_ev2" class="form-control"></div>

                    <div class="formgroup">
                    <label>Supplier for process / previous process</label>
                    <input type="text" name="input_proc2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Input</label>
                    <input type="text" name="proc_input2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Interfaces for Input</label>
                    <input type="text" name="int_inp2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Resources / Material</label>
                    <textarea type="text" name="material2" class="form-control" style="height:200px"></textarea></div>
                    <div class="formgroup">
                    <label>Process Personnel</label>
                    <input type="text" name="human2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process</label>
                    <textarea type="text" name="process_do2" class="form-control" style="height:200px"></textarea>
                    </div>
                    <div class="formgroup">
                    <label>Process Indicator</label>
                    <input type="text" name="proc_indi2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Objectives</label>
                    <input type="text" name="proc_obj2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Risk Analysis</label>
                    <input type="text" name="risk2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Output</label>
                    <input type="text" name="proc_outp2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Interfaces Output</label>
                    <input type="text" name="int_outp2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Process Improvement</label>
                    <input type="text" name="proc_impro2" class="form-control"></div>
                    <div class="formgroup">
                    <label>Customer of Process / Next Process</label>
                    <input type="text" name="outp_proc2" class="form-control"></div>
				
                     <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

			</div>
			


 
		</form>

<?php } ?>

	</section>
</div>