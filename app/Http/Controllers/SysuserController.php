<?php
namespace App\Http\Controllers;
use App\Sysuser;
use Illuminate\Http\Request;
class SysuserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $sysusers = Sysuser::all();
        return response()->json($sysusers);
    }
    
    public function create(Request $request)
    {
        $sysuser = new Sysuser;
        $sysuser->name= $request->name;
        $sysuser->designation= $request->designation;
        $sysuser->description= $request->description;
        $sysuser->save();
        return response()->json($sysuser);
    }
    
    public function show($id)
    {
        $sysuser = Sysuser::find($id);
        return response()->json($sysuser);
    }
    
    public function update(Request $request, $id)
    { 
        $sysuser= Sysuser::find($id);
        
        $sysuser->name = $request->input('name');
        $sysuser->price = $request->input('designation');
        $sysuser->description = $request->input('description');
        $sysuser->save();
        return response()->json($sysuser);
    }

    public function destroy($id)
    {
        $sysuser = Sysuser::find($id);
        $sysuser->delete();
        return response()->json('Sysuser removed successfully');
    }
}