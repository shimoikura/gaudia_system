@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">生徒登録</div>
                <div class="card-body">
                   <form method="POST" action="{{ route('students.store') }}">
                       @csrf
                       <div class="form-row">
                           <div class="form-group col-md-6">
                             <label for="inputName">名前</label>
                             <input name="name" type="text" class="form-control" id="inputName">
                           </div>
                        </div>
                       <div class="form-row">
                           <div class="form-group col-md-6">
                             <label for="inputName">性別</label>
                             <input name="gender" type="text" class="form-control" id="inputName">
                           </div>
                        </div>
                       <div class="form-row">
                           <div class="form-group col-md-6">
                             <label for="inputName">学年</label>
                             <input name="grade" type="text" class="form-control" id="inputName">
                           </div>
                        </div>
                             <input name="role" type="none" class="form-control" id="inputName" value="student">
                             <input name="id_class" type="none" class="form-control" id="inputName" value="class1">
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">登録</button>
                            <a href="{{ route('students.index')  }}" class="btn btn-secondary">生徒一覧に戻る</a>
                          </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
