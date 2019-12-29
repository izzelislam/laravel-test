@extends('admin.layouts.main')
@section('title','tambah catagory')
@section('content')
	<section class="content">
		   <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Catagory</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="/catagory">
            	@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="catagory">Catagory</label>
                  <input type="text" name="name" class="form-control" id="catagory" placeholder="Masukkan Catagory">
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