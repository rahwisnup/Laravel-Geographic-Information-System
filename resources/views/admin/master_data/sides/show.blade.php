@extends('layouts.app')

@section('title')
    <title>Show Sides {{$sides->name}}</title>
@endsection()

@section('breadcrumb1')
    <a href="{{route('sides.list')}}">Sides</a>
@endsection


@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-1 m-b-25">Show Sides <b>{{$sides->name}}</b></h2>
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Sides</strong>
                            <small> Form</small>
                        </div>
                        <form action={{route('sides.update', $sides)}} method="post">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Sides Name</label>
                                    <input id="name" name="name" placeholder="Enter your name" class="form-control" type="text" value="{{$sides->name}}">
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

