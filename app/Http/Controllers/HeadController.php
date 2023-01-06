<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\MemberTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;
use Illuminate\Support\Facades\Mail;


class HeadController extends Controller
{
    public function index() {
        return view('loko/index', [
        ]);
    }
    public function team() {

        $members = MemberTeam::all();

        return view('loko/team', [
            'members' => $members
        ]);
    }
    public function schedule() {
        return view('loko/schedule');
    }
    public function price() {
        return view('loko/price');
    }
    public function auth() {
        return view('loko/auth');
    }

    public function logout() {
    
        Auth::logout();

        toastr()->success('Вы вышли из аккаунта');

        return redirect('/');

    }

    public function email_verify(Request $req) {
		 
	    $token = bin2hex(random_bytes(10));
		$user = User::findOrFail(Auth::id());
		if($user->email_verified) { 
            return view('loko/notify', [
                'title' => 'Ошибка',
                'text' => 'Вы уже подтверждали свой e-mail адрес'
            ]);
		}
		$user->email_token = $token;
		$user->save();
         
        $to_name = $user->name;
        $to_email = $user->email;
        $comment = 'Перейдите по ссылке, чтобы подтвердить свой e-mail адрес: http://127.0.0.1:8000/email/verify/' .$token;
        $data = array('name'=> $to_name, "body" => $comment);
        Mail::send('loko/letter', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Подтверждение Email адреса | LOKO FITNESS');
            $message->from('lokofitnessyar@gmail.com','LOKO FITNESS');
        });

		/* $comment = 'Перейдите по ссылке, чтобы подтвердить свой e-mail адрес: http://127.0.0.1:8000/email/verify/' .$token;
		$toEmail = "sreylonds@bk.ru";
		Mail::to($toEmail)->send(new VerifyEmail($comment)); */
         
        return view('loko/notify', [
            'title' => 'Успешно',
            'text' => 'Ссылка для подтверждения Email-адреса отправлена на вашу почту'
        ]);
    }

	public function email_verify_post(Request $req, $token) {
		 
		$user = User::findOrFail(Auth::id());
		
		if(!$user->email_token) {
            return view('loko/notify', [
                'title' => 'Ошибка',
                'text' => 'Нечего подтверждать!'
            ]);
		}
		if ($token == $user->email_token) {
			$user->email_verified = 1;
			$user->email_token = 0;
			$user->save();
            return view('loko/notify', [
                'title' => 'Успешно',
                'text' => 'Вы успешно подтвердили адрес электронной почты'
            ]);
		} else {
            return view('loko/notify', [
                'title' => 'Ошибка',
                'text' => 'Ссылка для подтверждения неверна!'
            ]);
        }
    }

    public function comments(Request $req) {

        $comments = Comment::where('approved', 1)->simplePaginate(5);

        if ($req->session()->has('success-comment')) {
            toastr()->success('Ваш отзыв был отправлен на модерацию!');
        }

        return view('loko/comments', [
            'comments' =>  $comments,
        ]);
    }

    public function comments_post(Request $req) {

        $this->validate($req, [
            'comment' => 'required', 'string', 'max:255'
          ]);

        $comment = Comment::create([
            'text' => $req->input('comment'),
            'approved' => '0',
            'user_id' => Auth::id()
        ]);

        return redirect()->route('comments')->with('success-comment', '');
    }

    public function cabinet() {

        $user = User::findOrFail(Auth::id());
        $name =  $user->name;
        $email =  $user->email;
        $img =  $user->img;
        $email_verified = $user->email_verified;

        return view('loko/lk', [
            'name' => $name,
            'email' => $email,
            'img' => $img,
            'email_verified' => $email_verified
        ]);
    }
    public function cabinet_save(Request $req) {
       
        $req->validate([
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'max:255',
        ]);

        $user = User::findOrFail(Auth::id());
    
        if($req->hasFile('img')) {

        $imageName = time().'.'.$req->img->extension();  
   
        $path = $req->file('img')->store('avatars', 'public');
        $path = asset('/storage/' .$path); 
        $user->img = $path;
        }

        $user->password = (!$req->input('password')) ?  $user->password : bcrypt($req->input('password'));
        $user->save();

        return redirect()->route('cabinet');
    }
}
