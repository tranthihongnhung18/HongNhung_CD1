@extends('layouts.admin')

@section('title', 'Quản lí Menu')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lí Menu</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản lí Menu</li>
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
                            <label class="name">Tên Menu: *</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên Menu" name="fname" />
                        </div>
                        <div class="form-group">
                            <label class="slug">Liên kết: *</label>
                            <input type="text" class="form-control" name="slug" placeholder="Nhập liên kết" name="fname" />
                        </div>
                        <div class="form-group">
                            <label class="slug">Vị trí: </label>
                            <input type="text" class="form-control" name="slug" placeholder="Nhập vị trí" name="fname" />
                        </div>
                        <div class="form-group">
                          <label>Menu cha (*)</label>
                          <select id="panent_id" class="form-control">
                            <option value="">None</option>
                            @foreach($list as $row)
                            <option class="form-control" value="1"><i>{{ $row->name}}</i></option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="image" class="text-main"> Hình Menu(*)</label>
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
                                   
                                    <th class="text-center">Tên Menu</th>
                                    <th class="text-center">Liên kết</th>
                                    <th class="text-center">Vị trí</th>

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
                                       
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->link }}</td>
                                        <td>{{ $row->position }}</td>

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
                       
                    </div>
                </div>
            </div>
    </section>
@endsection
