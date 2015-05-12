<?php
	$this->load->view('header');
?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

<section id="main-content">
          <section class="wrapper site-min-height">
          	        
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h3><i class="halflings-icon tasks"></i><span class="break"></span>Database</h3>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<?php //if ($cek=='detail'){ ?>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
							<thead>
								<tr>
									<th>NO</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tempat, Tanggal Lahir</th>
									<th>Kewarganegaraan</th>
									<th>Agama</th>
									<!--th>Alamat</th-->
									<th>Action</th>
								</tr>
							</thead>   
							<tbody>
								<?php 
								$i=1;
								foreach ($hasil as $data) {
								?>
								<tr>
									<td><?php echo $i++;?></td>
									<td><?php echo $data->nim;?></td>
									<td><?php echo $data->nama;?></td>
									<td><?php echo $data->jk;?></td>
									<td><?php echo $data->tempat;?></td>
									<td><?php echo $data->kewarganegaraan;?></td>
									<td><?php echo $data->agama;?></td>
									<!--td><?php //echo $data->alamat;?></td-->

									<td style="width:21%">
										<a class="btn btn-success" href="<?php echo base_url('home/detail?id='.$data->id); ?>">DETAIL</a>
										<a class="btn btn-success" href="<?php echo base_url('home/edit?id='.$data->id); ?>">EDIT</a>
										<a class="btn btn-danger" <?php echo 'onclick="javascript:conf_del('.$data->id.')">'; ?> HAPUS</a>
									</td>
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<script>
			function conf_del(id){
				var r = confirm("Apakah anda yakin akan menghapusnya ?");
				if(r) window.location.href = "<?php echo base_url('home/process?act=pengumuman&do=delete&id='); ?>" + id;
			}
			</script>
			

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->


      <!--main content end-->
	  
	  
<?php
	$this->load->view('footer');
?>