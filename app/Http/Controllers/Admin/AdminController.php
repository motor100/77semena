<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{   
    public function home()
    {
        return view('dashboard.home');
    }

    public function orders()
    {
        return view('dashboard.orders');
    }

    public function testimonials()
    {   
        $testimonials = \App\Models\Testimonial::whereNull('publicated_at')
                                        ->orderBy('created_at', 'desc')
                                        // ->limit(20)
                                        ->get();

        return view('dashboard.testimonials', compact('testimonials'));
    }

    public function warehouse(Request $request)
    {   
        $code = $request->input('q');

        $product = '';

        if($code) {
            $code = htmlspecialchars($code);
            $product = \App\Models\Product::where('code', 'like', "%{$code}%")->first();
        }

        return view('dashboard.warehouse', compact('product'));
    }

    public function warehouse_update(Request $request)
    {   
        $request->validate([
            'quantity' => 'required|min:0',
        ]);

        $id = $request->input('id');
        $quantity = $request->input('quantity');

        $pr = \App\Models\Product::find($id);

        $now = date('Y-m-d H:i:s');

        if($pr) {
            $pr->update([
                'quantity' => $quantity,
                'updated_at' => $now
            ]);
    
            return redirect('/dashboard/warehouse');
        } else {
            return Redirect::back()->withErrors(['msg' => 'Ошибка']);
        }
    }

    public function publicate_testimonial(Request $request)
    {   
        $id = $request->input('id');
        $name = $request->input('name');
        $text = $request->input('text');
        $now = date('Y-m-d H:i:s');
        $publicated_at = date('Y-m-d H:i:s');

        \App\Models\Testimonial::where('id', $id)
                        ->update([
                            'name' => $name,
                            'text' => $text,
                            'publicated_at' => $publicated_at,
                            'updated_at' => $now
                        ]);

        return redirect('/dashboard/testimonials');
    }

    public function delete_testimonial(Request $request)
    {   
        $id = $request->input('id');

        \App\Models\Testimonial::destroy($id);

        return redirect('/dashboard/testimonials');
    }

    public function o_kompanii()
    {   
        $text = \App\Models\Page::where('id', '1')
                            ->value('text');

        return view('dashboard.o_kompanii', compact('text'));
    }

    public function o_kompanii_update(Request $request)
    {
        $text = $request->input('text');

        $now = date('Y-m-d H:i:s');

        \App\Models\Page::where('id', '1')
                        ->update([
                            'text'=>$text,
                            'updated_at'=>$now
                        ]);

        return redirect('/dashboard/o-kompanii');
    }

    public function stat_partnerom()
    {
        $text = \App\Models\Page::where('id', '2')
                            ->value('text');

        return view('dashboard.stat_partnerom', compact('text'));
    }

    public function stat_partnerom_update(Request $request)
    {
        $text = $request->input('text');

        $now = date('Y-m-d H:i:s');

        \App\Models\Page::where('id', '2')
                        ->update([
                            'text'=>$text,
                            'updated_at'=>$now
                        ]);

        return redirect('/dashboard/stat-partnerom');
    }




    /*
    * Переименование файла
    * Обязательный агрумент $file
    * Illuminate\Http\UploadedFile object
    * Обязательный агрумент $slug
    * Строка
    */
    public static function rename_file($slug, $file, $folder = '')
    {   
        if ($folder) {
            $folder = $folder . '/';
        }
        
        $mimetype = $file->getMimeType();
        $filetype = "";
        switch ($mimetype) {
            case "image/jpeg":
                $filetype = ".jpg";
                break;
            case "image/png":
                $filetype = ".png";
                break;
            case "application/pdf":
                $filetype = ".pdf";
                break;
            case "application/msword":
                $filetype = ".doc";
                break;
            case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
                $filetype = ".docx";
                break;
            case "application/vnd.ms-excel":
                $filetype = ".xls";
                break;
            case "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet":
                $filetype = ".xlsx";
                break;
            case "application/octet-stream":
                if($file->getClientOriginalExtension() == "xlsx") {
                    $filetype = ".xlsx";
                }
                break;
        }

        $new_filename = $slug . '-' . date('dmY') . '-' . mt_rand() . $filetype;
        $tmppathfilename = $file->getPathname();
        $pathname = public_path('storage') . "/uploads/" . $folder . $new_filename;
        $pathnametobase = $new_filename;
        move_uploaded_file($tmppathfilename, $pathname);

        return $pathnametobase;
    }

    public function tiny_file_upload(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $mimetype = $request->file('file')->getMimeType();
        $extension = $request->file('file')->getClientOriginalExtension();

        $filetype = "";
        switch ($mimetype) {
            case "image/jpeg":
                $filetype = ".jpg";
                break;
            case "image/png":
                $filetype = ".png";
                break;
            case "image/gif":
                $filetype = ".gif";
                break;
            case "application/pdf":
                $filetype = ".pdf";
                break;
            case "application/msword":
                $filetype = ".doc";
                break;
            case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
                $filetype = ".docx";
                break;
            case "application/vnd.ms-excel":
                $filetype = ".xls";
                break;
            case "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet":
                $filetype = ".xlsx";
                break;
            case "application/octet-stream":
                if($extension == "xlsx") {
                    $filetype = ".xlsx";
                }
                break;
            default:
                $filetype = "other";
        }

        if ($filetype == "other") {
            return false;
        }

        $fileName = 'file' . '-' . date('dmY') . '-' . mt_rand() . $filetype;

        $path = $request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location'=>"/storage/$path"]); 
    }

    public function dashboard_404()
    {
        $requestUri = request()->getRequestUri();

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
