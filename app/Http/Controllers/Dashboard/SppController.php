<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Spp;

class SppController extends Controller
{
    public function manageSpp()
    {
        $spps = Spp::all();
        return view('dashboard.managespp', [
            'spps' => $spps
        ]);
    }

    public function changeSppView($id)
    {
        $spp = Spp::find($id);
        return view('dashboard.changespp', [
            'spp' => $spp
        ]);
    }

    public function changeSppAction(Request $request, $id)
    {
        $spp = Spp::find($id);
        $this->validate($request, [
            'nominal' => 'required|numeric'
        ]);
        $date = strtotime($request->date);
        $spp->update([
            'date' => $date,
            'nominal' => $request->nominal
        ]);
        Alert::success('Spp ' . date('M Y', $date), 'Have Been Successfully Changed!');
        return redirect(route('view.managespp'));
    }

    public function createSpp(Request $request)
    {
        $this->validate($request, [
            'nominal' => 'required|numeric'
        ]);
        $date = strtotime($request->date);
        $spp = Spp::create([
            'date' => $date,
            'nominal' => $request->nominal
        ]);
        Alert::success('Spp ' . date('M Y', $date), 'The Spp Has Been Successfully Created!');
        return redirect(route('view.managespp'));
    }

    public function bannedSpp($id)
    {
        $spp = Spp::find($id);
        Alert::success('Spp ' . $spp->created_at->format('M Y'), 'Have Been Successfully Banned!');
        $spp->delete();
        return redirect()->back();
    }
}
