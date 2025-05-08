<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
        public function index(Request $request)
    {
        $search = $request->input('search');

        $orders = Order::when($search, function ($query, $search) {
            return $query->where(function ($q) use ($search) {
                $q->where('order_id', 'like', '%' . $search . '%')
                ->orWhere('name', 'like', '%' . $search . '%');
            });
        })->latest()->paginate(10)->withQueryString();

        return view('admin.orders', compact('orders'));
    }

        public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:dalam proses,pesanan diterima,siap diambil,selesai',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Status pesanan diperbarui.');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);


        if ($order->stnk_file && \Storage::disk('public')->exists($order->stnk_file)) {
            \Storage::disk('public')->delete($order->stnk_file);
        }


        $order->delete();

        return redirect()->back()->with('success', 'Pesanan berhasil dihapus.');
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
    
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'required',
            'address' => 'nullable',
            'vehicle_number' => 'required',
            'stnk_date' => 'required|date',
            'plate_size' => 'required',
            'custom_size' => 'nullable|string',
            'plate_material' => 'required',
            'plate_color' => 'required',
            'custom_plate_color' => 'nullable|string',
            'font_type' => 'required',
            'custom_font_type' => 'nullable|string',
            'finishing' => 'required',
            'quantity' => 'required|integer|min:1',
            'notes' => 'nullable',
            'stnk_file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240',
        ]);
    
        if ($request->hasFile('stnk_file')) {
            if ($order->stnk_file && \Storage::disk('public')->exists($order->stnk_file)) {
                \Storage::disk('public')->delete($order->stnk_file);
            }
            $newPath = $request->file('stnk_file')->store('stnk_files', 'public');
            $validated['stnk_file'] = $newPath;
        }
    
        $order->update($validated);
    
        return redirect()->back()->with('success', 'Pesanan berhasil diperbarui.');
    }
    

}
