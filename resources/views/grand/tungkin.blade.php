@extends('layouts.app')

@section('title')
Tunjangan Kinerja
@endsection

@section('content')
<div class="container">
  <script>
    function button_cancel() {
      location.replace("{{ asset('/') }}tungkinlist");
    }
  </script>
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ asset('/tungkinlist') }}">Tunjangan Kinerja</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        {{ $row->months->month }} {{ $row->months->year }}
      </li>
    </ol>
  </nav>
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Tunjangan Kinerja
      {{ $row->months->month }} {{ $row->months->year }}
    </h5>
    <div class="card-body">
      <form class="form-horizontal" action="{{ asset('/') }}tungkinedit" method="post">
        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            {{ $row->nama }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nip" class="col-sm-2 control-label">Nip</label>
          <div class="col-sm-10">
            {{ $row->nip }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="npwp" class="col-sm-2 control-label">Npwp</label>
          <div class="col-sm-10">
            {{ $row->npwp }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="panggol" class="col-sm-2 control-label">Panggol</label>
          <div class="col-sm-10">
            {{ $row->panggol }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
          <div class="col-sm-10">
            {{ $row->jabatan }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="grad" class="col-sm-2 control-label">Grad</label>
          <div class="col-sm-10">
            {{ $row->grad }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="maxmedmin" class="col-sm-2 control-label">Maxmedmin</label>
          <div class="col-sm-10">
            {{ $row->maxmedmin }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tunjangan" class="col-sm-2 control-label">Tunjangan</label>
          <div class="col-sm-10">
            {{ $row->tunjangan }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potabs" class="col-sm-2 control-label">Potabs</label>
          <div class="col-sm-10">
            {{ $row->potabs }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potkim" class="col-sm-2 control-label">Potkim</label>
          <div class="col-sm-10">
            {{ $row->potkim }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="jumlahpot" class="col-sm-2 control-label">Jumlahpot</label>
          <div class="col-sm-10">
            {{ $row->jumlahpot }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="jumtunjsetpot" class="col-sm-2 control-label">Jumtunjsetpot</label>
          <div class="col-sm-10">
            {{ $row->jumtunjsetpot }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tunjpph" class="col-sm-2 control-label">Tunjpph</label>
          <div class="col-sm-10">
            {{ $row->tunjpph }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bruto" class="col-sm-2 control-label">Bruto</label>
          <div class="col-sm-10">
            {{ $row->bruto }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potpph" class="col-sm-2 control-label">Potpph</label>
          <div class="col-sm-10">
            {{ $row->potpph }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="netto" class="col-sm-2 control-label">Netto</label>
          <div class="col-sm-10">
            {{ $row->netto }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="status" class="col-sm-2 control-label">Status</label>
          <div class="col-sm-10">
            {{ $row->status }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="alasan" class="col-sm-2 control-label">Alasan</label>
          <div class="col-sm-10">
            {{ $row->alasan }}
          </div>
        </div>
        <div class="mb-3 row">
          <div class="offset-sm-2 col-sm-10">
            <button type="button" class="btn btn-secondary" onclick="button_cancel()">Kembali</button>
          </div>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
  </div>
</div>
@endsection