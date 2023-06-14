<?php

namespace App\Http\Controllers;

use App\Models\Months;
use App\Models\Allowances;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllowancesController extends Controller
{

  public function index()
  {
    $rows = Allowances::all();
    return view('allowances/allowanceslist', ['rows' => $rows]);
  }

  public function create($month_id)
  {
    return view('allowances/allowancesform', ['action' => 'insert', 'month_id' => $month_id]);
  }

  public function store(Request $request)
  {
    $allowances = new Allowances;
    // $allowances->id = $request->id;
    $allowances->month_id = $request->month_id;
    $allowances->nip = $request->nip;
    $allowances->nmpeg = $request->nmpeg;
    $allowances->npwp = $request->npwp;
    $allowances->rekening = $request->rekening;
    $allowances->nmbankspan = $request->nmbankspan;
    $allowances->gjpokok = $request->gjpokok;
    $allowances->tjistri = $request->tjistri;
    $allowances->tjanak = $request->tjanak;
    $allowances->tjupns = $request->tjupns;
    $allowances->tjstruk = $request->tjstruk;
    $allowances->tjfungs = $request->tjfungs;
    $allowances->tjdaerah = $request->tjdaerah;
    $allowances->tjpencil = $request->tjpencil;
    $allowances->tjlain = $request->tjlain;
    $allowances->tjkompen = $request->tjkompen;
    $allowances->pembul = $request->pembul;
    $allowances->tjberas = $request->tjberas;
    $allowances->tjpph = $request->tjpph;
    $allowances->tottun = $request->tottun;
    $allowances->kotor = $request->kotor;
    $allowances->potpfkbul = $request->potpfkbul;
    $allowances->potpfk2 = $request->potpfk2;
    $allowances->potpfk10 = $request->potpfk10;
    $allowances->potpph = $request->potpph;
    $allowances->potswrum = $request->potswrum;
    $allowances->potkelbtj = $request->potkelbtj;
    $allowances->potlain = $request->potlain;
    $allowances->pottabrum = $request->pottabrum;
    $allowances->totpot = $request->totpot;
    $allowances->bersih = $request->bersih;
    // $allowances->created_at = $request->created_at;
    // $allowances->updated_at = $request->updated_at;
    $allowances->save();
    return redirect('/allowances/data/' . $allowances->month_id);
  }

  public function show($month_id, $id)
  {
    $allowances = Allowances::find($id);
    return view('allowances/allowancesform', ['row' => $allowances, 'action' => 'detail', 'month_id' => $month_id]);
  }

  public function edit($month_id, $id)
  {
    $allowances = Allowances::find($id);
    return view('allowances/allowancesform', ['row' => $allowances, 'action' => 'update', 'month_id' => $month_id]);
  }

  public function update(Request $request)
  {
    $allowances = Allowances::find($request->id);
    // $allowances->id = $request->id;
    $allowances->month_id = $request->month_id;
    $allowances->nip = $request->nip;
    $allowances->nmpeg = $request->nmpeg;
    $allowances->npwp = $request->npwp;
    $allowances->rekening = $request->rekening;
    $allowances->nmbankspan = $request->nmbankspan;
    $allowances->gjpokok = $request->gjpokok;
    $allowances->tjistri = $request->tjistri;
    $allowances->tjanak = $request->tjanak;
    $allowances->tjupns = $request->tjupns;
    $allowances->tjstruk = $request->tjstruk;
    $allowances->tjfungs = $request->tjfungs;
    $allowances->tjdaerah = $request->tjdaerah;
    $allowances->tjpencil = $request->tjpencil;
    $allowances->tjlain = $request->tjlain;
    $allowances->tjkompen = $request->tjkompen;
    $allowances->pembul = $request->pembul;
    $allowances->tjberas = $request->tjberas;
    $allowances->tjpph = $request->tjpph;
    $allowances->tottun = $request->tottun;
    $allowances->kotor = $request->kotor;
    $allowances->potpfkbul = $request->potpfkbul;
    $allowances->potpfk2 = $request->potpfk2;
    $allowances->potpfk10 = $request->potpfk10;
    $allowances->potpph = $request->potpph;
    $allowances->potswrum = $request->potswrum;
    $allowances->potkelbtj = $request->potkelbtj;
    $allowances->potlain = $request->potlain;
    $allowances->pottabrum = $request->pottabrum;
    $allowances->totpot = $request->totpot;
    $allowances->bersih = $request->bersih;
    // $allowances->created_at = $request->created_at;
    // $allowances->updated_at = $request->updated_at;
    $allowances->save();
    return redirect('/allowances/data/' . $allowances->month_id);
  }

  public function delete($month_id, $id)
  {
    $allowances = Allowances::find($id);
    return view('allowances/allowancesform', ['row' => $allowances, 'action' => 'delete', 'month_id' => $month_id]);
  }

  public function destroy($id)
  {
    $allowances = Allowances::find($id);
    $allowances->delete();
    return redirect('/allowances/data/' . $allowances->month_id);
  }

  public function data($month_id)
  {
    $rows = Allowances::where('month_id', $month_id)->get();
    $month = Months::where('id', $month_id)->first();
    return view('allowances/allowanceslist', ['rows' => $rows, 'month' => $month]);
  }

  public function tunjanganlist()
  {
    $nip = Auth::user()->nip;
    $rows = Allowances::where("nip", $nip)->orderBy('created_at', 'DESC')->get();
    return view('allowances/tunjanganlist', ['rows' => $rows]);
  }

  public function tunjangan($id)
  {
    $row = Allowances::where("id", $id)->first();
    return view('Allowances/tunjangan', ['row' => $row]);
  }
}
