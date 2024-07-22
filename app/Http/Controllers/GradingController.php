<?php 

namespace App\Http\Controllers;

use App\Models\Grading;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function gradingList($teacherId = null)
    {
        if($teacherId){

            $newGrading = Grading::where('teacher_id', $teacherId)
            ->get();        
            
            return view('grading.list-grading', ['newGrading' => $newGrading, 'teacherId' => $teacherId]);

        }
        else{

            $newGrading = Grading::all();

            return view('grading.list-grading', ['newGrading' => $newGrading]);
        }

    }

    public function show($studentId)
    {
        if (Auth::id() != $studentId) {
            abort(403, 'Unauthorized access');
        }

        $studentGrades = Grading::whereRaw('CAST(student_id AS UNSIGNED) = ?', [$studentId])
        ->get();

        return view('grading.grading-show', compact('studentGrades'));
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

    public function store($teacherId, Request $request)
    {
        $rules = [
            'student_id' => 'required|string|max:255',
            'teacher_id' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'module_name' => 'required|string|max:255',
            'grading' => 'required',
            'semester' => 'required',
        ];

        $request->validate($rules);

        $newGrading = new Grading();
        $newGrading->student_id = $request->input('student_id');
        $newGrading->teacher_id = $request->input('teacher_id');
        $newGrading->full_name = $request->input('full_name');
        $newGrading->module_name = $request->input('module_name');
        $newGrading->grading = $request->input('grading');
        $newGrading->semester = $request->input('semester');
        $newGrading->save();

        return redirect()->route('grading.list-grading', ['teacherId' => $teacherId])->with('success', 'Grading created successfully.');
    }

    public function update(Request $request, $id)
{
    logger('Entering update method');

    $request->validate([
        'student_id' => 'required|string|max:255',
        'teacher_id' => 'required|string|max:255',
        'full_name' => 'required|string|max:255',
        'module_name' => 'required|string|max:255',
        'grading' => 'required',
        'semester' => 'required',
    ]);

    logger('Validation passed', $request->all());

    $newGrading = Grading::findOrFail($id);
    logger('Found grading record', ['grading' => $newGrading]);

    $newGrading->update($request->all());
    logger('Grading record updated');

    return redirect()->route('grading.list-grading')->with('success', 'Grading updated successfully.');
}

    public function destroy($id)
    {
        $newGrading = Grading::findOrFail($id);
        $newGrading->delete();

        return redirect()->route('grading.list-grading')->with('success', 'Grading deleted successfully.');
    }
}
