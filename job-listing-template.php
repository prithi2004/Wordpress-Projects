<style>
.qjb-job { border: 1px solid #ddd; padding:10px; margin-bottom:15px; }
</style>
<div class="qjb-jobs">
    <?php foreach($jobs as $job): ?>
        <div class="qjb-job">
            <h3><?php echo esc_html($job->post_title); ?></h3>
            <div><?php echo wp_kses_post($job->post_content); ?></div>
            <form method="post">
                <input type="hidden" name="qjb_apply" value="1">
                <input type="hidden" name="job_id" value="<?php echo $job->ID; ?>">
                Name: <input type="text" name="applicant_name" required><br>
                Email: <input type="email" name="applicant_email" required><br>
                <button type="submit">Apply</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>
