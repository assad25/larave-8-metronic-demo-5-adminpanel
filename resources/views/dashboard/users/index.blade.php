@extends('layouts.dashboard.master',['title' => 'Users'])
@section('styles')
    @include('layouts.sweetalert.sweetalert_css')
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-place="true" data-kt-place-mode="prepend"
                     data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Users List</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">User Management</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Users List</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
{{--                <div class="d-flex align-items-center py-1">--}}
{{--                    <!--begin::Wrapper-->--}}
{{--                    <div class="me-4">--}}
{{--                        <!--begin::Menu-->--}}
{{--                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"--}}
{{--                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"--}}
{{--                           data-kt-menu-flip="top-end">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->--}}
{{--                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">--}}
{{--											<svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
{{--                                                 viewBox="0 0 24 24" version="1.1">--}}
{{--												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--													<rect x="0" y="0" width="24" height="24"/>--}}
{{--													<path--}}
{{--                                                        d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z"--}}
{{--                                                        fill="#000000"/>--}}
{{--												</g>--}}
{{--											</svg>--}}
{{--										</span>--}}
{{--                            <!--end::Svg Icon-->Filter</a>--}}
{{--                        <!--begin::Menu 1-->--}}
{{--                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">--}}
{{--                            <!--begin::Header-->--}}
{{--                            <div class="px-7 py-5">--}}
{{--                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>--}}
{{--                            </div>--}}
{{--                            <!--end::Header-->--}}
{{--                            <!--begin::Menu separator-->--}}
{{--                            <div class="separator border-gray-200"></div>--}}
{{--                            <!--end::Menu separator-->--}}
{{--                            <!--begin::Form-->--}}
{{--                            <div class="px-7 py-5">--}}
{{--                                <!--begin::Input group-->--}}
{{--                                <div class="mb-10">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <label class="form-label fw-bold">Status:</label>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Input-->--}}
{{--                                    <div>--}}
{{--                                        <select class="form-select form-select-solid" data-kt-select2="true"--}}
{{--                                                data-placeholder="Select option" data-allow-clear="true">--}}
{{--                                            <option></option>--}}
{{--                                            <option value="1">Approved</option>--}}
{{--                                            <option value="2">Pending</option>--}}
{{--                                            <option value="2">In Process</option>--}}
{{--                                            <option value="2">Rejected</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Input-->--}}
{{--                                </div>--}}
{{--                                <!--end::Input group-->--}}
{{--                                <!--begin::Input group-->--}}
{{--                                <div class="mb-10">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <label class="form-label fw-bold">Member Type:</label>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Options-->--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <!--begin::Options-->--}}
{{--                                        <label--}}
{{--                                            class="form-check form-check-sm form-check-custom form-check-solid me-5">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="1"/>--}}
{{--                                            <span class="form-check-label">Author</span>--}}
{{--                                        </label>--}}
{{--                                        <!--end::Options-->--}}
{{--                                        <!--begin::Options-->--}}
{{--                                        <label--}}
{{--                                            class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="2"--}}
{{--                                                   checked="checked"/>--}}
{{--                                            <span class="form-check-label">Customer</span>--}}
{{--                                        </label>--}}
{{--                                        <!--end::Options-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Options-->--}}
{{--                                </div>--}}
{{--                                <!--end::Input group-->--}}
{{--                                <!--begin::Input group-->--}}
{{--                                <div class="mb-10">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <label class="form-label fw-bold">Notifications:</label>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Switch-->--}}
{{--                                    <div--}}
{{--                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">--}}
{{--                                        <input class="form-check-input" type="checkbox" value=""--}}
{{--                                               name="notifications" checked="checked"/>--}}
{{--                                        <label class="form-check-label">Enabled</label>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Switch-->--}}
{{--                                </div>--}}
{{--                                <!--end::Input group-->--}}
{{--                                <!--begin::Actions-->--}}
{{--                                <div class="d-flex justify-content-end">--}}
{{--                                    <button type="reset"--}}
{{--                                            class="btn btn-sm btn-white btn-active-light-primary me-2"--}}
{{--                                            data-kt-menu-dismiss="true">Reset--}}
{{--                                    </button>--}}
{{--                                    <button type="submit" class="btn btn-sm btn-primary"--}}
{{--                                            data-kt-menu-dismiss="true">Apply--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <!--end::Actions-->--}}
{{--                            </div>--}}
{{--                            <!--end::Form-->--}}
{{--                        </div>--}}
{{--                        <!--end::Menu 1-->--}}
{{--                        <!--end::Menu-->--}}
{{--                    </div>--}}
{{--                    <!--end::Wrapper-->--}}
{{--                    <!--begin::Button-->--}}
{{--                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"--}}
{{--                       data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>--}}
{{--                    <!--end::Button-->--}}
{{--                </div>--}}
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path
                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															<path
                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                fill="#000000" fill-rule="nonzero"/>
														</g>
													</svg>
												</span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-user-table-filter="search"
                                       class="form-control form-control-solid w-250px ps-14"
                                       placeholder="Search user"/>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card toolbar-->
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">User</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Joined Date</th>
                                <th class="min-w-125px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                                @forelse($users as $user)
                                <!--begin::Table row-->
                                    <tr>
                                        <!--begin::User=-->
                                        <td class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="{{ route('users.edit',$user->id) }}">
                                                    <div class="symbol-label">
                                                        <img src="{{$user->image ? $user->image : 'assets/media/avatars/blank.png' }}" alt="{{ $user->name ?: '' }}"
                                                             class="w-100"/>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                                <a
                                                   class="text-gray-800 text-hover-primary mb-1">{{ $user->name ?: '' }}</a>
                                                <span>{{$user->email ?: ''}}</span>
                                            </div>
                                            <!--begin::User details-->
                                        </td>
                                        <td>
                                            <div class="badge badge-{{$user->status == \App\HelperFunction\Status::Active ? 'success' : 'danger' }}">{{$user->status}}</div>
                                        </td>
                                        <!--end::User=-->
                                        <!--begin::Joined-->
                                        <td>{{$user->created_at}}</td>
                                        <!--begin::Joined-->
                                        <!--begin::Action=-->
                                        <td class="d-flex">
                                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    </svg>
                                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <form method="POST" action="{{ route('users.destroy',$user->id) }}" id="form_{{$user->id}}">
                                                @method('Delete')
                                                @csrf
                                                <button id="{{$user->id}}" type="submit" class="confirm btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </form>
                                        </td>
                                <!--end::Action=-->
                            </tr>
                                <!--end::Table row-->
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
@section('scripts')
    @include('layouts.sweetalert.sweetalert_js')
@endsection
