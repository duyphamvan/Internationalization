<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 01/03/2019
 * Time: 23:06
 */

namespace App\Http\Services;


use App\Blog;
use App\Http\Repositories\BlogRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogServiceImpl implements BLogService
{
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        $blogs = $this->blogRepository->getAll();
        return $blogs;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        $blog = $this->blogRepository->findById($id);
        return $blog;
    }

    public function create($request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $blog->image = $path;
        }
        return $this->blogRepository->create($blog);
    }

    public function update($blog, $request)
    {
        // TODO: Implement update() method.

        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');//
        if ($request->hasFile('image')) {
            $currentImg = $blog->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $blog->image = $path;
        }

        return $this->blogRepository->update($blog);
    }

    public function destroy($id)
    {
        $blog = $this->blogRepository->findById($id);
        $image = $blog->image;
        if ($image) {
            Storage::delete('public' . $image);
        }
        $this->blogRepository->destroy($blog);
    }

}