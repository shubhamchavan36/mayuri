
$('tbody #status input:checkbox').change(function(){
  var id=$(this).val();
  var url=$('#url').val();
  // console.log(url);
  $.ajax({
		url : url,
		data : {data:id},
		method:'post',
		success :function(result)
		{
			// console.log(result);
			// $('#rate1').val(result);
			// $('#noofshare1').keyup();
		}
	});
});

function onrmv(img_id)
{
  var url=$('#url').val();
  // console.log(img_id);
  $.ajax({
    url : url,
    data : {data:img_id},
    method : 'POST',
    success:function(result){
      $.pjax.reload({container:'#remove-image'});
    }
  });
}


$('tbody #active input:checkbox').change(function(){
  var id=$(this).val();
  var url=$('#url').val();
  // console.log(url);
  $.ajax({
		url : url,
		data : {data:id},
		method:'post',
		success :function(result)
		{
			// console.log(result);
			// $('#rate1').val(result);
			// $('#noofshare1').keyup();
		}
	});
});


$('tbody #sale input:checkbox').change(function(){
  var id=$(this).val();
  var url=$('#url-sale').val();
  // console.log(id);
  $.ajax({
		url : url,
		data : {data:id},
		method:'post',
		success :function(result)
		{
			// console.log(result);
			// $('#rate1').val(result);
			// $('#noofshare1').keyup();
		}
	});
});
function onrmv(img_id)
{
  var url=$('#url').val();
  // console.log(img_id);
  $.ajax({
    url : url,
    data : {data:img_id},
    method : 'POST',
    success:function(result){
      $.pjax.reload({container:'#remove-image'});
    }
  });
}


$("#error").hide();
$('#btnsubmit').attr('disabled','disabled');
$("#current_pass").keyup(function(){
	var data = $(this).val();

	if(data!= "")
	{
		var url=$('#url').val();

		$.ajax({
	            method: 'POST',
	            url: url,
	            data: {data:data},
	            success: function(result)
	            {
	            	// console.log(result);
	            	if(result=='true')
	            	{
	            		$("#error").hide();
	            		$('#btnsubmit').removeAttr('disabled');
	            	}else{
	            		$("#error").show();
			            $('#btnsubmit').attr('disabled','disabled');
	            	}
	            }
       		 });
	}
});
