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
        if (!$(this).hasClass("nonaktif")) {
            $(".jamklik").removeClass("bg-success text-white");
            $(this).addClass("bg-success text-white");
            
            $("#btnJam").text($(this).attr("data-value"));
            $("#btnJam").attr('class', 'btn btn-warning btn-block');

            $("#pukul").val($(this).attr("data-value"))
        } else {
            $('#alert1').removeClass('d-none');
                
            setTimeout(() => {
                $('#alert1').addClass('d-none');
            }, 3000);
        }
        
    }); 

    $('#tanggal').change(function(){

        $(".jamklik").removeClass("nonaktif");
        $(".jamklik").attr('class', 'jamklik card my-1 mx-2 btn btn-primary');

        $("#btnJam").text("Pilih Jam Antri");
        $("#btnJam").attr('class', 'btn btn-outline-warning btn-block');


        let tanggal = $(this).val();

            $.ajax({
                method: "GET",
                url: url_tanggal+"/"+tanggal,
                dataType: 'json',

                success: function(response) {
                    $.each(response, function(key,val){
                        $("[data-value|='"+val.pukul+"']").addClass("nonaktif").click(function() {
                            $('#alert').removeClass('d-none');
                
                            setTimeout(() => {
                                $('#alert').addClass('d-none');
                            }, 3000);
                        });
                   });
                }
            });
    });

    
})
