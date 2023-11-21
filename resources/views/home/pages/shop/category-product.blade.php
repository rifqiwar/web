@extends('home.layouts.layout-pages')
@section('content')
<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2 mb-100">
                <div class="ltn__shop-options"  style="border-radius: 15px">
                    <ul>
                        <li>
                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i
                                            class="fas fa-th-large"></i></a>
                                    <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="short-by text-center">
                                <select class="nice-select">
                                    <option>Default sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="showing-product-number text-right text-end">
                                <span>Showing {{$product->currentPage()}} of {{$product->total()}} results</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 mb-4" style="text-align: center">
                    @foreach ($product as $item)
                        @if (count($item->children) > 0)
                            @foreach ($item->children as $subcategory)
                                <a href="{{route('shop.category',$subcategory->slug ?? '')}}" type="button" class="btn-small btn-white">{{$subcategory->name}}</a>
                            @endforeach
                        @endif
                    @endforeach
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                @foreach ($product as $item)
                                @if (count($item->product) > 0)
                                    @foreach ($item->product as $product)
                                        <div class="col-xl-4 col-sm-6 col-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="{{route('product.detail',$product->slug)}}"><img
                                                            style="width: 300px; height:200px; object-fit:cover; "
                                                            src="{{$product->productImages->count() ? $product->productImages->first()->image : ''}}"
                                                            alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <h2 class="product-title " style="text-align: left;display: block;
                                                                white-space: nowrap;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis; "><a
                                                                        href="{{route('product.detail',$product->slug)}}">{{$product->title}}</a>
                                                                </h2>
                                                                <p style="font-size: .75rem;text-align: left">
                                                                    {{$product->category->name ?? ''}}
                                                                </p>
                                                            </div>
                                                            @if ($product->link)
                                                            <div class="col-lg-6" style="text-align: right">
                                                                <a href="{{$product->link}}" target="_blank" class="">
                                                                    <button class="btn-small theme-btn-5">Demo</button>
                                                                </a>
                                                            </div>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                @if (count($item->productsub) > 0)
                                    @foreach ($item->productsub as $subproduct)
                                        <div class="col-xl-4 col-sm-6 col-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="{{route('product.detail',$subproduct->slug)}}"><img
                                                            style="width: 300px; height:200px; object-fit:cover; "
                                                            src="{{$subproduct->productImages->count() ? $subproduct->productImages->first()->image : ''}}"
                                                            alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <h2 class="product-title " style="text-align: left;display: block;
                                                                white-space: nowrap;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis; "><a
                                                                        href="{{route('product.detail',$subproduct->slug)}}">{{$subproduct->title}}</a>
                                                                </h2>
                                                                <p style="font-size: .75rem;text-align: left">
                                                                    {{$subproduct->category->name ?? ''}}
                                                                </p>
                                                            </div>
                                                            @if ($subproduct->link)
                                                            <div class="col-lg-6" style="text-align: right">
                                                                <a href="{{$subproduct->link}}" target="_blank" class="">
                                                                    <button class="btn-small theme-btn-5">Demo</button>
                                                                </a>
                                                            </div>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <!-- ltn__product-item -->
                                <!-- ltn__product-item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_product_list">
                        <div class="ltn__product-tab-content-inner ltn__product-list-view">
                            <div class="row">
                                <!-- ltn__product-item -->
                                {{-- @foreach ($product->product as $item)
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-3">
                                        <div class="product-img">
                                            <a href="{{route('product.detail',$item->slug)}}">
                                                <img src="{{$item->productImages->count() ? $item->productImages->first()->image : ''}}"
                                                    alt="#">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a
                                                    href="{route('product.detail',$item->slug)}}">{{$item->title}}</a>
                                            </h2>
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product-price">
                                                <span>Rp {{$item->price}}</span>
                                                <del>Rp {{$item->price}}</del>
                                            </div>
                                            <div class="product-brief">
                                                <p>{!!$item->description!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- {{ $product->links('vendor.pagination.default') }} --}}

            </div>
            @include('home.includes.shop-product-category')
            {{-- <div class="col-lg-4  mb-100">
                <aside class="sidebar ltn__shop-sidebar">
                    <!-- Category Widget -->
                    <div class="widget ltn__menu-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                        <ul>
                            @foreach ($category as $item)
                            <li><a href="#">{{$item->name}} <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Search Widget -->
                    <div class="widget ltn__search-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search your keyword...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>

                </aside>
            </div> --}}
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->
@endsection
