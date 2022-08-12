//let btnJam = document.getElementById('btnJam')

// function pilihJam(idnya) {
//     // alert(idnya)
//     let element = document.getElementsByClassName("active")
//     element[0].classList.toggle("active");

//     let tombol = document.getElementById(idnya);
//     //tombol.className = "bg-dark text-white"
    
//     tombol.classList.toggle("active");



// }

$(document).ready(function() {
    $(".jamklik").click(function(){
        //alert($(this).attr("data-id"));
        $(".jamklik").removeClass("bg-dark text-white");
        $(this).addClass("bg-dark text-white");
        
        $("#btnJam").text($(this).attr("data-value"));
        $("#btnJam").attr('class', 'btn btn-dark btn-block');;

        $("#pukul").val($(this).attr("data-value"))
    }); 
})