<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * Class CategoryController
 *
 * @category CategoryController
 * @package  App\Http\Controllers
 * @author   Miroslav Orincak <username@example.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.gnu.org
 */
class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('categories.index', [
            'title' => 'Categories',
            'categories' => Category::all()
        ]);

    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Category $category)
    {

        return view('categories.show', [
            'title' => $category->title,
            'category' => $category
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('categories.edit', [
            'title' => 'Add new category'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'slug' => 'required'
            ]
        );

        $category = new Category;
        $category->title = $request->get('title');
        $category->slug = $request->get('slug', '');
        $category->text = $request->get('text', '');
        $category->user_id = auth()->user()->id;
        $category->save();

        return redirect()->back()->with('flash', 'Category added');
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Category $category)
    {
        return view('categories.edit', [
            'title' => $category->title,
            'category' => $category
        ]);
    }

    /**
     * @param Request $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(
            [
                'title' => 'required',
                'slug' => 'required'
            ]
        );

        $category = Category::find('category_id');
        $category->title = $request->get('title');
        $category->slug = $request->get('slug', '');
        $category->text = $request->get('text', '');
        $category->user_id = auth()->user()->id;
        $category->save();

        return redirect()->back()->with('flash', 'Category updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
