<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class loginController extends Controller
{
    public function confirmation(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'password' => 'required',
            'profession' => 'required',
        ]);
        $option = $request->profession;
        $login = $request->Email;
        $pswrd = $request->password;

        $data = DB::table($option)->select('password')->where('Email', $login)->first();
        if ($data) {
            if ($data->password == $pswrd) {
                $user = DB::table($option)->where('password', $data->password)->first();
                if ($option == "professeurs") {
                    return redirect()->route('Professeur.show',$user->id);
                } else if ($option == "bonnes") {
                    return redirect()->route('Bonne.show',$user->id);
                } else if ($option == "bricolages") {
                    return redirect()->route('bricoloage.show',$user->id);
                } else if ($option == "nourritures") {
                    return redirect()->route('Nourriture.show',$user->id);
                }
            } else if ($data->password != $pswrd) {

                return redirect()->route('login1')->with('message', 'mot de passe est incorrect');
            }

        } else
            return redirect()->route('login1')->with('message1', "vous n'etes pas dans le service de " . '' . $option);

    }

}
