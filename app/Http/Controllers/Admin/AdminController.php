<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{   
    public function home()
    {
        return view('dashboard.home');
    }

    public function testimonials()
    {   
        $testimonials = \App\Models\Testimonial::whereNull('publicated_at')
                                        ->orderBy('created_at', 'desc')
                                        // ->limit(20)
                                        ->get();

        return view('dashboard.testimonials', compact('testimonials'));
    }

    public function publicate_testimonial(Request $request)
    {   
        $id = $request->input('id');
        $name = $request->input('name');
        $text = $request->input('text');
        $now = date('Y-m-d H:i:s');
        $publicated_at = date('Y-m-d H:i:s');

        \App\Models\Testimonial::where('id', $id)
                        ->update(array(
                            'name' => $name,
                            'text' => $text,
                            'publicated_at' => $publicated_at,
                            'updated_at' => $now
                        ));

        return redirect('/dashboard/testimonials');
    }

    public function delete_testimonial(Request $request)
    {   
        $id = $request->input('id');

        \App\Models\Testimonial::destroy($id);

        return redirect('/dashboard/testimonials');
    }











    public function dashboard_404()
    {
        $requestUri = request()->getRequestUri();
        // dd(auth()->user());
        if (auth()->check() && auth()->user()->role == "admin") {
            if (strpos($requestUri, 'dashboard')) {
                return view('dashboard.404');
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }
}
