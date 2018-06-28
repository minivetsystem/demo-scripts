<?php

namespace App\Http\Controllers;

use App\EventType;
use App\UserEvent;
use App\UserEventInterest;
use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use App\Event;

class HomeController extends Controller
{

    public function index()
    {
        $user_events_ar = [];
        $query = DB::table('event')->select('event.*', 'user.fullname')->leftJoin('user', 'user.id', '=', 'event.user_id');

        if (Auth::guard('user')->check()) {
            $query->where('event.user_id', '<>', Auth::guard('user')->Id());
            $types = UserEventInterest::where('user_id', Auth::guard('user')->Id())->get()->all();
            $type_arr = [];

            foreach ($types as $row) {
                if (!in_array($row->user_event_type_id, $type_arr)) {
                    array_push($type_arr, $row->user_event_type_id);
                }
            }

            $query->whereIn('event.event_type_id', $type_arr);


            $user_enents = UserEvent::where('user_id', Auth::guard('user')->Id())->get()->all();
            foreach ($user_enents as $row) {
                if (!in_array($row->event_id, $user_events_ar)) {
                    array_push($user_events_ar, $row->event_id);
                }
            }


        }

        $result = $query->paginate(15);

        return view('home', ['events' => $result, 'user_events_ar' => $user_events_ar]);
    }

    public function activate_account($token = '')
    {
        if ($token == "") {
            return redirect()->route('/')->with('error_msg', 'Link is not valid');
        }

        $user = User::where('activation_token', $token)->get()->first();
        if (!empty($user)) {
            $user->status = '1';
            $user->activation_token = NULL;
            $user->save();
            return redirect()->route('login')->with('success_msg', 'User activated successfully');
        } else {
            return redirect()->route('/')->with('error_msg', 'Link is not valid');
        }

    }

    public function details($slug = '')
    {
        if ($slug == '') {
            abort(404);
        }
        $event = Event::with('user')->where('slug', $slug)->get()->first();
        if (empty($event)) {
            abort(404);
        }
        $user_events_ar = [];

        if (Auth::guard('user')->check()) {

            $user_enents = UserEvent::where('user_id', Auth::guard('user')->Id())->get()->all();
            foreach ($user_enents as $row) {
                if (!in_array($row->event_id, $user_events_ar)) {
                    array_push($user_events_ar, $row->event_id);
                }
            }
        }

        return view('details', ['event' => $event, 'user_events_ar' => $user_events_ar]);
    }
}
