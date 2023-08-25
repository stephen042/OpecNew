<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('include.a_css')
    <!-- Page Title  -->
    <title>{{ config("app.name") }} Admin</title>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.a_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.a_topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Verify Customer</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>This is the list of all active requests from customers.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                @if (session()->has('error'))
                                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                        {{ session('error') }}
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                                </div>
                                @endif

                                @if (session()->has('success'))
                                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                        {{ session('success') }}
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                                </div>
                                @endif
                               
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            {{-- table start --}}
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class="table-responsive">
                                                        @if (!$data->isEmpty())
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Fullname</th>
                                                                    <th scope="col">Username</th>
                                                                    <th scope="col">Type</th>
                                                                    <th scope="col">country</th>
                                                                    <th scope="col">status</th>
                                                                    <th scope="col">View</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($data as $key => $data)
                                                                <tr>
                                                                    <th scope="row">{{ $key + 1 }}</th>
                                                                    <td>{{ ucwords($data->firstname) }} {{ ucwords($data->lastname) }}</td>
                                                                    <td>{{ ucwords($data->username) }}</td>
                                                                    <td>{{ ucwords(config("app.verify_type")[$data->type]) }}</td>
                                                                    <td>{{ ucwords($data->country) }}</td>
                                                                    <td>
                                                                        {{ ucwords(config("app.verify_status")[$data->status]) }}
                                                                    </td>
                                                                    <td>
                                                                        {{-- <a href="{{ route("admin.deposit.view",["edit",$deposit->id]) }}"><em class="icon ni ni-edit"></em></a> --}}
                                                                        {{-- <a class="delete_data" href="{{ route("admin.deposit.view",["delete",$deposit->id]) }}" data-type="deposit" ><em  class="icon ni ni-trash-fill "></em></a> --}}
                                                                        <a href="{{ URL('storage/'.$data->frontPage) }}" target="_blank"><em class="icon ni ni-eye-fill"></em></a>
                                                                        <a href="{{ URL('storage/'.$data->backPage) }}" target="_blank"><em class="icon ni ni-eye-fill"></em></a>
                                                                    </td>
                                                                    <td class="tb-tnx-action">
                                                                      <div class="dropdown">
                                                                          <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                              <ul class="link-list-plain">
                                                                                  
                                                                                  <li><a class="" href="{{ route("admin.verify.view",["approve",$data->id]) }}">Approve</a></li>
                                                                                  <li><a class="" href="{{ route("admin.verify.view",["decline",$data->id]) }}">Decline</a></li>
                                                                                  
                                                                              </ul>
                                                                          </div>
                                                                      </div>
                                                                  </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @else
                                                            <h4 class="text-center">No Active request at the moment</h4>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div><!-- .card-preview -->
                                            {{-- table ends --}}
                                        </div>
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.a_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('include.a_scripts')
</body>

</html>