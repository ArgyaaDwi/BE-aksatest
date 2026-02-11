<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Division\IndexDivisionRequest;
use App\Models\Division;

class DivisionController extends Controller
{
    public function index(IndexDivisionRequest $request)
    {
        $query = Division::query();

        if ($request->filled('name')) {
            $query->where('name', 'LIKE', "%{$request->name}%");
        }

        $divisions = $query->paginate($request->input('per_page', 10));

        return response()->json([
            'status' => 'success',
            'message' => 'Data divisi berhasil diambil',
            'data' => [
                'divisions' => $divisions->items(),
            ],
            'pagination' => [
                'current_page' => $divisions->currentPage(),
                'last_page' => $divisions->lastPage(),
                'per_page' => $divisions->perPage(),
                'total' => $divisions->total(),
            ],
        ]);
    }
    public function count()
    {
        $count = Division::count();
        return response()->json([
            'status' => 'success',
            'data' => [
                'count' => $count
            ]
        ]);
    }
}
