<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all(); // Fetches all users
        return view('admin/gebruikersbeheer', compact('users')); // Correctly passing the variable
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin/create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'GOARG_langNr' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'role' => 'required|string|in:admin,besteller,budgethouder,crediteur',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create user
        $user = User::create([
            'GOARG_langNr' => $validatedData['GOARG_langNr'],
            'email' => $validatedData['email'],
            'role' => $validatedData['role'],
            'password' => Hash::make($validatedData['password']), // Add the 'confirmed' rule for password confirmation
            // Add more fields as needed
        ]);

        // Redirect
        return redirect()->route('gebruikersbeheer')->with('success', 'User added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('layouts/userpopup');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'id' => 'required|exists:users,id',
            'role' => 'required|string|max:255',
            'GOARG_langNr' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $user = User::findOrFail($request->id);
        $user->role = $request->role;
        $user->GOARG_langNr = $request->GOARG_langNr;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
//        $user->delete();
//
//        // Optionally, you can redirect back with a success message
//        return redirect()->route('users.index')->with('s    uccess', 'User deleted successfully.');
    }
    public function delete($id) {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            // Redirect or return success response
        } else {
            // Handle user not found
        }
    }
}
