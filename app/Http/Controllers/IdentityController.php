<?php

namespace App\Http\Controllers;

use App\Identity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'identity' => Identity::all(),
        ];

        return view('identity.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('identity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first'          => 'required',
            'last'          => 'required',
            'phone'         => 'required|numeric',
            'address'     => 'required',
            'email'     => 'required|email',
        ]);


        $identity = new Identity();
        $identity->first       =$request->first;
        $identity->last       =$request->last;
        $identity->email      =$request->email;
        $identity->address  =$request->address;
        $identity->phone = $request->phone;

        

        $identity->save();




        return redirect('identities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Identity  $identity
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Identity  $identity
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data = [
            'identity' => Identity::find($id),
        ];

        return view('identity.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Identity  $identity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first'          => 'required',
            'last'          => 'required',
            'phone'         => 'required|numeric',
            'address'     => 'required',
            'email'     => 'required|email',
        ]);


        $identity = Identity::find($id);
        $identity->first       =$request->first;
        $identity->last       =$request->last;
        $identity->email      =$request->email;
        $identity->address  =$request->address;
        $identity->phone = $request->phone;



        $identity->save();

        return redirect('identities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Identity  $identity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $identity = Identity::find($id);
        $identity->delete();

        return redirect('identities');
    }
}
