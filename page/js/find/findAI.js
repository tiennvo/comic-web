$(document).ready(function(){
    $(".genre-item").click(function() {
        var e = $(this).find("span");
        e.hasClass("icon-checkbox") ? e.removeClass("icon-checkbox").addClass("icon-tick") : e.hasClass("icon-tick") ? e.removeClass("icon-tick").addClass("icon-cross") : e.removeClass("icon-cross").addClass("icon-checkbox")
    })
    $(".btn-search").click(function() {
        var e = $(".btn-reset").attr("href"),
            t = "",
            a = "",
            n = "",
            i = "";
        $.each($(".genre-item span"), function(e, o) {
            $(o).hasClass("icon-tick") ? (t += n + $(o).attr("data-id"), n = ",") : $(o).hasClass("icon-cross") && (a += i + $(o).attr("data-id"), i = ",")
        })
        var keyword = $("#keyword").val();
        $.ajax({
            url: '../page/genAI.php',
            type: 'POST',
            data: {
                'question': keyword
            },
            success: function(response) {

                try {
                    var jsonResponse = JSON.parse(response);  // Cố gắng phân tích phản hồi như JSON
                    if (jsonResponse.result) {
                        t = jsonResponse.result;  // Lấy giá trị result
                        location.href = e + "?category=" + t + "&notcategory=" + a + "&country=" + $("#country").val() + "&status=0" + "&minchapter=0" + "&sort=0";
                    } else {
                        alert("Không có kết quả trả về từ server.");
                    }
                } catch (error) {
                    alert(response);
                }
            },
            error: function(xhr, status, error) {
                alert("lỗi");
            }
        });
        //location.href = e + "?category=" + t + "&notcategory=" + a + "&country=" + $("#country").val() + "&status=0" + "&minchapter=0" + "&sort=0"
    })
    
    $(".btn-collapse").click(function() {
    
        $(this).find(".show-text").toggleClass("hidden"), $(this).find(".hide-text").toggleClass("hidden"), $(this).find(".fa").toggleClass("fa-angle-double-down").toggleClass("fa-angle-double-up"), $(".advsearch-form").toggleClass("hidden")
    })
});	