@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit Employee') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control" value="{{ $employee->fname }}" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" value="{{ $employee->lname }}" required>
                </div>
                <div class="form-group">
                    <label for="midname">Middle Name</label>
                    <input type="text" name="midname" id="midname" class="form-control" value="{{ $employee->midname }}" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" class="form-control" value="{{ $employee->age }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $employee->address }}" required>
                </div>
                <div class="form-group">
                    <label for="zip">Zip</label>
                    <input type="text" name="zip" id="zip" class="form-control" value="{{ $employee->zip }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Employee</button>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection