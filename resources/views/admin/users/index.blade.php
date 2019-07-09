@extends('admin.home')

@section('title')
    <title>Users</title>
@endsection

@section('stylesheet')

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('lte/plugins/datatables/dataTables.bootstrap4.css') }}">

@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
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
                    <a href="{{ route('users.create') }}">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalCreate">
                            Create
                        </button>
                    </a>
                </div>
            </div>

            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p>{{ $message }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <table class="table table-bordered table-striped" id="mytable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Email Verified</th>
                            <th>Created</th>
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
            ajax: 'u/all',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'username', name: 'username' },
                { data: 'email', name: 'email' },
                { data: 'email_verified_at', name: 'email verified' },
                { data: 'created_at', name: 'created at' },
                { data: 'id', name: 'action', "render": function ( data, type, full) {
                    console.log(data);
                    // return "<center><a class='btn btn-primary' href='/users/"+data+"/edit'>Edit</a><button class='btn btn-danger delete' value='"+data+"' style='margin-left:20px;'>Delete</button></center>";
                    return "<center><a href='users/roles/"+data+"/edit' class='btn btn-info btn-sm'>ROLE</i></a><a href='users/"+data+"/edit' ><button class='btn btn-warning btn-sm' style='margin-left:20px;'>EDIT</button></a><button class='btn btn-danger btn-sm delete' value='"+data+"' style='margin-left:20px;'>DELETE</button></center>";
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
                    url:"users/"+id,
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
