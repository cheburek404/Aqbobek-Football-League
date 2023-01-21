<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index()
    {
        $data = DB::table('clubs')->get();

        return view('admin.club.show', ['clubs' => $data]);
    }


    public function addClub()
    {
        return view('admin.club.add');
    }


    public function create(Request $req)
    {
        $data = new Club();

        $data->name = $req['name'];

        $image = $req->logo;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/image');
        $image->move($destinationPath, $imagename);
        $data->logo = $imagename;

        $data->save();

        return redirect()->route('showClub');
    }


    public function edit($id)
    {
        $club = Club::find($id);
        return view('admin.club.edit', compact('club'));
    }


    public function update(Request $req, $id)
    {
        $club = Club::find($id);

        $club->name = $req['name'];

        if ($req->hasFile('logo')) {
            $image = $req->logo;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/image');
            $image->move($destinationPath, $imagename);
            $club->logo = $imagename;
        }

        $club->game = $req['game'];
        $club->win = $req['win'];
        $club->draw = $req['draw'];
        $club->lose = $req['lose'];
        $club->goals_scored = $req['goals_scored'];
        $club->point = $req['point'];
        $club->goals_conceded = $req['goals_conceded'];
        $club->goal_difference = $req['goal_difference'];

        $club->update();
        return redirect()->route('showClub');
    }


    public function destroy($id)
    {
        $club = Club::find($id)->delete();

        return redirect()->route('showClub');
    }
}
