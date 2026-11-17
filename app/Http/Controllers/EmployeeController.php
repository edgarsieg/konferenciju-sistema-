<?php

namespace App\Http\Controllers;

class EmployeeController extends Controller
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
                'clients' => [
                    ['name' => 'Petras', 'surname' => 'Petraitis', 'email' => 'petras@example.com'],
                    ['name' => 'Ona', 'surname' => 'Onaitė', 'email' => 'ona@example.com'],
                ],
            ],
            2 => [
                'id' => 2,
                'title' => 'Artificial Intelligence Conference',
                'description' => 'Conference about artificial intelligence and its applications.',
                'speakers' => 'Mantas Kazlauskas',
                'date' => '2026-12-18',
                'time' => '12:00',
                'address' => 'Vilnius, Saulėtekio al. 11',
                'clients' => [
                    ['name' => 'Lukas', 'surname' => 'Lukauskas', 'email' => 'lukas@example.com'],
                ],
            ],
            3 => [
                'id' => 3,
                'title' => 'Previous Technology Conference',
                'description' => 'Previous conference example.',
                'speakers' => 'Tomas Tomas',
                'date' => '2026-09-10',
                'time' => '10:00',
                'address' => 'Vilnius, Konstitucijos pr. 1',
                'clients' => [
                    ['name' => 'Ieva', 'surname' => 'Ievaitytė', 'email' => 'ieva@example.com'],
                ],
            ],
        ];
    }

    public function index()
    {
        return view('employee.conferences.index', [
            'conferences' => $this->conferences(),
        ]);
    }

    public function show(int $id)
    {
        $conference = $this->conferences()[$id] ?? abort(404);

        return view('employee.conferences.show', compact('conference'));
    }
}
