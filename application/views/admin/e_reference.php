<div class="content-wrapper">
	<section class="content">
		<?php foreach ($d_reference as $rrf) { ?>
		 <form method="post" action="<?php echo base_url().'c_reference/update'; ?>" enctype="multipart/form-data">
          <input type="hidden" name="id_ref2" class="form-control">
            <input type="hidden" name="id_process2" value="<?php echo $rrf->id_process ?>">
               <div class="formgroup">
                    <label>Name</label>
                    <input type="text" name="name2" class="form-control"></div>
                    <div class="formgroup">
                    <label>File</label>
                    <input type="file" name="file2" class="form-control"></div>
				
                     <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

			</div>
			


 
		</form>

<?php } ?>

	</section>
</div>