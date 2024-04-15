@extends('layouts.admin')

@section('content')
    @if(session('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{ session('error') }}
        </div>
    @endif

    <div class="page-header">
        <h3 class="page-title"> Sửa thông tin nhà cung cấp </h3>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('vendor.update', ['id' => $data->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Tên nhà cung cấp:</label>
                            <input type="text" class="form-control" name="vendor_name" placeholder="Tên nhà cung cấp..." value="{{ $data->name }}">
                            @error('vendor_name')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="vendor_email" placeholder="Email..." value="{{ $data->email }}">
                            @error('vendor_email')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại:</label>
                            <input type="text" class="form-control" name="vendor_phone" placeholder="Số điện thoại..." value="{{ $data->phone }}">
                            @error('vendor_phone')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ:</label>
                            <input type="text" class="form-control" name="vendor_address" placeholder="Địa chỉ..." value="{{ $data->address }}">
                            @error('vendor_address')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-warning mr-2">Sửa</button>
                    </form>
                    <a class="btn btn-primary mt-3" href="{{ route('vendor.index') }}">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
@stop
