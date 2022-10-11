@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form action="" class="form">

        <div class="row">

            <label for="question">Question</label>
            <input type="text" class="form-control" id="question" placeholder="Question">

        </div>
        <br />
        <div class="row">
            <label for="answer">Answer</label>
            <textarea class="form-control" id="answer" rows="3" placeholder="enter your answer here!!!"></textarea>
        </div>
        <br />
        <div>
            <label for="status">Status:</label>

            <input type="checkbox" id="status">
        </div>
        <div>
            <button class="btn btn-success btn-lg float-right" type="submit">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection