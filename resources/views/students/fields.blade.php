<div class="form-row">
   <div class="form-group col-md-6">
     <label for="inputName">名前</label>
     <input name="name" type="text" value="{{ $student->name ?? '' }}" class="form-control" id="inputName">
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-6">
     <label for="inputName">性別</label>
     <input name="gender" type="text"  value="{{ $student->gender ?? '' }}" class="form-control" id="inputName">
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-6">
     <label for="inputName">学年</label>
     <input name="grade" type="text" value="{{ $student->grade ?? '男' }}" class="form-control" id="inputName">
   </div>
</div>
     <input name="role" type="none" value="{{ $student->role ?? '1' }}" class="form-control" id="inputName">
     <input name="id_class" type="none" value="{{ $student->id_class ?? 'class1' }}" class="form-control" id="inputName">
<div class="form-group row">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">登録</button>
    <a href="{{ route('students.index')  }}" class="btn btn-secondary">生徒一覧に戻る</a>
  </div>
</div>
