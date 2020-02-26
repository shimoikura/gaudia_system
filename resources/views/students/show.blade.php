@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">生徒詳細</div>
                   <table class="table">
                      <thead>
                         <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th>登録日</th>
                         </tr>
                         <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->created_at->format('Y/m/d') }}</td>
                         </tr>
                      </thead>
                   </table>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
