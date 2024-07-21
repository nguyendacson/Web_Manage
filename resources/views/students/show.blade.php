@extends('layouts.header')

@section('title', 'Chi tiết sinh viên')

@section('content')
    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $student->id }}</td>
                    </tr>
                    <tr>
                        <th>Ngành Học</th>
                        <td>{{ $student->major }}</td>
                    </tr>
                    <tr>
                        <th>Lớp</th>
                        <td>{{ $student->class }}</td>
                    </tr>
                    <tr>
                        <th>Mã Sinh Viên</th>
                        <td>{{ $student->studentcode }}</td>
                    </tr>
                    <tr>
                        <th>Tên Sinh Viên</th>
                        <td>{{ $student->name }}</td>
                    </tr>
                    <tr>
                        <th>Địa Chỉ</th>
                        <td>{{ $student->address }}</td>
                    </tr>
                    
                </table>
                <div class="d-flex justify-content-end mt-3">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary me-2">Quay lại danh sách</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning me-2">Chỉnh sửa</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $student->id }}">Xóa</button>

                    <div class="modal fade" id="modal-{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo !</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn chắc chắn mốn xóa học sinh "{{ $student->name }}" chứ ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Đồng ý</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
