@extends('layouts.app')

@section('title', 'Arsip')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Arsip</h1>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
            <span>&times;</span>
          </button>
          Edit Data Surat Berhasil.
        </div>
    </div>
    @endif
    <div class="section-body">
      <div class="card">
        <div class="card-body ">
          <div class="table-responsive">
            <table id="tbl" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">J. Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No.Handphone</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pemohon as $row)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>
                                <?php
                                $date = new DateTime($row->tanggal);
                                echo $date->format('d-m-Y')
                                ?>
                            </td>
                            <td>{{ $row -> nomorsurat }}</td>
                            <td>{{ $row -> nama }}</td>
                            <td>{{ $row -> tempatlahir }}</td>
                            <td>{{ $row -> tanggallahir }}</td>
                            <td>{{ $row -> jeniskelamin }}</td>
                            <td>{{ $row -> agama }}</td>
                            <td>{{ $row -> pekerjaan }}</td>
                            <td>{{ $row -> alamat }}</td>
                            <td>{{ $row -> nohp }}</td>
                            <td>{{ $row -> jenis_surat }}</td>
                            <td>{{ $row -> status }}</td>
                            <td>
                                <form>
                                    @csrf
                                    <a href="#" class="btn btn-sm btn-warning editbtn"  data-form="{{ $row }}">
                                        <i class="fas fa-edit mr-1"></i>
                                    </a>
                                    <a href="{{route('cetak', ['surat'=>$row -> id])}}" class=" btn-info btn btn-sm">
                                        <i class="fas fa-print"></i>
                                    </a>
                                </form>
                            </td>
                    @endforeach
                </tbody>
            </table>
            {{-- <div>
                {{ $pemohon->links() }}
            </div> --}}
          </div>
        </div>
      </div>
    </div>

</section>

<div class="modal " id="modal-md">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Status Pengajuan Surat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-update" action="{{ route('table.update', $row->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" id="nomorsurat" name="nomorsurat">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggallahir" name="tanggallahir" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" readonly>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" readonly>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" readonly>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" readonly>
                    </div>
                    <div class="form-group">
                        <label>No.Handphone</label>
                        <input type="text" class="form-control" id="nohp" name="nohp" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jenis Surat</label>
                        <input type="text" class="form-control" id="jenis_surat" name="jenis_surat" readonly>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select type="select" class="form-control" id="status" name="status">
                            <option value="diproses">Di proses</option>
                            <option value="selesai">Selesai</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>
@endsection

@push('javascript')
    <script type="text/javascript">
    $(function () {

        $('#tbl').DataTable({
            "columnDefs": [
                { "sortable": false, "targets": [2,3] }
            ]
        });

        $('.editbtn').click(function () {
        $('#modal-md').modal('show');
        const form = $(this).data('form');

        $('#id').val(form.id);
        $('#nomorsurat').val(form.nomorsurat);
        $('#nama').val(form.nama);
        $('#tempatlahir').val(form.tempatlahir);
        $('#tanggallahir').val(form.tanggallahir);
        $('#jeniskelamin').val(form.jeniskelamin);
        $('#agama').val(form.agama);
        $('#pekerjaan').val(form.pekerjaan);
        $('#alamat').val(form.alamat);
        $('#nohp').val(form.nohp);
        $('#jenis_surat').val(form.jenis_surat);
        $('#status').val(form.status);
        $('#form-update').attr('action', '/table/' + form.id)
    })
    });
    </script>
@endpush
