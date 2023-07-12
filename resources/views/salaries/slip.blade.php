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
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ asset('/sliplist') }}">Slip Gaji Dibayarkan</a></li>
      <li class="breadcrumb-item active" aria-current="page">
      <li class="breadcrumb-item active" aria-current="page">
        {{ $row->months->month }} {{ $row->months->year }}
      </li>
      </li>
    </ol>
  </nav>
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Slip Gaji Dibayarkan {{ $row->months->month }} {{ $row->months->year }}</h5>
    <div class="card-body">
      <div class="mb-3 row">
        <label for="month_id" class="col-sm-3 control-label">Bulan </label>
        <div class="col-sm-9">
          {{ $row->months->month }} {{ $row->months->year }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nip" class="col-sm-3 control-label">NIP</label>
        <div class="col-sm-9">
          {{ $row->nip }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="name" class="col-sm-3 control-label">Nama</label>
        <div class="col-sm-9">
          {{ $row->name }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="gol" class="col-sm-3 control-label">Golongan</label>
        <div class="col-sm-9">
          {{ $row->gol }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="rekening" class="col-sm-3 control-label">No. Rekening</label>
        <div class="col-sm-9">
          {{ $row->rekening }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="bank" class="col-sm-3 control-label">Bank</label>
        <div class="col-sm-9">
          {{ $row->bank }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="bersih" class="col-sm-3 control-label">Bersih</label>
        <div class="col-sm-9">
          {{ toCurrency($row->bersih) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p1" class="col-sm-3 control-label">Koperasi</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p1) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p2" class="col-sm-3 control-label">IKAHI</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p2) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p3" class="col-sm-3 control-label">PTWP</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p3) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p4" class="col-sm-3 control-label">YDSH</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p4) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p5" class="col-sm-3 control-label">Sumbangan Honorer</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p5) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p6" class="col-sm-3 control-label">IPASPI</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p6) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p7" class="col-sm-3 control-label">DYK</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p7) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p8" class="col-sm-3 control-label">Senam</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p8) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p9" class="col-sm-3 control-label">BRI</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p9) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p10" class="col-sm-3 control-label">BDBS</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p10) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p11" class="col-sm-3 control-label">Bank Kalbar Syariah</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p11) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p12" class="col-sm-3 control-label">Dana Sosial Hakim</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p12) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p13" class="col-sm-3 control-label">DYK Cabang</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p13) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p14" class="col-sm-3 control-label">Arisan DYK Tahunan</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p14) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="p15" class="col-sm-3 control-label">Mushola</label>
        <div class="col-sm-9">
          {{ toCurrency($row->p15) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="point" class="col-sm-3 control-label">Potongan Internal</label>
        <div class="col-sm-9">
          {{ toCurrency($row->point) }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="bayar" class="col-sm-3 control-label">Bayar</label>
        <div class="col-sm-9">
          {{ toCurrency($row->bayar) }}
        </div>
      </div>
      <div class="offset-sm-2 col-sm-9">
        <button type="button" class="btn btn-secondary" onclick="button_cancel()">Kembalie</button>
      </div>
    </div>
  </div>
</div>
@endsection