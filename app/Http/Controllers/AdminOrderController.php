<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
       public function index()
    {
        $orders = Order::get();
        return view('orders.index', ['orders' => $orders]);
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show', ['order' => $order]);
    }

    public function destroy($id)
    {
        Order::where('order_id', $id)->delete();
        return redirect()->route('orders.index');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit', ['order' => $order]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'order_date' => 'required|date',
            'order_status' => 'required|string',
            'room_no' => 'required|integer',
            'total' => 'required|integer',
            'user_id' => 'nullable|numeric',
            'admin_id' => 'nullable|numeric',
            'notes' => 'nullable|string',
        ]);


        $order = Order::findOrFail($id);


        $order->order_date = $request->input('order_date');
        $order->order_status = $request->input('order_status');
        $order->room_no = $request->input('room_no');
        $order->total = $request->input('total');
        $order->user_id = $request->input('user_id');
        $order->admin_id = $request->input('admin_id');
        $order->notes = $request->input('notes');


        $order->save();

    
        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_date' => 'required|date',
            'order_status' => 'required|string',
            'room_no' => 'required|integer',
            'total' => 'required|integer',
            'user_id' => 'nullable|numeric',
            'admin_id' => 'nullable|numeric',
            'notes' => 'nullable|string',
        ]);

        Order::create($validatedData);
        return redirect()->route('orders.index');
    }

}
