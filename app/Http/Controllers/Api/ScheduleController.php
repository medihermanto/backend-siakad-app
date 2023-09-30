<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $schedules = Schedule::where('student_id', '=', $user->id)->get();
        return ScheduleResource::collection($schedules->load('subject'));
    }
}
