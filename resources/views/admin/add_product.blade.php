@include('/vendor.includes.header')        
<div id="content" class="main-content">
    <div class="container">
            <div class="row">
                <div id="form_grid_layouts" class="col-lg-12">
                    <div class="seperator-header">
                        <h4 class="">Category</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-8 layout-spacing">
                    <div class="statbox widget box box-shadow" style="width: 620px;">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Add Category</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="/vendor/add-products" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control" name="product_name" value="{{ old('product_name')}}" placeholder="Product Name">
                                    <p class="red">{{$errors->first('product_name')}}</p>
                                </div>
                                <div class="form-group mb-4">
                                    <select class="form-control" name="category_id" value="{{ old('category_id')}}" id="exampleFormControlSelect1">
                                        <option disabled>Seclect Category</option>
                                        @foreach ($cats as $cat)
                                            <option value='{{ $cat->id }}'>{{ $cat->cat_name }}</option>
                                        @endforeach
                                    </select>
                                    <p class="red">{{$errors->first('category_id')}}</p>
                                </div>
                                <div class="custom-file mb-4">
                                    <input type="file" class="custom-file-input" name="product_images[]" id="customFile" multiple>
                                    <label class="custom-file-label" for="customFile">Choose Product ima...</label>
                                    <p class="red">{{$errors->first('product_images')}}</p>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="number" class="form-control" name="product_price" value="{{ old('product_price')}}" placeholder="Product Price">
                                    <p class="red">{{$errors->first('product_price')}}</p>
                                </div>
                                <div class="form-group mb-4">
                                    <textarea type="text" class="form-control" name="product_desc" value="{{ old('product_desc')}}" col="10" rwo="10" placeholder="Product Description"></textarea>
                                    <p class="red">{{$errors->first('product_desc')}}</p>
                                </div>
                                <input type="submit" name="time" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('/vendor.includes.footer')        
