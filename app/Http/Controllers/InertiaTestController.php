<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index(){
        return Inertia::render('Inertia/Index',[
            'blogs' => InertiaTest::all()
        ]);
    }
    public function create(){
        //コンポーネント
        return Inertia::render('Inertia/Create');
    }
    public function show($id){
        //Larabel側の検証
        // dd($id);
        return Inertia::render('Inertia/Show',[
            'id' => $id,
            'blog' => InertiaTest::findOrFail($id)
        ]);
    }
    public function store(Request $request){

        $validated = $request->validate([
        'title' => ['required', 'max:20'],
        'content' => 'required',
    ]);

        $inertiaTest = new InertiaTest;
        // 中身の設定
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();
        return to_route('inertia.index')->with([
            'message' => '登録しました'
        ]);
    }
    public function delete($id){

        $book = InertiaTest::findOrFail($id);
        $book -> delete();
        return to_route('inertia.index')
        -> with([
            'message' => '削除しました'
        ]);
    }
}
