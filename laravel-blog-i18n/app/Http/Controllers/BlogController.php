<?php

namespace App\Http\Controllers;

use App\Http\Services\BLogService;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BLogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $blogs = $this->blogService->getAll();
        return view('index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = $this->blogService->findById($id);
        //dd($blog);
        return view('show', compact('blog'));
    }
     public function add()
     {
         //dd(1);
         return view('create');
     }

   public function store(Request $request)
   {
      $this->blogService->create($request);
      return redirect()->route('index');
   }

   public function  edit($id)
   {
       $blog = $this->blogService->findById($id);
       //dd($blog);
       return view('edit', compact('blog'));
   }
   public function update(Request $request, $id)
   {
       //dd($request);
        $blog = $this->blogService->findById($id);

        $this->blogService->update($blog,$request);
        return redirect()->route('index');
   }

   public function destroy($id)
   {
       $this->blogService->destroy($id);
       return redirect()->route('index');
   }
}
