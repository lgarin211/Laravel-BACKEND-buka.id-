<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Profiler\Profile;

class Welcome extends Controller
{


    public $id=1;

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
                    $data=$this->Profile("use");
                    // \dd($data);
                    return view('Componen.listsortL', compact('data'));
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
            $_POST['user_id']=$this->id;
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

    public function login()
    {
        return view('Vlogin.login');
    }

    public function register()
    {
        return view('Vlogin.register');
    }

    // untuk menarik data profile seorang user
    public function Profile($cek="not use")
    {
        $data=DB::table('users')->where('id',$this->id)->first();

        if (!empty($data)) {
        $data->user_profile=DB::table('users_profile')->where('users_id',$data->id)->first();
        $data->users_profile_link=DB::table('users_profile_link')->where('profile_id',$data->id)->get();
        $data->sort_link=DB::table('users_link')->where('user_id',$data->id)->get();
        }
        if ($cek=="use") {
            return $data;
        }
        dd($data);

    }
}
