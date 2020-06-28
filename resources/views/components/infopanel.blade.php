<div class="d-flex justify-content-between mb-4">
  <button class="btn btn-primary btn-sm">Corona Global Tracker</button>
  <button class="btn btn-info btn-sm">Last Update {{date('d F Y h:i:s A', strtotime($coronaGlobal['lastUpdate']))}}</button>
</div>
<div class="row">
  <div class="col-lg">
    <div class="card card-statistic-1">
      <div class="card-icon bg-info">
        <i class="fas fa-virus"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Corona Confirmed</h4>
        </div>
        <div class="card-body">
          {{number_format($coronaGlobal['confirmed']['value'], 0, '', '.')}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-heartbeat"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Corona Recovered</h4>
        </div>
        <div class="card-body">
          {{number_format($coronaGlobal['recovered']['value'], 0, '', '.')}}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="fas fa-skull-crossbones"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Corona Deaths</h4>
        </div>
        <div class="card-body">
          {{number_format($coronaGlobal['deaths']['value'], 0, '', '.')}}
        </div>
      </div>
    </div>
  </div>
</div>