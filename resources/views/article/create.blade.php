@extends('admin.layouts.main')
@section('title','tambah article')
@section('content')
	<section class="content">
		   <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="/article/store">
            	@csrf
             <div class="box-body">
                <div class="form-group">
                  <label>Pilih Catagory</label>                  
                  <select name="catagory" class="form-control">
                    <option>--pilih katagori</option>  
                    @foreach($article as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                  </select>
                </div>
             </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="catagory">title</label>
                  <input type="text" name="title" class="form-control" id="catagory" placeholder="Masukkan Title">
                </div>
              </div>
              <div class="box-body">
                <textarea id="editor1" name="content" rows="10" cols="80"> </textarea>
              </div>
             <div class="box-body">
                <div class="form-group">
                  <label>Author</label>                  
                  <select name="author" class="form-control">
                    <option>--pilih Author</option>
                    @foreach($user as $ser)
                    <option value="{{$ser->id}}">{{$ser->name}}</option>
                    @endforeach
                  </select>
                </div>
             </div>
             <div class="box-body">
                <div class="form-group">
                  <label>Status</label>                  
                  <select name="status" class="form-control">
                    <option>--pilih Status</option>                   
                    <option value="1">Aktive</option>
                    <option value="0">InAktive</option>
                  </select>
                </div>
             </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<a href="/catagory" class="btn btn-warning">kembali</a>
                <input type="Submit" value="tambah" class="btn btn-primary">
              </div>
            </form>
          </div>
	</section>
@endsection