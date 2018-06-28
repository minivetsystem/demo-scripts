<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\EventType;
use App\UserEvent;
use App\UserEventInterest;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use DB;
//use \Cviebrock\EloquentSluggable\Services\SlugService;

class ProfileController extends Controller
{
    public function getupdate()
    {
        $user = User::where('id', Auth::guard('user')->user()->id)->get()->first();

        return view('profile', ['model' => $user]);
    }

    public function update(request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'payemail' => 'required|email',
            'fullname' => 'required',
            'phone' => 'required',
            'birthday' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg|max:2048',

        ]);

        $validator->after(function ($validator) use ($request) {

            if ($request->input('email') != "" && $request->input('password') != "") {
                $m = User::where('email', $request->input('email'))->where('id', '<>', Auth::guard('user')->Id())->get()->first();
                if (count($m) == 0) {
                    $validator->errors()->add('email', 'Email already in use.');
                }
            }

        });

        if ($validator->passes()) {
            $user = User::where('id', Auth::guard('user')->user()->id)->get()->first();
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $user->image = $name;
            }
            $user->email = $request->email;
            $user->email = $request->email;
            $user->payemail = $request->payemail;
            $user->fullname = $request->fullname;
            $user->phone = $request->phone;
            $user->birthday = $request->birthday;
            $user->link = $request->link;
            $user->socialmedia = $request->socialmedia;
            $user->city = $request->city;
            $user->biomsg = $request->biomsg;
            $user->gender = $request->gender;

            $user->save();

            return redirect()->route('profile')->with('success_msg', 'Profile updated successfully.');
        } else {
            return redirect()->route('profile')->withErrors($validator)->withInput();
        }
    }

    public function getAddEventInterest()
    {
        $category = Category::get()->all();
        $user_events = [];

        $events = UserEventInterest::where('user_id', Auth::guard('user')->Id())->get()->all();
        foreach ($events as $event) {
            array_push($user_events, $event->user_event_type_id);
        }


        return view('add_event_interest', ['category' => $category, 'user_events' => $user_events]);
    }

    public function postAddEventInterest(Request $request)
    {
        DB::table('user_event_interest')->where('user_id', '=', Auth::guard('user')->Id())->delete();

        foreach ($request->input('event') as $row) {
            $user_event = new UserEventInterest();
            $user_event->user_id = Auth::guard('user')->Id();
            $user_event->user_event_type_id = $row;
            $user_event->save();
        }
        return redirect()->route('add-event-interest')->with('success_msg', 'Event updated successfully');
    }

    public function getAddEvent()
    {
        $data_msg = [];
        $data_msg['category'] = $category = Category::get()->all();

        return view('event.add-event', $data_msg);
    }

    public function postAddEvent(Request $request)
    {
        $data_msg = [];
        $validator = Validator::make($request->all(), [

            'category_id' => 'required',
            'event_type_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        if ($validator->passes()) {
            $event = new Event();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/events');
                $image->move($destinationPath, $name);
                $event->image = $name;
            }
            $event->category_id = $request->category_id;
            $event->event_type_id = $request->event_type_id;
            $event->title = $request->title;
            $event->description = $request->description;
            $event->user_id = Auth::guard('user')->Id();
//            $slug = SlugService::createSlug(Event::class, 'slug', $request->input('title'));

            $event->save();
            $data_msg['type'] = "success";
            $request->session()->flash('success_msg', 'Event Successfully added');

        } else {
            $message = [];

            foreach ($validator->errors()->getMessages() as $key => $val) {
                $message[$key] = $val[0];
            }
            $data_msg['message'] = $message;
            $data_msg['type'] = "warning";
        }

        return response()->json($data_msg);

    }

    public function getEditEvent($id = "")
    {
        $data_msg = [];
        $model = Event::where('id', $id)->where('user_id',Auth::guard('user')->Id())->get()->first();
        if (empty($model)) {
            abort(404);
        }
        $data_msg['model'] = $model;
        $data_msg['category'] = $category = Category::get()->all();
        $data_msg['event_type'] = $event_type = EventType::where('cid', $model->category_id)->get()->all();

        return view('event.edit-event', $data_msg);
    }

    public function postEditEvent($id = "", Request $request)
    {
        $data_msg = [];
        $event = Event::where('id', $id)->get()->first();
        if (empty($event)) {
            abort(404);
        }
        $validator = Validator::make($request->all(), [

            'category_id' => 'required',
            'event_type_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',

        ]);

        if ($validator->passes()) {

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/events');
                $image->move($destinationPath, $name);
                $event->image = $name;
            }
            $event->category_id = $request->category_id;
            $event->event_type_id = $request->event_type_id;
            $event->title = $request->title;
            $event->description = $request->description;


            $event->save();
            $data_msg['type'] = "success";
            $request->session()->flash('success_msg', 'Event Successfully updated');

        } else {
            $message = [];

            foreach ($validator->errors()->getMessages() as $key => $val) {
                $message[$key] = $val[0];
            }
            $data_msg['message'] = $message;
            $data_msg['type'] = "warning";
        }

        return response()->json($data_msg);

    }

    public function getEventType(Request $request)
    {
        $data_msg = [];

        if ($request->input('cat_id') != "") {
            $types = EventType::where('cid', $request->input('cat_id'))->get()->all();
            $html = '<option value="">Select Event Type</option>';

            foreach ($types as $row) {
                $html .= '<option value="' . $row->id . '">' . $row->name . '</option>';
            }

        } else {
            $html = '<option value="">Select Event Type</option>';
        }
        $data_msg['html'] = $html;

        return response()->json($data_msg);
    }

    public function event_list()
    {
        $events = Event::with('user')->where('user_id', Auth::guard('user')->Id())->paginate(15);

        return view('event.my_event_list', ['events' => $events]);
    }

    public function liked_event_list()
    {
        $events = UserEvent::with('event','event.user')->where('user_id', Auth::guard('user')->Id())->paginate(15);
        return view('event.liked_event_list', ['events' => $events]);
    }

    public function addToProfile($id=''){
        if($id==''){
            abort(404);
        }
        $event=Event::where('id', $id)->get()->first();
        if(empty($event)){
            abort(404);
        }
        $check=UserEvent::where('user_id', Auth::guard('user')->Id())->where('event_id', $id)->get()->first();
        if(empty($check)){
            $ue=new UserEvent();
            $ue->user_id=Auth::guard('user')->Id();
            $ue->event_id=$id;
            $ue->save();
            return redirect()->back()->with('success_msg','You have successfully added this event in your list');
        }else{
            return redirect()->back()->with('error_msg','You have already added this event in your list');
        }
    }


}
