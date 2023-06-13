<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Carbon\Carbon;
use App\Mail\DemoEmail;

use App\Models\User;
use App\Models\Expositor;
use App\Models\Evento;
use App\Models\Tema;
use App\Models\Controlador;
use App\Models\Certificado;
use App\Models\Participante;
use App\Models\Ambiente;
use App\Models\Asistencia;
use App\Models\Infraestructura;
use App\Models\Reserva;
use App\Models\eventoParticipante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;



class ControladorController extends Controller
{

}
