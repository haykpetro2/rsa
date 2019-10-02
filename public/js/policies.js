(function() {
  $(function() {
    var $form, Calculator, DriverDataService, change, clearDriverData, clearVehicleData, click, keyup, showHideFields, updateVehicleData;
    showHideFields = function() {
      if ($('#client_is_company').prop('checked')) {
        $('.client-is-company').show();
        $('.client-not-company').hide();
        $('#owner_company').prop('checked', true);
        $('#unrestricted').prop('checked', true);
      } else {
        $('.client-is-company').hide();
        $('.client-not-company').show();
      }
      if ($('#owner_company').prop('checked')) {
        $('.owner-is-company').show();
        $('.owner-not-company').hide();
        $('#unrestricted').prop('checked', true);
      } else {
        $('.owner-is-company').hide();
        $('.owner-not-company').show();
      }
      if ($('#same_client_owner').prop('checked')) {
        $('#owner_fields').hide();
      } else {
        $('#owner_fields').show();
      }
      if ($('#unrestricted').prop('checked')) {
        return $('#drivers_fields').hide();
      } else {
        return $('#drivers_fields').show();
      }
    };
    $('#same_client_owner').on('click', function(e) {
      return showHideFields();
    });
    showHideFields();
    Calculator = (function() {
      function Calculator() {}

      Calculator.prototype.drivers = '.driver_kbm';

      Calculator.prototype.driver_type = '#driver_type';

      Calculator.prototype.vehicle_hp = '#vehicle\\[power\\]';

      Calculator.prototype.vehicle_type = '#vehicle\\[type\\]';

      Calculator.prototype.vehicle_base = '#vehicle\\[base\\]';

      Calculator.prototype.client_address = '#client\\[full_address_json\\]';

      Calculator.prototype.owner_address = '#full_address_json';

      Calculator.prototype.unrestricted = '#unrestricted';

      Calculator.prototype.client_company = '#client_is_company';

      Calculator.prototype.owner_company = '#owner_company';

      Calculator.prototype.trailer = '#vehicle\\[trailer\\]';

      Calculator.prototype.base = '#p_base';

      Calculator.prototype.k1 = '#p_k1';

      Calculator.prototype.k2 = '#p_k2';

      Calculator.prototype.k3 = '#p_k3';

      Calculator.prototype.k4 = '#p_k4';

      Calculator.prototype.k5 = '#p_k5';

      Calculator.prototype.k6 = '#p_k6';

      Calculator.prototype.k7 = '#p_k7';

      Calculator.prototype.k8 = '#p_k8';

      Calculator.prototype.total = '#p_total';

      Calculator.prototype.updateCoef = function() {
        var base, data, json, k1, k2, k3, k4, k7, type, val, vhp;
        base = parseFloat($(this.base).val());
        val = parseFloat($(this.vehicle_base).find(':selected').val());
        if (!isNaN(val) && val > 0) {
          base = val;
        }
        if (($(this.owner_company).prop('checked') || $(this.client_company).prop('checked')) && $(this.vehicle_type).val() === '1') {
          base = 3087.00;
        }
        $(this.base).val(base.toFixed(2));
        k2 = 0.0;
        k3 = 1.0;
        k4 = 1.0;
        if ($(this.unrestricted).prop('checked')) {
          k2 = 1.0;
          k3 = 1.8;
          k4 = 1.0;
        } else {
          val = parseFloat($(this.driver_type).find(':selected').val());
          if (!isNaN(val) && val > 0) {
            k4 = val;
          }
          $(this.drivers).each((function(_this) {
            return function(idx, element) {
              val = parseFloat($(element).val());
              if (!isNaN(val) && val > 0 && k2 < val) {
                k2 = val;
              }
            };
          })(this));
        }
        $(this.k2).val(k2.toFixed(2));
        $(this.k3).val(k3.toFixed(2));
        $(this.k4).val(k4.toFixed(2));
        vhp = parseFloat($(this.vehicle_hp).val());
        type = parseInt($(this.vehicle_type).find(':selected').val());
        k7 = 1.0;
        if (type === 1 || type === 2) {
          k7 = (function() {
            switch (false) {
              case !(vhp <= 50):
                return 0.6;
              case !(vhp > 50 && vhp <= 70):
                return 1.0;
              case !(vhp > 70 && vhp <= 100):
                return 1.1;
              case !(vhp > 100 && vhp <= 120):
                return 1.2;
              case !(vhp > 120 && vhp <= 150):
                return 1.4;
              case !(vhp > 150):
                return 1.6;
              default:
                return 1.0;
            }
          })();
        }
        if ($(this.trailer).prop('checked')) {
          if (type === 6) {
            k7 = 1.4;
          }
          if (type === 7) {
            k7 = 1.25;
          }
        }
        $(this.k7).val(k7.toFixed(2));
        json = $(this.owner_address).val().length > 0 ? $(this.owner_address).val() : $(this.client_address).val();
        k1 = 1.0;
        if (json) {
          data = $.parseJSON(json);
          k1 = (function() {
            switch (false) {
              case data.city_fias_id !== 'eeb7a0a7-3bbf-4f00-8a03-a7eabc257bed':
                return 1.3;
              case data.city_fias_id !== 'e157b9c0-f908-48bc-a1d7-39c482a501a5':
                return 1.3;
              case data.city_fias_id !== 'fc9c55d0-c66e-455e-8034-b0944b025c38':
                return 1.2;
              case data.city_fias_id !== '79da737a-603b-4c19-9b54-9114c96fb912':
                return 1.2;
              case data.city_fias_id !== 'd0e68eaf-5ea0-4e65-81b6-b6f55c4df6f5':
                return 1.2;
              case data.city_fias_id !== 'ce9dccce-d0a3-49c4-a934-3f8de7fbed2a':
                return 1.1;
              case data.city_fias_id !== 'd22840fe-89f7-4f1a-8591-c51b87a7aec2':
                return 1.1;
              case data.city_fias_id !== 'a4f6512e-2ee9-4250-b241-b58504a886b4':
                return 1.1;
              case data.city_fias_id !== 'ae6c6804-3c18-4337-bb6e-7479a8cb64f6':
                return 1.1;
              case data.city_fias_id !== '2c58f372-aac8-4645-b41a-f39bdffef373':
                return 1.1;
              case data.city_fias_id !== '0ec1acd4-d7bb-49f7-87c2-d66edb24f587':
                return 1.1;
              case data.city_fias_id !== '06e2b3b8-c02c-4722-887f-168236ae5382':
                return 1.1;
              case data.city_fias_id !== 'f09d518d-5617-476f-8c76-877899375202':
                return 1.1;
              case data.city_fias_id !== '1d3511c8-b1dc-49c5-b5fb-3533ed4ce3c4':
                return 1.1;
              case data.city_fias_id !== '7dfa745e-aa19-4688-b121-b655c11e482f':
                return 1.8;
              case data.city_fias_id !== '16ac039a-5257-4715-a8c5-d6bd9e617b53':
                return 1.8;
              case data.city_fias_id !== 'a216cad5-7027-40b8-b1a1-d64abefbd5cd':
                return 1.2;
              case data.city_fias_id !== '3809afb6-fdfd-4115-9e55-236abf108c81':
                return 1.3;
              case data.city_fias_id !== 'c1cfe4b9-f7c2-423c-abfa-6ed1c05a15c5':
                return 1.8;
              case data.city_fias_id !== 'dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74':
                return 1.1;
              case data.city_fias_id !== '1a453dcd-8885-4999-923b-1bbaa5a1cec4':
                return 1.0;
              case data.city_fias_id !== 'eef55456-4d89-4620-b361-d620221ad3a7':
                return 1.0;
              case data.city_fias_id !== '76cb0cf6-49a5-4852-b45d-99e4ce12a7ea':
                return 1.0;
              case data.city_fias_id !== '28bafcb3-92b2-445b-9443-a341be73fdb9':
                return 1.0;
              case data.city_fias_id !== 'bce1a4f2-7576-4427-8bd8-8d8b4e35ad11':
                return 1.0;
              case data.city_fias_id !== '971ba684-f38b-4229-ba72-0d6fe8e179c4':
                return 1.0;
              case data.city_fias_id !== 'd72c95ed-9fdd-4f27-b94f-898fc3f1177d':
                return 1.0;
              case data.region_fias_id !== 'f10763dc-63e3-48db-83e1-9c566fe3092b':
                return 0.8;
              case data.region_fias_id !== 'd8327a56-80de-4df2-815c-4f6ab1224c50':
                return 1.3;
              default:
                return 1.0;
            }
          })();
          return $(this.k1).val(k1.toFixed(2));
        }
      };

      Calculator.prototype.getTotal = function() {
        return ($(this.base).val() * $(this.k1).val() * $(this.k2).val() * $(this.k3).val() * $(this.k4).val() * $(this.k5).val() * $(this.k6).val() * $(this.k7).val() * $(this.k8).val()).toFixed(2);
      };

      Calculator.prototype.setTotal = function() {
        return $(this.total).val(this.getTotal());
      };

      return Calculator;

    })();
    $form = $('form.simple_form');
    change = [];
    change.push(Calculator.prototype.vehicle_base);
    change.push(Calculator.prototype.driver_type);
    $form.on('change', change.toString(), function(e) {
      return $(this).trigger('halk:update:calc');
    });
    $form.on('change', Calculator.prototype.vehicle_type, function(e) {
      var $base_select, key, ref, val;
      $base_select = $(Calculator.prototype.vehicle_base);
      $base_select.empty();
      ref = $(e.target).find(':selected').data('base').split('|');
      for (key in ref) {
        val = ref[key];
        $base_select.append($('<option>', {
          value: val,
          text: val
        }));
      }
      $base_select.trigger('change');
      return $(this).trigger('halk:update:calc');
    });
    keyup = [];
    keyup.push(Calculator.prototype.drivers);
    keyup.push(Calculator.prototype.vehicle_hp);
    keyup.push(Calculator.prototype.base);
    $form.on('keyup', keyup.toString(), function(e) {
      return $(this).trigger('halk:update:calc');
    });
    $(document).on('halk:update:calc', 'form.simple_form', function(e) {
      var calc;
      calc = new Calculator();
      calc.updateCoef();
      return calc.setTotal();
    });
    change = [];
    change.push(Calculator.prototype.base);
    change.push(Calculator.prototype.k1);
    change.push(Calculator.prototype.k2);
    change.push(Calculator.prototype.k3);
    change.push(Calculator.prototype.k4);
    change.push(Calculator.prototype.k5);
    change.push(Calculator.prototype.k6);
    change.push(Calculator.prototype.k7);
    change.push(Calculator.prototype.k8);
    $form.on('keyup', change.toString(), function(e) {
      return $(this).trigger('halk:recalc:calc');
    });
    $(document).on('halk:recalc:calc', 'form.simple_form', function(e) {
      return new Calculator().setTotal();
    });
    click = [];
    click.push(Calculator.prototype.unrestricted);
    click.push(Calculator.prototype.client_company);
    click.push(Calculator.prototype.owner_company);
    click.push(Calculator.prototype.trailer);
    $form.on('click', click.toString(), function(e) {
      var calc;
      showHideFields();
      calc = new Calculator();
      calc.updateCoef();
      return calc.setTotal();
    });
    $("#client\\[full_address\\], #full_address").suggestions({
      serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
      token: "7b339fa051b05aad53ce755c7371711305842762",
      type: "ADDRESS",
      count: 10,
      onSelect: function(suggestion) {
        var calc;
        $(this).prev().val(JSON.stringify(suggestion.data));
        calc = new Calculator();
        calc.updateCoef();
        return calc.setTotal();
      }
    });
    DriverDataService = (function() {
      function DriverDataService() {}

      DriverDataService.prototype.client_last_name = '#client\\[last_name\\]';

      DriverDataService.prototype.client_first_name = '#client\\[first_name\\]';

      DriverDataService.prototype.client_middle_name = '#client\\[middle_name\\]';

      DriverDataService.prototype.client_date_birth = '#client\\[date_birth\\]';

      DriverDataService.prototype.owner_last_name = '#last_name';

      DriverDataService.prototype.owner_first_name = '#first_name';

      DriverDataService.prototype.owner_middle_name = '#middle_name';

      DriverDataService.prototype.owner_date_birth = '#date_birth';

      DriverDataService.prototype.getClientName = function() {
        if ($(this.client_last_name).val()) {
          return $(this.client_last_name).val() + ' ' + $(this.client_first_name).val() + ' ' + $(this.client_middle_name).val();
        }
      };

      DriverDataService.prototype.getOwnerName = function() {
        if ($(this.owner_last_name).val()) {
          return $(this.owner_last_name).val() + ' ' + $(this.owner_first_name).val() + ' ' + $(this.owner_middle_name).val();
        }
      };

      DriverDataService.prototype.setDriverName = function(idx, value) {
        if (value !== void 0) {
          return $('#drivers\\[' + idx + '\\]\\[name\\]').val(value).trigger('change');
        }
      };

      DriverDataService.prototype.setDriverDateBirth = function(idx, value) {
        if (value !== void 0) {
          return $('#drivers\\[' + idx + '\\]\\[date_birth\\]').val(value);
        }
      };

      DriverDataService.prototype.updateDrivers = function() {
        this.setDriverName(0, this.getClientName());
        if (!$('#same_client_owner').prop('checked')) {
          this.setDriverName(1, this.getOwnerName());
        }
        this.setDriverDateBirth(0, $(this.client_date_birth).val());
        if (!$('#same_client_owner').prop('checked')) {
          return this.setDriverDateBirth(1, $(this.owner_date_birth).val());
        }
      };

      return DriverDataService;

    })();
    $form.on('click', '#driver_client_owner', function(e) {
      if ($(e.currentTarget).prop('checked')) {
        return new DriverDataService().updateDrivers();
      }
    });
    $('.date-mask').mask('99.99.9999', {
      placeholder: 'дд.мм.гггг'
    });
    $('.phone-mask').mask('999-999-9999');
    $('.year-mask').mask('9999');
    $('.coef-mask').mask('9.99');
    updateVehicleData = function(vehicle) {
      $('#vehicle\\[type\\]').select2().val(vehicle.type).trigger('change');
      $('#vehicle\\[make\\]').val(vehicle.make);
      $('#vehicle\\[model\\]').val(vehicle.model);
      $('#vehicle\\[year\\]').val(vehicle.year);
      $('#vehicle\\[power\\]').val(vehicle.power);
      $('#vehicle\\[trailer\\]').val(vehicle.trailer);
      $('#vehicle\\[sign\\]').val(vehicle.sign);
      $('#vehicle\\[vin\\]').val(vehicle.vin);
      $('#vehicle\\[document_name\\]').select2().val(vehicle.document_name).trigger('change');
      $('#vehicle\\[document_serial\\]').val(vehicle.document_serial);
      $('#vehicle\\[document_number\\]').val(vehicle.document_number);
      $('#vehicle\\[dk_number\\]').val(vehicle.dk_number);
      return $('#vehicle\\[dk_date\\]').val(vehicle.dk_date);
    };
    clearVehicleData = function() {
      return updateVehicleData({
        type: '',
        make: '',
        model: '',
        year: '',
        power: '',
        trailer: '',
        sign: '',
        vin: '',
        document_name: '[]',
        document_serial: '',
        document_number: '',
        dk_number: '',
        dk_date: ''
      });
    };
    $('#add_vehicle').on('click', function(e) {
      $('#vehicle_selector').select2().val('').trigger('change');
      return clearVehicleData();
    });
    $('#vehicle_selector').on('select2:unselect', function(e) {
      $('#vehicle_selector').select2().val('').trigger('change');
      return clearVehicleData();
    });
    $('#vehicle_selector').on('select2:select', function(e) {
      return updateVehicleData($(e.target).find(':selected').data('json'));
    });
    clearDriverData = function(index) {
      $('#drivers\\[' + index + '\\]\\[id\\]').val('');
      $('#drivers\\[' + index + '\\]\\[name\\]').val('');
      $('#drivers\\[' + index + '\\]\\[date_birth\\]').val('');
      $('#drivers\\[' + index + '\\]\\[kbm\\]').val('');
      $('#drivers\\[' + index + '\\]\\[exp\\]').val('');
      return $('#drivers\\[' + index + '\\]\\[driver_license\\]').val('');
    };
    $('.driver-clear').on('click', function() {
      return clearDriverData($(this).data('driver-index'));
    });
    $('#date_from').on('change', function() {
      var m;
      m = moment($(this).val(), 'DD.MM.YYYY');
      if (m.isSame(moment().add(1, 'd'), 'd')) {
        $('#time_from').val('09:00');
      } else if (m.isAfter(moment().add(1, 'd'), 'd')) {
        $('#time_from').val('00:00');
      } else {
        $('#time_from').val(moment().add(1, 'h').format('HH') + ':00');
      }
      return $('#date_to').val(m.add(364, 'd').format('DD.MM.YYYY'));
    });
    $('#client\\[last_name\\],#client\\[first_name\\],#client\\[middle_name\\],#last_name,#first_name,#middle_name').on('blur', function() {
      var val;
      val = $(this).val();
      return $(this).val(function() {
        return val.ucfirst();
      });
    });
    $('.driver_name').on('blur', function() {
      var val;
      val = $(this).val();
      return $(this).val(function() {
        return val.ucwords();
      });
    });
    $(document).on('keyup keypress', 'form input[type="text"]', function(e) {
      if (e.keyCode === 13) {
        e.preventDefault();
        return false;
      }
    });
    return false;
  });

}).call(this);

//# sourceMappingURL=policies.js.map
