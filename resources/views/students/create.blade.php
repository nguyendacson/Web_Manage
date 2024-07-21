    @extends('layouts.header')

    @section('title', 'Thêm Sinh Viên')

    @section('content')
        <div class="container mt-4 px-5">
            <div class="card">
                <div class="card-header">
                    <h3>Thêm Sinh Viên Mới</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-6 pr-3">
                                    <div class="inputext mb-3">
                                        <label for="major" class="form-label">Ngành Học</label>
                                        <input type="text" name="major" id="major" class="form-control" value="{{ old('major') }}">
                                        @error('major')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="inputext mb-3">
                                        <label for="class" class="form-label">Lớp</label>
                                        <input type="text" name="class" id="class" class="form-control" value="{{ old('class') }}">
                                        @error('class')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="inputext mb-3">
                                        <label for="studentcode" class="form-label">Mã Sinh Viên</label>
                                        <input type="text" name="studentcode" id="studentcode" class="form-control" value="{{ old('studentcode') }}">
                                        @error('studentcode')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="boxinputright col-md-6 pl-3">
                                    <div class="inputext mb-3">
                                        <label for="name" class="form-label">Tên Sinh Viên</label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="inputext mb-3">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
                    </form>
                </div>
            </div>
        </div>
    @endsection
