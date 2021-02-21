<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir() {
        echo 'Karir <a href="https://www.educastudio.com/program/karir"> Klik disini</a>';
    }
    public function magang() {
        echo 'Magang <a href="https://www.educastudio.com/program/magang"> Klik disini</a>';
    }
    public function kunjunganindustri() {
        echo 'Kunjungan Industri <a href="https://www.educastudio.com/program/kunjungan-industri"> Klik disini</a>';
    }
}
