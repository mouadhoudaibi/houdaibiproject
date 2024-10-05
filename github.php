<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class github extends Controller
{
    public function web (Request $req){
        $req->validate(
            [
                'nom' => 'required',
                'prenom' => 'required',
                'mail' => 'email:strict',
                'mdp' => 'required|string|min:8',
                // 'confirmation'=>'required|confirmed'
    
    
            ],
            [
                'nom.required'=>'le champ est obligatiore',
                'prenom.required'=>'le champ est obligatiore',
                'mail.email'=>'le champ est obligatiore',
                'mdp.required'=>'le champ est obligatiore',
                'mdp.min'=>'le mot de passe doit etre superieur de 8 chiffre',
                // 'confirmation.confirmed'=>'La confirmation du champ mot de pase ne correspond pas',
            ]
            );
        return view ('/github3','affichage')->with('data',$req);
        
    }
    
}
