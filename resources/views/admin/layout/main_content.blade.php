@extends('admin.layout.admin_dashboard')

@section('title', 'Admin Dashboard')

@section('admin_content')
<!--begin::Dashboard-->
<!--begin::Row - Stat Cards-->
<div class="row">
    <!-- Messages Card -->
    <div class="col-xl-3 col-sm-6">
        <a href="{{ route('admin.contact.index') }}" class="card card-custom bg-light-primary card-stretch gutter-b text-decoration-none">
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-primary">
                    <i class="flaticon2-chat-1 icon-2x text-primary"></i>
                </span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $messageCount ?? 0 }}</span>
                <span class="font-weight-bold text-muted font-size-sm">Client Inquiries</span>
            </div>
        </a>
    </div>

    <!-- Products Card -->
    <div class="col-xl-3 col-sm-6">
        <a href="{{ route('admin.products.index') }}" class="card card-custom bg-light-success card-stretch gutter-b text-decoration-none">
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-success">
                    <i class="flaticon2-box-1 icon-2x text-success"></i>
                </span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $productCount ?? 0 }}</span>
                <span class="font-weight-bold text-muted font-size-sm">Software Products</span>
            </div>
        </a>
    </div>

    <!-- Blogs Card -->
    <div class="col-xl-3 col-sm-6">
        <a href="{{ route('admin.blogs.index') }}" class="card card-custom bg-light-warning card-stretch gutter-b text-decoration-none">
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-warning">
                    <i class="flaticon2-pen icon-2x text-warning"></i>
                </span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $blogCount ?? 0 }}</span>
                <span class="font-weight-bold text-muted font-size-sm">Blog Articles</span>
            </div>
        </a>
    </div>

    <!-- Portfolio Card -->
    <div class="col-xl-3 col-sm-6">
        <a href="{{ route('admin.portfolios.index') }}" class="card card-custom bg-light-info card-stretch gutter-b text-decoration-none">
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-info">
                    <i class="flaticon2-layers-1 icon-2x text-info"></i>
                </span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{ $portfolioCount ?? 0 }}</span>
                <span class="font-weight-bold text-muted font-size-sm">Portfolio Items</span>
            </div>
        </a>
    </div>
</div>
<!--end::Row-->

<!--begin::Row - Main Section-->
<div class="row">
    <!-- Left Column (8 cols): Inquiries & Products -->
    <div class="col-xl-8">

        <!-- Recent Contact Messages Card -->
        <div class="card card-custom gutter-b">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Recent Inquiries</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Latest contact messages from website</span>
                </h3>
                <div class="card-toolbar">
                    <a href="{{ route('admin.contact.index') }}" class="btn btn-light-primary font-weight-bolder btn-sm">View All</a>
                </div>
            </div>
            <div class="card-body pt-2">
                @php $msgs = $messages ?? $recentMessages ?? collect(); @endphp
                @if ($msgs->count())
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <thead>
                                <tr>
                                    <th class="p-0" style="width: 50px"></th>
                                    <th class="p-0" style="min-width: 140px"></th>
                                    <th class="p-0" style="min-width: 150px"></th>
                                    <th class="p-0" style="min-width: 100px"></th>
                                    <th class="p-0 text-right" style="min-width: 60px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($msgs->take(5) as $msg)
                                <tr>
                                    <td class="pl-0 py-4">
                                        <div class="symbol symbol-50 symbol-light-primary mr-1">
                                            <span class="symbol-label font-size-h5 font-weight-bold">{{ strtoupper(substr($msg->name ?? 'U', 0, 1)) }}</span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a href="{{ route('admin.contact.show', $msg->id) }}" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $msg->name }}</a>
                                        <span class="text-muted font-weight-bold d-block font-size-sm">{{ $msg->email }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-sm">{{ Str::limit($msg->subject ?? 'Inquiry', 25) }}</span>
                                        <span class="text-muted font-weight-bold font-size-xs">{{ Str::limit($msg->message, 35) }}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-weight-bold font-size-sm">{{ $msg->created_at ? $msg->created_at->diffForHumans() : '' }}</span>
                                    </td>
                                    <td class="text-right pr-0">
                                        <a href="{{ route('admin.contact.show', $msg->id) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                            <i class="flaticon-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-8 text-muted font-size-sm">
                        No messages received yet.
                    </div>
                @endif
            </div>
        </div>

        <!-- Recent Products Card -->
        <div class="card card-custom gutter-b">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Software Products</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">Recently added digital products</span>
                </h3>
                <div class="card-toolbar">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-light-success font-weight-bolder btn-sm">Manage Products</a>
                </div>
            </div>
            <div class="card-body pt-2">
                @if(isset($products) && $products->count())
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <thead>
                                <tr class="text-left text-uppercase">
                                    <th class="pl-0 text-muted font-weight-bold" style="min-width: 140px">Product</th>
                                    <th class="text-muted font-weight-bold" style="min-width: 100px">Category</th>
                                    <th class="text-muted font-weight-bold" style="min-width: 80px">Status</th>
                                    <th class="text-right pr-0 text-muted font-weight-bold" style="min-width: 80px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products->take(5) as $product)
                                <tr>
                                    <td class="pl-0 py-3 font-weight-bolder text-dark-75">
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        <span class="label label-lg label-light-primary label-inline font-weight-bold">{{ $product->category->name ?? 'General' }}</span>
                                    </td>
                                    <td>
                                        @if(($product->status ?? 'active') === 'active')
                                            <span class="label label-lg label-light-success label-inline font-weight-bold">Active</span>
                                        @else
                                            <span class="label label-lg label-light-dark label-inline font-weight-bold">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-right pr-0">
                                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                            <i class="flaticon2-pen text-muted"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-8 text-muted font-size-sm">
                        No products added yet.
                    </div>
                @endif
            </div>
        </div>

    </div>

    <!-- Right Column (4 cols): Quick Actions & Overview -->
    <div class="col-xl-4">

        <!-- Quick Actions Card -->
        <div class="card card-custom gutter-b">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title font-weight-bolder text-dark">Quick Actions</h3>
            </div>
            <div class="card-body pt-2">
                <div class="d-flex flex-column">
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-block btn-light-primary font-weight-bolder py-3 mb-3 text-left d-flex align-items-center">
                        <i class="flaticon2-pen mr-3"></i> Add New Blog
                    </a>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-block btn-light-success font-weight-bolder py-3 mb-3 text-left d-flex align-items-center">
                        <i class="flaticon2-box mr-3"></i> Add New Product
                    </a>
                    <a href="{{ route('admin.portfolios.create') }}" class="btn btn-block btn-light-info font-weight-bolder py-3 mb-3 text-left d-flex align-items-center">
                        <i class="flaticon2-layers mr-3"></i> Add New Portfolio
                    </a>
                    <a href="{{ route('admin.sliders.index') }}" class="btn btn-block btn-light-warning font-weight-bolder py-3 mb-3 text-left d-flex align-items-center">
                        <i class="flaticon2-laptop mr-3"></i> Manage Sliders
                    </a>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-block btn-light-dark font-weight-bolder py-3 text-left d-flex align-items-center">
                        <i class="flaticon2-analytics mr-3"></i> Categories
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Articles Card -->
        <div class="card card-custom gutter-b">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title font-weight-bolder text-dark">Recent Articles</h3>
                <div class="card-toolbar">
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-light-primary font-weight-bolder">View All</a>
                </div>
            </div>
            <div class="card-body pt-2">
                @if(isset($blogPosts) && $blogPosts->count())
                    @foreach($blogPosts->take(4) as $post)
                    <div class="d-flex align-items-center mb-6">
                        <div class="symbol symbol-45 symbol-light-warning mr-4">
                            <span class="symbol-label">
                                <i class="flaticon2-file text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="{{ route('admin.blogs.edit', $post->id) }}" class="font-weight-bolder text-dark-75 text-hover-primary font-size-sm mb-1">{{ Str::limit($post->title, 32) }}</a>
                            <span class="text-muted font-weight-bold font-size-xs">{{ $post->created_at ? $post->created_at->format('M d, Y') : '' }}</span>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="text-muted font-size-sm py-4 mb-0">No articles published yet.</p>
                @endif
            </div>
        </div>

        <!-- System Snapshot -->
        <div class="card card-custom gutter-b">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title font-weight-bolder text-dark">System Overview</h3>
            </div>
            <div class="card-body pt-2">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-40 symbol-light-primary mr-3">
                            <span class="symbol-label font-weight-bold"><i class="flaticon2-user text-primary"></i></span>
                        </div>
                        <div>
                            <span class="text-dark-75 font-weight-bolder font-size-sm d-block">Team Members</span>
                            <span class="text-muted font-weight-bold font-size-xs">Active Profiles</span>
                        </div>
                    </div>
                    <span class="font-weight-bolder font-size-h5 text-dark-75">{{ $teamCount ?? 0 }}</span>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-40 symbol-light-success mr-3">
                            <span class="symbol-label font-weight-bold"><i class="flaticon2-group text-success"></i></span>
                        </div>
                        <div>
                            <span class="text-dark-75 font-weight-bolder font-size-sm d-block">Brand Partners</span>
                            <span class="text-muted font-weight-bold font-size-xs">Collaborations</span>
                        </div>
                    </div>
                    <span class="font-weight-bolder font-size-h5 text-dark-75">{{ $partnerCount ?? 0 }}</span>
                </div>

                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-40 symbol-light-info mr-3">
                            <span class="symbol-label font-weight-bold"><i class="flaticon2-tag text-info"></i></span>
                        </div>
                        <div>
                            <span class="text-dark-75 font-weight-bolder font-size-sm d-block">Categories</span>
                            <span class="text-muted font-weight-bold font-size-xs">Taxonomies</span>
                        </div>
                    </div>
                    <span class="font-weight-bolder font-size-h5 text-dark-75">{{ $categoryCount ?? 0 }}</span>
                </div>
            </div>
        </div>

    </div>
</div>
<!--end::Row-->
<!--end::Dashboard-->
@endsection
