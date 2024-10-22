<?php

namespace App\Services;

use App\Models\Contact;

class ContactsService
{
    public function list()
    {
        return Contact::paginate();
    }

    public function add(array $data)
    {
        return Contact::query()->create(['name' => $data['name']]);
    }

    public function get(int $id)
    {
        return Contact::findOrFail($id);
    }

    public function findByName(string $name)
    {
        return Contact::where('name', 'LIKE', "%$name%")->get();
    }

    public function update(int $id, array $data)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($data);

        return $contact;
    }

    public function delete(int $id)
    {
        return Contact::destroy($id);
    }
}
