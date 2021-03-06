<div class="wrapper">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Edit Agency</h4>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url() . 'agent/dashboard' ?>">Dashboard</a></li>
                    <li><a href="<?= base_url() . 'agent/subagencies' ?>">Manage Agencies</a></li>
                    <li class="active"><?= $details['agency_name']; ?></li>
                </ol>
            </div>
        </div>        <?php
        if ($this->session->flashdata('success')):
            ?>
            <div class="content pt0">
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert"><i class="fa fa-times"></i></a>
                    <strong><?= $this->session->flashdata('success') ?></strong>
                </div>
            </div>
            <?php
            $this->session->set_flashdata('success', false);
        elseif ($this->session->flashdata('error')):
            ?>
            <div class="content pt0">
                <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert"><i class="fa fa-times"></i></a>
                    <strong><?= $this->session->flashdata('error') ?></strong>
                </div>
            </div>

            <?php
            $this->session->set_flashdata('error', false);
        elseif (validation_errors()):
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <form id="wizard-validation-form" method="post" enctype="multipart/form-data" class="myform">
                        <div>
                            <div class="text-center"> <h3> General information </h3> </div>
                            <section>
                                <div class="form-group clearfix">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label for="fname">Agency Name * </label>
                                            <input type="text" id="fname" name="agency_name" class="required form-control" autocomplete="off" value="<?php echo $details['agency_name']; ?>" reuqired>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cname">Contact Name * </label>
                                            <input type="text" id="cname" name="contact_name" class="required form-control" autocomplete="off" value="<?php echo $details['contact_name']; ?>" reuqired>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-md-12">
                                        <div class="col-lg-6">
                                            <label for="user_phno">Phone Number * </label>
                                            <input type="text" id="user_phno" name="phone_number" class="required form-control child_phone_number" autocomplete="off" value="<?php echo $details['agency_phone']; ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="login_email"> Contact Email * </label>
                                            <input type="email" id="login-email" name="contact_email" class="required form-control" autocomplete="off" value="<?php echo $details['agency_email']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label for="customer_service_email"> Customer Service Email * </label>
                                            <input type="email" id="customer_service_email" name="customer_service_email" class="required form-control" autocomplete="off" value="<?php echo $details['agency_customer_service_email']; ?>" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="csn"> Customer Service Number </label>
                                            <input type="text" id="csn" name="customer_service_number" class="required form-control customer_service_number_agency" autocomplete="off" value="<?php echo $details['agency_customer_service_number']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="col-lg-8">
                                            <label for="user_add">Address * </label>
                                            <input type="text" id="user_add" name="address" class="required form-control" autocomplete="off" value="<?php echo $details['agency_address']; ?>" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label for="user_add_detail"> Unit, Building, Etc. </label>
                                            <input type="text" id="user_add_detail" name="address_addtional" class="form-control" autocomplete="off" value="<?php echo $details['agency_sub_address']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <label for="user_state">State * </label>
                                            <select class="form-control required selstate" id="user_state" name="sel_state">
                                                <option value="">Select State</option>
                                                <?php foreach ($state as $key => $value): ?>
                                                    <option value="<?php echo $value['state_code']; ?>" <?php echo ($details['agency_state'] == $value['state_code']) ? "Selected" : ""; ?>><?php echo $value['state']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="user_city">City * </label>
                                            <select class="form-control required" id="user_city" name="sel_city">
                                                <?php foreach ($city_pri as $value): ?>
                                                    <option value="<?php echo $value['city']; ?>" <?php echo($value['city'] == $details['agency_city'] ? "Selected" : ''); ?>><?php echo $value['city']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="user_zip">Zip Code * </label>
                                            <input type="text" id="user_zip" name="zipcode" class="required form-control custome_zipcode" autocomplete="off" value="<?php echo $details['agency_zip_code']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="text-center"><h3> Bank information </h3></div>
                            <section>
                                <div class="form-group clearfix">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label for="angecy_bank_name">Bank Name * </label>
                                            <input type="text" id="angecy_bank_name" name="angecy_bank_name" class="required form-control angecy_bank_name" autocomplete="off" value="<?php echo $details['bank_name']; ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="angecy_bank_add">Bank Address * </label>
                                            <input type="text" id="angecy_bank_add" name="angecy_bank_add" class="required form-control angecy_bank_add" autocomplete="off" value="<?php echo $details['bank_add']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <label for="bank_state">Bank State * </label>
                                            <select class="form-control required selstate" id="bank_state" name="bank_state">
                                                <option value="">Select State</option>
                                                <?php foreach ($state as $key => $value): ?>
                                                    <option value="<?php echo $value['state_code']; ?>" <?php echo ($details['bank_state'] == $value['state_code']) ? "Selected" : ""; ?> ><?php echo $value['state']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="bank_city">Bank City * </label>
                                            <select class="form-control required" id="bank_city" name="bank_city">
                                                <?php foreach ($bank_cities as $value): ?>
                                                    <option value="<?php echo $value['city']; ?>" <?php echo($value['city'] == $details['bank_city'] ? "Selected" : ''); ?>><?php echo $value['city']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="bank_zipcode">Zip Code * </label>
                                            <input type="text" id="bank_zipcode" name="bank_zipcode" class="required form-control bank_zipcode zipmark" autocomplete="off" value="<?php echo $details['bank_zipcode']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <label for="name_on_account">Name on Account * </label>
                                            <input type="text" id="name_on_account" name="name_on_account" class="required form-control name_on_account" autocomplete="off" value="<?php echo $details['agency_name_on_account']; ?>" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="account_number">Account Number * </label>
                                            <input type="text" id="account_number" name="account_number" class="required form-control account_number" autocomplete="off" value="<?php echo $details['agency_account_number']; ?>" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="routing_number">Routing Number * </label>
                                            <input type="text" id="routing_number" name="routing_number" class="required form-control routing_number" autocomplete="off" value="<?php echo $details['angecy_routing_number']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="text-center"> <h3> Login Information </h3></div>
                            <section>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="col-md-8">
                                            <label for="login_email"> Login Email * </label>
                                            <input type="email" id="login_email" name="login_email" class="required form-control" autocomplete="off" value="<?php echo $details['email']; ?>" disabled>
                                            <div id='email_msg' style="margin-top: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <label for="domain_name">Domain name * </label>
                                            <input type="text" id="domain_name" name="domain_name" class="required form-control" autocomplete="off" value="<?php echo $details['agency_domain'] . '.agencyvue.com'; ?>" disabled>
                                            <div id='domain_msg' style="margin-top: 10px;"></div>
                                        </div>
                                        <div class="col-lg-4 input_wrapper error-msg-fix">
                                            <label for="zipcode">Upload Agency Logo  </label>
                                            <input type="file" class="filestyle" name="agency_logo" data-buttonname="btn-default" onchange="ValidateSingleInput1(this);">
                                            <input type="hidden" name="h_agency_logo" value="<?= $details['agency_image']; ?>">
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="agency-logo-edit">
                                                <img src="<?php echo base_url() . 'assets/crm_image/agencieslogo/' . $details['agency_image'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-md-12 error-msg-fix">
                                        <div class="col-lg-3">
                                            <div class="doc-holder">
                                                <a href="<?php echo base_url() . 'assets/crm_docs/agency_uploaded_docs/' . $details['agency_w9_form']; ?>"> <i class="fa fa-download"></i></a>
                                            </div>
                                            <label for="zipcode">Upload w9 Form  </label>
                                            <input type="file" class="filestyle" name="agency_w9" data-buttonname="btn-info" onchange="ValidateSingleInput(this);">
                                            <input type="hidden" name="h_agency_w9" value="<?= $details['agency_w9_form']; ?>">
                                        </div>
                                        <div class="col-lg-3 col-lg-offset-1">
                                            <div class="doc-holder">
                                                <a href="<?php echo base_url() . 'assets/crm_docs/agency_uploaded_docs/' . $details['agency_direct_deposit']; ?>"> <i class="fa fa-download"></i> </a>
                                            </div>
                                            <label for="zipcode">Upload Direct Deposit Form </label>
                                            <input type="file" class="filestyle" name="agency_direct_deposit" data-buttonname="btn-info" onchange="ValidateSingleInput(this);">
                                            <input type="hidden" name="h_agency_direct_deposit" value="<?= $details['agency_direct_deposit']; ?>">
                                        </div>
                                        <div class="col-lg-3 col-lg-offset-1">
                                            <div class="doc-holder">
                                                <a href="<?php echo base_url() . 'assets/crm_docs/agency_uploaded_docs/' . $details['agency_contract_agreement']; ?>"><i class="fa fa-download"></i></a>
                                            </div>
                                            <label for="zipcode">Upload Contract Agreement  </label>
                                            <input type="file" class="filestyle" name="agency_contract_agreement" data-buttonname="btn-info" onchange="ValidateSingleInput(this);">
                                            <input type="hidden" name="h_agency_contract_agreement" value="<?= $details['agency_contract_agreement']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="checkbox checkbox-primary text-center">
                                            <input type="submit" class="btn btn-default btn-md" name="save" value="Update Agency">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="custom-loader" style="display: none">
            <div class="loader"></div>
        </div>
    </div>
</div>
<style type="text/css">
    .agency-logo-edit img {
        width: 70px;
    }
    label.btn.btn-default {
        margin-top: 0px !important;
    }
    label.btn.btn-default.choose-file-btn {
        margin: 0 !important;
    }
    .date-picker-div {
        position: relative;
    }
    .date-picker-div span {
        height: 32px;
        position: absolute;
        right: 2px;
        top: 2px;
        width: 40px;
    }
    div#sing-up-page {
        padding-top: 80px !important;
    }
    .loader-select-city {
        display: none;
        position: absolute;
        width: 100%;
        background: rgba(255,255,255,.2);
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
    }
    .loader-image {
        height: 45px;
        top: 50%;
        position: absolute;
        left: 50%;
        margin-top: -22px;
        margin-left: -22px;
    }
    input.textInputError {border-color: red;}
    #infoUser {color: red;font-weight: bold;padding-top: 10px;}
</style>
<script type="text/javascript">
    $(document).ready(function () {
        $('form').parsley();
        $("#domain_name").change(function () {
            var domainid = $(this).val();
            if (domainid != "") {
                var regx = /^[A-Za-z0-9]+$/;
                if (!regx.test(domainid)) {
                    swal("error", "Alphabet Numeric Values Are Only Allowed In Domain Name!", "error");
                    $("#domain_name").val('');
                    $("#domain_name").focus();
                } else {
                    $('.custom-loader').show();
                    $.ajax({
                        url: '<?php echo base_url() ?>admin/members/chk_domain',
                        type: 'POST',
                        data: {domain: domainid},
                        success: function (data) {
                            $('#domain_msg').html(data);
                            if (data != '<i>Domain is valid</i>') {
                                $("#domain_name").focus();
                                $("#domain_name").addClass("textInputError");
                            } else {
                                $("#domain_name").removeClass("textInputError");
                            }
                            $('.custom-loader').hide();
                        },
                    });
                }
            }
        });
    });

    $(function () {
        $("#user_state").change(function () {
            $('#user_city').empty();
            var state = $(this).val();
            if (state == '')
            {
                alert("Select State");
            } else {
                $('.custom-loader').show();
                $.ajax({
                    url: '<?php base_url() ?>getcity',
                    type: 'POST',
                    data: {'ustid': state},
                    success: function (data) {
                        $('#user_city').html(data);
                        $('.custom-loader').hide();
                    },
                });
            }
        });
    });
    var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png", ".pdf"];
    function ValidateSingleInput(oInput) {
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        $(".error_image").hide();
                        break;
                    }
                }

                if (!blnValid) {
                    $(".error_image").show();
                    oInput.value = "";
                    return false;
                }
            }
        }
        return true;
    }

    $(function () {
        $("#login_email").change(function () {
            var emailid = $(this).val();
            $('.custom-loader').show();
            $.ajax({
                url: '<?php echo base_url() ?>admin/employers/chk_email',
                type: 'POST',
                data: {email: emailid},
                success: function (data) {
                    $('#email_msg').html(data);
                    if (data != '<i>Email address is valid</i>') {
                        $("#login_email").focus();
                        $("#login_email").addClass("textInputError");
                        $(':input[type="submit"]').prop('disabled', true);
                    } else {
                        $("#login_email").removeClass("textInputError");
                        $(':input[type="submit"]').prop('disabled', false);
                    }
                    $('.custom-loader').hide();
                },
            });
        });
    });
    $(function () {
        $("#bank_state").change(function () {
            $('#bank_city').empty();
            var state = $(this).val();
            if (state == '')
            {
                alert("Select State");
            } else {
                $('.custom-loader').show();
                $.ajax({
                    url: '<?php echo base_url() ?>agency/subagencies/getcity',
                    type: 'POST',
                    data: {'ustid': state},
                    success: function (data) {
                        $('#bank_city').html(data);
                        $('.custom-loader').hide();
                    },
                });
            }
        });
    });
</script>