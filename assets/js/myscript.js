const flashData = $('.flash-data').data('flashdata');

if(flashData) {
    Swal.fire({
        title:'Data Berhasil' ,
        text:''+ flashData,
        type: 'success'
    });
}
