<div class="section-body">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="section-title">Spp Table</h2>
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
                  <th class="align-middle">Nominal</th>
                  <th class="align-middle">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($spps as $spp)
                <tr>
                  <td class="align-middle">{{$loop->iteration}}</td>
                  <td class="align-middle">Spp <strong>{{date('F Y', $spp->date)}}</strong></td>
                  <td class="align-middle">
                    <div class="badge badge-primary d-block">
                      Rp.<strong>{{number_format($spp->nominal, 0, '', '.')}}</strong>
                    </div>
                  </td>
                  <td class="align-middle">
                    <form action="{{route('action.bannedspp', $spp->id)}}" method="POST" class="form-banned-spp">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm">Banned</button>
                      <a href="{{route('view.changespp', $spp->id)}}" class="btn btn-success btn-sm ml-2">Change</a>
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