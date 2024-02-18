$(document).ready(function(){
    $('#roomtype').change(function(){
        var id = $(this).val();
        if(id){
            $.ajax({
                url: '/get-subroomtype/'+id,
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    $('#subroomtype').empty();
                    $('#subroomtype').append(' <option value="">กรุณาเลือกห้อง</option>');
                    $.each(data, function(index, subroomtype){
                    $('#subroomtype').append('<option value="'+ subroomtype.id +'">'+ subroomtype.room_subtype_name +' หมายเลขห้อง '+subroomtype.room_number+'</option>');
                });
                }
            });
        } else {
            $('#subroomtype').empty();
        }
    });
});