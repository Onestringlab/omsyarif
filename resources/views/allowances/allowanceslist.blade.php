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
              <th>Nmbankspan</th>
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
              <th>Pottabrum</th> -->
              <th>Totpot</th>
              <th>Bersih</th>
              <!-- <th>Created_at</th>
              <th>Updated_at</th> -->
              <th class="text-center"><a class=" btn btn-primary" href="{{asset('/')}}allowances/create/{{ $month->id }}"> <i class="fas fa-plus"></i></a></th>
            </tr>
          </thead>
          <tbody>
            @php ($no = 1)
            @foreach ($rows as $row)
            <tr class="align-middle">
              <td>{{ $no++ }}</td>
              <!-- <td>{{ $row['month_id'] }}</td> -->
              <td>{{ $row['nip'] }}</td>
              <td>{{ $row['nmpeg'] }}</td>
              <!-- <td>{{ $row['npwp'] }}</td> -->
              <td>{{ $row['rekening'] }}</td>
              <td>{{ $row['nmbankspan'] }}</td>
              <td>{{ $row['gjpokok'] }}</td>
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
              <td>{{ $row['kotor'] }}</td>
              <!-- <td>{{ $row['potpfkbul'] }}</td>
              <td>{{ $row['potpfk2'] }}</td>
              <td>{{ $row['potpfk10'] }}</td>
              <td>{{ $row['potpph'] }}</td>
              <td>{{ $row['potswrum'] }}</td>
              <td>{{ $row['potkelbtj'] }}</td>
              <td>{{ $row['potlain'] }}</td>
              <td>{{ $row['pottabrum'] }}</td> -->
              <td>{{ $row['totpot'] }}</td>
              <td>{{ $row['bersih'] }}</td>
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
@endsection