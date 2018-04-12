@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Post</div>
                        
                    <div class="panel-body">
                    <form class="" action="{{ route('post.update',$post) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH')}}
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="Judul Post" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="">Konten</label>
                <textarea name="content" id="" rows="5" class="form-control" placeholder="Konten">{{$post->content}}</textarea>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>

        </form>
                    </div>                         
                </div>
            </div>
        </div> 
     </div>
@endsection