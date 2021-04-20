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
    //FUNGSI PENGENDALIAN SortLink
    public function sort()
    {
        // mengamati apa ada aksi yang di perlukan melaui ajax dan aksi
        if (!empty($_GET['cekmysort'])) {

            switch ($_GET['cekmysort']) {
        // body mengecek apa keyword sudah di gunakan
                case 991:
                    $user = DB::table('users_link')->where('keyword', $_GET['call'])->first();

                    if (isset($user)) {
                        echo 'link sudah ada';
                        die;
                    } else {
                        echo 'link bisa kamu gunakan';
                        die;
                    }

                    break;
                    // body list sortlink seorang user
                case 992:
                    $user = DB::table('users_link')->get();
                    return view('Componen.listsortL', compact('user'));
                    break;
                    //aksi penghapusan
                case 993:
                    DB::table('users_link')->where('id', $_GET['call'])->delete();
                    return redirect('/user/sortLink');
                    break;


                default:
                    # code...
                    break;
            }
        }
        // aksi menyimpan data
        if (!empty($_POST)) {
            // dd($_POST);
            unset($_POST["_token"]);
            $_POST['hits'] = 0;
            $_POST['id_user'] = 1;
            DB::table('users_link')->insert([$_POST]);
            return redirect('/user/sortLink');

        }

        return \view('sortlink');
    }

    // fungsi link finder
    public function temukan(Request $request, $LINK)
    {
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
