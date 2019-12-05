@extends('layout')

{{-- Total content in our todos page --}}
@section('content')

    {{-- Edit/Update alert session --}}
    @if (session('update'))
        <div class="alert alert-success alert-dismissible fade show" style="margin-top:5%;">
            {{ session('update') }}
        </div>
    @endif


    {{-- start of todo form input --}}
    <div style="margin-top:5%;"></div>
    <div class="row">
        <div class="col-lg-12">
            {{-- form group  --}}
            <div class="form-group">
                {{-- todo form starts here --}}
                <form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="POST">
                    {{-- @csrf --}}
                    {{ csrf_field() }}
                    {{-- input for todo starts here --}}
                    <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todo }}">
                    <br>
                    <button class="btn btn-success" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
    <hr/><br/>

@endsection
