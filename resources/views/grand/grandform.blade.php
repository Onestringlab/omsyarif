@extends('layouts.app')

@section('title')
Data Grand 
@endsection

@section('content')
<div class="container">
  <script>
    function button_cancel() {
      location.replace("{{ asset('/') }}grand/data/{{ $month_id }}");
    }
  </script>
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ asset('/months') }}">Data</a></li>
      <li class="breadcrumb-item"><a href="{{asset('/')}}grand/data/{{ $month_id }}">Tunjangan Kinerja</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($action) }}</li>
    </ol>
    <div class="card">
      <h5 class="card-header text-bg-success"> Data Tunjangan Kinerja</h5>
      <div class="card-body">
        @if($action == 'insert')
        <form class="form-horizontal" action="{{ asset('/') }}grand" method="post">
          <!-- <div class="mb-3 row">
          <label for="id" class="col-sm-2 col-form-label">Id</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="id" value="">
          </div>
        </div> -->
          <!-- <div class="mb-3 row">
          <label for="month_id" class="col-sm-2 col-form-label">Month_id</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="month_id" value="">
          </div>
        </div> -->
          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="nama" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nip" class="col-sm-2 col-form-label">Nip</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="nip" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="npwp" class="col-sm-2 col-form-label">Npwp</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="npwp" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="panggol" class="col-sm-2 col-form-label">Panggol</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="panggol" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="jabatan" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="grad" class="col-sm-2 col-form-label">Grad</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="grad" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="maxmedmin" class="col-sm-2 col-form-label">Maxmedmin</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="maxmedmin" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tunjangan" class="col-sm-2 col-form-label">Tunjangan</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="tunjangan" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="potabs" class="col-sm-2 col-form-label">Potabs</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="potabs" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="potkim" class="col-sm-2 col-form-label">Potkim</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="potkim" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jumlahpot" class="col-sm-2 col-form-label">Jumlahpot</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="jumlahpot" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jumtunjsetpot" class="col-sm-2 col-form-label">Jumtunjsetpot</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="jumtunjsetpot" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tunjpph" class="col-sm-2 col-form-label">Tunjpph</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="tunjpph" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="bruto" class="col-sm-2 col-form-label">Bruto</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="bruto" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="potpph" class="col-sm-2 col-form-label">Potpph</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="potpph" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="netto" class="col-sm-2 col-form-label">Netto</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="netto" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <select class="form-control" type="text" name="status">
                <option value="Setuju">Setuju</option>
                <option value="Tidak Setuju">Tidak Setuju</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alasan" class="col-sm-2 col-form-label">Alasan</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="alasan" value="">
            </div>
          </div>
          <!-- <div class="mb-3 row">
          <label for="created_at" class="col-sm-2 col-form-label">Created_at</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="created_at" value="">
          </div>
        </div> -->
          <!-- <div class="mb-3 row">
          <label for="updated_at" class="col-sm-2 col-form-label">Updated_at</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="updated_at" value="">
          </div>
        </div> -->
          <div class="mb-3">
            <div class="offset-sm-2 col-sm-10">
              <input type="hidden" name="action" value="{{ $action }}">
              <input type="hidden" name="month_id" value="{{ $month_id }}">
              <button type="submit" class="btn btn-primary">Insert</button>
              <button type="button" class="btn btn-secondary" onclick="button_cancel()">Cancel</button>
            </div>
          </div>
          {{ csrf_field() }}
        </form>
        @elseif($action == 'update')
        <form class="form-horizontal" action="{{ asset('/') }}grand/{{ $row->id }}" method="post">
          <!-- <div class="mb-3 row">
          <label for="id" class="col-sm-2 col-form-label">Id</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="id" value="{{ $row->id }}">
          </div>
        </div> -->
          <!-- <div class="mb-3 row">
          <label for="month_id" class="col-sm-2 col-form-label">Month_id</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="month_id" value="{{ $row->month_id }}">
          </div>
        </div> -->
          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="nama" value="{{ $row->nama }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nip" class="col-sm-2 col-form-label">Nip</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="nip" value="{{ $row->nip }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="npwp" class="col-sm-2 col-form-label">Npwp</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="npwp" value="{{ $row->npwp }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="panggol" class="col-sm-2 col-form-label">Panggol</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="panggol" value="{{ $row->panggol }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="jabatan" value="{{ $row->jabatan }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="grad" class="col-sm-2 col-form-label">Grad</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="grad" value="{{ $row->grad }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="maxmedmin" class="col-sm-2 col-form-label">Maxmedmin</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="maxmedmin" value="{{ $row->maxmedmin }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tunjangan" class="col-sm-2 col-form-label">Tunjangan</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="tunjangan" value="{{ $row->tunjangan }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="potabs" class="col-sm-2 col-form-label">Potabs</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="potabs" value="{{ $row->potabs }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="potkim" class="col-sm-2 col-form-label">Potkim</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="potkim" value="{{ $row->potkim }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jumlahpot" class="col-sm-2 col-form-label">Jumlahpot</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="jumlahpot" value="{{ $row->jumlahpot }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jumtunjsetpot" class="col-sm-2 col-form-label">Jumtunjsetpot</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="jumtunjsetpot" value="{{ $row->jumtunjsetpot }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tunjpph" class="col-sm-2 col-form-label">Tunjpph</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="tunjpph" value="{{ $row->tunjpph }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="bruto" class="col-sm-2 col-form-label">Bruto</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="bruto" value="{{ $row->bruto }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="potpph" class="col-sm-2 col-form-label">Potpph</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="potpph" value="{{ $row->potpph }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="netto" class="col-sm-2 col-form-label">Netto</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="netto" value="{{ $row->netto }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <select class="form-control" type="text" name="status">
                <option value="Setuju" {{ $row->status === "Setuju" ? "selected" : ""}}>Setuju</option>
                <option value="Tidak Setuju" {{ $row->status === "Tidak Setuju" ? "selected" : ""}}>Tidak Setuju</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alasan" class="col-sm-2 col-form-label">Alasan</label>
            <div class="col-sm-10">
              <input class="form-control" type="text" name="alasan" value="{{ $row->alasan }}">
            </div>
          </div>
          <!-- <div class="mb-3 row">
          <label for="created_at" class="col-sm-2 col-form-label">Created_at</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="created_at" value="{{ $row->created_at }}">
          </div>
        </div> -->
          <!-- <div class="mb-3 row">
          <label for="updated_at" class="col-sm-2 col-form-label">Updated_at</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="updated_at" value="{{ $row->updated_at }}">
          </div>
        </div> -->
          <div class="mb-3 row">
            <div class="offset-sm-2 col-sm-10">
              @method("PATCH")
              <input type="hidden" name="action" value="{{ $action }}">
              <input type="hidden" name="id" value="{{ $row->id }}">
              <input type="hidden" name="month_id" value="{{ $month_id }}">
              <button type="submit" class="btn btn-warning">Update</button>
              <button type="button" class="btn btn-secondary" onclick="button_cancel()">Cancel</button>
            </div>
          </div>
          {{ csrf_field() }}
        </form>
        @elseif($action == 'delete')
        <form class="form-horizontal" action="{{ asset('/') }}grand/{{ $row->id }}" method="post">
          <!-- <div class="mb-3 row">
          <label for="id" class="col-sm-2 control-label">Id</label>
          <div class="col-sm-10">
            {{ $row->id }}
          </div>
        </div> -->
          <!-- <div class="mb-3 row">
          <label for="month_id" class="col-sm-2 control-label">Month_id</label>
          <div class="col-sm-10">
            {{ $row->month_id }}
          </div>
        </div> -->
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
            <label for="created_at" class="col-sm-2 control-label">Created_at</label>
            <div class="col-sm-10">
              {{ $row->created_at }}
            </div>
          </div>
          <div class="mb-3 row">
            <label for="updated_at" class="col-sm-2 control-label">Updated_at</label>
            <div class="col-sm-10">
              {{ $row->updated_at }}
            </div>
          </div>
          <div class="mb-3 row">
            <div class="offset-sm-2 col-sm-10">
              @method("DELETE")
              <input type="hidden" name="action" value="{{ $action }}">
              <input type="hidden" name="id" value="{{ $row->id }}">
              <input type="hidden" name="month_id" value="{{ $month_id }}">
              <button type="submit" class="btn btn-danger">Delete</button>
              <button type="button" class="btn btn-secondary" onclick="button_cancel()">Cancel</button>
            </div>
          </div>
          {{ csrf_field() }}
        </form>
        @elseif($action == 'detail')
        <div class="mb-3 row">
          <label for="id" class="col-sm-2 control-label">Id</label>
          <div class="col-sm-10">
            {{ $row->id }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="month_id" class="col-sm-2 control-label">Month_id</label>
          <div class="col-sm-10">
            {{ $row->month_id }}
          </div>
        </div>
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
          <label for="created_at" class="col-sm-2 control-label">Created_at</label>
          <div class="col-sm-10">
            {{ $row->created_at }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="updated_at" class="col-sm-2 control-label">Updated_at</label>
          <div class="col-sm-10">
            {{ $row->updated_at }}
          </div>
        </div>
        <div class="mb-3 row">
          <div class="offset-sm-2 col-sm-10">
            <button type="button" class="btn btn-secondary" onclick="button_cancel()">Back</button>
          </div>
        </div>
        @endif
      </div>
    </div>
</div>
@endsection