<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller {

        public function __construct() {
                $this->middleware('auth')->except(['index','show']);
        }
    
        public function index() {
                $posts = Post::latest()->paginate(5);
                return view('posts.index',compact('posts'));
        }
    
        public function create() {
                return view('posts.create');
        }

        public function store(Request $request) {
                $image = $request->file('image');
                if($image !== null ) {
                        $input['image'] = time().'.'.$image->getClientOriginalExtension();
                        $destinationPath = public_path('/images');
                        $image->move($destinationPath, $input['image']);
                } else {
                        $input['image'] = 'noimage.png';
                }

                $this->validate(request(),[
                        'title' => 'required',
                        'body' => 'required',
                    ]);
        
                $post = new Post;
                $post->title = $request->title;
                $post->user_id = auth()->id();
                $post->body = $request->body;
                $post->image = $input['image'];
                $post->save();
        
                return redirect('/');
        }
    
        public function show(Post $post) {
                return view('posts.show',compact('post'));
        }
    
        public function edit($id) {
                $post = Post::find($id);
                return view('posts.edit',compact('post'));
        }
    
        public function update(Request $request) {
                $id = $request->id;
                
                $post = Post::find($id);

                $this->validate(request(),[
                        'title' => 'required',
                        'body' => 'required',
                    ]);
                    
                $post->title = $request->title;
                $post->body = $request->body;
                $post->save();
        
                return redirect('/'.$id);
        }
    
            public function destroy(Request $request) {
                    $id = $request->id;
                    Post::destroy($id);
                    return redirect('/');
            }
}