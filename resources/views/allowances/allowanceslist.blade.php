@extends('layouts.app')

@section('title')
Data Allowances 
@endsection

@section('content')
<div class="container">
  <div class="card">
    <h5 class="card-header text-bg-success"> Gaji Bersih</h5>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover ">
          <thead class="thead-dark">
            <tr class="align-middle">
              <th>No</th>
              <!-- <th>Month_id</th> -->
              <th>Nip</th>
              <th>Nmpeg</th>
              <!-- <th>Npwp</th> -->
              <th>Rekening</th>
              <!-- <th>Nmbankspan</th> -->
              <th>Gjpokok</th>
              <!-- <th>Tjistri</th>
              <th>Tjanak</th>
              <th>Tjupns</th>
              <th>Tjstruk</th>
              <th>Tjfungs</th>
              <th>Tjdaerah</th>
              <th>Tjpencil</th>
              <th>Tjlain</th>
              <th>Tjkompen</th>
              <th>Pembul</th>
              <th>Tjberas</th>
              <th>Tjpph</th> -->
              <th>Kotor</th>
              <!-- <th>Potpfkbul</th>
              <th>Potpfk2</th>
              <th>Potpfk10</th>
              <th>Potpph</th>
              <th>Potswrum</th>
              <th>Potkelbtj</th>
              <th>Potlain</th>
              <th>Pottabrum</th> 
              <th>BPJS</th>
              <th>BPJS2</th> -->
              <th>Totpot</th>
              <th>Bersih</th>
              <!-- <th>Created_at</th>
              <th>Updated_at</th> -->
              <th class="text-center">
                <a class=" btn btn-primary" href="{{asset('/')}}allowances/create/{{ $month->id }}">
                  <i class="fas fa-plus"></i></a>
                <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#uploadAllowances">
                  <i class="fa-sharp fa-solid fa-upload"></i></a>
                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#removeAllowances">
                  <i class="fas fa-trash"></i></a>
              </th>
            </tr>
          </thead>
          <tbody>
            @php ($no = 1)
            @foreach ($rows as $row)
            <tr class="align-middle">
              <td>{{ $no++ }}.</td>
              <!-- <td>{{ $row['month_id'] }}</td> -->
              <td>{{ $row['nip'] }}</td>
              <td>{{ $row['nmpeg'] }}</td>
              <!-- <td>{{ $row['npwp'] }}</td> -->
              <td>{{ $row['rekening'] }}</td>
              <!-- <td>{{ $row['nmbankspan'] }}</td> -->
              <td>{{ toCurrency($row['gjpokok']) }}</td>
              <!-- <td>{{ $row['tjistri'] }}</td>
              <td>{{ $row['tjanak'] }}</td>
              <td>{{ $row['tjupns'] }}</td>
              <td>{{ $row['tjstruk'] }}</td>
              <td>{{ $row['tjfungs'] }}</td>
              <td>{{ $row['tjdaerah'] }}</td>
              <td>{{ $row['tjpencil'] }}</td>
              <td>{{ $row['tjlain'] }}</td>
              <td>{{ $row['tjkompen'] }}</td>
              <td>{{ $row['pembul'] }}</td>
              <td>{{ $row['tjberas'] }}</td>
              <td>{{ $row['tjpph'] }}</td> -->
              <td>{{ toCurrency($row['kotor']) }}</td>
              <!-- <td>{{ $row['potpfkbul'] }}</td>
              <td>{{ $row['potpfk2'] }}</td>
              <td>{{ $row['potpfk10'] }}</td>
              <td>{{ $row['potpph'] }}</td>
              <td>{{ $row['potswrum'] }}</td>
              <td>{{ $row['potkelbtj'] }}</td>
              <td>{{ $row['potlain'] }}</td>
              <td>{{ $row['pottabrum'] }}</td> 
              <td>{{ $row['bjps'] }}</td>
              <td>{{ $row['bpjs2'] }}</td> -->
              <td>{{ toCurrency($row['totpot']) }}</td>
              <td>{{ toCurrency($row['bersih']) }}</td>
              <!-- <td>{{ $row['created_at'] }}</td>
              <td>{{ $row['updated_at'] }}</td> -->
              <td class=" text-center">
                <a class="btn btn-success" href="{{asset('/')}}allowances/show/{{ $month->id }}/{{ $row->id }}"><i class="fas fa-info-circle"></i></a>
                <a class="btn btn-secondary" href="{{asset('/')}}allowances/{{ $month->id }}/{{ $row->id }}/edit"><i class="far fa-edit"></i></a>
                <a class="btn btn-danger" href="{{asset('/')}}allowances/{{ $month->id }}/{{ $row->id }}/delete"><i class="far fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadAllowances" tabindex="-1" aria-labelledby="uploadAllowancesLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="uploadAllowancesLabel">Mengunggah File</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{ asset('/allowances/import') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="mb-3 row">
            <label for="point" class="col-sm-2 col-form-label">File</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" name="file" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="month_id" value="{{ $month->id }}">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="Submit" class="btn btn-primary">Unggah</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="removeAllowances" tabindex="-1" aria-labelledby="removeAllowancesLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="removeSalariesLabel">Menghapus Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3 row">
          <div class="col-sm-10">
            PERINGATAN!!!<br>
            SEMUA data pada bulan ini akan DIHAPUS!!!
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="month_id" value="{{ $month->id }}">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a class="btn btn-danger" href="{{asset('/')}}allowances/remove/{{ $month->id }}">Hapus</a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection