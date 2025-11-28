<?php

namespace App\Http\Controllers\Employee;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the employee profile page
     */
    public function profilePage()
    {
        $employee = Auth::user();
        return view('employee.profile.profile-page', compact('employee'));
    }
    public function resetPasswordPage()
    {
        return view('employee.profile.password-reset-page');
    }

    /**
     * employee profile update
     */
    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' .$id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        $employee = User::findOrFail($id);

        if($request->hasFile('image')) {
            
            if($employee->image) {
                Storage::disk('public')->delete($employee->image);
            }

            $imagePath = $request->file('image')->store('employees', 'public');
            $data['image'] = $imagePath;
        }
        User::where('id', $id)->update($data);

        return redirect()->route('employee.profile')->with('success', 'Employee updated successfully');
    }
}
