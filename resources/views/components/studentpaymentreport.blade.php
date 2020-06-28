<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel App | Report {{$paymentOwned->student->name}}</title>
  <link rel="stylesheet" href="{{ltrim(public_path('/css/report.css'))}}" media="all">
</head>

<body>

  <div class="wrapper">
    <div class="sign">
      <p>TANDA BUKTI PEMBAYARAN | TAHUN AJARAN {{date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y")-1))}}/{{date('Y')}}</p>
    </div>
    <div class="info">
      <p>Nama Siswa<span>{{$paymentOwned->student->name}}</span></p>
      <p>NIS<span>{{$paymentOwned->student->nis}}</span></p>
      <p>Classroom<span>{{$paymentOwned->student->classroom->name}}</span></p>
      <p>Competence<span>{{$paymentOwned->student->classroom->competence}}</span></p>
      <p>Payment Date<span>{{$paymentOwned->created_at}}</span></p>
    </div>
    <table border="1" cellspacing="0" cellpadding="10" class="report-table">
      <thead>
        <tr>
          <td>RINCIAN UANG PEMBAYARAN</td>
          <td>NOMINAL</td>
        </tr>
      </thead>
      <tbody>
        @foreach($paymentOwned->paymentDetails()->withTrashed()->get() as $paymentDetail)
        <tr>
          <td>Spp <strong>{{date('F Y', $paymentDetail->spp->date)}}</strong></td>
          <td>Rp.<strong>{{number_format($paymentDetail->spp->nominal, 0, '', '.')}}</strong></td>
        </tr>
        @endforeach
        <tr>
          <td>TOTAL</td>
          <td>Rp.<strong>{{number_format($paymentOwned->total_payment, 0, '', '.')}}</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>

</html>