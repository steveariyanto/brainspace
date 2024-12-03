<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectApprovalController extends Controller
{
    public function index() {
        return view("admin.project-approval.index");
    }
}
