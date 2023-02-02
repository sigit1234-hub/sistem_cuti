// Call the dataTables jQuery plugin
$.extend(true, $.fn.dataTable.defaults, {
  // "searching": false,
  // 
  "pageLength": 5
});
$(document).ready(function () {
  $('#dataTableCuti').DataTable();
});

