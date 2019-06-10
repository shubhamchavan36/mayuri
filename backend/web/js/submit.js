 // $.submit({
 //       url: '<?php echo Yii::$app->request->baseUrl. '/supermarkets/sample' ?>',
 //       type: 'post',
 //       data: {
 //                 searchname: $("#searchname").val() , 
 //                 searchby:$("#searchby").val() , 
 //                 _csrf : '<?=Yii::$app->request->getCsrfToken()?>'
 //             },
 //       success: function (data) {
 //          console.log(data.search);
 //       }
 //  });





//  <?php
// echo CHtml::ajaxSubmitButton('ButtonName',Yii::app()->createUrl('advert/LoadAdvertFromSay'),
//                     array(
//                         'type'=>'POST',
//                         'data'=> 'js:{"data1": val1, "data2": val2 }',                        
//                         'success'=>'js:function(string){ alert(string); }'           
//                     ),array('class'=>'someCssClass',));
// ?>


// $.submit('#submit').click(function(){
    
//     $.ajax({
//       type: 'post',
//       data: $('#personal').serialize(),
//       url:'controller/action',
//       success:function(data){
        
//        } 


//     });


// });

// $("submit").click(function(){
//     $.get("demo.php", function(data, status){
//         alert("Data: " + data + "\nStatus: " + status);
//     });
// });

//  $(document).on('click','#save',function(e) {
//   var data = $("#submit").serialize();
//   $.ajax({
//          data: data,
//          type: "post",
//          url: "demo.php",
//          success: function(data){
//               alert("Data Save: " + data);
//          }
// });
//  });





