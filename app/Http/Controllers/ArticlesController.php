<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        return  __METHOD__. '은(는)Article 컬렉션을 조회합니다.';
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        return  __METHOD__. '은(는)Article 만들기 위한 폼을 담은 뷰를 반환합니다.';
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        return  __METHOD__. '은(는) 사용자의 입력한 폼 데이터로 새로운 Article 컬렉션을 만듭니다.';
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
    public function show($id)
    {
        echo $foo;

        return  __METHOD__. '은(는) 다음 기본 키를 가진 Article 모델을 조회합니다.'. $id;
    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        return  __METHOD__. '은(는) 사용자의 입력한 폼 데이터로 다음 기본 키를 가진 Article 모델을 수정합니다.'. $id;
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        return  __METHOD__. '은(는) 사용자의 입력한 폼 데이터로 다음 기본 키를 가진 Article 모델을 수정합니다'. $id;
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        return  __METHOD__. '은(는) 다음 기본 키를 가진 Article 모델을 삭제합니다.'. $id;
//    }

    public  function index()
    {
//        $articles = Article::get();
//        $articles = Article::with('user')->get();
        $articles= Article::latest()->paginate(3);
        return view('articles.index', compact('articles'));
    }

    public function  add()
    {
        $articles=Article::get();
        $users=User::get();







        return view('articles.articleseadd',compact('articles','users'));

    }
    public function  add2(Request $req)
    {



        $flan = new Article();
        $flan ->user_id= $req->user_id;
        $flan ->title = $req->title;
        $flan->content=$req->content;
        $flan->save();






        return  redirect('articles');
    }
    function viewData($id)
    {
        $data=Article::find($id);
        return view('articles.articlesedit',['data'=>$data]);
    }
    public function create()
    {
        $articles=Article::get();
        $users=User::get();

        return view('articles.create',compact('articles','users'));
    }

    public function store(\App\Http\Requests\ArticleRequest $req)
    {
//        $rules = [
//            'user_id'=>['required'],
//            'title' => ['required'],
//            'content' => ['required', 'min:10'],
//            ];
//
//        $messages = [
//            'user_id.required' => '이름은 필수 입력 항목입니다.',
//            'title.required' => '제목은 필수 입력 항목입니다.',
//            'content.required' => '본문은 필수 입력입니다.',
//        ];
//
//        $validator = validator::make($req->all(), $rules, $messages);
//
//        if( $validator -> fails()) {
//            return back()->withErrors($validator)
//                ->withInput();
//        }

        $article = User::find(1)->articles()
            ->create($req->all());

        if( !$article) {
            return back()->with('flash_message', '글이 저장되지 않았습니다')
                        ->withInput();
        }

//        var_dump('이벤트를 던집니다.');
//        event('article.created',[$article]);
//        var_dump('이벤트를 던졌습니다');

//        return redirect(route('articles.index'))
//                ->with('flash_message', '작성하신 글이 저장되었습니다.');

        event(new \App\Events\ArticlesEvent($article));
        return redirect(route('articles.index')) ->with('flash_message', '작성하신 글이 저장되었습니다');

    }
}
