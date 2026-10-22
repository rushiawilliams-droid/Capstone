<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        return view('home');
    }

    public function manage() {
        $portfolios = Portfolio::all();
        return view('portfolios.index', compact('portfolios'));
    }

    public function create() {
        return view('portfolios.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'full_name' => 'required',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'email' => 'required|email',
            'contact_number' => 'required',
            'address' => 'required',
            'about_me' => 'required',
            'educational_background' => 'required',
            'skills' => 'required',
            'projects' => 'required',
            'work_experience' => 'required',
            'social_links' => 'nullable',
        ]);

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profiles', 'public');
        }

        $portfolio = Portfolio::create($data);
        return redirect()->to('/select-template/' . $portfolio->id);
    }

    public function selectTemplate($id) {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolios.select_template', compact('portfolio'));
    }

    public function updateTemplate(Request $request, $id) {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->update(['template_id' => $request->template_id]);
        return redirect()->to('/preview/' . $portfolio->id);
    }

    public function preview($id) {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolios.templates.template_' . $portfolio->template_id, compact('portfolio'));
    }

    public function edit($id) {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, $id) {
        $portfolio = Portfolio::findOrFail($id);
        $data = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'address' => 'required',
            'about_me' => 'required',
            'educational_background' => 'required',
            'skills' => 'required',
            'projects' => 'required',
            'work_experience' => 'required',
            'social_links' => 'nullable',
        ]);

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profiles', 'public');
        }

        $portfolio->update($data);
        return redirect()->to('/portfolios');
    }

    public function destroy($id) {
        Portfolio::destroy($id);
        return redirect()->to('/portfolios');
    }
}