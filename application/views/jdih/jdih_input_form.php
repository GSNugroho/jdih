<?php
	$this->load->view('jdih/jdih');
?>
	<link rel="stylesheet" href="<?php echo base_url('assets/datepicker/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datepicker/css/ilmudetil.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datepicker/css/bootstrap-datetimepicker.css')?>"/>
	<script src="<?php echo base_url('assets/datepicker/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/datepicker/js/moment-with-locales.js')?>"></script>
	<script src="<?php echo base_url('assets/datepicker/js/jquery-1.11.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/datepicker/js/bootstrap-datetimepicker.js')?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/jquery-ui/themes/smoothness/jquery-ui.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/uploadifive/uploadifive.css')?>">
	<script src="<?php echo base_url('assets/bower_components/uploadifive/jquery.uploadifive.min.js')?>"></script>

	<script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.js')?>"></script>
<style type="text/css">
       .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        } 
		#queue{
			border: 1px solid #E5E5E5;
			height: 177px;
			overflow: auto;
			margin-bottom: 10px;
			padding: 0 3px 3px;
			width: 100%;
		}
		.uploadifive-button {
			float: left;
			margin-right: 10px;
		}
</style>

    <div class="container">
<div class="box box-info">
	<div class="box-header with-border">
    	<h3 class="box-title">Tambah Peraturan</h3>
	</div>
	<?php //echo validation_errors();?>
	<form role= "form" action="<?php echo base_url().'Jdih/create_action';?>" method="POST" enctype="multipart/form-data">
	<div class="box-body">
    <div class="form-group">
		<label for="r_lingkup">Ruang Lingkup </label><?php echo form_error('r_lingkup')?>
		<select name="r_lingkup" class="form-control" id="r_lingkup">
			<option value="">--Pilih Ruang Lingkup--</option>
			<option value="1" <?php echo ($r_lingkup == '1')?'selected':''?>>Nasional</option>
			<option value="2" <?php echo ($r_lingkup == '2')?'selected':''?>>Internal RS</option>
		</select>
    </div>
	<div class="form-group">
		<label for="jns_prtn">Jenis Peraturan </label><?php echo form_error('jns_prtn')?>
		<input class="form-control" type="text" name="jns_prtn" id="jns_prtn" placeholder="Jenis Peraturan" value="<?php echo $jns_prtn?>">
		<input type="hidden" name="id_jns_prtn" id="id_jns_prtn">
		<!-- <select name="jns_prtn" class="form-control" id="jns_prtn"> -->
		<!-- <option value="">--Pilih Jenis Peraturan--</option> -->
		<?php
            // foreach ($dd_jns as $row) {  
            // echo "<option value='".$row->id_jns."'>".$row->nm_jdih_jns."</option>";
            // }
            // echo"
        	// </select>"
        ?>
	</div>
	<div class="form-group"	>
		<label for="th_prtn">Tahun Terbit Peraturan </label><?php echo form_error('th_prtn')?>
		<input class="form-control" type="text" name="th_prtn" id="th_prtn" placeholder="Tahun Terbit Peraturan" value="<?php echo $th_prtn?>">
	</div>
	<div class="form-group">
		<label for="nmr_prtn">Nomor Peraturan </label><?php echo form_error('nmr_prtn')?>
		<input class="form-control" type="text" name="nmr_prtn" id="nmr_prtn" placeholder="Nomor Peraturan" value="<?php echo $nmr_prtn?>">
	</div>
	<div class="form-group">
		<label for="nm_prtn">Nama Peraturan </label><?php echo form_error('nm_prtn')?>
		<input class="form-control" type="text" name="nm_prtn" id="nm_prtn" placeholder="Nama Peraturan" value="<?php echo $nm_prtn?>">
	</div>
	<div class="form-group">
		<label for="sts_prtn">Status Peraturan </label><?php echo form_error('sts_prtn')?>
		<select class="form-control" name="sts_prtn" id="sts_prtn">
			<option value="">--Pilih Status Peraturan--</option>
			<option value="1" <?php echo ($sts_prtn == '1')?'selected':''?>>Berlaku</option>
			<option value="2" <?php echo ($sts_prtn == '2')?'selected':''?>>Tidak Berlaku</option>
		</select>
	</div>
	<div class="form-group">
		<label for="strkl">Struktural </label><?php echo form_error('stru_prtn')?>
		<input class="form-control" type="text" name="stru_prtn" id="stru_prtn" placeholder="Struktural"  value="<?php echo $stru_prtn?>">
	</div>
	<div class="form-group">
		<label for="doc">Upload Dokumen </label><?php echo form_error('data')?>
		<input class="form-control" type="file" name="data" id="doc"><?php echo $datau?>
	</div>
	<div class="form-group">
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true"/>
		<input id="uploaddata" style= "background-color: #686868; color: white; height: 30px; line-height: 30px; overflow: hidden; position: relative; text-align: center; width: auto; z-index: 999;" type="button" onClick="javascript:$('#file_upload').uploadifive('upload')" value="Upload Dokumen"/>
	</form>
	</div>
	<div class="form-group">
		<input type='submit' name='submit' value='Simpan' class="btn btn-primary"/>
		<a href="<?php echo base_url('Jdih/list_jdih') ?>" class="btn btn-danger">Batal</a>
	</div>
	</form>
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
</div>
<script type="text/javascript">
$(function() {
    $("#jns_prtn").autocomplete({
        source: "<?php echo base_url('Jdih/autojenis'); ?>",
		minLength:1,
		select: function (event, ui) {
                    $('[name="jns_prtn"]').val(ui.item.value); 
                    $('[name="id_jns_prtn"]').val(ui.item.id); 
                }
    });
});
$(function() {
    $("#stru_prtn").autocomplete({
        source: "<?php echo base_url('Jdih/autostrk'); ?>",
		minLength:1
    });
});
$(function() { 
  	$('#th_prtn').datetimepicker({locale:'id',format : "YYYY"});
	});
</script>

<script type="text/javascript">
	<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : false,
				'checkScript'      : '<?php echo base_url().'Jdih/check'?>',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          : 'queue',
				'uploadScript'     : '<?php echo base_url().'Jdih/uploadifive'?>',
				'onUploadComplete' : function(file, data) { console.log(data); }
			});
		});
</script>
</body>
</html>