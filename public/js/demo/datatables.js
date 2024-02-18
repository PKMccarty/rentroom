// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
  $('#tableview').DataTable();
  $('#mainnurse').DataTable({
    "columnDefs": [
        { "width": "100%" }
    ]
});
$('#sptable1').DataTable({
});
$('#sptable2').DataTable({
});
});
