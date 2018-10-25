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
                    <h2 class="title-1 m-b-25">Show Areas <b>{{$areas->name}}</b></h2>
                    <div class="card">
                        <div class="card-header">
                            <strong>Create Areas</strong>
                            <small> Form</small>
                        </div>
                        <form action={{route('areas.update',$areas)}} method="post">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Areas Name</label>
                                    <input id="name" name="name" placeholder="Enter areas name" class="form-control" type="text" value="{{$areas->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Districts</label>
                                    <select name="id_districts" id="select" class="form-control">
                                        @foreach ($districts as $district)
                                            <option value="{{$district->id}}">{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Regencies</label>
                                    <select name="id_regencies" id="select" class="form-control">
                                        @foreach ($regencies as $regency)
                                            <option value="{{$regency->id}}">{{$regency->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Provinces</label>
                                    <select name="id_provinces" id="select" class="form-control">
                                        @foreach ($provinces as $provincy)
                                            <option value="{{$provincy->id}}">{{$provincy->name}}</option>
                                        @endforeach
                                    </select>
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

