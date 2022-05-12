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
                            <a wire:click="export" class="btn bg-gradient-primary btn-sm mb-0" type="button">Export</a>
                        </div>
                        <div class="col-md-auto mx-2">
                            <a href="{{ route('member-create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+Member</a>
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
                            ID
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Nama
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            No Anggota
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Email
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Jenis Kelamin
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Alamat
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Tempat/Tanggal Lahir
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach ($members as $member)
                    <tr>
                        <td class="ps-4">
                            <p class="text-xs font-weight-bold mb-0">{{ $no }}</p>
                            <?php $no++ ?>
                        </td>
                        <td>
                            <div>
                                <p class="text-xs font-weight-bold mb-0">{{ $member->name }}</p>
                            </div>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $member->member_no }}</p>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $member->email }}</p>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $member->gender }}</p>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $member->district->name }}/{{ $member->district->city->name }}</p>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $member->place_of_born }}/{{ $member->date_of_born }}</span>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('member-show', ['id' => $member->id]) }}" class="mx-1" data-bs-toggle="tooltip"
                                data-bs-original-title="Lihat Data">
                                <i class="fas fa-eye text-secondary"></i>
                        </a>
                            <a href="{{ route('member-edit', ['id' => $member->id]) }}" class="mx-1" data-bs-toggle="tooltip"
                                data-bs-original-title="Edit Data">
                                <i class="fas fa-user-edit text-secondary" style="cursor:pointer"></i>
                            </a>
                            <a onclick="confirm('Apakah anda yakin ?') || event.stopImmediatePropagation()" wire:click="destroy({{ $member->id }})" type="button" class="mx-1" data-toggle="modal" data-target="#exampleModal" style="cursor:pointer">
                                <i class="fas fa-trash text-secondary"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="d-flex justify-content-center">
                {{ $members->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
