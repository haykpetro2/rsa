(($) ->

  $.fn.modal_success = ->
# close modal
    @modal 'hide'
    # clear form input elements
    @find('form input[type="text"], form input[type="number"]').val ''
    # clear error state
    @clear_previous_errors()
    return

  $.fn.render_form_errors = (errors) ->
    $form = this
    @clear_previous_errors()
    model = @data('model')
    $.each errors, (field, messages) ->
      $input = $('input[name="' + model + '[' + field + ']"]')
      $input.closest('.form-group').addClass('has-error').find('.help-block').html messages.join(' & ')
      return
    return

  $.fn.clear_previous_errors = ->
    $('.form-group.has-error', this).each ->
      $('.help-block', $(this)).html ''
      $(this).removeClass 'has-error'
      return
    return

  return
) jQuery

String.prototype.ucfirst = ->
  @split('').map((char, i) -> unless i then char.toUpperCase() else char).join('')

String.prototype.ucwords = ->
  @split(' ').map((word) -> word.ucfirst()).join(' ')

$ ->

  $('.select2')
  .select2
      language: "ru"
      minimumResultsForSearch: 20
      allowClear: true
      placeholder: "Выбрать значение"
  $('.select2-tags')
  .select2
      language: "ru"
      minimumResultsForSearch: 20
      allowClear: true
      placeholder: "Выбрать значение"
      tags: true
      createTag: (params) ->
        term = $.trim(params.term)
        return null if term == ''
        return {
          id: term
          text: term
          newTag: true
        }

  $('.clockpicker')
  .clockpicker
      autoclose: true

  $('.autoselect2').each (i, e) =>
    select = $(e)
    options =
      language: "ru"
      placeholder: select.data('placeholder')
      minimumInputLength: 2
      allowClear: true
    options.ajax =
      url: select.data('source')
      dataType: 'json'
      delay: 250
      data: (params) ->
        q: params.term
      processResults: (data, params) ->
        results: data.resources
    options.dropdownCssClass = 'bigdrop'
    select.select2(options)

  $('.datepicker')
  .datepicker
      format: 'dd.mm.yyyy'
      todayHighlight: true
      weekStart: 1
      language: "ru"
      autoclose: true

  $('#modal-submit').on 'click', ->
    $(this).closest('form').submit();

#  $(document).bind 'ajaxError', 'form#new_position', (event, jqxhr, settings, exception) ->
#    $(event.data).render_form_errors $.parseJSON(jqxhr.responseText)