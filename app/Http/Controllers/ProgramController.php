<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function programkarir(){
        return redirect('https://www.educastudio.com/program/karir');
    }
    public function programmagang(){
        return redirect('https://www.educastudio.com/program/magang');
    }
    public function programkunjunganindustri(){
        return redirect('https://www.educastudio.com/program/kunjungan-indistri');
    }
}
