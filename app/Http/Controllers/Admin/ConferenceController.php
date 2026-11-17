<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;

class ConferenceController extends Controller
{
    private function conferences(): array
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Web Development Conference',
                'description' => 'Conference about modern web development technologies.',
                'speakers' => 'Jonas Jonaitis, Tomas Petrauskas',
                'date' => '2026-12-10',
                'time' => '10:00',
                'address' => 'Kaunas, Studentų g. 50',
            ],
            2 => [
                'id' => 2,
                'title' => 'Artificial Intelligence Conference',
                'description' => 'Conference about artificial intelligence and its applications.',
                'speakers' => 'Mantas Kazlauskas',
                'date' => '2026-12-18',
                'time' => '12:00',
                'address' => 'Vilnius, Saulėtekio al. 11',
            ],
            3 => [
                'id' => 3,
                'title' => 'Previous Technology Conference',
                'description' => 'Previous conference example.',
                'speakers' => 'Tomas Tomas',
                'date' => '2026-09-10',
                'time' => '10:00',
                'address' => 'Vilnius, Konstitucijos pr. 1',
            ],
        ];
    }

    public function index()
    {
        return view('admin.conferences.index', [
            'conferences' => $this->conferences(),
        ]);
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(ConferenceRequest $request)
    {
        $request->validated();

        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('messages.conference_created'));
    }

    public function show(int $id)
    {
        $conference = $this->conferences()[$id] ?? abort(404);

        return view('admin.conferences.show', compact('conference'));
    }

    public function edit(int $id)
    {
        $conference = $this->conferences()[$id] ?? abort(404);

        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(ConferenceRequest $request, int $id)
    {
        $this->conferences()[$id] ?? abort(404);
        $request->validated();

        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('messages.conference_updated'));
    }

    public function destroy(int $id)
    {
        $conference = $this->conferences()[$id] ?? abort(404);

        if ($conference['date'] < now()->toDateString()) {
            return redirect()
                ->route('admin.conferences.index')
                ->with('error', __('messages.past_conference_delete_error'));
        }

        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('messages.conference_deleted'));
    }
}
