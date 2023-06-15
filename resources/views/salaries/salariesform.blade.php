@extends('layouts.app')

@section('title')
Data Salaries 
@endsection

@section('content')
<script>
  function button_cancel() {
    location.replace("{{ asset('/') }}salaries/data/{{ $month_id }}");
  }
</script>
<div class="container">
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Data Slip Gaji</h5>
    <div class="card-body">
      @if($action == 'insert')
      <form class="form-horizontal" action="{{ asset('/') }}salaries" method="post">
        <!-- <div class="mb-3 row">
          <label for="id" class="col-sm-2 col-form-label">Id</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="id" value="">
          </div>
        </div> -->
        <!-- <div class="mb-3 row">
          <label for="month_id" class="col-sm-2 col-form-label">Bulan - Tahun</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="month_id" value="">
          </div>
        </div> -->
        <div class="mb-3 row">
          <label for="nip" class="col-sm-2 col-form-label">NIP</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="nip" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="name" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="gol" class="col-sm-2 col-form-label">Golongan</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="gol" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="rekening" class="col-sm-2 col-form-label">No. Rekening</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="rekening" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bank" class="col-sm-2 col-form-label">Bank</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="bank" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bersih" class="col-sm-2 col-form-label">Bersih</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="bersih" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p1" class="col-sm-2 col-form-label">P1</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p1" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p2" class="col-sm-2 col-form-label">P2</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p2" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p3" class="col-sm-2 col-form-label">P3</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p3" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p4" class="col-sm-2 col-form-label">P4</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p4" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p5" class="col-sm-2 col-form-label">P5</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p5" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p6" class="col-sm-2 col-form-label">P6</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p6" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p7" class="col-sm-2 col-form-label">P7</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p7" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p8" class="col-sm-2 col-form-label">P8</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p8" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p9" class="col-sm-2 col-form-label">P9</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p9" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p10" class="col-sm-2 col-form-label">P10</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p10" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p11" class="col-sm-2 col-form-label">P11</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p11" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p12" class="col-sm-2 col-form-label">P12</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p12" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p13" class="col-sm-2 col-form-label">P13</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p13" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p14" class="col-sm-2 col-form-label">P14</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p14" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p15" class="col-sm-2 col-form-label">P15</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p15" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="point" class="col-sm-2 col-form-label">Point</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="point" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="Bayar" class="col-sm-2 col-form-label">Bayar</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="bayar" value="0">
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

            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-secondary" onclick="button_cancel()">Batal</button>
          </div>
        </div>
        {{ csrf_field() }}
      </form>
      @elseif($action == 'update')
      <form class="form-horizontal" action="{{ asset('/') }}salaries/{{ $row->id }}" method="post">
        <!-- <div class="mb-3 row">
          <label for="id" class="col-sm-2 col-form-label">Id</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="id" value="{{ $row->id }}">
          </div>
        </div> -->
        <div class="mb-3 row">
          <label for="month_id" class="col-sm-2 col-form-label">Bulan - Tahun</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="month_id" value="{{ $row->month_id }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nip" class="col-sm-2 col-form-label">NIP</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="nip" value="{{ $row->nip }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="name" value="{{ $row->name }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="gol" class="col-sm-2 col-form-label">Golongan</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="gol" value="{{ $row->gol }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="rekening" class="col-sm-2 col-form-label">No. Rekening</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="rekening" value="{{ $row->rekening }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bank" class="col-sm-2 col-form-label">Bank</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="bank" value="{{ $row->bank }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bersih" class="col-sm-2 col-form-label">Bersih</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="bersih" value="{{ $row->bersih }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p1" class="col-sm-2 col-form-label">P1</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p1" value="{{ $row->p1 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p2" class="col-sm-2 col-form-label">P2</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p2" value="{{ $row->p2 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p3" class="col-sm-2 col-form-label">P3</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p3" value="{{ $row->p3 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p4" class="col-sm-2 col-form-label">P4</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p4" value="{{ $row->p4 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p5" class="col-sm-2 col-form-label">P5</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p5" value="{{ $row->p5 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p6" class="col-sm-2 col-form-label">P6</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p6" value="{{ $row->p6 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p7" class="col-sm-2 col-form-label">P7</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p7" value="{{ $row->p7 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p8" class="col-sm-2 col-form-label">P8</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p8" value="{{ $row->p8 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p9" class="col-sm-2 col-form-label">P9</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p9" value="{{ $row->p9 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p10" class="col-sm-2 col-form-label">P10</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p10" value="{{ $row->p10 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p11" class="col-sm-2 col-form-label">P11</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p11" value="{{ $row->p11 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p12" class="col-sm-2 col-form-label">P12</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p12" value="{{ $row->p12 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p13" class="col-sm-2 col-form-label">P13</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p13" value="{{ $row->p13 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p14" class="col-sm-2 col-form-label">P14</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p14" value="{{ $row->p14 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p15" class="col-sm-2 col-form-label">P15</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="p15" value="{{ $row->p15 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="point" class="col-sm-2 col-form-label">Potongan Internal</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="point" value="{{ $row->point }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bayar" class="col-sm-2 col-form-label">Bayar</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="bayar" value="{{ $row->bayar }}">
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
            <button type="submit" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-secondary" onclick="button_cancel()">Batal</button>
          </div>
        </div>
        {{ csrf_field() }}
      </form>
      @elseif($action == 'delete')
      <form class="form-horizontal" action="{{ asset('/') }}salaries/{{ $row->id }}" method="post">
        <!-- <div class="mb-3 row">
          <label for="id" class="col-sm-2 control-label">Id</label>
          <div class="col-sm-10">
            {{ $row->id }}
          </div>
        </div> -->
        <div class="mb-3 row">
          <label for="month_id" class="col-sm-2 control-label">Bulan - Tahun</label>
          <div class="col-sm-10">
            {{ $row->months->month }} - {{ $row->months->year }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nip" class="col-sm-2 control-label">NIP</label>
          <div class="col-sm-10">
            {{ $row->nip }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            {{ $row->name }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="gol" class="col-sm-2 control-label">Golongan</label>
          <div class="col-sm-10">
            {{ $row->gol }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="rekening" class="col-sm-2 control-label">No. Rekening</label>
          <div class="col-sm-10">
            {{ $row->rekening }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bank" class="col-sm-2 control-label">Bank</label>
          <div class="col-sm-10">
            {{ $row->bank }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bersih" class="col-sm-2 control-label">Bersih</label>
          <div class="col-sm-10">
            {{ $row->bersih }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p1" class="col-sm-2 control-label">P1</label>
          <div class="col-sm-10">
            {{ $row->p1 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p2" class="col-sm-2 control-label">P2</label>
          <div class="col-sm-10">
            {{ $row->p2 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p3" class="col-sm-2 control-label">P3</label>
          <div class="col-sm-10">
            {{ $row->p3 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p4" class="col-sm-2 control-label">P4</label>
          <div class="col-sm-10">
            {{ $row->p4 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p5" class="col-sm-2 control-label">P5</label>
          <div class="col-sm-10">
            {{ $row->p5 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p6" class="col-sm-2 control-label">P6</label>
          <div class="col-sm-10">
            {{ $row->p6 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p7" class="col-sm-2 control-label">P7</label>
          <div class="col-sm-10">
            {{ $row->p7 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p8" class="col-sm-2 control-label">P8</label>
          <div class="col-sm-10">
            {{ $row->p8 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p9" class="col-sm-2 control-label">P9</label>
          <div class="col-sm-10">
            {{ $row->p9 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p10" class="col-sm-2 control-label">P10</label>
          <div class="col-sm-10">
            {{ $row->p10 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p11" class="col-sm-2 control-label">P11</label>
          <div class="col-sm-10">
            {{ $row->p11 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p12" class="col-sm-2 control-label">P12</label>
          <div class="col-sm-10">
            {{ $row->p12 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p13" class="col-sm-2 control-label">P13</label>
          <div class="col-sm-10">
            {{ $row->p13 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p14" class="col-sm-2 control-label">P14</label>
          <div class="col-sm-10">
            {{ $row->p14 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="p15" class="col-sm-2 control-label">P15</label>
          <div class="col-sm-10">
            {{ $row->p15 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="point" class="col-sm-2 control-label">Potongan Internal</label>
          <div class="col-sm-10">
            {{ $row->point }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bayar" class="col-sm-2 control-label">Bayar</label>
          <div class="col-sm-10">
            {{ $row->bayar }}
          </div>
        </div>
        <!-- <div class="mb-3 row">
          <label for="created_at" class="col-sm-2 control-label">Created_at</label>
          <div class="col-sm-10">
            {{ $row->created_at }}
          </div>
        </div> -->
        <!-- <div class="mb-3 row">
          <label for="updated_at" class="col-sm-2 control-label">Updated_at</label>
          <div class="col-sm-10">
            {{ $row->updated_at }}
          </div>
        </div> -->
        <div class="mb-3 row">
          <div class="offset-sm-2 col-sm-10">
            @method("DELETE")
            <input type="hidden" name="action" value="{{ $action }}">
            <input type="hidden" name="id" value="{{ $row->id }}">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-secondary" onclick="button_cancel()">Batal</button>
          </div>
        </div>
        {{ csrf_field() }}
      </form>
      @elseif($action == 'detail')
      <!-- <div class="mb-3 row">
        <label for="id" class="col-sm-2 control-label">Id</label>
        <div class="col-sm-10">
          {{ $row->id }}
        </div>
      </div> -->
      <div class="mb-3 row">
        <label for="month_id" class="col-sm-2 control-label">Bulan - Tahun</label>
        <div class="col-sm-10">
          {{ $row->months->month }} - {{ $row->months->year }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nip" class="col-sm-2 control-label">NIP</label>
        <div class="col-sm-10">
          {{ $row->nip }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          {{ $row->name }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="gol" class="col-sm-2 control-label">Golongan</label>
        <div class="col-sm-10">
          {{ $row->gol }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="rekening" class="col-sm-2 control-label">No. Rekening</label>
        <div class="col-sm-10">
          {{ $row->rekening }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="bank" class="col-sm-2 control-label">Bank</label>
        <div class="col-sm-10">
          {{ $row->bank }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="bersih" class="col-sm-2 control-label">Bersih</label>
        <div class="col-sm-10">
          {{ $row->bersih }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p1" class="col-sm-2 control-label">P1</label>
        <div class="col-sm-10">
          {{ $row->p1 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p2" class="col-sm-2 control-label">P2</label>
        <div class="col-sm-10">
          {{ $row->p2 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p3" class="col-sm-2 control-label">P3</label>
        <div class="col-sm-10">
          {{ $row->p3 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p4" class="col-sm-2 control-label">P4</label>
        <div class="col-sm-10">
          {{ $row->p4 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p5" class="col-sm-2 control-label">P5</label>
        <div class="col-sm-10">
          {{ $row->p5 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p6" class="col-sm-2 control-label">P6</label>
        <div class="col-sm-10">
          {{ $row->p6 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p7" class="col-sm-2 control-label">P7</label>
        <div class="col-sm-10">
          {{ $row->p7 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p8" class="col-sm-2 control-label">P8</label>
        <div class="col-sm-10">
          {{ $row->p8 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p9" class="col-sm-2 control-label">P9</label>
        <div class="col-sm-10">
          {{ $row->p9 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p10" class="col-sm-2 control-label">P10</label>
        <div class="col-sm-10">
          {{ $row->p10 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p11" class="col-sm-2 control-label">P11</label>
        <div class="col-sm-10">
          {{ $row->p11 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p12" class="col-sm-2 control-label">P12</label>
        <div class="col-sm-10">
          {{ $row->p12 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p13" class="col-sm-2 control-label">P13</label>
        <div class="col-sm-10">
          {{ $row->p13 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p14" class="col-sm-2 control-label">P14</label>
        <div class="col-sm-10">
          {{ $row->p14 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p15" class="col-sm-2 control-label">P15</label>
        <div class="col-sm-10">
          {{ $row->p15 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="point" class="col-sm-2 control-label">Potongan Internal</label>
        <div class="col-sm-10">
          {{ $row->point }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="bayar" class="col-sm-2 control-label">Bayar</label>
        <div class="col-sm-10">
          {{ $row->bayar }}
        </div>
      </div>
      <!-- <div class="mb-3 row">
        <label for="created_at" class="col-sm-2 control-label">Created_at</label>
        <div class="col-sm-10">
          {{ $row->created_at }}
        </div>
      </div> -->
      <!-- <div class="mb-3 row">
        <label for="updated_at" class="col-sm-2 control-label">Updated_at</label>
        <div class="col-sm-10">
          {{ $row->updated_at }}
        </div>
      </div> -->
      <div class="mb-3 row">
        <div class="offset-sm-2 col-sm-10">
          <button type="button" class="btn btn-secondary" onclick="button_cancel()">Kembali</button>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
@endsection