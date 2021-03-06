<div class="col-lg-3">
    <div class="card-box">
        <div class="contact-card">
            <a class="pull-left" href="#">
                <img class="img-circle" src=<?php echo base_url('assets/crm_image/agencieslogo/') . $agency['agency_image'] ?> alt="">
            </a>
            <div class="member-info">
                <h4 class="m-t-0 m-b-5 header-title"><b><?php echo $agency['agency_name']; ?></b></h4>
                <p class="text-muted lead-mail-id"><?php echo $agency['agency_email']; ?></p>
                <div class="m-t-20">
                    <span class="btn btn-purple waves-effect waves-light btn-sm send_email_btn">Send email</span>
                    <a href="<?php echo base_url() . 'admin/agencies/edit?user_id=' . urlencode(base64_encode($agency['user_id'])) ?>" class="btn btn-success waves-effect waves-light btn-sm m-l-3">Edit</a>
                    <a href="#" class="btn btn-pink waves-effect waves-light btn-sm m-l-3">Call</a>
                </div>
            </div>
        </div>
        <div class="">
            <div class="p-20">
                <h4 class="m-b-20 header-title"><b>Activities</b></h4>
                <div class="nicescroll p-l-r-10" style="max-height: 555px;">
                    <?php foreach ($logs as $key => $value): ?>
                        <div class="timeline-2">
                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted"><small><?php echo date('m-d-Y h:i:s a', strtotime($value['log_time'])); ?></small></div>
                                    <p><strong><?php echo $value['action_text']; ?> By </strong><strong><a href="#" class="text-info"><?php echo get_display_name($value['action_by']); ?></a></strong></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>