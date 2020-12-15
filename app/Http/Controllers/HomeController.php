<?php

namespace App\Http\Controllers;

use App\User;
use Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class HomeController extends Controller
{
    public function index()
    {
        echo view('front/include/header');
        echo view('front/home');
        echo view('front/include/footer');

    }
    public function RegisterAuth()
    {
       $data['user_name'] = Request::input('user_name');
       $data['user_email'] = Request::input('user_email');
       $data['user_password'] = Request::input('user_password');
       $xdata['user_confirm_password'] = Request::input('user_confirm_password');
       if($data['user_password']==$xdata['user_confirm_password'])
       {
         $users = DB::table('users')->where('email', $data['user_email'] )->first();
        if(empty($users)){
            $validator = DB::table('users')->insert([
                'name' => $data['user_name'],
                'email' => $data['user_email'],
                'password' => $data['user_password'],
                'status' => 'active',
                'type' => 'customer',
            ]);
            if($validator){

              $mail = new PHPMailer(true); // Passing `true` enables exceptions

              try {

                  // Mail server settings

                  $mail->SMTPDebug = 4; // Enable verbose debug output
                  $mail->isSMTP(); // Set mailer to use SMTP
                  $mail->Host = 'mail.kabhishek18.com'; // Specify main and backup SMTP servers
                  $mail->SMTPAuth = true; // Enable SMTP authentication
                  $mail->Username = 'developer@kabhishek18.com'; // SMTP username
                  $mail->Password = 'ak.9931230813'; // SMTP password
                  $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                  $mail->Port = 587; // TCP port to connect to

                  $mail->setFrom('developer@kabhishek18.com', 'Khal Drago');
                  $mail->addAddress($data['user_email']); // Add a recipient, Name is optional
                  //$mail->addCC($_POST['email-cc']);
                  //$mail->addBCC($_POST['email-bcc']);
                  //$mail->addReplyTo('your-email@gmail.com', 'Your Name');
                  // print_r($_FILES['file']); exit;

                //   for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) {
                //       $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]); // Optional name
                //   }

                  $mail->isHTML(true); // Set email format to HTML

                  $mail->Subject = "Email Verification";
                  $mail->Body    = 'Testing Purpose';
                  // $mail->AltBody = plain text version of your message;

                  if( !$mail->send() ) {
                    return back()->with('error','Email Verfication could not be sent.'.$mail->ErrorInfo);
                  } else {
                    return back()->with('sucess','Email Verfication Mail.');
                  }

              } catch (Exception $e) {
                   return back()->with('error','Message could not be sent.');
              }
                //return back()->with('success','Customer Added');
            }
        }
        else{
            return back()->with('error','Email Already Exits!');
        }
       
       }
       else{
          return back()->with('error','Password Did Not Matched!');
       }
      
	
    }

    public function Category()
    {
        $category = DB::table('category')->get();
        dd($category); 
    }
    
}
