<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Services\ContactsService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    protected $contactsService;

    public function __construct(ContactsService $contactsService)
    {
        $this->contactsService = $contactsService;
    }

    public function index(): JsonResponse
    {
        try {
            $contacts = $this->contactsService->list();

            return response()->json($contacts, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
    }

    public function store(Request $request): JsonResponse
    {
        try {
            $request->validate(['name' => ['required', 'string', 'min:5', 'max: 255', 'unique:'.Contact::class]]);
            $contact = $this->contactsService->add($request->all());

            return response()->json($contact, 201);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
    }

    public function show(int $id): JsonResponse
    {
        try {
            $contact = $this->contactsService->get($id);

            return response()->json($contact, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Contact not found'], 404);
        }
    }

    public function update(Request $request, $id): JsonResponse
    {
        try {
            $request->validate(['name' => ['required', 'string', 'min:5', 'max: 255', 'unique:'.Contact::class]]);
            $contact = $this->contactsService->update($id, $request->all());

            return response()->json($contact, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Contact not found'], 404);
        }
    }

    public function findByName(string $name): JsonResponse
    {
        try {
            $contact = $this->contactsService->findByName($name);

            return response()->json($contact, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
    }

    public function delete($id)
    {
        try {
            $this->contactsService->delete($id);

            return response()->json([], 204);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
    }
}
