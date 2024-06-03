@extends('layouts.admin')

@section('title', 'Quản lí thương hiệu')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lí thương hiệu</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản lí thương hiệu</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12 text-right">

                        <a class="btn btn-sm btn-danger" href="#">Thùng rác
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="name">Tên thương hiệu: *</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên thương hiệu"
                                name="fname" />
                        </div>
                        <div class="form-group">
                            <label class="slug">Slug: </label>
                            <input type="text" class="form-control" name="slug" placeholder="Nhập slug"
                                name="fname" />
                        </div>
                        <div class="form-group">
                            <label>Mô tả: </label>
                            <textarea name="description" placeholder="Nhập mô tả" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" class="text-main"> Hình thương hiệu(*)</label>
                            <input class="form-control" type="file" name="image" /><br />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" id="submit" name="submit">
                                <p>Lưu</p>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:30px">#</th>
                                    <th class="text-center" style="width:190px">Hình</th>
                                    <th class="text-center">Tên thương hiệu</th>
                                    <th class="text-center">Slug</th>


                                    <th class="text-center" style="width:190px">Chức năng</th>
                                    <th class="text-center" style="width:30px">ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $row)
                                    <tr>
                                        <td class="text-center">
                                            <input type="checkbox" name="checkID[]" id="checkID"
                                                value="{{ $row->id }}">
                                        </td>
                                        <td class="text-center">
                                            <img src="{{ $row->image }}" class="img-fluid" alt="{{ $row->name }}">
                                        </td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->slug }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success" href="#">
                                                <i class="fas fa-toggle-on"></i>
                                            </a>
                                            <a class="btn btn-sm btn-info" href="#">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-sm btn-primary" href="#">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-danger" href="#">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">{{ $row->id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-3">
                            {{ $list->links() }}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
