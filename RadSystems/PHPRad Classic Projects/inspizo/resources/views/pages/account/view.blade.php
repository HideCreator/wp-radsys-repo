@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->can("pengguna/add");
    $can_edit = $user->can("pengguna/edit");
    $can_view = $user->can("pengguna/view");
    $can_delete = $user->can("pengguna/delete");
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
                            $rec_id = ($data['id_pengguna'] ? urlencode($data['id_pengguna']) : null);
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
                                                    <div class="border-top td-id_pengguna p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <div class="text-muted"> Kode Pengguna</div>
                                                                <div class="font-weight-bold">
                                                                    <?php echo  $data['id_pengguna'] ; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top td-username p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto"><i class="material-icons ">person</i></div>
                                                            <div class="col">
                                                                <div class="text-muted"> Nama Pengguna</div>
                                                                <div class="font-weight-bold">
                                                                    <?php echo  $data['username'] ; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top td-email p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto"><i class="material-icons ">email</i></div>
                                                            <div class="col">
                                                                <div class="text-muted"> Email</div>
                                                                <div class="font-weight-bold">
                                                                    <?php echo  $data['email'] ; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top td-tanggal p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto"><i class="material-icons ">date_range</i></div>
                                                            <div class="col">
                                                                <div class="text-muted"> Tanggal</div>
                                                                <div class="font-weight-bold">
                                                                    <?php echo  $data['tanggal'] ; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-top td-photo p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto"><i class="material-icons ">photo</i></div>
                                                            <div class="col">
                                                                <div class="text-muted"> Foto</div>
                                                                <div class="font-weight-bold">
                                                                    <?php 
                                                                        Html :: page_img($data['photo'],400,400, "", 1); 
                                                                    ?>
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
