<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\MemberTeam;
use DB;

class AdminController extends Controller
{
    public function admin() {
        return view('admin/admin');
    }
    public function users() {

        $users = DB::table('users')->where('role_id', 0)->simplePaginate(2);

        return view('admin/users', [
            'users' => $users
        ]);
    } 
    public function workers() {

        $users = DB::table('users')->where('role_id', '>', 0)->simplePaginate(2);

        return view('admin/users', [
            'users' => $users
        ]);
    } 
    public function user_profile(Request $req, $id) {

        $user = User::findOrFail($id);

        $roleid = ($user->role_id) ? $user->role_id : 0;
        $role = ($roleid) ? $user->role->name : 'Пользователь';

        return view('admin/profile_edit', [
           'user' => $user,
           'id' => $id,
           'role' => $role,

        ]);
    }
    public function user_profile_save(Request $req, $id) {

        $user = User::findOrFail($id);

        $user->name = ($req->input('name') == null) ? $user->name : $req->input('name');
        $user->email = ($req->input('email') == null) ? $user->email : $req->input('email');
        $user->role_id = ($req->input('role') == null) ? $user->role_id : $req->input('role');

        $user->save();

        return redirect()->route('adminUserId', $id);
    }
    public function pages() {
        return view('admin/pages');
    }
    public function pages_team() {
        return view('admin/team_page');
    }
    public function comments() {

        $comments = DB::table('comments')->where('approved', '=', 0)->simplePaginate(5);

        return view('admin/list-comments', [
            'comments' => $comments
        ]);
    }
    public function comments_approved() {

        $comments = DB::table('comments')->where('approved', '=', 1)->simplePaginate(5);

        return view('admin/list-comments', [
            'comments' => $comments
        ]);
    }
    public function comments_edit(Request $req, $id) {

        $comment = Comment::findOrFail($id);

        $comment->approved = $req->input('lolkek');

        $comment->save();

        return redirect()->route('adminCommentsGet', $id);
    }
    public function comments_delete(Request $req, $id) {

        $comment = Comment::findOrFail($id);

        $comment->delete();

        return redirect()->route('adminComments');
    }
    public function comments_get($id) {

        $comment = Comment::findOrFail($id);

        return view('admin/comments', [
            'comment' => $comment,
            'id' => $id,
        ]);
    }
}
