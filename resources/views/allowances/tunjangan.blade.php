@extends('layouts.app')

@section('title')
Slip Gaji Dibayarkan
@endsection

@section('content')
<div class="container">
  <script>
    function button_cancel() {
      location.replace("{{ asset('/') }}tunjanganlist");
    }
  </script>
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Slip Gaji Bersih</h5>
    <div class="card-body">
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
        <label for="nip" class="col-sm-2 control-label">Nip</label>
        <div class="col-sm-10">
          {{ $row->nip }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nmpeg" class="col-sm-2 control-label">Nmpeg</label>
        <div class="col-sm-10">
          {{ $row->nmpeg }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="npwp" class="col-sm-2 control-label">Npwp</label>
        <div class="col-sm-10">
          {{ $row->npwp }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="rekening" class="col-sm-2 control-label">Rekening</label>
        <div class="col-sm-10">
          {{ $row->rekening }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nmbankspan" class="col-sm-2 control-label">Nmbankspan</label>
        <div class="col-sm-10">
          {{ $row->nmbankspan }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="gjpokok" class="col-sm-2 control-label">Gjpokok</label>
        <div class="col-sm-10">
          {{ $row->gjpokok }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjistri" class="col-sm-2 control-label">Tjistri</label>
        <div class="col-sm-10">
          {{ $row->tjistri }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjanak" class="col-sm-2 control-label">Tjanak</label>
        <div class="col-sm-10">
          {{ $row->tjanak }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjupns" class="col-sm-2 control-label">Tjupns</label>
        <div class="col-sm-10">
          {{ $row->tjupns }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjstruk" class="col-sm-2 control-label">Tjstruk</label>
        <div class="col-sm-10">
          {{ $row->tjstruk }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjfungs" class="col-sm-2 control-label">Tjfungs</label>
        <div class="col-sm-10">
          {{ $row->tjfungs }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjdaerah" class="col-sm-2 control-label">Tjdaerah</label>
        <div class="col-sm-10">
          {{ $row->tjdaerah }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjpencil" class="col-sm-2 control-label">Tjpencil</label>
        <div class="col-sm-10">
          {{ $row->tjpencil }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjlain" class="col-sm-2 control-label">Tjlain</label>
        <div class="col-sm-10">
          {{ $row->tjlain }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjkompen" class="col-sm-2 control-label">Tjkompen</label>
        <div class="col-sm-10">
          {{ $row->tjkompen }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="pembul" class="col-sm-2 control-label">Pembul</label>
        <div class="col-sm-10">
          {{ $row->pembul }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjberas" class="col-sm-2 control-label">Tjberas</label>
        <div class="col-sm-10">
          {{ $row->tjberas }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tjpph" class="col-sm-2 control-label">Tjpph</label>
        <div class="col-sm-10">
          {{ $row->tjpph }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="kotor" class="col-sm-2 control-label">Kotor</label>
        <div class="col-sm-10">
          {{ $row->kotor }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="potpfkbul" class="col-sm-2 control-label">Potpfkbul</label>
        <div class="col-sm-10">
          {{ $row->potpfkbul }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="potpfk2" class="col-sm-2 control-label">Potpfk2</label>
        <div class="col-sm-10">
          {{ $row->potpfk2 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="potpfk10" class="col-sm-2 control-label">Potpfk10</label>
        <div class="col-sm-10">
          {{ $row->potpfk10 }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="potpph" class="col-sm-2 control-label">Potpph</label>
        <div class="col-sm-10">
          {{ $row->potpph }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="potswrum" class="col-sm-2 control-label">Potswrum</label>
        <div class="col-sm-10">
          {{ $row->potswrum }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="potkelbtj" class="col-sm-2 control-label">Potkelbtj</label>
        <div class="col-sm-10">
          {{ $row->potkelbtj }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="potlain" class="col-sm-2 control-label">Potlain</label>
        <div class="col-sm-10">
          {{ $row->potlain }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="pottabrum" class="col-sm-2 control-label">Pottabrum</label>
        <div class="col-sm-10">
          {{ $row->pottabrum }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="totpot" class="col-sm-2 control-label">Totpot</label>
        <div class="col-sm-10">
          {{ $row->totpot }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="bersih" class="col-sm-2 control-label">Bersih</label>
        <div class="col-sm-10">
          {{ $row->bersih }}
        </div>
      </div>
      <!-- <div class="mb-3 row">
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
        </div> -->
      <div class="offset-sm-2 col-sm-10">
        <button type="button" class="btn btn-secondary" onclick="button_cancel()">Back</button>
      </div>
    </div>
  </div>
</div>
@endsection