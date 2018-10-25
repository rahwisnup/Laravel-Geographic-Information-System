@extends('layouts.app')

@section('title')
    <title>Create Areas</title>
@endsection()

@section('breadcrumb1')
    <a href="{{route('areas.list')}}">Areas</a>
@endsection

@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <section class="p-t-20">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-1 m-b-25">Create Areas</h2>
                    <div class="card">
                        <div class="card-header">
                            <strong>Create Areas</strong>
                            <small> Form</small>
                        </div>
                        <form action={{route('trees.store')}} method="post">
                            {{csrf_field()}}
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Trees</label>
                                    <select name="id_tree_masters" id="select" class="form-control">
                                        @foreach ($tree_masters as $tree)
                                            <option value="{{$tree->id}}">{{$tree->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Tree Categories</label>
                                    <select name="id_tree_categories" id="select" class="form-control">
                                        @foreach ($tree_categories as $tree_category)
                                            <option value="{{$tree_category->id}}">{{$tree_category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Sides</label>
                                    <select name="id_sides" id="select" class="form-control">
                                        @foreach ($sides as $side)
                                            <option value="{{$side->id}}">{{$side->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Areas</label>
                                    <select name="id_areas" id="select" class="form-control">
                                        @foreach ($areas as $area)
                                            <option value="{{$area->id}}">{{$area->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Latitude</label>
                                    <input id="latitude" name="latitude" placeholder="Enter tree Master name" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Longitude</label>
                                    <input id="longitude" name="longitude" placeholder="Enter tree Master name" class="form-control" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Descriptin</label>
                                    <textarea name="descriptions" id="descriptions" rows="9" placeholder="Description content..." class="form-control"></textarea>
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
