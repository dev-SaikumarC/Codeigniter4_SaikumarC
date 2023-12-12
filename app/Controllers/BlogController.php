<?php

namespace App\Controllers;

use App\Models\BlogModel;
// use BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->getBlogs();
        return view('blog', $data);
    }

    public function store()
    {
        $model = new BlogModel();
        $fileinfo = $this->request->getFile("profile_image");

        if (!empty($fileinfo)) {
            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
                'profile_image' => $fileinfo->getName(),
            ];
            $fileName = $fileinfo->getName();
            if ($fileinfo->move("images", $fileName)) {
                $blogs = $model->createBlog($data);
                if ($blogs) {
                    return redirect('/');
                } else {
                    return redirect('/');
                }
            } else {
                echo "Failed";
            }
        } else {
            echo "failed";
        }
    }
    public function update()
    {
        $model = new BlogModel();
        $fileinfo = $this->request->getFile("profile_image");
        $id = $this->request->getVar('id');

        if (!empty($fileinfo)) {
            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
                'profile_image' => $fileinfo->getName(),
            ];
            $fileName = $fileinfo->getName();
            if ($fileinfo->move("images", $fileName)) {
                $res = $model->updateBlog($id, $data);
                if ($res) {
                    return redirect('/');
                } else {
                    return redirect('/');
                }
            } else {
                echo "Failed";
            }
        } else {
            echo "failed";
        }
    }
    public function delete()
    {
        $id = $this->request->getVar('id');
        $model = new BlogModel();
        $res = $model->deleteBlog($id);

        if ($res >= 1) {
            return redirect('/');
        } else {
            return redirect('/');
        }
    }
}
