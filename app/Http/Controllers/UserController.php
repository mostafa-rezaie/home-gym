<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function changeWeight(Request $request)
    {

        $user = auth()->user();
        $user_id = $user->id;
        $weight = $request->input('weight');
        $query = DB::table('users')
            ->where('id', '=', $user_id)
            ->update([
                'weight' => $weight,
            ]);
    }
    public function index(Request $request)
    {
        if ($request->has('form1')) {
            $this->changeWeight($request);
        }
        if ($request->has('form2')) {
            $this->changeHeight($request);
        }
        if ($request->has('form3')) {
            $this->changePlan($request);
        }
        return redirect($request->url());
    }
    //

    public function changeHeight(Request $request)
    {

        $user = auth()->user();
        $user_id = $user->id;
        $height = $request->input('height');
        $query = DB::table('users')
            ->where('id', '=', $user_id)
            ->update([
                'height' => $height,
            ]);
    }
    public function changePlan(Request $request)
    {

        $user = auth()->user();
        $user_id = $user->id;
        $plan = $request->input('plan');
        $query = DB::table('users')
            ->where('id', '=', $user_id)
            ->update([
                'plan' => $plan,
                'dayNum' => 0
            ]);

        return redirect($request->url());
    }
    public function increaseDay()
    {
        $user = auth()->user();
        $user_id = $user->id;
        $new_day = $user->dayNum + 1;
        $query = DB::table('users')
            ->where('id', '=', $user_id)
            ->update([
                'dayNum' => $new_day,
            ]);

        return view('home');
    }
}
