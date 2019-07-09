@extends('admin.home')

@section('title')
    <title>Roles</title>
@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Set Role</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">user</a></li>
                    <li class="breadcrumb-item active">set role</li>
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
            <div class="card-body">
                <form method="POST" action="{{ route('users.set_role', $user->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>:</td>
                                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>:</td>
                                    <td>
                                        @foreach ($roles as $row)
                                        <input type="radio" name="role" {{ $user->hasRole($row) ? 'checked':'' }}
                                            value="{{ $row }}"> {{  $row }} <br>
                                        @endforeach
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary btn-sm float-right">
                            Set Role
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection
