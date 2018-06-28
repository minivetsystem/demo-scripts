$(document).ready(function () {

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: moment(new Date()).format("YYYY-MM-DD"),
        editable: false,
        defaultView: 'agendaWeek',
        eventLimit: true, // allow "more" link when too many events
        eventSources: [

            // your event source
            {
                url: full_path + 'get-work-list',
                type: 'GET',
                error: function () {
                    console.log('there was an error while fetching events!');
                }
            }

            // any other sources...

        ],
        eventClick: function (calEvent, jsEvent, view) {
            openEditEvent(calEvent);
        }
    });


    $(document).on('submit', "#work_add_form", function (e) {
        e.preventDefault();
        loader_start();
        $.post($(this).attr('action'), $(this).serialize(), function (resp) {
            loader_stop();
            $('.form-group').removeClass('has-error');
            $('.help-block').html('');
            if (resp.type == "success") {

                $('#calendar').fullCalendar('refetchEvents');
                $("#site_modal").modal('hide');
                $("#site_modal").html('');

                alert(resp.message);
            } else {
                $.each(resp.errors, function (ind, elem) {
                    $("#" + ind).closest('.form-group').addClass('has-error');
                    $("#" + ind).closest('.form-group').find('.help-block').html(elem);
                })
            }

        }, 'json');
    })

});

function openEditEvent(event) {
    loader_start();
    $.get(full_path + "get-edit-form", {
        id: event.id
    }, function (resp) {

        loader_stop();
        if (resp.type == "success") {
            $("#site_modal").html(resp.html);
            $("#site_modal").modal('show');
        } else {
            console.log(resp.message);
        }

    }, 'json');
}

function getAddCalender() {
    loader_start();
    $.get(full_path + "get-add-form", {}, function (resp) {
        $("#site_modal").html(resp.html);
        loader_stop();
        $("#site_modal").modal('show');
        init_plugins();

    }, 'json');
}

function loader_start() {
    if (jQuery('body').find('#resultLoading').attr('id') != 'resultLoading') {
        jQuery('body').append('<div id="resultLoading" style="display:none"><div><i style="font-size: 46px;color: #826BE6" class="fa fa-spinner fa-spin fa-3x fa-fw" aria-hidden="true"></i></div><div class="bg"></div></div>');
    }

    jQuery('#resultLoading').css({
        'width': '100%',
        'height': '100%',
        'position': 'fixed',
        'z-index': '10000000',
        'top': '0',
        'left': '0',
        'right': '0',
        'bottom': '0',
        'margin': 'auto'
    });

    jQuery('#resultLoading .bg').css({
        'background': '#ffffff',
        'opacity': '0.8',
        'width': '100%',
        'height': '100%',
        'position': 'absolute',
        'top': '0'
    });

    jQuery('#resultLoading>div:first').css({
        'width': '250px',
        'height': '75px',
        'text-align': 'center',
        'position': 'fixed',
        'top': '0',
        'left': '0',
        'right': '0',
        'bottom': '0',
        'margin': 'auto',
        'font-size': '16px',
        'z-index': '10',
        'color': '#ffffff'

    });

    jQuery('#resultLoading .bg').height('100%');
    jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}

function loader_stop() {
    jQuery('#resultLoading .bg').height('100%');
    jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}

function init_plugins() {
    $('.datepicker').datetimepicker({
        timepicker: false,
        format: 'Y-m-d',
        minDate: moment(new Date()).format("YYYY-MM-DD"),//yesterday is minimum date(for today use 0 or -1970/01/01)

    });

    $('.timepicker').datetimepicker({
        datepicker: false,
        format: 'H:i',
        step: 30

    });
}

function changeStatus(obj) {
    var r = confirm("Are you sure you want change work status ?");
    if (r == true) {
        loader_start();
        $.get(full_path + "change-work-status", {
            id: $(obj).attr('data-id')
        }, function (resp) {

            loader_stop();
            if (resp.type == "success") {
                $('#calendar').fullCalendar('refetchEvents');
                $(obj).closest('td').html(resp.html);
            } else {

            }

        }, 'json');
    }
}