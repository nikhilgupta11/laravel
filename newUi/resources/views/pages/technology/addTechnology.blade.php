@extends('layouts.layout')

@section('main_content')
<div class="container">
    <form action="{{route('addnewtechnology')}}" class="form" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="name">Technology Name</label>
                <input type="text" class="form-control" id="name" placeholder="Technology Name" name="name">
            </div>
        </div>
        <br />
        <div>
            <label for="status">Status:</label>

            <input type="checkbox" id="status" name="status" value=true>
        </div>
        <div>
            <button class="btn btn-success btn-lg float-right" type="submit">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection