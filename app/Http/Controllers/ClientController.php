<?php

namespace App\Http\Controllers;

class ClientController extends Controller
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
                'title' => 'Cyber Security Conference',
                'description' => 'Conference about cyber security and data protection.',
                'speakers' => 'Andrius Vaitkus',
                'date' => '2027-01-15',
                'time' => '09:30',
                'address' => 'Klaipėda, Bijūnų g. 17',
            ],
        ];
    }

    public function index()
    {
        return view('client.conferences.index', [
            'conferences' => $this->conferences(),
        ]);
    }

    public function show(int $id)
    {
        $conference = $this->conferences()[$id] ?? abort(404);

        return view('client.conferences.show', compact('conference'));
    }

    public function register(int $id)
    {
        $conference = $this->conferences()[$id] ?? abort(404);

        return redirect()
            ->route('client.conferences.show', $conference['id'])
            ->with('success', __('messages.registration_success'));
    }
}
