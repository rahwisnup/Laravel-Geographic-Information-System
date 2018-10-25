@extends('layouts.app')

@section('title')
    <title>Show Trees {{$trees->name}}</title>
@endsection()

@section('breadcrumb1')
    <a href="{{route('trees.list')}}">Trees</a>
@endsection


@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-1 m-b-25">Show Trees <b>{{$trees->name}}</b></h2>
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Trees</strong>
                            <small> Form</small>
                        </div>
                        <form action="" method="">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Descriptions</label>
                                    <input disabled id="descriptions" name="descriptions" class="form-control" type="text" value="{{$trees->descriptions}}">
                                </div>
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

