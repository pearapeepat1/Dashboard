$('#btnSub').click(() =>{
    $.ajax({
        url: base_url('Dashboard/showProjectcount'),
        data:{
            format:'json'
        },
        error(){
            $('#sumProject').html('Error');
        },
        dataType:'jsonp',
        success(data){
            let Count = $('<h1>').text(data.cnt_project[0]);
            $('#sumProject')
                .append(Count);
        },
        type:'GET'
    });
} )

