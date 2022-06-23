<div class="container-fluid py-4">
    <a href="/member-data" class="btn bg-gradient-primary btn-sm mb-4 mt-2 fa fa-arrow-left" type="button"> kembali</a>
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Profile Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form wire:submit.prevent="update" action="#" method="POST" role="form text-left">
                    <input type="hidden" wire:model="memberId">
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
                                <label for="gender" class="form-control-label">{{ __('Jenis Kelamin') }}</label>
                                <select wire:model="gender" name="gender" class="form-select @error('gender') is-invalid @enderror" aria-label="Default select example" required>
                                    <option selected>--Pilih Jenis Kelamin--</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                  </select>
                                @error('gender') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="place_of_born" class="form-control-label">{{ __('Tempat Lahir') }}</label>
                                <div class="@error('place_of_born')border border-danger rounded-3 @enderror">
                                    <input wire:model="place_of_born" class="form-control" type="text"
                                        placeholder="Tempat Lahir" id="place_of_born">
                                </div>
                                @error('place_of_born') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_of_born" class="form-control-label">{{ __('Tanggal Lahir') }}</label>
                                <div class="@error('date_of_born') border border-danger rounded-3 @enderror">
                                    <input wire:model="date_of_born" class="form-control" type="date"
                                        id="date">
                                </div>
                                @error('date_of_born') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city" class="form-control-label">{{ __('Kabupaten') }}</label>
                                @if(auth()->user()->is_admin == false)
                                    <select wire:model="city" name="city" class="form-select @error('city') is-invalid @enderror" aria-label="Default select example" required disabled>
                                        <option value="{{ $cities->id }}">{{ $cities->name }}</option>
                                    </select>
                                @else
                                    <select wire:model="city" name="city" class="form-select @error('city') is-invalid @enderror" aria-label="Default select example" required>
                                        @if(auth()->user()->is_admin == false)
                                            <option value="{{ $cities->id }}">{{ $cities->name }}</option>
                                        @else
                                            <option value="">--Pilih Kabupaten--</option>
                                            @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                @endif
                                @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="district" class="form-control-label">{{ __('Kecamatan') }}</label>
                                <select wire:model="district" name="district" class="form-select @error('district') is-invalid @enderror" aria-label="Default select example" required>

                                @if($districts->count () == 0)
                                    <option value="">--Pilih Kabupaten Dulu--</option>
                                @endif
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                                </select>
                                @error('district') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-control-label">{{ __('Alamat Lengkap') }}</label>
                        <div class="@error('address')border border-danger rounded-3 @enderror">
                            <input wire:model="address" class="form-control" type="text"
                                placeholder="Desa ..." id="address">
                        </div>
                        @error('address') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="number_child" class="form-control-label">{{ __('Anak Ke') }}</label>
                                <div class="@error('number_child')border border-danger rounded-3 @enderror">
                                    <input wire:model="number_child" class="form-control" type="number"
                                        placeholder="-" id="number_child">
                                </div>
                                @error('number_child') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="number_of_sibling" class="form-control-label">{{ __('Jumlah Saudara') }}</label>
                                <div class="@error('number_of_sibling')border border-danger rounded-3 @enderror">
                                    <input wire:model="number_of_sibling" class="form-control" type="number"
                                        placeholder="-" id="number_of_sibling">
                                </div>
                                @error('number_of_sibling') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="status" class="form-control-label">{{ __('Status') }}</label>
                                <select wire:model="status" name="status" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" required>
                                    <option selected>--Pilih Status--</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Belum">Belum</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                                @error('status') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="last_education" class="form-control-label">{{ __('Pendidikan Terakhir') }}</label>
                                <select wire:model="last_education" name="last_education" class="form-select @error('last_education') is-invalid @enderror" aria-label="Default select example" required>
                                    <option selected>--Pilih Pendidikan Terakhir--</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                                @error('last_education') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jobs" class="form-control-label">{{ __('Pekerjaan') }}</label>
                                <div class="@error('jobs')border border-danger rounded-3 @enderror">
                                    <input wire:model="jobs" class="form-control" type="text"
                                        placeholder="Programmer" id="jobs">
                                </div>
                                @error('jobs') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="skill" class="form-control-label">{{ __('Kemampuan') }}</label>
                                <div class="@error('skill')border border-danger rounded-3 @enderror">
                                    <input wire:model="skill" class="form-control" type="text"
                                        placeholder="Coding" id="skill">
                                </div>
                                @error('skill') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-control-label">{{ __('No Hp') }}</label>
                                <div class="@error('phone')border border-danger rounded-3 @enderror">
                                    <input wire:model="phone" class="form-control" type="text"
                                        placeholder="081233312322" id="phone">
                                </div>
                                @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
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
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook" class="form-control-label">{{ __('Facebook') }}</label>
                                <div class="@error('facebook')border border-danger rounded-3 @enderror">
                                    <input wire:model="facebook" class="form-control" type="text"
                                        placeholder="facebook.com/example" id="facebook">
                                </div>
                                @error('facebook') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram" class="form-control-label">{{ __('Instagram') }}</label>
                                <div class="@error('instagram')border border-danger rounded-3 @enderror">
                                    <input wire:model="instagram" class="form-control" type="text"
                                        placeholder="instagram.com/excample" id="instagram">
                                </div>
                                @error('instagram') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image" class="form-label @error('newImage') is-invalid @enderror">{{ __('Photo') }}</label>
                                <img src="" class="img-preview img-fluid mb-3 col-sm-5">
                                <input wire:model="newImage" class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                                @error('newImage')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-fluid">
                                @if ($newImage)
                                    <label for="image" >{{ __('Photo Preview') }}</label>
                                    <img src="{{ $newImage->temporaryUrl() }}" style="width:100px; height:100px">
                                @else
                                    <label for="image" >{{ __('Photo Preview') }}</label>
                                    <img src="{{ asset('storage/'. $oldImage) }}" style="width:100px; height:100px">
                                @endif
                                <input type="hidden" wire:model='oldImage' name="" id="">
                            </div>
                        </div>
                    </div>
                    <hr>
                    Biodata Orangtua
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="father_enc" class="form-control-label">{{ __('Sandi Ayah') }}</label>
                                <div class="@error('father_enc')border border-danger rounded-3 @enderror">
                                    <input wire:model="father_enc" class="form-control" type="text"
                                        placeholder="" id="father_enc">
                                </div>
                                @error('father_enc') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="father_name" class="form-control-label">{{ __('Nama Ayah') }}</label>
                                <div class="@error('father_name')border border-danger rounded-3 @enderror">
                                    <input wire:model="father_name" class="form-control" type="text"
                                        placeholder="" id="father_name">
                                </div>
                                @error('father_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="father_address" class="form-control-label">{{ __('Alamat Ayah') }}</label>
                                <div class="@error('father_address')border border-danger rounded-3 @enderror">
                                    <input wire:model="father_address" class="form-control" type="text"
                                        placeholder="-" id="father_address">
                                </div>
                                @error('father_address') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="father_place_of_born" class="form-control-label">{{ __('Tempat Lahir Ayah') }}</label>
                                <div class="@error('father_place_of_born')border border-danger rounded-3 @enderror">
                                    <input wire:model="father_place_of_born" class="form-control" type="text"
                                        placeholder="" id="father_place_of_born">
                                </div>
                                @error('father_place_of_born') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="father_date_of_born" class="form-control-label">{{ __('Tanggal Lahir Ayah') }}</label>
                                <div class="@error('father_date_of_born')border border-danger rounded-3 @enderror">
                                    <input wire:model="father_date_of_born" class="form-control" type="date"
                                        placeholder="" id="father_date_of_born">
                                </div>
                                @error('father_date_of_born') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="father_place_of_death" class="form-control-label">{{ __('Tempat Meninggal Ayah') }}</label>
                                <div class="@error('father_place_of_death')border border-danger rounded-3 @enderror">
                                    <input wire:model="father_place_of_death" class="form-control" type="text"
                                        placeholder="" id="father_place_of_death">
                                </div>
                                @error('father_place_of_death') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="father_date_of_death" class="form-control-label">{{ __('Tanggal Meninggal Ayah') }}</label>
                                <div class="@error('father_date_of_death')border border-danger rounded-3 @enderror">
                                    <input wire:model="father_date_of_death" class="form-control" type="date"
                                        placeholder="" id="father_date_of_death">
                                </div>
                                @error('father_date_of_death') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mother_name" class="form-control-label">{{ __('Nama Ibu') }}</label>
                                <div class="@error('mother_name')border border-danger rounded-3 @enderror">
                                    <input wire:model="mother_name" class="form-control" type="text"
                                        placeholder="" id="mother_name">
                                </div>
                                @error('mother_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mother_address" class="form-control-label">{{ __('Alamat Ibu') }}</label>
                                <div class="@error('mother_address')border border-danger rounded-3 @enderror">
                                    <input wire:model="mother_address" class="form-control" type="text"
                                        placeholder="-" id="mother_address">
                                </div>
                                @error('mother_address') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mother_place_of_born" class="form-control-label">{{ __('Tempat Lahir Ibu') }}</label>
                                <div class="@error('mother_place_of_born')border border-danger rounded-3 @enderror">
                                    <input wire:model="mother_place_of_born" class="form-control" type="text"
                                        placeholder="" id="mother_place_of_born">
                                </div>
                                @error('mother_place_of_born') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mother_date_of_born" class="form-control-label">{{ __('Tanggal Lahir Ibu') }}</label>
                                <div class="@error('mother_date_of_born')border border-danger rounded-3 @enderror">
                                    <input wire:model="mother_date_of_born" class="form-control" type="date"
                                        placeholder="" id="mother_date_of_born">
                                </div>
                                @error('mother_date_of_born') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Update Data' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
