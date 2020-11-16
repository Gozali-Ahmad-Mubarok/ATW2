@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah data user
                 </div>
                <div class="card-body">
                    <form action="{{url('user')}}" method="POST">
                        @csrf 
                    <div class="form-group">
                        <label for="" class="control-label">username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">nama</label>
                                <input type="text" class="form-control" name="nama" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">password</label>
                                <input type="password" class="form-control" name="password" >
                            </div>
                        </div>
                    </div> 
                    <button class="btn btn-dark float-right"><i class="fa fa-save"> </i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection