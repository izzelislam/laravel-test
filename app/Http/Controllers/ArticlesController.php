<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Catagory;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $article=Article::all();
        return view('/article/index',['article'=>$article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $article=Catagory::orderBy('name')->get();
        $user=User::orderBy('name')->get();
        return view('/article/create',['article'=>$article],['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $article=New Article;
      $article->Catagory_id=$request->catagory;
      $article->title=$request->title;
      $article->content=$request->content;
      $article->created_by=$request->author;
      $article->status=$request->status;

      $article->save();
      return redirect('/article')->with('success','berhasil tampah article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article['article']=Article::find($id);
        $catagory['catagory']=Catagory::all();
        // $dam['user']=User::all();
        return view('/article/edit',$article,$catagory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $article=Article::Where('id',$request->id)->update([
            'catagory_id'=>$request->catagory,
            'title'=>$request->title,
            'content'=>$request->content,
            'created_by'=>$request->author,         
            'status'=>$request->status
        ]);
        return redirect('article')->with('update','berhasil update article'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect('/article')->with('delete','berhasil hapus article');

    }
}
