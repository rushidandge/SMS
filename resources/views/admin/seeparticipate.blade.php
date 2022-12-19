@extends('dashboard')
@section('content')
 @push('css')
 <link href="{{asset('assets/images/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/images/favicon.png')}}" rel="apple-touch-icon">
    <!-- material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />



 @endpush

 @push('script')
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
 @endpush


        <!-- Page content wrapper-->
        <div id="page-content-wrapper">



            <!-- Page content-->
            <div class="container-fluid">



                <div class="allcontents bg-white p-2 mt-2">

                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumblinks">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Participation</li>
                        </ol>
                    </nav>
                    <!-- <div class="panelheading">
                        <p>Users</p>
                    </div> -->


                    <div class="dataaddactions mb-4">

                        <div class="addcategorybtns">
                            <button class="btn bluebg btn-sm" data-bs-toggle="modal" data-bs-target="#addcitymodal">+
                                Add Participation</button>
                        </div>
                        <!-- searchbar -->
                        <div id="datasearchbar" class="input-group mt-3 mb-3">
                            <input type="text" class="form-control" placeholder="Search Cities"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn orangebg" type="button" id="button-addon2">
                                <span class="material-icons">
                                    search
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- table -->
                    <div id="alldatatable" class="bg-white mt-2">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>PRN NO</th>
                                    <th>Name</th>
                                    <th>Sports Type</th>
                                    <th>Sports Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Yash Chutake</td>
                                    <td>Cricket</td>
                                    <td>10</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editcitymodal">
                                                <span class="material-icons">
                                                    edit
                                                </span>
                                            </button>

                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteconfirmmodal">
                                                <span class="material-icons">
                                                    delete
                                                </span>
                                            </button>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rushikesh Dandge</td>
                                    <td>FootBall</td>
                                    <td>23</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editcitymodal">
                                                <span class="material-icons">
                                                    edit
                                                </span>
                                            </button>

                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteconfirmmodal">
                                                <span class="material-icons">
                                                    delete
                                                </span>
                                            </button>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Rohit K</td>
                                    <td>Table Tennis</td>
                                    <td>52</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editcitymodal">
                                                <span class="material-icons">
                                                    edit
                                                </span>
                                            </button>

                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteconfirmmodal">
                                                <span class="material-icons">
                                                    delete
                                                </span>
                                            </button>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>




                    </div>

                    <!-- pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-sm justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- Page content ends-->
        </div>
    </div>



    <!-- add city modal starts -->
    <div class="modal fade" id="addcitymodal" tabindex="-1" aria-labelledby="addcitymodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Participation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">State
                            Name</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">City
                            Name</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Pincode
                        </label>
                        <input type="number" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bluebg btn-sm">Add/Save City</button>
                </div>
            </div>
        </div>
    </div>
    <!-- add city modal ends -->


    <!--modal for edit city starts -->
    <div class="modal fade" id="editcitymodal" tabindex="-1" aria-labelledby="editcitymodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Participation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sport
                            Type</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="" disabled selected>Select Sport</option>
                            <option value="1">Badminton Solo</option>
                        <option value="2">Marathon Solo</option>
                        <option value="3">Cycling</option>
                        <option value="4">Table Tennis Solo</option>
                        <option value="5">Boxing</option>
                        <option value="6">Cricket</option>
                        <option value="7">Fooball</option>
                        <option value="8">BasketBall</option>
                        <option value="9">Table Tennis</option>
                        <option value="10">Badminton</option>
                        <option value="11">Tug Of War</option>
                        <option value="12">Marathon</option>
                        <option value="13">Volleyball</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Name Of Participation
                        </label>
                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                            >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            PRN
                        </label>
                        <input type="number" class="form-control form-control-sm" id="exampleFormControlInput1"
                            >
                    </div>

                    <!-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">City
                            Name</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Aurangabad</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div> -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Sport Code
                        </label>
                        <input type="number" class="form-control form-control-sm" id="exampleFormControlInput1"
                           >
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bluebg btn-sm">Update Information</button>
                </div>
            </div>
        </div>
    </div>
    <!--modal for edit city ends-->


    <!--modal for delete confirm starts -->
    <div class="modal fade" id="deleteconfirmmodal" tabindex="-1" aria-labelledby="deleteconfirmmodalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete City</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <p>Are you sure that you want to delete ?</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm">Confirm Delete</button>
                </div>

            </div>
        </div>
    </div>
    <!--modal for delete confirm ends-->
@endsection