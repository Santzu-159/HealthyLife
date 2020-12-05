<?php

namespace App\Http\Controllers;

use App\Diet;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public static function listDiets($categoria)
    {
        $diets = Diet::orderBy('name')
        ->where('category', $categoria)
        ->paginate(5);

        return $diets;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function show(Diet $diet)
    {
        if(!Auth::check()){
            $fav=true;
        }else{
            $fav = DB::table('user_diet')->select('*')->where('user_id',Auth::user()->id)->where('diet_id',$diet->id)->get();
            if (count($fav)==0) {
                $fav=false;
            } else {
                $fav=true;
            }    
        }
        

        return view('diets.show', compact('diet', 'fav'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function edit(Diet $diet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diet $diet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diet  $diet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diet $diet)
    {
        $diet->delete();

        return redirect()->route('users.favoritediets', Auth::user());
    }

    public function recommended(User $user)
    {
        $diet = Diet::inRandomOrder()->get();

        $user->update(['diet_id'=>$diet[0]->id]);

        $user->save();

        return view('users.show', compact('user'));
    }

    public function addtofavorities(Diet $diet)
    {
        DB::table('user_diet')->insert([
            'user_id'=>Auth::user()->id,
            'diet_id'=>$diet->id,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" =>  \Carbon\Carbon::now(),
        ]);

        $fav=true;

        return view('diets.show', compact('diet','fav'));
    }

    public function favorities(User $user)
    {
        $favoriteDiets = DB::table('user_diet')->select('diet_id')->where('user_id',$user->id)->get();
        
        $ids=[];
        
        foreach($favoriteDiets as $diet){
            $ids[]=$diet->diet_id;
        }

        $diets=Diet::whereIn('id' ,$ids)->paginate(5);

        return view('users.favoritediets', compact('user', 'diets'));
    }
}
