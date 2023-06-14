<?php

namespace App\Http\Controllers;

use App\Models\Months;
use Illuminate\Http\Request;

class MonthsController extends Controller
{

  public function index()
  {
    $rows = Months::orderBy('created_at', 'DESC')->get();
    return view('months/monthslist', ['rows' => $rows]);
  }

  public function create()
  {
    return view('months/monthsform', ['action' => 'insert']);
  }

  public function store(Request $request)
  {
    $months = new Months;
    // $months->id = $request->id;
    $months->month = $request->month;
    $months->year = $request->year;
    // $months->created_at = $request->created_at;
    // $months->updated_at = $request->updated_at;
    $months->save();
    return redirect('/months');
  }

  public function show($id)
  {
    $months = Months::find($id);
    return view('months/monthsform', ['row' => $months, 'action' => 'detail']);
  }

  public function edit($id)
  {
    $months = Months::find($id);
    return view('months/monthsform', ['row' => $months, 'action' => 'update']);
  }

  public function update(Request $request)
  {
    $months = Months::find($request->id);
    // $months->id = $request->id;
    $months->month = $request->month;
    $months->year = $request->year;
    // $months->created_at = $request->created_at;
    // $months->updated_at = $request->updated_at;
    $months->save();
    return redirect('/months');
  }

  public function delete($id)
  {
    $months = Months::find($id);
    return view('months/monthsform', ['row' => $months, 'action' => 'delete']);
  }

  public function destroy($id)
  {
    $months = Months::find($id);
    $months->delete();
    return redirect('/months');
  }
}
