$(document).ready(function () {
    $("#create").click(function () {

        var data = {
            name: $('#name').val(),
            mobile: $('#mobile').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            cpassword: $('#cpassword').val(),
            q: 2
        };

        $.ajax({
            type: "POST",
            url: 'api/musers.php',
            data: data,
            success: function (data) {
                data = JSON.parse(data);
                if (data.status == true) {
                    //window.location.replace("home.php");
                }
            }
            ,
            dataType: "html"
        });

    });

    $("#user_login").click(function () {

        var data = {
            name: $('#userid').val(),
            password: $('#login_password').val(),
            q: 3
        };


        $.ajax({
            type: "POST",
            url: 'api/musers.php',
            data: data,
            success: function (data) {
                data = JSON.parse(data);
                if (data.status == true) {
                    window.location.replace("home.php");
                }
            }
            ,
            dataType: "html"
        });

    });

    // $('.input-group.date').datepicker({
    //     format: 'yyyy-mm-dd',
    //     endDate: 'today'
    // });
    
    //   $('.input-group.date').datepicker({'setStartDate' : "01-01-1900"});
    // $('.input-group.date').datepicker({ });


    var hedu_option = [];
    hedu_option.push('<option value="">Select</option>');
    for (var i = 0; i < educationList.length; i++) {
        hedu_option.push('<option value="' + educationList[i].name + '">' + educationList[i].name + '</option>');
    }
    $('#higher_education').html(hedu_option.join(''));

    $("#higher_education").change(function () {
        for (var i = 0; i < educationList.length; i++) {
            if (educationList[i].name == this.value) {
                var degree = educationList[i].degree;
                var degree_option = [];
                if (this.value != '10th / Matriculation' && this.value != 'Under 10th / Matriculation')
                    degree_option.push('<option value="">Select</option>');
                for (var j = 0; j < degree.length; j++) {
                    degree_option.push('<option value="' + degree[j] + '">' + degree[j] + '</option>');
                }
                $('#degree').html(degree_option.join(''));
                break;
            }
        }
    });


    var compl_option = [];
    compl_option.push('<option value="">Select</option>');
    for (var i = 0; i < complexion.length; i++) {
        compl_option.push('<option value="' + complexion[i] + '">' + complexion[i] + '</option>');
    }
    $('#complexion').html(compl_option.join(''));




    var state_option = [];
    state_option.push('<option value="">Select</option>');
    for (var i = 0; i < stateCities.length; i++) {
        state_option.push('<option value="' + stateCities[i].state + '">' + stateCities[i].state + '</option>');
    }
    $('#current_state').html(state_option.join(''));




    $("#current_state").change(function () {
        for (var i = 0; i < stateCities.length; i++) {
            if (stateCities[i].state == this.value) {
                var dist = stateCities[i].districts;
                var dist_option = [];
                dist_option.push('<option value="">Select</option>');
                for (var j = 0; j < dist.length; j++) {
                    dist_option.push('<option value="' + dist[j] + '">' + dist[j] + '</option>');
                }
                $('#current_city').html(dist_option.join(''));
                break;
            }
        }
    });


    var permanent_state_option = [];
    permanent_state_option.push('<option value="">Select</option>');
    for (var i = 0; i < stateCities.length; i++) {
        permanent_state_option.push('<option value="' + stateCities[i].state + '">' + stateCities[i].state + '</option>');
    }
    $('#permanent_state').html(state_option.join(''));

    $("#permanent_state").change(function () {
        for (var i = 0; i < stateCities.length; i++) {
            if (stateCities[i].state == this.value) {
                var dist = stateCities[i].districts;
                var dist_option = [];
                dist_option.push('<option value="">Select</option>');
                for (var j = 0; j < dist.length; j++) {
                    dist_option.push('<option value="' + dist[j] + '">' + dist[j] + '</option>');
                }
                $('#permanent_city').html(dist_option.join(''));
                break;
            }
        }
    });

    $.ajax({
        type: "get",
        url: 'api/musers.php',
        data: { "q": 4 },
        success: function (data) {
            data = JSON.parse(data);

            $('#name').val(data.name);
            $('#gender').val(data.gender);
            $('#complexion').val(data.complexion);
            $('#dob').val(data.dob);
            $('#height').val(data.height);
            $('#weight').val(data.weight);
            $('#caste').val(data.caste);
            $('#mool').val(data.mool);
            $('#manglik').val(data.manglik);

            var images = data.images;
            var imgsting = '';
            for (var i = 0; i < images.length; i++) {
                imgsting += '<a class="img_custom" data-fancybox="gallery" href="api/' + images[i].big_url + '"><img class="img_custom"  src="api/' + images[i].thumbnail_url + '"></a>';
            }
            if (!images.length){
                var imgsting = 'There is no images uploaded yet';
            }

            $('#uploaded_img').html(imgsting);

            console.log(data);
            $('#higher_education').val(data.education);
            $("#higher_education").change();
            $('#degree').val(data.degree);
            $('#education_details').val(data.education_details);


            $('#job_type').val(data.job_type);
            $('#income').val(data.income);
            $('#job_details').val(data.job_details);
            $('#previous_job_details').val(data.previous_job_details);
           
            $('#father_name').val(data.father_name);
            $('#father_prof').val(data.father_job);
            $('#mother_name').val(data.mother_name);
            $('#mother_prof').val(data.mother_job);
            $('#num_of_sister').val(data.no_of_sister);
            $('#num_of_sister_married').val(data.no_of_sister_merried);
            $('#num_of_brother').val(data.no_of_brother);
            $('#num_of_brother_married').val(data.no_of_brother_merried);

            $('#current_state').val(data.current_state);
            $("#current_state").change();

            $('#current_city').val(data.current_city);
            $('#current_address').val(data.current_address);
            $('#permanent_state').val(data.permanent_state);
            $("#permanent_state").change();
            $('#permanent_city').val(data.permanent_city);
            $('#permanent_address').val(data.permanent_address);

            $('#mobile').val(data.mobile);
            $('#email').val(data.email);
            $('#other_details').val(data.other_details);

        }
        ,
        dataType: "html"
    });


    

    $("#personal_update").click(function () {

        var data = {
            name: $('#name').val(),
            gender: $('#gender').val(),
            complexion: $('#complexion').val(),
            dob: $('#dob').val(),
            height: $('#height').val(),
            weight: $('#weight').val(),
            caste: $('#caste').val(),
            manglik: $('#manglik').val(),
            mool: $('#mool').val(),
            q: 5
        };
        $('#waiting_spiner').show();

        $.ajax({
            type: "POST",
            url: 'api/musers.php',
            data: data,
            success: function (data) {
                data = JSON.parse(data);
                if (data.status == true) {
                    $('#waiting_spiner').hide();
                   $('#personal_conf_msg').html('Your infomation updated successfully!!! you are moving to next tab'); 
                   $('#personal_conf').show();

                    setTimeout(() => {
                        $('.nav-tabs a[href="#photo_tab"]').tab('show');
                        $('#personal_conf').hide();

                    }, 2000);
                    
                   
                }
            }
            ,
            dataType: "html"
        });

    });


    $("#upload_photos").click(function () {

        var upload_form = document.getElementById("upload_form").name;
        var formData = new FormData();
        formData.append('q', 6);
        formData.append('image', $('input[type=file]')[0].files[0]); 
        $('#waiting_spiner').show();

        $.ajax({
            type: "POST",
            url: 'api/musers.php',
            data: formData,
            //use contentType, processData for sure.
            contentType: false,
            processData: false,
            beforeSend: function() {
              // alert('befour send')
            },
            success: function(data) {
                data = JSON.parse(data);
                if (data.status == true) {

                    console.log(data.images);

                    var images = JSON.parse(data.images);
                    var imgsting = '';
                    for (var i = 0; i < images.length; i++) {
                        imgsting += '<a class="img_custom" data-fancybox="gallery" href="api/' + images[i].big_url + '"><img class="img_custom"  src="api/' + images[i].thumbnail_url + '"></a>';
                    }
                    if (!images.length){
                        var imgsting = 'There is no images uploaded yet';
                    }

                    $('#uploaded_img').html(imgsting);


                //    $('#waiting_spiner').hide();
                //    $('#personal_conf_msg').html('Your infomation updated successfully!!! you are moving to next tab'); 
                //    $('#personal_conf').show();

                //     setTimeout(() => {
                //         $('.nav-tabs a[href="#photo_tab"]').tab('show');
                //         $('#personal_conf').hide();

                //     }, 2000);
                    
                   
                }
               // alert('success')

            },
            error: function(e) {
                alert('error ',e)

            }
        });

        // $.ajax({
        //     type: "POST",
        //     url: 'api/musers.php',
        //     data: formData,
        //     success: function (data) {
        //         data = JSON.parse(data);
        //         if (data.status == true) {
        //             $('#waiting_spiner').hide();
        //            $('#personal_conf_msg').html('Your infomation updated successfully!!! you are moving to next tab'); 
        //            $('#personal_conf').show();

        //             setTimeout(() => {
        //                 $('.nav-tabs a[href="#photo_tab"]').tab('show');
        //                 $('#personal_conf').hide();

        //             }, 2000);
                    
                   
        //         }
        //     }
        // });

    });


    $('#search').keyup(function(){	
		var current_query = $('#search').val();
		if (current_query !== "") {
			$(".list-group li").hide();
			$(".list-group li").each(function(){
                var current_keyword = $(this).text().toLowerCase();
                current_query = current_query.toLowerCase();
				if (current_keyword.indexOf(current_query) >=0) {
					$(this).show();    	 	
				};
			});    	
		} else {
			$(".list-group li").show();
		};
    });
    


}); // ready close
