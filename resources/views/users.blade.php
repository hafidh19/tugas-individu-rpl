@extends('layouts.app')
@section('content')
    <center>
        <h3>PENGGUNA BARU</h3>
    </center>
    @if (Session::has('success'))
        <h3>{{ Session::get('success') }}</h3>
    @endif
    <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" >
                    <thead>
                        <tr>
                            <th width="5">No.</th>
                            <th>Nama</th>
                            <th>E-mail</th>
                            <th>
                                <a href="{{URL("users/create")}}" class="btn btn-success btn-xs">New</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{ ($key+1) }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <center>
                                     <a href="{{ URL('users/' . $user->id . '/edit') }}" class="btn btn-xs btn-info">
                                        Edit
                                     </a>
                                     <form action="{{ URL('users/' . $user->id) }}" method="POST">
                                     {{ csrf_field() }}
                                     {{ method_field('DELETE') }}
                                     <button type="submit" class="btn btn-xs btn-danger">
                                        Hapus
                                     </button>
                                     </form>
                                    </center>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection