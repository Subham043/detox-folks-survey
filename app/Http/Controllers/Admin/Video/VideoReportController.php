<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use URL;
use Illuminate\Support\Facades\View;
use App\Models\VideoReport;
use App\Models\VideoModel;
use App\Support\Types\UserType;
use Illuminate\Support\Facades\Validator;

class VideoReportController extends Controller
{
    public function __construct()
    {

       View::share('common', [
         'user_type' => UserType::lists()
        ]);
    }

    public function viewreport(Request $request) {
        if ($request->has('search')) {
            $search = $request->input('search');
            $data = VideoReport::with(['VideoModel','User'])
            ->whereHas('VideoModel', function($q) {
                $q->whereNull('deleted_at');
            })
            ->whereHas('User', function($q) {
                $q->whereNull('deleted_at');
            })
            ->orWhereHas('VideoModel', function($q)  use ($search){
                $q->where('title', 'like', '%' . $search . '%')
                ->orWhere('uuid', 'like', '%' . $search . '%');
            })
            ->orWhereHas('User', function($q)  use ($search){
                $q->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
            })
            ->orderBy('id', 'DESC')
            ->paginate(10);
        }else{
            $data = VideoReport::with(['VideoModel','User'])
            ->whereHas('VideoModel', function($q) {
                $q->whereNull('deleted_at');
            })
            ->whereHas('User', function($q) {
                $q->whereNull('deleted_at');
            })
            ->orderBy('id', 'DESC')->paginate(10);
        }
        return view('pages.admin.video.report_list')
        ->with('country', $data);
    }

    public function deleteReport($id){
        $data = VideoReport::with(['VideoModel','User'])
        ->whereHas('VideoModel', function($q) {
            $q->whereNull('deleted_at');
        })
        ->whereHas('User', function($q) {
            $q->whereNull('deleted_at');
        })
        ->findOrFail($id);
        $data->forceDelete();
        return redirect()->intended(route('video_view_report'))->with('success_status', 'Data Deleted successfully.');
    }

    public function toggleReport($id, Request $request){
        if ($request->has('status')) {
            $data = VideoReport::with(['VideoModel','User'])
            ->whereHas('VideoModel', function($q) {
                $q->whereNull('deleted_at');
            })
            ->whereHas('User', function($q) {
                $q->whereNull('deleted_at');
            })
            ->findOrFail($id);
            switch ($request->input('status')) {
                case '0':
                case '1':
                case '2':
                    # code...
                    $data->status = $request->input('status');
                    $data->admin_id = Auth::user()->id;
                    $data->save();
                    return redirect()->intended(URL::previous())->with('success_status', 'Status updated successfully.');
                    break;
                
                default:
                    # code...
                    return redirect()->intended(URL::previous())->with('error_status', 'Invalid status found.');
                    break;
            }
        }else{
            return redirect()->intended(URL::previous())->with('error_status', 'No status found.');
        }
    }

    public function displayReport($id) {
        $data = VideoReport::findOrFail($id);
        return view('pages.admin.video.report_display')->with('country',$data);
    }
    



}