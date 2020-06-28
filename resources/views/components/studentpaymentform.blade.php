<form action="{{route('action.createpayment')}}" method="POST" class="form-payment-student">
  @csrf
  <div class="form-group">
    <label for="user_name">Employee Name</label>
    <input id="user_name" type="text" class="form-control" name="user_name" value="{{auth()->user()->name}}" readonly>
    @error('user_name')<small class="text-danger">{{ $message }}</small>@enderror
  </div>
  <div class="form-group">
    <label for="student_name">Student Name</label>
    <input id="student_name" type="text" class="form-control" name="student_name" value="{{$student->name}}" readonly>
    @error('student_name')<small class="text-danger">{{ $message }}</small>@enderror
  </div>
  <div class="form-group">
    <label class="d-block">Spp To Be Paid</label>
    <select class="form-control select2" name="spp_id">
      @foreach($spps as $spp)
      <option value="{{$spp->id}}">Spp {{date('F Y', $spp->date)}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg btn-block">
      Pay Now
    </button>
  </div>
</form>