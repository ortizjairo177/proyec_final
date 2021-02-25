<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use App\Mail\Contactus;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
     

    public function store(Request $request)
    {             
      
        $contactenos = $request->validate([
            'name' => ['required', 'string', 'max:25' ],
            'email' => ['required', 'email' ],
            'celular' => ['required', 'integer' ],
            'description' => ['required', 'string' ]   
             
         ]);
             
          Mail::to('ortizjairo1777@gmail.com')->send(new Contactus($contactenos));
          
         /*  return back()->with('success','Product successfully added.'); */
          
          return view('contactus.index');    
          
   }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    
     public function show(Contact $contact)
    
    {
        
        //
     } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }

    /* public function contactar(Contac $contactenos) 
    {
   
      return view('contatus.create', compact('contactenos'));

    }

    public function guardar(Request $request){
          
        $request->validate([
            'name' => ['required', 'string', 'max:25' ],
            'email' => ['required', 'string' ],
            'celular' => ['required', 'string' ],
            'description' => ['required', 'string' ]   
             
         ]); */
       
         /*  $correo = $request->email;
          $contactoinscrito = $request->contactenos;
          $informacion = contactenos;

          $contactar = new Contactions;
          $contactar->name = $request ->get('name');
          $contactar->email = $request ->get('email');
          $contactar->celular = $request ->get('celular');
          $contactar->description = $request ->get('description'); */


         /* $contactar ->name         = $request ->name,
          $contactar ->email        = $request ->email,
          $contactar ->celular      = $request ->celular,
          $contactar ->description  = $request ->description, */
           
         /*  $contactar->save();

        $receivers = Receiver::pluck('email');
        Mail::to(MAIL_FROM_ADDRESS)->send(new Contactus($contactenos)); */
        
        /*  return redirect()->route('guardar')
              ->with('success', 'Se ha envido el registro existosamente'); */
        /* $data = ['name' =>'Jairo' ];
        Mail::to('ortizjairo17@gmail.com')->send(new Contactus);
 */
    
    
}
