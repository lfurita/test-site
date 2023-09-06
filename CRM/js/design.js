

// 셀렉트 박스
$(".select-box ul").on("click", ".init", function() {
    $(this).closest(".select-box").find('ul li:not(.init)').toggle();
});

$(".select-box ul").each(function() {
    var allOptions = $(this).children('li:not(.init)');
    $(this).on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $(this).closest(".select-box").find('.init').html($(this).html());
        allOptions.toggle();
    });
});



// finle upload
var fileinput = document.querySelector(".add-file-input"),
    button = document.querySelector(".add-file-btn"),
    returntxt = document.querySelector(".add-file-txt");

button.addEventListener("keydown", function(event){
    if(event.keyCode == 13 || event.keyCode == 32){
    fileinput.focus();
    }
});
button.addEventListener("click", function(event){
    fileinput.focus();
    return false;
});
fileinput.addEventListener("change", function(event){
    returntxt.innerHTML = this.value;
});