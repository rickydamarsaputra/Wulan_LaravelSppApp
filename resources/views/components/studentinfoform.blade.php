<div class="form-group">
  <label for="email">Name</label>
  <input id="email" type="email" class="form-control form-control-sm" value="{{$student->name}}" readonly>
</div>
<div class="form-group">
  <label for="address">Address</label>
  <input id="address" type="text" class="form-control form-control-sm" value="{{$student->address}}" readonly>
</div>
<div class="form-group">
  <label for="phone">Phone Number</label>
  <input id="phone" type="text" class="form-control form-control-sm" value="{{$student->phone}}" readonly>
</div>
<div class="form-group">
  <label for="competence">Competence</label>
  <input id="competence" type="text" class="form-control form-control-sm" value="{{$student->classroom->competence}}" readonly>
</div>
<div class="form-group">
  <label for="class">Attend Class</label>
  <input id="class" type="text" class="form-control form-control-sm" value="{{$student->classroom->name}}" readonly>
</div>
<div class="row">
  <div class="form-group col-6">
    <label for="nisn">Nisn</label>
    <input id="nisn" type="text" class="form-control form-control-sm" value="{{$student->nisn}}" readonly>
  </div>
  <div class="form-group col-6">
    <label for="nis">Nis</label>
    <input id="nis" type="text" class="form-control form-control-sm" value="{{$student->nis}}" readonly>
  </div>
</div>