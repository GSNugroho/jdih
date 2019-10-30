<?php
	$this->load->view('jdih/jdih');
?>
<style>
	.form_error span {
  width: 80%;
  height: 35px;
  /* margin: 3px 10%; */
  font-size: 1.1em;
  color: #D83D5A;
}
.form_error input {
  border: 1px solid #D83D5A;
}

/*Styling in case no errors on form*/
.form_success span {
  width: 80%;
  height: 35px;
  /* margin: 3px 10%; */
  font-size: 1.1em;
  color: white;
}
.form_success input {
  border: 1px solid green;
}
#error_msg {
  color: red;
  text-align: center;
  margin: 10px auto;
}
</style>

<div class="container">
<div class="box box-info">
		<?php
			if (($this->session->userdata('messagess')) <> '') {
                echo '<div class="pesans">'.$this->session->userdata('messages').'</div>';
            }
        ?>
	<div class="box-header with-border">
    	<h3 class="box-title">Tambah Jenis Peraturan</h3>
	</div>
	<form role= "form" action="<?php echo base_url().'Jdih/create_jns_prtn_action';?>" method="POST" enctype="multipart/form-data">
	<div id="error_msg"></div>
	<div class="box-body">
	<div class="form-group"	>
		<label for="jns_prtn">Jenis Peraturan</label>
		<input class="form-control" type="text" name="jns_prtn" id="jns_prtn" placeholder="Jenis Peraturan">
		<span></span>
	</div>
	<div class="form-group">
		<button form="#" class="btn btn-info">Cek</button>
	</div>
	<br>
	<div class="form-group">
		<input type='submit' name='submit' value='Simpan' class="btn btn-primary"/>
		<a href="<?php echo base_url('Jdih/jns_prtn') ?>" class="btn btn-danger">Batal</a>
	</div>
	</form>
</div>
</div>
</div>
</div>
<footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <!-- <b>Version</b> 2.4.18 -->
      </div>
      <strong>Copyright &copy; 2019 <a href="https://adminlte.io"></a>.</strong> All rights
      reserved.
    </div>
     <!-- /.container -->
   </footer> 
   <script>
	   $('document').ready(function() {
			var jns_prtn_awal = false;
			$('#jns_prtn').on('change', function() {
				var jns_prtn = $('#jns_prtn').val();
				if(jns_prtn == ''){
					jns_prtn_awal = false;
					return;
				}
				$.ajax({
					url: '<?php echo base_url('Jdih/cek_jns')?>',
					type: 'post',
					data: {
						'jns_prtn_check' :1,
						'jns_prtn': jns_prtn,
					},
					success: function(respone){
						if(respone == 'taken'){
							jns_prtn_awal = false;
							$('#jns_prtn').parent().removeClass();
							$('#jns_prtn').parent().addClass("form_error");
							$('#jns_prtn').siblings("span").text('Nama Jenis Peraturan Sudah Pernah Dimasukkan');
						}else if(respone == 'not_taken'){
							jns_prtn_awal = true;
							$('#jns_prtn').parent().removeClass();
							$('#jns_prtn').parent().addClass("form_success");
							$('#jns_prtn').siblings("span").text('Nama Jenis Peraturan Bisa Dimasukkan');
						}
					}
				})
			});
	   });
   </script>
</body>
</html>