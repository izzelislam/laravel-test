@extends('admin.layouts.main')
@section('title','edit article')
@section('content')
		<section class="content">
		   <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="/article/update">
            	@csrf
             <input type="hidden" name="id" value="{{$article->id}}"> 
             <div class="box-body">
                <div class="form-group">
                  <label>Pilih Catagory</label>                  
                  <select name="catagory" class="form-control">    
                    @foreach($catagory as $cate)
                      <option value="{{$cate->id}}"  
                        @if($cate->id == $article->catagory_id)
                        selected = "selected"
                        @endif
                      >{{$cate->name}}</option>
                    @endforeach
                  </select>
                </div>
             </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="catagory">title</label>
                  <input type="text" name="title" class="form-control" id="catagory" placeholder="Masukkan Title" value="{{$article->title}}">
                </div>
              </div>
              <div class="box-body">
                <textarea id="editor1" name="content" rows="10" cols="80">{{$article->content}}</textarea>
              </div>
             <div class="box-body">
                <div class="form-group">
                  <label>author</label>                  
                   <select name="author" class="form-control">    
                    <option value="1">#</option>
                  </select>
                </div>
             </div>
             <div class="box-body">
                <div class="form-group">
                  <label>Status</label>                  
                  <select name="status" class="form-control">             
                    <option value="{{$article->status}}">
                     @if($article->status == 1)
                      Actif
                     @else
                     InActiv
                     @endif
                   </option>
                    <option value="
                     @if($article->status != 1)
                      0
                     @else
                     1
                     @endif
                    ">                     
                      @if($article->status != 1)
                       Actif
                      @else
                       InActiv
                      @endif
                   </option>
                  </select>
                </div>
             </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<a href="/catagory" class="btn btn-warning">kembali</a>
                <input type="Submit" value="Update" class="btn btn-primary">
              </div>
            </form>
          </div>
	</section>
@endsection