<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserResource::collection(User::paginate(10));
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if($user->save()){
            return new UserResource($user);
        } 

        return response()->json([
            'message' => 'Internal server error'
        ], status: 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new UserResource($user = User::findOrFail($id));
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
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['string'],
        ]);

        $user = User::findOrFail($id);
        $user->name = isset($request->name)? $request->name : $user->name;
        $user->email = isset($request->email)? $request->email : $user->email;
        $user->password = isset($request->password)? $request->password : $user->password;

        if($user->save()){
            return new UserResource($user);
        }

        return response()->json([
            'message' => 'Internal server error'
        ], status: 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrDail($id); 

        if($user->delete()){
            return new UserResource($user);
        }

        return response()->json([
            'message' => 'Internal server error'
        ], status: 500);
    }

    /**
     * Display a count of every email domain in database.
     *
     * @return \Illuminate\Http\Response
     */
    public function domains()
    {
        $emails = User::all()->pluck('email');
        $result = "";
        $domain = array();

        //get domains
        for ($i=0; $i < count($emails); $i++) {
            preg_match("/(@[\w-]+.)+[\w-]{2,4}$/", $emails[$i], $domain);
            $domain = substr($domain[0], 1);
            if(isset($domains[$domain])){
                $domains[$domain] = $domains[$domain] + 1;
            } else {
                $domains[$domain] = 1;
            }

        }

        //make string
        foreach ($domains as $key => $value) {
           $result = $result . $key . ": " . $value . "<br>";
        }

        if($result != ""){
            return $result;
        }

        return response()->json([
            'message' => 'No data found'
        ], status: 200);

    }
}
