<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class JournalController extends Controller
{
    public function index()
    {
        $client = new Client();

        $data = $client->get('journal.test/api/journals')->getBody();

        $journals = json_decode($data, true);

        return view('journals.index', compact('journals'));
    }

    public function show($id)
    {
        $cores = [
            'Title' => 'title',
            'Creator' => 'creator',
            'Subject' => 'subject',
            'Publisher' => 'publisher',
            'Contributor' => 'contributor',
            'Date' => 'date',
            'Identifier' => 'identifier',
            'Language' => 'language',
        ];

        $client = new Client();

        $data = $client->get('journal.test/api/journals/'.$id)->getBody();

        $journal = json_decode($data, true);

        return view('journals.show', compact('cores', 'journal'));
    }

    public function edit($id)
    {
        $cores = [
            'Title' => 'title',
            'Creator' => 'creator',
            'Subject' => 'subject',
            'Publisher' => 'publisher',
            'Contributor' => 'contributor',
            'Date' => 'date',
            'Identifier' => 'identifier',
            'Language' => 'language',
        ];

        $client = new Client();

        $data = $client->get('journal.test/api/journals/'.$id)->getBody();

        $journal = json_decode($data, true);

        return view('journals.edit', compact('cores', 'journal'));
    }

    public function update(Request $request, $id)
    {
        $client = new Client();

        $result = $client->post('journal.test/api/journals/'.$id, [
            'form_params' => $request->all()
        ]);

        return redirect()->route('journals.show', $id);
    }
}
