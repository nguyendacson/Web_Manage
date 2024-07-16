@extends('layouts.app')

@section('title', 'Thêm Sinh Viên')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Thêm Sinh Viên Mới</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
                </form>
            </div>
        </div>
    </div>
@endsection
