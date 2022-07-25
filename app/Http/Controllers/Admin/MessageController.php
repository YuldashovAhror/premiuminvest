<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\UserFollowNotification;

class MessageController extends Controller
{
    public function index()
    {
        $users = User::all();
        $messages = Message::all();
        return view('admin.messages.index', compact('users', 'messages'));
    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->name = $request->name;
        $message->phone = $request->phone;

        $message->save();

        return redirect()->route('home');

        
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->route('admin.messages');
    }













    // public function notifications(){
    //     return view('admin.messages.notifications');
    // }

    // public function notify($id){
    //     if(auth()->user()){
    //         $user = User::find($id);

    //         auth()->user()->notify(new UserFollowNotification($user));
    //     }

    //     dd('done');
    //     // $request->validate([
    //     //     'message' => 'required|string|max:255',
    //     // ]);

    //     // $user = auth()->user();
    //     // $user->notify(new \App\Notifications\Admin\Message($request->message));
    //     // return redirect()->route('admin.notifications')->with('success', 'Message sent successfully');
    // }

    // public function markAsRead($id){
    //     if($id){
    //         auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
    //     };
        
    //     return back();
    // }

    // public function markAllAsRead(){
    //     auth()->user()->unreadNotifications->markAsRead();

    //     return back();
    // }

}
