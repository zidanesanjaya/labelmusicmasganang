<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use DB;
use Exception;
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function mailPOST(Request $request)
    {

        $NotAllowedDomain = ['yahoo.com', 'gmail.com', 'example.com'];

        foreach ($NotAllowedDomain as $domain) {
            if (str_contains($request->email, $domain)) {
                return back()->with('error', 'Maaf, alamat email dari domain yang Anda masukkan tidak diizinkan.');
            }
        }
        
        
        $is_send = 0;

        try{
            $mailData = [
                'full_name' => $request->full_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'title' => 'Mail By User',
                'body' => $request->message
            ];
             
            Mail::to('reynaldiluma@gmail.com')->send(new DemoMail($mailData));
            $is_send = 1;
        }catch(Exception $e){

        }

        DB::table('mail')->insert([
            'email' => $request->email,
            'phone' => $request->phone,
            'full_name' => $request->full_name,
            'message' => $request->message,
            'is_send' => $is_send,
            'created_at' => now()
            
        ]);
           
        return back();
    }
}