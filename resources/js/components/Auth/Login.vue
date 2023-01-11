<template>
        <div class="container pt-3"> 
        
                    <div class="row">
                        <div class="col-md-10">
                            <div class="account-user">
                                <div class="logo">
                                   
                                <router-link to="/">
                                    <i class="fa fa-get-pocket"></i>
                                    <span>KwitaraCars</span>
                                    <strong>Rent Cars</strong>
                                </router-link>
                                </div><!-- LOGO -->
                                <form>
                                    <h1>Login Form</h1>
                                    <div class="field">
                                        <input type="text" placeholder="Username" />
                                    </div>
                                    <div class="field">
                                        <input type="password" placeholder="Password" />
                                    </div>
                                    <div class="field">
                                        <input type="submit" value="SEND NOW" class="flat-btn" />
                                    </div>
                                </form>
                                <i>OR</i>
                                <span>LOGIN WITH</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                
                                <router-link :to="{name: 'register'}"><button class="flat-btn">Register</button></router-link>
                            </div>
                        </div>
                    </div>
        </div><!-- Account Popup Sec -->
</template>

<script>
export default {
    
}
</script>