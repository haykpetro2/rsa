$ ->
  showHideFields = () ->
    if $('#client_is_company').prop('checked')
      $('.client-is-company').show()
      $('.client-not-company').hide()
      $('#owner_company').prop('checked',true);
      $('#unrestricted').prop('checked',true);
    else
      $('.client-is-company').hide()
      $('.client-not-company').show()

    if $('#owner_company').prop('checked')
      $('.owner-is-company').show()
      $('.owner-not-company').hide()
      $('#unrestricted').prop('checked',true);
    else
      $('.owner-is-company').hide()
      $('.owner-not-company').show()

    if $('#same_client_owner').prop('checked')
      $('#owner_fields').hide()
    else
      $('#owner_fields').show()

    if $('#unrestricted').prop('checked')
      $('#drivers_fields').hide()
    else
      $('#drivers_fields').show()

  $('#same_client_owner').on 'click', (e) ->
    showHideFields()

  showHideFields()

  class Calculator
    drivers: '.driver_kbm'
    driver_type: '#driver_type'
    vehicle_hp: '#vehicle\\[power\\]'
    vehicle_type: '#vehicle\\[type\\]'
    vehicle_base: '#vehicle\\[base\\]'
    client_address: '#client\\[full_address_json\\]'
    owner_address: '#full_address_json'
    unrestricted: '#unrestricted'
    client_company: '#client_is_company'
    owner_company: '#owner_company'
    trailer: '#vehicle\\[trailer\\]'
    base: '#p_base'
    k1: '#p_k1' #address
    k2: '#p_k2' #kbm or unrestricted
    k3: '#p_k3' #unrestricted
    k4: '#p_k4' #driver_type
    k5: '#p_k5'
    k6: '#p_k6'
    k7: '#p_k7' #vehicle_hp
    k8: '#p_k8'
    total: '#p_total'

    updateCoef: ->
      base = parseFloat $(@base).val()
      val = parseFloat $(@vehicle_base).find(':selected').val()
      base = val if !isNaN(val) && val > 0
      if ($(@owner_company).prop('checked') || $(@client_company).prop('checked')) && $(@vehicle_type).val() == '1'
        base = 3087.00;

      $(@base).val base.toFixed(2)

      k2 = 0.0
      k3 = 1.0
      k4 = 1.0
      if $(@unrestricted).prop('checked')
        k2 = 1.0
        k3 = 1.8
        k4 = 1.0
      else
        val = parseFloat $(@driver_type).find(':selected').val()
        if !isNaN(val) && val > 0
          k4 = val
        $(@drivers).each (idx, element) =>
          val = parseFloat($(element).val())
          if !isNaN(val) && val > 0 && k2 < val
            k2 = val
          return;

      $(@k2).val k2.toFixed(2)
      $(@k3).val k3.toFixed(2)
      $(@k4).val k4.toFixed(2)

      vhp = parseFloat $(@vehicle_hp).val()
      type = parseInt $(@vehicle_type).find(':selected').val()
      k7 = 1.0
      if(type == 1 or type == 2)
        k7 = switch
          when vhp <= 50 then 0.6
          when vhp > 50 and vhp <= 70 then 1.0
          when vhp > 70 and vhp <= 100 then 1.1
          when vhp > 100 and vhp <= 120 then 1.2
          when vhp > 120 and vhp <= 150 then 1.4
          when vhp > 150 then 1.6
          else 1.0

      if $(@trailer).prop('checked')
        k7 = 1.4 if type == 6
        k7 = 1.25 if type == 7

      $(@k7).val k7.toFixed(2)

      json = if $(@owner_address).val().length > 0 then $(@owner_address).val() else $(@client_address).val()
      k1 = 1.0

      if json
        data = $.parseJSON(json)
        k1 = switch
          #Краснодарский край
          when data.city_fias_id == 'eeb7a0a7-3bbf-4f00-8a03-a7eabc257bed' then 1.3
          when data.city_fias_id == 'e157b9c0-f908-48bc-a1d7-39c482a501a5' then 1.3
          when data.city_fias_id == 'fc9c55d0-c66e-455e-8034-b0944b025c38' then 1.2
          when data.city_fias_id == '79da737a-603b-4c19-9b54-9114c96fb912' then 1.2
          when data.city_fias_id == 'd0e68eaf-5ea0-4e65-81b6-b6f55c4df6f5' then 1.2
          when data.city_fias_id == 'ce9dccce-d0a3-49c4-a934-3f8de7fbed2a' then 1.1
          when data.city_fias_id == 'd22840fe-89f7-4f1a-8591-c51b87a7aec2' then 1.1
          when data.city_fias_id == 'a4f6512e-2ee9-4250-b241-b58504a886b4' then 1.1
          when data.city_fias_id == 'ae6c6804-3c18-4337-bb6e-7479a8cb64f6' then 1.1
          when data.city_fias_id == '2c58f372-aac8-4645-b41a-f39bdffef373' then 1.1
          when data.city_fias_id == '0ec1acd4-d7bb-49f7-87c2-d66edb24f587' then 1.1
          when data.city_fias_id == '06e2b3b8-c02c-4722-887f-168236ae5382' then 1.1
          when data.city_fias_id == 'f09d518d-5617-476f-8c76-877899375202' then 1.1
          when data.city_fias_id == '1d3511c8-b1dc-49c5-b5fb-3533ed4ce3c4' then 1.1
          when data.city_fias_id == '7dfa745e-aa19-4688-b121-b655c11e482f' then 1.8
          when data.city_fias_id == '16ac039a-5257-4715-a8c5-d6bd9e617b53' then 1.8
          #Ростовская область
          when data.city_fias_id == 'a216cad5-7027-40b8-b1a1-d64abefbd5cd' then 1.2
          when data.city_fias_id == '3809afb6-fdfd-4115-9e55-236abf108c81' then 1.3
          when data.city_fias_id == 'c1cfe4b9-f7c2-423c-abfa-6ed1c05a15c5' then 1.8
          when data.city_fias_id == 'dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74' then 1.1
          when data.city_fias_id == '1a453dcd-8885-4999-923b-1bbaa5a1cec4' then 1.0
          when data.city_fias_id == 'eef55456-4d89-4620-b361-d620221ad3a7' then 1.0
          when data.city_fias_id == '76cb0cf6-49a5-4852-b45d-99e4ce12a7ea' then 1.0
          when data.city_fias_id == '28bafcb3-92b2-445b-9443-a341be73fdb9' then 1.0
          when data.city_fias_id == 'bce1a4f2-7576-4427-8bd8-8d8b4e35ad11' then 1.0
          when data.city_fias_id == '971ba684-f38b-4229-ba72-0d6fe8e179c4' then 1.0
          when data.city_fias_id == 'd72c95ed-9fdd-4f27-b94f-898fc3f1177d' then 1.0
          when data.region_fias_id == 'f10763dc-63e3-48db-83e1-9c566fe3092b' then 0.8 #Ростовская область
          when data.region_fias_id == 'd8327a56-80de-4df2-815c-4f6ab1224c50' then 1.3 #Адыгея
          else 1.0
        $(@k1).val k1.toFixed(2)

    getTotal: ->
      ($(@base).val() * $(@k1).val() * $(@k2).val() * $(@k3).val() * $(@k4).val() * $(@k5).val() * $(@k6).val() * $(@k7).val()* $(@k8).val()).toFixed(2)
    setTotal: ->
      $(@total).val(@getTotal())

  $form = $('form.simple_form')
  change = []
  change.push Calculator::vehicle_base
  change.push Calculator::driver_type
  $form.on 'change', change.toString(), (e) ->
    $(this).trigger 'halk:update:calc'

  $form.on 'change', Calculator::vehicle_type, (e) ->
    $base_select = $(Calculator::vehicle_base)
    $base_select.empty()
    for key,val of $(e.target).find(':selected').data('base').split '|'
      $base_select.append $('<option>', {value: val, text: val})
    $base_select.trigger('change')
    $(this).trigger 'halk:update:calc'

  keyup = []
  keyup.push Calculator::drivers
  keyup.push Calculator::vehicle_hp
  keyup.push Calculator::base
  $form.on 'keyup', keyup.toString(), (e) ->
    $(this).trigger 'halk:update:calc'

  $(document).on 'halk:update:calc', 'form.simple_form', (e) ->
    calc = new Calculator()
    calc.updateCoef()
    calc.setTotal()

  change = []
  change.push Calculator::base
  change.push Calculator::k1
  change.push Calculator::k2
  change.push Calculator::k3
  change.push Calculator::k4
  change.push Calculator::k5
  change.push Calculator::k6
  change.push Calculator::k7
  change.push Calculator::k8

  $form.on 'keyup', change.toString(), (e) ->
    $(this).trigger 'halk:recalc:calc'

  $(document).on 'halk:recalc:calc', 'form.simple_form', (e) ->
    new Calculator().setTotal()

  click = []
  click.push Calculator::unrestricted
  click.push Calculator::client_company
  click.push Calculator::owner_company
  click.push Calculator::trailer

  $form.on 'click', click.toString(), (e) ->
    showHideFields()
    calc = new Calculator()
    calc.updateCoef()
    calc.setTotal()


  $("#client\\[full_address\\], #full_address").suggestions
    serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs"
    token: "7b339fa051b05aad53ce755c7371711305842762"
    type: "ADDRESS"
    count: 10
    onSelect:(suggestion) ->
      $(@).prev().val JSON.stringify(suggestion.data)
      calc = new Calculator()
      calc.updateCoef()
      calc.setTotal()

  #calc = new Calculator()
  #calc.setTotal()


  class DriverDataService
    client_last_name: '#client\\[last_name\\]'
    client_first_name: '#client\\[first_name\\]'
    client_middle_name: '#client\\[middle_name\\]'
    client_date_birth: '#client\\[date_birth\\]'
    owner_last_name: '#last_name'
    owner_first_name: '#first_name'
    owner_middle_name: '#middle_name'
    owner_date_birth: '#date_birth'
    getClientName: ->
      $(@client_last_name).val() + ' ' + $(@client_first_name).val() + ' ' + $(@client_middle_name).val() if $(@client_last_name).val()
    getOwnerName: ->
      $(@owner_last_name).val() + ' ' + $(@owner_first_name).val() + ' ' + $(@owner_middle_name).val() if $(@owner_last_name).val()
    setDriverName: (idx, value) ->
      $('#drivers\\['+idx+'\\]\\[name\\]').val(value).trigger('change') if value != undefined
    setDriverDateBirth: (idx, value) ->
      $('#drivers\\['+idx+'\\]\\[date_birth\\]').val(value) if value != undefined
    updateDrivers: ->
      @.setDriverName(0, @.getClientName())
      @.setDriverName(1, @.getOwnerName()) unless $('#same_client_owner').prop('checked')
      @.setDriverDateBirth(0, $(@client_date_birth).val())
      @.setDriverDateBirth(1, $(@owner_date_birth).val()) unless $('#same_client_owner').prop('checked')

  $form.on 'click', '#driver_client_owner', (e) ->
    new DriverDataService().updateDrivers() if $(e.currentTarget).prop('checked')

  $('.date-mask').mask '99.99.9999',
    placeholder: 'дд.мм.гггг'
  $('.phone-mask').mask '999-999-9999'
  $('.year-mask').mask '9999'
  #$('.sign-mask').mask 'a999aa99?9'
  #$('.dl-mask').mask '**** 999999'
  $('.coef-mask').mask '9.99'


  updateVehicleData = (vehicle) ->
    $('#vehicle\\[type\\]').select2().val(vehicle.type).trigger('change')
    $('#vehicle\\[make\\]').val vehicle.make
    $('#vehicle\\[model\\]').val vehicle.model
    $('#vehicle\\[year\\]').val vehicle.year
    $('#vehicle\\[power\\]').val vehicle.power
    $('#vehicle\\[trailer\\]').val vehicle.trailer
    $('#vehicle\\[sign\\]').val vehicle.sign
    $('#vehicle\\[vin\\]').val vehicle.vin
    $('#vehicle\\[document_name\\]').select2().val(vehicle.document_name).trigger('change')
    $('#vehicle\\[document_serial\\]').val vehicle.document_serial
    $('#vehicle\\[document_number\\]').val vehicle.document_number
    $('#vehicle\\[dk_number\\]').val vehicle.dk_number
    $('#vehicle\\[dk_date\\]').val vehicle.dk_date

  clearVehicleData = () ->
    updateVehicleData
      type:''
      make:''
      model:''
      year:''
      power:''
      trailer:''
      sign:''
      vin:''
      document_name:'[]'
      document_serial:''
      document_number:''
      dk_number:''
      dk_date:''

  $('#add_vehicle').on 'click', (e) ->
    $('#vehicle_selector').select2().val('').trigger('change')
    clearVehicleData()

  $('#vehicle_selector').on 'select2:unselect', (e) ->
    $('#vehicle_selector').select2().val('').trigger('change')
    clearVehicleData()

  $('#vehicle_selector').on 'select2:select', (e) ->
    updateVehicleData($(e.target).find(':selected').data('json'))

  clearDriverData = (index) ->
    $('#drivers\\['+index+'\\]\\[id\\]').val ''
    $('#drivers\\['+index+'\\]\\[name\\]').val ''
    $('#drivers\\['+index+'\\]\\[date_birth\\]').val ''
    $('#drivers\\['+index+'\\]\\[kbm\\]').val ''
    $('#drivers\\['+index+'\\]\\[exp\\]').val ''
    $('#drivers\\['+index+'\\]\\[driver_license\\]').val ''

  $('.driver-clear').on 'click', () ->
    clearDriverData $(@).data('driver-index')

  $('#date_from').on 'change', () ->
    m = moment $(@).val(), 'DD.MM.YYYY'
    if m.isSame(moment().add(1,'d'), 'd')
      $('#time_from').val '09:00'
    else if m.isAfter(moment().add(1,'d'), 'd')
      $('#time_from').val '00:00'
    else
      $('#time_from').val moment().add(1,'h').format('HH')+':00'
    $('#date_to').val m.add(364,'d').format('DD.MM.YYYY')

  $('#client\\[last_name\\],#client\\[first_name\\],#client\\[middle_name\\],#last_name,#first_name,#middle_name').on 'blur', () ->
    val = $(@).val()
    $(@).val () ->
      val.ucfirst()

  $('.driver_name').on 'blur', () ->
    val = $(@).val()
    $(@).val () ->
      val.ucwords()

  $(document).on 'keyup keypress', 'form input[type="text"]', (e) ->
    if(e.keyCode == 13)
      e.preventDefault()
      false;
  false


