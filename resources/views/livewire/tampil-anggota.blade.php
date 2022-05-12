<a href="/member-data" class="btn bg-gradient-primary btn-sm mb-0 mt-2 fa fa-arrow-left" type="button"> kembali</a>
<div class="row">
    <div class="col-md-8 mt-4 mb-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <p class="mb-0">Data Diri Anggota</p>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-1 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <div class="table-responsive p-0 mx-3">
                                <table class="table align-items-center mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Nama</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->name }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">No Anggota</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->member_no }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Jenis Kelamin</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->gender }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Tempat / Tanggal Lahir</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->place_of_born }} / {{ $member->date_of_born }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Kabupaten / Kota</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->district->city->name }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Kecamatan</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->district->name }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Alamat Lengkap</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->address }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Anak Ke</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->number_child }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Jumlah Saudara</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->number_of_sibling }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Status Kawin</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->status }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Pendidikan Terakhir</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->last_education }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Pekerjaan</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->jobs }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Kemampuan</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->skill }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">HP / WA</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->phone }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Email</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->email }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Facebook</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->facebook }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Instagram</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->instagram }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Sandi Ayah</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->father_enc }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Nama Ayah</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->father_name }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Alamat Ayah</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->father_address }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Tempat Lahir / Tanggal Lahir Ayah</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->father_place_of_born }} / {{ $member->father_date_of_born }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Tempat / Tanggal Meninggal Ayah</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->father_place_of_death }} / {{ $member->father_date_of_death }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Nama Ibu</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->mother_name }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Alamat Ibu</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->mother_address }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0 text-sm">Tempat Lahir / Tanggal Lahir Ibu</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">: {{ $member->mother_place_of_born }} / {{ $member->mother_date_of_born }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-2 mb-4 mt-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <p class="mb-0">Photo</p>
            </div>
            <div class="card-body pt-4 p-3">
                @if($member->image)
                    <img src="{{ asset('storage/'. $member->image) }}" alt="..." class="w-100 border-radius-lg shadow-sm">
                @else
                    <img src="../assets/img/no-image.png" alt="..." class="w-100 border-radius-lg shadow-sm">
                @endif
            </div>
        </div>
    </div>
</div>




