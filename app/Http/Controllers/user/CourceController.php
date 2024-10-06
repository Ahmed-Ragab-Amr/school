<?php

namespace App\Http\Controllers\user;

use App\Models\Cource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourceController extends Controller
{
    public function show()
    {
        $cources = Cource::where('user_id' , auth()->user()->id)->get();
        return view('user.cource.show' , ['cources'=>$cources]);
    }

    $request->validate([
        'file_path.*'=>'required|mimes:jpeg,jpg,png,gif,pdf,webp',
    ]);

        // $file = UploadedFile::fake()->create($request->file_path);

        foreach($request->file('file_path') as $file)
        {
            $fileName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('upload_file', $fileName , 'uploads');
            $file_path[] = $path;
        }



    Cource::create([
        'file_path'=>json_encode($file_path),
        'user_id'=>auth()->user()->id,
    ]);

        return redirect()->back();
    }

    public function delete($id , $index)
    {
        $cource = Cource::findOrFail($id);
        $files = json_decode($cource->file_path, true);

   
        if (isset($files[$index])) {
          
            Storage::disk('uploads')->delete($files[$index]);
    
            
            unset($files[$index]);
    
           
            $files = array_values($files);
    
          
            if (empty($files)) {
              
                $cource->delete();
            } else {
              
                $cource->file_path = json_encode($files);
                $cource->save();
            }
        }
    
        return redirect()->back();
    }
}
