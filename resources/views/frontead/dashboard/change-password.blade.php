<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
    <div class="fp_dashboard_body fp__change_password">
        <div class="fp__review_input">
            <h3>change password</h3>
            <div class="pt-0 comment_input">
                <form action="{{ route('profile.password.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="fp__comment_imput_single">
                                <label>Current Password</label>
                                <input type="password" placeholder="Current Password" name="current_password">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="fp__comment_imput_single">
                                <input type="password" placeholder="New Password" name="password">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="fp__comment_imput_single">
                                <label>confirm Password</label>
                                <input type="password" placeholder="Confirm Password" name="password_confirmation">
                            </div>
                            <button type="submit" class="common_btn mt_20">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
