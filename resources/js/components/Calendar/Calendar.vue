<template>
    <div class="main-body">

        <!-- page conainer -->
        <div>
            <!-- page breadcrumbs -->
            <div class="breadcrumbs">
                <!-- home -->
                <span>
                    <a href="" class="fa fa-home">Home</a>
                </span>
                <!-- separator -->
                <span class="bc-sep"></span>
                <!-- current page -->
                <span class="bc-current-page">
                    Training Calendar
                </span>
            </div>
            <!-- END page breadcrumbs -->

            <!-- page hero section -->
            <div class="inner-page-hero">
                <div class="container">
                    <div class="ip-content-one">
                        <span class="ip-heading">
                            <h3>
                                Training Calendar.
                            </h3>
                        </span>
                    </div>
                </div>
            </div>
            <!-- END page hero section -->

            <!-- page content -->
            <div class="ip-content">
                <div class="container">
                    <!-- category description -->
                    <div class="ip-brief-desc" id="">
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna -->
                        <!--    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                    </div>
                    <!-- course tables -->
                    <div class="ip-courses-sum">
                        <div class="ip-inner-header">
                            <h3>Pick your preferred date for your preferred course</h3>
                            <hr/>
                        </div>
                        <!-- courses -->

                        <!-- filter courses -->
                        <div class="ires-tb-filter dropdown">
                            <a class="btn dropdown-toggle" href="#" role="button" id="country-selector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select filter:
                            </a>

                            <div class="dropdown-menu" aria-labelledby="country-selector">

                                <a class="dropdown-item" href="">
                                    All
                                </a>

                                <a class="dropdown-item" href="">
                                    Face to Face
                                </a>

                                <a class="dropdown-item" href="">
                                    Period
                                </a>

                            </div>

                            <a class="btn" href="" target="_blank" role="button">
                                Export to Excel
                            </a>
                        </div>
                        <!-- END filter courses -->




                        <h4>
                            Month
                        </h4>

                        <table class="table table-sm ires-table">
                            <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Period</th>
                                <th scope="col">Location</th>
                                <th scope="col">Fees</th>
                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td>Code</td>
                                <td width="20%">
                                    <a href="">
                                        Course Name
                                    </a>
                                </td>
                                <td>
                                    Start
                                    &nbsp; - &nbsp;
                                    End
                                </td>
                                <td>
                                    Duration
                                </td>
                                <td>
                                    Period
                                </td>
                                <td>
                                    Location
                                </td>
                                <td>
                                    currency
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    No courses available
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- END page content -->

        </div>
        <!-- END page container -->

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
