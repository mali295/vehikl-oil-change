<?php

namespace App\Http\Controllers;

use App\Models\OilChangeCheck;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OilChangeCheckController extends Controller
{
    public function create()
    {
        return view('oil-check.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'current_odometer' => ['required', 'integer', 'min:0', 'gte:previous_oil_change_odometer'],
            'previous_oil_change_date' => ['required', 'date', 'before:today'],
            'previous_oil_change_odometer' => ['required', 'integer', 'min:0'],
        ]);

        $kilometersDriven = $validated['current_odometer'] - $validated['previous_oil_change_odometer'];

        $isDue = $kilometersDriven > 5000 ||
            Carbon::parse($validated['previous_oil_change_date'])->lt(now()->subMonths(6));

        $oilChangeCheck = OilChangeCheck::create([
            'current_odometer' => $validated['current_odometer'],
            'previous_oil_change_date' => $validated['previous_oil_change_date'],
            'previous_oil_change_odometer' => $validated['previous_oil_change_odometer'],
            'is_due' => $isDue,
        ]);

        return redirect()->route('oil-check.show', $oilChangeCheck->id);
    }

    public function show($id)
    {
        $oilChangeCheck = OilChangeCheck::findOrFail($id);

        $kilometersDriven = $oilChangeCheck->current_odometer - $oilChangeCheck->previous_oil_change_odometer;

        return view('oil-check.show', compact('oilChangeCheck', 'kilometersDriven'));
    }
}