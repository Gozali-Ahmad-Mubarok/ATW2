@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Ubah data user 
                </div>
                <div class="card-body">
                    <form action="{{url('user', $user->id)}}" method="POST">
                        @csrf 
                        @method("PUT")
                    <div class="form-group">
                        <label for="" class="control-label">username</label>
                        <input type="text" class="form-control" name="username" value="{{$user->username}}">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">email</label>
                                <input type="text" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                            </div>
                        </div>
                    </div>  
                        <div class="form-group">
                            <label for="" class="control-label">password</label>
                            <input type="password" class="form-control" name="password" >
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">No HP</label>
                            <input type="text" class="form-control" name="no_hp" >
                        </div>
                    <button class="btn btn-dark float-right"><i class="fa fa-save"> </i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection