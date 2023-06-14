<?php

namespace App\Http\Controllers;

//Importando modelos
use App\Models\User;
use App\Models\Tema;
use App\Models\Participante;
use App\Models\eventoParticipante;
use App\Models\Expositor;
use App\Models\Contenido;
use App\Models\Controlador;
use App\Models\Evento;
use App\Models\Ambiente;
use App\Models\Auditoria;
use App\Models\Infraestructura;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function adminHome()
    {
        
        return view('/admin/home');
    }

}
