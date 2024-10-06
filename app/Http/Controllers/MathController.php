<?php

namespace App\Http\Controllers;

use App\Models\Math;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MathController extends Controller
{
    public function store(Request $request)
    {
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



        Math::create([
            'file_path'=>json_encode($file_path),
            'user_id'=>auth()->user()->id,
        ]);
        return redirect()->back();
    }

    public function delete($id ,$index)
    {
        $math = Math::findOrFail($id);
        $files = json_decode($math->file_path, true);

   
        if (isset($files[$index])) {
          
            Storage::disk('uploads')->delete($files[$index]);
    
            
            unset($files[$index]);
    
           
            $files = array_values($files);
    
          
            if (empty($files)) {
              
                $math->delete();
            } else {
              
                $math->file_path = json_encode($files);
                $math->save();
            }
        }
    
        return redirect()->back();
    }

}
