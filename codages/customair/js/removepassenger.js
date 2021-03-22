function removepassenger() {
        $(".passenger").remove();
        num = parseInt($(".numpassenger").text());
        $(".numpassenger").text(num-num+1);
        }
