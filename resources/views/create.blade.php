
<!--task insertion page-->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Task') }}
                <span style="float: right">
                    <!--creating button-->
                <a href="{{ route('home') }}" class="btn btn-secondary btn-sm">Go back</a>
                </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--creating form[add csrs for security]-->
                   <form action="{{ route('tasks.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
