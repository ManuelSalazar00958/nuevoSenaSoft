<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Sucursal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::all();
        $usuarios = User::select("users.*","users.id AS idUser","roles.id","roles.nombre AS nombreR")
                    ->join("roles","users.roles_id","=","roles.id")
                    ->get();
        return view('Usuarios.listUsuarios',compact('usuarios','roles'));
    }

    public function listForAdmin(){
        $roles = DB::table("roles")
                    ->whereIn("id",[3,4,5])
                    ->get();
        $usuarios = DB::select("SELECT u.*,r.nombre AS nombreR ,u.id AS idUser FROM vendedoressucursal vs INNER JOIN users u on u.id = vs.idVendedor INNER JOIN roles r on r.id = u.roles_id   WHERE vs.idSucursal IN (SELECT s.id FROM sucursales s WHERE s.tiendas_id = (SELECT id FROM tiendas t WHERE t.adminTienda_id = ?))",[Auth::id()]);
        return view('Usuarios.Admin.listUsuarios',compact('usuarios','roles'));
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
        $request->validate([
            'rol' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

            'password' => ['required'],
        ]);

        $user = new User();
        $user->name=$request->name;
        $user->roles_id=$request->rol;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);

        $user->save();

        return back()->with('mensaje', 'Usuario Registro exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->roles_id = $request->rol;
        $user->email = $request->email;
        $user->save();

        return back()->with('mensaje', 'Usuario Actualizado exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return back()->with('mensaje', 'Usuario Eliminado con exito');
    }
}
