<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

//    protected $table = 'survey';
//    protected $fillable = [
//        'name', 'detail'
//    ];


    protected $table = 'roadmapProjects';
    protected $fillable = [
        'title', 'start_date', 'end_date', 'technologies', 'description', 'link_project', 'link_image', 'link_github'
    ];

}
