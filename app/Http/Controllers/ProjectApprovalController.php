<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectApprovalController extends Controller
{
    public function index() {
        if(auth()->user()->role == "user") return redirect()->intended(("/"));

        $projects = Project::with(['user', 'category', 'projectStatus', 'file'])->get();

        return view("admin.project-approval.index", compact('projects'));
    }

    public function approve($id) {
        $project = Project::find($id);
        $project->project_status_id = 1; // status approved
        $project->save();

        $notification = new Notification;
        $notification->user_id = $project->users_id;
        $notification->status = 0;
        $notification->message = "Konten {$project->projects_title} telah disetujui";
        $notification->save();

        return redirect()->back()->with('success', 'Project has been approved');
    }

    public function reject($id) {
        $project = Project::find($id);
        $project->project_status_id = 3; // status rejected
        $project->save();

        $notification = new Notification;
        $notification->user_id = $project->users_id;
        $notification->status = 0;
        $notification->message = "Konten {$project->projects_title} telah ditolak, silahkan ubah atau upload ulang kontennya.";
        $notification->save();

        return redirect()->back()->with('success', 'Project has been rejected');
    }
}
