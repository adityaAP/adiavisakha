<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Konten;
use Session;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
   public function content()
   {
       $konten = Konten::all();
       return view('admin.konten.index',compact('konten'));
   }

   public function form()
   {
      return view('admin.konten.form');
   }

   public function postkonten(request $request)
   {
      $content = $request->konten;
      $dom = new \DomDocument();
      $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
      $imageFile = $dom->getElementsByTagName('img');
      foreach($imageFile as $item => $image){
          $data = $image->getAttribute('src');
          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);
          $imgeData = base64_decode($data);
          $image_name= "/upload/" . time().$item.'.png';
          $path = public_path() . $image_name;
          file_put_contents($path, $imgeData);
          
          $image->removeAttribute('src');
          $image->setAttribute('src', $image_name);
       }

      $content = $dom->saveHTML();
      $konten = Konten::create([
         'konten' => $content,
         'judul' => "judul",
         'tags' => "tags",
         'kategori' => 1,
         'status' => "status",
         'created_by' => 1,
     ]);
   }
   
   public function detail($id=null)
   {
      $konten = Konten::where('id',$id)->first();
      return view('admin.konten.detail',compact('konten'));
   }
}
