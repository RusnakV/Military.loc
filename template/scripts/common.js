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
    // Modal toggle
    $('.modal').modal();
    // Delete weapon
    $(".delete-weapon").click(function () {
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
        })
    });
});