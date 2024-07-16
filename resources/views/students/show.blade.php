@extends('layouts.header')

@section('title', 'Chi tiết sinh viên')

@section('content')
    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Chi tiết sinh viên</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $student->id }}</td>
                    </tr>
                    <tr>
                        <th>Tên</th>
                        <td>{{ $student->name }}</td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>{{ $student->address }}</td>
                    </tr>
                    <!-- Thêm các thông tin khác của sinh viên nếu cần -->
                </table>
                <div class="d-flex justify-content-end mt-3">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary me-2">Quay lại danh sách</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning me-2">Chỉnh sửa</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
