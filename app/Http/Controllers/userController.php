<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\certificates;
use Illuminate\Http\Request;
use Session;

class userController extends Controller
{
    public function profileEdit($id)
    {
        $user = user::where('id', '=', $id)->get();


        return view('editProfile', ['user' => $user]);

    }
    public function editConirmed(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email' ,
            'sex' => 'required',
            'blood' => 'required',
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->blood = $request->blood;
        $user->save();
        return redirect('dashboard')->with('success', "you have edited your profile.");
    }
    public function addBs($id)
    {
        $user = User::find($id);
        $certificateData =
            [
                'name' => 'bs',
            ];

        $user->certificates()->create($certificateData);
        return back()->with('success', 'the certifcate has added.');


    }
    public function deleteBs($id)
    {
        $user = User::find($id);
       

        $user->certificates()->where('name', 'bs')->delete();
        return back()->with('success', 'the certifcate has added.');


    }
    public function deleteMs($id)
    {
        $user = User::find($id);
       

        $user->certificates()->where('name', 'Ms')->delete();
        return back()->with('success', 'the certifcate has added.');


    }
    public function deleteMa($id)
    {
        $user = User::find($id);
       

        $user->certificates()->where('name', 'ma')->delete();
        return back()->with('success', 'the certifcate has added.');


    }
    public function deletePhd($id)
    {
        $user = User::find($id);
       

        $user->certificates()->where('name', 'phd')->delete();
        return back()->with('success', 'the certifcate has added.');


    }

    public function addPhd($id)
    {
        $user = User::find($id);
        $certificateData =
            [
                'name' => 'phd',
            ];

        $user->certificates()->create($certificateData);
        return back()->with('success', 'the certifcate has added.');


    }
    public function addms($id)
    {
        $user = User::find($id);
        $certificateData =
            [
                'name' => 'ms',
            ];

        $user->certificates()->create($certificateData);
        return back()->with('success', 'the certifcate has added.');


    }
    public function addMa($id)
    {
        $user = User::find($id);

        $certificateName = 'ma'; // Set the desired name dynamically

        $certificateData = [
            'name' => $certificateName
        ];

        $user->certificates()->create($certificateData);

        return back()->with('success', 'The certificate has been added.');


    }
 public function returnCertificates($id){
    $user = User::find($id);
    $certificates = $user->certificates;

    $certificateNames = [];
    foreach ($certificates as $certificate) {
        $certificateNames[] = $certificate->name;
    }

    return $certificateNames;

 }
 public function dashboard(){
    $data=array();
    $certificates=array();
    if(Session::has('loginid')){
        $data=User::where('id','=',Session::get('loginid'))->first();
        $certificates=$this->returnCertificates(Session::get('loginid'));

    }
    return view('dashboard',compact('data','certificates'));

   
}

}