<div class="section-body">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="section-title">Class Table</h2>
    <a href="{{route('view.createclass')}}" class="btn btn-primary btn-sm">Create New Class</a>
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
                  <th class="align-middle">Total Student</th>
                  <th class="align-middle">Competence</th>
                  <th class="align-middle">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($classes as $class)
                <tr>
                  <td class="align-middle">{{$loop->iteration}}</td>
                  <td class="align-middle">{{$class->name}}</td>
                  <td class="align-middle">
                    <div class="badge badge-info d-block">{{$class->count}}</div>
                  </td>
                  <td class="align-middle">
                    <div class="badge badge-primary d-block">{{$class->competence}}</div>
                  </td>
                  <td class="align-middle">
                    <form action="{{route('action.bannedclass', $class->id)}}" method="POST" class="form-banned-class">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm">Banned</button>
                      <a href="{{route('view.changeclass', $class->id)}}" class="btn btn-success btn-sm ml-2">Change</a>
                      <a href="{{route('view.studentonclass', $class->id)}}" class="btn btn-info btn-sm ml-2">Student List</a>
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