@extends('layouts.app')

@section('title')
Slip Gaji Dibayarkan
@endsection

@section('content')
<div class="container">
  <script>
    function button_cancel() {
      location.replace("{{ asset('/') }}sliplist");
    }
  </script>
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Slip Gaji Dibayarkan</h5>
    <div class="card-body">
      <div class="mb-3 row">
        <label for="month_id" class="col-sm-2 control-label">Bulan </label>
        <div class="col-sm-10">
          {{ $row->months->month }} {{ $row->months->year }}
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
        <label for="point" class="col-sm-2 control-label">Point</label>
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
      <div class="offset-sm-2 col-sm-10">
        <button type="button" class="btn btn-secondary" onclick="button_cancel()">Back</button>
      </div>
    </div>
  </div>
</div>
@endsection