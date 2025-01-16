<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class HomeController extends Controller
{
    public function index(Request $request) {
        $search = $request->query("search");
        $data = [];
        $contents = Project::where('project_status_id', 1)
            ->when($search != "", function ($data) use ($search) {
                $data->where("projects_title", "LIKE", "%".$search."$");
            })
            ->get();

        foreach($contents as $content) {
            $key = array_search($content->categories_id, array_column($data, 'id'));

            if($key <= -1) {
                $data[] = [
                    'id' => $content->categories_id,
                    'name' => $content->category->name,
                    'contents' => [
                        [
                            'id' => $content->projects_id,
                            'title' => $content->projects_title,
                            'uploader' => $content->user->name,
                            'project_link' => $content->project_link,
                        ]
                    ]
                ];
            } else {
                array_push($data[$key]['contents'], [
                    'id' => $content->projects_id,
                    'title' => $content->projects_title,
                    'uploader' => $content->user->name,
                    'project_link' => $content->project_link,
                ]);
            }
        }

        // return $data;
        return view("home", compact("data"));
    }
}
