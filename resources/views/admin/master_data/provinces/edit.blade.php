@extends('layouts.app')

@section('title')
    <title>Edit Provinces {{$provinces->name}}</title>
@endsection()

@section('breadcrumb1')
    <a href="{{route('provinces.list')}}">Provinces</a>
@endsection


@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-1 m-b-25">Edit Provinces <b>{{$provinces->name}}</b></h2>
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Provinces</strong>
                            <small> Fofrm</small>
                        </div>
                        <form action={{route('provinces.update', $provinces)}} method="post">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Provinces Name</label>
                                    <input id="name" name="name" placeholder="Enter your name" class="form-control" type="text" value="{{$provinces->name}}">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Edit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->
</div>
@endsection

