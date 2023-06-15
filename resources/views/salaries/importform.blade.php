@extends('layouts.app')

@section('title')
Data Salaries 
@endsection

@section('content')
<!-- <div class="container"> -->
<!-- <div class="card border-success"> -->
<!-- <h5 class="card-header text-bg-success"> Upload Data Gaji Bersih</h5> -->
<!-- <div class="card-body"> -->
<table width="2500">
  <thead class="thead-dark">
    <tr class="align-middle">
      <th width="40">No</th>
      <th width="200">nip</th>
      <th width="250">nmpeg</th>
      <th width="60">gol</th>
      <th width="225">rekening</th>
      <th width="200">nm_bank</th>
      <th width="100">bersih</th>
      <th width="100">p1</th>
      <th width="100">p2</th>
      <th width="100">p3</th>
      <th width="100">p4</th>
      <th width="100">p5</th>
      <th width="100">p6</th>
      <th width="100">p7</th>
      <th width="100">p8</th>
      <th width="100">p9</th>
      <th width="100">p10</th>
      <th width="100">p11</th>
      <th width="100">p12</th>
      <th width="100">p13</th>
      <th width="100">p14</th>
      <th width="100">p15</th>
      <th width="100">potinternal</th>
      <th width="100">bayar</th>
    </tr>
  </thead>
  <tbody>
    @php ($no = 1)
    @foreach ( $rows as $row )
    <tr>
      <td>{{ $no++ }}.</td>
      <td><input class="form-control" type="text" name="nip" value="{{$row['nip']}}"></td>
      <td><input class="form-control" type="text" name="name" value="{{$row['nmpeg']}}"></td>
      <td><input class="form-control" type="text" name="gol" value="{{$row['gol']}}"></td>
      <td><input class="form-control" type="text" name="rekening" value="{{$row['rekening']}}"></td>
      <td><input class="form-control" type="text" name="bank" value="{{$row['nm_bank']}}"></td>
      <td><input class="form-control" type="text" name="bersih" value="{{$row['bersih']}}"></td>
      <td><input class="form-control" type="text" name="p1" value="{{$row['p1']}}"></td>
      <td><input class="form-control" type="text" name="p2" value="{{$row['p2']}}"></td>
      <td><input class="form-control" type="text" name="p3" value="{{$row['p3']}}"></td>
      <td><input class="form-control" type="text" name="p4" value="{{$row['p4']}}"></td>
      <td><input class="form-control" type="text" name="p5" value="{{$row['p5']}}"></td>
      <td><input class="form-control" type="text" name="p6" value="{{$row['p6']}}"></td>
      <td><input class="form-control" type="text" name="p7" value="{{$row['p7']}}"></td>
      <td><input class="form-control" type="text" name="p8" value="{{$row['p8']}}"></td>
      <td><input class="form-control" type="text" name="p9" value="{{$row['p9']}}"></td>
      <td><input class="form-control" type="text" name="p10" value="{{$row['p10']}}"></td>
      <td><input class="form-control" type="text" name="p11" value="{{$row['p11']}}"></td>
      <td><input class="form-control" type="text" name="p12" value="{{$row['p12']}}"></td>
      <td><input class="form-control" type="text" name="p13" value="{{$row['p13']}}"></td>
      <td><input class="form-control" type="text" name="p14" value="{{$row['p14']}}"></td>
      <td><input class="form-control" type="text" name="p15" value="{{$row['p15']}}"></td>
      <td><input class="form-control" type="text" name="point" value="{{$row['potinternal']}}"></td>
      <td><input class="form-control" type="text" name="bayar" value="{{$row['bayar']}}"></td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- </div> -->
<!-- </div> -->
<!-- </div> -->

@endsection