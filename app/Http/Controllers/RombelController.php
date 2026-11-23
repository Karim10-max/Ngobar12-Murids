<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\RombelStoreRequest;
use App\Http\Requests\RombelUpdateRequest;

class RombelController extends Controller
{
    public function index(): View
    {
        $rombels = Rombel::latest()->paginate(5);

        return view('rombels.index', compact('rombels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('rombels.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama_rombel' => 'required|string|max:255',
        ]);

        Rombel::create($validated);

        return redirect()->route('rombels.index')
            ->with('success', 'Rombel berhasil ditambahkan.');
    }

    public function show(Rombel $rombel): View
    {
        return view('rombels.show', compact('rombel'));
    }

    public function edit(Rombel $rombel): View
    {
        return view('rombels.edit', compact('rombel'));
    }

    public function update(Request $request, Rombel $rombel): RedirectResponse
    {
        $validated = $request->validate([
            'nama_rombel' => 'required|string|max:255',
        ]);

        $rombel->update($validated);

        return redirect()->route('rombels.index')
            ->with('success', 'Rombel berhasil diperbarui.');
    }

    public function destroy(Rombel $rombel): RedirectResponse
    {
        $rombel->delete();

        return redirect()->route('rombels.index')
            ->with('success', 'Rombel berhasil dihapus.');
    }
}
