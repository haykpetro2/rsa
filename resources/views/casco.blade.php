@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago casco">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-50">КАСКО</p>
                        <p class="text-white pl-4 pb-200">Сделаем рассчет в 15 страховых компаниях
                            и преложим лучшую цену</p>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- hero-slider     -->
    <div id="fountainG" class="d-none">
        <div id="fountainG_1" class="fountainG"></div>
        <div id="fountainG_2" class="fountainG"></div>
        <div id="fountainG_3" class="fountainG"></div>
        <div id="fountainG_4" class="fountainG"></div>
        <div id="fountainG_5" class="fountainG"></div>
        <div id="fountainG_6" class="fountainG"></div>
        <div id="fountainG_7" class="fountainG"></div>
        <div id="fountainG_8" class="fountainG"></div>
    </div>
    <div class="js-featured-services pb-150 osago casco">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-8 mx-auto">
                    <div class="row featured-services-row">
                        <div class="col-lg-12 p-40-30">
                            <form enctype="multipart/form-data" id="kasko">
                                {{csrf_field()}}
                                <div class="row form-group mb-15">
                                    <div class="col-lg-4">
                                        <label>Ваше местоположение</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="Москва" name="city" required>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <label class="w-75">Марка авто</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="Mercedes" name="mark" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Модель авто</label>

                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="A160" name="model" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-lg-4">
                                        <label>Мощность авто</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="Л.С." name="power" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-4">
                                        <label>Стоимость авто</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100 currency"
                                                   placeholder="₽" name="cost" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-4">
                                        <label>Авто куплено в кредит?</label>
                                        <div class="input-group d-block w-100">
                                            <div class="radio ">
                                                <input type="radio" name="credit" id="radio1" value="Да">
                                                <label for="radio1">
                                                    Да
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="credit" id="radio2" value="Нет">
                                                <label for="radio2">
                                                    Нет
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-4">
                                        <label>Возраст водителя</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="Самого молодого" name="young_driver_age" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Стаж водителя</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100"
                                                   placeholder="Самого неопытного" name="young_driver_staj" required>
                                        </div>

                                    </div>

                                    <div class="col-lg-4">
                                        <label>Телефон</label>
                                        <div class="input-group d-block w-100">
                                            <input type="text" class="input-custom pl-15 text-left w-100 phone_number"
                                                   placeholder="+7 (000) 0000000" name="phone" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row form-group my-5">
                                    <div class="col-lg-12 p-0">
                                        <div class="accordion frequently-asked-question mb-50" id="accordionExample">
                                            <div class="card uploads">
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                     data-parent="#accordionExample">
                                                    <div class="card-body p-0 pt-2">
                                                        <div class="container-fluid">
                                                            <div class="row ">
                                                                <div class="col-lg-12 mx-auto">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <h2 class="pl-4 w-100">Водители</h2>
                                                                            <div class="row driver_img">
                                                                                <div class="copied d-block w-100">
                                                                                    <div class="row addable m-0">
                                                                                        <h2 class="w-100 driver-type pl-5">
                                                                                            Водитель <span
                                                                                                    class="id">1</span>
                                                                                        </h2>
                                                                                        <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom no-border-bottom">

                                                                                            <h4 class="w-60-lg d-inline-block upload-title">
                                                                                                Права - Лицевая
                                                                                                сторона</h4>
                                                                                            <div class="files-wr d-inline-block"
                                                                                                 data-count-files="1">
                                                                                                <div class="one-file">
                                                                                                    <label class="first_label">
                                                                                                        <input name="photos[]"
                                                                                                               type="file"
                                                                                                               class="first_photo"
                                                                                                               accept=".png, .jpg, .jpeg, .bmp, .pdf">
                                                                                                    </label>

                                                                                                    <div class="file-item ">
                                                            <span class="hide-btn">
                                                                <img class="empty" src="{{asset('images/empty.png')}}"
                                                                     alt="empty">
                                                                <img class="d-none img_ok"
                                                                     src="{{asset('images/ok.png')}}" alt="ok">
                                                                <img class="d-none img_error"
                                                                     src="{{asset('images/error.png')}}" alt="error">
                                                            </span>
                                                                                                        <span class="file-name">Файл не выбран</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <h4 class="w-100 add-driver pt-4 mobile_hidden">
                                                                                                <a
                                                                                                        href="javascript:void(0);"
                                                                                                        class="add_new">+
                                                                                                    добавить
                                                                                                    еще водителя</a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div class="col-lg-6 pt-3 pb-5 mx-auto pl-5 border-bottom">
                                                                                            <h4 class="w-60-lg d-inline-block upload-title">
                                                                                                Права - Задняя
                                                                                                сторона</h4>
                                                                                            <div class="files-wr d-inline-block"
                                                                                                 data-count-files="1">
                                                                                                <div class="one-file">
                                                                                                    <label class="second_label">
                                                                                                        <input name="photos[]"
                                                                                                               type="file"
                                                                                                               class="second_photo"
                                                                                                               accept=".png, .jpg, .jpeg, .bmp, .pdf">
                                                                                                    </label>

                                                                                                    <div class="file-item ">
                                                            <span class="hide-btn">
                                                                <img class="empty" src="{{asset('images/empty.png')}}"
                                                                     alt="empty">
                                                                <img class="d-none img_ok"
                                                                     src="{{asset('images/ok.png')}}" alt="ok">
                                                                <img class="d-none img_error"
                                                                     src="{{asset('images/error.png')}}" alt="error">
                                                            </span>
                                                                                                        <span class="file-name">Файл не выбран</span>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <h4 class="w-100 add-driver pt-4 mobile_add">
                                                                                                <a
                                                                                                        href="javascript:void(0);"
                                                                                                        class="add_new">+
                                                                                                    добавить
                                                                                                    еще водителя</a>
                                                                                            </h4>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                <h2 class="pl-4 w-100">Автомобиль</h2>
                                                                                <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom no-border-bottom">
                                                                                    <h4 class="w-60-lg d-inline-block upload-title">
                                                                                        СТС или ПТС - Лицевая
                                                                                        сторона</h4>
                                                                                    <div class="files-wr d-inline-block"
                                                                                         data-count-files="1">
                                                                                        <div class="one-file">
                                                                                            <label>
                                                                                                <input name="photos[]"
                                                                                                       type="file"
                                                                                                       accept=".png, .jpg, .jpeg, .bmp, .pdf,">
                                                                                            </label>

                                                                                            <div class="file-item ">
                                                    <span class="hide-btn">
                                                                <img class="empty" src="{{asset('images/empty.png')}}"
                                                                     alt="empty">
                                                                <img class="d-none img_ok"
                                                                     src="{{asset('images/ok.png')}}" alt="ok">
                                                                <img class="d-none img_error"
                                                                     src="{{asset('images/error.png')}}" alt="error">
                                                            </span>
                                                                                                <span class="file-name">Файл не выбран</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                                <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom">
                                                                                    <h4 class="w-60-lg d-inline-block upload-title">
                                                                                        СТС или ПТС - Задняя
                                                                                        сторона</h4>
                                                                                    <div class="files-wr d-inline-block"
                                                                                         data-count-files="1">
                                                                                        <div class="one-file">
                                                                                            <label>
                                                                                                <input name="photos[]"
                                                                                                       type="file"
                                                                                                       accept=".png, .jpg, .jpeg, .bmp, .pdf">
                                                                                            </label>

                                                                                            <div class="file-item ">
                                                    <span class="hide-btn">
                                                                <img class="empty" src="{{asset('images/empty.png')}}"
                                                                     alt="empty">
                                                                <img class="d-none img_ok"
                                                                     src="{{asset('images/ok.png')}}" alt="ok">
                                                                <img class="d-none img_error"
                                                                     src="{{asset('images/error.png')}}" alt="error">
                                                            </span>
                                                                                                <span class="file-name">Файл не выбран</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <h2 class="pl-4 w-100">Собственник</h2>
                                                                                <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom no-border-bottom">
                                                                                    <h4 class="w-60-lg d-inline-block upload-title">
                                                                                        Паспорт - Страница с
                                                                                        фотографией</h4>
                                                                                    <div class="files-wr d-inline-block"
                                                                                         data-count-files="1">
                                                                                        <div class="one-file">
                                                                                            <label>
                                                                                                <input name="photos[]"
                                                                                                       type="file"
                                                                                                       accept=".png, .jpg, .jpeg, .bmp, .pdf">
                                                                                            </label>

                                                                                            <div class="file-item ">
                                                    <span class="hide-btn">
                                                                <img class="empty" src="{{asset('images/empty.png')}}"
                                                                     alt="empty">
                                                                <img class="d-none img_ok"
                                                                     src="{{asset('images/ok.png')}}" alt="ok">
                                                                <img class="d-none img_error"
                                                                     src="{{asset('images/error.png')}}" alt="error">
                                                            </span>
                                                                                                <span class="file-name">Файл не выбран</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                                <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom">
                                                                                    <h4 class="w-60-lg d-inline-block upload-title">
                                                                                        Паспорт - Страница с
                                                                                        пропиской</h4>
                                                                                    <div class="files-wr d-inline-block"
                                                                                         data-count-files="1">
                                                                                        <div class="one-file">
                                                                                            <label>
                                                                                                <input name="photos[]"
                                                                                                       type="file"
                                                                                                       accept=".png, .jpg, .jpeg, .bmp, .pdf">
                                                                                            </label>

                                                                                            <div class="file-item ">
                                                    <span class="hide-btn">
                                                                <img class="empty" src="{{asset('images/empty.png')}}"
                                                                     alt="empty">
                                                                <img class="d-none img_ok"
                                                                     src="{{asset('images/ok.png')}}" alt="ok">
                                                                <img class="d-none img_error"
                                                                     src="{{asset('images/error.png')}}" alt="error">
                                                            </span>
                                                                                                <span class="file-name">Файл не выбран</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>


                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="d-block " data-toggle="collapse"
                                                           data-target="#collapseOne" aria-expanded="true"
                                                           aria-controls="collapseOne">
                                                            Чтобы добавить фото документов для более точного рассчета,
                                                            нажмите на стрелочку (необязательно)
                                                        </a>
                                                    </h5>
                                                </div>

                                            </div><!-- card -->

                                        </div><!-- accordion -->
                                    </div>
                                </div>
                                <div class="row form-group my-5">
                                    <div class="col-lg-8 col-xl-5 mx-auto">
                                        <button type="submit"
                                                class="btn bg-blue text-white btn-lg w-100 calc_osago submit">Рассчитать
                                        </button>
                                    </div>
                                </div>

                                <div class="row form-group form-check mt-4 p-4 mob-padd">
                                    <div class="col-lg-8 col-xl-6 mx-auto">
                                        <label class="check"><span>Согласен на обработку персональных данных в соответствии с <a
                                                        href="{{route('policy')}}" target="_blank" class="terms">Политикой конфиденциальности сайта</a></span>
                                            <input type="checkbox" checked name="is_name" class="casco_agree">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div><!-- row -->
        </div><!-- container-fluid -->
    </div><!-- featured-services -->

    <div class="modal fade" id="thank_you" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content w-65 mx-auto py-4">
                <div class="modal-header">
                    <div class="container-fluid">
                        <img src="{{asset('img/icons/IconSuccess.png')}}" class="d-block w-auto mx-auto" alt="">
                        <h5 class="modal-title d-block w-100 text-center pt-4" id="exampleModalCenterTitle1">
                            Спасибо!</h5>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h4 class="mx-auto text-center">В ближайшее время с вами свяжется менеджер</h4>
                        <p class="mx-auto text-center">Работаем Пн-Сб
                            с 09:00 до 19:00 по Мск.</p>
                        <a href="javascript:void(0);" class="btn d-block w-100 light-blue"
                           data-dismiss="modal">Закрыть</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script>
        $(document).ready(function () {
            Inputmask("₽ (,999){+|1}", {
                positionCaretOnClick: "radixFocus",
                radixPoint: ".",
                _radixDance: true,
                numericInput: true,
                placeholder: "0",
                rightAlign: true
            }).mask(".currency");
            // $(".currency").inputmask({ alias : "currency", prefix: '',groupSeparator: ".",placeholder: "₽",digits: 0, });
            $('#headingOne a').on('click', function (e) {
                // e.preventDefault();
                // $(this).toggleClass('collapsed')
                $('#headingOne a').toggleClass('rot_angle')
            });
            $(".dropdown-menu li a").click(function () {
                var selText = $(this).text();
                $(this).parent('.btn-group').find('.btn-custom').html(selText + ' <i class="fa fa-chevron-down down"></i>');
            });
            var agree2 = $('input.casco_agree');
            $('input.casco_agree').on('click', function () {
                if (agree2.is(':checked')) {
                    $('button.calc_osago').prop('disabled', false)
                } else {
                    $('button.calc_osago').prop('disabled', true)
                }
            });
            $('a.add_new').on('click', function () {

                var inc = $('.addable').length;
                var $added = $('.addable:first').clone().val('').addClass('cloned').find('.id').text(++inc).end();
                var del = $('<a href="javascript:void(0)" class="del_row"><img src="{{asset('images/X O.png')}}" alt=""></a>');
                $added.append(del);
                $added = $added.find('input').val('').end();
                $added = $added.find('.hide-btn img').addClass('d-none').end();
                $added = $added.find('.hide-btn img.empty').removeClass('d-none').end();
                $added = $added.find('.file-name').text('Файл не выбран').end();
                $('.copied').append($added);
                $('.cloned a.add_new').addClass('d-none');

            });

            $(document).on('click', 'a.del_row', function () {
                $(this).parent().remove();
            });
            $("form button.submit").click(function (e) {

                var form = $('#kasko'),
                    formData = new FormData(),
                    formParams = form.serializeArray();

                $.each(form.find('input[type="file"]'), function (i, tag) {
                    $.each($(tag)[0].files, function (i, file) {
                        formData.append(tag.name, file);
                    });
                });

                $.each(formParams, function (i, val) {
                    formData.append(val.name, val.value);
                });

                e.preventDefault();
                if (!form.valid()) {

                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: "o/kasko1",
                    data: formData,
                    processData: false,
                    contentType:
                        false,
                    beforeSend:
                        function () {
                            // alert(1);
                            $('#fountainG').removeClass('d-none');
                            {{--$("<img src='{{asset('images/loading.gif')}}' alt=''  style='position:relative;top:200px;left:200px;z-index:2000' id='loading-excel' />").appendTo("body");--}}
                        },
                    success: function () {
                        $('#fountainG').addClass('d-none');
                        Swal({
                            title: 'Большое спасибо,',
                            text: 'С вами свяжется в ближайшее время наш менеджер',
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }

                })
                ;


            });
        })
    </script>
@stop