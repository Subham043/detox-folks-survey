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
                                                        <input type="text" class="form-control" disabled readonly name="name"
                                                            id="name" value="{{ $data->name }}">
                                                        @error('name')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6 col-sm-12">
                                                    <div>
                                                        <label for="phone" class="form-label">Phone</label>
                                                        <input type="text" class="form-control" disabled readonly name="phone"
                                                            id="phone" value="{{ $data->phone }}">
                                                        @error('phone')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6 col-sm-12">
                                                    <div>
                                                        <label for="designation"
                                                            class="form-label">Designation</label>
                                                        <input type="text" class="form-control" disabled readonly name="designation"
                                                            id="designation" value="{{ $data->designation }}">
                                                        @error('designation')
                                                            <div class="invalid-message">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6 col-sm-12">
                                                    <div>
                                                        <label for="user_id"
                                                            class="form-label">Staff Associated</label>
                                                        <select class="form-control" disabled readonly disabled readonly name="user_id" id="user_id">
                                                            <option value="">Select Staff</option>
                                                            @foreach($staff as $staff)
                                                            <option value="{{$staff->id}}" {{ $data->user_id==$staff->id ? 'selected' : '' }}>{{$staff->name}}</option>
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
                                                        <textarea name="address" id="address" class="form-control" disabled readonly>{{ $data->address }}</textarea>
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
                                                                                <td><a href="#" class="fw-medium text-center">50ml</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 1.31">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_50" id="pp_50">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_50==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 1.73">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_100" id="pp_100">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_100==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 2.21">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_150" id="pp_150">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_150==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 2.78">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_200_g" id="pp_200_g">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_200_g==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 2.89">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_250" id="pp_250">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_250==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 4.04">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_300" id="pp_300">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_300==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 3.62">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_500_g" id="pp_500_g">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_500_g==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 3.83">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_500" id="pp_500">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_500==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                <td><a href="#" class="fw-medium text-center">750ml Tall</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 5.51">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_750" id="pp_750">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_750==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                <td><a href="#" class="fw-medium text-center">750ml Flat</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 5.62">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_750_flat" id="pp_750_flat">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_750_flat==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                <td><a href="#" class="fw-medium text-center">1000ml flat</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 7.04">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_1000" id="pp_1000">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_1000==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 5.99">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_500_rec" id="pp_500_rec">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_500_rec==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 6.20">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_650_rec" id="pp_650_rec">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_650_rec==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 6.51">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_750_rec" id="pp_750_rec">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_750_rec==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 6.83">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_1000_rec" id="pp_1000_rec">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_1000_rec==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 5.78">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="pp_650_bowl" id="pp_650_bowl">
                                                                                                        @for($i = 0; $i <= 10000; $i+=200)
                                                                                                        <option value="{{$i}}" {{ $data->pp_650_bowl==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">250ml (Regular)</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 1.39">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="al_container_with_lid_250" id="al_container_with_lid_250">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ $data->al_container_with_lid_250==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 1.85">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="al_container_with_lid_450" id="al_container_with_lid_450">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ $data->al_container_with_lid_450==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 2.77">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="al_container_with_lid_600" id="al_container_with_lid_600">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ $data->al_container_with_lid_600==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 2.77">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="al_container_with_lid_750" id="al_container_with_lid_750">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ $data->al_container_with_lid_750==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 2.77">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="al_container_with_lid_450_premium" id="al_container_with_lid_450_premium">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ $data->al_container_with_lid_450_premium==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 4.15">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="al_container_with_lid_750_premium" id="al_container_with_lid_750_premium">
                                                                                                          @for($i = 0; $i <= 10000; $i+=200)
                                                                                                          <option value="{{$i}}" {{ $data->al_container_with_lid_750_premium==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">Gross 1kg Roll</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 420">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="aluminium_1kg_gross" id="aluminium_1kg_gross">
                                                                                                          @for($i = 0; $i <= 20; $i+=5)
                                                                                                          <option value="{{$i}}" {{ $data->aluminium_1kg_gross==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 536">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="aluminium_1kg_net" id="aluminium_1kg_net">
                                                                                                          @for($i = 0; $i <= 20; $i+=5)
                                                                                                          <option value="{{$i}}" {{ $data->aluminium_1kg_net==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">2CP Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 6.13">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="compartment_2cp" id="compartment_2cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ $data->compartment_2cp==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">3CP Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 6.13">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="compartment_3cp" id="compartment_3cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ $data->compartment_3cp==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">3CP xl Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 7.71">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="compartment_3cp_xl" id="compartment_3cp_xl">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ $data->compartment_3cp_xl==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">4CP Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 4.79">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="compartment_4cp" id="compartment_4cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ $data->compartment_4cp==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">5CP Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 9.39">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="compartment_5cp" id="compartment_5cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ $data->compartment_5cp==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">6CP Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 9.74">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="compartment_6cp" id="compartment_6cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ $data->compartment_6cp==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">8CP Tray</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 12.37">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="compartment_8cp" id="compartment_8cp">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ $data->compartment_8cp==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">750 bow</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 6.57">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="compartment_750_bow" id="compartment_750_bow">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ $data->compartment_750_bow==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                <td><a href="#" class="fw-medium text-center">Sandwich Box</a></td>
                                                                                <td>
                                                                                    <table class="table align-middle table-nowrap mb-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 2.79">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="p_box_sandwich" id="p_box_sandwich">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ $data->p_box_sandwich==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 1.98">
                                                                                                  </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="p_box_dosa" id="p_box_dosa">
                                                                                                          @for($i = 0; $i <= 10000; $i+=500)
                                                                                                          <option value="{{$i}}" {{ $data->p_box_dosa==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 1.67">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="p_box_idly" id="p_box_idly">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ $data->p_box_idly==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 2.29">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="p_box_idly_vada" id="p_box_idly_vada">
                                                                                                        @for($i = 0; $i <= 10000; $i+=500)
                                                                                                        <option value="{{$i}}" {{ $data->p_box_idly_vada==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE/KG<br>24BF PRICE</th>
                                                                                                    <th scope="col" class="text-center" style="width: 33%">QUANTITY</th>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 70.665">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="p_bag_small" id="p_bag_small">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->p_bag_small==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 70.665">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="p_bag_medium" id="p_bag_medium">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->p_bag_medium==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 70.665">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="p_bag_large" id="p_bag_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->p_bag_large==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 70.665">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="p_bag_x_large" id="p_bag_x_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->p_bag_x_large==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 70.665">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="p_bag_xx_large" id="p_bag_xx_large">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->p_bag_xx_large==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                    <td><a href="#" class="fw-medium text-center">10*11</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="Rs. 4.58">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="cloth_bag_10_11" id="cloth_bag_10_11">
                                                                                                            @for($i = 0; $i <= 1000; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->cloth_bag_10_11==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 5.08">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="cloth_bag_11_12" id="cloth_bag_11_12">
                                                                                                            @for($i = 0; $i <= 1000; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->cloth_bag_11_12==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 5.31">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="cloth_bag_12_12" id="cloth_bag_12_12">
                                                                                                            @for($i = 0; $i <= 1000; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->cloth_bag_12_12==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 5.82">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="cloth_bag_11_14" id="cloth_bag_11_14">
                                                                                                            @for($i = 0; $i <= 1000; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->cloth_bag_11_14==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 6.94">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="cloth_bag_13_16" id="cloth_bag_13_16">
                                                                                                            @for($i = 0; $i <= 1000; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->cloth_bag_13_16==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 8.18">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="cloth_bag_15_18" id="cloth_bag_15_18">
                                                                                                            @for($i = 0; $i <= 1000; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->cloth_bag_15_18==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 9.29">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="cloth_bag_16_20" id="cloth_bag_16_20">
                                                                                                            @for($i = 0; $i <= 1000; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->cloth_bag_16_20==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 10.61">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="cloth_bag_18_20" id="cloth_bag_18_20">
                                                                                                            @for($i = 0; $i <= 1000; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->cloth_bag_18_20==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 11.77">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="cloth_bag_20_20" id="cloth_bag_20_20">
                                                                                                            @for($i = 0; $i <= 1000; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->cloth_bag_20_20==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                    <td><a href="#" class="fw-medium text-center">4x6 - (Cut Size)</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="Rs. 21.735">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_4_6" id="al_pouch_4_6">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_4_6==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 28.35">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_5_7" id="al_pouch_5_7">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_5_7==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 35.532">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_6_8" id="al_pouch_6_8">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_6_8==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 40.635">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_6_9" id="al_pouch_6_9">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_6_9==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 48.195">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_7_9" id="al_pouch_7_9">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_7_9==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 52.92">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_7_10" id="al_pouch_7_10">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_7_10==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 60.48">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_8_10" id="al_pouch_8_10">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_8_10==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 83.16">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_9_12" id="al_pouch_9_12">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_9_12==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 96.39">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_10_12" id="al_pouch_10_12">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_10_12==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 107.73">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_10_14" id="al_pouch_10_14">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_10_14==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 21.9">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_4_6_full" id="al_pouch_4_6_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_4_6_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 38.1">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_5_7_full" id="al_pouch_5_7_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_5_7_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 43.5">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_6_8_full" id="al_pouch_6_8_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_6_8_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 46.3">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_6_9_full" id="al_pouch_6_9_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_6_9_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 55.8">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_7_9_full" id="al_pouch_7_9_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_7_9_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 58.6">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_7_10_full" id="al_pouch_7_10_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_7_10_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 69.9">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_8_10_full" id="al_pouch_8_10_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_8_10_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 92.6">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_9_12_full" id="al_pouch_9_12_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_9_12_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 109.6">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_10_12_full" id="al_pouch_10_12_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_10_12_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 119.1">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="al_pouch_10_14_full" id="al_pouch_10_14_full">
                                                                                                            @for($i = 0; $i <= 20; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->al_pouch_10_14_full==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                    <td><a href="#" class="fw-medium text-center">22*22/9*9</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="Rs. 12.6">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="tissue_22_22" id="tissue_22_22">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ $data->tissue_22_22==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                    <td><a href="#" class="fw-medium text-center">27*30/11*12</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="Rs. 19.95">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="tissue_27_30" id="tissue_27_30">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ $data->tissue_27_30==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                    <td><a href="#" class="fw-medium text-center">30*30/12*12</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="Rs. 26.25">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="tissue_30_30" id="tissue_30_30">
                                                                                                            @for($i = 0; $i <= 100; $i+=10)
                                                                                                            <option value="{{$i}}" {{ $data->tissue_30_30==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                    <td><a href="#" class="fw-medium text-center">small size</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="Rs. 34">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="garbage_bag_small" id="garbage_bag_small">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ $data->garbage_bag_small==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 38">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="garbage_bag_medium" id="garbage_bag_medium">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ $data->garbage_bag_medium==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 44">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="garbage_bag_large" id="garbage_bag_large">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ $data->garbage_bag_large==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 71">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="garbage_bag_x_large" id="garbage_bag_x_large">
                                                                                                            @for($i = 0; $i <= 5; $i+=1)
                                                                                                            <option value="{{$i}}" {{ $data->garbage_bag_x_large==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                  <th scope="col" class="text-center" style="width: 33%">PRICE/60mtr</th>
                                                                                                  <th scope="col" class="text-center" style="width: 33%">QUANTITY
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 37.2">
                                                                                                </td>
                                                                                                <td style="width: 33%">
                                                                                                    <select class="form-control" disabled readonly name="bopp_tape_3" id="bopp_tape_3">
                                                                                                        @for($i = 0; $i <= 5; $i+=1)
                                                                                                        <option value="{{$i}}" {{ $data->bopp_tape_3==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 24.8">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="bopp_tape_2" id="bopp_tape_2">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ $data->bopp_tape_2==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                  BILLING ROLE
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
                                                                                  <td><a href="#" class="fw-medium text-center">2inch 22mtr</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 15.2">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="billing_roll_2" id="billing_roll_2">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ $data->billing_roll_2==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <input class="form-control" disabled readonly value="Rs. 32.6">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="billing_roll_3" id="billing_roll_3">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ $data->billing_roll_3==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">0</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 336">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="rubber_band_1" id="rubber_band_1">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ $data->rubber_band_1==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                  <td><a href="#" class="fw-medium text-center">0</a></td>
                                                                                  <td>
                                                                                      <table class="table align-middle table-nowrap mb-0">
                                                                                          <tbody>
                                                                                              <tr>
                                                                                                <td style="width: 33%">
                                                                                                    <input class="form-control" disabled readonly value="Rs. 273">
                                                                                                </td>
                                                                                                  <td style="width: 33%">
                                                                                                      <select class="form-control" disabled readonly name="rubber_band_2" id="rubber_band_2">
                                                                                                          @for($i = 0; $i <= 5; $i+=1)
                                                                                                          <option value="{{$i}}" {{ $data->rubber_band_2==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                    <th scope="col" class="text-center" style="width: 33%">PRICE/100pc</th>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 38.64">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="paper_straw_6mm" id="paper_straw_6mm">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->paper_straw_6mm==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 45.08">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="paper_straw_8mm" id="paper_straw_8mm">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->paper_straw_8mm==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 57.96">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="paper_straw_10mm" id="paper_straw_10mm">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->paper_straw_10mm==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 77.28">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="paper_straw_12mm" id="paper_straw_12mm">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->paper_straw_12mm==$i ? 'selected' : '' }}>{{$i}}</option>
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
                                                                                <tr>
                                                                                    <td><a href="#" class="fw-medium text-center">6*200mm</a></td>
                                                                                    <td>
                                                                                        <table class="table align-middle table-nowrap mb-0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="width: 33%">
                                                                                                        <input class="form-control" disabled readonly value="Rs. 57.96">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="paper_straw_6mm_2" id="paper_straw_6mm_2">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->paper_straw_6mm_2==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('paper_straw_6mm_2')
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 64.4">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="paper_straw_8mm_2" id="paper_straw_8mm_2">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->paper_straw_8mm_2==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('paper_straw_8mm_2')
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
                                                                                                        <input class="form-control" disabled readonly value="Rs. 77.28">
                                                                                                    </td>
                                                                                                    <td style="width: 33%">
                                                                                                        <select class="form-control" disabled readonly name="paper_straw_10mm_2" id="paper_straw_10mm_2">
                                                                                                            @for($i = 0; $i <= 30; $i+=5)
                                                                                                            <option value="{{$i}}" {{ $data->paper_straw_10mm_2==$i ? 'selected' : '' }}>{{$i}}</option>
                                                                                                            @endfor
                                                                                                        </select>
                                                                                                        @error('paper_straw_10mm_2')
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

                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
                                </div>
                            </div>
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

</body>

</html>
