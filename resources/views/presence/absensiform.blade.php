@extends('layouts.app')

@section('title')
Presensi Pegawai
@endsection

@section('content')
<div class="container">
  <script>
    function button_cancel() {
      location.replace("{{ asset('/') }}absensilist");
    }
  </script>
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ asset('/tunjanganlist') }}">Presensi</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        {{ $row->months->month }} {{ $row->months->year }}
      </li>
    </ol>
  </nav>
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Presensifff
      {{ $row->months->month }} {{ $row->months->year }}
    </h5>
    <div class="card-body">
      <form class="form-horizontal" action="{{ asset('/') }}absensiedit" method="post">
        <div class="mb-3 row">
          <label for="nip" class="col-sm-2 control-label">NIP</label>
          <div class="col-sm-10">
            {{ $row->nip }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            {{ $row->nama }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
          <div class="col-sm-10">
            {{ $row->jabatan }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="vd" class="col-sm-2 control-label">Vd</label>
          <div class="col-sm-10">
            {{ $row->vd }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tkd" class="col-sm-2 control-label">Tkd</label>
          <div class="col-sm-10">
            {{ $row->tkd }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tl1" class="col-sm-2 control-label">Tl1</label>
          <div class="col-sm-10">
            {{ $row->tl1 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tl2" class="col-sm-2 control-label">Tl2</label>
          <div class="col-sm-10">
            {{ $row->tl2 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tl3" class="col-sm-2 control-label">Tl3</label>
          <div class="col-sm-10">
            {{ $row->tl3 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tl4" class="col-sm-2 control-label">Tl4</label>
          <div class="col-sm-10">
            {{ $row->tl4 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="thm" class="col-sm-2 control-label">Thm</label>
          <div class="col-sm-10">
            {{ $row->thm }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="vp" class="col-sm-2 control-label">Vp</label>
          <div class="col-sm-10">
            {{ $row->vp }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ik" class="col-sm-2 control-label">Ik</label>
          <div class="col-sm-10">
            {{ $row->ik }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="psw1" class="col-sm-2 control-label">Psw1</label>
          <div class="col-sm-10">
            {{ $row->psw1 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="psw2" class="col-sm-2 control-label">Psw2</label>
          <div class="col-sm-10">
            {{ $row->psw2 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="psw3" class="col-sm-2 control-label">Psw3</label>
          <div class="col-sm-10">
            {{ $row->psw3 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="psw4" class="col-sm-2 control-label">Psw4</label>
          <div class="col-sm-10">
            {{ $row->psw4 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="thp" class="col-sm-2 control-label">Thp</label>
          <div class="col-sm-10">
            {{ $row->thp }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="i" class="col-sm-2 control-label">I</label>
          <div class="col-sm-10">
            {{ $row->i }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="dls" class="col-sm-2 control-label">Dls</label>
          <div class="col-sm-10">
            {{ $row->dls }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ct" class="col-sm-2 control-label">Ct</label>
          <div class="col-sm-10">
            {{ $row->ct }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="clt" class="col-sm-2 control-label">Clt</label>
          <div class="col-sm-10">
            {{ $row->clt }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cpp" class="col-sm-2 control-label">Cpp</label>
          <div class="col-sm-10">
            {{ $row->cpp }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ctl" class="col-sm-2 control-label">Ctl</label>
          <div class="col-sm-10">
            {{ $row->ctl }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tb" class="col-sm-2 control-label">Tb</label>
          <div class="col-sm-10">
            {{ $row->tb }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ld" class="col-sm-2 control-label">Ld</label>
          <div class="col-sm-10">
            {{ $row->ld }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ib" class="col-sm-2 control-label">Ib</label>
          <div class="col-sm-10">
            {{ $row->ib }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tmk" class="col-sm-2 control-label">Tmk</label>
          <div class="col-sm-10">
            {{ $row->tmk }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cs1" class="col-sm-2 control-label">Cs1</label>
          <div class="col-sm-10">
            {{ $row->cs1 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cs14" class="col-sm-2 control-label">Cs14</label>
          <div class="col-sm-10">
            {{ $row->cs14 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cm1" class="col-sm-2 control-label">Cm1</label>
          <div class="col-sm-10">
            {{ $row->cm1 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cm2" class="col-sm-2 control-label">Cm2</label>
          <div class="col-sm-10">
            {{ $row->cm2 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cm3" class="col-sm-2 control-label">Cm3</label>
          <div class="col-sm-10">
            {{ $row->cm3 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cm41" class="col-sm-2 control-label">Cm41</label>
          <div class="col-sm-10">
            {{ $row->cm41 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cm42" class="col-sm-2 control-label">Cm42</label>
          <div class="col-sm-10">
            {{ $row->cm42 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cm43" class="col-sm-2 control-label">Cm43</label>
          <div class="col-sm-10">
            {{ $row->cm43 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cap1" class="col-sm-2 control-label">Cap1</label>
          <div class="col-sm-10">
            {{ $row->cap1 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cap10" class="col-sm-2 control-label">Cap10</label>
          <div class="col-sm-10">
            {{ $row->cap10 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cb1" class="col-sm-2 control-label">Cb1</label>
          <div class="col-sm-10">
            {{ $row->cb1 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cb2" class="col-sm-2 control-label">Cb2</label>
          <div class="col-sm-10">
            {{ $row->cb2 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="cb3" class="col-sm-2 control-label">Cb3</label>
          <div class="col-sm-10">
            {{ $row->cb3 }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tk" class="col-sm-2 control-label">Tk</label>
          <div class="col-sm-10">
            {{ $row->tk }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ptk" class="col-sm-2 control-label">Ptk</label>
          <div class="col-sm-10">
            {{ $row->ptk }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="kum" class="col-sm-2 control-label">Kum</label>
          <div class="col-sm-10">
            {{ $row->kum }}
          </div>
        </div>
        <div class="mb-3 row">
          <label for="kut" class="col-sm-2 control-label">Kut</label>
          <div class="col-sm-10">
            {{ $row->kut }}
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
        <div class="mb-3 row">
          <div class="offset-sm-2 col-sm-10">
            <input type="hidden" name="id" value="{{ $row->id }}">
            <input type="hidden" name="month_id" value="{{ $row->month_id }}">
            <button type="submit" class="btn btn-warning">Update</button>
            <button type="button" class="btn btn-secondary" onclick="button_cancel()">Cancel</button>
          </div>
        </div>
        {{ csrf_field() }}
      </form>
    </div>
  </div>
</div>
@endsection