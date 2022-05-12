<div class="container-fluid py-4">
    <a href="/user-data" class="btn bg-gradient-primary btn-sm mb-0 mb-4 fa fa-arrow-left" type="button"> kembali</a>
    <div class="card">
        <div class="card-header pb-0 px-3">
            @if (session()->has('message'))
                        <div class="container alert alert-primary text-white">
                            {{ session('message') }}
                        </div>
            @endif
            <h6 class="mb-0">{{ __('Profile Information') }}</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-control-label">{{ __('Nama Lengkap') }}</label>
                            <div class="@error('name')border border-danger rounded-3 @enderror">
                                <input wire:model="name" class="form-control" type="text" placeholder="Name"
                                    id="name">
                            </div>
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="level_id" class="form-control-label">{{ __('Level') }}</label>
                            <select wire:model="level_id" name="level_id" class="form-select @error('level_id') is-invalid @enderror" aria-label="Default select example" required>
                                <option value="">--Pilih Level--</option>
                                @foreach ($levels as $level)
                                <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @endforeach
                            </select>
                            @error('level_id') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-control-label">{{ __('Email') }}</label>
                            <div class="@error('email')border border-danger rounded-3 @enderror">
                                <input wire:model="email" class="form-control" type="text"
                                    placeholder="example@gmail.com" id="email">
                            </div>
                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city" class="form-control-label">{{ __('Kabupaten') }}</label>
                            <select wire:model="city" name="city" class="form-select @error('city') is-invalid @enderror" aria-label="Default select example" required>
                                <option value="">--Pilih Kabupaten--</option>
                                @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="form-control-label">{{ __('Password') }}</label>
                            <div class="@error('password')border border-danger rounded-3 @enderror">
                                <input wire:model="password" class="form-control" type="password"
                                    placeholder="" id="password">
                            </div>
                            @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                </div>
            </form>

        </div>
    </div>
</div>
