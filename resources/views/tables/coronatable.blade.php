<table class="table table-striped text-center" id="corona-table">
  <thead>
    <tr>
      <th class="align-middle">#</th>
      <th class="align-middle">Name</th>
      <th class="align-middle">Kode Number</th>
      <th class="align-middle">Confirmed</th>
      <th class="align-middle">Recovered</th>
      <th class="align-middle">Deaths</th>
    </tr>
  </thead>
  <tbody>
    @foreach($coronaLocal as $corona)
    <tr>
      <td class="align-middle">{{$loop->iteration}}</td>
      <td class="align-middle">{{$corona['provinsi']}}</td>
      <td class="align-middle">{{$corona['kodeProvi']}}</td>
      <td class="align-middle">
        <button class="btn btn-info btn-sm btn-block">{{$corona['kasusPosi']}}</button>
      </td>
      <td class="align-middle">
        <button class="btn btn-success btn-sm btn-block">{{$corona['kasusSemb']}}</button>
      </td>
      <td class="align-middle">
        <button class="btn btn-danger btn-sm btn-block">{{$corona['kasusMeni']}}</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>