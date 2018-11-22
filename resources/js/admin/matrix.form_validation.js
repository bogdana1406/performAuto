$(document).ready(function(){

	$("#current_pwd").keyup(function () {
	var current_pwd = $("#current_pwd").val();
	$.ajax({
		type:'get',
		url:'/admin/check-pwd',
		data:{current_pwd:current_pwd},
		success:function(resp){
		//alert(resp);
            if(resp=="false"){
                $("#chkPwd").html("<font color='red'>Current Password is Incorrect</font>")
            }else{
                if(resp=="true"){
                    $("#chkPwd").html("<font color='green'>Current Password is Correct</font>")
                }
            }
		},error:function(){
		alert("error");
		}
	});
    });

	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});


    //Add Car Validation

    $("#add_car").validate({
        rules:{
            name:{
                required:true
            },
            brand_id:{
                required:true
            },
            model:{
                required:true
            },
            seats:{
                required:true
            },
            doors:{
                required:true
            },
            trasnsmission_types:{
                required:true
            },
            year:{
                required:true
            },
            engine_id:{
                required:true
            },
            price:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

//Add Brand Validation

    $("#add_brand").validate({
        rules:{
            brand_name:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    //Add Engine Validation

    $("#add_engine").validate({
        rules:{
            brand_name:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });


    //Upload Form Validation

    $("#car_id").validate({
        rules:{
            brand_name:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });


    //Edit Brand Validation

    $("#edit_brand").validate({
        rules:{
            brand_name:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    //Edit Engine Validation

    $("#edit_engine").validate({
        rules:{
            engine_name:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    //Edit Car Validation

    $("#edit_car").validate({
        rules:{
            name:{
                required:true
            },
            brand_id:{
                required:true
            },
            model:{
                required:true
            },
            seats:{
                required:true
            },
            doors:{
                required:true
            },
            trasnsmission_types:{
                required:true
            },
            year:{
                required:true
            },
            engine_id:{
                required:true
            },
            price:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });


	
	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
			current_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_pwd2:{
				required:true,
				minlength:6,
				maxlength:20
			},
            confirm_pwd2:{
                required:true,
                minlength:6,
                maxlength:20,
                equalTo:"#new_pwd"
            }
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	//Delete Category Validation

	$(".delCat").click(function(event){

		//alert("test");

		if(confirm('Are you sure you want to delete this Category?')){

            window.location.href = '/admin/delete-category/' + event.target.dataset.id;
			return true;

		}
		return false;
	});

    //Delete Brand Validation

    $(".delBrand").click(function(event){

        //alert("test");

        if(confirm('Are you sure you want to delete this Brand?')){

            window.location.href = '/admin/delete-brand/' + event.target.dataset.id;
            return true;

        }
        return false;
    });


    //Delete Engine Validation

    $(".delEng").click(function(event){

        //alert("test");

        if(confirm('Are you sure you want to delete this Engine?')){

            window.location.href = '/admin/delete-engine/' + event.target.dataset.id;
            return true;

        }
        return false;
    });


    // Delete Car Validation (for delete without sweet button)

    $(".delCar").click(function(event){

        if(confirm('Are you sure you want to delete this Car?')){

            window.location.href = '/admin/delete-car/' + event.target.dataset.id;
            return true;

        }
        return false;
    });

    // Delete CarImageRecord Validation (for delete without sweet button)

    $(".delCarsImageRecord").click(function(event){

        if(confirm('Are you sure you want to delete this Car Image?')){

            window.location.href = '/admin/delete-car-image-record/' + event.target.dataset.id;
            return true;

        }
        return false;
    });

    // Delete ReviewRecord Validation

    $(".delReview").click(function(event){

        if(confirm('Are you sure you want to delete this Review?')){

            window.location.href = '/admin/delete-review/' + event.target.dataset.id;
            return true;

        }
        return false;
    });

    //Delete with sweet alert (view_cars first link)
    // $(".deleteRecord").click(function(){
    //     var id = $(this).attr('rel');
    //     var deleteFunction = $(this).attr('rel1');
    //     swal({
    //         title: "Are you sure?",
    //         text: "You will not be able to recover this record again",
    //         showCancelButton: true,
    //         confirmButtonClass: "btn-danger",
    //         confirmButtonText: "Yes, delete it"
    //     },
    //     function(){
    //         window.location.href = "/admin/" + deleteFunction + "/" + id;
    //     });
    // });

});
