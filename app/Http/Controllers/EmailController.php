<?php

namespace App\Http\Controllers;

use App\Mail\SendCustomMail;
use App\Mail\SendStart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function sendEmail(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'status' => 'required|string'
            ]);

            if($request->status === 'start'){
                Mail::to($request->email)->send(new SendStart());
            } else {
                Mail::to($request->email)->send(new SendCustomMail());
            }

            return response()->json([
                'message' => 'Email sent to ' . $request->email,
                'success' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to send email',
                'error' => $e->getMessage(),
                'success' => false
            ], 500);
        }
    }
}
