<template>
        <div class="container pt-3"> 
        
                    <div class="row">
                        <div class="col-md-10">
                            <div class="registration-sec">
                                <h1>SIGNUP Form</h1>
                                <form>
                                    <div class="field">
                                        <input type="text" placeholder="Your Name" />
                                    </div>
                                    <div class="field">
                                        <input type="text" placeholder="Your Email" />
                                    </div>
                                    <div class="field">
                                        <input type="password" placeholder="Type Password" />
                                    </div>
                                    <div class="field">
                                        <input type="password" placeholder="Retype Password" />
                                    </div>                                   
                                    <label>
                                        <input type="checkbox" /> By Clicking on this You are agree with our <a href="#" title="">Terms & Condition</a>
                                    </label>
                                    <input type="submit" value="Singup Now" class="flat-btn" />
                                </form>
                                <router-link :to="{name: 'login'}"><button class="flat-btn">Login</button></router-link>
                            </div><!-- Registration sec -->
                        </div>
                    </div>
        </div><!-- Account Popup Sec -->
</template>

<script>
export default {
    
}
</script>