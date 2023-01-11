
function js_normalisasi() {
    var dataSet = [
        ['Eka', 0.272165527, 0.176776695, 0.23570226, 0.377964473],
        ['Yasmin', 0.272165527, 0.353553391, 0.353553391, 0.377964473],
        ['Andika', 0.40824829, 0.530330086, 0.471404521, 0.377964473],
        ['Farhan', 0.544331054, 0.530330086, 0.353553391, 0.125988158],
        ['Dewi', 0.272165527, 0.353553391, 0.353553391, 0.377964473],
        ['Sagi', 0.544331054, 0.353553391, 0.471404521, 0.629940788],
        ['Yudo', 0.136082763, 0.176776695, 0.353553391, 0.125988158],
    ];

    $(document).ready(function () {
        $('#tabel_normalisasi').DataTable({
            paging: false,
            searching: false,
            // ordering: false,
            data: dataSet,
            columns: [
                { title: 'Nama' },
                { title: 'Sekolah' },
                { title: 'Tanggungan' },
                { title: 'Penghasilan' },
                { title: 'Status' },
            ],
        });
    });
}

function js_terbobot() {
    var dataSet1 = [
        ['Eka', 0.027216553, 0.035355339, 0.094280904, 0.113389342],
        ['Yasmin', 0.027216553, 0.070710678, 0.141421356, 0.113389342],
        ['Andika', 0.040824829, 0.106066017, 0.188561808, 0.113389342],
        ['Farhan', 0.054433105, 0.106066017, 0.141421356, 0.037796447],
        ['Dewi', 0.027216553, 0.070710678, 0.141421356, 0.113389342],
        ['Sagi', 0.054433105, 0.070710678, 0.188561808, 0.188982237],
        ['Yudo', 0.013608276, 0.035355339, 0.141421356, 0.037796447],
    ];

    $(document).ready(function () {
        $('#tabel_terbobot').DataTable({
            paging: false,
            searching: false,
            // ordering: false,
            data: dataSet1,
            columns: [
                { title: 'Nama' },
                { title: 'Sekolah' },
                { title: 'Tanggungan' },
                { title: 'Penghasilan' },
                { title: 'Status' },
            ],
        });
    });
}

function js_ideal1() {
    var dataSet2 = [
        ['Solusi Ideal Positif', 0.054433105, 0.106066017, 0.188561808, 0.188982237],
    ];

    $(document).ready(function () {
        $('#tabel_ideal1').DataTable({
            paging: false,
            searching: false,
            // ordering: false,
            sort: false,
            data: dataSet2,
            columns: [
                { title: ' ' },
                { title: '1' },
                { title: '2' },
                { title: '3' },
                { title: '4' },
            ],
        });
    });
}
0.013608276, 0.035355339, 0.094280904, 0.037796447


function js_ideal2() {
    var dataSet3 = [
        ['Solusi Ideal Positif', 0.013608276, 0.035355339, 0.094280904, 0.037796447],
    ];

    $(document).ready(function () {
        $('#tabel_ideal2').DataTable({
            paging: false,
            searching: false,
            // ordering: false,
            sort: false,
            data: dataSet3,
            columns: [
                { title: ' ' },
                { title: '1' },
                { title: '2' },
                { title: '3' },
                { title: '4' },
            ],
        });
    });
}

function js_jarak1() {
    var dataSet4 = [
        ['D+1', 0.142632098],
        ['D+2', 0.099635579],
        ['D+3', 0.076808013],
        ['D+4', 0.158364659],
        ['D+5', 0.099635579],
        ['D+6', 0.035355339],
        ['D+7', 0.178174161],
    ];

    $(document).ready(function () {
        $('#tabel_jarak1').DataTable({
            paging: false,
            searching: false,
            // ordering: false,
            data: dataSet4,
            columns: [
                { title: 'D' },
                { title: 'Positif' },
            ],
        });
    });
}

function js_jarak2() {
    var dataSet5 = [
        ['D-1', 0.076808013],
        ['D-2', 0.096807506],
        ['D-3', 0.142632098],
        ['D-4', 0.094280904],
        ['D-5', 0.096807506],
        ['D-6', 0.18617921],
        ['D-7', 0.047140452],
    ];

    $(document).ready(function () {
        $('#tabel_jarak2').DataTable({
            paging: false,
            searching: false,
            // ordering: false,
            data: dataSet5,
            columns: [
                { title: 'D' },
                { title: 'Negatif' },
            ],
        });
    });
}