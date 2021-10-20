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
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Add Category</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                           <form action="/vendor/category" method="POST">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="cat_name" placeholder="Category Name">
                                        <p class="red">{{$errors->first('cat_name')}}</p>
                                    </div>
                                </div>
                                <input type="submit" name="time" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('/vendor.includes.footer')        
