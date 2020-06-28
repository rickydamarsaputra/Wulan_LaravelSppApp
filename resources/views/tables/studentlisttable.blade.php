<div class="section-body">
  <h2 class="section-title">{{$classroom->name}} Table</h2>
  <p class="section-lead">{{$classroom->competence}}</p>

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
                  <th class="align-middle">Address</th>
                  <th class="align-middle">Phone</th>
                  <th class="align-middle">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($classroom->students as $student)
                <tr>
                  <td class="align-middle">{{$loop->iteration}}</td>
                  <td class="align-middle">{{$student->name}}</td>
                  <td class="align-middle">{{$student->address}}</td>
                  <td class="align-middle">{{$student->phone}}</td>
                  <td class="align-middle">
                    <form action="{{route('action.bannedstudent', $student->id)}}" method="POST" class="form-banned-student">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm">Banned</button>
                      <a href="" class="btn btn-success btn-sm ml-2">Change</a>
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