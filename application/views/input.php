<?php
	$this->load->view('header');
?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

<section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle"></i>Data Pribadi</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
				<form method="POST" action="<?php echo base_url('home/input'); ?>">
				<table class="table table-responsive" style="width:60%">
                  <tbody>
                  <tr>
                      <td ><label>Nama</label></td>
					  <td >:</td>
					  <td ><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required></td>
				   </tr>
				   <tr>
                      <td ><label>NIM</label></td>
					  <td >:</td>
					  <td ><input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required></td>
				   </tr>
				   <tr> 
						<td ><label style="padding-top:7px">Jenis Kelamin</label></td>
						<td >:</td>
						<td ><input name="jk" id="optionsRadios1" value="Laki-Laki" checked="" type="radio">
						Laki-Laki
						</td>
						<td ><input name="jk" id="optionsRadios2" value="Perempuan" checked="" type="radio">
						Perempuan
						</td>
					</tr>
					<tr>
							<td><label style="padding-top:7px">Tempat Lahir</label></td>
							<td >:</td>
							<td><input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat Lahir" required></td>
					</tr>
					<tr>
							<td><label style="padding-top:7px">Tanggal Lahir</label></td>
							<td >:</td>
							<td><input type="text" name="tanggal" id="example1" class="form-control" placeholder="Pilih Tanggal Lahir" required></td>
						</tr>
						<tr>
							<td><label style="padding-top:7px">Kewarganegaraan</label></td>
							<td >:</td>
							<td><label class="checkbox-inline">
						  	<input name="kewarganegaraan" id="inlineCheckbox1" value="WNA" type="checkbox"> WNA
							</label></td>
							<td><label class="checkbox-inline">
						  	<input name="kewarganegaraan" id="inlineCheckbox2" value="WNI" type="checkbox"> WNI
							</label></td>
						</tr>	  
						<tr>
							<td><label style="padding-top:7px">Agama</label></td>
							<td >:</td>
							<td><select name="agama" class="form-control">
									<option value="0" selected>--------Pilih Agama------</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Katholik">Katholik</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
								</select></td>
						</tr>

						<tr>
							<td><label style="padding-top:7px">Alamat Lengkap</label></td>
							<td >:</td>
							<td><textarea name="alamat" class="form-control" required></textarea></td>
						</tr>
				   <tr>
					  <td></td>
					  <td><input type="submit" name="tambah" class="btn btn-warning" value="Insert"></td>
					  <td></td>
				   </tr>
                  </tbody>
              </table>
              </form>
          		</div>
          	</div>
			
				</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->


      <!--main content end-->
	  
	  
<?php
	$this->load->view('footer');
?>