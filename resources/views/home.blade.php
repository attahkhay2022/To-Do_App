@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                <span style="float: right">
                    <!--creating button-->
                <a href="{{ route('tasks.create') }}" class="btn btn-secondary btn-sm">Create Task</a>
                </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--data passed using compact fnx from home controller-->
                    @if (count($tasks))
                    <table class="table table-striped">
                        <tr>
                           <th>Tasks</th> 
                           <th>Description</th>
                           <th>Actions</th>
                        </tr>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="" method="post" style="display: inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>   
                        @endforeach
                    
                    </table>
                    @else
                    <p>You dont Have any Task yet</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
