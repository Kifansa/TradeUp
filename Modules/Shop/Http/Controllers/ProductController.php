<?php

namespace Modules\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Shop\Entities\Product;
use Modules\Shop\Repositories\Front\Interfaces\ProductRepositoryInterface;
use Modules\Shop\Repositories\Front\Interfaces\CategoryRepositoryInterface;
use Modules\Shop\Repositories\Front\Interfaces\TagRepositoryInterface;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;
    protected $tagRepository;

    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository, TagRepositoryInterface $tagRepository)
    {
        parent::__construct();

        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->tagRepository = $tagRepository;

        $this->data['categories'] = $this->categoryRepository->findAll();
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // return view('shop::index');

        // $product = Product::get();
        // dd($product);
        // $this->data['products'] = Product::paginate($this->perPage);
        // $this->data['products'] = Product::paginate($this->perPage);

        $options = [
            'per_page' => $this->perPage,
        ];

        $this->data['products'] = $this->productRepository->findAll($options);
        // dd($this->data);
        return $this->loadTheme('products.index', $this->data);
    }

    public function category($categorySlug)
    {
        $category = $this->categoryRepository->findBySlug($categorySlug);

        $options = [
            'per_page' => $this->perPage,
            'filter' => [
                'category' => $categorySlug,
            ]
        ];

        $this->data['products'] = $this->productRepository->findAll($options);
        $this->data['category'] = $category;

        return $this->loadTheme('products.category', $this->data);
    }

    public function tag($tagSlug)
    {
        $tag = $this->tagRepository->findBySlug($tagSlug);

        $options = [
            'per_page' => $this->perPage,
            'filter' => [
                'tag' => $tagSlug,
            ]
        ];

        $this->data['products'] = $this->productRepository->findAll($options);
        $this->data['tag'] = $tag;

        return $this->loadTheme('products.tag', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('shop::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    // public function show($id)
    // {
    //     // return view('shop::show');

    // }

    public function show($categorySlug, $productSlug)
    {
        $sku = Arr::last(explode('-', $productSlug));

        $product = $this->productRepository->findBySKU($sku);

        $this->data['product'] = $product;

        return $this->loadTheme('products.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('shop::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
