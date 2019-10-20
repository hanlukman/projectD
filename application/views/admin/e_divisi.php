<div class="content-wrapper">
	<section class="content">
		<?php foreach ($d_divisi as $dds) { ?>
		<form action="<?php echo base_url().'c_divisi/update';?>" method="post">
                    <div class="formgroup">
                    <label>ID</label>
                    <input type="text" name="id_divisi2" class="form-control" readonly value="<?php echo $dds->id_divisi ?>"></div>
                    <div class="formgroup" >
                    <label>Nama Divisi</label>
                    <input type="text" name="nama2" class="form-control" value="<?php echo $dds->nama?>"></div>
				
                     <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

			</div>
			


 
		</form>

<?php } ?>

	</section>
</div>