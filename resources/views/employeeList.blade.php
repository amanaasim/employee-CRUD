<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button { 
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                margin: 0; 
            }

            .cursor-pointer{
                cursor: pointer;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="p-5">
            <div class="pt-4 pb-4">
                    <button class="add_emp_btn px-4 py-2 bg-grey border" onclick="addEmployee()">Add Emplyee</button>
                    <button class="view_emp_btn px-4 py-2 bg-grey border" style="display:none" onclick="viewEmployee()">View Emplyees</button>
            </div>
            <div class="">
                <table  class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="add_new_emp" style="display:none;">
                      <tr>
                        <td class="pt-3" scope="row">1</td>
                        <td>
                            <input type="text" name="user_name" id="user_name" class="user_name form-control" placeholder="Full Name">
                        </td>
                        <td>
                            <input type="email" name="user_email" id="user_email" class="user_email form-control" placeholder="Email id">
                        </td>
                        <td>
                            <input type="number" name="user_phone" id="user_phone" class="user_phone form-control" placeholder="Phone Number">
                        </td>
                        <td>
                            <select name="user_gender" id="user_gender" class="user_gender form-control">
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </td>
                        <td class="pt-3">
                            <i title="Add new employee" class="px-2 fa-solid fa-check text-success cursor-pointer" onclick="validateEmployee()"></i>
                            <i title="Cancel" class="fa-solid fa-xmark text-danger cursor-pointer" onclick="viewEmployee()"></i>
                        </td>
                      </tr>
                    </tbody>
                    <tbody class="update_emp" style="display:none;">

                    </tbody>
                    <tbody class="emp_list">

                    </tbody>
                </table>
            </div>
        </div>
    </body>

    <script>
        $(document).ready(function(){
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })

            viewEmployee();
        });

        function addEmployee()
        {
            $(".add_emp_btn").hide();
            $(".view_emp_btn").show();

            $(".emp_list").hide();
            $(".add_new_emp").show();
        }

        function viewEmployee()
        {
            $.ajax({
                type: "get",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') },
                url: "get-emp-list",
                data : {
                    _token  : "{{ csrf_token() }}",
                },
                success: function (res) 
                {
                    if (res.status === true) {

                        var emp_list = "";

                        $.each(res.data, function(key, value){
                            emp_list += `
                                            <tr>
                                                <th scope="row">${key + 1}</th>
                                                <td>${value.name}</td>
                                                <td>${value.email}</td>
                                                <td>${value.phone}</td>
                                                <td class="text-capitalize">${value.gender}</td>
                                                <td>
                                                    <i title="Update" onclick="updateEmployee(${value.id})" class="px-3 fa-solid fa-pen-to-square text-success cursor-pointer"></i>
                                                    <i title="Delete" onclick="confirmEmployeeDelete(${value.id})" class="fa-solid fa-trash text-danger cursor-pointer"></i>
                                                </td>
                                            </tr>
                                        `
                        });

                        $(".emp_list").html(emp_list)
                    }
                    else {
                        iziToast.error({
                            title: 'Error',
                            message: res.message,
                            position: 'topRight',
                        });
                    }
                },
                error: function (error) {
                    iziToast.error({
                        title: 'Error',
                        message: "Something went wrong!",
                        position: 'topRight',
                    });
                }
            });


            $(".add_emp_btn").show();
            $(".view_emp_btn").hide();

            $(".emp_list").show();
            $(".add_new_emp").hide();
            $(".update_emp").hide();
        }

        function validateEmployee()
        {
            var userName    = document.getElementById("user_name").value;
            var userEmail   = document.getElementById("user_email").value;
            var userPhone   = document.getElementById("user_phone").value;
            var userGender  = document.getElementById("user_gender").value;

            if(userName == "")
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please type your Full Name!',
                    position: 'topRight',
                });
                return;
            }

            if(userEmail == "")
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please type your Email!',
                    position: 'topRight',
                });
                return;
            }

            if(userPhone == "")
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please type your Phone Number!',
                    position: 'topRight',
                });
                return;
            }

            if(userPhone.length != 10)
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please type your correct Phone Number!',
                    position: 'topRight',
                });
                return;
            }

            if(userGender == "")
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please select your Gender!',
                    position: 'topRight',
                });
                return;
            }


            $.ajax({
                type: "POST",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') },
                url: "create-emp",
                data : {
                    _token  : "{{ csrf_token() }}",
                    name    : userName,
                    email   : userEmail,
                    phone   : userPhone,
                    gender  : userGender,
                },
                success: function (res) 
                {
                    if (res.status === true) {

                        viewEmployee();

                        iziToast.success({
                            title: 'Success',
                            message: res.message,
                            position: 'topRight',
                        });
                    }
                    else {
                        iziToast.error({
                            title: 'Error',
                            timeout: 5000,
                            message: res.message,
                            position: 'topRight',
                        });
                    }
                },
                error: function (error) {
                    iziToast.error({
                        title: 'Error',
                        message: "Something went wrong!",
                        position: 'topRight',
                    });
                }
            });

        }

        function confirmEmployeeDelete(id)
        {
            // console.log(id);

            iziToast.question({
                            title: 'Delete',
                            message: "Are you sure ?",
                            position: 'topRight',
                            buttons: [
                                        ['<button>Yes</button>', function (instance, toast) {
                                            deleteEmployee(id);
                                            instance.hide({
                                                transitionOut: 'fadeOutUp',
                                                onClosing: function(instance, toast, closedBy){
                                                    // console.info('Deleting cancelled!'); // The return will be: 'closedBy: buttonName'
                                                }
                                            }, toast, 'buttonName');
                                        }, true], // true to focus
                                        ['<button>Cancel</button>', function (instance, toast) {
                                            instance.hide({
                                                transitionOut: 'fadeOutUp',
                                                onClosing: function(instance, toast, closedBy){
                                                    // console.info('Deleting cancelled!'); // The return will be: 'closedBy: buttonName'
                                                }
                                            }, toast, 'buttonName');
                                        }]
                                    ],
                        });

            return false;

        }

        function deleteEmployee(id)
        {

            $.ajax({
                type: "post",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') },
                url: "delete-emp",
                data : {
                    _token  :   "{{ csrf_token() }}",
                    id      :   id
                },
                success: function (res) 
                {
                    if (res.status === true) {

                        var emp_list = "";

                        $.each(res.data, function(key, value){
                            emp_list += `
                                            <tr>
                                                <th scope="row">${key + 1}</th>
                                                <td>${value.name}</td>
                                                <td>${value.email}</td>
                                                <td>${value.phone}</td>
                                                <td class="text-capitalize">${value.gender}</td>
                                                <td>
                                                    <i title="Update" onclick="updateEmployee(${value.id})" class="px-3 fa-solid fa-pen-to-square text-success cursor-pointer"></i>
                                                    <i title="Delete" onclick="confirmEmployeeDelete(${value.id})" class="fa-solid fa-trash text-danger cursor-pointer"></i>
                                                </td>
                                            </tr>
                                        `
                        });

                        $(".emp_list").html(emp_list)
                    }
                    else {
                        iziToast.error({
                            title: 'Error',
                            message: res.message,
                            position: 'topRight',
                        });
                    }
                },
                error: function (error) {
                    iziToast.error({
                        title: 'Error',
                        message: "Something went wrong!",
                        position: 'topRight',
                    });
                }
            });
        }

        function updateEmployee(id)
        {
            $(".add_emp_btn").hide();
            $(".view_emp_btn").show();

            $.ajax({
                type: "post",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') },
                url: "get-emp",
                data : {
                    _token  :   "{{ csrf_token() }}",
                    id      :   id
                },
                success: function (res) 
                {
                    if (res.status === true) {
                        var emp_list = `
                            <tr>
                                <th scope="row" class="py-3">1</th>
                                <td>
                                    <input value="${res.data.name}" type="text" name="update_name" id="update_name" class="update_name form-control" placeholder="Full Name">
                                </td>
                                <td>
                                    <input value="${res.data.email}" type="email" name="update_email" id="update_email" class="update_email form-control" placeholder="Email id">    
                                </td>
                                <td>
                                    <input value="${res.data.phone}" type="number" name="update_phone" id="update_phone" class="update_phone form-control" placeholder="Phone Number">
                                </td>
                                <td>`
                                
                                    if(res.data.gender == 'male')
                                    {
                                        emp_list += `
                                        <select name="update_gender" id="update_gender" class="update_gender form-control">
                                            <option value="">Select</option>
                                            <option value="male" selected="true">Male</option>
                                            <option value="female">Female</option>
                                        </select> `
                                    }
                                    else
                                    {
                                        emp_list += `
                                        <select name="update_gender" id="update_gender" class="update_gender form-control">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female" selected="true">Female</option>
                                        </select> `
                                    }

                                emp_list += `
                                </td>
                                <td class="py-3">
                                    <i title="Update" onclick="updateEmployeeDetails(${res.data.id})" class="px-3 fa-solid fa-check text-success cursor-pointer"></i>
                                    <i title="Cancel" onclick="viewEmployee()" class="fa-solid fa-ban text-danger cursor-pointer"></i>
                                </td>
                            </tr>
                        `

                        $(".update_emp").show()
                        $(".emp_list").hide()
                        $(".add_new_emp").hide()
                        $(".update_emp").html(emp_list)
                    }
                    else {
                        iziToast.error({
                            title: 'Error',
                            message: res.message,
                            position: 'topRight',
                        });
                    }
                },
                error: function (error) {
                    iziToast.error({
                        title: 'Error',
                        message: "Something went wrong!",
                        position: 'topRight',
                    });
                }
            });
        }

        function updateEmployeeDetails(id)
        {
            var updateName    = document.getElementById("update_name").value;
            var updateEmail   = document.getElementById("update_email").value;
            var updatePhone   = document.getElementById("update_phone").value;
            var updateGender  = document.getElementById("update_gender").value;

            if(updateName == "")
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please type your Full Name!',
                    position: 'topRight',
                });
                return;
            }

            if(updateEmail == "")
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please type your Email!',
                    position: 'topRight',
                });
                return;
            }

            if(updatePhone == "")
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please type your Phone Number!',
                    position: 'topRight',
                });
                return;
            }

            if(updatePhone.length != 10)
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please type your correct Phone Number!',
                    position: 'topRight',
                });
                return;
            }

            if(updateGender == "")
            {
                iziToast.error({
                    title: 'Error',
                    message: 'Please select your Gender!',
                    position: 'topRight',
                });
                return;
            }


            $.ajax({
                type: "POST",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content') },
                url: "update-emp",
                data : {
                    _token  : "{{ csrf_token() }}",
                    id      : id,
                    name    : updateName,
                    email   : updateEmail,
                    phone   : updatePhone,
                    gender  : updateGender,
                },
                success: function (res) 
                {
                    if (res.status === true) {

                        viewEmployee();

                        iziToast.success({
                            title: 'Success',
                            message: res.message,
                            position: 'topRight',
                        });
                    }
                    else {
                        iziToast.error({
                            title: 'Error',
                            timeout: 5000,
                            message: res.message,
                            position: 'topRight',
                        });
                    }
                },
                error: function (error) {
                    iziToast.error({
                        title: 'Error',
                        message: "Something went wrong!",
                        position: 'topRight',
                    });
                }
            });

        }


    </script>
</html>
