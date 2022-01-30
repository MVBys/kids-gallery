<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Http\Requests\StoreContestRequest;
use App\Http\Requests\UpdateContestRequest;

class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $contest =Contest::findOrFail($id);

        if ($contest->status == 2) return redirect()->route('works.voting.contest', ['contest_id'=>$id, ]);

        if ($contest->status == 3) return redirect()->route('works.complited.contest', ['contest_id'=>$id, ]);

        return redirect('404');
    }



    public function chooseContestForParticipate()
    {
        $contests = Contest::where('status', 2)->get();

        return view('gallery.contestForParticipate', compact('contests'));
    }


    public function registrationInContest($contest_id)
    {
        $contest = Contest::findOrFail($contest_id);

        return view('gallery.formForParticipate', compact('contest'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function show(Contest $contest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function edit(Contest $contest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContestRequest  $request
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContestRequest $request, Contest $contest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contest $contest)
    {
        //
    }
}
