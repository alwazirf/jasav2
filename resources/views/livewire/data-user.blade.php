<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                @if (session()->has('message'))
                        <div class="container alert alert-primary text-white">
                            {{ session('message') }}
                        </div>
                @endif
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-4">All Users</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input wire:model="search" type="text" class="form-control" placeholder="name, email or gender..">
                                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto mx-2">
                            <a href="/user-create" class="btn bg-gradient-primary btn-sm mb-0" type="button">+User</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            No
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Nama
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Email
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Wilayah
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Level
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 0; ?>
                    @foreach ($users as $user)
                    <?php $no++ ?>
                    <tr>
                        <td class="ps-4">
                            <p class="text-xs font-weight-bold mb-0">{{ $no }}</p>
                        </td>
                        <td>
                            <div>
                                <p class="text-xs font-weight-bold mb-0">{{ $user->name }}</p>
                            </div>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $user->city->name }}</p>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $user->level->name }}</p>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('user-show', ['id' => $user->id]) }}" class="mx-2" data-bs-toggle="tooltip"
                                data-bs-original-title="Lihat Data">
                                <i class="fas fa-eye text-secondary"></i>
                        </a>
                            <a href="{{ route('user-edit', ['id' => $user->id]) }}" class="mx-2" data-bs-toggle="tooltip"
                                data-bs-original-title="Edit Data">
                                <i class="fas fa-user-edit text-secondary" style="cursor:pointer"></i>
                            </a>
                            <a onclick="confirm('Apakah anda yakin ?') || event.stopImmediatePropagation()" wire:click="destroy({{ $user->id }})" type="button" class="mx-2" data-toggle="modal" data-target="#exampleModal" style="cursor:pointer">
                                <i class="fas fa-trash text-secondary"></i>
                            </a>
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
  </main>
