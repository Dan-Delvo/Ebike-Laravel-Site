<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard() {
        $transaction = Transaction::getTransactions()->paginate(10);
        $machine = Machine::getMachines()->get();

        return view('pages.admin.admin_dashboard', compact('transaction', 'machine'));

    }

    public function toggleStatus($id) {
        $machine = Machine::findOrFail($id);
        $machine->Status = $machine->Status === 'Active' ? 'Inactive' : 'Active';
        $machine->save();

        return back()->with('success', 'Machine status updated');
    }

}
