<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class ContactEmailController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'type' => [
                'required',
                'string',
            ],
            'address' => [
                'required',
                'string',
            ],
        ]);
        $data = $request->all();

        $data['contact_id'] = $id;

        $payload = Email::create($data);

        return response()->json($payload, 201);
    }

    public function delete($id, $emailId)
    {
        $email = Email::where('contact_id', $id)
            ->where('id', $emailId)
            ->first();

        if ($email) {
            $email->delete();

            return response()->json(['message' => 'Success'], 200);
        }

        return response()->json(['error' => 'Email not found'], 404);
    }
}
