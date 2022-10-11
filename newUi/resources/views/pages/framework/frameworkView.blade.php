@extends('layouts.layout')

@section('main_content')
<div class="container">
    <div class="adduser">
        <a href="{{route('addframework')}}">Add Framework</a>
    </div>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <hr>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                            <table class="table user-list">
                                <thead>
                                    <tr>
                                        <th><span>Name</span></th>
                                        <th><span>Created</span></th>
                                        <th class="text-center"><span>Status</span></th>
                                        <th><span>Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $items)
                                    <tr>
                                        <td>
                                            <a href="#" class="user-link">{{$items->name}}</a>
                                        </td>
                                        <td>{{$items->created_at}}</td>
                                        <td class="text-center">
                                            <span class="label label-default">
                                                @if($items->status == 1)
                                                <input type="checkbox" checked disabled>

                                                @else
                                                <input type="checkbox" disabled>

                                                @endif
                                            </span>
                                        </td>
                                        <td style="width: 20%;">
                                            <a class="btn btn-secondary" href="{{route('updateframework' , $items->id)}}">Update</a>

                                            <a class="btn btn-danger" href="{{route('deleteframework' , $items->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        background: #eee;
    }

    .main-box.no-header {
        padding-top: 20px;
    }

    .main-box {
        background: #FFFFFF;
        -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
        box-shadow: 1px 1px 2px 0 #CCCCCC;
        margin-bottom: 16px;
        -webikt-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .table a.table-link.danger {
        color: #e74c3c;
    }

    .label {
        border-radius: 3px;
        font-size: 0.875em;
        font-weight: 600;
    }

    .user-list tbody td .user-subhead {
        font-size: 0.875em;
        font-style: italic;
    }

    .user-list tbody td .user-link {
        display: block;
        font-size: 1.25em;
        padding-top: 3px;
        margin-left: 60px;
    }

    a {
        color: #3498db;
        outline: none !important;
    }

    .user-list tbody td>img {
        position: relative;
        max-width: 50px;
        float: left;
        margin-right: 15px;
    }

    .table thead tr th {
        text-transform: uppercase;
        font-size: 0.875em;
    }

    .table thead tr th {
        border-bottom: 2px solid #e7ebee;
    }

    .table tbody tr td:first-child {
        font-size: 1.125em;
        font-weight: 300;
    }

    .table tbody tr td {
        font-size: 0.875em;
        vertical-align: middle;
        border-top: 1px solid #e7ebee;
        padding: 12px 8px;
    }

    a:hover {
        text-decoration: none;
    }

    .adduser {
        padding: 15px;
        background: #007bff;
        width: 100px;
        border-radius: 4px;

    }
</style>
@endsection