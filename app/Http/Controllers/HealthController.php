<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HealthController extends Controller
{
    public function index()
    {
        $checks = ['app' => 'ok', 'database' => 'ok'];

        try {
            DB::connection()->getPdo();
        } catch (\Throwable $e) {
            $checks['database'] = 'down';
        }

        $healthy = !in_array('down', $checks, true);

        return response()->json([
            'status' => $healthy ? 'ok' : 'degraded',
            'checks' => $checks,
            'timestamp' => now()->toIso8601String(),
        ], $healthy ? 200 : 503);
    }
}
