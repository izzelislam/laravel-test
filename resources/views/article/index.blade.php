@extends('admin.layouts.main')
@section('title','Article')
@section('content')
  	<section class="content">
          <div class="box">
            @if (session('success'))
                   <div class="alert alert-success alert-dismissible">
                      <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>alert!</h4>
                  {{ session('success') }}
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
              <h3 class="box-title">Article</h3>
            </div>
              <div class="box-header with-border">
              <a href="{{url('/article/create')}}" class="btn-sm btn-warning my-9"><i class="fa fa-plus"></i>Tambah Article</a>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Category Name</th>
                  <th>title Name</th>
                  <th>Author</th>
                  <th>Status</th>
                  <th>Posted</th>
                  <th>Action</th>
                </tr>

              @foreach($article as $data)

                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->catagory->name}}</td>
                  <td>{{$data->title}}</td>
                  <td>{{$data->created_by}}</td>
                  <td>
                    @if($data->status == 1)
                      <span class="label label-success">Aktiv</span>
                    @else
                      <span class="label label-danger">InAktiv</span>
                    @endif
                  </td>
                  <td>{{$data->created_at}}</td>
                  <td>
                    <a href='{{("catagory/edit/".$data->id)}}' class="badge btn-info">Detil</a>
                    <a href='{{("article/edit/".$data->id)}}' class="badge btn-success">Edit</a>
                    <a href='{{url("article/delete/".$data->id)}}' class="badge btn-danger">Hapus</a>
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