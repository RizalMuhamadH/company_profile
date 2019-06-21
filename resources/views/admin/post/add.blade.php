@extends('admin.home')

@section('content')

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('lte/plugins/datatables/dataTables.bootstrap4.css') }}">

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Post List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">list</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="box box-info">
        <div class="card card-primary card-outline table-responsive">
            <div class="card-header">
                <div class="pull-right">
                    <a class="btn btn-success" href="/p/create"> Create</a>
                </div>
            </div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <table class="table table-bordered table-striped" id="mytable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Summary</th>
                            <th>Image</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    {{-- <tbody id="bodyData">

                    </tbody> --}}
                </table>

            </div>
        </div>
    </div>
</section>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_btn" id="ok_btn" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('lte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('lte/plugins/fastclick/fastclick.js') }}"></script>

<!-- page script -->
{{-- <script>
    $(function () {
          $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
        });
</script> --}}

<script>
    $(document).ready(function(){
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                            {
                                return {
                                    "iStart": oSettings._iDisplayStart,
                                    "iEnd": oSettings.fnDisplayEnd(),
                                    "iLength": oSettings._iDisplayLength,
                                    "iTotal": oSettings.fnRecordsTotal(),
                                    "iFilteredTotal": oSettings.fnRecordsDisplay(),
                                    "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                                    "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                                };
                            };

    });
    $(function() {
        $('#mytable').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'p/read-all',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'post_title', name: 'title' },
                { data: 'post_summary', name: 'summary' },
                { data: 'post_image_thumb', name: 'image' },
                { data: 'id', name: 'action' }
            ]
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
        {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        var t = $("#mytable").dataTable({
            initComplete: function() {
                var api = this.api();
                $('#mytable_filter input')
                        .off('.DT')
                        .on('keyup.DT', function(e) {
                            if (e.keyCode == 13) {
                                api.search(this.value).draw();
                    }
                });
            },
            oLanguage: {
                sProcessing: "loading..."
            },
            processing: true,
            serverSide: true,
            ajax: {"url": "{{ URL::to('p/read-all') }}", "type": "POST",
success: function(data){
console.log(data);
}},
// columns: [
// {
// "data": "id",
// "orderable": false
// },
// {"data": "post_title"},
// {"data": "post_summary"},
// {"data": "post_image_thumb"},
// {
// "data" : "user_id",
// "orderable": false,
// "className" : "text-center"
// }
// ],
order: [[0, 'desc']],
rowCallback: function(row, data, iDisplayIndex) {
var info = this.fnPagingInfo();
var page = info.iPage;
var length = info.iLength;
var index = page * length + (iDisplayIndex + 1);
$('td:eq(0)', row).html(index);
}
});
});
</script>

<script>
    // $(document).ready(function() {
    //         var url = "/p";
    //         $.ajax({
    //             url: "{{ URL::to('p/read-all') }}",
    //             type: "GET",
    //             data:{
    //                 _token:'{{ csrf_token() }}'
    //             },
    //             cache: false,
    //             dataType: 'json',
    //             success: function(dataResult){
    //                 console.log(dataResult);
    //                 var resultData = dataResult;
    //                 var bodyData = '';
    //                 var i=1;
    //                 $.each(resultData,function(index,row){
    //                     var editUrl = url+'/'+row.id+"/edit";
    //                     bodyData+="<tr>"
    //                     bodyData+="<td>"+ i++ +"</td><td>"+row.post_title+"</td><td>"+row.post_summary+"</td><td><center><img src='/storage/"+row.post_image_thumb+"' ></center></td><td><center><a class='btn btn-primary' href='"+editUrl+"'>Edit</a>"
    //                     +"<button class='btn btn-danger delete' value='"+row.id+"' style='margin-left:20px;'>Delete</button></center></td>";
    //                     bodyData+="</tr>";

    //                 })
    //                 $("#bodyData").append(bodyData);
    //             }
    //         });

    // });

    var id;
    var $ele;

    $(document).on("click", ".delete", function() {
        $('#confirmModal').modal('show');

        console.log("masuk");
        $ele = $(this).closest('tr');
        id= $(this).val();
	});

    $('#ok_btn').click(function(){
            console.log(id);
        $.ajax({
            url:"p_delete/"+id,
			cache: false,
			data:{
				_token:'{{ csrf_token() }}'
			},
            beforeSend: function(){
                $('#ok_btn').text('Deleting...');
            },
            success: function(data){
                console.log(data);
                var dataResult = JSON.parse(data);
				if(dataResult.status==200){
					$ele.fadeOut().remove();
				}
                $('#confirmModal').modal('hide');
            }
        });
    });

</script>

@endsection
