<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\RayonStoreRequest;
use App\Http\Requests\RayonUpdateRequest;

class RayonController extends Controller
{
    public function index(): View
    {
        $rayons = Rayon::latest()->paginate(5);

        return view('rayons.index', compact('rayons'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('rayons.create');
    }


    public function store(RayonStoreRequest $request)
    {
        Rayon::create($request->validated());
        return redirect()->route('rayons.index')
            ->with('success', 'Rayon berhasil ditambahkan.');
    }


    public function show(Rayon $rayon)
    {
        return view('rayons.show', compact('rayon'));
    }


    public function edit(Rayon $rayon): View
    {
        return view('rayons.edit', compact('rayon'));
    }


    public function update(RayonUpdateRequest $request, Rayon $rayon)
    {
        $rayon->update($request->validated());
        return redirect()->route('rayons.index')
            ->with('success', 'Rayon berhasil diperbarui.');
    }


    public function destroy(Rayon $rayon)
    {
        $rayon->delete();
        return redirect()->route('rayons.index')
            ->with('success', 'Rayon berhasil dihapus.');
    }
}
