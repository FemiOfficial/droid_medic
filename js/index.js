$(".rb-tab").click(function(){
  //Spot switcher:
  $(this).parent().find(".rb-tab").removeClass("rb-tab-active");
  $(this).addClass("rb-tab-active");
  var rbValue = $("#rb-1").find(".rb-tab-active").attr("data-value");
  if(rbValue == "Hardware"){
    // $(".question-box-2.0").show()
    $(".question-box-1").hide();
    $(".question-box-hard").fadeIn();
  }else{
    $(".question-box-1").hide();
    $(".question-box-soft").fadeIn();
  }
});

$("#sel-soft-issue").change(function(){
  var fault = $("#sel-soft-issue option:selected").val();
  $.ajax({
    url: "res/soft_ques.php",
    type: "POST",
    data: {"fault" : fault},
    success: function(res){
        $(".new").html(res)
    }
  });
});

$("#sel-hard-issue").change(function(){
  var fault = $("#sel-hard-issue option:selected").val();
  $.ajax({
    url: "res/hard_ques.php",
    type: "POST",
    data: {"fault" : fault},
    success: function(res){
        $(".new").html(res)
    }
});

});

// Perform Diagnosis
$("#no-1").click(function(){
  $("#tip-1").toggle().insertAfter("#no-1");
 });
 $("#no-2").click(function(){
  $("#tip-2").toggle().insertAfter("#no-2");
 });
 $("#no-3").click(function(){
  $("#tip-3").toggle().insertAfter("#no-3");
 });
 $("#no-4").click(function(){
  $("#tip-4").toggle().insertAfter("#no-4");
 });
 $("#no-5").click(function(){
  $("#tip-5").toggle().insertAfter("#no-5");
 });
 $("#no-6").click(function(){
  $("#tip-6").toggle().insertAfter("#no-6");
 });
 $("#no-7").click(function(){
  $("#tip-7").toggle().insertAfter("#no-7");
 });
 $("#no-8").click(function(){
  $("#tip-8").toggle().insertAfter("#no-8");
 });
 $("#no-9").click(function(){
  $("#tip-9").toggle().insertAfter("#no-9");
 });
 $("#no-10").click(function(){
  $("#tip-10").toggle().insertAfter("#no-10");
 });
 $("#no-11").click(function(){
  $("#tip-11").toggle().insertAfter("#no-11");
 });
 $("#no-12").click(function(){
  $("#tip-12").toggle().insertAfter("#no-12");
 });
 $("#no-13").click(function(){
  $("#tip-13").toggle().insertAfter("#no-13");
 });
 $("#no-14").click(function(){
  $("#tip-14").toggle().insertAfter("#no-14");
 });
 $("#no-15").click(function(){
  $("#tip-15").toggle().insertAfter("#no-15");
 });
 $("#no-16").click(function(){
  $("#tip-16").toggle().insertAfter("#no-16");
 });
 $("#no-17").click(function(){
  $("#tip-17").toggle().insertAfter("#no-17");
 });
 $("#no-18").click(function(){
  $("#tip-18").toggle().insertAfter("#no-18");
 });
 $("#no-19").click(function(){
  $("#tip-19").toggle().insertAfter("#no-19");
 });
 $("#no-20").click(function(){
  $("#tip-20").toggle().insertAfter("#no-20");
 });
 $("#no-21").click(function(){
  $("#tip-21").toggle().insertAfter("#no-21");
 });
 $("#no-22").click(function(){
  $("#tip-22").toggle().insertAfter("#no-22");
 });
 $("#no-23").click(function(){
  $("#tip-23").toggle().insertAfter("#no-23");
 });
 
   
Debug:
function debug(){
  var debug = "";
  for (i=0; i<survey.length; i++) {
    debug += "Nº " + survey[i][0] + " = " + survey[i][1] + "\n";
  }
 alert(debug);
};