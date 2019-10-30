<?php
	$this->load->view('jdih/jdih');
?>
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
<link rel="stylesheet" href="<?php //echo base_url('assets/bower_components/datatables.net-bs/css/jquery.dataTables.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/buttons.dataTables.min.css')?>">

    <div class="container">
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Daftar Peraturan</h3>
	</div>
	<table style="margin-left: 10px; margin-top: 10px;">
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
	<table id="datajdih" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>Jenis Peraturan</th>
			<th>Nomor Peraturan</th>
			<th>Tahun Terbit</th>
			<th>Tentang</th>
			<th>Ruang Lingkup</th>
			<th>Status Peraturan</th>
			<th>Bagian Terkait</th>
			<th>Unduh Pdf</th>
		<!-- <th>Tindakan</th> -->
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
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/jszip.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/buttons.flash.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/buttons.html5.min.js')?>"></script>
<script>
	
$(document).ready(function(){
	var tables = $('#datajdih').DataTable({
		dom: 'lBfrtip',
        buttons: [
			{
				extend : 'excelHtml5',
				text : 'Export Data Ke Excel',
				title : 'Daftar Peraturan',
				exportOptions : {
					columns: [0, 1, 2, 3, 4, 5, 6]
				}
			},
        ],
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
	  'lengthMenu': [[10, 25, 50, 100, 9223372036854776], [10, 25, 50, 100, 'All']],
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
		 { data: 'nm_doc_prtn' },
      ]
	});
		
	$('#r_lingkup').on('change', function(){
    tables.draw(true);
  	});

	$('#sts_prtn').on('change', function(){
    tables.draw(true);
  	});

});
</script>
</div>
</div>
</div>
<footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
      </div>
      <strong>Copyright &copy; 2019 <a href="https://adminlte.io"></a>.</strong> All rights
      reserved.
	</div>
   </footer>
</div>
</body>
</html>