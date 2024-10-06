<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class SkillController extends Controller
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



        Skill::create([
            'file_path'=>json_encode($file_path),
            'user_id'=>auth()->user()->id,
        ]);

        return redirect()->back();
    }

    public function delete($id , $index)
    {
        $skill = Skill::findOrFail($id);
        $files = json_decode($skill->file_path, true);

   
        if (isset($files[$index])) {
          
            Storage::disk('uploads')->delete($files[$index]);
    
            
            unset($files[$index]);
    
           
            $files = array_values($files);
    
          
            if (empty($files)) {
              
                $skill->delete();
            } else {
              
                $skill->file_path = json_encode($files);
                $skill->save();
            }
        }
    
        return redirect()->back();
    }

}
