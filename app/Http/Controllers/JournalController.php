<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class JournalController extends Controller
{
    public function index()
    {
        $client = new Client();

        $response = $client->get('journal.test/api/journals')->getBody();

        $journals = json_decode($response, true);

        return view('journals.index', compact('journals'));
    }

    public function create()
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

        return view('journals.create', compact('cores'));
    }

    public function store(Request $request)
    {
        $client = new Client();

        $response = $client->post('journal.test/api/journals/', [
            'form_params' => $request->all()
        ])->getBody()->getContents();

        $journal = json_decode($response, true);

        return redirect()->route('journals.show', $journal['id']);
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

        $response = $client->get('journal.test/api/journals/'.$id)->getBody();

        $journal = json_decode($response, true);

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

        $response = $client->get('journal.test/api/journals/'.$id)->getBody();

        $journal = json_decode($response, true);

        return view('journals.edit', compact('cores', 'journal'));
    }

    public function update(Request $request, $id)
    {
        $client = new Client();

        $response = $client->post('journal.test/api/journals/'.$id, [
            'form_params' => $request->all()
        ]);

        return redirect()->route('journals.show', $id);
    }

    public function destroy(Request $request, $id)
    {
        $client = new Client();

        $response = $client->post('journal.test/api/journals/'.$id, [
            'form_params' => $request->all()
        ]);

        return redirect()->route('journals.index');
    }
}
