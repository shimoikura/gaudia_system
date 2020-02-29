@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">生徒一覧</div>
                   <div class="mb-3">
                       <a href="{{ route('students.create') }}" class="btn btn-primary">生徒新規登録</a>
                   </div>
                   <table class="table">
                      <thead>
                         <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th>操作</th>
                         </tr>
                         @foreach($students as $student)
                            <tr>
                               <td>{{ $student->id }}</td>
                               <td>{{ $student->name }}</td>
                               <td><a href="{{ route('students.show', $student) }}" class="btn btn-secondary btn-sm">表示</a></td>
                               <td><a href="{{ route('students.edit', $student) }}" class="btn btn-secondary btn-sm">編集</a></td>
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
