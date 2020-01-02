@extends('admin.layouts.main')
@section('title','user')
@section('content')
			<section class="content">
          <div class="box">
            @if (session('succes'))
                   <div class="alert alert-success alert-dismissible">
                      <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>alert!</h4>
                  {{ session('succes') }}
              </div>
            @elseif (session('delete'))
                   <div class="alert alert-danger alert-dismissible">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                   <h4>alert!</h4>
                {{ session('delete') }}
              </div>
          @elseif (session('update'))
                   <div class="alert alert-info alert-dismissible">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                   <h4>alert!</h4>
                {{ session('update') }}
              </div>
          @endif
            <div class="box-header ">
              <h3 class="box-title">Catagory</h3>
            </div>
              <div class="box-header with-border">
              <a href="/catagory/create" class="btn-sm btn-warning my-9"><i class="fa fa-plus"></i>Tambah User</a>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              @foreach($user as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td>
                  	<a href='{{("catagory/edit/".$data->id)}}' class="badge btn-info">Detil</a>
                    <a href='{{("catagory/edit/".$data->id)}}' class="badge btn-success">Edit</a>
                    <a href='{{url("catagory/delete/".$data->id)}}' class="badge btn-danger">Hapus</a>
                  </td> 
                </tr>
               @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
	</section>
@endsection