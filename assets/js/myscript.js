const flashData = $('.flash-data').data('flashdata');
const hapus = $('.tombol-hapus');

if (flashData){

    Swal.fire({
    icon: 'success',
    title: 'Data Mahasiswa',
    text: 'Data Mahasiswa Berhasil  \n'+flashData,
   
  })
}

//hapus
hapus.on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data ?',
        text: "Apakah Data ini akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        position: 'top-end'
        
      }).then((result) => {
        if (result.value) {
            document.location.href = href;


          
        }
      })


})
