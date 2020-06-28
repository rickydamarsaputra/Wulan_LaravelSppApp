<div class="section-body">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="section-title">Spp History Payment Detail Table</h2>
    <form action="{{route('report.patment', $payment->id)}}" method="POST">
      @csrf
      <button class="btn btn-danger btn-sm">Print Report</button>
    </form>
  </div>
  <div class="row">
    <div class="col-lg">
      <div class="card">
        <div class="card-body">

          <div>
            <ul class="list-group">
              @foreach($payment->paymentDetails()->withTrashed()->get() as $paymentDetail)
              <li class="list-group-item d-flex justify-content-between">
                <div>Spp <strong>{{date('F Y', $paymentDetail->spp->date)}}</strong></div>
                <button class="btn btn-info btn-sm">
                  Rp.<strong>{{number_format($paymentDetail->spp->nominal, 0, '', '.')}}</strong>
                </button>
              </li>
              @endforeach
              <div class="d-flex justify-content-between">
                <button class="btn btn-primary btn-sm">Payment Amount</button>
                <button class="btn btn-success btn-sm">Rp.<strong>{{number_format($payment->total_payment, 0, '', '.')}}</strong></button>
              </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>