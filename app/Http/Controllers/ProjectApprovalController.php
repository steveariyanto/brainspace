<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectApprovalController extends Controller
{
    public function index() {
        if(auth()->user()->role != "admin") return redirect("/");

        return view("admin.project-approval.index");
    }
}
