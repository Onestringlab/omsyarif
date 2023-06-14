@extends('layouts.app')

@section('title')
Data Salaries 
@endsection

@section('content')
<div class="container">
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Slip Gaji Dibayarkan </h5>
    <div class="card-body">
      <h5 class="card-title">{{$month->month}} {{$month->year}}</h5>
      <div class="table-responsive">
        <table class="table table-striped table-hover ">
          <thead class="thead-dark">
            <tr class="align-middle">
              <th>No</th>
              <th>NIP</th>
              <th>Name</th>
              <th>Gol</th>
              <th>Rekening</th>
              <th>Bank</th>
              <th>Bersih</th>
              <!-- <th>P1</th>
              <th>P2</th>
              <th>P3</th>
              <th>P4</th>
              <th>P5</th>
              <th>P6</th>
              <th>P7</th>
              <th>P9</th>
              <th>P10</th>
              <th>P11</th>
              <th>P12</th>
              <th>P13</th>
              <th>P14</th>
              <th>P15</th> -->
              <th>Potongan</th>
              <th>Bayar</th>
              <!-- <th>Created_at</th>
              <th>Updated_at</th> -->
              <th class="text-center"><a class="btn btn-primary" href="{{asset('/')}}salaries/create/{{ $month->id }}"> <i class="fas fa-plus"></i></a></th>
            </tr>
          </thead>
          <tbody>
            @php ($no = 1)
            @foreach ($rows as $row)
            <tr class="align-middle">
              <td>{{ $no++ }}.</td>
              <td>{{ $row['nip'] }}</td>
              <td>{{ $row['name'] }}</td>
              <td>{{ $row['gol'] }}</td>
              <td>{{ $row['rekening'] }}</td>
              <td>{{ $row['bank'] }}</td>
              <td>{{ $row['bersih'] }}</td>
              <!-- <td>{{ $row['p1'] }}</td>
              <td>{{ $row['p2'] }}</td>
              <td>{{ $row['p3'] }}</td>
              <td>{{ $row['p4'] }}</td>
              <td>{{ $row['p5'] }}</td>
              <td>{{ $row['p6'] }}</td>
              <td>{{ $row['p7'] }}</td>
              <td>{{ $row['p9'] }}</td>
              <td>{{ $row['p10'] }}</td>
              <td>{{ $row['p11'] }}</td>
              <td>{{ $row['p12'] }}</td>
              <td>{{ $row['p13'] }}</td>
              <td>{{ $row['p14'] }}</td>
              <td>{{ $row['p15'] }}</td> -->
              <td>{{ $row['point'] }}</td>
              <td>{{ $row['bayar'] }}</td>
              <!-- <td>{{ $row['created_at'] }}</td>
              <td>{{ $row['updated_at'] }}</td> -->
              <td class="text-center">
                <a class="btn btn-success" href="{{asset('/')}}salaries/show/{{ $month->id }}/{{ $row->id }}"><i class="fas fa-file-invoice"></i></i></a>
                <a class="btn btn-secondary" href="{{asset('/')}}salaries/{{ $month->id }}/{{ $row->id }}/edit"><i class="far fa-edit"></i></a>
                <a class="btn btn-danger" href="{{asset('/')}}salaries/{{ $month->id }}/{{ $row->id }}/delete"><i class="far fa-trash-alt"></i></a>
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