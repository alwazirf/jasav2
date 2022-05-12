@can('admin')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-body p-3">
        <div class="row">
            <div class="col-8">
            <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Anggota</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ count($data) }}
                </h5>
            </div>
            </div>
            <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-body p-3">
        <div class="row">
            <div class="col-8">
            <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Pria</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ $data->where('gender', 'Pria')->count() }}
                </h5>
            </div>
            </div>
            <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-body p-3">
        <div class="row">
            <div class="col-8">
            <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Wanita</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ $data->where('gender', 'Wanita')->count() }}
                </h5>
            </div>
            </div>
            <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6">
    <div class="card">
        <div class="card-body p-3">
        <div class="row">
            <div class="col-8">
            <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Admin/Admin Wilayah</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ $users->where('level_id', 1)->count() }} / {{ $users->where('level_id', 2)->count() }}
                </h5>
            </div>
            </div>
            <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
            <h6 class="ms-2 mb-0"> Pendidikan </h6>
            <div class="container border-radius-lg">
                <div class="row">
                <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">SD</p>
                    </div>
                    <h4 class="font-weight-bolder">{{ $data->where('last_education', 'SD')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">SMP</p>
                    </div>
                    <h4 class="font-weight-bolder">{{ $data->where('last_education', 'SMP')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">SMA/SMK</p>
                    </div>
                    <h4 class="font-weight-bolder">{{ $data->where('last_education', 'SMA/SMK')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">D3</p>
                    </div>
                    <h4 class="font-weight-bolder">{{ $data->where('last_education', 'D3')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">D4</p>
                    </div>
                    <h4 class="font-weight-bolder">{{ $data->where('last_education', 'D4')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">S1</p>
                    </div>
                    <h4 class="font-weight-bolder">{{ $data->where('last_education', 'S1')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">S2</p>
                    </div>
                    <h4 class="font-weight-bolder">{{ $data->where('last_education', 'S2')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">S3</p>
                    </div>
                    <h4 class="font-weight-bolder">{{ $data->where('last_education', 'S3')->count() }}</h4>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endcan
@can('notadmin')
    <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
        <div class="card-body p-3">
            <div class="row">
            <div class="col-8">
                <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Anggota</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ count($dataMember) }}
                </h5>
                </div>
            </div>
            <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fa fa-users text-lg opacity-10" aria-hidden="true"></i>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
        <div class="card-body p-3">
            <div class="row">
            <div class="col-8">
                <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Pria</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ $dataMember->where('gender', 'Pria')->count() }}
                </h5>
                </div>
            </div>
            <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fa fa-male text-lg opacity-10" aria-hidden="true"></i>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
        <div class="card-body p-3">
            <div class="row">
            <div class="col-8">
                <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Wanita</p>
                <h5 class="font-weight-bolder mb-0">
                    {{ $dataMember->where('gender', 'Wanita')->count() }}
                </h5>
                </div>
            </div>
            <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fa fa-female text-lg opacity-10" aria-hidden="true"></i>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row mt-4">
    <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card">
        <div class="card-body p-3">
            <h6 class="ms-2 mb-0"> Pendidikan </h6>
            <div class="container border-radius-lg">
            <div class="row">
                <div class="col-3 py-3 ps-0">
                <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">SD</p>
                </div>
                <h4 class="font-weight-bolder">{{ $dataMember->where('last_education', 'SD')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">SMP</p>
                </div>
                <h4 class="font-weight-bolder">{{ $dataMember->where('last_education', 'SMP')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">SMA/SMK</p>
                </div>
                <h4 class="font-weight-bolder">{{ $dataMember->where('last_education', 'SMA/SMK')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">D3</p>
                </div>
                <h4 class="font-weight-bolder">{{ $dataMember->where('last_education', 'D3')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">D4</p>
                </div>
                <h4 class="font-weight-bolder">{{ $dataMember->where('last_education', 'D4')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">S1</p>
                </div>
                <h4 class="font-weight-bolder">{{ $dataMember->where('last_education', 'S1')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">S2</p>
                </div>
                <h4 class="font-weight-bolder">{{ $dataMember->where('last_education', 'S2')->count() }}</h4>
                </div>

                <div class="col-3 py-3 ps-0">
                <div class="d-flex mb-2">
                    <p class="text-xs mt-1 mb-0 font-weight-bold">S3</p>
                </div>
                <h4 class="font-weight-bolder">{{ $dataMember->where('last_education', 'S3')->count() }}</h4>
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endcan

