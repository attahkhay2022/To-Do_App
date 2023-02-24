
<!--task insertion page-->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Existing Task') }}
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
                    <!--creating form[edit existing tasks csrs for security]-->
                   <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" id="description" class="form-control" value="{{ $task->description }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
