
    showProjectCounT()
    showProjectCount()
    showPersonCount()
    showTimeCount()

const url= "http://172.21.64.115/DashboardProject/test/test2";
function showProjectCount() {

    $.ajax({
        url: base_url('Dashboard/showProjectcount'),
        type:'GET',
        data:{
            format:'json'
        },
        dataType:'json',
        success: function(data){
            console.log(data);
            let Count = $('<h4 class="my-1 text-info txt-b">').text(data[0].cnt_project);
            $('#sumProject')
                .append(Count);
        },
        // error(){
        //     $('#sumProject').html('Error');
        // },
        
    });
}
function showProjectCounT() {

    $.ajax({
        url: base_url('Dashboard/showProjectcount'),
        type:'GET',
        data:{
            format:'json'
        },
        dataType:'json',
        success: function(data){
            console.log(data);
            let Count = $('<h4 class="txt-b">').text(data[0].cnt_project);
            $('#sumProjecT')
                .append(Count);
        },
    });
}
function showProjectCount2() {

    $.ajax({
        url: base_url('Dashboard/showProjectcount'),
        type:'GET',
        data:{
            format:'json'
        },
        dataType:'json',
        success: function(data){
            console.log(data);
            let Count = $('<h4 class="my-1 text-info txt-b">').text(data[0].cnt_project);
            $('#sumProject2')
                .append(Count);
        },
        // error(){
        //     $('#sumProject').html('Error');
        // },
        
    });
}

function showPersonCount() {

    $.ajax({
        url: base_url('Dashboard/showPersoncount'),
        type:'GET',
        data:{
            format:'json'
        },
        dataType:'json',
        success: function(data){
            console.log(data);
            let Count = $('<h4 class="my-1 text-danger txt-b">').text(data[0].cnt_person);
            $('#sumPerson')
                .append(Count);
        },
        // error(){
        //     $('#sumProject').html('Error');
        // },
        
    });
}
function showTimeCount() {
    $.ajax({
        url: base_url('Dashboard/showTimecount_hour'),
        type:'GET',
       data:{
             format:'json'
         },
         dataType:'json',
        success: function(data){
             let Count = $('<h4 class="my-1 text-success txt-b">').text(data[0].time_hour);
             let CountSet = Count
           $('#sumTime')
                 .append(CountSet);
        },
     error(){
             $('#sumProject').html('Error');
         },
    
    });
}
// function showTimeCount() {
//     $.ajax({
//         url: base_url("Dashboard/callApi?url="+url),
//         type:'GET',
//         // data:{
//         //     format:'json'
//         // },
//         // dataType:'json',
//         success: function(data){
//             alert(data);
//             // let Count = $('<h4 class="my-1 text-success txt-b">').text(data[0].time_hour);
//             // let CountSet = Count
//             // $('#sumTime')
//             //     .append(CountSet);
//         },
//         // error(){
//         //     $('#sumProject').html('Error');
//         // },
        
//     });
// }