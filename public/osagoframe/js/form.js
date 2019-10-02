drivers='';
email='name@domain.com'; //Укажите email, на который будут приходить заявки от клиентов
//sks='1,2';

$(document).ready(function(){

	url ='http://calc.kasko10.ru';
	url2 ='https://kaskometr.ru';

	var options_send = {
		url:url+"/form/data/backend.php?action=send_order_osago",
		dataType:"jsonp",
		timeout: 3000, // тайм-аут
		beforeSubmit: showRequest_send,
		success: showAnswer_send
	};

	var options = {
		url:"/osagoframe/send_osago.php",

		dataType:"json",
		timeout: 3000, // тайм-аут
		beforeSubmit: showRequest,
		success: showAnswer
	};

	$("#insert").submit(function() {
		$(this).ajaxSubmit(options);
		return false;
	});

// форма "Отправить заказ"
	$("#send").submit(function() {
		$(this).ajaxSubmit(options_send);
		return false;
	});


	$("input[name='domain']").val(document.domain);
	$("input[name='email']").val(email);




	/*$.mask.definitions['~'] = "[+-]";
	$(".bd").mask("99.99.9999");*/



	// по дефолту - легковые
	$(".only_leg").show();




	$.post(url2+"/kalculyator_osago/get_city", {id:1},
		function(data){
			$("#city").html(data.option);

		}, "jsonp");

	$.post(url2+"/kalculyator_osago/get_region", {},
		function(data){
			$("#region").html(data.option);

		}, "jsonp");

	$.post(url2+"/kalculyator_osago/get_bt_fiz", {},
		function(data){
			$("#sel_bt_fiz").html(data.option);
			$("select[name=group_fiz] option[value='2']").prop('selected','selected');

		}, "jsonp");

	$.post(url2+"/kalculyator_osago/get_bt_ur", {},
		function(data){
			$("#sel_bt_ur").html(data.option);
			$("select[name=group_ur] option[value='2']").prop('selected','selected');

		}, "jsonp");


	// подгружаем города
	$("#region").on("change",function(){
		$("#city").html("<option value='0'>Загрузка...</option>");

		$.post(url2+"/kalculyator_osago/get_city", {id:this.value},
			function(data){
				$("#city").html(data.option);

			}, "jsonp");
	});

	$(".ur_field").hide();

	// показываем поля для юр или физ лица (в зависимости от рф или иностранца)
	$("input[name='owner']").on("change",function(){
		// Если выбран Физ при нажатом РФ (показываем ТС, Период, Учет, Водители)
		if(this.value=='fiz' && $("input[name='region_TC']:checked").val()=='rf'){
			$(".ur_field, foreign_field, .limit_drivers_field").hide();
			$(".fiz_field,.drivers_field,.period_field, .only_rf").show();
			rebild();

			// Если выбран Физ при нажатом Иностранце (показываем ТС, срок)
		}else	if(this.value=='fiz' && $("input[name='region_TC']:checked").val()=='foreign'){
			$(".region_tc,.ur_field,.drivers_field,.period_field, .only_rf").hide();
			$(".fiz_field,.foreign_field").show();
			rebild();

			// Если выбран Юр при нажатом РФ (показываем Регион, ТС, Учет)
		}else	if(this.value=='ur' && $("input[name='region_TC']:checked").val()=='rf'){
			$(".fiz_field,.drivers_field,.period_field").hide();
			$(".region_tc,.ur_field,.only_rf").show();
			rebild();

			// Если выбран Юр при нажатом иностранце (показываем ТС, срок)
		}else{
			$(".ur_field,.foreign_field").show();
			$(".fiz_field,.region_tc,.drivers_field,.limit_drivers_field,.period_field").hide();
			rebild();

		}
	});

	// показываем поля завис от региона ТС

	$("input[name='region_TC']").on("change",function(){
		// Если выбран РФ при нажатом Физ и нажатом На учете (показываем ТС, Регистрация, Период, Учет, Водители)
		if(this.value=='rf' && $("input[name='owner']:checked").val()=='fiz' && $("input[name='gibdd']:checked").val()=='1'){
			$(".ur_field, .foreign_field").hide();
			$(".fiz_field,.drivers_field,.period_field,.only_rf").show();
			rebild();
			// Если выбран РФ при нажатом Физ и нажатом Транзит (показываем ТС, Регистрация, Учет, Водители)
		}else if(this.value=='rf' && $("input[name='owner']:checked").val()=='fiz' && $("input[name='gibdd']:checked").val()=='0'){
			$(".ur_field, .foreign_field, .period_field").hide();
			$(".fiz_field,.drivers_field,.only_rf").show();
			rebild();
			//Если выбра РФ при нажатом юр (оказываем Регион, ТС, Учет)
		}else if(this.value=='rf' && $("input[name='owner']:checked").val()=='ur'){
			$(".fiz_field,.drivers_field,.period_field, .foreign_field").hide();
			$(".region_tc,.ur_field,.only_rf").show();
			rebild();
			//Если выбран Иностр при нажато физ (показываем ТС, срок)
		}else if(this.value=='foreign' && $("input[name='owner']:checked").val()=='fiz'){
			$(".region_tc,.ur_field,.drivers_field,.period_field,.only_rf").hide();
			$(".fiz_field,.foreign_field").show();
			rebild();
			//Если выбран Иностранец при нажатом юр (
		}else{
			$(".ur_field,.foreign_field").show();
			$(".fiz_field,.region_tc,.drivers_field,.limit_drivers_field,.period_field,.only_rf").hide();
			rebild();
		}

	});

	// {* Период использования (только для физ лиц рф на учете в гибдд) *}

	$("input[name='gibdd']").on("change",function(){
		//Если нажимаем Поставлено на учет при нажатом ФИЗ (показываем период)
		if(this.value=='1' && $("input[name='owner']:checked").val()=='fiz'){
			$(".period_field").show();
			//Если нажимаем Поставлено на учет при нажатом ЮР (скрываем период)
		}else if(this.value=='2' && $("input[name='owner']:checked").val()=='fiz'){
			$(".period_field").hide();
			//Если нажимаем на Транзит при нажатом ФИЗ (скрываем период)
		}else if(this.value=='1' && $("input[name='owner']:checked").val()=='fiz'){
			$(".period_field").hide();
			//Если нажимаем на Транзит при нажатом ЮР (скрываем период)
		}else{
			$(".period_field").hide();
		}

		if(self==window){ parent.resizeIframe($(document).height()); }
	});

	// показываем поля завис от огр или нет списка водителей
	$(".drivers_field").on("change","input[name='drivers_list']",function(){
		if(this.value=='ogr'){
			$(".all_drivers,.limit_drivers_field").show();
		}else{
			$(".limit_drivers_field,.all_drivers").removeClass('active').hide();
		}

		if(self==window){ parent.resizeIframe($(document).height()); }
	});


	// показываем купить
	$(".order_field").on("change","input[name='order']",function(){
		if(this.value=='1'){
			$(".order_field_form").show();
			$(".order_field,.calc").removeClass('active').hide();
		}else{
		}
		if(self==window){ parent.resizeIframe($(document).height()); }
	});

	// скрываем купить
	$(".order_field_form").on("change","input[name='order_res']",function(){
		if(this.value=='1'){
			location.reload();
			$(".order_field_form").removeClass('active').hide();
			$(".order_field,.calc,.order").removeClass('active').show();
			if(self==window){ parent.resizeIframe($(document).height()); }
		}
	});


	// {* Мощность двигателя (эту форму показываем только для легковых ТС) *}
	$("select[name='group_fiz']").on("change",function(){
		if($("select[name=group_fiz] option:selected").val()=='2'){
			$(".only_leg").show();
		}else{
			$(".only_leg").hide();
		}

		if(self==window){ parent.resizeIframe($(document).height()); }
	});

	// {* Мощность двигателя (эту форму показываем только для легковых ТС) *}
	$("select[name='group_ur']").on("change",function(){
		if($("select[name=group_ur] option:selected").val()=='2'){
			$(".only_leg_ur").show();
		}else{
			$(".only_leg_ur").hide();
		}


		if(self==window){ parent.resizeIframe($(document).height()); }
	});


	// выводим кол-во1
	$("#limit_drivers_buttom").on("change","input[name='drivers']",function(){
		count = this.value;
		$(".driver1,.driver2,.driver3,.driver4,.driver5").hide();

		for(i=1;i<=count;i++){
			$(".driver"+i).show();
		}

		if(self==window){ parent.resizeIframe($(document).height()); }
	});
});



// достаем дефелтные блоки html для формы
function rebild (){
	$.post(url2+"/kalculyator_osago/get_drivers", {},
		function(data){
			$("#limit_drivers_buttom").html(data.limit);
			$(".all_drivers").html(data.body);
			$(".drivers_field").html(data.driver_list);

		}, "jsonp");


	if(self==window){ parent.resizeIframe($(document).height()); }
}

function showRequest(formData, jqForm, options) {

	$('#result').hide();

}


// обработка ответа 1ой формы
function showAnswer(res, statusText)  {
	if(res.error==0){
		if(res.demo==0){
			$('#osago_price').text(res.price);
			$('#dbg').text(res.dbg).show();
			$('#BT').text(res.BT).show();
			$('#kreg').text(res.kreg).show();
			$('#kbm').text(res.kbm).show();
			$('#kbc').text(res.kbc).show();
			$('#kperiod').text(res.kperiod).show();
			$('#ksrok').text(res.ksrok).show();
			$('#khp').text(res.khp).show();
			$('#result,#table_result').fadeIn();
		}else{
			$('#result,#table_result').hide();
			$('#activation_info').text('Для активации калькулятора отправьте запрос на kaskometr@gmail.com').fadeIn();
		}

		$('#error').hide();

		if(self==window){ parent.resizeIframe($(document).height()); }

	}else{
		$('#error').text(res.txt).fadeIn();
		$('#result,#table_result').fadeOut();
	}
}



function showRequest_send(formData, jqForm, options) {
	$('.order_field_ok').hide();
}


// обработка ответа от формы заказа
function showAnswer_send(res, statusText)  {
	$('#send').hide();
	$('#send_ok').html('<div class="alert alert-success">Запрос отправлен. В ближайшее время наш менеджер свяжется с вами</div>').fadeIn();

	return false;
}


function kbm()
{
	var KBM_FIO = $('#KBM_FIO').val();
	var KBM_BD = $('#KBM_BD').val();
	var KBM_SERIA = $('#KBM_SERIA').val();
	var KBM_NOMER = $('#KBM_NOMER').val();

	$.post("/osagoframe/check_kbm.php", { KBM_FIO:KBM_FIO,KBM_BD:KBM_BD,KBM_SERIA:KBM_SERIA,KBM_NOMER:KBM_NOMER,domain:document.domain},
		function(data){
			$("#resultKBM").html(data.body);

		}, "json");

}
