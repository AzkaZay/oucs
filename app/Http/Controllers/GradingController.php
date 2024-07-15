<?php 

namespace App\Http\Controllers;

use App\Models\Grading;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradingController extends Controller
{
    public function indexGrading()
    {
        $newGrading = Grading::all();
        return view('grading.add-grading', ['newGrading' => $newGrading]);
    }

    public function editGrading($id)
    {
        $newGrading = Grading::findOrFail($id);
        return view('grading.edit-grading', compact('newGrading'));
    }

    public function gradingList()
    {
        $newGrading = Grading::all();
        return view('grading.list-grading', ['newGrading' => $newGrading]);
    }

    public function show($id)
    {
        $newGrading = Grading::findOrFail($id);
        return view('grading.grading-show', compact('newGrading'));
    }

    public function gradingDelete(Request $request)
    {
        DB::beginTransaction();
        try {
            Grading::destroy($request->id);
            DB::commit();
            Toastr::success('Deleted record successfully :)', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Deleted record failed :)', 'Error');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $rules = [
            'student_id' => 'required|string|max:255',
            'module_name' => 'required|string|max:255',
            'grading' => 'required',
            'semester' => 'required',
        ];

        $request->validate($rules);

        $newGrading = new Grading();
        $newGrading->student_id = $request->input('student_id');
        $newGrading->module_name = $request->input('module_name');
        $newGrading->grading = $request->input('grading');
        $newGrading->semester = $request->input('semester');
        $newGrading->save();

        return redirect()->route('grading.list-grading')->with('success', 'Grading created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required|string|max:255',
            'module_name' => 'required|string|max:255',
            'grading' => 'required',
            'semester' => 'required',
        ]);

        $newGrading = Grading::findOrFail($id);
        $newGrading->update($request->all());

        return redirect()->route('grading.list-grading')->with('success', 'Grading updated successfully.');
    }

    public function destroy($id)
    {
        $newGrading = Grading::findOrFail($id);
        $newGrading->delete();

        return redirect()->route('grading.list-grading')->with('success', 'Grading deleted successfully.');
    }
}
