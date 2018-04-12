@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="" action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="Judul Post">
            </div>

            <div class="form-group">
                <label for="">Konten</label>
                <textarea name="content" id="" rows="5" class="form-control" placeholder="Konten"></textarea>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>

        </form>
    </div>
@endsection