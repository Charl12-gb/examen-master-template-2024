@extends('app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Ajouter</h4>
                                        <p class="text-muted mb-0">Remplissez le formulaire ci-dessous.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="{{ route('store') }}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="firstNameinput" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter your firstname" id="firstNameinput" name="name">
                                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="lastNameinput" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter your lastname" id="lastNameinput">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="compnayNameinput" class="form-label">Company Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter company name" id="compnayNameinput">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                            <input type="tel" class="form-control" placeholder="+(245) 451 45123" id="phonenumberInput">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="emailidInput" class="form-label">Email Address</label>
                                                            <input type="email" class="form-control" placeholder="example@gamil.com" id="emailidInput">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="address1ControlTextarea" class="form-label">Address</label>
                                                            <input type="text" class="form-control" placeholder="Address 1" id="address1ControlTextarea">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">City</label>
                                                            <input type="email" class="form-control" placeholder="Enter your city" id="citynameInput">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">State</label>
                                                            <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="choices-multiple-remove-button" class="form-label text-muted">Select multiple</label>
                                                                <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                                                    <option value="Choice 1" selected>Choice 1</option>
                                                                    <option value="Choice 2">Choice 2</option>
                                                                    <option value="Choice 3">Choice 3</option>
                                                                    <option value="Choice 4">Choice 4</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <div class="card-header">
                                                                <h4 class="card-title mb-0">Multiple File Upload</h4>
                                                            </div><!-- end card header -->

                                                            <div class="card-body">
                                                                <p class="text-muted">FilePond is a JavaScript library that
                                                                    optimizes multiple images for faster uploads and offers a great, accessible, silky
                                                                    smooth user experience.</p>
                                                                <input type="file" class="filepond filepond-input-multiple" name="filepond" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <div class="dropzone">
                                                                <div class="fallback">
                                                                    <input name="file" type="file" multiple="multiple">
                                                                </div>
                                                                <div class="dz-message needsclick">
                                                                    <div class="mb-3">
                                                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                                    </div>

                                                                    <h4>Drop files here or click to upload.</h4>
                                                                </div>
                                                            </div>

                                                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                                <li class="mt-2" id="dropzone-preview-list">
                                                                    <!-- This is used as the file preview template -->
                                                                    <div class="border rounded">
                                                                        <div class="d-flex p-2">
                                                                            <div class="flex-shrink-0 me-3">
                                                                                <div class="avatar-sm bg-light rounded">
                                                                                    <img data-dz-thumbnail class="img-fluid rounded d-block" src="assets/images/new-document.png" alt="Dropzone-Image" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <div class="pt-1">
                                                                                    <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                                    <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-shrink-0 ms-3">
                                                                                <button data-dz-remove class="btn btn-sm btn-primary">Delete</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- .card-->
                            </div> <!-- .col-->
                        </div> <!-- end row-->

                    </div> <!-- end .h-100-->

                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection
