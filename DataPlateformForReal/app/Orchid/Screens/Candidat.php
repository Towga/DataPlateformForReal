<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;

class Candidat extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Candidat $candidat): array
    {
        return [
            'candidat' => $candidat,
        ];
    }


    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Candidat';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('candidat.nomNaissance')
                .title('Nom de Naissance'),
                Input::make('csv_file')
                .type('file')
                .title('Import CSV')
                // Add other fields here
            ])
        ];
    }
    public function save(Candidat $candidat, Request $request)
    {
        $validatedData = $request->validate([
            'candidat.nomNaissance' => 'required|string|max:255',
            // Add other validation rules here
        ]);

        $candidat->fill($validatedData)->save();

        Alert::info('Candidat has been saved.');

        return redirect()->route('platform.candidats');
    }
    public function importCsv(Request $request)
    {
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));

        foreach ($data as $row) {
            // Insert or update record in the database
            Candidat::create([
                'nomNaissance' => $row[0],
                // Map other fields accordingly
            ]);
        }

        Alert::info('Data imported successfully.');
        return back();
    }



}
