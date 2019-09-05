<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() {

    }

    /**
     * Show the form for creating a new resources
     * @return \Illumuminate\Http\Response
     */
    public function create() {


        return view('questions.create');
    }


    /**
     * Store a newly created resource in storage
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // validate the form data
        $this->validate($request, [
            'title' => 'required | max:255'
        ]);
        // process the data and submit it
        $question = new Question();
        $question->title = $request->title;
        $question->description = $request->description;

        // if successful we move to redirect to create new one
            if ($question->save()) {
                return redirect() -> route('questions.show', $question->id);
            } else {
                return redirect()->route('question.create');
            }

    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
