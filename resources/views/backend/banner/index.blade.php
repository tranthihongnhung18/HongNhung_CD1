@extends('layouts.admin')

@section('title','Quản lí Banner')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Quản lí Banner</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blank Page</li>
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
              <label class="name">Tên Banner: *</label>
              <input type="text" class="form-control" name="name" placeholder="Nhập tên Banner" name="fname" />
          </div>
          <div class="form-group">
              <label class="slug">Liên kết: </label>
              <input type="text" class="form-control" name="slug" placeholder="Nhập liên kết" name="fname" />
          </div>
          <div class="form-group">
            <label class="slug">Vị trí: </label>
            <input type="text" class="form-control" name="slug" placeholder="Nhập vị trí" name="fname" />
        </div>
          <div class="form-group">
            <label>Mô tả: </label>
            <textarea name="description" placeholder="Nhập mô tả" class="form-control"></textarea>
          </div>
          
          <div class="form-group">
              <label for="image" class="text-main"> Hình Banner(*)</label>
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
                  <th class="text-center" style="width:30px">#</th>
                  <th class="text-center" style="width:190px">Hình</th>
                  <th class="text-center">Tên Banner</th>
                  <th class="text-center">Liên kết</th>
                  <th class="text-center" style="width:190px">Chức năng</th>
                  <th class="text-center" style="width:30px">id</th>
                </thead>
                <tbody>
                  @foreach ($list as $row)
                  <tr>
                    <td class="text-center">
                      <input type="checkbox" name="checkID[]" id="checkID" value="1">
                    </td>
                    <td class="text-center">
                      <img src="{{ asset("images/banners/".$row->image) }}" class="img-fluid" alt="{{ $row->image }}">
                    </td>
      
                    <td>
                      {{ $row->name }}
                    </td>
                    <td>
                      {{ $row->link }}
                    </td>
                 
                    <td class="text-center">
                      <a href="{{ route("admin.banner.status",['id'=>$row->id]) }}" class="btn btn-sm btn-success" >
                        <i class="fas fa-toggle-on"></i>
                      </a>
                      <a href="{{ route("admin.banner.show",['id'=>$row->id]) }}" class="btn btn-sm btn-info" >
                        <i class="fas fa-eye"></i>
                      </a>
                      <a href="{{ route("admin.banner.edit",['id'=>$row->id]) }}" class="btn btn-sm btn-primary" >
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="{{ route("admin.banner.delete",['id'=>$row->id]) }}" class="btn btn-sm btn-danger" >
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
  </div>
</section>
@endsection