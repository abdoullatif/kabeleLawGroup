<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get notifications in db with user_id
        $notifications = DB::table('notifications')
        ->where('user_id', '=', auth()->user()->id)
        ->join('dossiers', 'dossiers.id', '=', 'notifications.dossiers_id')
        ->join('users', 'users.id', '=', 'notifications.users_id')
        ->get(['notifications.id as id', 'notifications.*', 'dossiers.*', 'users.*']);

        return view('notification.notification', compact('notifications'));
    }

    //Notification no read
    public function noRead() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //Get notifications in db with user_id
        $notifications = DB::table('notifications')
        ->where('user_id', '=', auth()->user()->id)
        ->where('statutNotification', '=', '0')
        ->join('dossiers', 'dossiers.id', '=', 'notifications.dossiers_id')
        ->join('users', 'users.id', '=', 'dossiers.users_id')
        ->get(['notifications.id as id', 'notifications.*', 'dossiers.*', 'users.*']);

        return view('layouts.app', compact('notifications'));
    }

    //nombre de notification
    public function countNotification() {
        //Get  nombre de notification where id_user = auth()->user()->id and status = 0
        $countNotification = DB::table('notifications')
        ->where('users_id', auth()->user()->id)
        ->where('statutNotification', 0)
        ->count();

        //return view('notification.nombre-notification', compact('notifications'));
        return response()->json([
            'nombreNotification' => $countNotification, 
        ]);
    }

    //vu notification
    public function updateNotification() {
        //vu notification where id = auth()->user()->id
        DB::table('notifications')
        ->where('users_id', auth()->user()->id)
        ->update(['statutNotification' => '1']);

        //return redirect()->route('notification.index');
    }
}
