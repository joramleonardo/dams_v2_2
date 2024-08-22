<template>
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="margin-bottom: -40px !important">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" id="contactForm login-form" v-on:submit.prevent="login">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."
                                                v-model="user.username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password"
                                                v-model="user.password">
                                        </div>
                                        <hr>
                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</template>

<script>
    import * as authServices from '../services/auth_service';
    import * as ticket_service from '../services/ticket_service';

    export default { 
        data() {
            return {
                user: {
                    username: '',
                    password: '',
                },
                isLogging: false
            }
        },
        methods: {
            login: async function () {
                const date = new Date();
                const months = [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                    ];
                const monthIndex = date.getMonth()
                const monthName = months[monthIndex]
                let currentDay= String(date.getDate()).padStart(2, '0');
                let currentYear = date.getFullYear();
                let getHours = date.getHours();
                let getMinutes = date.getMinutes();
                let newformat = getHours >= 12 ? 'PM' : 'AM';
                getHours = getHours % 12;
                getHours = getHours ? getHours : 12;
                getMinutes = getMinutes < 10 ? '0' + getMinutes : getMinutes;
                let activityDate = monthName + " " + currentDay + " " + currentYear + " " + getHours + ":" + getMinutes + " " + newformat;
			
                try {
                    const response = await authServices.login(this.user);

                    if(response.token_scope == 'superadmin'){
                        this.$router.push('/ticket/superadmin/status');
                    } 
                    else if(response.token_scope == 'admin'){
                        this.$router.push('/ticket/admin/status');
                    } 
                    else if(response.token_scope == 'staff'){
                        this.$router.push('/ticket/staff/status');
                    } 
                    else if(response.token_scope == 'author_lib'){
                        this.$router.push('/ticket/public/completed');
                    } 

                    let a_username = this.user.username;
                    let activity_id = 1;
                    let activity_date = activityDate;

                    let formData_activityLog = new FormData();
                    formData_activityLog.append('username', a_username);
                    formData_activityLog.append('activity_id', activity_id);
                    formData_activityLog.append('activity_date', activity_date);
                    const response_activityLog = await ticket_service.addActivityLog(formData_activityLog);
                    

                } catch(error) {
                    this.flashMessage.error({
                    message: 'Some error occured! Please try again.',
                    time: 5000
                    });
            }
            },
        },
    }
</script>