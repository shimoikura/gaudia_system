@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">生徒情報編集</div>
                <div class="card-body">
                   <form method="POST" action="{{ route('students.update', $student) }}">
                       @method('PUT')
                       @csrf
                       @include('students.fields')
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
