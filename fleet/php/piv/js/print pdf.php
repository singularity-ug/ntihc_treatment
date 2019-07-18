<head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" rel="stylesheet">
<link href="https://cdn.datatables.net/s/bs/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.10,b-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,fh-3.1.0,sc-1.4.0/datatables.min.js" rel="stylesheet">
</head>
<style>
.data-table-container {
  padding: 10px;
}

.dt-buttons .btn {
  margin-right: 3px;
}

</style>

<h1>Print test</h1>
<div class="data-table-container">
  <table class="table table-hover table-striped table-bordered data-table">
    <thead>
      <tr>
        <th class="text-right">No.</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-right">1</td>
        <td>Name 1</td>
      </tr>
      <tr>
        <td class="text-right">2</td>
        <td>Name 2</td>
      </tr>
    </tbody>
    <tfoot>
        <tr>
          <td colspan="2" class="text-center">footer text</td>
        </tr>
      </tfoot>
  </table>
</div>


<script>

$('table.data-table').DataTable({
  paging: false,
  columnDefs: [{
    targets: 'no-sort',
    orderable: false
  }],
  dom: '<"row"<"col-sm-6"Bl><"col-sm-6"f>>' +
    '<"row"<"col-sm-12"<"table-responsive"tr>>>' +
    '<"row"<"col-sm-5"i><"col-sm-7"p>>',
  fixedHeader: {
    header: true
  },
  buttons: {
    buttons: [{
      extend: 'print',
      text: '<i class="fa fa-print"></i> Print',
      title: $('h1').text(),
      exportOptions: {
        columns: ':not(.no-print)'
      },
      footer: true,
      autoPrint: false
    }, {
      extend: 'pdf',
      text: '<i class="fa fa-file-pdf-o"></i> PDF',
      title: $('h1').text(),
      exportOptions: {
        columns: ':not(.no-print)'
      },
      footer: true
    }],
    dom: {
      container: {
        className: 'dt-buttons'
      },
      button: {
        className: 'btn btn-default'
      }
    }
  }
});
</script>
