<?php
namespace App\Http\Controllers;

use App\Models\Episode;

class EpisodesController extends BaseController
{
    public function __construct()
    {
       $this->class = Episode::class;
    }
}

