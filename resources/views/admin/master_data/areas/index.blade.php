@extends('layouts.app')

@section('title')
    <title>Areas List</title>
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
                    <!-- USER DATA-->
                    <div class="user-data m-b-30">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                        <div class="filters m-b-45">
                            <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value="">Products</option>
                                    <option value="">Services</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                <select class="js-select2 au-select-dark" name="time">
                                    <option selected="selected">All Time</option>
                                    <option value="">By Month</option>
                                    <option value="">By Day</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <a href="{{ ('/admin/areas/create') }}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>add item
                                </button>
                            </a>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </th>
                                        <th>Index</th>
                                        <th>Areas No</th>
                                        <th>Nama</th>
                                        <th>Districts</th>
                                        <th>Regencies</th>
                                        <th>Provinces</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($areas as $area)
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>{{$index=$index+1}}</td>
                                            <td>{{$area->id}}</td>
                                            <td>
                                                <span class="block-email">{{$area->name}}</span>
                                            </td>
                                            <td>{{$area->districts_name}}</td>
                                            <td>{{$area->regencies_name}}</td>
                                            <td>{{$area->provinces_name}}</td>
                                            
                                            <td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        {{-- <a href="{{ route('areas.show', $area)}}">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Info">
                                                                <i class="zmdi zmdi-mail-send"></i>
                                                            </button>
                                                        </a> --}}
                                                        {{-- <a href="{{ route('areas.edit', $area)}}">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a> --}}
                                                        {{-- <form method="post" action="{{ route('areas.delete', [$area->id]) }}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </form> --}}
                                                            
                                                    </div>
                                                </td>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                        
                                </tbody>
                            </table>
                        </div>
                        <div class="user-data__footer">
                            <button class="au-btn au-btn-load">load more</button>
                        </div>
                    </div>
                    <!-- END USER DATA-->
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->
</div>
@endsection
