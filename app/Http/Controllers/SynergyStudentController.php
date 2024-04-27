<?php

namespace App\Http\Controllers;

use App\Models\SynergyStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SynergyStudentController extends Controller
{

    public function index()
    {
        $students=SynergyStudent::all();
        return view('auth.index', compact('students'));
    }


    public function create()
    {
        return view('auth.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',

            'password' => 'required',

        ]);






        SynergyStudent::create($request->all());

        return redirect()->route('register.index')->with('message', 'Студент успешно добавлен');
    }
    public function edit(SynergyStudent $student)
    {
        return view('auth.edit',compact('student'));

    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
        ]);

        $student = SynergyStudent::find($id);
        $student->update($request->all());

        return redirect()->route('auth.index')->with('message', 'Студент успешно обновлен');
    }

    public function destroy(SynergyStudent $student)
    {

        $student->delete();
        return redirect()->route('auth.index');
    }




}
