function init(title) {
    //
    $('.sidebar-menu').tree();
    //
    $("#msg-alert").fadeTo(2000, 500).slideUp(500, function () {
        $("#msg-alert").slideUp(1000);
    });
    //
    $('.openBtn').on('click', function () {
        $('#loader').show();
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL, function () {
            $('#mod-title').html(title);
            $('#openModal').modal({
                show: true
            });
            $('#loader').hide();
        });
    });
}

function admission_init() 
{
    //Initialize Select2 Elements
    $('.select2').select2();

    //Date picker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "dd-mm-yyyy",
        todayHighlight: true,
        todayBtn: true,
        clearBtn: true,
    });

    //Timepicker
    $('.timepicker').timepicker({
        showInputs: true
    });

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td><div class="form-group has-feedback"><input type="text" class="form-control datepicker_start" name="emi_duedate[]" autocomplete="emi_duedate[]"  placeholder="Enter EMI Pay Date" required /><div class="help-block with-errors"></div></div></td>';
        cols += '<td><div class="form-group has-feedback"><input type="text" class="form-control" name="emi_amount[]" autocomplete="emi_amount[]"  placeholder="Enter EMI Amount" required /><div class="help-block with-errors"></div></div></td>';
        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger" value="x"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
    });

    $('body').on('focus', ".datepicker_start", function () {
        $(this).datepicker({
            autoclose: true,
            format: "dd-mm-yyyy",
            todayHighlight: true
        });
    });

    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        //counter -= 1
    });

}

function calc_total(){
    var fees  = parseInt($("input[name=course_fee]").val());
    var adv   = parseInt($("input[name=course_advance]").val());    
    if(fees!='NaN'){
        $('#cfee').html(fees+'/-');
        $('#ctotal').html(fees+'/-');
    }
    if(fees!='NaN' && adv!='NaN'){
        $('#cadv').html(adv+'/-');
        
        var due = fees-adv;
        $('#cdue').html(due+'/-');
    }
}


function mode_select(val) {
    if (val === 'pay_emi') {
        $('#emi_due_init').prop('required', true);
        $('#emi_amount_init').prop('required', true);
        $('#emi_section').show(500);
    } else {
        $('#emi_section').hide();
    }
}

function inquiry_init(){
        //Initialize Select2 Elements
        $('.select2').select2();

        //Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: "dd-mm-yyyy",
            todayHighlight: true,
            todayBtn: true,
            clearBtn: true,
        });

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: true
        });
}