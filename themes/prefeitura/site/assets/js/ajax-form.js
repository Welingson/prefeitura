$(function () {


//ajax form
    $("form:not('.ajax_off')").submit(function (e) {
        e.preventDefault();

        let spinner = document.getElementById("spinner-load");
      

        var form = $(this);        
        var load = $(".ajax_load");
        var flashClass = "ajax_response";
        var flash = $("." + flashClass);

        form.ajaxSubmit({
            url: form.attr("action"),
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                spinner.style.visibility = "visible";
                // spinner.fadeIn(200).css("visibility", "visible");
            },
            success: function (response) {
                //redirect
                if (response) {
                    // console.log(response);
                    window.location.href = response.redirect;
                    
                }

                //message
                if (response.message) {
                    if (flash.length) {
                        flash.html(response.message).fadeIn(100).effect("bounce", 300);
                    } else {
                        form.prepend("<div class='" + flashClass + "'>" + response.message + "</div>")
                            .find("." + flashClass).effect("bounce", 300);
                    }
                } else {
                    flash.fadeOut(100);
                }
            },
            complete: function () {
                load.fadeOut(200);

                if (form.data("reset") === true) {
                    form.trigger("reset");
                }
            }
        });
    })

})
