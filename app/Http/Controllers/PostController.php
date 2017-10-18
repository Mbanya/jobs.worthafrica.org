<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function view;


class PostController extends Controller
{
//    public function __construct(PostsRepositoryInterface $post)
//    {
//        $this->middleware('organisation', ['only' => ['create', 'store']]);
//        $this->post = $post;
//
//    }

    private $post;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = ('Latest Jobs');
        $post= Post::all();
        return view('posts.list', compact('title', 'post'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create($request->all());
        Post::all()->chunk(50);
        return redirect()->route('posts.index')->with(['message'=> 'Your job is now posted']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =Post::where('id',$id);
        $title = $post->Job_title;

        return view('posts.index', compact('post', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function postApply(Request $request)
    {
        $post =Post::find('id',$request->route('id'));
//        $post = $this->post->getById($request->route('id'));
        $resume = $request->file('resume')->move(public_path() . '/uploads/resumes', sprintf('%s-%s.%s', Carbon::now()->format('d-m-Y-h-m-s'), str_random(), explode('/', $request->file('resume')->getMimeType())[1]));
        $this->applyEmail($post->user, $request, $post, sprintf('%s/%s/%s', public_path(), 'uploads/resumes', $resume->getFilename()));
        File::delete(sprintf('%s/%s/%s', public_path(), 'uploads/resumes', $resume->getFilename()));

        return redirect()->back()->with('flashSuccess', ('Your application is now sent'));
    }

    private function applyEmail(User $to, Request $request, $post, $resume)
    {
        $subject = $request->get('name') . '-' . config('app.name');
        $view = 'emails.usermailer.apply';
        $data = [
            'senderEmail'    => $request->get('email'),
            'senderFullname' => ucfirst($request->get('name')),
            'senderPhone'    => $request->get('phone'),
            'attachment'     => $resume,
            'appliedFor'     => $post->title,
            'appliedForLink' => route('posts.main', ['id' => $request->route('id'), $request->route('slug')]),
        ];

        return $this->sendTo($to, $subject, $view, $data);
    }


}
