@extends('layout')

{{-- Total content in our todos page --}}
@section('content')


    {{-- add alert session --}}
    @if (session('add'))
        <div class="alert alert-success alert-dismissible fade show" style="margin-top:5%;">
            {{ session('add') }}
        </div>
    @endif

    {{-- Edit/Update alert session --}}
    @if (session('update'))
        {{-- <div class="alert alert-success alert-dismissible fade show" style="margin-top:5%;">
            {{ session('update') }}
        </div> --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:5%;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('update') }}</strong>
        </div>
    @endif

    {{-- deleted alert session --}}
    @if (session('delete'))
        <div class="alert alert-success alert-dismissible fade show" style="margin-top:5%;">
            {{ session('delete') }}
        </div>
    @endif


     {{-- Completed alert session --}}
    @if (session('completed'))
        {{-- <div class="alert alert-success alert-dismissible fade show" style="margin-top:5%;">
            {{ session('update') }}
        </div> --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:5%;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('completed') }}</strong>
        </div>
    @endif

     {{-- pending alert session --}}
    @if (session('pending'))
        {{-- <div class="alert alert-success alert-dismissible fade show" style="margin-top:5%;">
            {{ session('update') }}
        </div> --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:5%;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('pending') }}</strong>
        </div>
    @endif

    <h1>Basic Task List</h1>
    <div class="card">
      <div class="card-body">
        <span class="card-link">Create <i class="fas fa-plus btn btn-primary" ></i></span>
        <span class="card-link">Edit <i class="fas fa-edit btn btn-primary" ></i></span>
        <span class="card-link">Delete <i class="fas fa-trash-alt btn btn-danger"></i></span>
        <span class="card-link">Completed <i class="fas fa-check btn btn-success"></i></span>
        <span class="card-link">Pending <i class="fas fa-minus btn btn-warning"></i></span>
      </div>
    </div>

    {{-- start of todo form input --}}
    <div style="margin-top:5%;"></div>
    <div class="row">
        <div class="col-md-12">
            {{-- form group  --}}
            <div class="form-group">
                {{-- todo form starts here --}}
                <form action="/create/todo" method="POST">
                    {{-- @csrf --}}
                    {{ csrf_field() }}
                    {{-- input for todo starts here --}}
                    {{-- <input type="text" class="form-control input-sm" name="created" value="{{ date("F j, Y, g:i a") }}" disabled=""> --}}
                    <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new todo">
                    <br>
                    <button class="btn btn-primary" type="submit" data-toggle="tooltip" data-placement="top" title="Create Task"> <i class="fas fa-plus" ></i> Create Todo</button>
                </form>
            </div>
        </div>
    </div>

    {{-- displays the todos we have in the database and also shows us the actions we can perform on our page: update, delete --}}
    @foreach ($todos as $todo)
        <div class="row">
            {{-- <div class="col-lg-12"> --}}
                {{-- <div class="col-md-2"></div> --}}
                <div class="col-md-8">
                    {{ $todo->todo }}
                </div>
                {{-- <div class="col-md-3">
                    {{ $todo->todo }}
                </div> --}}
                <div class="col-md-1">
                    <a href="{{ route('todo.update', ['id' => $todo->id]) }}">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Task"> <i class="fas fa-edit" ></i> </button>
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('todo.delete', ['id' => $todo->id]) }}">
                        <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Task"> <i class="fas fa-trash-alt"></i> </button>
                    </a>
                </div>
                @if(!$todo->completed)
                <div class="col-md-1">
                    <a href="{{ route('todo.completed', ['id' => $todo->id]) }}">
                        <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Mark as Completed"> <i class="fas fa-check "></i> </button>
                    </a>
                </div>
                {{-- @else --}}
                    {{-- <span class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-2x fa-thumbs-up"></i></span> --}}
                @endif
                @if($todo->completed)
                <div class="col-md-1">
                    <a href="{{ route('todo.pending', ['id' => $todo->id]) }}">
                        <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Mark as Pending"> <i class="fas fa-minus"></i> </button>
                    </a>
                </div>
                {{-- @else --}}
                    {{-- <span class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-2x fa-thumbs-up"></i></span> --}}
                @endif
            {{-- </div> --}}
        </div>
            <hr/><br/>
    @endforeach


    {{-- @if (session('deleted'))
        <div class='alert alert-primary alert-dismissible fade show' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <strong>Holy guacamole!</strong> You should check in on some of those fields below. {{ session('deleted') }}
                <span aria-hidden='true'>&times;</span>
                <span class='sr-only'>Close</span>
            </button>
        </div>
    @endif --}}

@endsection
