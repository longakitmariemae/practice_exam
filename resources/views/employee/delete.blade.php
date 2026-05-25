@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Delete Employee') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <p>Are you sure you want to delete this employee?</p>
            <form action="{{ route('employee.delete', $employee->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->      
@endsection