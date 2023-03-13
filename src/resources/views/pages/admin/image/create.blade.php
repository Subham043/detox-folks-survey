<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover">


<head>

    <meta charset="utf-8" />
    <title>Detox Folks- Survey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/logo-sm.png') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('admin/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/iziToast.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/tagify.css') }}" rel="stylesheet" type="text/css" />

    <style>
        #description {
            min-height: 200px;
        }
    </style>

    <style>
        .invalid-message {
            color: red;
        }
        .table>:not(caption)>*>*{
            border-bottom-width: 0 !important;
        }
        .page-title-box{
            margin: 0
        }
    </style>


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="">

            <div class="">
                <div class="container-fluid">

                    <div class="position-relative">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="{{ asset('admin/images/logo.png') }}" class="profile-wid-img"
                                alt="">
                        </div>
                    </div>

                    <!-- start page title -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Detox Folks</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Survey</a></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <form id="countryForm" method="post" action="{{ route('image_store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Applicant Details</h4>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="col-xxl-4 col-md-4 col-sm-12">
                                                    <div>
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="name" value="{{ old('name') }}">
                                                        @error('name')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-md-4 col-sm-12">
                                                    <div>
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" value="{{ old('email') }}">
                                                        @error('email')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-md-4 col-sm-12">
                                                    <div>
                                                        <label for="phone" class="form-label">Phone</label>
                                                        <input type="text" class="form-control" name="phone"
                                                            id="phone" value="{{ old('phone') }}">
                                                        @error('phone')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div>
                                                        <label for="designation"
                                                            class="form-label">Designation</label>
                                                        <input type="text" class="form-control" name="designation"
                                                            id="designation" value="{{ old('designation') }}">
                                                        @error('designation')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div>
                                                        <label for="user_id"
                                                            class="form-label">Staff Associated</label>
                                                        <select class="form-control" name="user_id" id="user_id">
                                                            <option value="">Select Staff</option>
                                                            @foreach($staff as $staff)
                                                            <option value="{{$staff->id}}" {{ old('user_id')==$staff->id ? 'selected' : '' }}>{{$staff->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('user_id')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="address" class="form-label">Address</label>
                                                        <textarea name="address" id="address" class="form-control">{{ old('address') }}</textarea>
                                                        @error('address')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Survey</h4>
                                    </div><!-- end card header -->
                                    <div class="card-body">

                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">PP CONTAINER</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">100ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_week_100" id="pp_week_100">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('pp_week_100')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_week_100')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_month_100" id="pp_month_100">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('pp_month_100')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_month_100')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">250ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_week_250" id="pp_week_250">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('pp_week_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_week_250')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_month_250" id="pp_month_250">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('pp_month_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_month_250')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">300ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_week_300" id="pp_week_300">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('pp_week_300')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_week_300')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_month_300" id="pp_month_300">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('pp_month_300')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_month_300')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">500ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_week_500" id="pp_week_500">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('pp_week_500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_week_500')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_month_500" id="pp_month_500">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('pp_month_500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_month_500')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">750ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_week_750" id="pp_week_750">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('pp_week_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_week_750')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_month_750" id="pp_month_750">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('pp_month_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_month_750')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">1000ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_week_1000" id="pp_week_1000">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('pp_week_1000')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_week_1000')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="pp_month_1000" id="pp_month_1000">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('pp_month_1000')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('pp_month_1000')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">COMPARTMENT TRAY</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">2CP Tray</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_week_2cp" id="compartment_week_2cp">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('compartment_week_2cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_week_2cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_month_2cp" id="compartment_month_2cp">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('compartment_month_2cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_month_2cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">3CP Tray</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_week_3cp" id="compartment_week_3cp">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('compartment_week_3cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_week_3cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_month_3cp" id="compartment_month_3cp">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('compartment_month_3cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_month_3cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">4CP Tray</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_week_4cp" id="compartment_week_4cp">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('compartment_week_4cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_week_4cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_month_4cp" id="compartment_month_4cp">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('compartment_month_4cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_month_4cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">5CP Tray</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_week_5cp" id="compartment_week_5cp">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('compartment_week_5cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_week_5cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_month_5cp" id="compartment_month_5cp">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('compartment_month_5cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_month_5cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">6CP Tray</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_week_6cp" id="compartment_week_6cp">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('compartment_week_6cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_week_6cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_month_6cp" id="compartment_month_6cp">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('compartment_month_6cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_month_6cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">8CP Tray</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_week_8cp" id="compartment_week_8cp">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('compartment_week_8cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_week_8cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="compartment_month_8cp" id="compartment_month_8cp">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('compartment_month_8cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('compartment_month_8cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">ALUMINIUM
                                                                        CONTAINER WITHOUT
                                                                        LID</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">250ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_250" id="al_container_without_lid_week_250">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_250')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_250" id="al_container_without_lid_month_250">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_250')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">450ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_450" id="al_container_without_lid_week_450">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_450')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_450')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_450" id="al_container_without_lid_month_450">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_450')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_450')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">600ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_600" id="al_container_without_lid_week_600">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_600')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_600')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_600" id="al_container_without_lid_month_600">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_600')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_600')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">660ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_660" id="al_container_without_lid_week_660">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_660')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_660')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_660" id="al_container_without_lid_month_660">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_660')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_660')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">750ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_750" id="al_container_without_lid_week_750">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_750')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_750" id="al_container_without_lid_month_750">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_750')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">900ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_900" id="al_container_without_lid_week_900">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_900')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_900')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_900" id="al_container_without_lid_month_900">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_900')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_900')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">3cp</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_3cp" id="al_container_without_lid_week_3cp">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_3cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_3cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_3cp" id="al_container_without_lid_month_3cp">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_3cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_3cp')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">100ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_100" id="al_container_without_lid_week_100">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_100')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_100')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_100" id="al_container_without_lid_month_100">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_100')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_100')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">120ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_120" id="al_container_without_lid_week_120">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_120')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_120')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_120" id="al_container_without_lid_month_120">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_120')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_120')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">Muffin cup</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_week_muffin" id="al_container_without_lid_week_muffin">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_week_muffin')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_week_muffin')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_without_lid_month_muffin" id="al_container_without_lid_month_muffin">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_without_lid_month_muffin')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_without_lid_month_muffin')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">ALUMINIUM FOIL</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">9 MTR</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_9mtr" id="aluminium_week_9mtr">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_9mtr')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_9mtr')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_9mtr" id="aluminium_month_9mtr">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_9mtr')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_9mtr')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">18 MTR</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_18mtr" id="aluminium_week_18mtr">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_18mtr')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_18mtr')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_18mtr" id="aluminium_month_18mtr">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_18mtr')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_18mtr')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">72 MTR</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_72mtr" id="aluminium_week_72mtr">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_72mtr')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_72mtr')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_72mtr" id="aluminium_month_72mtr">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_72mtr')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_72mtr')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">72 Number</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_72nbr" id="aluminium_week_72nbr">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_72nbr')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_72nbr')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_72nbr" id="aluminium_month_72nbr">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_72nbr')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_72nbr')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">72 Special</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_72spc" id="aluminium_week_72spc">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_72spc')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_72spc')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_72spc" id="aluminium_month_72spc">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_72spc')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_72spc')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">25 Grams</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_25g" id="aluminium_week_25g">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_25g')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_25g')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_25g" id="aluminium_month_25g">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_25g')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_25g')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">50 Grams</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_50g" id="aluminium_week_50g">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_50g')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_50g')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_50g" id="aluminium_month_50g">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_50g')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_50g')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">1kg Gross</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_1kg_gross" id="aluminium_week_1kg_gross">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_1kg_gross')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_1kg_gross')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_1kg_gross" id="aluminium_month_1kg_gross">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_1kg_gross')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_1kg_gross')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">1kg Net</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_1kg_net" id="aluminium_week_1kg_net">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_1kg_net')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_1kg_net')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_1kg_net" id="aluminium_month_1kg_net">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_1kg_net')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_1kg_net')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">120 Grams</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_week_120g" id="aluminium_week_120g">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('aluminium_week_120g')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_week_120g')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="aluminium_month_120g" id="aluminium_month_120g">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('aluminium_month_120g')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('aluminium_month_120g')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">ALUMINIUM
                                                                        CONTAINER WITH
                                                                        LID</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">250ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_with_lid_week_250" id="al_container_with_lid_week_250">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_with_lid_week_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_with_lid_week_250')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_with_lid_month_250" id="al_container_with_lid_month_250">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_with_lid_month_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_with_lid_month_250')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">450ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_with_lid_week_450" id="al_container_with_lid_week_450">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_with_lid_week_450')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_with_lid_week_450')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_with_lid_month_450" id="al_container_with_lid_month_450">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_with_lid_month_450')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_with_lid_month_450')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">600ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_with_lid_week_600" id="al_container_with_lid_week_600">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_with_lid_week_600')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_with_lid_week_600')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_with_lid_month_600" id="al_container_with_lid_month_600">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_with_lid_month_600')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_with_lid_month_600')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">750ml</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_with_lid_week_750" id="al_container_with_lid_week_750">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_container_with_lid_week_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_with_lid_week_750')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_container_with_lid_month_750" id="al_container_with_lid_month_750">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_container_with_lid_month_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_container_with_lid_month_750')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">PAPER BOX</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">Cake Box</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_box_week_cake" id="p_box_week_cake">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('p_box_week_cake')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_box_week_cake')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_box_month_cake" id="p_box_month_cake">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('p_box_month_cake')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_box_month_cake')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">Dosa Box</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_box_week_dosa" id="p_box_week_dosa">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('p_box_week_dosa')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_box_week_dosa')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_box_month_dosa" id="p_box_month_dosa">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('p_box_month_dosa')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_box_month_dosa')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">Sandwich Box</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_box_week_sandwich" id="p_box_week_sandwich">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('p_box_week_sandwich')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_box_week_sandwich')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_box_month_sandwich" id="p_box_month_sandwich">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('p_box_month_sandwich')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_box_month_sandwich')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">PAPER BAG</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">small size</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_bag_week_small" id="p_bag_week_small">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('p_bag_week_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_bag_week_small')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_bag_month_small" id="p_bag_month_small">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('p_bag_month_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_bag_month_small')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">medium size</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_bag_week_medium" id="p_bag_week_medium">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('p_bag_week_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_bag_week_medium')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_bag_month_medium" id="p_bag_month_medium">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('p_bag_month_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_bag_month_medium')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">large size</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_bag_week_large" id="p_bag_week_large">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('p_bag_week_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_bag_week_large')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_bag_month_large" id="p_bag_month_large">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('p_bag_month_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_bag_month_large')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">extra-large size</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_bag_week_x_large" id="p_bag_week_x_large">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('p_bag_week_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_bag_week_x_large')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="p_bag_month_x_large" id="p_bag_month_x_large">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('p_bag_month_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('p_bag_month_x_large')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">GARBAGE BAG</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">small size</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="garbage_bag_week_small" id="garbage_bag_week_small">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('garbage_bag_week_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('garbage_bag_week_small')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="garbage_bag_month_small" id="garbage_bag_month_small">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('garbage_bag_month_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('garbage_bag_month_small')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">medium size</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="garbage_bag_week_medium" id="garbage_bag_week_medium">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('garbage_bag_week_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('garbage_bag_week_medium')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="garbage_bag_month_medium" id="garbage_bag_month_medium">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('garbage_bag_month_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('garbage_bag_month_medium')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">large size</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="garbage_bag_week_large" id="garbage_bag_week_large">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('garbage_bag_week_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('garbage_bag_week_large')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="garbage_bag_month_large" id="garbage_bag_month_large">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('garbage_bag_month_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('garbage_bag_month_large')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">extra-large size</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="garbage_bag_week_x_large" id="garbage_bag_week_x_large">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('garbage_bag_week_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('garbage_bag_week_x_large')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="garbage_bag_month_x_large" id="garbage_bag_month_x_large">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('garbage_bag_month_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('garbage_bag_month_x_large')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">TISSUES</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">22*22</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_week_22_22" id="tissue_week_22_22">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('tissue_week_22_22')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_week_22_22')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_month_22_22" id="tissue_month_22_22">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('tissue_month_22_22')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_month_22_22')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">27*30</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_week_27_30" id="tissue_week_27_30">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('tissue_week_27_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_week_27_30')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_month_27_30" id="tissue_month_27_30">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('tissue_month_27_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_month_27_30')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">30*30</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_week_30_30" id="tissue_week_30_30">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('tissue_week_30_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_week_30_30')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_month_30_30" id="tissue_month_30_30">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('tissue_month_30_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_month_30_30')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">32*32</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_week_32_32" id="tissue_week_32_32">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('tissue_week_32_32')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_week_32_32')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_month_32_32" id="tissue_month_32_32">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('tissue_month_32_32')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_month_32_32')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">40*40</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_week_40_40" id="tissue_week_40_40">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('tissue_week_40_40')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_week_40_40')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="tissue_month_40_40" id="tissue_month_40_40">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('tissue_month_40_40')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('tissue_month_40_40')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">CUTLERY</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">110mm Spoon</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_week_110_spoon" id="cuttlery_week_110_spoon">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_110_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_week_110_spoon')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_month_110_spoon" id="cuttlery_month_110_spoon">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_110_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_month_110_spoon')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">140mm Spoon</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_week_140_spoon" id="cuttlery_week_140_spoon">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_140_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_week_140_spoon')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_month_140_spoon" id="cuttlery_month_140_spoon">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_140_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_month_140_spoon')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">160mm Spoon</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_week_160_spoon" id="cuttlery_week_160_spoon">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_160_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_week_160_spoon')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_month_160_spoon" id="cuttlery_month_160_spoon">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_160_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_month_160_spoon')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">140mm Fork</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_week_140_fork" id="cuttlery_week_140_fork">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_140_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_week_140_fork')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_month_140_fork" id="cuttlery_month_140_fork">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_140_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_month_140_fork')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">160mm Fork</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_week_160_fork" id="cuttlery_week_160_fork">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_160_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_week_160_fork')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="cuttlery_month_160_fork" id="cuttlery_month_160_fork">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_160_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('cuttlery_month_160_fork')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">GROCERY BAG</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">50 GMS</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_50" id="groccery_bag_week_50">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_50')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_50')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_50" id="groccery_bag_month_50">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_50')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_50')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">100GMS</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_100" id="groccery_bag_week_100">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_100')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_100')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_100" id="groccery_bag_month_100">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_100')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_100')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">150GMS</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_150" id="groccery_bag_week_150">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_150')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_150')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_150" id="groccery_bag_month_150">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_150')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_150')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">200GMS</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_200" id="groccery_bag_week_200">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_200')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_200')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_200" id="groccery_bag_month_200">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_200')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_200')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">250GMS</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_250" id="groccery_bag_week_250">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_250')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_250" id="groccery_bag_month_250">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_250')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">300GMS</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_300" id="groccery_bag_week_300">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_300')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_300')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_300" id="groccery_bag_month_300">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_300')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_300')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">500GMS</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_500" id="groccery_bag_week_500">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_500')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_500" id="groccery_bag_month_500">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_500')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">1KG</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_1" id="groccery_bag_week_1">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_1')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_1')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_1" id="groccery_bag_month_1">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_1')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_1')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">1.5KG</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_1_5" id="groccery_bag_week_1_5">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_1_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_1_5')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_1_5" id="groccery_bag_month_1_5">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_1_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_1_5')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">2KG</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_2" id="groccery_bag_week_2">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_2')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_2" id="groccery_bag_month_2">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_2')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">3KG</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_3" id="groccery_bag_week_3">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_3')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_3')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_3" id="groccery_bag_month_3">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_3')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_3')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">4KG</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_4" id="groccery_bag_week_4">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_4')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_4')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_4" id="groccery_bag_month_4">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_4')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_4')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">5KG</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_week_5" id="groccery_bag_week_5">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_week_5')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="groccery_bag_month_5" id="groccery_bag_month_5">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('groccery_bag_month_5')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" colspan="2" class="text-center">6 LAYER ALUMINIUM
                                                                        COATED POUCH</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th scope="col">APPROX REQUIREMENT</th>
                                                                    <th scope="col">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th scope="col">PER WEEK</th>
                                                                                    <th scope="col">PER MONTH</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">3X5 - 80X130mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_3_5" id="al_pouch_week_3_5">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_3_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_3_5')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_3_5" id="al_pouch_month_3_5">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_3_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_3_5')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">4x6 - 100x155mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_4_6" id="al_pouch_week_4_6">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_4_6')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_4_6')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_4_6" id="al_pouch_month_4_6">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_4_6')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_4_6')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">5x7 - 120x180mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_5_7" id="al_pouch_week_5_7">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_5_7')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_5_7')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_5_7" id="al_pouch_month_5_7">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_5_7')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_5_7')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">6x8 - 145x180mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_6_8" id="al_pouch_week_6_8">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_6_8')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_6_8')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_6_8" id="al_pouch_month_6_8">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_6_8')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_6_8')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">6x9 - 145x215mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_6_9" id="al_pouch_week_6_9">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_6_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_6_9')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_6_9" id="al_pouch_month_6_9">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_6_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_6_9')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">7x9 - 165x230mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_7_9" id="al_pouch_week_7_9">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_7_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_7_9')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_7_9" id="al_pouch_month_7_9">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_7_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_7_9')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">7x10 - 165x255mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_7_10" id="al_pouch_week_7_10">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_7_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_7_10')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_7_10" id="al_pouch_month_7_10">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_7_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_7_10')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">8x10 - 195x255mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_8_10" id="al_pouch_week_8_10">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_8_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_8_10')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_8_10" id="al_pouch_month_8_10">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_8_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_8_10')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">9x12 - 225x305mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_9_12" id="al_pouch_week_9_12">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_9_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_9_12')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_9_12" id="al_pouch_month_9_12">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_9_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_9_12')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">10x12 - 240x300mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_10_12" id="al_pouch_week_10_12">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_10_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_10_12')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_10_12" id="al_pouch_month_10_12">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_10_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_10_12')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#" class="fw-medium text-center">10x14 - 240x360mm</a></td>
                                                                    <td>
                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_week_10_14" id="al_pouch_week_10_14">
                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_10_14')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_week_10_14')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                    <td>
                                                                                        <select class="form-control" name="al_pouch_month_10_14" id="al_pouch_month_10_14">
                                                                                            @for($i = 0; $i <= 4000; $i+=200)
                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_10_14')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                            @endfor
                                                                                        </select>
                                                                                        @error('al_pouch_month_10_14')
                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>


                                                <div class="col-xxl-12 col-md-12">
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light"
                                                        id="submitBtn">Submit</button>
                                                </div>

                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end col-->
                    </div>
                    <!--end row-->



                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/just-validate.production.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/iziToast.min.js') }}"></script>
    <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>




    <!-- App js -->
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script type="text/javascript">
        @if (session('success_status'))

            iziToast.success({
                title: 'Success',
                message: '{{ Session::get('success_status') }}',
                position: 'topRight',
                timeout: 6000
            });
        @endif
        @if (session('error_status'))

            iziToast.error({
                title: 'Error',
                message: '{{ Session::get('error_status') }}',
                position: 'topRight',
                timeout: 6000
            });
        @endif
    </script>
    <script src="{{ asset('admin/libs/quill/quill.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/choices.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/axios.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/tagify.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/tagify.polyfills.min.js') }}"></script>

    <script type="text/javascript">
        // initialize the validation library
        const validation = new JustValidate('#countryForm', {
            errorFieldCssClass: 'is-invalid',
        });
        // apply rules to form fields
        validation
        .addField('#name', [
        {
            rule: 'required',
            errorMessage: 'Name is required',
        },
        {
            rule: 'customRegexp',
            value: /^[a-zA-Z\s]*$/,
            errorMessage: 'Name is invalid',
        },
        ])
        .addField('#email', [
        {
            rule: 'required',
            errorMessage: 'Email is required',
        },
        {
            rule: 'email',
            errorMessage: 'Email is invalid!',
        },
        ])
        .addField('#phone', [
        {
            rule: 'required',
            errorMessage: 'Phone is required',
        },
        {
            rule: 'customRegexp',
            value: /^[0-9]*$/,
            errorMessage: 'Phone is invalid',
        },
        ])
        .addField('#user_id', [
        {
            rule: 'required',
            errorMessage: 'Staff is required',
        },
        {
            rule: 'customRegexp',
            value: /^[0-9]*$/,
            errorMessage: 'Staff is invalid',
        },
        ])
        .addField('#designation', [
        {
            rule: 'required',
            errorMessage: 'Designation is required',
        },
        {
            rule: 'customRegexp',
            value: /^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i,
            errorMessage: 'Designation is invalid',
        },
        ])
        .addField('#address', [
        {
            rule: 'customRegexp',
            value: /^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i,
            errorMessage: 'Address is invalid',
        },
        ])
        .onSuccess((event) => {
            event.target.submit();
        });
    </script>

</body>

</html>
