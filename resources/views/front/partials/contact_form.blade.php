<!-- registration inputs --> 
<div>
    <form action="{{ route('contact.submit') }}" method="post">

        @csrf

        <!-- personal details -->
        <div class="reg-sec">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <small class="form-text text-muted">Full Name</small>
                    <input type="text" class="form-control" placeholder="Your Full Name" name="name">
                </div>
                <div class="form-group col-md-6">
                    <small class="form-text text-muted">Email Address</small>
                    <input type="tel" class="form-control" placeholder="Email Address" name="email">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <small class="form-text text-muted">How can we help you?</small>
                    <textarea class="form-control" rows="4" name="message"></textarea>
                </div>
            </div>
        </div>
        
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="tocs" required>
            <label class="form-check-label" for="tocs">By checking this you agree to our <a href="#" target="_blank">Terms and Conditions</a> and <a href="#" target="_blank">Privacy Policy</a></label>
        </div>

        <div class="reg-btn">
            <button class="btn btn-success" type="submit">Submit</button>
            <button class="btn btn-sm btn-danger" type="reset"><span class="fa fa-refresh">&nbsp;</span>Reset</button>
        </div>
        
    </form>
</div>
<!-- END registration inputs -->