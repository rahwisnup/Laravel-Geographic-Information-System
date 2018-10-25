@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Trees</div>

                <div class="container">
                    <form action={{route('trees.store')}} method="post">
                        {{csrf_field()}}
                        <label>name</label>
                        <input type="text" name="name" id="name" value="{{$trees->name}}">
                        <br>

                        <label>id user</label>
                        <input type="text" name="id_user" id="id_user" value="{{$trees->id_user}}">
                        <br>

                        <label>id categories</label>
                        <input type="text" name="id_categories" id="id_categories" value="{{$trees->id_categories}}">
                        <br>

                        <label>id sides</label>
                        <input type="text" name="id_sides" id="id_sides" value="{{$trees->id_sides}}">
                        <br>

                        <label>id areas</label>
                        <input type="text" name="id_areas" id="id_areas" value="{{$trees->id_areas}}">
                        <br>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
