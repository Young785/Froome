@include('/vendor.includes.header')        
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                @if (session()->has('msg'))
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 alert alert-success text-center remove">
                        Category Addeed Successfully!
                    </div>
                @endif
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="table-responsive">
                                <table id="zero-config" class="table table-striped dataTable" style="width: 100%;" role="grid" aria-describedby="zero-config_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 129px;">ID</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 129px;">Category Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 199px;">Posted By</th>
                                        <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 99px;">Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 99px;">Actions</th>
                                </thead>
                                @php
                                    // $i = 1;
                                    // while ($i <= count($cats)) {
                                    //     echo $i++;
                                    // }
                                    for ($i=0; $i < count($cats); $i++) { 
                                    }
                                @endphp
                                <tbody>
                                    @foreach ($cats as $cat)
                                        <tr role="row">
                                            @php
                                                $user = App\Models\User::where('id', $cat->admin_id)->first();
                                            @endphp
                                            <td class="sorting_1">{{ $i++ }}</td>
                                            <td>{{ $cat->cat_name}}</td>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $cat->created_at->diffForHumans() }}</td>
                                            <td>
                                                @if ($cat->admin_id == Auth::user()->id)
                                                    <button class="btn btn-primary btn-sm">Edit</button>    
                                                    <button class="btn btn-danger btn-sm" style="float: right;">Delete</button>    
                                                    @else
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('/vendor.includes.footer')        