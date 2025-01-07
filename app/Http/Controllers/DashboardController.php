<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class DashboardController extends Controller
{

    public function index() {
        $data_per_kategori = [];
        $contents = Project::get();

        foreach($contents as $content) {
            $key = array_search($content->categories_id, array_column($data_per_kategori, 'id'));

            if($key <= -1) {
                $data_per_kategori[] = [
                    'id' => $content->categories_id,
                    'name' => $content->category->name,
                    'count' => 1,
                ];
            } else {
                $data_per_kategori[$key]['count']++;
            }
        }

        $data = [
            'data_per_kategori' => $data_per_kategori,
            'requested_konten' => $contents->where("project_status_id", 2)->count(),
            'approved_konten' => $contents->where("project_status_id", 1)->count(),
            'rejected_konten' => $contents->where("project_status_id", 3)->count(),
        ];

        // return $data;
        return view("admin.dashboard", compact('data')  );
    }
}
