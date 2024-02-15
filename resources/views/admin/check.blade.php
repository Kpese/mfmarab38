public function update(Request $request, BlogPost $blog, $id)
{

    $blog = BlogPost::with('blogCategory')->find($id);

    $path = public_path() . '/images/blog';

    $oldPhoto = $path . '/' . $blog->image;

    $request->validate([
        'title' => 'required',
        'category' => 'required|numeric',
        'blog_content' => 'required'

    ]);

    $file = $request->file('file');

    if ($file) {

        $filename = date('YmdHi') . "-blog." . $request->file->extension();

        $path = public_path() . '/images/blog';
    } else {

        $filename = $blog->image;
    }

    if ($request->status == 'on') {
        $status = 1;
    } else {
        $status = 0;
    }

    if ($request->slider == 'on') {
        $slider = 1;
    } else {
        $slider = 0;
    }

    $blog->title = $request->title;
    $blog->slug = Str::slug($request->title);
    $blog->category_id = $request->category;
    $blog->contents = $request->blog_content;
    $blog->image = $filename;
    $blog->status = $status;
    $blog->is_slider = $slider;


    $saved = $blog->save();

    if ($saved && $file) {

        unlink($oldPhoto);

        $file->move(public_path('images/blog'), $filename);
    }


    return back()->with('success', 'Blog updated successfully');
}
