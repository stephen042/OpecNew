<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config("app.name") }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.c_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.c_header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    @include('include.tradeview')
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to" href="javascript:void(0)" onclick="history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                            <h3 class="nk-block-title fw-normal text-center">Verify Profile</h3>
                                        </div>
                                    </div>
                                    <!-- .nk-block-head -->
                                    {{-- notice --}}
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-triangle me-1"></i>
                                        <h5>NOTICE !!</h5>
                                        {{-- <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                                        <p>We’re pleased to have you. Kindly proceed to
                                            verify your account by providing us with a
                                            valid means of identification. You
                                            can provide any of the following: Drivers Licence,
                                            Passport, etc. Once Uploaded, we will review
                                            your document and get back to you as soon as possible.
                                            The uploaded documents are for verification purposes only
                                            and are deleted once confirmed. You will be notified via email
                                            once your document has been verified. Choose your document
                                            type and click on the submit proof button.
                                        </p>
                                    </div>
                                    @if (!empty($verifydata->status ) )
                                    @if ($verifydata->status == 2 && $user->vfystatus == 1 )
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-octagon me-1"></i>
                                        <h5>Congratulations !!</h5>
                                        <p>Your account has been verified successfully.</p>
                                        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                                    </div>
                                    @endif
                                    @if ($verifydata->status == 1 )
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-octagon me-1"></i>
                                        <h5>Congratulations !!</h5>
                                        <p>Your Proof was submitted successfully. Wait for verification.</p>
                                        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                                    </div>
                                    @endif
                                    @if ($verifydata->status == 3 && $user->vfystatus == 0)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-octagon me-1"></i>
                                        <h5>Notice !!</h5>
                                        <p>Your account was not verified. Please contact our customer service team for more information.</p>
                                        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                                    </div>
                                    @endif
                                    @endif
                                    {{-- End notice --}}
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title"></span>
                                                    <div class="">
                                                        <form action="{{ route('verifyid.post') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-sm-12  form-row">
                                                                    @if (session()->has('message'))
                                                                    <span class="info_box text-success">{{session('message')}}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-12  form-row" style="text-align: center">
                                                                    @if (!empty($error))
                                                                    <h3 class="info_box text-danger">{{ $error }}</h3>
                                                                    @endif
                                                                </div>

                                                                <div class="form-control-group col-sm-6 col-md-4 m-2">
                                                                    <select name="type" id="method" class="form-control" required @php if ($user->vfystatus == 1) { echo "disabled"; } @endphp>

                                                                        <option value="1">Passport </option>

                                                                        <option value="2">Driver's Licence </option>

                                                                    </select>

                                                                    @error('type')
                                                                    <span class="text-danger" id="error_name">{{ $message }}</span>
                                                                    @enderror
                                                                </div>


                                                                <div class="col-sm-6 col-md-12 m-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="frontPage">Front Page of Document</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="file" class="form-control" name="frontPage" accept="image/x-png,image/gif,image/jpeg" placeholder="Front Page Of Document" @php if ($user->vfystatus == 1) { echo "disabled"; } @endphp>
                                                                        </div>
                                                                        @error('frontPage')
                                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-12 m-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="backPage">Back Page of Document</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required type="file" class="form-control" name="backPage" accept="image/x-png,image/gif,image/jpeg" placeholder="Back Page Of Document" @php if ($user->vfystatus == 1) { echo "disabled"; } @endphp>
                                                                        </div>
                                                                        @error('backPage')
                                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-4 col-md-3 m-3">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <button type="submit" style="text-align:center;" class="d-block form-control btn btn-primary " id="edit-plan" @php if ($user->vfystatus == 1) { echo "disabled"; } @endphp>Submit Proof</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div><!-- .nk-block -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>