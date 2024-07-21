@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-center text-success">
                    <h2>Chỉnh sửa thông tin</h2>
                </div>
            </div>
        </div>

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Lỗi vui lòng nhập đầy đủ thông tin<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="inputext mb-3">
                    <label for="major" class="form-label"> <strong>Chuyên Ngành</strong></label>
                    <input type="text" name="major" value="{{ $student->major }}" id="major" class="form-control" value="{{ old('major') }}">
                    @error('major')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="inputext mb-3">
                    <label for="class" class="form-label"> <strong>Lớp</strong></label>
                    <input type="text" name="class" value="{{ $student->class }}" id="class" class="form-control" value="{{ old('class') }}">
                    @error('class')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="inputext mb-3">
                    <label for="studentcode" class="form-label"> <strong>Mã Sinh Viên</strong></label>
                    <input type="text" name="studentcode" value="{{ $student->studentcode }}" id="studentcode" class="form-control" value="{{ old('studentcode') }}">
                    @error('studentcode')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="inputext mb-3">
                    <label for="name" class="form-label"> <strong>Tên Sinh Viên</strong></label>
                    <input type="text" name="name" value="{{ $student->name }}" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="inputext mb-3">
                    <label for="name" class="form-label"> <strong>Địa Chỉ</strong></label>
                    <textarea class="form-control" style="height:100px" value="{{ old('address') }}" name="address" placeholder="Address">{{ $student->address }}</textarea>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pull-right">
                    <a class="btn btn-secondary me-2" href="{{ route('students.index') }}">Quay lại danh sách Sinh Viên</a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="button" class="btn btn-primary col-md-2" data-bs-toggle="modal" data-bs-target="#modal-{{ $student->id }}">Lưu lại</button>
                </div>

                <div class="modal fade" id="modal-{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Notification Delete</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn chắc chắn Thông Tin được chỉnh sửa chính xác ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger">Đồng ý</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
