@extends('layout')

@section('main')
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-3">Welcome to Basic Todo App with Laravel 5.7</h1>
        <p class="lead">You can customize this and make use of it in your app or whichever way you consider fit</p>
        <hr class="my-2">
        <p>Laravel 5.7, Bootstrap 4.3.1, DB:Sqlite</p>
        <div class="card">
            <div class="card-body">
                <span class="card-link">Create Task <i class="fas fa-plus btn btn-primary" ></i></span>
                <span class="card-link">Edit Task <i class="fas fa-edit btn btn-primary" ></i></span>
                <span class="card-link">Delete Task <i class="fas fa-trash-alt btn btn-danger"></i></span>
                <span class="card-link">Mark as Completed <i class="fas fa-check btn btn-success"></i></span>
                <span class="card-link">Mark as Pending <i class="fas fa-minus btn btn-warning"></i></span>
            </div>
        </div>
        <br>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ url('/todos') }}" role="button">Access it Here</a>
        </p>
    </div>
</div>
@endsection
