<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use Log;
use Auth;
use App\User;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 一覧画面
     */
    public function index()
    {
        // 記事データを作成日時の降順で取得
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * 新規登録画面
     */
    public function create()
    {
    }

    /**
     * 新規登録処理
     */
    public function store(Request $request)
    {
    }

    /**
     * 参照画面
     */
    public function show($id)
    {
    }

    /**
     * 編集画面
     */
    public function edit($id)
    {
    }

    /**
     * 更新処理
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * 削除処理
     */
    public function destory($id)
    {
    }
    }