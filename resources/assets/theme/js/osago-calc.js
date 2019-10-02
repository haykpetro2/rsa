// email для отправки заказа полиса, можно несколько, через зпт
order_emails='kaskometr@gmail.com';

// скидка на полисы - (id страховой=скидка )
// перечень всех id можно найти тут http://kaskometr.ru/pages/kasko_integrate_setting
// пример disconts='1=1.2; 5=3.7';
disconts='1=10; 2=10; 3=10; 4=10; 5=10; 6=10; 7=10; 8=10; 9=10; 10=10; 11=10; 12=10; 13=10; 14=10; 15=10; 16=10; 17=10; 18=10; 19=10; 20=10; 21=10; 22=10; 23=10; 24=10; 25=10; 26=10; 27=10; 28=10; 29=10; 30=10; 31=10; 32=10; 33=10; 34=10; 35=10; 36=10; 37=10; 38=10';

// демо ключ
integrate_key = '9169a94c659e3024ecb49b0a2a4173c2';


drivers='';
email=''; //Укажите email, на который будут приходить заявки от клиентов
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

    $("#frm-calc").submit(function() {
        $(this).ajaxSubmit(options);
        return false;
    });

    $('#btn-calc').on('click',function(){
        var $phone = $('#phone');
        var $name = $('#name');
        var $b = $(this);
        setDriversAge();
        $phone.parent().removeClass('has-error');
        if(!validatePhone($phone.val())){
            $phone.parent().addClass('has-error');
            $phone.focus();
        }else{
            $b.button('loading');
            $name.val($('#name1').val());
            $("#frm-calc").ajaxSubmit(options);
        }
    });

    $('.btn-kbm').on('click', function(e){
        var $b = $(this);
        $b.button('loading');
        kbm($b);
    });

    function setDriversAge(){
        $('.all_drivers').find('input.dob').each(function(idx, o){
            if($(o).val()){
                var d = moment($(o).val(), "DD.MM.YYYY");
                if(d){
                    $(o).next().val(moment().diff(d, 'years'));
                }
            }
        });
    }

    function validatePhone(txtPhone) {
        var filter = /^\+[0-9]{1}\s[0-9]{3}\s[0-9]{3}\s[0-9]{4}?$/;
        if (txtPhone != '' && filter.test(txtPhone)) {
            return true;
        } else {
            return false;
        }
    }

// форма "Отправить заказ"
    $("#send").submit(function() {
        $(this).ajaxSubmit(options_send);
        return false;
    });


    $("input[name='domain']").val('halk-insurance.ru');
    $("input[name='email']").val(email);




    $.mask.definitions['~'] = "[+-]";
    $(".bd").mask("99.99.9999");
    $(".phone").mask("+7 999 999 9999");



    // по дефолту - легковые
    $(".only_leg").show();




    $.post(url2+"/kalculyator_osago/get_city", {id:26},
        function(data){
            $("#city").html(data.option).val('82');
        }, "jsonp");

    $.post(url2+"/kalculyator_osago/get_region", {},
        function(data){
            $("#region").html(data.option).val('26');
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
            $(".ur_field, .foreign_field").hide();
            $(".fiz_field,.period_field,.drivers_field,.only_rf").show();
            if($("input[name='drivers_list']:checked").val()=='ogr'){
                $(".limit_drivers_field, .all_drivers").show();
            }else{
                $(".limit_drivers_field, .all_drivers").hide();
            }
            // Если выбран Физ при нажатом Иностранце (показываем ТС, срок)
        }else	if(this.value=='fiz' && $("input[name='region_TC']:checked").val()=='foreign'){
            $(".region_tc,.ur_field,.drivers_field,.limit_drivers_field,.all_drivers,.period_field, .only_rf").hide();
            $(".fiz_field,.foreign_field").show();
            // Если выбран Юр при нажатом РФ (показываем Регион, ТС, Учет)
        }else	if(this.value=='ur' && $("input[name='region_TC']:checked").val()=='rf'){
            $(".fiz_field,.drivers_field,.limit_drivers_field,.all_drivers,.period_field").hide();
            $(".region_tc,.ur_field,.only_rf").show();
            // Если выбран Юр при нажатом иностранце (показываем ТС, срок)
        }else{
            $(".ur_field,.foreign_field").show();
            $(".fiz_field,.region_tc,.drivers_field,.limit_drivers_field,.all_drivers,.period_field").hide();
        }
    });

    // показываем поля завис от региона ТС

    $("input[name='region_TC']").on("change",function(){
        // Если выбран РФ при нажатом Физ и нажатом На учете (показываем ТС, Регистрация, Период, Учет, Водители)
        if(this.value=='rf' && $("input[name='owner']:checked").val()=='fiz' && $("input[name='gibdd']").val()=='1'){
            $(".ur_field, .foreign_field").hide();
            $(".fiz_field,.drivers_field,.period_field,.only_rf").show();
            //rebild();
            // Если выбран РФ при нажатом Физ и нажатом Транзит (показываем ТС, Регистрация, Учет, Водители)
        }else if(this.value=='rf' && $("input[name='owner']:checked").val()=='fiz' && $("input[name='gibdd']").val()=='0'){
            $(".ur_field, .foreign_field, .period_field").hide();
            $(".fiz_field,.drivers_field,.only_rf").show();
            //rebild();
            //Если выбра РФ при нажатом юр (оказываем Регион, ТС, Учет)
        }else if(this.value=='rf' && $("input[name='owner']:checked").val()=='ur'){
            $(".fiz_field,.drivers_field,.period_field, .foreign_field").hide();
            $(".region_tc,.ur_field,.only_rf").show();
            //rebild();
            //Если выбран Иностр при нажато физ (показываем ТС, срок)
        }else if(this.value=='foreign' && $("input[name='owner']:checked").val()=='fiz'){
            $(".region_tc,.ur_field,.drivers_field,.period_field,.only_rf").hide();
            $(".fiz_field,.foreign_field").show();
            //rebild();
            //Если выбран Иностранец при нажатом юр (
        }else{
            $(".ur_field,.foreign_field").show();
            $(".fiz_field,.region_tc,.drivers_field,.limit_drivers_field,.period_field,.only_rf").hide();
            //rebild();
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

        //if(self==window){ parent.resizeIframe($(document).height()); }
    });

    // показываем поля завис от огр или нет списка водителей
    $(".drivers_field").on("change","input[name='drivers_list']",function(){
        if(this.value=='ogr'){
            $(".all_drivers,.limit_drivers_field").show();
            $("#limit_drivers_button").find("input[name='drivers'].dr").click();
            showDrivers(1);
        }else{
            $(".limit_drivers_field,.all_drivers").removeClass('active').hide();
        }

        //if(self==window){ parent.resizeIframe($(document).height()); }
    });

    // выводим кол-во1
    $(".limit_drivers_field").on("change","input[name='drivers']",function(e){
        showDrivers(this.value)
    });

    function showDrivers(count){
        $(".driver1,.driver2,.driver3,.driver4,.driver5").hide();
        for(var i=1;i<=count;i++){
            $(".driver"+i).show();
        }
    }


    // показываем купить
    $(".order_field").on("change","input[name='order']",function(){
        if(this.value=='1'){
            $(".order_field_form").show();
            $(".order_field,.calc").removeClass('active').hide();
        }else{
        }
        //if(self==window){ parent.resizeIframe($(document).height()); }
    });

    // скрываем купить
    $(".order_field_form").on("change","input[name='order_res']",function(){
        if(this.value=='1'){
            location.reload();
            $(".order_field_form").removeClass('active').hide();
            $(".order_field,.calc,.order").removeClass('active').show();
            //if(self==window){ parent.resizeIframe($(document).height()); }
        }
    });


    // {* Мощность двигателя (эту форму показываем только для легковых ТС) *}
    $("select[name='group_fiz']").on("change",function(){
        if($("select[name=group_fiz] option:selected").val()=='2'){
            $(".only_leg").show();
        }else{
            $(".only_leg").hide();
        }

        //if(self==window){ parent.resizeIframe($(document).height()); }
    });

    // {* Мощность двигателя (эту форму показываем только для легковых ТС) *}
    $("select[name='group_ur']").on("change",function(){
        if($("select[name=group_ur] option:selected").val()=='2'){
            $(".only_leg_ur").show();
        }else{
            $(".only_leg_ur").hide();
        }


        //if(self==window){ parent.resizeIframe($(document).height()); }
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


    //if(self==window){ parent.resizeIframe($(document).height()); }
}

function showRequest(formData, jqForm, options) {

    $('#result-modal').modal('hide');

}


// обработка ответа 1ой формы
function showAnswer(res, statusText)  {
    $('#btn-calc').button('reset');
    if(res.error==0){
        if(res.demo==0){
            $('#osago_price').text(res.price);
            $('#order_price').val(res.price);
            $('#dbg').text(res.dbg).show();
            $('#BT').text(res.BT).show();
            $('#kreg').text(res.kreg).show();
            $('#kbm').text(res.kbm).show();
            $('#kbc').text(res.kbc).show();
            $('#kperiod').text(res.kperiod).show();
            $('#ksrok').text(res.ksrok).show();
            $('#khp').text(res.khp).show();
            $('#result-modal').modal();

            var values = $('.dynamic-fields').find('.form-control, .dynamic-field,.custom-selection').not('#region, #city').serializeArray();
            values.push({"name": "region", "value": $( "#region option:selected" ).text()});
            values.push({"name": "city", "value": $( "#city option:selected" ).text()});
            $('#dynamic-fields').val(JSON.stringify(values));

            var opt = {
                dataType:"json",
                timeout: 3000
            };
            $("#frm-osago").ajaxSubmit(opt);


        }else{
            $('#result-modal').modal('hide');
            $('#activation_info').text('Для активации калькулятора отправьте запрос на kaskometr@gmail.com').fadeIn();
        }

        $('#error').hide();

        //if(self==window){ parent.resizeIframe($(document).height()); }

    }else{
        $('#error').text(res.txt).fadeIn();
        $('#result-modal').modal('hide');
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


function kbm($b) {

    var num = $b.data('id');
    var $d = $('.driver'+num);
    var $res = $d.find('.kbm-result'+num);
    var $k = $d.find('#kbm'+num);
    var KBM_FIO = $d.find("input[name='name"+num+"']").val();
    var KBM_BD = $d.find("input[name='dob"+num+"']").val();
    var KBM_SERIA = $d.find("input[name='licenseSerial"+num+"']").val();
    var KBM_NOMER = $d.find("input[name='licenseNumber"+num+"']").val();

    $res.empty();

    $.post("/osagoframe/check_kbm.php", { KBM_FIO:KBM_FIO,KBM_BD:KBM_BD,KBM_SERIA:KBM_SERIA,KBM_NOMER:KBM_NOMER,domain:'halk-insurance.ru'},
        function(data){
            if(data.demo == 0){
                var kbm = data.kbm;
                if(kbm == 0) kbm = 1;
                $k.val(kbm);
                var content = data.body;
                $res.html("<a class='btn btn-sm btn-info' role='button' data-toggle='popover' title='Расчет КБМ' data-placement='top' data-html='true' data-content='"+content+"'>Кбм = "+kbm+"</a>");
                $res.find('a').popover();
                $b.button('reset');
            }

        }, "json");
}
