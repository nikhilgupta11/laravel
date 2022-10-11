@extends('layouts.layout')

@section('main_content')
<div class="container mt-12">
    <form action="{{ route('updatetechnologydata') }}" method="POST" class="form">
        @csrf
        <div class="row">
            <div class="col">
                <label for="id">ID</label>
                <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}" placeholder="ID">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="name">Technology Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" placeholder="Technology name">
            </div>
        </div>
        <br />
        <div class="col-3">

            <label for="status">Status:</label>

            <input type="checkbox" id="status" name="status" value="{{ $data->status }}">


        </div>

        <div>
            <button class="btn btn-success btn-lg float-right" type="submit">
                Submit
            </button>
        </div>
    </form>


</div>


<style>
    .form {
        padding: 15px;
    }
</style>
@endsection