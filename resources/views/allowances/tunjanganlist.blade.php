@extends('layouts.app')

@section('title')
Slip Gaji Dibayarkan
@endsection

@section('content')
<div class="container">
  <div class="card border-success">
    <h5 class="card-header text-bg-success"> Slip Gaji Bersih</h5>
    <div class="card-body">
      <h5 class="card-title">
        {{Auth::user()->name}}<br>
        {{Auth::user()->nip}}
      </h5>
      <div class="table-responsive">
        <table class="table table-striped table-hover ">
          <thead class="thead-dark">
            <tr>
              <th width="60">No</th>
              <th>Bulan</th>
              <th>Bersih</th>
            </tr>
          </thead>
          <tbody>
            @php ($no = 1)
            @foreach ($rows as $row)
            <tr>
              <td>{{ $no++ }}.</td>
              <td><a href="{{asset('/')}}tunjangan/{{ $row->id }}">{{ $row->months->month }} {{ $row->months->year }} </a></td>
              <td>{{ $row['bersih'] }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection