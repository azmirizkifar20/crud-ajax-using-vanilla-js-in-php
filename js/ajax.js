// live search
window.onload = function() {
    document.getElementById('keyword').addEventListener('keyup', searchData);

    function searchData() {
        var keyword = getValue('keyword');
        var url = 'functions/tampilCari.php?keyword=' + keyword;

        ajax('GET', url, function(res) {
            document.getElementById('tampilkan').innerHTML = res;
        });
    }
};

// make an ajax function
function ajax(method, url, callback, data) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url, true);
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            callback(xhr.responseText);
        }
    };

    xhr.send(data);
}

// insert and update button
function buttonAction() {
    var tombol = document.getElementById('button').textContent;

    if (tombol == 'Simpan') {
        insertData();
    } else if (tombol == 'Update') {
        updateData();
    }
}

function showData() {
    var url = 'tampil.php';

    ajax('GET', url, function(res) {
        document.getElementById('tampilkan').innerHTML = res;
    });
}

function insertData() {
    var nama = getValue('nama');
    var jurusan = getValue('jurusan');
    var nim = getValue('nim');
    var kelas = getValue('kelas');
    var alamat = getValue('alamat');

    var url = 'functions/insertData.php';
    var data = `nama=${nama} & jurusan=${jurusan} & nim=${nim} & kelas=${kelas} & alamat=${alamat}`;

    ajax(
        'POST',
        url,
        function(res) {
            changeValue();
            showData();
        },
        data
    );
}

function deleteData(id) {
    var url = 'functions/deleteData.php?id=' + id;

    ajax('GET', url, function(res) {
        showData();
    });
}

function showUpdate(data) {
    // parsing json into object
    data = JSON.parse(data);

    document.getElementById('button').innerText = 'Update';
    changeValue(data.id, data.nama, data.jurusan, data.nim, data.kelas, data.alamat);
}

function updateData() {
    var id = getValue('id');
    var nama = getValue('nama');
    var jurusan = getValue('jurusan');
    var nim = getValue('nim');
    var kelas = getValue('kelas');
    var alamat = getValue('alamat');
    var url = `functions/updateData.php?id=${id}&nama=${nama}&jurusan=${jurusan}
                &nim=${nim}&kelas=${kelas}&alamat=${alamat}`;

    ajax('GET', url, function(res) {
        showData();
        changeValue();
        document.getElementById('button').innerText = 'Simpan';
    });
}

// make a function for change value
function changeValue(id = '', nama = '', jurusan = '', nim = '', kelas = '', alamat = '') {
    document.getElementById('id').value = id;
    document.getElementById('nama').value = nama;
    document.getElementById('jurusan').value = jurusan;
    document.getElementById('nim').value = nim;
    document.getElementById('kelas').value = kelas;
    document.getElementById('alamat').value = alamat;
}

// make a function for get value
function getValue(id) {
    return document.getElementById(id).value;
}
