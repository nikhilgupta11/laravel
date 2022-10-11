@extends('layouts.layout')

@section('main_content')
<div class="container-fluid">
    <form action="{{route('updatebannerdata')}}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        {{ $data}}
        <div class="row">
            <div class="col">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Page name" name="title">
            </div>
            <div class="col">

                <label class="form-label" for="image">Upload Image</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="image">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="image">Upload Image</label>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <label for="discription">Discription</label>
            <textarea class="form-control" id="discription" rows="3" name="description"></textarea>
        </div>
        <br />
        <div>
            <label for="status">Status:</label>

            <input type="checkbox" id="status" name="status">
        </div>
        <div>
            <button class="btn btn-success btn-lg float-right" type="submit">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection