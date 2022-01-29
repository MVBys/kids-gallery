<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Voting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\StoreWorkRequest;
use App\Http\Requests\UpdateWorkRequest;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getWorksComplitedContest($contest_id)
    {
        $works = Work::where('contest_id', $contest_id)->orderBy('sum_of_points', 'desc')->get();
        return view('gallery.complitedContest', compact('works'));
    }

    public function getWorkVotingContest($contest_id)
    {

        if (!request()->cookie('voting_token')) {
            $work = Work::where('contest_id', $contest_id)->orderBy('number_of_votes')->first();
            $voting = new Voting;
            $voting->token = uniqid('voting_token_', true);
            $voting->works_ids = $work->id . '|';
            $voting->droped_at = $work->contest->completion_at;
            $voting->updated_at = date("Y-m-d H:i:s");
            $voting->created_at = date("Y-m-d H:i:s");
            $voting->save();

            return response()->view('gallery.voitingWork', compact('work'))->cookie('voting_token', $voting->token, 115);
        }

        $works_ids = Voting::where('token', request()->cookie('voting_token'))->first();

        if (!$works_ids) {
            return redirect()->route('works.voting.contest', $contest_id)->withoutCookie('voting_token');
        }

        $ids = Str::of($works_ids->works_ids)->explode('|');

        $work = Work::where('contest_id', $contest_id)
            ->whereNotIn('id', $ids)
            ->orderBy('number_of_votes')
            ->first();


        if(!$work) return view('gallery.messageNoWorks');;

        return view('gallery.voitingWork', compact('work'));

    }

    public function getNextVotingWork(Request $request, $work_id)
    {

        $mark = $request->validate([
            'rate' => 'required|numeric|between:1,5',
        ]);
        $work = Work::findOrFail($work_id);


        if (!$request->cookie('voting_token')) {
            return redirect()->route('works.voting.contest', $work->contest->id);
        }

        $works_ids = Voting::where('token', $request->cookie('voting_token'))->first();


        if (!$works_ids) {
            return redirect()->route('works.voting.contest', $work->contest->id);
        }


        $works_ids->works_ids .= $work_id . '|';
        $works_ids->save();

        $work->sum_of_points += $mark['rate'];
        $work->number_of_votes += 1;
        $work->save();


        return redirect()->route('works.voting.contest', $work->contest->id);
    }



    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreWorkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkRequest  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkRequest $request, Work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        //
    }
}
