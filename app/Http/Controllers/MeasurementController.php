<?php

namespace App\Http\Controllers;

use App\Measurement;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        if (($request->weight==null || strlen(trim($request->weight))==0) && ($request->height==null  || strlen(trim($request->height))==0))
        {
                return redirect()
                ->route('users.activity',Auth::user())
                ->withErrors(['userMeasurement'=>"No se puede guardar una solicitud vacia."]);
        }

        $measurement = new measurement;
        $measurement->userMeasurement = Auth::user()->id;
        $measurement->weight = $request->weight;
        $measurement->height = $request->height;

        $measurement->save();

        $actualMeasurement = Measurement::orderby('updated_at', 'desc')->where("userMeasurement",Auth::user()->id)->first();
        
        return view('users.show', compact('user', 'actualMeasurement'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function show(Measurement $measurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function edit(Measurement $measurement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Measurement $measurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Measurement $measurement)
    {
        //
    }

    public function activity(User $user)
    {
        $measurements = Measurement::orderby("id","desc")->where("userMeasurement",$user->id)->paginate(10);

        $actualMeasurement = Measurement::orderby('updated_at', 'desc')->where("userMeasurement",$user->id)->first();

        return view('users.activity', compact('measurements','actualMeasurement','user'));
    }

    public function imc(User $user)
    {
        $actualMeasurement = Measurement::orderby('updated_at', 'desc')->where("userMeasurement",$user->id)->first();
        
        $masaCorporal=null;

        return view('users.imc', compact('user', 'actualMeasurement', 'masaCorporal'));
    }

    public function calculadoraMasa(Request $request, User $user)
    {
        
        if (isset($_POST['englishSystem'])) {
            if (($request->englishSystemWeight==null || strlen(trim($request->englishSystemWeight))==0) || ($request->englishSystemHeight==null  || strlen(trim($request->englishSystemHeight))==0))
            {
                return redirect()
                ->route('users.imc',$user)
                ->withErrors(['englishSystem'=>"Por favor introduce el peso y la altura para calcular el indice de masa corporal."]);
            }

            if ($request->englishSystemWeight==0){
                return redirect()
                ->route('users.imc',$user)
                ->withErrors(['englishSystem'=>"Introduzca un peso real."]);
            }
            if ($request->englishSystemHeight==0){
                return redirect()
                ->route('users.imc',$user)
                ->withErrors(['englishSystem'=>"Introduzca una altura real."]);
            }

            $masaCorporal=($request->englishSystemWeight/pow($request->englishSystemHeight,2))*703;
        } else {
            if (($request->metricSystemWeight==null || strlen(trim($request->metricSystemWeight))==0) || ($request->metricSystemHeight==null  || strlen(trim($request->metricSystemHeight))==0))
            {
                return redirect()
                ->route('users.imc',$user)
                ->withErrors(['metricSystem'=>"Por favor introduce el peso y la altura para calcular el indice de masa corporal."]);
            }

            if ($request->metricSystemWeight==0){
                return redirect()
                ->route('users.imc',$user)
                ->withErrors(['metricSystem'=>"Introduzca un peso real."]);
            }
            if ($request->metricSystemHeight==0){
                return redirect()
                ->route('users.imc',$user)
                ->withErrors(['metricSystem'=>"Introduzca una altura real."]);
            }

            $masaCorporal=($request->metricSystemWeight/pow($request->metricSystemHeight,2));
        }

        $actualMeasurement = Measurement::orderby('updated_at', 'desc')->where("userMeasurement",$user->id)->first();

        return view('users.imc', compact('user', 'actualMeasurement', 'masaCorporal'));
        
    }
}
