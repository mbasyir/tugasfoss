<?php
	$this->load->view('header');
?>
<section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle"></i>Data Pribadi</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
				<form method="POST" action="<?php echo base_url('home/update'); ?>">
				<table class="table table-responsive" style="width:60%">
                  <tbody>
                  <tr>
                      <td ><label>Nama</label></td>
					  <td >:</td>
					  <td ><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="<?php echo $nama?>" required disabled></td>
				   </tr>
				   <tr>
                      <td ><label>NIM</label></td>
					  <td >:</td>
					  <td ><input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" value="<?php echo $nim?>" required disabled></td>
				   </tr>
				   <tr> 
						<td ><label style="padding-top:7px">Jenis Kelamin</label></td>
						<td >:</td>
						<?php
						if ($jk == "Laki-Laki")
						{?>
						<td ><input name="jk" id="optionsRadios1" value="Laki-Laki" type="radio" checked disabled>
						Laki-Laki
						</td>
						<td ><input name="jk" id="optionsRadios2" value="Perempuan" type="radio" disabled>
						Perempuan
						</td>
						<?php
						}
						else if ($jk == "Perempuan")
						{?>
						<td ><input name="jk" id="optionsRadios1" value="Laki-Laki" type="radio" disabled>
						Laki-Laki
						</td>
						<td ><input name="jk" id="optionsRadios2" value="Perempuan" type="radio" checked disabled>
						Perempuan
						</td>
						<?php
						}
						?>
						
					</tr>
					<tr>
							<td><label style="padding-top:7px">Tempat Lahir</label></td>
							<td >:</td>
							<td><input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat Lahir" value="<?php echo $tempat?>" required disabled></td>
					</tr>
					<tr>
							<td><label style="padding-top:7px">Tanggal Lahir</label></td>
							<td >:</td>
							<td><input type="text" name="tanggal" id="example1" class="form-control" placeholder="Pilih Tanggal Lahir" value="<?php echo $tanggal?>" required disabled></td>
						</tr>
						<tr>
							<td><label style="padding-top:7px">Kewarganegaraan</label></td>
							<td >:</td>
							<td><label class="checkbox-inline">
						  	<input name="kewarganegaraan" id="inlineCheckbox1" value="WNA" type="checkbox" <?php if ($kewarganegaraan=='WNA') echo "checked"?> disabled> WNA
							</label></td>
							<td><label class="checkbox-inline">
						  	<input name="kewarganegaraan" id="inlineCheckbox2" value="WNI" type="checkbox" <?php if ($kewarganegaraan=='WNI') echo "checked"?> disabled> WNI
							</label></td>
						</tr>	  
						<tr>
							<td><label style="padding-top:7px">Agama</label></td>
							<td >:</td>
							<td><select name="agama" class="form-control" disabled>
									<option value="0" selected disabled>--------Pilih Agama------</option>
									<option value="Islam"<?php if ($agama == "Islam") echo "selected"?> disabled>Islam</option>
									<option value="Kristen"<?php if ($agama == "Kristen") echo "selected"?> disabled>Kristen</option>
									<option value="Katholik"<?php if ($agama == "Katholik") echo "selected"?> disabled>Katholik</option>
									<option value="Hindu"<?php if ($agama == "Hindu") echo "selected"?> disabled>Hindu</option>
									<option value="Budha"<?php if ($agama == "Budha") echo "selected"?> disabled>Budha</option>
								</select></td>
						</tr>

						<tr>
							<td><label style="padding-top:7px">Alamat Lengkap</label></td>
							<td >:</td>
							<td><textarea name="alamat" class="form-control" required disabled><?php echo $alamat?></textarea></td>
						</tr>
				   <tr>
					  <td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
					  <td></td>
				   </tr>
                  </tbody>
              </table>
              </form>
          		</div>
          	</div>

	</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->


      <!--main content end-->
	  
	  
<?php
	$this->load->view('footer');
?>