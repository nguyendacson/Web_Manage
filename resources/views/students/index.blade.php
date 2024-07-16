@extends('layouts.header')

@section('title', 'Trang chủ')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="container-fluid">
        <div class="card card-header mt-2">
            <div class="d-flex justify-content-between align-items-center mt-2">
                <h3>Quản lí danh sách đơn hàng</h3>
                <a href="{{ route('students.create') }}" class="btn btn-success">Thêm đơn hàng</a>
            </div>
            <div class="table-bordered mt-2">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th class="align-items-center d-flex justify-content-center">Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->address }}</td>
                            <td>
                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-secondary">
                                        <img src="/icon/matxem.svg" alt="icon show">
                                    </a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">
                                        <img src="/icon/butsua.svg" alt="icon edit">
                                    </a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $student->id }}">
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
                                                Are you sure to delete student with ID {{ $student->id }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Sure</button>
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
