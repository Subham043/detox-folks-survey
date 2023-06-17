<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover">


<head>

    <meta charset="utf-8" />
    <title>Detox Folks - Order Form</title>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Order Form</a></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div> --}}
                    <!-- end page title -->

                    <div class="row">
                        <form id="countryForm" method="post" action="{{ route('order_form_store') }}"
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
                                        <h4 class="card-title mb-0 flex-grow-1">Order Form</h4>
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
                                                                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxATDg8SEBAQDg8PDg0NDxAQEBAQDg8QFREWFhUSFRUYHSgsGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKBQwNFg8PFSsZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAAAQIDBAUGB//EADgQAAIBAgEJBAgHAQEBAAAAAAABAgMRIQQFMUFRYXGBkRITodEUFSJCUmKxwSMyY3KS4fDxooL/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AP3EAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEOSWlpczKWUwWmcetwNgcssvpr3vBlfWMNSm+EQOwHE8v2U6j5FZZe1j3UwO8HlvO/6b/l/RHrf9N9f6A9UHleuP0/H+gs7/AKb/AJAeqDzFnZfBLqi6ztDXGa5ID0AcKzpS+ZcUaxy+k/fS43QHSDONeD0Si+aNAAAAAAAAAAAAArUmkrvBI8yvl8pNqHsrbrt9gPSqVYx/M0uLOSrnKK0Jve7RXieW227rH5nj0LwpK99L2vEDaedJv8qtwV/FmEspqy963N/YvPQZOaA0o0bv2pN+B2wow+Fc8fqefGrsTZ1RlUeiCXFtgdMLLUlwSX2L95x6s51TrPXGPIt6LU11HywCNHLc+jKVp4PAj0J65yfNlKmRpLS3zYVwtb0RbgT2h325ARdbRbf4l/SNy6Issq3LogMuZHZZ0LKvlXRD0iGuMelgOezLdnd4G6q037tuDZZKD1teIHN3UXqEbr8s5Lnb6HS6K1SXNWKSoS3PgwKLOFWPvXW9KS8zooZ5XvRvvg/szka5PfgY1KW7msGB9BQy2nP8slfY8H0Og+S1pPHfr5ndkucZwwl7cdj08n9gPfBnQrRnFSi7p/6xoAAAHm51q4xjtTlxxscEl7LtvN89SUmkn2ZU9Et/kedTy3s4VF2dSl7j56gOlVFFK5HezehWW16SvYTxWOzWuRoltCMmtrbEUXktj6EKm/8ArA0pSV0etGaseTGn/kd8Vhr6gdPeoOsjBIkDR1zKtVwfMFJ6wrznAjujZoqBj3Q7reasgDPu96Dps1IAz7LJxLkpgUUwqzLsylFAWnWvv4mDk1oLSiUbASqJou3hfXZGM5RWLaW9nNUymUsIKy1yf2QHtZirt1qkV+XsKT/dfyZ7x8pmuqqVRYXv7MtuOvifVgAAB4ecaTjUb1SuzhhTb7SejDg77UfT1aakrSSaZ5WW5C4Rcou6W38y8wjyfRnF+zePB+z0N6dR2x66V4GlOd8Hp1LQ/EmdB3uk1hsswJVW+hp8GvuWvbSmuTOd31rrZkRml8u9OSA6lJbTshJW0nkqvtb5qMjaFVbFyUl9GB6aa2ok89SW1r/680O8+Z9YMK72UmcfePa/4rzKyry39H5gWZBzSyjj0IeUAdJDRz98zqyfJ6k1dOCW9sCoZ0er56501ybHoO2vFcIrzA5rg6lkEddapL9sVH7ErN9P4as/3TaXgBxSmlpw4tIwnlUdTT4YvwPUeSQjopU4vf7TODK272wstisgOSWVPVGTW/2TCdSb1qPBNvqzqlTdr6eJVQ/yA56eS3beLaV25PFI6KdNX3LTtIjux4Hr5uzYpRjKbweKitfF+QHJkOSOpUvb2U12nqVtXE+lK06aikopJLQlgiwAAADHK43py4X6GxWaumtqaA8WKTWKuaU1bQ2t17rozOmjWAQk3rUZdUYzpwemLjwszoZmwMZUIfFbirExyRapRZodNJKyul0QHL6JLcUnk1TUlr2YnoKEdi5YE92t/wDKXmFeXLJ6i93wRnOlP4fA9d0t8upV0/ml4eQHhOMsbrwZXsS/yZ6dSLv+Z9I+Rm6XzPpHyCOFRew9jNk0oYpYbbI43T+Z/wDnyJVFbX4eQV67qRvj2Lcg8ror3o8keUqK3k92tj6sD0pZwp6m3wiznrZwg7YSw4L6s5lTWxFrICsssvog+bv9Ec9SUn7qXReN2dEzMDHuW9LXJX8WT3Md74v7GrIYGcj6HJI2pwXyx+h881q24H0qQEgAAAAAAA8WStKS2SZaJOVRtUlyfVERCNGjNmhmwIN6GgwRvRA2RZFUWAMpIuyswOGekqXmigVBKIJQEokABYkhEgUmZl5FQIZVlpFWBNCN6kFtnH6n0J4eb43qw5voj3AAAAAAAAAPNzgvxFvijFHTnNYwfFHMgNCki6KSQRBrRMjSiBvEuiiZZMAysiSsgOSprKF6mkoFQSiCQLAgm4Allbi4FZFLlpFUAZVksqwOvNEfxG9kX4tHsHlZlWNR/tX1Z6oAAAAAAAAHJnJewnskjhiz0cuX4cuT8TzIaANu0VciAEDSjpMu0TCpZgdaLI5XlS2dSHlb2JAdRRnK8pe0o6r+JhUzekp2iOZPZQEXIuXUFvJjGO8CqZNzRxiR3a2gURDLOnsZVwYFGQJEdoCTOci7ZjMD2cyr8OT2zfgkegceao2ox39p+J2AAAAAAAAAUrK8ZL5X9DxYnuNHhvBtbG14gadopOoYykwkEW7x7CHfaCGFCbEIsBBBJAE3FyGRcCwTIJQGiJIiyQJbFyAAZlOGOBqyrA5pNopJnRKJzSjjba7AfS5HG1KC+SP0NiIqyS2JIkAAAAAAAAAeJnCm4zeyT7SPbMq9FTjZ8nrT2oDwkUnOzR0ZRk8oPHFapLRz2GM43AsQjOKa8i/a23XHzAkm5AAAACAkSAFiSCWBeJJESwEAXIc9mPACxlF4smzeklJICJI0ybJ+3UirYJqUuCL0cnlJ4LDa9B6tCioKy4t62wNACAJAAAAAAAAAAESV9OJxV82xeMH2Hs0x/o7gB4dXJKi0xvvjiZxqNYPpJWPoCsoJ6UnxQHhrsP3bb0W7qOqT52Z6k8ipv3UuF0ZPNsNTkuaYHnOi9Ti+qK9zLYup6Hq3ZN9CPV8/jXRgee6ctniiLPZ4o9D1fP449GPQJ/FHowPPtL4fFFuzLYubO71dP4l0Y9Wv410A4UntiurJ7PzPkkj0I5t+fpFGkcgjrcnzsB5kYr/uJdRvoTb3I9SOSwXurnibJJaMAPLp5HN6lFb9PQ6qOQxWn2nv0dDrAEJEgAQSAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf/9k="
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
                                                                                <th scope="col">SIZE</th>
                                                                                <th scope="col">
                                                                                    <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                        <thead class="table-light">
                                                                                            <tr>
                                                                                                <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                <th scope="col" class="text-center" style="width: 33%">COLOR</th>
                                                                                                <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">50ml</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="1.31">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_50_color" id="pp_50_color">
                                                                                                        <option value="Black" {{ old('pp_50_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_50_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_50_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_50_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="1.31" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_50" id="pp_50">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_50')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_50')
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
                                                                                                    <input class="form-control" disabled readonly value="1.73">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_100_color" id="pp_100_color">
                                                                                                        <option value="Black" {{ old('pp_100_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_100_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_100_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_100_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="1.73" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_100" id="pp_100">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_100')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_100')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">150ml</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="2.21">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_150_color" id="pp_150_color">
                                                                                                        <option value="Black" {{ old('pp_150_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_150_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_150_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_150_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="2.21" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_150" id="pp_150">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_150')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_150')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">200ml</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="2.78">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_200_g_color" id="pp_200_g_color">
                                                                                                        <option value="Black" {{ old('pp_200_g_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_200_g_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_200_g_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_200_g_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="2.78" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_200_g" id="pp_200_g">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_200_g')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_200_g')
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
                                                                                                    <input class="form-control" disabled readonly value="2.89">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_250_color" id="pp_250_color">
                                                                                                        <option value="Black" {{ old('pp_250_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_250_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_250_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_250_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="2.89" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_250" id="pp_250">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_250')
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
                                                                                                    <input class="form-control" disabled readonly value="4.04">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_300_color" id="pp_300_color">
                                                                                                        <option value="Black" {{ old('pp_300_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_300_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_300_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_300_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="4.04" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_300" id="pp_300">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_300')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_300')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">500gm</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="3.62">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_500_g_color" id="pp_500_g_color">
                                                                                                        <option value="Black" {{ old('pp_500_g_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_500_g_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_500_g_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_500_g_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="3.62" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_500_g" id="pp_500_g">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_500_g')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_500_g')
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
                                                                                                    <input class="form-control" disabled readonly value="3.83">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_500_color" id="pp_500_color">
                                                                                                        <option value="Black" {{ old('pp_500_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_500_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_500_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_500_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="3.83" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_500" id="pp_500">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_500')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_500')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">750ml <br>Tall</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="5.51">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_750_color" id="pp_750_color">
                                                                                                        <option value="Black" {{ old('pp_750_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_750_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_750_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_750_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="5.51" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_750" id="pp_750">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_750')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">750ml <br>Flat</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="5.62">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_750_flat_color" id="pp_750_flat_color">
                                                                                                        <option value="Black" {{ old('pp_750_flat_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_750_flat_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_750_flat_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_750_flat_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="5.62" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_750_flat" id="pp_750_flat">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_750_flat')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_750_flat')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">1000ml <br>flat</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="7.04">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_1000_color" id="pp_1000_color">
                                                                                                        <option value="Black" {{ old('pp_1000_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_1000_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_1000_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_1000_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="7.04" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_1000" id="pp_1000">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_1000')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_1000')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">500 rec</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="5.99">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_500_rec_color" id="pp_500_rec_color">
                                                                                                        <option value="Black" {{ old('pp_500_rec_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_500_rec_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_500_rec_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_500_rec_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="5.99" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_500_rec" id="pp_500_rec">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_500_rec')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_500_rec')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">650 rec</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="6.20">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_650_rec_color" id="pp_650_rec_color">
                                                                                                        <option value="Black" {{ old('pp_650_rec_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_650_rec_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_650_rec_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_650_rec_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="6.20" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_650_rec" id="pp_650_rec">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_650_rec')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_650_rec')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">750 rec</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="6.51">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_750_rec_color" id="pp_750_rec_color">
                                                                                                        <option value="Black" {{ old('pp_750_rec_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_750_rec_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_750_rec_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_750_rec_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="6.51" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_750_rec" id="pp_750_rec">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_750_rec')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_750_rec')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">1000 rec</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="6.83">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_1000_rec_color" id="pp_1000_rec_color">
                                                                                                        <option value="Black" {{ old('pp_1000_rec_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_1000_rec_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_1000_rec_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_1000_rec_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="6.83" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_1000_rec" id="pp_1000_rec">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_1000_rec')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_1000_rec')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">650 bowl</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="5.78">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="pp_650_bowl_color" id="pp_650_bowl_color">
                                                                                                        <option value="Black" {{ old('pp_650_bowl_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                        <option value="White" {{ old('pp_650_bowl_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Transparent" {{ old('pp_650_bowl_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                    </select>
                                                                                                    @error('pp_650_bowl_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="5.78" onchange="amount_change_handler()" class="quantity_price form-control" name="pp_650_bowl" id="pp_650_bowl">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ old('pp_650_bowl')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('pp_650_bowl')
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
                                                                                  <th scope="col">SIZE</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">250ml (Regular)</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="1.39">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="1.39" onchange="amount_change_handler()" class="quantity_price form-control" name="al_container_with_lid_250" id="al_container_with_lid_250">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_250')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_250')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">450ml (Regular)</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="1.85">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="1.85" onchange="amount_change_handler()" class="quantity_price form-control" name="al_container_with_lid_450" id="al_container_with_lid_450">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_450')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_450')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">660ml (Regular)</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="2.77">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="2.77" onchange="amount_change_handler()" class="quantity_price form-control" name="al_container_with_lid_600" id="al_container_with_lid_600">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_600')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_600')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">750ml (Regular)</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="2.77">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="2.77" onchange="amount_change_handler()" class="quantity_price form-control" name="al_container_with_lid_750" id="al_container_with_lid_750">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_750')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_750')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">450ml (Premium)</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="2.77">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="2.77" onchange="amount_change_handler()" class="quantity_price form-control" name="al_container_with_lid_450_premium" id="al_container_with_lid_450_premium">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_450_premium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_450_premium')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">750ml (Premium)</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="4.15">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="4.15" onchange="amount_change_handler()" class="quantity_price form-control" name="al_container_with_lid_750_premium" id="al_container_with_lid_750_premium">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ old('al_container_with_lid_750_premium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('al_container_with_lid_750_premium')
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
                                                                                  <th scope="col">SIZE</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
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
                                                                                                    <input class="form-control" disabled readonly value="420">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="420" onchange="amount_change_handler()" class="quantity_price form-control" name="aluminium_1kg_gross" id="aluminium_1kg_gross">
                                                                                                          @for($i = 0; $i <= 20; $i+=5)
                                                                                                          <option value="{{$i}}" {{ old('aluminium_1kg_gross')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('aluminium_1kg_gross')
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
                                                                                                    <input class="form-control" disabled readonly value="536">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="536" onchange="amount_change_handler()" class="quantity_price form-control" name="aluminium_1kg_net" id="aluminium_1kg_net">
                                                                                                          @for($i = 0; $i <= 20; $i+=5)
                                                                                                          <option value="{{$i}}" {{ old('aluminium_1kg_net')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('aluminium_1kg_net')
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
                                                                                  <th scope="col">SIZE</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">COLOR</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">2CP <br>Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0 w-100">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="6.13">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" name="compartment_2cp_color" id="compartment_2cp_color">
                                                                                                          <option value="White" {{ old('compartment_2cp_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                          <option value="Black" {{ old('compartment_2cp_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                      </select>
                                                                                                      @error('compartment_2cp_color')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select  data-price="6.13)"class="form-control" name="compartment_2cp" id="compartment_2cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_2cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_2cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">3CP <br>Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="6.13">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="compartment_3cp_color" id="compartment_3cp_color">
                                                                                                        <option value="White" {{ old('compartment_3cp_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Black" {{ old('compartment_3cp_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                    </select>
                                                                                                    @error('compartment_3cp_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="6.13" onchange="amount_change_handler()" class="quantity_price form-control" name="compartment_3cp" id="compartment_3cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_3cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_3cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">3CP <br>xl Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="7.71">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="compartment_3cp_xl_color" id="compartment_3cp_xl_color">
                                                                                                        <option value="White" {{ old('compartment_3cp_xl_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Black" {{ old('compartment_3cp_xl_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                    </select>
                                                                                                    @error('compartment_3cp_xl_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="7.71" onchange="amount_change_handler()" class="quantity_price form-control" name="compartment_3cp_xl" id="compartment_3cp_xl">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_3cp_xl')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_3cp_xl')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>
                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">4CP <br>Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="7.79">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="compartment_4cp_color" id="compartment_4cp_color">
                                                                                                        <option value="White" {{ old('compartment_4cp_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Black" {{ old('compartment_4cp_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                    </select>
                                                                                                    @error('compartment_4cp_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="7.79" onchange="amount_change_handler()" class="quantity_price form-control" name="compartment_4cp" id="compartment_4cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_4cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_4cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">5CP <br>Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="9.39">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="compartment_5cp_color" id="compartment_5cp_color">
                                                                                                        <option value="White" {{ old('compartment_5cp_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Black" {{ old('compartment_5cp_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                    </select>
                                                                                                    @error('compartment_5cp_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="9.39" onchange="amount_change_handler()" class="quantity_price form-control" name="compartment_5cp" id="compartment_5cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_5cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_5cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">6CP <br>Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="9.74">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="compartment_6cp_color" id="compartment_6cp_color">
                                                                                                        <option value="White" {{ old('compartment_6cp_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Black" {{ old('compartment_6cp_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                    </select>
                                                                                                    @error('compartment_6cp_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="9.74" onchange="amount_change_handler()" class="quantity_price form-control" name="compartment_6cp" id="compartment_6cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_6cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_6cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">8CP <br>Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="12.37">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="compartment_8cp_color" id="compartment_8cp_color">
                                                                                                        <option value="White" {{ old('compartment_8cp_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Black" {{ old('compartment_8cp_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                    </select>
                                                                                                    @error('compartment_8cp_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="12.37" onchange="amount_change_handler()" class="quantity_price form-control" name="compartment_8cp" id="compartment_8cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_8cp')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_8cp')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">750 <br>bow</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="6.57">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="compartment_750_bow_color" id="compartment_750_bow_color">
                                                                                                        <option value="White" {{ old('compartment_750_bow_color')=='White' ? 'selected' : '' }}>White</option>
                                                                                                        <option value="Black" {{ old('compartment_750_bow_color')=='Black' ? 'selected' : '' }}>Black</option>
                                                                                                    </select>
                                                                                                    @error('compartment_750_bow_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="6.57" onchange="amount_change_handler()" class="quantity_price form-control" name="compartment_750_bow" id="compartment_750_bow">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('compartment_750_bow')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('compartment_750_bow')
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
                                                                                  <th scope="col">ITEM</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
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
                                                                                                    <input class="form-control" disabled readonly value="2.79">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="2.79" onchange="amount_change_handler()" class="quantity_price form-control" name="p_box_sandwich" id="p_box_sandwich">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('p_box_sandwich')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('p_box_sandwich')
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
                                                                                                    <input class="form-control" disabled readonly value="1.98">
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="1.98" onchange="amount_change_handler()" class="quantity_price form-control" name="p_box_dosa" id="p_box_dosa">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ old('p_box_dosa')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('p_box_dosa')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                <td><a href="#" class="fw-medium text-center">Idly 2pc Box</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="1.67">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="1.67" onchange="amount_change_handler()" class="quantity_price form-control" name="p_box_idly" id="p_box_idly">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('p_box_idly')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('p_box_idly')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>

                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">Idly Vada Box</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="2.29">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="2.29" onchange="amount_change_handler()" class="quantity_price form-control" name="p_box_idly_vada" id="p_box_idly_vada">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ old('p_box_idly_vada')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('p_box_idly_vada')
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
                                                                    src="https://m.media-amazon.com/images/I/31quZokr3kL._SX300_SY300_QL70_ML2_.jpg"
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
                                                                                    <th scope="col">SIZE</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )/KG<br>24BF PRICE (&#8377; )</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">QUANTITY (Kg)</th>
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
                                                                                                        <input class="form-control" disabled readonly value="60">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="60" onchange="amount_change_handler()" class="quantity_price form-control" name="p_bag_small" id="p_bag_small">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('p_bag_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_small')
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
                                                                                                        <input class="form-control" disabled readonly value="60">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="60" onchange="amount_change_handler()" class="quantity_price form-control" name="p_bag_medium" id="p_bag_medium">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('p_bag_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_medium')
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
                                                                                                        <input class="form-control" disabled readonly value="60">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="60" onchange="amount_change_handler()" class="quantity_price form-control" name="p_bag_large" id="p_bag_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('p_bag_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_large')
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
                                                                                                        <input class="form-control" disabled readonly value="60">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="60" onchange="amount_change_handler()" class="quantity_price form-control" name="p_bag_x_large" id="p_bag_x_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('p_bag_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_x_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">7 kg</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="60">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="60" onchange="amount_change_handler()" class="quantity_price form-control" name="p_bag_xx_large" id="p_bag_xx_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('p_bag_xx_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('p_bag_xx_large')
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
                                                            <h2 class="accordion-header" id="headingTwelve2">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve2" aria-expanded="false" aria-controls="collapseTwelve2">
                                                                    <img
                                                                    src="https://m.media-amazon.com/images/I/51NfoHE61QL.jpg"
                                                                    alt=""
                                                                    style="height:80px;object-fit:contain;margin-right:20px"
                                                                    >
                                                                    <br/>
                                                                    CLOTH BAG
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwelve2" class="accordion-collapse collapse" aria-labelledby="headingTwelve2" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-primary">
                                                                                <tr>
                                                                                    <th scope="col">SIZE</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">10*11</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="4.58">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="4.58" onchange="amount_change_handler()" class="quantity_price form-control" name="cloth_bag_10_11" id="cloth_bag_10_11">
                                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                                            <option value="{{$i}}" {{ old('cloth_bag_10_11')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cloth_bag_10_11')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">11*12</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="5.08">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="5.08" onchange="amount_change_handler()" class="quantity_price form-control" name="cloth_bag_11_12" id="cloth_bag_11_12">
                                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                                            <option value="{{$i}}" {{ old('cloth_bag_11_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cloth_bag_11_12')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">12*12</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="5.31">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="5.31" onchange="amount_change_handler()" class="quantity_price form-control" name="cloth_bag_12_12" id="cloth_bag_12_12">
                                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                                            <option value="{{$i}}" {{ old('cloth_bag_12_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cloth_bag_12_12')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">11*14</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="5.82">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="5.82" onchange="amount_change_handler()" class="quantity_price form-control" name="cloth_bag_11_14" id="cloth_bag_11_14">
                                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                                            <option value="{{$i}}" {{ old('cloth_bag_11_14')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cloth_bag_11_14')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">13*16</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="6.94">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="6.94" onchange="amount_change_handler()" class="quantity_price form-control" name="cloth_bag_13_16" id="cloth_bag_13_16">
                                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                                            <option value="{{$i}}" {{ old('cloth_bag_13_16')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cloth_bag_13_16')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">15*18</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="8.18">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="8.18" onchange="amount_change_handler()" class="quantity_price form-control" name="cloth_bag_15_18" id="cloth_bag_15_18">
                                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                                            <option value="{{$i}}" {{ old('cloth_bag_15_18')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cloth_bag_15_18')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">16*20</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="9.29">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="9.29" onchange="amount_change_handler()" class="quantity_price form-control" name="cloth_bag_16_20" id="cloth_bag_16_20">
                                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                                            <option value="{{$i}}" {{ old('cloth_bag_16_20')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cloth_bag_16_20')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">18*20</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="10.61">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="10.61" onchange="amount_change_handler()" class="quantity_price form-control" name="cloth_bag_18_20" id="cloth_bag_18_20">
                                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                                            <option value="{{$i}}" {{ old('cloth_bag_18_20')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cloth_bag_18_20')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">20*20</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="11.77">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="11.77" onchange="amount_change_handler()" class="quantity_price form-control" name="cloth_bag_20_20" id="cloth_bag_20_20">
                                                                                                            @for($i = 0; $i <= 1000; $i+=100)
                                                                                                            <option value="{{$i}}" {{ old('cloth_bag_20_20')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cloth_bag_20_20')
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
                                                            <h2 class="accordion-header" id="headingFive3">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive3" aria-expanded="false" aria-controls="collapseFive3">
                                                                  <img
                                                                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNP3az4rugbFmlXWxDrult3_2zwnuOCeuDHg&usqp=CAU"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  GLOVES
                                                              </button>
                                                            </h2>
                                                            <div id="collapseFive3" class="accordion-collapse collapse" aria-labelledby="headingFive3" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">ITEM</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">Regular</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="19.824">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="19.824" onchange="amount_change_handler()" class="quantity_price form-control" name="gloves_regular" id="gloves_regular">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('gloves_regular')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('gloves_regular')
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
                                                            <h2 class="accordion-header" id="headingFour3">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour3" aria-expanded="false" aria-controls="collapseFour3">
                                                                  <img
                                                                  src="https://cdn.shopify.com/s/files/1/0490/1447/2862/products/disposable-medical-head-cap-146524_grande.png?v=1613322470"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  HEAD CAP
                                                              </button>
                                                            </h2>
                                                            <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour3" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">ITEM</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">16x10</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="71.66">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="71.66" onchange="amount_change_handler()" class="quantity_price form-control" name="head_cap_16_10" id="head_cap_16_10">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('head_cap_16_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('head_cap_16_10')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">18x10</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="82.69">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="82.69" onchange="amount_change_handler()" class="quantity_price form-control" name="head_cap_18_10" id="head_cap_18_10">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('head_cap_18_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('head_cap_18_10')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">21x10</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="93.71">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="93.71" onchange="amount_change_handler()" class="quantity_price form-control" name="head_cap_21_10" id="head_cap_21_10">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('head_cap_21_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('head_cap_21_10')
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
                                                                src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QEBEQDQ8NDQ0QEhUQDw0NDQ8NDQ8PFRYWFxUSFRUYHSggGBolGxUVITEhJi0rLi4uFx8zODMtNygtLisBCgoKDg0OGxAQFTcdHR8rLSstLS0tLS0tLS0tLSstLS0tLy0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tLS0tN//AABEIAOEA4QMBEQACEQEDEQH/xAAbAAEBAQADAQEAAAAAAAAAAAAABQQCAwYBB//EAD8QAAIBAQIJCgQEBAcAAAAAAAABAgMFEQQhMUFRYXGxwRIiIzNygZGh0fAyQrLCBmJzglKi4fETU2OS0uLy/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAIDBAEF/8QAKREBAQABBAICAwACAQUAAAAAAAEDAhExMgRBIXESIlEzwfATQmGBsf/aAAwDAQACEQMRAD8A/cQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfJSSTbaSWVt3JC3YcaNWM1yoSjOOmLTRyWX5jtlnLmdcAAACbhlt0KTucuVJZo4zPr8nRp+OVunDq1M9L8S0JO58qOa9ohPM0X0nfH1RWo1ozV8JKS1GnTqmqbyqLLOXYScAAAAAAAAAAAAAw4DVvdR7Hv9DPi1b3VVmubbFmT5ktWPxR3Bf1pkny4YFUvpT0pN+K/uRxXfHXdc/aO2zKvKhdouu2Nf3J4NW+lHJNq2FyAAA4Vaiim3kRzVqmmb12TdJwqs6mX4bndHMYteu61+nTs0WPkqLRP7Il+Di/avJzFEvVgADy/wCI7Zd7o0ndd8clp0Hn+Tn+fx0tmDD/AN1eaWO+/HjMLU7Ywx964HdnFez68oSTi2n5PUy/Hrum7xTr0yx6vBMIVSPKWJ5GtD0HqaNc1TeMWrTtdncSRAAAAAAAAAADrwifJhJ6It+CI6rtptd0zeo9izv5Wukn5syePfi/S/LHfZT5s+yvuJYOtRycxws59HU/TX3nMPS/TuTtHKxZ5F/FTT/2/wDo741/+OZYrGtSAAI+H4RypuK+GK885jy6/wAtW38X6NO03dbyr3oK0muxslV6an2QNODrftVk5iiXqwDFa+F/4NGU/muuj2nkKc+T8NFqzFo/LVs8BjbbeNvKzx3pO2nTy7Tsc3aKdPH70EpEbWuhBk5EKs2TV5Mkn82Lvze9Zr8fVtdv6z5ZvFs2s4AAAAAAAAAAZLVd1Cq/yS3FWb/HfpPH3iVYOV/pPya9TL43v6XZv9u+yZcyfY/5E/H636Rycxxs18yf6XqcwdL9O5OZ9vtj/FDsSX0jxuf/AE5l4WjaoAOvCKnJjKWhXkdd202uyb1AoY22864mCNNd7Z1xqsH4J66j+mJp8fqry8qReqAPNfjKtipQ0vlPxS4mDzdXEavGnNedpxy7TBGppoU8u30LJEbWunTJyI2tVKBORC12Y1NNZletqyEpdrEbw9JF3pNZHjPSZH0AAAAAAAAAAy2rG+hVX5JbirN/jv0nj7RH/Drx/skvNGTxf9L87RZSuUl/psng4v0hk9PmBq6nU/SluGLpq+ndfM+3Oylz46oy+31O+P2cycLBsUAGK15XUnraRTnv6rMfKTg+TuMkXV2yFcbbD6t9t7kavH6KsvZRL1YB5P8AF/W09UfuR5nmd42eN1qVCPEzRfu2UYbyyRC1rpwyFkQtaIRJSI2vtSOO/Qmdri5gr6OHZjuRv09YzauXaScAAAAAAAAAHXhEOVCS0xa8UR1TfTY7pu1ebsaq4X3XX3Z9d552DV+LXlm7ZQqci+67GrsZZp1fjvsrs3OW4ppXXSTi9lwmqybT2bbtVmR50noil4v/AKl2CfNQycKRpVAE+2urXaW5lHkdZ9rMXKbg2f3oMsXVzmKRvsPqv3S8ndwNeDopy9lAuVgHmvxZT51OWq7zPP8AMn7Stfj34sS6cDLIutbKEN5bIha1QjjRORCu+MSaLhhGLlPQr95ykXKMboxWhJeCN8m0Z7y5nXAAAAAAAAAAA8s48ic46JNd1+I8uz8dVjZzJXdyt3od3cdid/vUSRU7NjzZPTLFsWLema8M/VTkvy2FyABhthdE3oafDiU5+izH2TKHFGSLq7H6nXG2w+pXan9TNWDpFWXsoFysAlfiHB+XTT/hkn3PEZvK0b6d/wCLsOraoSjjWsw7NNrbRjxLNMV2tEYk9kd3dBEo44unyqihpuv2XtvyTJaZvq2ct2m6ybFAAAAAAAAAAAAINr0bqjlmlc+/JwMHkadte/8AWnFd9LMne9mLcVJu+m/ieh8CcRq3g0OTCKeVLHtz+Zv0TbTIzarvXaScAOjDYcqnJar/AAxkMk301LTdqiUsi2owxoruuOuN1iq6jHtT+uRrwdIpydm4tQAOM4KSaeNM5ZvNqS7PO4XgrhO56cXgedr0fjdmrTq3jspx4nZC1pjEnIi+uSR3dxps6llqSyyxR7Onv4Ivw6dv2vtDXfTaXKwAAAAAAAAAAAT7Yp3xT0O7xM3kz4lW4r8pEFjfvMjJF7Vg0L5XaZq/Zn8ky3HN9WyvVfhdN7OAAPjQEBQuvWiS8medZt8NO7tOjfZC6GO2X1SNeHpFOTs2FqAAAx2jRvjys8dxTm07zf8AieO7XZOzrvMq52Xkt3H2lT5clHNn7Ky8F3ktGn8tWzmq7RYNigAAAAAAAAAAAADPh8b6ctWMryzfRUtF+USKxe9BgaWyzY31Nl78kuJowT9lWThXNakAAAI+HQuqPW4vzMWWbaqv0X4cFmIJKFl9VDvf8zNmLpFOvs1liAAA+TjemnkauOWbzYQ5Ync8163mC/FaX1yzgbbMh8ctkVve9eBpwT4tVZL6by9WAAAAAAAAAAAABwrK+MtjI6uK7OUGCxeR57S3WUr5TehJeP8AY0+PzVWT0pmlUAAAE61I44vu80Zs8+ZVuOsbeIoWKlm9VDYbcXSKNfatJNEAAAImHxuqPXj8UYcs21tGj50uiUvPEV7pLWARupx13y8Xeb8c20xn135aCaIAAAAAAAAAAAAHxiiDSz9pnnRprfZK+PauJp8fiqsnpQNCsAAAMdprmrVJFGefqsx8plR4tvqjLVsV7P6qGw3Y+kUa+1aCaIAAASbWjz4vTEyeRP2i/Fwwyzace5lCx6KnG6KWhJHoybRkrkdAAAAAAAAAAAAADAg0sr2y3nnTlprfZWSe01ePxVWRvL1YAAAZLT6t7UU5+iePsl1M2x70ZKuVrO6qPfvZux9Io19mkmiAAAE21/k7+Bl8j0uxe05Rvmtq3MonZZeHoz0WUAAAAAAAAAAAAAB8YHn6bxvtPeebOWpRsp/HtXH0NWDiqsnpQNCoAAAMlqPo3tRTn6J4+yS8mzFuMi9Xs3qo/u+pm3F0jPr7NRYiAAAE21/k7+Bl8j0txe2BK5p61uKJzFl4ehPRZgAAAAAAAAAAAAAHGeR7GcvDsedpSz639R5saqpWU+dU2R3yNXj+1OT0pGlUAAAGG2H0e2SM/kdVmLlMi8TMsXK1lvoo7ZfVI3YukUa+zWWIAAABKth86GxmTyeYuxcVjeRe8zKYsehR6LKAAAAAAAAAAAAAA4V3zZbGR19a7OXnKOT3pPNjVVGyn0k9cdz/AKmrBzVWTiKpqUgAABNtx82PaM3k34i3FynwyMzRbVayeqj2p/XI24ekUZOzYWoAAABHth9JHsmLyO0X4uGVrmlU4TegpO+KepHozhmrkdcAAAAAAAAAAAAA6cLd0JbCGTrUtPLz1LIjzY1VRszrdsJb4GrB2U5OFY1qQAAAlW68UNre4yeV6XYfbFTzmfSsqrZD6PZOf1N8Tdh6KMnZtLUAAAAiWv1q1RMPkd2jF1dMMngVxKrmCvo4dmO49DT1jNq5dpJwAAAAAAAAAAAADPaD6KewrzdKlo7R5+lkR50aqoWc+ljrjJfT6GnB2VZOFg2KAAAAkW68cPecx+VzF+Fjp5yiLKqWO+ZPVUfmovibcHVRk5by5WAAAEO1X0vcjBn7tOPq6aeRdxCO1bwHq4dlG/H1jPq5d5NEAAAAAD4B9AAAAADJasrqUinPf0qePsh0siMEaa14C+lp63Jfy38DRh7RXr4XDazgAABFt186OziYfK7Row8MtLOVaU6p2M8VT9T7Ymzx+L9qMnMUS9WAAAEC030z7uB5+b/JWnH1cKeQjHas2e+jj372bsXSM+vlpLEQAAAAAAAAAAAAMNsvontKPJ6LMXZGpowxorVgbuqUu2/OEi/F2n/PSvXxV03M4AAAQ7dfO7kYPJ7NOHhnpZivSlVGx8tRa0964Gvx+Kpy+lM0KgAAA87acukk/wA3FHnZr+9atHUhkOQqxZnVLbLezbh6RRr7NRagAAAAAAAAAAAABgtnq+8z+T1WYuUiGUxxorRTd0qT/PHzvRdj7RXq4q8bmcAAAIFtPny1JcDz/I7tOLq66WYhEqo2V8dTZF+czV4/tTk9KRpVAAAB5m0Xz5P83E8zL2rXo4jtprcdjlVrM+DZJ8Dbh6qMnLWWoAAAAAAAAAAAAATrafMW30M3k9YtxcpTyPY+JkXu3/K/Vp/UvUs08z7iF9vQnoMwAAAeftbHOfdwPOz961Y+rjSWQ5pK32Z1k9cV5N+ppwc1Vk4imaVQAAAeXw3G32uJ5evmtmnhopolEap2X8Mu19sTZg6qcnLaXKwAAAAAAAAAAAAJduSxRWl+hl8q/EXYUyfwy2PiZfS5zi+anonF+HJZPT6Rr0h6LKAAAHnbUfPntu8zzs3atWjh9pnIVrs2XStfkk/5ol+C/tVeThWNakAAAPK1/j2tb2eVeWycNdMsiNUbKeKW1Py/oasHCnJy3F6sAAAAAAAAAAAACTbeWHvT6GTyeYuxMLWJmda+SXRy2X+SO+nPb0p6TKAAAHnLQV8pdriebk7Vq0cOUBBowDFXWuMl5p8C7D3Q19Vk2KAABxm8T2M5eHY8vXXOT1reeXeWucNdP35lkRrbY/z/ALeJo8f2qy+lI0qgAAAAAAAAAAAAJtqwvcX7z+pl8ifMW46wyV1+u9lGy1w+SWy5bWkJwe3okeiyvoAABAw2GN7WefknzWnTfh9jE5IO7Ao31lqUm933eRdhn7oa+qwa1IAA41FemtKZy/MdnLztWONe86PNsaY74rITcbLJXx93Ev8AH9q8iiaVQAAAAAAAAAAAAHVhFFTV2R5U9ZDXo/KbO6btUytg018snia5q5Wgy3HqnpdNUdmBYDJtSqLkxi01FtNuSSubuyXNFmPFd99SOrX6ioaVQAAAY8NwTlY45c60lGXF+XzFmjXtyx/4NTIqcm+5LxZT/wBPV/E/yn9b8CwbkJuVznLK1kSWRI049H4z/wAqtWrdpLEQAAAnYbgTb5UMelZ8qZmyYbvvFunX6rojQqPFGEr9MubFe9RCY9V9JflP6pYLQVON2V5ZPJe9PvQatGmaZsp1Xeu4k4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//Z"
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
                                                                                    <th scope="col">ITEM</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">QUANTITY (10000 pcs / box)</th>
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
                                                                                                        <input class="form-control" disabled readonly value="0.53">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="0.53" onchange="amount_change_handler()" class="quantity_price form-control" name="cuttlery_110_spoon" id="cuttlery_110_spoon">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_110_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_110_spoon')
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
                                                                                                        <input class="form-control" disabled readonly value="0.51">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="0.51" onchange="amount_change_handler()" class="quantity_price form-control" name="cuttlery_140_spoon" id="cuttlery_140_spoon">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_140_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_140_spoon')
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
                                                                                                        <input class="form-control" disabled readonly value="0.71">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="0.71" onchange="amount_change_handler()" class="quantity_price form-control" name="cuttlery_160_spoon" id="cuttlery_160_spoon">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_160_spoon')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_160_spoon')
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
                                                                                                        <input class="form-control" disabled readonly value="0.71">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="0.71" onchange="amount_change_handler()" class="quantity_price form-control" name="cuttlery_140_fork" id="cuttlery_140_fork">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_140_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_140_fork')
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
                                                                                                        <input class="form-control" disabled readonly value="0.71">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="0.71" onchange="amount_change_handler()" class="quantity_price form-control" name="cuttlery_160_fork" id="cuttlery_160_fork">
                                                                                                            @for($i = 0; $i <= 10000; $i+=500)
                                                                                                            <option value="{{$i}}" {{ old('cuttlery_160_fork')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('cuttlery_160_fork')
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
                                                                                    <th scope="col">SIZE</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">4x6 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="21.735">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="21.735" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_4_6" id="al_pouch_4_6">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_4_6')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_4_6')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">5x7 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="28.35">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="28.35" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_5_7" id="al_pouch_5_7">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_5_7')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_5_7')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">6x8 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="35.532">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="35.532" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_6_8" id="al_pouch_6_8">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_6_8')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_6_8')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">6x9 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="40.635">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="40.635" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_6_9" id="al_pouch_6_9">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_6_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_6_9')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">7x9 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="48.195">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="48.195" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_7_9" id="al_pouch_7_9">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_7_9')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_7_9')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">7x10 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="52.92">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="52.92" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_7_10" id="al_pouch_7_10">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_7_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_7_10')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">8x10 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="60.48">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="60.48" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_8_10" id="al_pouch_8_10">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_8_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_8_10')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">9x12 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="83.16">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="83.16" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_9_12" id="al_pouch_9_12">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_9_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_9_12')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">10x12 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="96.39">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="96.39" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_10_12" id="al_pouch_10_12">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_10_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_10_12')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">10x14 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="107.73">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="107.73" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_10_14" id="al_pouch_10_14">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_10_14')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_10_14')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">4x6 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="21.9">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="21.9" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_4_6_full" id="al_pouch_4_6_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_4_6_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_4_6_full')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">5x7 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="32.1">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="32.1" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_5_7_full" id="al_pouch_5_7_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_5_7_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_5_7_full')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">6x8 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="43.5">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="43.5" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_6_8_full" id="al_pouch_6_8_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_6_8_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_6_8_full')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">6x9 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="46.3">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="46.3" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_6_9_full" id="al_pouch_6_9_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_6_9_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_6_9_full')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">7x9 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="55.8">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="55.8" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_7_9_full" id="al_pouch_7_9_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_7_9_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_7_9_full')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">7x10 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="58.6">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="58.6" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_7_10_full" id="al_pouch_7_10_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_7_10_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_7_10_full')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">8x10 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="69.9">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="69.9" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_8_10_full" id="al_pouch_8_10_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_8_10_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_8_10_full')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">9x12 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="92.6">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="92.6" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_9_12_full" id="al_pouch_9_12_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_9_12_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_9_12_full')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">10x12 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="109.6">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="109.6" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_10_12_full" id="al_pouch_10_12_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_10_12_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_10_12_full')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">10x14 - (Full Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="119.1">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="119.1" onchange="amount_change_handler()" class="quantity_price form-control" name="al_pouch_10_14_full" id="al_pouch_10_14_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('al_pouch_10_14_full')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('al_pouch_10_14_full')
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
                                                                                    <th scope="col">SIZE/SOFT</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">QUANTITY (Bags)</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">22*22/9*9 <br/>(100 pcs / packet - 48 packets / bag)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="12.6">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="12.6" onchange="amount_change_handler()" class="quantity_price form-control" name="tissue_22_22" id="tissue_22_22">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ old('tissue_22_22')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_22_22')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">27*30/11*12<br/>(100 pcs / packet - 30 packets / bag)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="19.95">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="19.95" onchange="amount_change_handler()" class="quantity_price form-control" name="tissue_27_30" id="tissue_27_30">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ old('tissue_27_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_27_30')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">30*30/12*12<br/>(100 pcs / packet - 30 packets / bag)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="26.25">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="26.25" onchange="amount_change_handler()" class="quantity_price form-control" name="tissue_30_30" id="tissue_30_30">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ old('tissue_30_30')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('tissue_30_30')
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
                                                                                    <th scope="col">SIZE</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
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
                                                                                                        <input class="form-control" disabled readonly value="34">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="34" onchange="amount_change_handler()" class="quantity_price form-control" name="garbage_bag_small" id="garbage_bag_small">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_small')
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
                                                                                                        <input class="form-control" disabled readonly value="38">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="38" onchange="amount_change_handler()" class="quantity_price form-control" name="garbage_bag_medium" id="garbage_bag_medium">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_medium')
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
                                                                                                        <input class="form-control" disabled readonly value="44">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="44" onchange="amount_change_handler()" class="quantity_price form-control" name="garbage_bag_large" id="garbage_bag_large">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_large')
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
                                                                                                        <input class="form-control" disabled readonly value="71">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="71" onchange="amount_change_handler()" class="quantity_price form-control" name="garbage_bag_x_large" id="garbage_bag_x_large">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ old('garbage_bag_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('garbage_bag_x_large')
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
                                                                                  <th scope="col">SIZE</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )/60mtr</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">COLOR</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">3"</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="37.2">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="bopp_tape_3_color" id="bopp_tape_3_color">
                                                                                                        <option value="Transparent" {{ old('bopp_tape_3_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                        <option value="Brown" {{ old('bopp_tape_3_color')=='Brown' ? 'selected' : '' }}>Brown</option>
                                                                                                    </select>
                                                                                                    @error('bopp_tape_3_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="37.2" onchange="amount_change_handler()" class="quantity_price form-control" name="bopp_tape_3" id="bopp_tape_3">
                                                                                                        @for($i = 0; $i <= 5; $i+=1)
                                                                                                        <option value="{{$i}}" {{ old('bopp_tape_3')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('bopp_tape_3')
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
                                                                                                    <input class="form-control" disabled readonly value="24.8">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" name="bopp_tape_2_color" id="bopp_tape_2_color">
                                                                                                        <option value="Transparent" {{ old('bopp_tape_2_color')=='Transparent' ? 'selected' : '' }}>Transparent</option>
                                                                                                        <option value="Brown" {{ old('bopp_tape_2_color')=='Brown' ? 'selected' : '' }}>Brown</option>
                                                                                                    </select>
                                                                                                    @error('bopp_tape_2_color')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="24.8" onchange="amount_change_handler()" class="quantity_price form-control" name="bopp_tape_2" id="bopp_tape_2">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('bopp_tape_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('bopp_tape_2')
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
                                                                  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEBATEBAVFhUVFRUPDw8PFRAPFQ8VFRUWFhUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDQ0NFQ0PDysZFRkrLSstLS0rKy03KysrNysrKy03LSsrKy0rKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABAUBAgMGB//EADwQAAIBAgIGBwUGBgMBAAAAAAABAgMRBAUSITFBUXEGIjJSYYGRobHB0eEUFSMzQ3ITQmKCovBTkvEH/8QAFgEBAQEAAAAAAAAAAAAAAAAAAAEC/8QAFhEBAQEAAAAAAAAAAAAAAAAAAAER/9oADAMBAAIRAxEAPwD7iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABzrVVFXYHQw2V9TFt7NXI4znvb9S4LR1Y95eqH8aPeXqjzWKzjD0nadWKe+O1+iONLpFhZOyq/8AZNfAg9Ypp7GvI2KWhiITScZJp7GmmmSFUa2MosgQ6eM73qS0yDIAAAAAAAAAAAAAAAAAAAAAAAAAAEDMY3ceTJ5Dxu2PJgQlRfESoPcbylY0niktqZUfPs36BYiU5SoYqKTd1CvCSa/vhdPnZEPD9BcdfrYijFcYqrN+mivefSJY+nvl7GcZZlRX6i9H8hhqHkGTPDU9DTc7vSnOSUbuyXVgr6K82y2cHxITzmitjb5J/E0ecp9mD/udvYhgnSjba/MtcDK9OD8Dy88RKfafkth6XK/yaf7RSJQAIoAAAAAAAAAAAAAAAAYbMTlZNvdrKyriXLa/ICfLERW/01nN41cH7CBpop836S0MM9Gd3LboxtdX2X3Io9N9uXdZtHGLgzwkenNJv8t246US4yvpFRxD0YPrWvoy22324kHp414vf66iPje0uT95G/iow6tyoVCHXJc2RK5RV4jeVtYs8QVldlRygybhyDAnYcET4HqsAvwqf7V7jysD1eB/Kp/tj7jNWO4AIoAAAAAAAAAAAAAAADlil1JFdGmixxPYlyK+ZYjP8JFHnfRTDYt3rQu1qU4SlSnZbLtan5otZ1Wtj9SJVzCUdyfqgPMR/wDmuET7de3B1Y+/QuX2U9HKGFX4MNG+qU25TnJcHKWxeCsa1M7a/TXq/kcXn03shFerGGvQaCOGIqRh4vgv91FNHMKk9sreEdR1gUW8JXjF8Vcj4g70V1Icl7jhiAKvEFbVRZ4gq6zKjnAm0CFAm4cETonrMB+VT/ZH3HkovUejoZlRjCMXPZFLUpPYuRmrFiCD97Ue/wD4y+Rn70o9/wBkvkRU0EeOOpv9SPm7e86xqxeySfJpgbgAAAAAAAAAAAAOWK7EuRXzLDFdiRXz2FiI1YrMSWdYrMTvKiqxBHjtO9dnBLWVKnYYnwIGGJ8CKtqfYjyXuOFckQ7EeS9xxnC7sFVVaDk7RTb4LWKeRzl2mo+1l7SgoqyX1N7k0xWUchpra2yXHK6a3P1O86ljx3SPpi8NUlTSScXa9S+vxUdWrxIr1iwFLu+1mHgKfB+rPnS6d1H+quSii5yPphKvUhTtpOTt1L3Xi1wQHqZZdHc2vRnKWXtbGn7CbTm2bgVMqLW1GugW8lfaRK9C2wCPCpJbJNcm0SaeY1F/Nf8AckR0hYCyo5v34+cfkyfQxMZ9l38NjXkeesY2a1q8VqA9QCnwmaNaqmtbpb1z4lvF3V1zTQGQAAAAHLFdiRXz2FhiuxIr5liVGrFZiSzrlZiSoqq5xpxbdkrt7EixoZfKq9Wpd5/DiXuX5bCktS175PaxaYrsFlMrJzdvBa2Tvu5d5+wsWrHNRc99o8Vtly4ImtOUV1bLXo2i3Z7kcJSs0yyskrLUtxAxtNWbQR2jK+w2K6nUfE6LFNbUn7CKmtXI+JwNOqtGpCM13akY1F7UarHx3prlZm326nxfowKx9EsDe/2Oj5U17ixw2X0qUdGnTjCPdpxjTT522m326n3/AGS+Ro8ypL+Z+UZASoRSVkrLwNiunm0N0ZP0j8SPVzab7MYx8X1mBb1JqKvJ2XFkH7XpN31LdfhxKyVZyd5NyfjsXJG8W29YE5GbBGQMWNWjcwwOMkWuRYhtSg/5bOPJ7v8AeJWTLTIIapy4tL0V/iBagAAYZkAcsT2JcivmWGJ7EuRXTluLER6pzp4O7vL0+ZMhT4nVRGjSELHSKFjKRFZcbmxqYnIDhiq+iVVTFNuxjHV7yaIl9a5gSkzbSNbGGAkc3E3NWBzkjVxOjZowNNEKJszAGYo60lrOaOlMCZFm6I1KZIiwM2MMyYYHORd5PC1JeLb9v0KSR6LCRtTgv6V7gOwAAHLEV401pTkkuL/3WYxeIVOEpPYlfnwR43F4iVWTlN3e5borgkBc4vPoyuoqVt7slf1OFPNaa2xl6J/Ep7BAeipZjTlslb9yaOsa7k7Qs+9LdH6nmCbhMynT1bY91/B7gPR6IZHwuMjUV4vnF7UdtK4DSOdeWoSZGxU9QHncXX68udhGpsI2JX4kufoZUwLtGGYpu6RtIDmzVmzNQNWas2ZqwNWAEBlG8naLZqjGLdoPyXtA3oTuS6ciqw8yxpSAkphmkWbAY0btLi0vU9MUOXQvVj4Xl6F8AAAFP0ll+HBcZXfkmeeaPRdJKd6cHwlr80/jY86BpJGDdnKUrbPNvcBuhYhfedLS0XXpX7rnBP3k1MDanNxacXZreXmAxiqLhJbVx8UUYhNxaa2rYB6WTIleIo4lTimvNcGc60wKDHLrMhYmpoxk/AscftPN59ibR0Ftlq8t7A9hgJ6VOD4xi/VIkMrsj/IpLhGMfRWLEDnJGrRuzVgaNGh0kjRgagyLAZSOWYu0Fz+DO8URszg2oJcW+YEajIsqMirpxadmrcyfQYE6LOlzhBnZAWGTx68nwXvf0Lcrcljqm+LS9F9SyAAADjjKH8SnKL3rV4Pc/U8dKLTaeprU14o9uUOfYG34kVt7a4PcwKRlJ0jqSjQqaPFXt3XtL2xHxNBSTTV01Z8gPjeZYaVRO0W/IndCekGJwlWNDEKcsPJqKlPrPDt6lJPucVu2q2u/uZ9HY36uw5Vejie8D0kZGxHoxskm72Si3xsjugO+Dq6Mrbnq89xKrTK871qmr2gVmaV1FNs81ChKpNzkuS4LgegnhnXlq7K2ePidqmX6CA75K/w0uDaLRFRlL7a/q+CLeIGrMNG7NbAc5GjOjRqwNAbBIDMUR8auvG3D4kqKN44fSd/IDpg6SkrSV1wZ2r5Q0r09a3we1cnvJOEw9i1pRA8tBW2+aeo7RLjMcDp9aK62/wDq+pUJAXeVQtTXi2/bb4Ew5YWNoQXgvcdQAAAGJRTTTV09TT3mQB5fNMvdKV1rg3qfd8GQbHtKkFJNNXT1NPeeezHKZQvKCco8FrlH5oCrcDSUGdYyDA4xpWNrG5hoDVoxOi6lor+63uO1Ki5uy/8AC+y/AKK2AcssyxRitRzzTBanqL2MbGlaldAeFwtNxqTXGz+HwLSJLx+WO+lFa1u4oiRAyzVo3ZqwObMNG7RhoDQIzYykBmKLjL8PenF8bv2lVCLbSW1uy8z09GloxiluSQHOnTsd0hYyAKrMcN14tfzOz5lqc61PS0fCSl6AboyAAAAAAAAABAxeU06mu2jLvQsr81sZW1ciqLsyjLneL+J6EAeV+6a//H/lD5kihkc325KPgus/keiAELDYCMFZLm3tfMlxjY2AAAAauJW43LbvSp7d8dl+RaADy04tOzVnweowemq0Yz7UU+ZDqZTB7G1yd/eBSNGrLaWTcKnrH6hZK99T0j9QKixtCLbsld7ktZc08mgu1KT9EidQw0IdmKXjvfmBCy3L9DrT7W5d36lkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//Z"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  BILLING ROLL
                                                              </button>
                                                            </h2>
                                                            <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">SIZE (mtr)</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">2inch 22mtr</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="17.84">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="17.84" onchange="amount_change_handler()" class="quantity_price form-control" name="billing_roll_2" id="billing_roll_2">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('billing_roll_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('billing_roll_2')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">3inch 35mtr</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="38.53">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="38.53" onchange="amount_change_handler()" class="quantity_price form-control" name="billing_roll_3" id="billing_roll_3">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('billing_roll_3')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('billing_roll_3')
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
                                                                  src="https://m.media-amazon.com/images/I/61it6tDMqKL.jpg"
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
                                                                                  <th scope="col">SIZE</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">Premium</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="336">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="336" onchange="amount_change_handler()" class="quantity_price form-control" name="rubber_band_1" id="rubber_band_1">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('rubber_band_1')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('rubber_band_1')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">Regular</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="273">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="273" onchange="amount_change_handler()" class="quantity_price form-control" name="rubber_band_2" id="rubber_band_2">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('rubber_band_2')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('rubber_band_2')
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
                                                            <h2 class="accordion-header" id="headingThirteen2">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen2" aria-expanded="false" aria-controls="collapseThirteen2">
                                                                    <img
                                                                    src="https://m.media-amazon.com/images/I/717ILnnHiZL.jpg"
                                                                    alt=""
                                                                    style="height:80px;object-fit:contain;margin-right:20px"
                                                                    >
                                                                    <br/>
                                                                    PAPER STRAW
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThirteen2" class="accordion-collapse collapse" aria-labelledby="headingThirteen2" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                            <thead class="table-primary">
                                                                                <tr>
                                                                                    <th scope="col">ITEM</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )/100pc</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">6*200mm</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="38.64">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="38.64" onchange="amount_change_handler()" class="quantity_price form-control" name="paper_straw_6mm" id="paper_straw_6mm">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('paper_straw_6mm')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('paper_straw_6mm')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">8*200mm</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="45.08">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="45.08" onchange="amount_change_handler()" class="quantity_price form-control" name="paper_straw_8mm" id="paper_straw_8mm">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('paper_straw_8mm')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('paper_straw_8mm')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">10*200mm</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="57.96">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="57.96" onchange="amount_change_handler()" class="quantity_price form-control" name="paper_straw_10mm" id="paper_straw_10mm">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('paper_straw_10mm')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('paper_straw_10mm')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">12*200mm</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="77.28">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="77.28" onchange="amount_change_handler()" class="quantity_price form-control" name="paper_straw_12mm" id="paper_straw_12mm">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ old('paper_straw_12mm')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('paper_straw_12mm')
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
                                                            <h2 class="accordion-header" id="headingThree3">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                                                  <img
                                                                  src="https://m.media-amazon.com/images/I/61+ilDgVVwS._AC_UY1100_.jpg"
                                                                  alt=""
                                                                  style="height:80px;object-fit:contain;margin-right:20px"
                                                                  >
                                                                  <br/>
                                                                  MASK
                                                              </button>
                                                            </h2>
                                                            <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                  <div class="table-responsive">
                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                          <thead class="table-primary">
                                                                              <tr>
                                                                                  <th scope="col">ITEM</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE (&#8377; )</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">3 play</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="0.94">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="0.94" onchange="amount_change_handler()" class="quantity_price form-control" name="mask_3_play" id="mask_3_play">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('mask_3_play')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('mask_3_play')
                                                                                                          <div class="invalid-message">{{ $message }}</div>
                                                                                                      @enderror
                                                                                                  </td>

                                                                                              </tr>
                                                                                          </tbody>
                                                                                      </table>
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">Meltblown</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="1.32">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="1.32" onchange="amount_change_handler()" class="quantity_price form-control" name="mask_meltblown" id="mask_meltblown">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ old('mask_meltblown')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('mask_meltblown')
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
                                                                                    <th scope="col">ITEM</th>
                                                                                    <th scope="col">
                                                                                        <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                            <thead class="table-light">
                                                                                                <tr>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">small <br> W = 7.5cm,<br> H = 8.5cm,<br> G = 5cm</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="&#8377; 4.31">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="4.31" onchange="amount_change_handler()" class="quantity_price form-control" name="carry_bag_bag_small" id="carry_bag_bag_small">
                                                                                                            @for($i = 0; $i <= 2000; $i+=200)
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_small')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_small')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">medium <br> W = 8.5cm,<br> H = 8.5cm,<br> G = 6cm</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="&#8377; 4.31">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="4.31" onchange="amount_change_handler()" class="quantity_price form-control" name="carry_bag_bag_medium" id="carry_bag_bag_medium">
                                                                                                            @for($i = 0; $i <= 2000; $i+=200)
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_medium')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_medium')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">large <br> W = 11cm,<br> H = 9cm,<br> G = 7cm</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="&#8377; 4.91">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="4.91" onchange="amount_change_handler()" class="quantity_price form-control" name="carry_bag_bag_large" id="carry_bag_bag_large">
                                                                                                            @for($i = 0; $i <= 2000; $i+=200)
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_large')
                                                                                                            <div class="invalid-message">{{ $message }}</div>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">extra large <br> W = 12cm,<br> H = 9cm,<br> G = 8.5cm</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="&#8377; 5.29">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select data-price="5.29" onchange="amount_change_handler()" class="quantity_price form-control" name="carry_bag_bag_x_large" id="carry_bag_bag_x_large">
                                                                                                            @for($i = 0; $i <= 2000; $i+=200)
                                                                                                            <option value="{{$i}}" {{ old('carry_bag_bag_x_large')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('carry_bag_bag_x_large')
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
                                                                  src="https://m.media-amazon.com/images/I/61e+jkuy5-L.jpg"
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
                                                                                  <th scope="col">ITEM</th>
                                                                                  <th scope="col">
                                                                                      <table class="table table-bordered align-middle table-nowrap table-striped-columns mb-0">
                                                                                          <thead class="table-light">
                                                                                              <tr>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY (per kg)</th>
                                                                                              </tr>
                                                                                          </thead>
                                                                                      </table>
                                                                                  </th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                            <tr>
                                                                                <td><a href="#" class="fw-medium text-center">10 x 10</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                              <td style="width: 33%">
                                                                                                  <input class="form-control" disabled readonly value="&#8377; 60">
                                                                                              </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select data-price="60" onchange="amount_change_handler()" class="quantity_price form-control" name="parcel_paper_10" id="parcel_paper_10">
                                                                                                        @for($i = 0; $i <= 100; $i+=5)
                                                                                                        <option value="{{$i}}" {{ old('parcel_paper_10')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                    @error('parcel_paper_10')
                                                                                                        <div class="invalid-message">{{ $message }}</div>
                                                                                                    @enderror
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                              <tr>
                                                                                  <td><a href="#" class="fw-medium text-center">12 x 12</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="&#8377; 60">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="60" onchange="amount_change_handler()" class="quantity_price form-control" name="parcel_paper_12" id="parcel_paper_12">
                                                                                                          @for($i = 0; $i <= 100; $i+=5)
                                                                                                          <option value="{{$i}}" {{ old('parcel_paper_12')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('parcel_paper_12')
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
                                                                                                    <input class="form-control" disabled readonly value="&#8377; 60">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select data-price="60" onchange="amount_change_handler()" class="quantity_price form-control" name="parcel_paper_14" id="parcel_paper_14">
                                                                                                          @for($i = 0; $i <= 100; $i+=5)
                                                                                                          <option value="{{$i}}" {{ old('parcel_paper_14')==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                          @endfor
                                                                                                      </select>
                                                                                                      @error('parcel_paper_14')
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


                                                <div class="col-xxl-12 col-lg-12 col-md-12">
                                                    <label for="form-label">Total Amount</label>
                                                    <input class="form-control" id="price_input" name="amount" disabled readonly value="{{empty(old('amount')) ? 0.0 : old('amount')}}">
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
        const quantitySelect = document.querySelectorAll(".quantity_price");
        function getTotalPrices() {
            // selected all checkBoxes
            let total = 0.0;
            // Loop through checkbox list
            for (let i = 0; i < quantitySelect.length; i++) {
                value = parseFloat(quantitySelect[i].value) * parseFloat(quantitySelect[i].getAttribute("data-price"));
                total = (total+value);
            }
            return parseFloat(total).toFixed(2)
        }
        function amount_change_handler(){
            document.querySelector('#price_input').value = getTotalPrices()
        }
    </script>

</body>

</html>
