<div class="menu">
    <a wire:click="downloadPdf" class="btn bg-gradient-primary btn-sm mb-4" type="button">Cetak Kartu Semua Anggota</a>
        <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="city" class="form-control-label">{{ __('Kabupaten') }}</label>
                        <select wire:model="city" id="city" name="city" class="form-select @error('city') is-invalid @enderror" aria-label="Default select example" required>
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
                    <label for="district" class="form-control-label">{{ __('Kecamatan') }}</label>
                    <select wire:model="district" name="district" class="form-select @error('district') is-invalid @enderror" aria-label="Default select example" required>
                        @if ($districts->count() == 0)
                            <option value="">-- Pilih Kebupaten Dulu --</option>
                        @endif
                        @foreach ($districts as $district)
                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                        @endforeach
                    </select>
                    @error('district') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                @if($district != null)
                    <a wire:click="downloadPdfKec" class="btn bg-gradient-primary btn-sm mb-4" type="button">Cetak Kartu Kecamatan</a>
                @endif
            </div>
        </div>
</div>
