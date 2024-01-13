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

        $is_send = 0;

        try{
            $mailData = [
                'title' => 'Mail from ItSolutionStuff.com',
                'body' => 'This is for testing email using smtp.'
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