@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                {{ $post->title }}

                    <div class="pull-right">
                    <a href={{ route('post.edit',$post)}} class="btn btn-xs btn-default">Edit</a>
                    </div>
                    
                    <div class="pull-right">
                       
                            
                        <form class="" action="{{ route('post.destroy',$post) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-xs btn-danger">Hapus Post</button>
                        
                        </form>
                                      
                    </div>
                </div>
                   
                <div class="panel-body">
                    <p>{{$post->content}}</p>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection