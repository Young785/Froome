@include('/vendor.includes.header')  
<style>
    .red{
        color: red;
        margin-top: 10px;
        margin-left: 10px;
    }
</style>      
<div id="content" class="main-content">
    <div class="container">
            <div class="row">
                <div id="form_grid_layouts" class="col-lg-12">
                    <div class="seperator-header">
                        <h4 class="">Account</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-8 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Edit Acoount</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                           <form action="/vendor/account" method="POST">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="text" class="form-control" name="fname" value="{{ $user->fname }}" placeholder="Fullname">
                                        <p class="red">{{$errors->first('fname')}}</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Username">
                                        <p class="red">{{$errors->first('name')}}</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="email" class="form-control" disabled value="{{ $user->email }}" placeholder="Email">
                                        <p class="red">I want to change my Email? <a href="#change_email"> Click me </a></p>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="Phone">
                                        <p class="red">{{$errors->first('phone')}}</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <input type="date" class="form-control" name="dob" value="{{ $user->dob }}" placeholder="Date of Birth">
                                        <p class="red">{{$errors->first('dob')}}</p>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="address" value="{{ $user->address }}" placeholder="Address">
                                        <p class="red">{{$errors->first('address')}}</p>
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
