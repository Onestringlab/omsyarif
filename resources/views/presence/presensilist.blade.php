@extends('layouts.app')

@section('title')
Presensi
@endsection

@section('content')
<div class="container">
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Presensi </h5>
    <div class="card-body">
      <h5 class="card-title">
        {{Auth::user()->name}}<br>
        {{Auth::user()->nip}}
      </h5>
      <div class="table-responsive">
        <table class="table table-striped table-hover ">
          <thead class="thead-dark">
            <tr class="align-middle text-center table-primary">
              <th width="40">No</th>
              <th width="120">Bulan</th>
              <th>TK</th>
              <th>PTK</th>
              <th>KUM</th>
              <th>KUT</th>
              <th width="120">Status</th>
              <th>Alasan</th>
              <th width="120"></th>
            </tr>
          </thead>
          <tbody>
            @php ($no = 1)
            @foreach ($rows as $row)
            <tr>
              <td>{{ $no++ }}.</td>
              <td class="text-center">{{ $row->months->month }} {{ $row->months->year }}</td>
              <td class="text-center">{{ $row['tk'] }}</td>
              <td class="text-center">{{ $row['ptk'] }}%</td>
              <td class="text-center">{{ $row['kum'] }}</td>
              <td class="text-center">{{ $row['kut'] }}</td>
              <td class="text-center">{{ $row['status'] }}</td>
              <td>{{ $row['alasan'] }}</td>
              <td>
                <a class="btn text-light btn-info" href="{{asset('/')}}presensi/{{ $row->id }}">
                  <i class="fa-solid fa-calendar-check"></i>
                </a>
                <a class="btn btn-secondary" href="{{asset('/')}}presensiform/{{ $row->id }}">
                  <i class="far fa-edit"></i>
                </a>
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