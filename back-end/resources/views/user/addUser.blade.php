@extends('layouts.app')

@section('content')
<div class="container-fluid mt-12">
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <div class="row">
            <div class="col">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" placeholder="First name">
            </div>
            <div class="col">
                <label for="lastname">Last Name</label>

                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" placeholder="Last name">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="col">
                <label for="contact">Contact No. </label>

                <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact') }}" placeholder="Contact Number">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col">
                <label class="form-label" for="image">Upload Profile Picture</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="image">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" value="{{ old('image') }}" aria-describedby="image">
                        <label class="custom-file-label" for="image">Upload Profile Picture</label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label" for="address">Address</label>

                    <input type="text" id="address" name="address" value="{{ old('address') }}" class="form-control" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Password">
                </div>
            </div>
            <div class="col-3">

                <label for="status">Status:</label>

                <input type="checkbox" id="status" name="status" value=true>


            </div>
            <div class="col-3">
                <label for="varify">Varification:</label>

                <input type="checkbox" id="varify" name="isvarify" value=true>


            </div>
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