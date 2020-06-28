<div class="section-body">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="section-title">History Payment Table</h2>
    <a href="{{route('view.createspp')}}" class="btn btn-primary btn-sm">Create New Spp Payment</a>
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
                  <th class="align-middle">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($students as $student)
                <tr>
                  <td class="align-middle">{{$loop->iteration}}</td>
                  <td class="align-middle">
                    <div class="badge badge-primary d-block">{{$student->name}}</div>
                  </td>
                  <td class="align-middle">
                    <div class="badge badge-success d-block">{{$student->nisn}}</div>
                  </td>
                  <td class="align-middle">
                    <a href="{{route('view.detailhistory', $student->id)}}" class="btn btn-info btn-sm btn-block">See More</a>
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