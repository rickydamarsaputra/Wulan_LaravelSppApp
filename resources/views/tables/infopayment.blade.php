<div class="section-body">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="section-title">Spp History Payment Table</h2>
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
                  <th class="align-middle">Payment Date</th>
                  <th class="align-middle">Nominal</th>
                  <th class="align-middle">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($payments as $payment)
                <tr>
                  <td class="align-middle">{{$loop->iteration}}</td>
                  <td class="align-middle">
                    <div class="badge badge-success d-block">{{$payment->created_at}}</div>
                  </td>
                  <td class="align-middle">
                    <div class="badge badge-primary d-block">Rp.<strong>{{number_format($payment->total_payment, 0, '', '.')}}</div>
                  </td>
                  <td class="align-middle">
                    <a href="{{route('view.paymentdetailhistory', $payment->id)}}" class="btn btn-info btn-sm btn-block">See More</a>
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