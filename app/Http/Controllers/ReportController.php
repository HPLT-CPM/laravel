<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::all();
        return view('report.index', compact('reports'));
    }
    public function create(){
        return view('report.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'car_number' => 'string',
            'description' => 'string',
        ]);

        Report::create($data);
        return redirect()->route('reports.index');
    }
    public function edit(Report $report){
        return view('report.edit', compact('report'));
    }
    public function update(Request $request, Report $report){
        $data = $request->validate([
            'car_number' => 'string|required|max:20',
            'description' => 'string|required|max:500',
        ]);
        $report->update($data);
        return redirect()->route('reports.index');
    }
    public function destroy(Report $report){
        $report->delete();
        return redirect()->back();
    }
}



