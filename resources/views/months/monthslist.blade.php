@extends('layouts.app')

@section('title')
Data Months 
@endsection

@section('content')
<div class="container">
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Data Slip Gaji</h5>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover ">
          <thead class="thead-dark">
            <tr class="align-middle">
              <th width="60">No</th>
              <th width="120">Bersih</th>
              <th width="120">Dibayarkan</th>
              <th>Bulan</th>
              <th width="90">Tahun</th>
              <!-- <th>Created_at</th> -->
              <th>Waktu</th>
              <th class="text-center"><a class="btn btn-primary" href="{{asset('/')}}months/create"><i class="fas fa-plus"></i></a></th>
            </tr>
          </thead>
          <tbody>
            @php ($no = 1)
            @foreach ($rows as $row)
            <tr class="align-middle">
              <td>{{ $no++ }}.</td>
              <td><a class="btn btn-secondary" href="{{asset('/')}}allowances/data/{{ $row->id }}"><i class="fa-regular fa-file"></i></a></td>
              <td><a class="btn btn-secondary" href="{{asset('/')}}salaries/data/{{ $row->id }}"><i class="fa-regular fa-file-lines"></i></a></td>
              <td>{{ $row['month'] }}</td>
              <td>{{ $row['year'] }}</td>
              <!-- <td>{{ $row['created_at'] }}</td> -->
              <td>{{ $row['updated_at'] }}</td>
              <td class="text-center">
                <a class="btn btn-success" href="{{asset('/')}}months/{{ $row->id }}"><i class="fas fa-info-circle"></i></a>
                <a class="btn btn-secondary" href="{{asset('/')}}months/{{ $row->id }}/edit"><i class="far fa-edit"></i></a>
                <a class="btn btn-danger" href="{{asset('/')}}months/{{ $row->id }}/delete"><i class="far fa-trash-alt"></i></a>
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