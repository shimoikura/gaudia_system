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
                   @include('components.alert')
                   <table class="table">
                      <thead>
                         <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th>操作</th>
                         </tr>
                         @foreach($students as $student)
                            <tr>
                               <td class="align-middle">{{ $student->id }}</td>
                               <td class="align-middle">{{ $student->name }}</td>
                               <td class="align-middle">
                                   <div class="d-flex">
                                       <a href="{{ route('students.show', $student) }}" class="btn btn-secondary btn-sm ml-1">表示</a>
                                       <a href="{{ route('students.edit', $student) }}" class="btn btn-secondary btn-sm ml-1">編集</a>
                                       <form method="POST" action="{{ route('students.destroy',$student) }}">
                                           @method('DELETE')
                                           @csrf
                                           <button onclick="return confirm('本当に削除しますか？')" class="btn btn-secondary btn-sm ml-1">削除</button>
                                       </form>
                                   </div>
                               </td>
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
