<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class ContactPhoneController extends Controller
{
    public function store(Request $request, $id)
    {
        try {
            $request->validate([
                'type' => ['required', 'string'],
                'number' => ['required', 'string'],
            ]);
            $data = $request->all();
            $data['contact_id'] = $id;
            $payload = Phone::create($data);

            return response()->json($payload, 201);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 400);
        }
    }

    public function delete($id, $phoneId)
    {
        $phone = Phone::where('contact_id', $id)
            ->where('id', $phoneId)
            ->first();

        if ($phone) {
            $phone->delete();

            return response()->json(['message' => 'Success'], 200);
        }

        return response()->json(['error' => 'Phone not found'], 404);
    }
}
