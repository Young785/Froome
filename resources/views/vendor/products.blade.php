@include('/vendor.includes.header')        
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                @if (session()->has('msg'))
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 alert alert-success text-center remove">
                        Product Addeed Successfully!
                    </div>
                @endif
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        @foreach ($products as $product)
                            @php
                                $user = App\Models\User::where('id', $product->user_id)->first();
                                $cat = App\Models\Category::where('id', $product->category_id)->first();
                                $data = explode(' ', $user->name);
                                $p_name = "";
                                $p_name_s = "";

                                foreach ($data as $key => $value) {
                                    $p_name .= $value[0];
                                    $p_name_s .= $value[1];
                                }
                            @endphp
                            <a href="#" data-toggle="modal" data-target="#productModal{{ $product->product_id }}">
                                <div class="card component-card_9 card_9">
                                    <img src="/admin/products/{{ json_decode($product->product_images, true)[0] }}" style="height: 170px;" class="card-img-top" alt="widget-card-2">
                                    <div class="card-body">
                                        <p class="meta-date">{{ $product->created_at->diffForHumans() }}</p>
                                        <h5 class="card-title">{{ $product->product_name }}</h5>
                                        <p class="card-text">{{ Str::substr($product->product_desc, 0, 50) }}</p>
                                        <div class="meta-info">
                                            <div class="meta-user">
                                                <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle">{{ $p_name}}{{  $p_name_s }}</span>
                                                </div>
                                                <div class="user-name">{{ $user->name }}</div>
                                            </div>
                                            <div class="meta-action">
                                                <div class="meta-likes">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> {{ 51 }}
                                                </div>

                                                <div class="meta-view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> {{ 250 }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="modal fade product-modal show" id="productModal{{ $product->product_id }}" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                                <div class="modal-dialog card-mdiv" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" id="productModalLabel">
                                    <h4 class="modal-title">product</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                    </div>
                                    <div class="card component-card_9 card_9" style="width: 95% !important;height: 450px;">
                                        <div style="height: 48%;">
                                            <img src="/admin/products/images (26).jpg" class="card-img-t" alt="widget-card-2">
                                            <div style="float: right; width: 33%;">
                                                <img src="/admin/products/{{ json_decode($product->product_images, true)[0] }}" class="card-img-t2" alt="widget-card-2">
                                                <img src="/admin/products/{{ json_decode($product->product_images, true)[1] }}" class="card-img-t2" alt="widget-card-2">
                                                <img src="/admin/products/{{ json_decode($product->product_images, true)[2] }}" class="card-img-t2" alt="widget-card-2">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="meta-date">{{ $product->created_at->diffForHumans() }}</p>
                                            <h5 class="card-title">{{ $product->product_name }}</h5>
                                            <p class="card-text">{{ Str::substr($product->product_desc, 0, 50) }}</p>
                                            <div class="meta-info">
                                                <div class="meta-user">
                                                    <div class="avatar avatar-sm">
                                                    <span class="avatar-title rounded-circle">{{ $p_name}}{{  $p_name_s }}</span>
                                                    </div>
                                                    <div class="user-name">{{ $user->name }}</div>
                                                </div>
                                                <div class="meta-action">
                                                    <div class="meta-likes">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> 51
                                                    </div>

                                                    <div class="meta-view">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> 250
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
@include('/vendor.includes.footer')        