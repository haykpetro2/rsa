(function() {
  (function($) {
    $.fn.modal_success = function() {
      this.modal('hide');
      this.find('form input[type="text"], form input[type="number"]').val('');
      this.clear_previous_errors();
    };
    $.fn.render_form_errors = function(errors) {
      var $form, model;
      $form = this;
      this.clear_previous_errors();
      model = this.data('model');
      $.each(errors, function(field, messages) {
        var $input;
        $input = $('input[name="' + model + '[' + field + ']"]');
        $input.closest('.form-group').addClass('has-error').find('.help-block').html(messages.join(' & '));
      });
    };
    $.fn.clear_previous_errors = function() {
      $('.form-group.has-error', this).each(function() {
        $('.help-block', $(this)).html('');
        $(this).removeClass('has-error');
      });
    };
  })(jQuery);

  String.prototype.ucfirst = function() {
    return this.split('').map(function(char, i) {
      if (!i) {
        return char.toUpperCase();
      } else {
        return char;
      }
    }).join('');
  };

  String.prototype.ucwords = function() {
    return this.split(' ').map(function(word) {
      return word.ucfirst();
    }).join(' ');
  };

  $(function() {
    $('.select2').select2({
      language: "ru",
      minimumResultsForSearch: 20,
      allowClear: true,
      placeholder: "Выбрать значение"
    });
    $('.select2-tags').select2({
      language: "ru",
      minimumResultsForSearch: 20,
      allowClear: true,
      placeholder: "Выбрать значение",
      tags: true,
      createTag: function(params) {
        var term;
        term = $.trim(params.term);
        if (term === '') {
          return null;
        }
        return {
          id: term,
          text: term,
          newTag: true
        };
      }
    });
    $('.clockpicker').clockpicker({
      autoclose: true
    });
    $('.autoselect2').each((function(_this) {
      return function(i, e) {
        var options, select;
        select = $(e);
        options = {
          language: "ru",
          placeholder: select.data('placeholder'),
          minimumInputLength: 2,
          allowClear: true
        };
        options.ajax = {
          url: select.data('source'),
          dataType: 'json',
          delay: 250,
          data: function(params) {
            return {
              q: params.term
            };
          },
          processResults: function(data, params) {
            return {
              results: data.resources
            };
          }
        };
        options.dropdownCssClass = 'bigdrop';
        return select.select2(options);
      };
    })(this));
    $('.datepicker').datepicker({
      format: 'dd.mm.yyyy',
      todayHighlight: true,
      weekStart: 1,
      language: "ru",
      autoclose: true
    });
    return $('#modal-submit').on('click', function() {
      return $(this).closest('form').submit();
    });
  });

}).call(this);

//# sourceMappingURL=app.js.map
