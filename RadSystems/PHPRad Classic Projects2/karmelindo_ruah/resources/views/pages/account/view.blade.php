@inject('comp_model', 'App\Models\ComponentsData')
<?php
?>
@extends($layout)
@section('content')
<section class="page" data-page-type="view" data-page-url="{{ url()->full() }}">
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php Html::display_page_errors($errors); ?>
                    <div  class=" animated fadeIn page-content">
                        <?php
                            $counter = 0;
                            if($data){
                            $rec_id = ($data['kd_akun'] ? urlencode($data['kd_akun']) : null);
                            $counter++;
                        ?>
                        <div class="bg-primary m-2 mb-4">
                            <div class="profile">
                                <div class="avatar">
                                    <span class="avatar-icon text-white"><i class="material-icons">account_box</i></span>
                                </div>
                                <h1 class="title mt-4"><?php echo $data['username']; ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mx-3 mb-3">
                                    <ul class="nav nav-pills flex-column text-left">
                                    <li class="nav-item">
                                    <a data-toggle="tab" href="#AccountPageView" class="nav-link active">
                                    <i class="material-icons">account_box</i> Account Detail
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a data-toggle="tab" href="#AccountPageEdit" class="nav-link">
                                    <i class="material-icons">edit</i> Edit Account
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a data-toggle="tab" href="#AccountPageChangePassword" class="nav-link">
                                    <i class="material-icons">lock</i> Change Password
                                    </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <div class="tab-content">
                                        <div class="tab-pane show active fade" id="AccountPageView" role="tabpanel">
                                            <table class="table   ">
                                                <tbody class="page-data">
                                                    <div class="border-top td-kd_akun p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="text-muted"> Kd Akun</div>
                                                                <div class="font-weight-bold">
                                                                    <?php echo  $data['kd_akun'] ; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top td-username p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="text-muted"> Username</div>
                                                                <div class="font-weight-bold">
                                                                    <?php echo  $data['username'] ; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top td-email p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="text-muted"> Email</div>
                                                                <div class="font-weight-bold">
                                                                    <?php echo  $data['email'] ; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top td-role p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="text-muted"> Role</div>
                                                                <div class="font-weight-bold">
                                                                    <?php echo  $data['role'] ; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top td-timestamp p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="text-muted"> Timestamp</div>
                                                                <div class="font-weight-bold">
                                                                    <?php echo  $data['timestamp'] ; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tbody>    
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="AccountPageEdit" role="tabpanel">
                                            <div class=" reset-grids">
                                                <x-sub-page url="{{ url('account/edit') }}"></x-sub-page>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="AccountPageChangePassword" role="tabpanel">
                                            <div class=" reset-grids">
                                                @include("pages.account.changepassword")
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                            else{
                        ?>
                        <!-- Empty Record Message -->
                        <div class="text-muted p-3">
                            <i class="material-icons">block</i> No Record Found
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--pagejs-->
<!--pagecss-->
@endsection
