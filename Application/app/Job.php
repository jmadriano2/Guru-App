<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table = 'job';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $dates = ['deleted_at'];

    public function subjects()
    {
        return $this->hasMany(Subject::class,'job_id','id');
    }

    public function hr()
    {
        return $this->belongsTo(Hr::class,'user_id','user_id');
    }

    public function applicants()
    {
        return $this->belongsToMany(Faculty::class,'application','job_id','user_id')
            ->withTimestamps();
    }

    public function scopeSearch($query, $search_term, $free_day){
//        $s += 1;
//        $duh = Subject::pluck($s);
        return $query->where('title', 'like', '%' .$search_term. '%')
            ->orWhere('desc', 'like', '%' .$search_term. '%');
    }

    public function workDays()
    {
        //get all subjects that the job has
        $subjects = $this->subjects;
        //for all the subjects get their schedules and insert them in an array
        $days = array();
        foreach($subjects as $subject)
        {
            foreach($subject->schedules as $schedule)
            {
                if(!in_array($schedule->day,$days))
                {
                    array_push($days,$schedule->day);
                }
            }
        }
        return implode(" ",$days);
    }

    /*public function jobAtSchedule()
    {
        //get all the jobs that a user currently has
        $jobs = Array();
        $jobs = auth()->user()->jobs;

        $context = ['jobs',$jobs];

        return view('jobs.job-by-schedule')->with($context);
    }*/
}
