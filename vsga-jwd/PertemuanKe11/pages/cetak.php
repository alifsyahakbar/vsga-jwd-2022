<div>
    <img src="../images/gambar.jpeg" class="image" style="width: 200px;">
    <button class="btn btn-primary" id="klik">Cetak</button>
</div>


<script>
    const klik = document.querySelector('#klik');
    const image = document.querySelector('.image');

    klik.addEventListener('click', function(e) {
        window.print();
    });
</script>