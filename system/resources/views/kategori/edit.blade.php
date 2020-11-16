@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    data produk 
                </div>
                <div class="card-body">
                    <form action="{{url('kategori', $kategori ?? ''->id)}}" method="POST">
                        @csrf 
                        @method("PUT")
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$kategori->nama}}">
                    </div>
                    <button class="btn btn-dark float-right"><i class="fa fa-save"> </i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection