<?php

namespace App\Http\Controllers;

use App\Dossier;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DossierController extends Controller
{
    public function redirect(Request $request)
    {

        $exist = true;
        $url = $this->getUrl($request->code);
        return $url ? Redirect::to('http://' . $url . '.cdma-solutions.ma') : Redirect::back();
    }

    public function test(Request $request)
    {
        $code = $request->matricule;
        $expert = substr($code, 0, 2);
        $db = '';
    }
    public function client(Request $request)
    {
        $flag = false;
        $state = '';

        $dossier = $this->getDossier($this->getDb(substr($request->code, 0, 2)), $request->code);

        if (is_null($dossier))
            return view('client', compact('flag', 'state', 'dossier', 'msg'));

        if (!$this->checkMatricule($request->matricule, $dossier->matricule))
            return view('client', compact('flag', 'state', 'dossier'));

        if (!$dossier->date_expertise)
            return view('client', compact('flag', 'state', 'dossier'))->with('msg', 'you dont have access');

        return $this->getStatus($dossier);
    }




    public function getUrl($code)
    {
        $url = null;
        switch (strtolower($code)) {
            case 'ca':
                $url = 'cabek';
                break;
            case 'ka':
                $url = 'kamili';
                break;
            case 'ai':
                $url = 'aissaoui';
                break;
            default:
                $url = null;
                break;
        }
        return $url;
    }

    protected function checkMatricule($matricule, $Dmatricule)
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]/', '', trim($matricule)))  == strtolower(preg_replace('/[^a-zA-Z0-9]/', '', trim($Dmatricule)));
    }

    protected function getDossier($db, $code)
    {
        return DB::connection($db)->table('dossier')->where('code_dossier', $code)->first();
    }

    public  function getDb($expert)
    {
        $db = '';
        switch ($expert) {
            case '01':
                $db = 'goexpert_hassane';
                break;
            case '02':
                $db = 'goexpert_backoffice';
                break;
        }
        return $db;
    }

    /**
     * @param $dossier
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getStatus($dossier)
    {
        $flag = true;
        $state = 'second';

        if ($dossier->date_devis)
            $state = $this->getState($dossier);

        return view('client', compact('flag', 'state', 'dossier'));
    }

    /**
     * @param $dossier
     * @return string
     */
    public function getState($dossier): string
    {
        if ($dossier->date_accord) {
            if ($dossier->date_rapport && $dossier->date_apres && $dossier->date_facture) {
                $state = 'fifth';
            } else {
                $state = 'fourth';
            }
        } else {
            $state = 'third';
        }
        return $state;
    }
}
