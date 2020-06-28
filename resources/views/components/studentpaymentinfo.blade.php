<div x-show="isOpen">
  <ul class="list-group">
    @if($payment)
    @foreach($payment->paymentDetails as $paymentDetail)
    <li class="list-group-item d-flex justify-content-between">
      <div>Spp <strong>{{date('F Y', $paymentDetail->spp->date)}}</strong></div>
      <div class="d-flex">
        <button class="btn btn-info btn-sm">
          Rp.<strong>{{number_format($paymentDetail->spp->nominal, 0, '', '.')}}</strong>
        </button>
        <form action="{{route('action.deletepaymentdetail', $paymentDetail->id)}}" method="POST" class="form-delete-payment-detail">
          @csrf
          @method('delete')
          <button type="submit" class="btn bg-danger btn-sm delete-payment-button ml-2"><i class="fas fa-times"></i></button>
        </form>
      </div>
    </li>
    @endforeach
    @else
    <li class="list-group-item d-flex">
      <button class="btn btn-warning btn-sm btn-block">You Have Not Made A Payment!</button>
    </li>
    @endif
  </ul>

  @if($payment)
  <div class="d-flex justify-content-between">
    <button class="btn btn-primary btn-sm">Payment Amount</button>
    <button class="btn btn-success btn-sm">Rp.<strong>{{number_format($payment->total_payment, 0, '', '.')}}</strong></button>
  </div>
  @endif
</div>