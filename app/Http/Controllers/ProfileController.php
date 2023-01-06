<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function home()
    {       
        // Пользователь
        $user = Auth::user();

        // Если пользователя нет, то редирект на главную
        if (!$user) {
            return redirect('/');
        }

        // ПВЗ для этого пользователя
        $office = \App\Models\Office::where('id', $user->id)->first();

        // Заказы
        $orders = \App\Models\Order::where([
                                        ['office_id', $office->id],
                                        // Платеж от юкассы
                                        // ->where('payment', '1')
                                        ['status', 'Отправлен в ПВЗ'],
                                        ['payment', '0']
                                    ])
                                    ->orderBy('id', 'desc')
                                    ->get();

        return view('profile.home', compact('orders'));
    }

    public function calc()
    {   
        return view('profile.calc');
    }

    public function done_orders()
    {   
        // Пользователь
        $user = Auth::user();

        // Если пользователя нет, то редирект на главную
        if (!$user) {
            return redirect('/');
        }

        // ПВЗ для этого пользователя
        $office = \App\Models\Office::where('id', $user->id)->first();

        // Заказы
        $orders = \App\Models\Order::where([
                                        ['office_id', $office->id],
                                        // Платеж от юкассы
                                        // ->where('payment', '1')
                                        ['status', 'Выдан'],
                                        ['payment', '0']
                                    ])
                                    ->orderBy('id', 'desc')
                                    ->get();

        return view('profile.done-orders', compact('orders'));
    }

    public function order($id)
    {
        if ($id) {
            $order = \App\Models\Order::where('id', $id)->first();

            // Преобразование json в массив
            $prds = json_decode($order->products);
            // Преобразование массива в строку с разделителем <br>
            $prds = implode("<br>", $prds);
            $order->prds = $prds;
            $order->date = $order->created_at->format("H-i d-m-Y");

            // Получение ПВЗ по id
            $office = \App\Models\Office::where('id', $order->office_id)->first();

            $order->office = $office->city->title . ", " . $office->title . ", " . $office->address;

            return view('profile.order', compact('order'));
        } else {
            return view('profile.orders');
        }
    }

    public function order_update(Request $request)
    {   
        $id = $request->input('id');

        if ($request->has('status')) {
            
            $status = $request->input('status');

            $now = date('Y-m-d H:i:s');

            \App\Models\Order::where('id', $id)
                            ->update([
                                'status' => $status,
                                'updated_at' => $now
                            ]);

            return redirect('profile');
        } else {
            return redirect('order/' . $id);
        }
    }

    
}