<table class="table table-striped text-center" id="users-table">
  <thead>
    <tr>
      <th class="align-middle">#</th>
      <th class="align-middle">Name</th>
      <th class="align-middle">Status</th>
      <th class="align-middle">Joins</th>
      <th class="align-middle">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td class="align-middle">{{$loop->iteration}}</td>
      <td class="align-middle">{{$user->name}}</td>
      <td class="align-middle">
        @if($user->is_admin === 1)
        <div class="badge badge-success d-block">Admin</div>
        @else
        <div class="badge badge-primary d-block">Employee</div>
        @endif
      </td>
      <td class="align-middle">{{$user->created_at->format('d F Y')}}</td>
      <td class="align-middle">
        <form action="{{route('action.banned', $user->id)}}" method="POST" class="form-banned-user">
          @csrf
          @method('delete')
          <button class="btn btn-danger btn-sm">Banned</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>