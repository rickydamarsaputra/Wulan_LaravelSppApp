<div class="section-body" x-data="{tab: 'corona'}">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="section-title" x-show="tab === 'users'">Users Table</h2>
    <h2 class="section-title" x-show="tab === 'corona'">Corona Indonesia Tracker</h2>
    <div>
      <button :class="{'btn-primary' : tab !== 'users'}" @click="tab = 'corona'" class="btn btn-info btn-sm">Corona Table</button>
      <button :class="{'btn-primary' : tab !== 'corona'}" @click="tab = 'users'" class="btn btn-info btn-sm mx-2">User Table</button>
      <a href="{{route('view.register')}}" class="btn btn-primary btn-sm">Create New User</a>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <div x-show="tab === 'users'">
              @include('tables.userstable')
            </div>
            <div x-show="tab === 'corona'">
              @include('tables.coronatable')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>