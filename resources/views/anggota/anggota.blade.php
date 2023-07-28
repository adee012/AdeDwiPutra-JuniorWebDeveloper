@extends('index')
@section('content')
    <h1 class="my-3 text-center fs-2 text-primary">DATA ANGGOTA</h1>
    <div class="col-sm-12 col-xl-11 mt-4 ms-5">
        <div class="bg-light rounded h-100 p-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Anggota
            </button>
            <div class="table-responsive">
                <table class="table table-hover text-center " id="datatablesSimple">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Anggota</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($anggota as $a)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $a->idanggota }}</td>
                                <td>{{ $a->nama }}</td>
                                <td><img src="{{ asset('assets/img/default.jpg') }}" class="rounded-3"
                                        style="width:70px; height:70px" alt=""></td>
                                <td>{{ $a->jeniskelamin }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>{{ $a->status }}</td>
                                <td>
                                    <a href="" class="border border-primary px-2 py-1 rounded-1">Edit</a>
                                    <a href="" class="border border-danger text-danger px-2 py-1 rounded-1">Hapus</a>
                                    <a href=""
                                        class="border border-success text-success px-2 py-1 rounded-1">Cetak</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row">Data Kosong</th>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal tambah anggota start --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-primary text-center" id="exampleModalLabel">Tambah Anggota</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="id" class="form-label">Id Anggota</label>
                            <input type="text" value="{{ old('id') }}"
                                class="form-control @error('id') is-invalid @enderror " placeholder="Masukkan Id Anggota"
                                name="id" id="id" />
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Jenis Kelamin</label>
                            <input type="text" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror "
                                placeholder="Masukkan Nama Anggota" name="name" id="name" />
                        </div>

                        <div class="mb-3">
                            <label for="">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="lakilaki">
                                <label class="form-check-label" for="lakilaki">
                                    Laki - laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" checked>
                                <label class="form-check-label" for="perempuan">
                                    perempuan
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" value="{{ old('alamat') }}"
                                class="form-control @error('name') is-invalid @enderror " placeholder="Masukkan Alamat"
                                name="alamat" id="alamat" />
                        </div>

                        <div class="form-group mb-3">
                            <div class="preview">
                                <img src="" id="image" alt="" class="rounded"
                                    style="display: none; height:100px; width:100px">
                            </div>

                            <label for="avatar">Foto</label>
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                onchange="showPreview(event);" name="avatar" id="avatar" accept="images/*" />
                        </div>

                        <button type="submit" name="addUsers" class="btn btn-primary" style="float: right">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal tambah anggota end --}}
@endsection
