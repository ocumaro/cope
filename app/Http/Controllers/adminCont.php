<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\User;

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\AcceptanceNotification;
use App\Mail\RejectionNotification;
use Illuminate\Support\Facades\Mail;


class adminCont extends Controller
{
    public function show(){
        $users=User::all();
        return view('showusers',compact('users'));
    }
    public function Accepted(Request $request)
    {
        $userId = $request->input('userId');
        $user = User::find($userId);

        if ($user !== null) {
            $user->is_accepted = true;
            $user->save();
            $user = User::findOrFail($userId);
            Mail::to($user->email)->send(new AcceptanceNotification($user));
    
        } else {
            // handle the case where the user was not found
            // for example, show an error message or redirect to a different page
            return 'User not found';
        }
        return redirect('/admin/users')->with('success', 'User rejected successfully');
  
        // send email notification to the user
       
        
      
        return redirect('/admin/users')->with('success', 'User rejected successfully');
    }
    public function Delete(Request $request,$id){
        $users=User::findOrFail($id);
      
        
        // reject the user...
        
        // send email notification to the user
       
        Mail::to($users->email)->send(new RejectionNotification($users));
  $users->delete();
        // redirect back with success message
        return redirect('/admin/users')->with('success', 'User rejected successfully');
    }
    public function userCount()
    {
        $usercount = User::count();
        $acceptedUsers = User::where('is_accepted',1)->count();
        $waitingUsers = User::where('is_accepted',0)->count();
        return view('adminlanding',compact('usercount','acceptedUsers','waitingUsers'));
    }
   

   
}
