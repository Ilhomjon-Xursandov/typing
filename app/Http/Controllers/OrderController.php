<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Client;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['users', 'service'])
            ->latest()
            ->paginate(10);
        return view('orders.index', compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $services = Service::where('is_active', true)->get();
        return view('orders.create', compact('users', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $validated = $request->validated();

        Order::create([
            'user_id' => auth()->id(),
            'service_id' => $validated->service_id,
            'comment' => $validated->comment,
        ]);
        return redirect()->route('order.index')->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->load(['user', 'service']);
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $users = User::all();
        $services = Service::where('is_active', true)->get();
        $statuses = Order::STATUSES;
        return view('orders.edit', compact('order', 'users', 'services', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $validated = $request->validated();

        $order->update($validated);

        return redirect()->route('order.index')
            ->with('success', 'Buyurtma ma\'lumotlari muvaffaqiyatli yangilandi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('order.index')->with('success', 'order o\'chirildi!');
    }

    public function updateStatus(UpdateOrderStatusRequest $request, Order $order)
    {
        $validated = $request->validated();

        $order->update(['status' => $validated['status']]);

        return redirect()->route('order.index')
            ->with('success', 'Buyurtma holati yangilandi.');
    }
}
