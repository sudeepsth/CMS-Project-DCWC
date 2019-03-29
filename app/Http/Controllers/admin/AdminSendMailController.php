<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\AdminSendMail;
use Illuminate\Mail\Message;
use Mail;
use App\admin\AdminEmailCategory;
use App\admin\AdminNewsEvent;
use Illuminate\Support\Facades\Log;


class AdminSendMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = AdminSendMail::get();
        $result = array(
            'page_header'       => 'List of Mail',
            'mail'             =>$mail,
        );
        return view('admin.mail.list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email = AdminEmailCategory::getCategoryList();
        $result = array(
            'page_header'       => 'Sned New Mail',
            'email'             =>$email,
        );
        return view('admin.mail.create',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mail = new AdminSendMail;
        $mail->subject = $request->subject;
        $mail->description = $request->description;
        $mail->save();
       
        $emailtype=null;
        if(isset($request->email)){
            foreach($request->email as $item){
            
                if($item == 0 ){
                    $emailtype=1;
                    break;
                }else{
                    $emailtype=2;
                    break;
                }
            }
        }
        
        if($emailtype == 1){
            $useremail = AdminNewsEvent::getUserEmailAddress();
        }
        if($emailtype == 2){
            $useremail = AdminNewsEvent::getCategoryUserEmailAddress($request->email);
        }

        if(isset($emailtype)){
           
            foreach($useremail as $email){
                $data = array (
                    'name'              => $email->name,
                    'email'             => $email->email,
                    'subject'           =>$request->subject,
                    'description'       =>$request->description,
                );
                try{
                Mail::send('admin.email.custommsg', $data, function (Message $message)use ($data) {
                    $message->from(env('MAIL_USERNAME', 'info@dcwcnepal.org.np'), 'DCWCNEPAL');
                    $message->to($data['email'], $data['name']);
                    $message->subject($data['subject'] );
                    $message->priority(3);
        
                });
            } catch (\Exception $e) {
                Log::error("Cannot send welcome mail for user.", ['email' => $data['email'], 'exception' => $e]);
            }
            }
        }

        return redirect(route('mail.index'))->with('success','Mail Successfully sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mail = AdminSendMail::findOrFail($id);
        $email = AdminEmailCategory::getCategoryList();
        $result = array(
            'page_header'       => 'Edit Existing Mail',
            'mail'              =>$mail,
            'email'             =>$email,
        );
        return view('admin.mail.edit',compact('result'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mail = AdminSendMail::findOrFail($id);
        $mail->subject = $request->subject;
        $mail->description = $request->description;
        $mail->save();

        $emailtype=null;
        if(isset($request->email)){
            foreach($request->email as $item){
            
                if($item == 0 ){
                    $emailtype=1;
                    break;
                }else{
                    $emailtype=2;
                    break;
                }
            }
        }
        
        if($emailtype == 1){
            $useremail = AdminNewsEvent::getUserEmailAddress();
        }
        if($emailtype == 2){
            $useremail = AdminNewsEvent::getCategoryUserEmailAddress($request->email);
        }

        if(isset($emailtype)){
           
            foreach($useremail as $email){
                $data = array (
                    'name'              => $email->name,
                    'email'             => $email->email,
                    'subject'           =>$request->subject,
                    'description'       =>$request->description,
                );
                try{
                Mail::send('admin.email.custommsg', $data, function (Message $message)use ($data) {
                    $message->from(env('MAIL_USERNAME', 'info@dcwcnepal.org.np'), 'DCWCNEPAL');
                    $message->to($data['email'], $data['name']);
                    $message->subject($data['subject'] );
                    $message->priority(3);
        
                });
            } catch (\Exception $e) {
                Log::error("Cannot send welcome mail for user.", ['email' => $data['email'], 'exception' => $e]);
            }
            }
        }

        return redirect(route('mail.index'))->with('success','Mail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mail = AdminSendMail::findOrFail($id);
        $mail->delete();
        return redirect(route('mail.index'))->with('success','Mail Deleted');
    }
}
