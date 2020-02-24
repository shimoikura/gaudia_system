@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">生徒一覧</div>
                   <table class="table">
                      <thead>
                         <tr>
                            <th>ID</th>
                            <th>名前</th>
                         </tr>
                         @foreach($students as $student)
                            <tr>
                               <td>{{ $student->id }}</td>
                               <td>{{ $student->name }}</td>
                            </tr>
                         @endforeach
                      </thead>
                   </table>
                   {{ $students->links() }}
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
