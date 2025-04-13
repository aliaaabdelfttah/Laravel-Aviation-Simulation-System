public function startSimulation(Request $request)
{
    $flight = Flight::create([
        'pilot_id' => auth()->id(),
        'origin' => $request->origin,
        'destination' => $request->destination,
        'status' => 'in_progress',
        'started_at' => now(),
    ]);

    return response()->json([
        'message' => 'Simulation started',
        'flight_id' => $flight->id,
    ]);
}
