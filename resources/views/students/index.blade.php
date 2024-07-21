@extends('layouts.header')

@section('title', 'Trang chủ')

@section('content')
        @if (Session::has('success'))
            <div class="alert alert-success" id="alertsucces">
                {{ Session::get('success') }}
            </div>
        @endif
    <script src="{{ asset('js/custommessage.js') }}"></script>
    <div class="container-fluid">
        <div class="card card-header mt-2">
            <div class="d-flex justify-content-between align-items-center mt-2">
                <h3>Quản lí danh sách sinh viên </h3>
                <a href="{{ route('students.create') }}" class="btn btn-success">Thêm Sinh viên</a>
            </div>
            <div class="table-bordered mt-2">
                <table class="table table-hover">
                    <thead>
                            <tr>
                                <th style="padding-left:30px">Id</th>
                                <th>Ngành Học</th>
                                <th>Lớp</th>
                                <th>Mã Sinh Viên</th>
                                <th>Tên Sinh Viên</th>
                                <th>Địa chỉ</th>
                                <th class="align-items-center d-flex justify-content-center">Tùy chọn</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td style="padding-left:30px">{{ $student->id}}</td>
                            <td>{{ $student->major}}</td>
                            <td>{{ $student->class}}</td>
                            <td>{{ $student->studentcode}}</td>
                            <td>{{ $student->name}}</td>
                            <td>{{ $student->address}}</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                    <a  href="{{ route('students.show', $student->id) }}" class="btn btn-outline-secondary pt-1">
                                        <img src="/icon/matxem.svg" alt="icon show">
                                    </a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning pt-1">
                                        <img src="/icon/butsua.svg" alt="icon edit">
                                    </a>
                                    <button type="button" class="btn btn-danger pt-1" data-bs-toggle="modal" data-bs-target="#modal-{{ $student->id }}">
                                        <img src="/icon/iconDelete.svg" alt="icon xoa">
                                    </button>
                                </div>

                                <div class="modal fade" id="modal-{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Notification Delete</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn chắc chắn muốn xóa học sinh "{{ $student->name }}" ?
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
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-center">
                {{ $students->links() }}
            </div>
        </div>
    </div>
@endsection
