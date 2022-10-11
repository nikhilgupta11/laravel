@extends('admin.master')

@section('content')
<div class="container-fluid">
    <form action="{{ route('updatefaqdata')}}" class="form" method="POST">
        @csrf
        <div class="row">

            <label for="id">ID</label>
            <input type="hidden" class="form-control" id="id" placeholder="Question" name="id" value="{{ $data->id }}">

        </div>
        <div class="row">

            <label for="question">Question</label>
            <input type="text" class="form-control" id="question" placeholder="Question" name="question" value="{{ $data->question }}">

        </div>
        <br />
        <div class="row">
            <label for="answer">Answer</label>
            <textarea class="form-control" id="answer" rows="3" placeholder="enter your answer here!!!" name="answer">{{ $data->answer }}</textarea>
        </div>
        <br />
        <div>
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
@endsection