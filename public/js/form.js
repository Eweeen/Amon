$((function(){$("form > button").click((function(t){})),$(".input_password > .bx").click((function(){$(this).toggleClass("bx-lock-alt").toggleClass("bx-lock-open-alt"),"password"==$(this).prev().attr("type")?$(this).prev().attr("type","text"):$(this).prev().attr("type","password")})),$("#password").keyup((function(){var t=0,s=$(this).val();s.length>=8&&(t+=2),/(?=.{0,}[0-9])/.test(s)&&(t+=1),/(?=.{0,}[a-z])/.test($("#password").val())&&(t+=1),/(?=.{0,}[A-Z])/.test($("#password").val())&&(t+=1),/(?=.{0,}\W)/.test($("#password").val())&&(t+=1),t>=2?$(".critere_bar > span:nth-of-type(1)").addClass("good"):$(".critere_bar > span:nth-of-type(1)").removeClass("good"),t>=4?$(".critere_bar > span:nth-of-type(2)").addClass("good"):$(".critere_bar > span:nth-of-type(2)").removeClass("good"),t>=6?$(".critere_bar > span:nth-of-type(3)").addClass("good"):$(".critere_bar > span:nth-of-type(3)").removeClass("good")}))}));
//# sourceMappingURL=form.js.map