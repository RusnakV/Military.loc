$(document).ready(function(){
    $('.tabs').tabs();
    $('select').formSelect();
    // Select weapons by bases (AJAX)
    $("#military-weapon-progress").hide();
    $("#select-weapon-by-bases").on('change',function () {
        var base_id = $("#select-weapon-by-bases").val();
        $.ajax({
            url: '../../components/ajax/getWeaponsByBases.php',
            method: 'post',
            data: {base: base_id},
            beforeSend: function () {
                $("#military-weapon-progress").show();
            },
            success: function (data) {
                $("#military-weapon-progress").hide();
                $("#military-bases-weapons").html(data);
            }
        });
    });
    // Select machines by bases (AJAX)
    $("#military-machines-progress").hide();
    $("#select-machines-by-base").on('change',function () {
        var base_id = $("#select-machines-by-base").val();
        $.ajax({
            url: '../../components/ajax/getMachinesByBases.php',
            method: 'post',
            data: {base: base_id},
            beforeSend: function () {
                $("#military-machines-progress").show();
            },
            success: function (data) {
                $("#military-machines-progress").hide();
                $("#military-bases-machines").html(data);
            }
        });
    });
    // Select workers by bases (AJAX)
    $("#military-workers-progress").hide();
    $("#select-workers-by-base").on('change',function () {
        var base_id = $("#select-workers-by-base").val();
        $.ajax({
            url: '../../components/ajax/getWorkersByBases.php',
            method: 'post',
            data: {base: base_id},
            beforeSend: function () {
                $("#military-workers-progress").show();
            },
            success: function (data) {
                $("#military-workers-progress").hide();
                $("#military-bases-workers").html(data);
            }
        });
    });
    // Modal toggle
    $('.modal').modal();
    // Delete weapon
    $(document).on('click','a.delete-weapon',function () {
        var id = $(this).attr("weapon-id");
        var el = $(this).parent().parent();
        $.ajax({
            url: "../../components/ajax/deleteWeapon.php",
            method: "post",
            data: {weapon_id: id},
            dataType: "text",
            success: function () {
                el.fadeOut().remove();
                M.toast({html: '<p class="military-text-red">Зброя була видалена</p>'});
            }
        });
    });

    // Delete machine
    $(document).on('click','a.delete-machine',function () {
        var id = $(this).attr("machine-id");
        var el = $(this).parent().parent();
        $.ajax({
            url: "../../components/ajax/deleteMachine.php",
            method: "post",
            data: {machine_id: id},
            dataType: "text",
            success: function () {
                el.fadeOut().remove();
                M.toast({html: '<p class="military-text-red">Техніка була видалена</p>'});
            }
        });
    });
    // Delete worker
    $(document).on('click','a.delete-worker',function () {
        var id = $(this).attr("worker-id");
        var el = $(this).parent().parent();
        $.ajax({
            url: "../../components/ajax/deleteWorker.php",
            method: "post",
            data: {worker_id: id},
            dataType: "text",
            success: function () {
                el.fadeOut().remove();
                M.toast({html: '<p class="military-text-red">Дані було видалено</p>'});
            }
        });
    });
});