<!-- 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script> -->

<!-- DataTables CSS -->
<link src="<?php echo base_url('assets/MDB/css/addons/datatables.min.css'); ?>" rel="stylesheet">
<!-- DataTables JS -->
<script src="<?php echo base_url('assets/MDB/js/addons/datatables.min.js'); ?>" rel="stylesheet"></script>
<!-- DataTables Select CSS -->
<link src="<?php echo base_url('assets/MDB/css/addons/datatables-select.min.css'); ?>" rel="stylesheet">
<!-- DataTables Select JS -->
<script src="<?php echo base_url('assets/MDB/js/addons/datatables-select.min.js'); ?>" rel="stylesheet"></script>

<script type="text/javascript">
$(document).ready(function () {
$('#example').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>