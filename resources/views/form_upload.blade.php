@extends('layouts.header-footer')
@section('content')
    <div id="hero-slider-style6" class="d-flex align-items-center osago osago_calculate upload_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-one-content">
                        <p class="text-white bordered pl-4 mb-30 w-50">ОСАГО</p>
                        <p class="text-white pl-4 pb-200">Загрузите сканы или фотографии
                            необходимых документов</p>
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

    <div class="js-featured-services pb-35 uploads osago osago_calculate">
        <div class="container-fluid">
            <form enctype="multipart/form-data" id="docs">
                {{csrf_field()}}
                {{--            'route' => 'formUploadDB',--}}
                {{--            {!! Form::open(array('method'=>'POST','files'=>'true','action'=>'OrdersController@postOsago1','enctype'=>'multipart/form-data')) !!}--}}
                <div class="row ">
                    <div class="col-lg-8 col-xl-7 mx-auto">
                        <div class="row featured-services-row">
                            <div class="col-lg-12 p-5">
                                <h2 class="pl-4 w-100">Водители</h2>
                                <div class="row p-5 driver_img">
                                    <div class="copied d-block w-100">
                                        <div class="row addable m-0">
                                            <h2 class="w-100 driver-type pl-5">Водитель <span class="id">1</span></h2>
                                            <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom no-border-bottom">

                                                <h4 class="w-60-lg d-inline-block upload-title">Права - Лицевая
                                                    сторона</h4>
                                                <div class="files-wr d-inline-block" data-count-files="1">
                                                    <div class="one-file">
                                                        <label class="first_label">
                                                            <input name="photos[]" type="file" class="first_photo" required>
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

                                                <h4 class="w-100 add-driver pt-4 mobile_hidden"><a
                                                            href="javascript:void(0);"
                                                            class="add_new">+ добавить
                                                        еще водителя</a>
                                                </h4>
                                            </div>
                                            <div class="col-lg-6 pt-3 pb-5 mx-auto pl-5 border-bottom">
                                                <h4 class="w-60-lg d-inline-block upload-title">Права - Задняя
                                                    сторона</h4>
                                                <div class="files-wr d-inline-block" data-count-files="1">
                                                    <div class="one-file">
                                                        <label class="second_label">
                                                            <input name="photos[]" type="file" class="second_photo" required>
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
                                                <h4 class="w-100 add-driver pt-4 mobile_add"><a
                                                            href="javascript:void(0);"
                                                            class="add_new">+ добавить
                                                        еще водителя</a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <h2 class="pl-4 w-100">Автомобиль</h2>
                                    <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom no-border-bottom">
                                        <h4 class="w-60-lg d-inline-block upload-title">СТС или ПТС - Лицевая
                                            сторона</h4>
                                        <div class="files-wr d-inline-block" data-count-files="1">
                                            <div class="one-file">
                                                <label>
                                                    <input name="photos[]" type="file" required>
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
                                        <h4 class="w-60-lg d-inline-block upload-title">СТС или ПТС - Задняя
                                            сторона</h4>
                                        <div class="files-wr d-inline-block" data-count-files="1">
                                            <div class="one-file">
                                                <label>
                                                    <input name="photos[]" type="file" required>
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
                                        <h4 class="w-60-lg d-inline-block upload-title">Паспорт - Страница с
                                            фотографией</h4>
                                        <div class="files-wr d-inline-block" data-count-files="1">
                                            <div class="one-file">
                                                <label>
                                                    <input name="photos[]" type="file" required>
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
                                        <div class="form-group form-check mt-4 owner_driver mobile_hidden">
                                            <label class="check w-88"><span>Страхователь отличается от собственника</span>
                                                <input type="checkbox" name="same" id="is_same">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom">
                                        <h4 class="w-60-lg d-inline-block upload-title">Паспорт - Страница с
                                            пропиской</h4>
                                        <div class="files-wr d-inline-block" data-count-files="1">
                                            <div class="one-file">
                                                <label>
                                                    <input name="photos[]" type="file" required>
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
                                        <div class="form-group form-check mt-4 owner_driver mobile_add">
                                            <label class="check w-88"><span>Страхователь отличается от собственника</span>
                                                <input type="checkbox" name="same" id="is_same">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <h2 class="pl-4 w-100 must_check d-none">Страхователь</h2>
                                    {{--                                <h2 class="w-75 driver-type type-2">*Если он отличается от Собственника</h2>--}}
                                    <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom no-border-bottom must_check d-none">

                                        <h4 class="w-60-lg d-inline-block upload-title">Паспорт - Страница с
                                            фотографией</h4>
                                        <div class="files-wr d-inline-block" data-count-files="1">
                                            <div class="one-file">
                                                <label>
                                                    <input name="photos[]" type="file">
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
                                    <div class="col-lg-6 pl-5 pt-3 pb-5 mx-auto border-bottom must_check d-none">
                                        <h4 class="w-60-lg d-inline-block upload-title">Паспорт - Страница с
                                            пропиской</h4>
                                        <div class="files-wr d-inline-block" data-count-files="1">
                                            <div class="one-file">
                                                <label>
                                                    <input name="photos[]" type="file">
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

                                    <h2 class="pl-5 w-100 text-center">Как с вами связаться?</h2>
                                    <div class="col-lg-6 py-4 mx-auto">
                                        <div class="form-group">
                                            <label for="phone">Ваш телефон</label>
                                            <input type="text" name="phone" class="form-control phone_number" id="phone"
                                                   aria-describedby="phoneHelp" placeholder="+7 (000) 0000000"
                                                   pattern="[1-9]{1}[0-9]{9}" required>
                                            <small id="phoneHelp" class="form-text text-muted">Пожалуйста, введите
                                                корректный номер
                                            </small>
                                        </div>
                                        <button type="submit" class="btn d-block w-100 light-blue submit">
                                            Отправить
                                        </button>
                                        <div class="form-group form-check mt-4">
                                            <label class="check w-88">
                                                <span>Согласен на обработку персональных данных в соответствии с
                                                    <a href="{{route('policy')}}" target="_blank" class="terms">
                                                        Политикой конфиденциальности сайта
                                                    </a>
                                                </span>
                                                <input type="checkbox" checked name="is_name" class="agree">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- row -->
                {{--            {!! Form::close() !!}--}}
            </form>
        </div><!-- container-fluid -->
    </div><!-- featured-services -->
@endsection
@section('script')
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script>
        $(document).ready(function () {
            var chbox = $('input#is_same');
            $('input#is_same').on('click', function () {
                if (chbox.is(':checked')) {
                    $('.must_check').removeClass('d-none')
                } else {
                    $('.must_check').addClass('d-none')
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

            $(document).on('click','a.del_row', function () {
                $(this).parent().remove();
            });


            $("form button.submit").click(function (e) {

                var form = $('#docs'),
                    formData = new FormData(),
                    formParams = form.serializeArray(),
                    msg = $('<span style="color: rgb(235, 87, 87); padding-left: 20px">Загрузите файл</span>');

                $.each(form.find('input[type="file"]'), function (i, tag) {

                   /* if($(tag).val() === ''){
                        form.find('.file-name').html(msg);
                        $('button.submit').prop('disabled',true)
                    }
                    else {
                        form.find(msg).remove();
                        $('button.submit').prop('disabled',false)
                    }*/
                    $.each($(tag)[0].files, function (i, file) {
                        formData.append(tag.name, file);
                    });
                });

                $.each(formParams, function (i, val) {
                    formData.append(val.name, val.value);
                });
                // $.each(form.find('input[type="file"]'), function (i) {
                    if(form.find('input[type="file"]').val()===''){

                        form.find('.file-name').append(msg);
                        $('button.submit').prop('disabled',true)
                    }
                    else {
                        form.find(msg).remove();
                        $('button.submit').prop('disabled',false)
                    }
                // });

                e.preventDefault();
                if(! form.valid()) {

                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: "o/osago1",
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
                            timer: 1000,
                            showConfirmButton: false
                        });
                    }

                })
                ;


            });
        })
    </script>
@stop
