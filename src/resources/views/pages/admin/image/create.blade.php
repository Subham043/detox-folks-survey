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
        .profile-setting-img2{
            height: 120px;
        }
        .accordion-body {
            padding: 5px;
        }
        .accordion-item {
            margin-bottom: 20px;
            border-radius: calc(0.25rem - 1px);
        }
        .accordion .accordion-button{
            border-radius: calc(0.25rem - 1px);
        }
        .accordion-item:not(:first-of-type) {
            border: 1px solid var(--vz-border-color);
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
                        <div class="profile-wid-bg profile-setting-img profile-setting-img2">
                            <img src="{{ asset('admin/images/logo.png') }}" class="profile-wid-img"
                                alt="">
                        </div>
                    </div>

                    <!-- start page title -->
                    {{-- <div class="row mb-4">
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
                    </div> --}}
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
                                                <div class="col-xxl-3 col-md-6 col-sm-12">
                                                    <div>
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="name" value="{{ old('name') }}">
                                                        @error('name')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6 col-sm-12">
                                                    <div>
                                                        <label for="phone" class="form-label">Phone</label>
                                                        <input type="text" class="form-control" name="phone"
                                                            id="phone" value="{{ old('phone') }}">
                                                        @error('phone')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6 col-sm-12">
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
                                                <div class="col-xxl-3 col-md-6 col-sm-12">
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
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                <img
                                                                    src="data:image/jpeg;base64,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"
                                                                    alt=""
                                                                    style="height:80px;object-fit:contain;margin-right:20px"
                                                                >
                                                                <br/>
                                                                PP CONTAINER
                                                            </button>
                                                          </h2>
                                                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                        <thead class="table-primary">
                                                                            <tr>
                                                                                <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                <th scope="col">
                                                                                    <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                        <thead class="table-light">
                                                                                            <tr>
                                                                                                <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">25ml</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_25" id="pp_week_25">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_25')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_25')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_25" id="pp_month_25">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_25')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_25')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_25" id="pp_price_25" value="{{old('pp_price_25')}}">
                                                                                                    @error('pp_price_25')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">50ml</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_50" id="pp_week_50">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_50')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_50')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_50" id="pp_month_50">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_50')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_50')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_50" id="pp_price_50" value="{{old('pp_price_50')}}">
                                                                                                    @error('pp_price_50')
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
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_100" id="pp_week_100">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_100')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_100')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_100" id="pp_month_100">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_100')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_100')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_100" id="pp_price_100" value="{{old('pp_price_100')}}">
                                                                                                    @error('pp_price_100')
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
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_250" id="pp_week_250">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_250')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_250" id="pp_month_250">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_250')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_250" id="pp_price_250" value="{{old('pp_price_250')}}">
                                                                                                    @error('pp_price_250')
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
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_300" id="pp_week_300">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_300')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_300')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_300" id="pp_month_300">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_300')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_300')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_300" id="pp_price_300" value="{{old('pp_price_300')}}">
                                                                                                    @error('pp_price_300')
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
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_500" id="pp_week_500">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_500')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_500" id="pp_month_500">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_500')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_500" id="pp_price_500" value="{{old('pp_price_500')}}">
                                                                                                    @error('pp_price_500')
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
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_750" id="pp_week_750">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_750')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_750" id="pp_month_750">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_750')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_750" id="pp_price_750" value="{{old('pp_price_750')}}">
                                                                                                    @error('pp_price_750')
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
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_1000" id="pp_week_1000">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_1000')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_1000')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_1000" id="pp_month_1000">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_1000')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_1000')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_1000" id="pp_price_1000" value="{{old('pp_price_1000')}}">
                                                                                                    @error('pp_price_1000')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">2500ml</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_2500" id="pp_week_2500">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_2500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_2500')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_2500" id="pp_month_2500">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_2500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_2500')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_2500" id="pp_price_2500" value="{{old('pp_price_2500')}}">
                                                                                                    @error('pp_price_2500')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">3500ml</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_3200" id="pp_week_3200">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_3200')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_3200')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_3200" id="pp_month_3200">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_3200')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_3200')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_3200" id="pp_price_3200" value="{{old('pp_price_3200')}}">
                                                                                                    @error('pp_price_3200')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">4500ml</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="pp_week_4500" id="pp_week_4500">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('pp_week_4500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_week_4500')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="pp_month_4500" id="pp_month_4500">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('pp_month_4500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_month_4500')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="pp_price_4500" id="pp_price_4500" value="{{old('pp_price_4500')}}">
                                                                                                    @error('pp_price_4500')
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
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingThree">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                  <img
                                                                  src="https://5.imimg.com/data5/ANDROID/Default/2022/11/NH/SS/MO/4041306/product-jpeg-500x500.jpg"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  ALUMINIUM CONTAINER WITH LID
                                                              </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">APPROX REQUIREMENT</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE</th>
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="al_container_with_lid_week_250" id="al_container_with_lid_week_250">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_week_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_week_250')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="al_container_with_lid_month_250" id="al_container_with_lid_month_250">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_month_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_month_250')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="al_container_with_lid_price_250" id="al_container_with_lid_price_250" value="{{old('al_container_with_lid_price_250')}}">
                                                                                                      @error('al_container_with_lid_price_250')
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="al_container_with_lid_week_450" id="al_container_with_lid_week_450">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_week_450')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_week_450')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="al_container_with_lid_month_450" id="al_container_with_lid_month_450">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_month_450')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_month_450')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="al_container_with_lid_price_450" id="al_container_with_lid_price_450" value="{{old('al_container_with_lid_price_450')}}">
                                                                                                      @error('al_container_with_lid_price_450')
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="al_container_with_lid_week_600" id="al_container_with_lid_week_600">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_week_600')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_week_600')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="al_container_with_lid_month_600" id="al_container_with_lid_month_600">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_month_600')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_month_600')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="al_container_with_lid_price_600" id="al_container_with_lid_price_600" value="{{old('al_container_with_lid_price_600')}}">
                                                                                                      @error('al_container_with_lid_price_600')
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="al_container_with_lid_week_750" id="al_container_with_lid_week_750">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_week_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_week_750')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="al_container_with_lid_month_750" id="al_container_with_lid_month_750">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_month_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_month_750')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="al_container_with_lid_price_750" id="al_container_with_lid_price_750" value="{{old('al_container_with_lid_price_750')}}">
                                                                                                      @error('al_container_with_lid_price_750')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingEight">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                  <img
                                                                  src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/41rFWZCxP8L._SX679_.jpg"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  ALUMINIUM FOIL
                                                              </button>
                                                            </h2>
                                                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">Gross 1kg Roll</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="aluminium_week_1kg_gross" id="aluminium_week_1kg_gross">
                                                                                                          @for($i = 0; $i <= 20; $i+=5)
                                                                                                          <option value="{{$i}}" {{ old('aluminium_week_1kg_gross')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('aluminium_week_1kg_gross')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="aluminium_month_1kg_gross" id="aluminium_month_1kg_gross">
                                                                                                          @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                          <option value="{{$i}}" {{ old('aluminium_month_1kg_gross')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('aluminium_month_1kg_gross')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="aluminium_price_1kg_gross" id="aluminium_price_1kg_gross" value="{{old('aluminium_price_1kg_gross')}}">
                                                                                                      @error('aluminium_price_1kg_gross')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">Net 1kg Roll</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="aluminium_week_1kg_net" id="aluminium_week_1kg_net">
                                                                                                          @for($i = 0; $i <= 20; $i+=5)
                                                                                                          <option value="{{$i}}" {{ old('aluminium_week_1kg_net')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('aluminium_week_1kg_net')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="aluminium_month_1kg_net" id="aluminium_month_1kg_net">
                                                                                                          @for($i = 0; $i <= 80; $i+=(5 * 4))
                                                                                                          <option value="{{$i}}" {{ old('aluminium_month_1kg_net')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('aluminium_month_1kg_net')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="aluminium_price_1kg_net" id="aluminium_price_1kg_net" value="{{old('aluminium_price_1kg_net')}}">
                                                                                                      @error('aluminium_price_1kg_net')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingSeven">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                                                  <img
                                                                  src="https://images.meesho.com/images/products/106133445/o4svw_512.webp"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  COMPARTMENT TRAY
                                                              </button>
                                                            </h2>
                                                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE</th>
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="compartment_week_2cp" id="compartment_week_2cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_week_2cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_week_2cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="compartment_month_2cp" id="compartment_month_2cp">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('compartment_month_2cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_month_2cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="compartment_price_2cp" id="compartment_price_2cp" value="{{old('compartment_price_2cp')}}">
                                                                                                      @error('compartment_price_2cp')
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="compartment_week_3cp" id="compartment_week_3cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_week_3cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_week_3cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="compartment_month_3cp" id="compartment_month_3cp">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('compartment_month_3cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_month_3cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="compartment_price_3cp" id="compartment_price_3cp" value="{{old('compartment_price_3cp')}}">
                                                                                                      @error('compartment_price_3cp')
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="compartment_week_4cp" id="compartment_week_4cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_week_4cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_week_4cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="compartment_month_4cp" id="compartment_month_4cp">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('compartment_month_4cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_month_4cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="compartment_price_4cp" id="compartment_price_4cp" value="{{old('compartment_price_4cp')}}">
                                                                                                      @error('compartment_price_4cp')
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="compartment_week_5cp" id="compartment_week_5cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_week_5cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_week_5cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="compartment_month_5cp" id="compartment_month_5cp">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('compartment_month_5cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_month_5cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="compartment_price_5cp" id="compartment_price_5cp" value="{{old('compartment_price_5cp')}}">
                                                                                                      @error('compartment_price_5cp')
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="compartment_week_6cp" id="compartment_week_6cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_week_6cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_week_6cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="compartment_month_6cp" id="compartment_month_6cp">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('compartment_month_6cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_month_6cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="compartment_price_6cp" id="compartment_price_6cp" value="{{old('compartment_price_6cp')}}">
                                                                                                      @error('compartment_price_6cp')
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="compartment_week_8cp" id="compartment_week_8cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_week_8cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_week_8cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="compartment_month_8cp" id="compartment_month_8cp">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('compartment_month_8cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_month_8cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="compartment_price_8cp" id="compartment_price_8cp" value="{{old('compartment_price_8cp')}}">
                                                                                                      @error('compartment_price_8cp')
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
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingNine">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                                  <img
                                                                  src="https://static.vecteezy.com/system/resources/previews/009/886/744/original/brown-paper-box-file-png.png"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  PAPER BOX
                                                              </button>
                                                            </h2>
                                                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample2">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">Sandwich Box</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="p_box_week_sandwich" id="p_box_week_sandwich">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('p_box_week_sandwich')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('p_box_week_sandwich')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="p_box_month_sandwich" id="p_box_month_sandwich">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('p_box_month_sandwich')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('p_box_month_sandwich')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="p_box_price_sandwich" id="p_box_price_sandwich" value="{{old('p_box_price_sandwich')}}">
                                                                                                    @error('p_box_price_sandwich')
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
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="p_box_week_dosa" id="p_box_week_dosa">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('p_box_week_dosa')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('p_box_week_dosa')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="p_box_month_dosa" id="p_box_month_dosa">
                                                                                                          @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                          <option value="{{$i}}" {{ old('p_box_month_dosa')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('p_box_month_dosa')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="p_box_price_dosa" id="p_box_price_dosa" value="{{old('p_box_price_dosa')}}">
                                                                                                      @error('p_box_price_dosa')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                <td><a href="#" class="fw-medium text-center">Idly Box</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="p_box_week_idly" id="p_box_week_idly">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('p_box_week_idly')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('p_box_week_idly')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="p_box_month_idly" id="p_box_month_idly">
                                                                                                        @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                        <option value="{{$i}}" {{ old('p_box_month_idly')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('p_box_month_idly')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="p_box_price_idly" id="p_box_price_idly" value="{{old('p_box_price_idly')}}">
                                                                                                    @error('p_box_price_idly')
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
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingSix">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                    <img
                                                                    src="http://atlas-content-cdn.pixelsquid.com/stock-images/grocery-bag-paper-a8YvZe0-600.jpg"
                                                                    alt=""
                                                                    style="height:80px;object-fit:contain;margin-right:20px"
                                                                    >
                                                                    <br/>
                                                                    GROCERY BAG
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-primary">
                                                                                <tr>
                                                                                    <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">1KG</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="groccery_bag_week_1" id="groccery_bag_week_1">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_1')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('groccery_bag_week_1')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="groccery_bag_month_1" id="groccery_bag_month_1">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_1')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('groccery_bag_month_1')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="groccery_bag_price_1" id="groccery_bag_price_1" value="{{old('groccery_bag_price_1')}}">
                                                                                                        @error('groccery_bag_price_1')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="groccery_bag_week_2" id="groccery_bag_week_2">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('groccery_bag_week_2')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="groccery_bag_month_2" id="groccery_bag_month_2">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('groccery_bag_month_2')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td><td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="groccery_bag_price_2" id="groccery_bag_price_2" value="{{old('groccery_bag_price_2')}}">
                                                                                                        @error('groccery_bag_price_2')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="groccery_bag_week_3" id="groccery_bag_week_3">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_3')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('groccery_bag_week_3')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="groccery_bag_month_3" id="groccery_bag_month_3">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_3')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('groccery_bag_month_3')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="groccery_bag_price_3" id="groccery_bag_price_3" value="{{old('groccery_bag_price_3')}}">
                                                                                                        @error('groccery_bag_price_3')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="groccery_bag_week_5" id="groccery_bag_week_5">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('groccery_bag_week_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('groccery_bag_week_5')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="groccery_bag_month_5" id="groccery_bag_month_5">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('groccery_bag_month_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('groccery_bag_month_5')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="groccery_bag_price_5" id="groccery_bag_price_5" value="{{old('groccery_bag_price_5')}}">
                                                                                                        @error('groccery_bag_price_5')
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
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingSeven2">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven2" aria-expanded="false" aria-controls="collapseSeven2">
                                                                    <img
                                                                    src="http://atlas-content-cdn.pixelsquid.com/stock-images/paper-bag-aqOAYV4-600.jpg"
                                                                    alt=""
                                                                    style="height:80px;object-fit:contain;margin-right:20px"
                                                                    >
                                                                    <br/>
                                                                    CARRY BAG
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSeven2" class="accordion-collapse collapse" aria-labelledby="headingSeven2" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-primary">
                                                                                <tr>
                                                                                    <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">1 kg</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="carry_bag_bag_week_small" id="carry_bag_bag_week_small">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_week_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_week_small')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="carry_bag_bag_month_small" id="carry_bag_bag_month_small">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_month_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_month_small')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="carry_bag_bag_price_small" id="carry_bag_bag_price_small" value="{{old('carry_bag_bag_price_small')}}">
                                                                                                        @error('carry_bag_bag_price_small')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">2 kg</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="carry_bag_bag_week_medium" id="carry_bag_bag_week_medium">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_week_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_week_medium')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="carry_bag_bag_month_medium" id="carry_bag_bag_month_medium">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_month_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_month_medium')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="carry_bag_bag_price_medium" id="carry_bag_bag_price_medium" value="{{old('carry_bag_bag_price_medium')}}">
                                                                                                        @error('carry_bag_bag_price_medium')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">3 kg</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="carry_bag_bag_week_large" id="carry_bag_bag_week_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_week_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_week_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="carry_bag_bag_month_large" id="carry_bag_bag_month_large">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_month_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_month_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="carry_bag_bag_price_large" id="carry_bag_bag_price_large" value="{{old('carry_bag_bag_price_large')}}">
                                                                                                        @error('carry_bag_bag_price_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">5 kg</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="carry_bag_bag_week_x_large" id="carry_bag_bag_week_x_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_week_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_week_x_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="carry_bag_bag_month_x_large" id="carry_bag_bag_month_x_large">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_month_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_month_x_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="carry_bag_bag_price_x_large" id="carry_bag_bag_price_x_large" value="{{old('carry_bag_bag_price_x_large')}}">
                                                                                                        @error('carry_bag_bag_price_x_large')
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
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    <img
                                                                    src="http://atlas-content-cdn.pixelsquid.com/stock-images/paper-bag-aqOAYV4-600.jpg"
                                                                    alt=""
                                                                    style="height:80px;object-fit:contain;margin-right:20px"
                                                                    >
                                                                    <br/>
                                                                    V BOTTOM PAPER BAG
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-primary">
                                                                                <tr>
                                                                                    <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">1 kg</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="p_bag_week_small" id="p_bag_week_small">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('p_bag_week_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_week_small')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="p_bag_month_small" id="p_bag_month_small">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('p_bag_month_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_month_small')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="p_bag_price_small" id="p_bag_price_small" value="{{old('p_bag_price_small')}}">
                                                                                                        @error('p_bag_price_small')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">2 kg</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="p_bag_week_medium" id="p_bag_week_medium">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('p_bag_week_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_week_medium')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="p_bag_month_medium" id="p_bag_month_medium">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('p_bag_month_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_month_medium')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="p_bag_price_medium" id="p_bag_price_medium" value="{{old('p_bag_price_medium')}}">
                                                                                                        @error('p_bag_price_medium')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">3 kg</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="p_bag_week_large" id="p_bag_week_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('p_bag_week_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_week_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="p_bag_month_large" id="p_bag_month_large">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('p_bag_month_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_month_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="p_bag_price_large" id="p_bag_price_large" value="{{old('p_bag_price_large')}}">
                                                                                                        @error('p_bag_price_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">5 kg</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="p_bag_week_x_large" id="p_bag_week_x_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('p_bag_week_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_week_x_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="p_bag_month_x_large" id="p_bag_month_x_large">
                                                                                                            @for($i = 0; $i <= 120; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('p_bag_month_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_month_x_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="p_bag_price_x_large" id="p_bag_price_x_large" value="{{old('p_bag_price_x_large')}}">
                                                                                                        @error('p_bag_price_x_large')
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
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-6 col-sm-12">
                                                    <div class="accordion" id="accordionExample2">

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwelve">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                                <img
                                                                src="https://3.imimg.com/data3/RY/JL/MY-11348186/aluminium-foil-pouch-1000x1000.jpg"
                                                                alt=""
                                                                style="height:80px;object-fit:contain;margin-right:20px"
                                                                >
                                                                <br/>
                                                                SILVER POUCH (6 LAYER ALUMINIUM COATED)
                                                              </button>
                                                            </h2>
                                                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-primary">
                                                                                <tr>
                                                                                    <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER WEEK<br>(100 pcs pack)</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER MONTH<br>(100 pcs pack)</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE<br>(100 pcs pack)</th>
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_3_5" id="al_pouch_week_3_5">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_3_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_3_5')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_3_5" id="al_pouch_month_3_5">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_3_5')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_3_5')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_3_5" id="al_pouch_price_3_5" value="{{old('al_pouch_price_3_5')}}">
                                                                                                        @error('al_pouch_price_3_5')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_4_6" id="al_pouch_week_4_6">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_4_6')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_4_6')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_4_6" id="al_pouch_month_4_6">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_4_6')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_4_6')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_4_6" id="al_pouch_price_4_6" value="{{old('al_pouch_price_4_6')}}">
                                                                                                        @error('al_pouch_price_4_6')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_5_7" id="al_pouch_week_5_7">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_5_7')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_5_7')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_5_7" id="al_pouch_month_5_7">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_5_7')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_5_7')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_5_7" id="al_pouch_price_5_7" value="{{old('al_pouch_price_5_7')}}">
                                                                                                        @error('al_pouch_price_5_7')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_6_8" id="al_pouch_week_6_8">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_6_8')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_6_8')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_6_8" id="al_pouch_month_6_8">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_6_8')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_6_8')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_6_8" id="al_pouch_price_6_8" value="{{old('al_pouch_price_6_8')}}">
                                                                                                        @error('al_pouch_price_6_8')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_6_9" id="al_pouch_week_6_9">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_6_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_6_9')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_6_9" id="al_pouch_month_6_9">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_6_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_6_9')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_6_9" id="al_pouch_price_6_9" value="{{old('al_pouch_price_6_9')}}">
                                                                                                        @error('al_pouch_price_6_9')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_7_9" id="al_pouch_week_7_9">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_7_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_7_9')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_7_9" id="al_pouch_month_7_9">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_7_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_7_9')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_7_9" id="al_pouch_price_7_9" value="{{old('al_pouch_price_7_9')}}">
                                                                                                        @error('al_pouch_price_7_9')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_7_10" id="al_pouch_week_7_10">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_7_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_7_10')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_7_10" id="al_pouch_month_7_10">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_7_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_7_10')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_7_10" id="al_pouch_price_7_10" value="{{old('al_pouch_price_7_10')}}">
                                                                                                        @error('al_pouch_price_7_10')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_8_10" id="al_pouch_week_8_10">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_8_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_8_10')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_8_10" id="al_pouch_month_8_10">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_8_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_8_10')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_8_10" id="al_pouch_price_8_10" value="{{old('al_pouch_price_8_10')}}">
                                                                                                        @error('al_pouch_price_8_10')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_9_12" id="al_pouch_week_9_12">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_9_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_9_12')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_9_12" id="al_pouch_month_9_12">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_9_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_9_12')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_9_12" id="al_pouch_price_9_12" value="{{old('al_pouch_price_9_12')}}">
                                                                                                        @error('al_pouch_price_9_12')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_10_12" id="al_pouch_week_10_12">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_10_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_10_12')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_10_12" id="al_pouch_month_10_12">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_10_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_10_12')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_10_12" id="al_pouch_price_10_12" value="{{old('al_pouch_price_10_12')}}">
                                                                                                        @error('al_pouch_price_10_12')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="al_pouch_week_10_14" id="al_pouch_week_10_14">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_week_10_14')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_week_10_14')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="al_pouch_month_10_14" id="al_pouch_month_10_14">
                                                                                                            @for($i = 0; $i <= 80; $i+=(5*4))
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_month_10_14')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_month_10_14')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="al_pouch_price_10_14" id="al_pouch_price_10_14" value="{{old('al_pouch_price_10_14')}}">
                                                                                                        @error('al_pouch_price_10_14')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingEleven">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                                <img
                                                                src="https://www.ikea.com/in/en/images/products/gamman-24-piece-cutlery-set-stainless-steel__0713267_pe729383_s5.jpg?f=s"
                                                                alt=""
                                                                style="height:80px;object-fit:contain;margin-right:20px"
                                                                >
                                                                <br/>
                                                                CUTLERY
                                                              </button>
                                                            </h2>
                                                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-primary">
                                                                                <tr>
                                                                                    <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE</th>
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="cuttlery_week_110_spoon" id="cuttlery_week_110_spoon">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_110_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_week_110_spoon')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="cuttlery_month_110_spoon" id="cuttlery_month_110_spoon">
                                                                                                            @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_110_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_month_110_spoon')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="cuttlery_price_110_spoon" id="cuttlery_price_110_spoon" value="{{old('cuttlery_price_110_spoon')}}">
                                                                                                        @error('cuttlery_price_110_spoon')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="cuttlery_week_140_spoon" id="cuttlery_week_140_spoon">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_140_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_week_140_spoon')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="cuttlery_month_140_spoon" id="cuttlery_month_140_spoon">
                                                                                                            @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_140_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_month_140_spoon')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="cuttlery_price_140_spoon" id="cuttlery_price_140_spoon" value="{{old('cuttlery_price_140_spoon')}}">
                                                                                                        @error('cuttlery_price_140_spoon')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="cuttlery_week_160_spoon" id="cuttlery_week_160_spoon">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_160_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_week_160_spoon')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="cuttlery_month_160_spoon" id="cuttlery_month_160_spoon">
                                                                                                            @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_160_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_month_160_spoon')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="cuttlery_price_160_spoon" id="cuttlery_price_160_spoon" value="{{old('cuttlery_price_160_spoon')}}">
                                                                                                        @error('cuttlery_price_160_spoon')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="cuttlery_week_140_fork" id="cuttlery_week_140_fork">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_140_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_week_140_fork')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="cuttlery_month_140_fork" id="cuttlery_month_140_fork">
                                                                                                            @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_140_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_month_140_fork')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="cuttlery_price_140_fork" id="cuttlery_price_140_fork" value="{{old('cuttlery_price_140_fork')}}">
                                                                                                        @error('cuttlery_price_140_fork')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="cuttlery_week_160_fork" id="cuttlery_week_160_fork">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_week_160_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_week_160_fork')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="cuttlery_month_160_fork" id="cuttlery_month_160_fork">
                                                                                                            @for($i = 0; $i <= 40000; $i+=(500*4))
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_month_160_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_month_160_fork')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="cuttlery_price_160_fork" id="cuttlery_price_160_fork" value="{{old('cuttlery_price_160_fork')}}">
                                                                                                        @error('cuttlery_price_160_fork')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                    <img
                                                                    src="https://static.vecteezy.com/system/resources/previews/016/694/735/original/tissue-with-transparent-background-png.png"
                                                                    alt=""
                                                                    style="height:80px;object-fit:contain;margin-right:20px"
                                                                    >
                                                                    <br/>
                                                                    TISSUES
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-primary">
                                                                                <tr>
                                                                                    <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER WEEK<br>12 pack / bag</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER MONTH<br>12 pack / bag</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE<br>12 pack / bag</th>
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="tissue_week_22_22" id="tissue_week_22_22">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ old('tissue_week_22_22')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_week_22_22')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="tissue_month_22_22" id="tissue_month_22_22">
                                                                                                            @for($i = 0; $i <= 400; $i+=(10*4))
                                                                                                            <option value="{{$i}}" {{ old('tissue_month_22_22')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_month_22_22')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="tissue_price_22_22" id="tissue_price_22_22" value="{{old('tissue_price_22_22')}}">
                                                                                                        @error('tissue_price_22_22')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="tissue_week_27_30" id="tissue_week_27_30">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ old('tissue_week_27_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_week_27_30')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="tissue_month_27_30" id="tissue_month_27_30">
                                                                                                            @for($i = 0; $i <= 400; $i+=(10*4))
                                                                                                            <option value="{{$i}}" {{ old('tissue_month_27_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_month_27_30')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="tissue_price_27_30" id="tissue_price_27_30" value="{{old('tissue_price_27_30')}}">
                                                                                                        @error('tissue_price_27_30')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="tissue_week_30_30" id="tissue_week_30_30">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ old('tissue_week_30_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_week_30_30')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="tissue_month_30_30" id="tissue_month_30_30">
                                                                                                            @for($i = 0; $i <= 400; $i+=(10*4))
                                                                                                            <option value="{{$i}}" {{ old('tissue_month_30_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_month_30_30')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="tissue_price_30_30" id="tissue_price_30_30" value="{{old('tissue_price_30_30')}}">
                                                                                                        @error('tissue_price_30_30')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="tissue_week_32_32" id="tissue_week_32_32">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ old('tissue_week_32_32')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_week_32_32')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="tissue_month_32_32" id="tissue_month_32_32">
                                                                                                            @for($i = 0; $i <= 400; $i+=(10*4))
                                                                                                            <option value="{{$i}}" {{ old('tissue_month_32_32')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_month_32_32')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="tissue_price_32_32" id="tissue_price_32_32" value="{{old('tissue_price_32_32')}}">
                                                                                                        @error('tissue_price_32_32')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="tissue_week_40_40" id="tissue_week_40_40">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ old('tissue_week_40_40')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_week_40_40')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="tissue_month_40_40" id="tissue_month_40_40">
                                                                                                            @for($i = 0; $i <= 400; $i+=(10*4))
                                                                                                            <option value="{{$i}}" {{ old('tissue_month_40_40')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_month_40_40')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="tissue_price_40_40" id="tissue_price_40_40" value="{{old('tissue_price_40_40')}}">
                                                                                                        @error('tissue_price_40_40')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTen">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                                <img
                                                                src="http://atlas-content-cdn.pixelsquid.com/stock-images/trash-bag-garbage-e1XEqNE-600.jpg"
                                                                alt=""
                                                                style="height:80px;object-fit:contain;margin-right:20px"
                                                                >
                                                                <br/>
                                                                GARBAGE BAG
                                                              </button>
                                                            </h2>
                                                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample2">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-primary">
                                                                                <tr>
                                                                                    <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER WEEK <br>(12 pcs / bag)</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PER MONTH <br>(12 pcs / bag)</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE <br>(12 pcs / bag)</th>
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="garbage_bag_week_small" id="garbage_bag_week_small">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_week_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_week_small')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="garbage_bag_month_small" id="garbage_bag_month_small">
                                                                                                            @for($i = 0; $i <= 20; $i+=(1*4))
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_month_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_month_small')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="garbage_bag_price_small" id="garbage_bag_price_small" value="{{old('garbage_bag_price_small')}}">
                                                                                                        @error('garbage_bag_price_small')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="garbage_bag_week_medium" id="garbage_bag_week_medium">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_week_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_week_medium')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="garbage_bag_month_medium" id="garbage_bag_month_medium">
                                                                                                            @for($i = 0; $i <= 20; $i+=(1*4))
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_month_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_month_medium')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="garbage_bag_price_medium" id="garbage_bag_price_medium" value="{{old('garbage_bag_price_medium')}}">
                                                                                                        @error('garbage_bag_price_medium')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="garbage_bag_week_large" id="garbage_bag_week_large">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_week_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_week_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="garbage_bag_month_large" id="garbage_bag_month_large">
                                                                                                            @for($i = 0; $i <= 20; $i+=(1*4))
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_month_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_month_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="garbage_bag_price_large" id="garbage_bag_price_large" value="{{old('garbage_bag_price_large')}}">
                                                                                                        @error('garbage_bag_price_large')
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
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="week_change_handler(event)" class="form-control" name="garbage_bag_week_x_large" id="garbage_bag_week_x_large">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_week_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_week_x_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select onchange="month_change_handler(event)" class="form-control" name="garbage_bag_month_x_large" id="garbage_bag_month_x_large">
                                                                                                            @for($i = 0; $i <= 20; $i+=(1*4))
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_month_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_month_x_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" type="number" name="garbage_bag_price_x_large" id="garbage_bag_price_x_large" value="{{old('garbage_bag_price_x_large')}}">
                                                                                                        @error('garbage_bag_price_x_large')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                  <img
                                                                  src="https://m.media-amazon.com/images/I/51pILIz20gL._SL1200_.jpg"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  BOPP TAPE
                                                              </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">1"</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="week_change_handler(event)" class="form-control" name="bopp_tape_week_1" id="bopp_tape_week_1">
                                                                                                        @for($i = 0; $i <= 5; $i+=1)
                                                                                                        <option value="{{$i}}" {{ old('bopp_tape_week_1')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('bopp_tape_week_1')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select onchange="month_change_handler(event)" class="form-control" name="bopp_tape_month_1" id="bopp_tape_month_1">
                                                                                                        @for($i = 0; $i <= 20; $i+=(1*4))
                                                                                                        <option value="{{$i}}" {{ old('bopp_tape_month_1')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('bopp_tape_month_1')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" type="number" name="bopp_tape_price_1" id="bopp_tape_price_1" value="{{old('bopp_tape_price_1')}}">
                                                                                                    @error('bopp_tape_price_1')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">2"</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="bopp_tape_week_2" id="bopp_tape_week_2">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('bopp_tape_week_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('bopp_tape_week_2')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="bopp_tape_month_2" id="bopp_tape_month_2">
                                                                                                          @for($i = 0; $i <= 20; $i+=(1*4))
                                                                                                          <option value="{{$i}}" {{ old('bopp_tape_month_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('bopp_tape_month_2')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="bopp_tape_price_2" id="bopp_tape_price_2" value="{{old('bopp_tape_price_2')}}">
                                                                                                      @error('bopp_tape_price_2')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwo2">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                                  <img
                                                                  src="data:image/jpeg;base64,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"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  BILLING ROLE
                                                              </button>
                                                            </h2>
                                                            <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER WEEK <br>(200 rolls / box)</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER MONTH <br>(200 rolls / box)</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE <br>(200 rolls / box)</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">2"</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="billing_roll_week_2" id="billing_roll_week_2">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('billing_roll_week_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('billing_roll_week_2')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="billing_roll_month_2" id="billing_roll_month_2">
                                                                                                          @for($i = 0; $i <= 20; $i+=(1*4))
                                                                                                          <option value="{{$i}}" {{ old('billing_roll_month_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('billing_roll_month_2')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="billing_roll_price_2" id="billing_roll_price_2" value="{{old('billing_roll_price_2')}}">
                                                                                                      @error('billing_roll_price_2')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">3"</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="billing_roll_week_3" id="billing_roll_week_3">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('billing_roll_week_3')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('billing_roll_week_3')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="billing_roll_month_3" id="billing_roll_month_3">
                                                                                                          @for($i = 0; $i <= 20; $i+=(1*4))
                                                                                                          <option value="{{$i}}" {{ old('billing_roll_month_3')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('billing_roll_month_3')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="billing_roll_price_3" id="billing_roll_price_3" value="{{old('billing_roll_price_3')}}">
                                                                                                      @error('billing_roll_price_3')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingThree2">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                                                  <img
                                                                  src="data:image/jpeg;base64,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"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  RUBBER BAND
                                                              </button>
                                                            </h2>
                                                            <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER WEEK <br>(200 rolls / box)</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER MONTH <br>(200 rolls / box)</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE <br>(200 rolls / box)</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">1KG</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="rubber_band_week_1" id="rubber_band_week_1">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('rubber_band_week_1')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('rubber_band_week_1')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="rubber_band_month_1" id="rubber_band_month_1">
                                                                                                          @for($i = 0; $i <= 20; $i+=(1*4))
                                                                                                          <option value="{{$i}}" {{ old('rubber_band_month_1')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('rubber_band_month_1')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="rubber_band_price_1" id="rubber_band_price_1" value="{{old('rubber_band_price_1')}}">
                                                                                                      @error('rubber_band_price_1')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFour2">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                                                                  <img
                                                                  src="data:image/jpeg;base64,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"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  BUTTER PAPER SHEET
                                                              </button>
                                                            </h2>
                                                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">12 x 12</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="butter_paper_week_12" id="butter_paper_week_12">
                                                                                                          @for($i = 0; $i <= 50; $i+=5)
                                                                                                          <option value="{{$i}}" {{ old('butter_paper_week_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('butter_paper_week_12')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="butter_paper_month_12" id="butter_paper_month_12">
                                                                                                          @for($i = 0; $i <= 200; $i+=(5*4))
                                                                                                          <option value="{{$i}}" {{ old('butter_paper_month_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('butter_paper_month_12')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="butter_paper_price_12" id="butter_paper_price_12" value="{{old('butter_paper_price_12')}}">
                                                                                                      @error('butter_paper_price_12')
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
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFive2">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive2" aria-expanded="false" aria-controls="collapseFive2">
                                                                  <img
                                                                  src="data:image/jpeg;base64,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"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  PARCEL PAPER SHEET
                                                              </button>
                                                            </h2>
                                                            <div id="collapseFive2" class="accordion-collapse collapse" aria-labelledby="headingFive2" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">APPROX <br/>REQUIREMENT</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER WEEK</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PER MONTH</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">12 x 12</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="parcel_paper_week_12" id="parcel_paper_week_12">
                                                                                                          @for($i = 0; $i <= 50; $i+=5)
                                                                                                          <option value="{{$i}}" {{ old('parcel_paper_week_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('parcel_paper_week_12')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="parcel_paper_month_12" id="parcel_paper_month_12">
                                                                                                          @for($i = 0; $i <= 200; $i+=(5*4))
                                                                                                          <option value="{{$i}}" {{ old('parcel_paper_month_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('parcel_paper_month_12')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="parcel_paper_price_12" id="parcel_paper_price_12" value="{{old('parcel_paper_price_12')}}">
                                                                                                      @error('parcel_paper_price_12')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">14 x 14</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="week_change_handler(event)" class="form-control" name="parcel_paper_week_14" id="parcel_paper_week_14">
                                                                                                          @for($i = 0; $i <= 50; $i+=5)
                                                                                                          <option value="{{$i}}" {{ old('parcel_paper_week_14')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('parcel_paper_week_14')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select onchange="month_change_handler(event)" class="form-control" name="parcel_paper_month_14" id="parcel_paper_month_14">
                                                                                                          @for($i = 0; $i <= 200; $i+=(5*4))
                                                                                                          <option value="{{$i}}" {{ old('parcel_paper_month_14')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('parcel_paper_month_14')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <input class="form-control" type="number" name="parcel_paper_price_14" id="parcel_paper_price_14" value="{{old('parcel_paper_price_14')}}">
                                                                                                      @error('parcel_paper_price_14')
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
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-xxl-12 col-md-12 col-sm-12">
                                                    <div>
                                                        <label for="payment_duration"
                                                            class="form-label">Advance Payment To Be Made Within :</label>
                                                        <div class="d-flex align-item-center gap-5">
                                                            <div class="col-auto">
                                                                <label for="payment_duration1">
                                                                    <input type="radio" name="payment_duration" value="7 days" {{old('payment_duration')=='7 days' ? 'checked' : ''}}
                                                                        id="payment_duration1">
                                                                    7 days
                                                                </label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <label for="payment_duration2">
                                                                    <input type="radio" name="payment_duration" value="15 days" {{old('payment_duration')=='15 days' ? 'checked' : ''}}
                                                                        id="payment_duration2">
                                                                    15 days
                                                                </label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <label for="payment_duration3">
                                                                    <input type="radio" name="payment_duration" value="1 month" {{old('payment_duration')=='1 month' ? 'checked' : ''}}
                                                                        id="payment_duration3">
                                                                    1 month
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @error('payment_duration')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-xxl-12 col-md-12 col-sm-12">
                                                    <div>
                                                        <label for="cash_payment"
                                                            class="form-label">If given the offer of 10% discount, will you make the advance payment in cash? :</label>
                                                        <div class="d-flex align-item-center gap-5">
                                                            <div class="col-auto">
                                                                <label for="cash_payment1">
                                                                    <input type="radio" name="cash_payment" value="Yes" {{old('cash_payment')=='Yes' ? 'checked' : ''}}
                                                                        id="cash_payment1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <label for="cash_payment2">
                                                                    <input type="radio" name="cash_payment" value="No" {{old('cash_payment')=='No' ? 'checked' : ''}}
                                                                        id="cash_payment2">
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @error('cash_payment')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
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

    <script>
        function week_change_handler(event){
            var current_id = event.target.id;
            var month_id = current_id.replace("week", "month");
            document.querySelector('#'+month_id).value = event.target.value * 4
        }
        function month_change_handler(event){
            var current_id = event.target.id;
            var week_id = current_id.replace("month", "week");
            document.querySelector('#'+week_id).value = event.target.value / 4
        }
    </script>

</body>

</html>
