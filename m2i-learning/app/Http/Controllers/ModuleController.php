<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Status;
use Illuminate\Http\Request;

class ModuleController extends Controller
{

    /**
     * GET: all
     */
    public function index(): string
    {
        return Module::all()->toJson();
    }

    /**
     * POST: status
     */

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required|max:100', 'start', 'end'=>'nullable']);

        return Module::create($validated);
    }

    /**
     * GET: by id
     */
    public function show(string $id)
    {
        return Module::findOrFail($id)->toJson();
    }

    /**
     * PUT/PATCH ?
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(['name' => 'required|max:100', 'start' => '', 'end'=>'nullable']);

        $status = Module::findOrFail($id);
        $status->update($validated);
        return $status;
    }

    /**
     * DELETE:
     */
    public function destroy(string $id): bool|string
    {
        Module::findOrFail($id)->delete();
        return json_encode(['status' => 'ok']);
    }
}
