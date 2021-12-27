<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\DeleteFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminFaqController extends Controller
{

    public function index()
    {
        $faqs = Faq::get();
        return view('Admin.faq.faqs',compact('faqs'));
    }

    public function create()
    {
        return view('Admin.faq.create');
    }

    /**
     * @param CreateFaqRequest $request
     * 1- store data.
     * 2- return.
     */
    public function store(CreateFaqRequest $request)
    {
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        Alert::success('Success', 'Faq Was Created !');

        return redirect()->back();
    }

    public function delete(DeleteFaqRequest $request)
    {
        Faq::where('id', $request->faq_id)->delete();

        Alert::success('Success', 'Faq Was Deleted !');

        return redirect()->back();
    }

    public function edit($faqId)
    {
        $faq = Faq::find($faqId);
        return view('Admin.faq.edit', compact('faq'));
    }

    /**
     * @param UpdateFaqRequest $request
     * 1- get faq data.
     * 2- update.
     * 3-fire alert.
     * 4- return
     */
    public function update(UpdateFaqRequest $request)
    {

        $faq = Faq::find($request->faq_id);
        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        Alert::success('Success', 'Faq Was Updated !');
        return redirect(route('faqs'));

    }
}
