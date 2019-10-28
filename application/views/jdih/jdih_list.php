<?php
	$this->load->view('jdih/jdih');
?>
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
<style>
    .pesan{
    display: none;
    position: fixed;
    border: 1px solid greenyellow;
    width: 200px;
    top: 75px;
    left: 500px;
    padding: 5px 10px;
    background-color: #00a65a;
    text-align: center;
	color: white;
	}
	.pesans{
    display: none;
    position: fixed;
    border: 1px solid red;
    width: 200px;
    top: 75px;
    left: 500px;
    padding: 5px 10px;
    background-color: #f56954;
    text-align: center;
	color: white;
	}
</style>
    <div class="container">
	
<div class="box box-info">
		<?php
            if (($this->session->userdata('message')) <> '') {
                echo '<div class="pesan">'.$this->session->userdata('message').'</div>';
			}
			if (($this->session->userdata('messages')) <> '') {
                echo '<div class="pesans">'.$this->session->userdata('messages').'</div>';
            }
        ?>
    <div class="box-header with-border">
		<h3 class="box-title">Data Peraturan</h3>
	</div>
	<table style="margin: 10px 0 0 10px">
     <tr>
       <td>
		<div class="form-group">
			<select id="r_lingkup" class="form-control" style="width:auto">
				<option value="">--Ruang Lingkup--</option>
				<option value="1">Nasional</option>
				<option value="2">Internal RS</option>
			</select>
		</div>
	   </td>
	   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
       <td>
		<div class="form-group">
			<select id="sts_prtn" class="form-control" style="width:auto">
				<option value="">--Status--</option>
				<option value="1">Berlaku</option>
				<option value="2">Tidak Berlaku</option>
			</select>
		</div>
       </td>
     </tr>
   	</table>
<div class="box-body">
	<?php $error;?>
	<table id="dataJDIH" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th width='15%'>Jenis Peraturan</th>
			<th width='15%'>Nomor Peraturan</th>
			<th width='10%'>Tahun Terbit</th>
			<th width='20%'>Tentang</th>
			<th width='10%'>Ruang Lingkup</th>
			<th width='5%'>Status</th>
			<th width='10%'>Bagian Terkait</th>
			<th width='15%'>Tindakan</th>
		</tr>
		</thead>
	</table>
	</div>
</div>
</div>
</div>
</div>
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script>
$(document).ready(function(){
   var tables =$('#dataJDIH').DataTable({
	language: {
	"sEmptyTable":	 "Tidak ada data yang tersedia pada tabel ini",
	"sProcessing":   "Sedang memproses...",
	"sLengthMenu":   "Tampilkan _MENU_ entri",
	"sZeroRecords":  "Tidak ditemukan data yang sesuai",
	"sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
	"sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
	"sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
	"sInfoPostFix":  "",
	"sSearch":       "Cari:",
	"sUrl":          "",
	"oPaginate": {
		"sFirst":    "Pertama",
		"sPrevious": "Sebelumnya",
		"sNext":     "Selanjutnya",
		"sLast":     "Terakhir"
	}
	},
	   
	  'order': [[ 0, "asc" ]],
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'<?php echo base_url().'Jdih/tbl_list'?>',
		  'data': function(data){
			var status  = $('#sts_prtn').val();
			var lingkup = $('#r_lingkup').val();

			// Append to data
			data.searchByStatus = status;
			data.searchByLingkup = lingkup;
		  }
      },
      'columns': [
		 { data: 'nm_jdih_jns' },
		 { data: 'nmr_prtn' },
		 { data: 'th_prtn' },
		 { data: 'nm_prtn' },
		 { data: 'r_lingkup' },
		 { data: 'sts_prtn' },
		 { data: 'stru_prtn' },
         { data: 'action' }
      ]
	});

	$('#r_lingkup').on('change', function(){
    tables.draw(true);
  	});

	$('#sts_prtn').on('change', function(){
    tables.draw(true);
  	});

});
	
	$(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 0);});
	setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
	
	$(document).ready(function(){setTimeout(function(){$(".pesans").fadeIn('slow');}, 0);});
    setTimeout(function(){$(".pesans").fadeOut('slow');}, 3000);
</script>
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
</body>
</html>