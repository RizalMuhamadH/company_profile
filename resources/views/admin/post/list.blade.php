@extends('admin.home')

@section('title')
    <title>Articles</title>
@endsection

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
        <div class="card card-primary card-outline">
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
                </table>

            </div>
        </div>
    </div>
</section>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
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
<script>
    $(document).ready(function(){
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings){
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

        $('#mytable').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'p/read-all',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'post_title', name: 'title' },
                { data: 'post_summary', name: 'summary' },
                { data: 'post_image_thumb', name: 'image', "render": function ( url, type, full) {
                    return '<div class="text-center"><img src="storage/'+url+'" style="width:100px;height:100px;"/></div>';
                    }
                },
                { data: 'id', name: 'action', "render": function ( url, type, full) {
                    return "<center><a class='btn btn-primary' href='/p/"+url+"/edit'>Edit</a><button class='btn btn-danger delete' value='"+url+"' style='margin-left:20px;'>Delete</button></center>";
                    }
                }
            ],

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
