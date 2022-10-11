@extends('admin.master')


@section('content')
<div class="container">
    <form action="{{route('addnewpage')}}" class="form" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="pagename">Page Name</label>
                <input type="text" class="form-control" id="pagename" placeholder="Page name" name="pagename">
            </div>
            <div class="col">
                <label for="slug">Slug</label>

                <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
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