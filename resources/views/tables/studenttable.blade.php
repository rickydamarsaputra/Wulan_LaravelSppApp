<div class="section-body">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="section-title">Student Table</h2>
    <a href="{{route('view.createstudent')}}" class="btn btn-primary btn-sm">Create New Student</a>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped text-center" id="table-1">
              <thead>
                <tr>
                  <th class="align-middle">#</th>
                  <th class="align-middle">Name</th>
                  <th class="align-middle">Nisn</th>
                  <th class="align-middle">Class</th>
                  <th class="align-middle">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($students as $student)
                <tr>
                  <td class="align-middle">{{$loop->iteration}}</td>
                  <td class="align-middle">{{$student->name}}</td>
                  <td class="align-middle">{{$student->nisn}}</td>
                  <td class="align-middle">
                    <div class="badge badge-primary d-block">{{$student->classroom->name}}</div>
                  </td>
                  <td class="align-middle">
                    <form action="{{route('action.bannedstudent', $student->id)}}" method="POST" class="form-banned-student">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm">Banned</button>
                      <a href="{{route('view.changestudent', $student->id)}}" class="btn btn-success btn-sm ml-2">Change</a>
                      <a href="{{route('view.studentinfo', $student->id)}}" class="btn btn-info btn-sm ml-2">See More</a>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>