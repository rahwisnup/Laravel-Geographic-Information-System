@extends('layouts.app')

@section('title')
    <title>Create Districts</title>
@endsection()

@section('breadcrumb1')
    <a href="{{route('districts.list')}}">Districts</a>
@endsection

@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <section class="p-t-20">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-1 m-b-25">Create Districts</h2>
                    <div class="card">
                        <div class="card-header">
                            <strong>Create Districts</strong>
                            <small> Form</small>
                        </div>
                        <form action={{route('districts.store')}} method="post">
                            {{csrf_field()}}
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Districts Name</label>
                                    <input id="name" name="name" placeholder="Enter districts name" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Create
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
