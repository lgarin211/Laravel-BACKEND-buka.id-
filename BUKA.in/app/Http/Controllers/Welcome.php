<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Welcome extends Controller
{
    public function hero()
    {
        return view('hero');
    }

    public function sort()
    {

        if (!empty($_GET['cekmysort'])) {
            $user = DB::table('users_link')->where('keyword', $_GET['call'])->first();

            if (isset($user)) {
                echo 'link sudah ada';
                die;
            }else{
                echo 'link bisa kamu gunakan';
                die;
            }
        }

        if (!empty($_POST)) {
            # code...
        }

        return \view('sortlink');

    }


    public function temukan(Request $request, $LINK)
    {
        $user = DB::table('users_link')->where('keyword', $LINK)->first();
        $user = DB::table('users_link')->where('keyword', $LINK)->first();
        if (isset($user)) {
            DB::table('users_link')
                ->where('id', $user->id)
                ->update(['hits' => $user->hits + 1]);
            return redirect($user->link);
        } else {
            return redirect("/");
        }
    }
}
