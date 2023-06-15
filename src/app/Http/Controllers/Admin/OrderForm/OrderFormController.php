<?php

namespace App\Http\Controllers\Admin\OrderForm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\OrderForm;
use App\Exports\OrderFormExport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Support\Types\UserType;
use Illuminate\Support\Facades\Auth;

class OrderFormController extends Controller
{
    public function __construct()
    {

       View::share('common', [
         'user_type' => UserType::lists()
        ]);
    }

    public function create() {
        $staff = User::where("userType", "!=" , 1)->where("status", 1)->orderBy('id', 'DESC')->get();
        return view('pages.admin.order_form.create')->with('staff', $staff);
    }

    public function store(Request $req) {
        $rules = array(
            'name' => ['required','string','regex:/^[a-zA-Z\s]*$/'],
            'email' => ['nullable','email'],
            'phone' => ['required','regex:/^[0-9]*$/'],
            'user_id' => ['required','regex:/^[0-9]*$/'],
            'designation' => ['required','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
            'address' => ['nullable','regex:/^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i'],
        );
        $messages = array(
            'name.required' => 'Please enter the name !',
            'name.string' => 'Please enter the valid name !',
            'name.regex' => 'Please enter the valid name !',
            'email.required' => 'Please enter the email !',
            'email.email' => 'Please enter the valid email !',
            'phone.required' => 'Please enter the phone !',
            'phone.regex' => 'Please enter the valid phone !',
            'designation.required' => 'Please enter the designation !',
            'designation.regex' => 'Please enter the valid designation !',
            'address.required' => 'Please enter the address !',
            'address.regex' => 'Please enter the valid address !',
            'user_id.required' => 'Please enter the staff !',
            'user_id.regex' => 'Please enter the valid staff !',
        );

        $req->validate($rules, $messages);
        foreach ($req->except('address') as $key => $value) {
            # code...
            if(empty($value)){
                $req[$key] = 0;
            }
        }
        try {
            //code...
            // dd($req->all());
            OrderForm::create($req->all());
            return redirect()->intended(route('order_form_create'))->with('success_status', 'Order Completed Successfully.');
        } catch (\Throwable $th) {
            throw $th;
            return redirect(route('order_form_create'))->with('error_status', 'Oops! something went wrong. Please try again');
        }
    }

    public function restoreTrash($id){
        $data = Auth::check() && Auth::user()->userType==2 ? OrderForm::withTrashed()->whereNotNull('deleted_at')->where('user_id', Auth::id())->findOrFail($id) : OrderForm::withTrashed()->whereNotNull('deleted_at')->findOrFail($id);
        $data->restore();
        return redirect()->intended(route('order_form_view_trash'))->with('success_status', 'Data Restored successfully.');
    }

    public function restoreAllTrash(){
        $data = Auth::check() && Auth::user()->userType==2 ? OrderForm::withTrashed()->whereNotNull('deleted_at')->where('user_id', Auth::id())->restore() : OrderForm::withTrashed()->whereNotNull('deleted_at')->restore();
        return redirect()->intended(route('order_form_view_trash'))->with('success_status', 'Data Restored successfully.');
    }

    public function delete($id){
        $data = Auth::check() && Auth::user()->userType==2 ? OrderForm::where('user_id', Auth::id())->findOrFail($id) : OrderForm::findOrFail($id);
        $data->delete();
        return redirect()->intended(route('order_form_view'))->with('success_status', 'Data Deleted successfully.');
    }

    public function deleteTrash($id){
        $data = Auth::check() && Auth::user()->userType==2 ? OrderForm::withTrashed()->whereNotNull('deleted_at')->where('user_id', Auth::id())->findOrFail($id) : OrderForm::withTrashed()->whereNotNull('deleted_at')->findOrFail($id);
        $data->forceDelete();
        return redirect()->intended(route('order_form_view_trash'))->with('success_status', 'Data Deleted permanently.');
    }

    public function view(Request $request) {
        if ($request->has('search')) {
            $search = $request->input('search');
            $data = OrderForm::with('Staff')->where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->orWhere('designation', 'like', '%' . $search . '%')
            ->orWhere('address', 'like', '%' . $search . '%')
            ->orWhere('id', 'like', '%' . $search . '%')
            ->orderBy('id', 'DESC');
            if(Auth::check() && Auth::user()->userType==2){
                $data->where('user_id', Auth::id());
            }
            $data = $data->paginate(10);
        }else{
            $data = OrderForm::with('Staff')->orderBy('id', 'DESC');
            if(Auth::check() && Auth::user()->userType==2){
                $data->where('user_id', Auth::id());
            }
            $data = $data->paginate(10);
        }
        return view('pages.admin.order_form.list')->with('country', $data);
    }

    public function viewTrash(Request $request) {
        if ($request->has('search')) {
            $search = $request->input('search');
            $data = OrderForm::with('Staff')->withTrashed()->whereNotNull('deleted_at')->where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->orWhere('designation', 'like', '%' . $search . '%')
            ->orWhere('address', 'like', '%' . $search . '%')
            ->orWhere('id', 'like', '%' . $search . '%')
            ->orderBy('id', 'DESC');
            if(Auth::check() && Auth::user()->userType==2){
                $data->where('user_id', Auth::id());
            }
            $data = $data->paginate(10);
        }else{
            $data = OrderForm::with('Staff')->withTrashed()->whereNotNull('deleted_at')->orderBy('id', 'DESC');
            if(Auth::check() && Auth::user()->userType==2){
                $data->where('user_id', Auth::id());
            }
            $data = $data->paginate(10);
        }
        return view('pages.admin.order_form.list_trash')->with('country', $data);
    }

    public function display($id) {
        $data = Auth::check() && Auth::user()->userType==2 ? OrderForm::with('Staff')->where('id', $id)->where('user_id', Auth::id())->firstOrFail() : OrderForm::with('Staff')->findOrFail($id);
        $staff = User::where("userType", "!=" , 1)->where("status", 1)->orderBy('id', 'DESC')->get();
        return view('pages.admin.order_form.display')->with('data',$data)->with('staff',$staff);
    }

    public function displayTrash($id) {
        $data = Auth::check() && Auth::user()->userType==2 ? OrderForm::with('Staff')->withTrashed()->whereNotNull('deleted_at')->where('id', $id)->where('user_id', Auth::id())->firstOrFail() : OrderForm::with('Staff')->withTrashed()->whereNotNull('deleted_at')->findOrFail($id);
        $staff = User::where("userType", "!=" , 1)->where("status", 1)->orderBy('id', 'DESC')->get();
        return view('pages.admin.order_form.display_trash')->with('data',$data)->with('staff',$staff);
    }

    public function excel(){
        return Excel::download(new OrderFormExport, 'order_form.xlsx');
    }



}
