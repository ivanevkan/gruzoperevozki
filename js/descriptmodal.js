$(document).ready(function(){
    $('#discrip').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var descript = button.data('descript');
        var modal = $(this);
        modal.find('.modal-body').text(descript);
    })
});