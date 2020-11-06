<!DOCTYPE html>
<html>
<head>
    <title>Laravel DataTables</title>
    <link rel="stylesheet" href="highadmin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="highadmin/plugins/datatables/dataTables.bootstrap4.min.css">
    <script src="highadmin/assets/js/jquery.min.js"></script>
    <script src="highadmin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="highadmin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
</head>
<body>

<div class="container">
    <table id="task" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Description</th>

        </tr>
        </thead>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        oTable = $('#task').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('datatable.tasks') }}",
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'description', 'name': 'Description'},
            ],
            language:{
                url:'language/datatable-esp.json'
            }

        },
       );
    });
</script>
</body>
</html>
