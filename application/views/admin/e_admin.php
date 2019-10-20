<div class="content-wrapper">
	<section class="content">
      <?php foreach ($d_admin as $adm) { ?>
		  <form method="post" action="<?php echo base_url().'c_admin/update'; ?>">
                <div class="formgroup">
                    <input type="hidden" name="id2" class="form-control" readonly value="<?php echo $adm->id?>">
                    <label>NIK</label>
                    <input type="text" name="nik2" class="form-control" min="0" maxlength="8">
                     <label>Nama</label>
                    <input type="text" name="nama2" class="form-control" min="0" maxlength="8">
                    <label>No. Telepon</label>
                    <input type="number" name="no_telp2" class="form-control">
                    <label>Password</label>
                    <input type="password" name="pass2" class="form-control" minlength="8" maxlength="12">
                    <label>Level</label>
                    <select name="level2" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>

                    </select>



                    <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                 </form>
               <?php } ?>
	</section>
</div>