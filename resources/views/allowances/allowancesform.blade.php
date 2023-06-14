@extends('layouts.app')

@section('title')
Data Allowances 
@endsection

@section('content')
<div class="container">
  <script>
    function button_cancel() {
      location.replace("{{ asset('/') }}allowances/data/{{ $month_id }}");
    }
  </script>
  <div class="card">
    <h5 class="card-header"> Gaji Bersih</h5>
    <div class="card-body">
      @if($action == 'insert')
      <form class="form-horizontal" action="{{ asset('/') }}allowances" method="post">
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
          <label for="nip" class="col-sm-2 col-form-label">Nip</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="nip" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nmpeg" class="col-sm-2 col-form-label">Nmpeg</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="nmpeg" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="npwp" class="col-sm-2 col-form-label">Npwp</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="npwp" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="rekening" class="col-sm-2 col-form-label">Rekening</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="rekening" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nmbankspan" class="col-sm-2 col-form-label">Nmbankspan</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="nmbankspan" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="gjpokok" class="col-sm-2 col-form-label">Gjpokok</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="gjpokok" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjistri" class="col-sm-2 col-form-label">Tjistri</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjistri" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjanak" class="col-sm-2 col-form-label">Tjanak</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjanak" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjupns" class="col-sm-2 col-form-label">Tjupns</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjupns" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjstruk" class="col-sm-2 col-form-label">Tjstruk</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjstruk" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjfungs" class="col-sm-2 col-form-label">Tjfungs</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjfungs" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjdaerah" class="col-sm-2 col-form-label">Tjdaerah</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjdaerah" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjpencil" class="col-sm-2 col-form-label">Tjpencil</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjpencil" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjlain" class="col-sm-2 col-form-label">Tjlain</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjlain" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjkompen" class="col-sm-2 col-form-label">Tjkompen</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjkompen" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="pembul" class="col-sm-2 col-form-label">Pembul</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="pembul" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjberas" class="col-sm-2 col-form-label">Tjberas</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjberas" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjpph" class="col-sm-2 col-form-label">Tjpph</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjpph" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tottun" class="col-sm-2 col-form-label">Tottun</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tottun" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="kotor" class="col-sm-2 col-form-label">Kotor</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="kotor" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potpfkbul" class="col-sm-2 col-form-label">Potpfkbul</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potpfkbul" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potpfk2" class="col-sm-2 col-form-label">Potpfk2</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potpfk2" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potpfk10" class="col-sm-2 col-form-label">Potpfk10</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potpfk10" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potpph" class="col-sm-2 col-form-label">Potpph</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potpph" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potswrum" class="col-sm-2 col-form-label">Potswrum</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potswrum" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potkelbtj" class="col-sm-2 col-form-label">Potkelbtj</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potkelbtj" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potlain" class="col-sm-2 col-form-label">Potlain</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potlain" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="pottabrum" class="col-sm-2 col-form-label">Pottabrum</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="pottabrum" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="totpot" class="col-sm-2 col-form-label">Totpot</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="totpot" value="0">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bersih" class="col-sm-2 col-form-label">Bersih</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="bersih" value="0">
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
      <form class="form-horizontal" action="{{ asset('/') }}allowances/{{ $row->id }}" method="post">
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
          <label for="nip" class="col-sm-2 col-form-label">Nip</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="nip" value="{{ $row->nip }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nmpeg" class="col-sm-2 col-form-label">Nmpeg</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="nmpeg" value="{{ $row->nmpeg }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="npwp" class="col-sm-2 col-form-label">Npwp</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="npwp" value="{{ $row->npwp }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="rekening" class="col-sm-2 col-form-label">Rekening</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="rekening" value="{{ $row->rekening }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nmbankspan" class="col-sm-2 col-form-label">Nmbankspan</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="nmbankspan" value="{{ $row->nmbankspan }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="gjpokok" class="col-sm-2 col-form-label">Gjpokok</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="gjpokok" value="{{ $row->gjpokok }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjistri" class="col-sm-2 col-form-label">Tjistri</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjistri" value="{{ $row->tjistri }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjanak" class="col-sm-2 col-form-label">Tjanak</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjanak" value="{{ $row->tjanak }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjupns" class="col-sm-2 col-form-label">Tjupns</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjupns" value="{{ $row->tjupns }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjstruk" class="col-sm-2 col-form-label">Tjstruk</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjstruk" value="{{ $row->tjstruk }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjfungs" class="col-sm-2 col-form-label">Tjfungs</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjfungs" value="{{ $row->tjfungs }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjdaerah" class="col-sm-2 col-form-label">Tjdaerah</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjdaerah" value="{{ $row->tjdaerah }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjpencil" class="col-sm-2 col-form-label">Tjpencil</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjpencil" value="{{ $row->tjpencil }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjlain" class="col-sm-2 col-form-label">Tjlain</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjlain" value="{{ $row->tjlain }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjkompen" class="col-sm-2 col-form-label">Tjkompen</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjkompen" value="{{ $row->tjkompen }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="pembul" class="col-sm-2 col-form-label">Pembul</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="pembul" value="{{ $row->pembul }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjberas" class="col-sm-2 col-form-label">Tjberas</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjberas" value="{{ $row->tjberas }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tjpph" class="col-sm-2 col-form-label">Tjpph</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tjpph" value="{{ $row->tjpph }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tottun" class="col-sm-2 col-form-label">Tottun</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="tottun" value="{{ $row->tottun }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="kotor" class="col-sm-2 col-form-label">Kotor</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="kotor" value="{{ $row->kotor }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potpfkbul" class="col-sm-2 col-form-label">Potpfkbul</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potpfkbul" value="{{ $row->potpfkbul }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potpfk2" class="col-sm-2 col-form-label">Potpfk2</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potpfk2" value="{{ $row->potpfk2 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potpfk10" class="col-sm-2 col-form-label">Potpfk10</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potpfk10" value="{{ $row->potpfk10 }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potpph" class="col-sm-2 col-form-label">Potpph</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potpph" value="{{ $row->potpph }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potswrum" class="col-sm-2 col-form-label">Potswrum</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potswrum" value="{{ $row->potswrum }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potkelbtj" class="col-sm-2 col-form-label">Potkelbtj</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potkelbtj" value="{{ $row->potkelbtj }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="potlain" class="col-sm-2 col-form-label">Potlain</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="potlain" value="{{ $row->potlain }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="pottabrum" class="col-sm-2 col-form-label">Pottabrum</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="pottabrum" value="{{ $row->pottabrum }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="totpot" class="col-sm-2 col-form-label">Totpot</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="totpot" value="{{ $row->totpot }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="bersih" class="col-sm-2 col-form-label">Bersih</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="bersih" value="{{ $row->bersih }}">
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
      <form class="form-horizontal" action="{{ asset('/') }}allowances/{{ $row->id }}" method="post">
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
          <label for="tottun" class="col-sm-2 control-label">Tottun</label>
          <div class="col-sm-10">
            {{ $row->tottun }}
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
        <div class="mb-3 row">
          <div class="offset-sm-2 col-sm-10">
            @method("DELETE")
            <input type="hidden" name="action" value="{{ $action }}">
            <input type="hidden" name="id" value="{{ $row->id }}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-secondary" onclick="button_cancel()">Cancel</button>
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
      </div>
      <div class="mb-3 row">
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
        <label for="tottun" class="col-sm-2 control-label">Tottun</label>
        <div class="col-sm-10">
          {{ $row->tottun }}
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
      </div> -->
      <!-- <div class="mb-3 row">
        <label for="updated_at" class="col-sm-2 control-label">Updated_at</label>
        <div class="col-sm-10">
          {{ $row->updated_at }}
        </div>
      </div> -->
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